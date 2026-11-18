<?php
// หน้าตรวจสอบ: เปิด https://โดเมนของคุณ/api/test.php  — ใช้เสร็จแล้ว "ลบไฟล์นี้ทิ้ง"
header('Content-Type: text/plain; charset=utf-8');
$ok = fn($b) => $b ? '[OK]  ' : '[FAIL]';

echo "PHP version : " . PHP_VERSION . "\n";
echo ($c = function_exists('curl_init')) ? "[OK]   cURL extension\n" : "[--]   ไม่มี cURL (ไม่เป็นไร ระบบจะใช้ file_get_contents แทน)\n";
echo $ok($c || ini_get('allow_url_fopen')) . " allow_url_fopen = " . (ini_get('allow_url_fopen') ? 'On' : 'Off') . ($c ? "" : " (ถ้าไม่มี cURL ต้องเป็น On)") . "\n";
echo $ok(function_exists('mb_substr')) . " mbstring extension\n";
echo $ok(is_file(__DIR__ . '/config.php')) . " api/config.php มีอยู่ (ถ้า FAIL = ยังไม่ได้ copy จาก config.sample.php)\n";
echo $ok(is_file(__DIR__ . '/system_prompt.txt')) . " api/system_prompt.txt มีอยู่\n";

$cfg = is_file(__DIR__ . '/config.php') ? (require __DIR__ . '/config.php') : [];
$key = getenv('GEMINI_API_KEY') ?: ($cfg['api_key'] ?? '');
$model = $cfg['model'] ?? 'gemini-3.8-flash';
$placeholder = $key === '' || strpos($key, 'AIzaSy...') === 0;
echo $ok(!$placeholder) . " ตั้งค่า API key แล้ว" . ($key ? " (ขึ้นต้น " . substr($key, 0, 6) . "…, ยาว " . strlen($key) . " ตัวอักษร)" : "") . "\n";
echo "Model       : $model\n\n";

if ($placeholder || (!function_exists('curl_init') && !ini_get('allow_url_fopen'))) { echo "แก้ข้อ FAIL ด้านบนก่อน แล้วรีเฟรชหน้านี้\n"; exit; }

@set_time_limit(60);
$hdrs   = ['Content-Type: application/json', 'x-goog-api-key: ' . trim($key)];
$level  = $cfg['thinking_level'] ?? 'low';
$models = array_values(array_unique([$model, 'gemini-3.5-flash-lite', 'gemini-3.1-flash-lite', 'gemini-3.5-flash', 'gemini-3.6-flash', 'gemini-3.8-flash']));

echo "ทดสอบทุกรุ่นพร้อมกัน (timeout 15 วินาที, thinkingLevel = $level)\n\n";

function probe_req(string $m, string $level): array {
    $gen  = preg_match('/gemini-([3-9]|\d{2,})/', $m) ? ['thinkingConfig' => ['thinkingLevel' => $level]] : new stdClass;
    $json = json_encode(['contents' => [['role' => 'user', 'parts' => [['text' => 'ตอบสั้นๆ ว่า สวัสดี']]]], 'generationConfig' => $gen]);
    return ['https://generativelanguage.googleapis.com/v1beta/models/' . rawurlencode($m) . ':generateContent', $json];
}
function show(string $m, int $http, string $err, $raw, float $sec): void {
    $j = json_decode((string)$raw, true);
    $detail = $err ?: ($j['error']['message'] ?? trim($j['candidates'][0]['content']['parts'][0]['text'] ?? substr((string)$raw, 0, 200)));
    echo ($http === 200 ? "[OK]   " : "[FAIL] ") . str_pad($m, 22) . " HTTP $http  {$sec}s  " . mb_substr($detail, 0, 140) . "\n";
}

if (function_exists('curl_init')) {
    $mh = curl_multi_init(); $hs = []; $t0 = microtime(true);
    foreach ($models as $m) {
        [$url, $json] = probe_req($m, $level);
        $ch = curl_init($url);
        curl_setopt_array($ch, [CURLOPT_POST => true, CURLOPT_HTTPHEADER => $hdrs, CURLOPT_POSTFIELDS => $json,
            CURLOPT_RETURNTRANSFER => true, CURLOPT_CONNECTTIMEOUT => 8, CURLOPT_TIMEOUT => 15,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4]);
        curl_multi_add_handle($mh, $ch); $hs[$m] = $ch;
    }
    do { $st = curl_multi_exec($mh, $running); if ($running) curl_multi_select($mh, 1); } while ($running && $st === CURLM_OK);
    foreach ($hs as $m => $ch) {
        show($m, (int)curl_getinfo($ch, CURLINFO_HTTP_CODE), curl_error($ch), curl_multi_getcontent($ch), round(curl_getinfo($ch, CURLINFO_TOTAL_TIME), 1));
        curl_multi_remove_handle($mh, $ch); curl_close($ch);
    }
    curl_multi_close($mh);
} else {
    foreach ($models as $m) {
        [$url, $json] = probe_req($m, $level); $t0 = microtime(true); $http = 0; $err = '';
        $ctx = stream_context_create(['http' => ['method' => 'POST', 'header' => implode("\r\n", $hdrs), 'content' => $json, 'timeout' => 15, 'ignore_errors' => true]]);
        $raw = @file_get_contents($url, false, $ctx);
        if (isset($http_response_header[0]) && preg_match('#\s(\d{3})\s#', $http_response_header[0], $mm)) $http = (int)$mm[1];
        if ($raw === false) $err = 'file_get_contents ล้มเหลว';
        show($m, $http, $err, $raw, round(microtime(true) - $t0, 1));
    }
}
echo "\nรุ่นที่ขึ้น [OK] ใช้ได้จริง — ตั้งรุ่นที่เร็วสุดเป็น 'model' และรุ่น OK อื่นเป็น 'fallback_models' ใน config.php\n";