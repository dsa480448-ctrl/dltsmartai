<?php
// คัดลอกไฟล์นี้เป็น config.php แล้วใส่คีย์จริง (ขอคีย์ฟรีที่ https://aistudio.google.com/apikey)
// หรือจะตั้งเป็น environment variable GEMINI_API_KEY แทนก็ได้ (มีลำดับก่อนค่าในไฟล์นี้)
return [
    'api_key'         => 'AQ.Ab8RN6L3u2V3ZkFge4ca6TAjmOxNY5RGkh1di0MOxMVHy1M0Vw',
    'model'           => 'gemini-3.5-flash-lite',
    'fallback_models' => ['gemini-3.1-flash-lite', 'gemini-3.5-flash'],
    'thinking_level'  => 'low',
    'temperature'     => 0.6,  // ใช้เฉพาะรุ่นเก่า (Gemini 3 ไม่รับค่านี้)
    'max_output'      => 2048,
    'thinking_level'  => 'low', // Gemini 3.x: low (เร็ว) | medium | high  (ไม่รองรับ minimal)
    'thinking_budget' => 0,     // ใช้เฉพาะรุ่น 2.5
    'timeout'         => 25,    // วินาที (ฝั่งหน้าเว็บตัดที่ 30 วินาที)
    'rate_limit'      => 20,    // จำนวนข้อความสูงสุดต่อ IP
    'rate_window'     => 60,    // ... ต่อกี่วินาที
];