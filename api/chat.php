<?php
// api/chat.php — พร็อกซีเรียก Gemini (เก็บ API Key ไว้ฝั่งเซิร์ฟเวอร์)
// รับ:  POST JSON {"messages":[{"role":"user|assistant","content":"..."}]}
// ตอบ:  {"reply":"..."}  หรือ  {"error":"..."} พร้อม HTTP status ที่เหมาะสม

@set_time_limit(70); // บน Windows/XAMPP PHP ตัดงานที่เกิน 30 วินาที
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function out(int $code, array $data): void {
    http_response_code($code);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') out(405, ['error' => 'Method not allowed']);

// ---------- โหลดค่าตั้งค่า ----------
$cfg = is_file(__DIR__ . '/config.php') ? (require __DIR__ . '/config.php') : [];
$cfg += [
    'api_key' => '', 'model' => 'gemini-3.5-flash-lite', 'temperature' => 0.6,
    'max_output' => 2048, 'thinking_level' => 'low', 'thinking_budget' => 0, 'timeout' => 10,
    'fallback_models' => ['gemini-3.1-flash-lite', 'gemini-3.5-flash'],
    'rate_limit' => 20, 'rate_window' => 60,
];
$apiKey = getenv('GEMINI_API_KEY') ?: $cfg['api_key'];
if (!$apiKey || strpos($apiKey, 'AIzaSy...') === 0) out(500, ['error' => 'ยังไม่ได้ตั้งค่า API Key']);

// ---------- Rate limit ต่อ IP (ไฟล์ชั่วคราว) ----------
$ip   = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$file = sys_get_temp_dir() . '/dlt_chat_rl_' . md5($ip);
$now  = time();
$fp   = @fopen($file, 'c+');
if ($fp && flock($fp, LOCK_EX)) {
    $hits = array_filter(array_map('intval', explode(',', stream_get_contents($fp) ?: '')),
        fn($t) => $t > $now - (int)$cfg['rate_window']);
    if (count($hits) >= (int)$cfg['rate_limit']) {
        flock($fp, LOCK_UN); fclose($fp);
        out(429, ['error' => 'ส่งข้อความถี่เกินไป กรุณารอสักครู่']);
    }
    $hits[] = $now;
    ftruncate($fp, 0); rewind($fp); fwrite($fp, implode(',', $hits));
    flock($fp, LOCK_UN);
}
if ($fp) fclose($fp);

// ---------- ตรวจและจัดรูปข้อความ ----------
$body = json_decode(file_get_contents('php://input'), true);
$in   = is_array($body['messages'] ?? null) ? array_slice($body['messages'], -12) : [];

$contents = [];
foreach ($in as $m) {
    $text = trim((string)($m['content'] ?? ''));
    if ($text === '') continue;
    $role = (($m['role'] ?? '') === 'assistant') ? 'model' : 'user';
    $text = mb_substr($text, 0, 4000);
    // Gemini ต้องสลับ user/model และเริ่มด้วย user — รวมข้อความ role ซ้ำติดกัน
    if ($contents && end($contents)['role'] === $role) {
        $contents[count($contents) - 1]['parts'][0]['text'] .= "\n" . $text;
    } elseif ($contents || $role === 'user') {
        $contents[] = ['role' => $role, 'parts' => [['text' => $text]]];
    }
}
if (!$contents || end($contents)['role'] !== 'user') out(400, ['error' => 'ไม่พบข้อความ']);

// ---------- เรียก Gemini ----------
$sysText = (string)@file_get_contents(__DIR__ . '/system_prompt.txt');
$hdrs    = ['Content-Type: application/json', 'x-goog-api-key: ' . trim($apiKey)];

// สร้าง payload ให้เหมาะกับรุ่น (Gemini 3+ ไม่รับ temperature และใช้ thinkingLevel)
function build_payload(array $cfg, string $model, string $sysText, array $contents): string {
    $gen = ['maxOutputTokens' => (int)$cfg['max_output']];
    if (preg_match('/gemini-([3-9]|\d{2,})/', $model)) {
        if (!empty($cfg['thinking_level'])) $gen['thinkingConfig'] = ['thinkingLevel' => $cfg['thinking_level']];
    } else {
        $gen['temperature'] = (float)$cfg['temperature'];
        if ($cfg['thinking_budget'] !== null && strpos($model, '2.5') !== false) {
            $gen['thinkingConfig'] = ['thinkingBudget' => (int)$cfg['thinking_budget']];
        }
    }
    return json_encode([
        'systemInstruction' => ['parts' => [['text' => $sysText]]],
        'contents'          => $contents,
        'generationConfig'  => $gen,
    ], JSON_UNESCAPED_UNICODE);
}

// เรียก Gemini หนึ่งครั้ง คืน [raw, httpCode, errorText] — ใช้ cURL ถ้ามี ไม่มีก็ใช้ file_get_contents
function gemini_call(string $model, string $json, array $hdrs, int $timeout): array {
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/' . rawurlencode($model) . ':generateContent';
    $raw = false; $http = 0; $err = '';
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true, CURLOPT_HTTPHEADER => $hdrs, CURLOPT_POSTFIELDS => $json,
            CURLOPT_RETURNTRANSFER => true, CURLOPT_CONNECTTIMEOUT => 6, CURLOPT_TIMEOUT => $timeout,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4, // บังคับ IPv4 กันช้า/ค้างเมื่อ IPv6 ใช้ไม่ได้
        ]);
        $raw = curl_exec($ch); $http = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE); $err = curl_error($ch);
        curl_close($ch);
    } else {
        $ctx = stream_context_create(['http' => [
            'method' => 'POST', 'header' => implode("\r\n", $hdrs), 'content' => $json,
            'timeout' => $timeout, 'ignore_errors' => true,
        ]]);
        $raw = @file_get_contents($url, false, $ctx);
        if (isset($http_response_header[0]) && preg_match('#\s(\d{3})\s#', $http_response_header[0], $m)) $http = (int)$m[1];
        if ($raw === false) $err = 'file_get_contents ล้มเหลว (allow_url_fopen ปิดอยู่หรือโฮสต์บล็อกการเชื่อมต่อออก)';
    }
    return [$raw, $http, $err];
}

// ลำดับการลอง: รุ่นหลัก → ลองซ้ำ 1 ครั้ง → รุ่นสำรอง (เมื่อเจอ 429/5xx หรือเชื่อมต่อไม่ได้)
$models   = array_merge([$cfg['model']], (array)$cfg['fallback_models']);
$retryable = [0, 429, 500, 502, 503, 504];
$raw = false; $http = 0; $cerr = ''; $used = $cfg['model'];
foreach ($models as $i => $model) {
    $json = build_payload($cfg, $model, $sysText, $contents);
    for ($try = 0; $try < ($i === 0 ? 2 : 1); $try++) {
        if ($try > 0) usleep(800000);
        [$raw, $http, $cerr] = gemini_call($model, $json, $hdrs, (int)$cfg['timeout']);
        $used = $model;
        if ($http === 200 || !in_array($http, $retryable, true)) break 2; // สำเร็จ หรือ error ที่ลองใหม่ไม่ช่วย (เช่น 400/403/404)
        error_log('[chat.php] ' . $model . ' HTTP ' . $http . ' ' . $cerr . ' (try ' . ($try + 1) . ')');
    }
}

if ($raw === false) {
    error_log('[chat.php] http: ' . $cerr);
    out(502, ['error' => 'เชื่อมต่อ Gemini ไม่ได้: ' . $cerr]);
}
$res = json_decode($raw, true);
if ($http !== 200) {
    error_log('[chat.php] Gemini(' . $used . ') HTTP ' . $http . ': ' . substr($raw, 0, 500)); // ดูรายละเอียดใน error log เท่านั้น
    out($http === 429 ? 429 : 502, ['error' => 'Gemini ตอบกลับผิดพลาด (' . $http . ')']);
}

$parts = $res['candidates'][0]['content']['parts'] ?? [];
$reply = trim(implode('', array_map(fn($p) => $p['text'] ?? '', $parts)));
if ($reply === '') {
    $why = $res['promptFeedback']['blockReason'] ?? ($res['candidates'][0]['finishReason'] ?? 'empty');
    error_log('[chat.php] empty reply: ' . $why);
    out(502, ['error' => 'ไม่ได้รับคำตอบ (' . $why . ')']);
}
out(200, ['reply' => $reply]);