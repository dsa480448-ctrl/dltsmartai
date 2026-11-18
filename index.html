<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="th" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />
  <title>DLT Smart Assistant</title>
  
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="style.css?v=<?= (int) @filemtime(__DIR__ . '/style.css') ?>">

  <!-- Google Fonts: Kanit & Prompt -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <!-- Marked for Markdown Rendering -->
  <script src="https://cdn.jsdelivr.net/npm/marked@12.0.2/marked.min.js"></script>

  
</head>

<body class="bg-dlt-bgLight text-slate-800 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-300 min-h-screen flex flex-col pb-20 md:pb-0">

  <!-- Top Navigation Bar (Mobile Friendly) -->
  <header class="sticky top-0 z-40 bg-white/95 dark:bg-slate-900/95 border-b border-purple-100 dark:border-slate-800 glass-effect">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 h-14 sm:h-16 flex items-center justify-between">
      <!-- Logo & Brand -->
      <div class="flex items-center gap-2.5">
        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-gradient-to-tr from-dlt-deep via-dlt-purple to-dlt-gold flex items-center justify-center text-white shadow-md shadow-purple-500/20 shrink-0">
          <i class="fa-solid fa-id-card text-base sm:text-lg" data-e="1" style="font-style:normal">🪪</i>
        </div>
        <div>
          <div class="flex items-center gap-1.5">
            <span class="font-bold text-base sm:text-lg text-dlt-purple dark:text-purple-300 tracking-tight">DLT Smart AI</span>
            <span class="text-[9px] uppercase font-bold tracking-wider px-1.5 py-0.5 rounded-full bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-300 border border-amber-300/40">Beta</span>
          </div>
          <p class="text-[11px] text-slate-500 dark:text-slate-400 hidden sm:block">ผู้ช่วยข้อมูลงานขนส่งทางบก</p>
        </div>
      </div>

      <!-- Header Desktop Actions & Mobile Quick Actions -->
      <div class="flex items-center gap-1.5 sm:gap-3">
        <!-- Call Hotline 1584 badge -->
        <a href="tel:1584" class="flex items-center gap-1.5 px-2.5 py-1.5 rounded-full bg-purple-50 dark:bg-purple-950/60 text-dlt-purple dark:text-purple-300 hover:bg-purple-100 text-xs font-semibold border border-purple-200 dark:border-purple-800 transition active:scale-95">
          <i class="fa-solid fa-phone-volume text-amber-500 animate-pulse text-xs" data-e="1" style="font-style:normal">📞</i>
          <span class="text-[11px] sm:text-xs">1584</span>
        </a>

        <!-- Desktop Navigation Tabs (Hidden on mobile, bottom bar handles mobile) -->
        <div class="hidden md:flex items-center gap-1">
          <button onclick="switchView('chat')" id="navChatBtn" class="px-3 py-1.5 rounded-lg text-xs font-medium bg-dlt-purple text-white shadow">
            <i class="fa-solid fa-robot mr-1" data-e="1" style="font-style:normal">🤖</i> แชท AI
          </button>
          <button onclick="switchView('offices')" id="navOfficesBtn" class="px-3 py-1.5 rounded-lg text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800">
            <i class="fa-solid fa-building-columns mr-1" data-e="1" style="font-style:normal">🏛️</i> ที่ตั้งสำนักงานขนส่ง
          </button>
          <button onclick="switchView('clinic')" id="navClinicBtn" class="px-3 py-1.5 rounded-lg text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800">
            <i class="fa-solid fa-user-doctor mr-1" data-e="1" style="font-style:normal">🩺</i> หาใบรับรองแพทย์
          </button>
          <button onclick="switchView('checklist')" id="navChecklistBtn" class="px-3 py-1.5 rounded-lg text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800">
            <i class="fa-solid fa-list-check mr-1" data-e="1" style="font-style:normal">✅</i> เช็คเอกสาร
          </button>
          <button onclick="switchView('guides')" id="navGuidesBtn" class="px-3 py-1.5 rounded-lg text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800">
            <i class="fa-solid fa-book-open mr-1" data-e="1" style="font-style:normal">📖</i> คู่มือบริการ
          </button>
        </div>

        <!-- Dark Mode Toggle -->
        <button onclick="toggleDarkMode()" aria-label="Toggle Theme" class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition active:scale-95">
          <i class="fa-solid fa-moon dark:hidden text-purple-700 text-xs sm:text-sm" data-e="1" style="font-style:normal">🌙</i>
          <i class="fa-solid fa-sun hidden dark:block text-amber-400 text-xs sm:text-sm" data-e="1" style="font-style:normal">☀️</i>
        </button>
      </div>
    </div>
  </header>

  <main class="flex-1 max-w-7xl w-full mx-auto p-3 sm:p-6 lg:p-8 flex flex-col gap-4 sm:gap-6">

    <!-- Compact Mobile Announcement Banner -->
    <div id="heroBanner" class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-dlt-deep via-dlt-purple to-purple-800 text-white p-4 sm:p-6 shadow-md border border-purple-500/20">
      <div class="relative z-10 max-w-3xl">
        <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-amber-400/20 text-amber-300 border border-amber-400/40 text-[11px] font-medium mb-2">
          <i class="fa-solid fa-sparkles text-[10px]" data-e="1" style="font-style:normal">✨</i> AI ผู้ช่วยกรมการขนส่งทางบก 24 ชม.
        </div>
        <h1 class="text-lg sm:text-2xl font-bold tracking-tight mb-1">
          ถามได้ทุกเรื่อง เชี่ยวชาญงานขนส่ง ตอบไว ชัดเจน
        </h1>
        <p class="text-purple-100 text-xs sm:text-sm mb-3 font-light leading-relaxed hidden sm:block">
          สอบถามขั้นตอนทำใบขับขี่, อบรมออนไลน์ e-Learning, ค้นหาคลินิกขอใบรับรองแพทย์, จองคิว Smart Queue และต่อภาษีรถยนต์
        </p>
        
        <!-- Mobile Horizontal Fast Action Buttons -->
        <div class="flex overflow-x-auto no-scrollbar gap-2 text-[11px] pt-1 pb-1 -mx-1 px-1">
          <button onclick="switchView('offices')" class="flex items-center gap-1 px-2.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition shrink-0 active:scale-95">
            <i class="fa-solid fa-building-columns text-amber-300" data-e="1" style="font-style:normal">🏛️</i> ค้นหาสำนักงานขนส่ง & สาขา
          </button>
          <button onclick="switchView('clinic')" class="flex items-center gap-1 px-2.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition shrink-0 active:scale-95">
            <i class="fa-solid fa-hospital-user text-amber-300" data-e="1" style="font-style:normal">🏥</i> ขอใบรับรองแพทย์
          </button>
          <a href="https://www.dlt-elearning.com/" target="_blank" class="flex items-center gap-1 px-2.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition shrink-0 active:scale-95">
            <i class="fa-solid fa-graduation-cap text-amber-300" data-e="1" style="font-style:normal">🎓</i> อบรมออนไลน์
          </a>
          <a href="https://gecc.dlt.go.th/" target="_blank" class="flex items-center gap-1 px-2.5 py-1.5 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition shrink-0 active:scale-95">
            <i class="fa-solid fa-calendar-check text-amber-300" data-e="1" style="font-style:normal">📅</i> จองคิวล่วงหน้า
          </a>
        </div>
      </div>
      <!-- Background Graphic -->
      <div class="absolute -right-6 -bottom-6 w-36 h-36 rounded-full bg-amber-500/10 blur-2xl pointer-events-none"></div>
    </div>

    <!-- VIEW 1: AI Chat View -->
    <section id="view-chat" class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-6 items-start">
      
      <!-- Left Column: Quick Prompts & Service Categories (Collapsible on mobile) -->
      <div class="lg:col-span-4 flex flex-col gap-4 order-2 lg:order-1">
        
        <!-- Popular Service Topics -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200 dark:border-slate-800 shadow-sm">
          <div class="flex items-center justify-between mb-2.5">
            <h3 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-dlt-purple dark:text-purple-400 flex items-center gap-2">
              <i class="fa-solid fa-layer-group" data-e="1" style="font-style:normal">🗂️</i> หมวดหมู่งานบริการ
            </h3>
            <span class="text-[10px] text-slate-400">แตะเพื่อถาม AI</span>
          </div>
          <div class="grid grid-cols-2 gap-2">
            <button onclick="askQuickPrompt('ค้นหาที่ตั้งสำนักงานขนส่งกรุงเทพฯ ทั้ง 5 พื้นที่ และสำนักงานขนส่งจังหวัดใกล้ฉัน')" 
                    class="text-left p-2.5 sm:p-3 rounded-xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/60 hover:bg-purple-50/50 dark:hover:bg-purple-950/30 transition active:scale-95">
              <i class="fa-solid fa-map-location-dot text-indigo-500 text-sm mb-1 block" data-e="1" style="font-style:normal">🗺️</i>
              <div class="font-semibold text-xs text-slate-800 dark:text-slate-200">ที่ตั้งสำนักงานขนส่ง</div>
              <div class="text-[10px] text-slate-500">กทม. 5 พื้นที่ & สาขาทั่วไทย</div>
            </button>
            <button onclick="askQuickPrompt('ต้องการต่อใบขับขี่ 5 ปี เป็น 5 ปี ต้องเตรียมเอกสารและมีขั้นตอนอย่างไรบ้าง?')" 
                    class="text-left p-2.5 sm:p-3 rounded-xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/60 hover:bg-purple-50/50 dark:hover:bg-purple-950/30 transition active:scale-95">
              <i class="fa-solid fa-id-card text-dlt-purple dark:text-purple-400 text-sm mb-1 block" data-e="1" style="font-style:normal">🪪</i>
              <div class="font-semibold text-xs text-slate-800 dark:text-slate-200">ต่อใบขับขี่</div>
              <div class="text-[10px] text-slate-500">2→5 ปี, 5→5 ปี</div>
            </button>
            <button onclick="askQuickPrompt('ขั้นตอนการต่อภาษีรถยนต์ประจำปี มีเงื่อนไขอะไรบ้าง รถกี่ปีต้องตรวจ ตรอ.?')" 
                    class="text-left p-2.5 sm:p-3 rounded-xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/60 hover:bg-purple-50/50 dark:hover:bg-purple-950/30 transition active:scale-95">
              <i class="fa-solid fa-receipt text-amber-500 text-sm mb-1 block" data-e="1" style="font-style:normal">🧾</i>
              <div class="font-semibold text-xs text-slate-800 dark:text-slate-200">ภาษีและ พ.ร.บ.</div>
              <div class="text-[10px] text-slate-500">ต่อออนไลน์, ตรวจ ตรอ.</div>
            </button>
            <button onclick="askQuickPrompt('การโอนกรรมสิทธิ์รถยนต์และจักรยานยนต์ต้องใช้เอกสารอะไร และการโอนลอยมีความเสี่ยงอย่างไร?')" 
                    class="text-left p-2.5 sm:p-3 rounded-xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/60 hover:bg-purple-50/50 dark:hover:bg-purple-950/30 transition active:scale-95">
              <i class="fa-solid fa-handshake text-emerald-500 text-sm mb-1 block" data-e="1" style="font-style:normal">🤝</i>
              <div class="font-semibold text-xs text-slate-800 dark:text-slate-200">โอนทะเบียนรถ</div>
              <div class="text-[10px] text-slate-500">เปลี่ยนเจ้าของ, โอนลอย</div>
            </button>
          </div>
        </div>

        <!-- FAQ quick buttons -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200 dark:border-slate-800 shadow-sm">
          <h3 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2.5 flex items-center gap-1.5">
            <i class="fa-regular fa-comments text-amber-500" data-e="1" style="font-style:normal">💬</i> คำถามที่พบบ่อย
          </h3>
          <div class="space-y-1.5">
            <button onclick="askQuickPrompt('กรณีใบขับขี่ชั่วคราว 2 ปี หมดอายุแล้ว ต้องมาทำใหม่เท่านั้นใช่ไหม มีขั้นตอนและเอกสารที่ต้องเตรียมอย่างไรบ้าง?')" 
                    class="w-full text-left p-2.5 rounded-xl text-xs bg-slate-50 dark:bg-slate-800 hover:bg-purple-50 text-slate-700 dark:text-slate-200 border border-slate-200/70 dark:border-slate-700/60 transition flex items-center justify-between">
              <span class="font-medium text-rose-600 dark:text-rose-400">ใบขับขี่ชั่วคราวหมดอายุ ต้องมาทำใหม่เท่านั้น</span>
              <i class="fa-solid fa-chevron-right text-[10px] text-slate-400" data-e="1" style="font-style:normal">›</i>
            </button>
            <button onclick="askQuickPrompt('ขั้นตอนการดำเนินการ (Step-by-Step) ของการโอนรถ ทั้ง 5 ขั้นตอน มีรายละเอียดอย่างไรบ้าง?')" 
                    class="w-full text-left p-2.5 rounded-xl text-xs bg-slate-50 dark:bg-slate-800 hover:bg-purple-50 text-slate-700 dark:text-slate-200 border border-slate-200/70 dark:border-slate-700/60 transition flex items-center justify-between">
              <span class="font-medium text-purple-700 dark:text-purple-300">5 ขั้นตอนการโอนรถ (ยื่นเอกสาร ➔ รับเล่ม)</span>
              <i class="fa-solid fa-chevron-right text-[10px] text-slate-400" data-e="1" style="font-style:normal">›</i>
            </button>
            <button onclick="askQuickPrompt('ใบรับรองแพทย์สำหรับทำหรือต่อใบขับขี่ มีอายุกี่วัน และต้องตรวจโรคต้องห้ามกี่โรค?')" 
                    class="w-full text-left p-2.5 rounded-xl text-xs bg-slate-50 dark:bg-slate-800 hover:bg-purple-50 text-slate-700 dark:text-slate-200 border border-slate-200/70 dark:border-slate-700/60 transition flex items-center justify-between">
              <span>ใบรับรองแพทย์มีอายุกี่วัน ตรวจโรคอะไรบ้าง?</span>
              <i class="fa-solid fa-chevron-right text-[10px] text-slate-400" data-e="1" style="font-style:normal">›</i>
            </button>
            <button onclick="askQuickPrompt('อัตราค่าธรรมเนียมใบขับขี่แต่ละประเภท เช่น รถยนต์ส่วนบุคคล มอเตอร์ไซค์ และใบขับขี่สากล')" 
                    class="w-full text-left p-2.5 rounded-xl text-xs bg-slate-50 dark:bg-slate-800 hover:bg-purple-50 text-slate-700 dark:text-slate-200 border border-slate-200/70 dark:border-slate-700/60 transition flex items-center justify-between">
              <span>อัตราค่าธรรมเนียมใบขับขี่ทุกประเภท</span>
              <i class="fa-solid fa-chevron-right text-[10px] text-slate-400" data-e="1" style="font-style:normal">›</i>
            </button>
          </div>
        </div>

      </div>

      <!-- Right Column: Interactive AI Chat Box -->
      <div class="lg:col-span-8 flex flex-col bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-md mobile-chat-height overflow-hidden order-1 lg:order-2">
        
        <!-- Chat Header -->
        <div class="px-4 py-3 sm:py-3.5 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between bg-slate-50/60 dark:bg-slate-800/50">
          <div class="flex items-center gap-2.5">
            <div class="relative">
              <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-dlt-purple text-amber-400 flex items-center justify-center font-bold shadow-sm text-sm">
                <i class="fa-solid fa-headset" data-e="1" style="font-style:normal">🎧</i>
              </div>
              <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-white dark:border-slate-900 rounded-full"></span>
            </div>
            <div>
              <div class="font-bold text-xs sm:text-sm text-slate-800 dark:text-slate-100 flex items-center gap-1.5">
                ผู้ช่วย AI ขนส่ง
                <span class="text-[9px] bg-emerald-100 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-400 px-1.5 py-0.2 rounded-full font-medium">ออนไลน์</span>
              </div>
              <p class="text-[10px] text-slate-400">ตอบข้อสงสัยและให้ขั้นตอนถูกต้อง</p>
            </div>
          </div>

          <!-- Reset Chat Button -->
          <button onclick="clearChatHistory()" title="ล้างแชท" class="px-2.5 py-1 rounded-lg border border-slate-200 dark:border-slate-700 text-[11px] text-slate-500 hover:text-red-500 transition active:scale-95">
            <i class="fa-solid fa-trash-can mr-1" data-e="1" style="font-style:normal">🗑️</i> ล้าง
          </button>
        </div>

        <!-- Horizontal Swipeable Prompt Chips for Quick Mobile Input -->
        <div class="px-3 py-2 bg-purple-50/40 dark:bg-slate-800/30 border-b border-purple-100/50 dark:border-slate-800 flex items-center gap-2 overflow-x-auto no-scrollbar">
          <span class="text-[10px] text-purple-800 dark:text-purple-300 font-semibold shrink-0">
            <i class="fa-solid fa-bolt text-amber-500 mr-0.5" data-e="1" style="font-style:normal">⚡</i> ถามเร็ว:
          </span>
          <button onclick="askQuickPrompt('สำนักงานขนส่งกรุงเทพมหานคร มีกี่พื้นที่ อยู่ตรงไหนบ้าง')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100 font-medium text-indigo-700 dark:text-indigo-300">
            🏢 ขนส่ง กทม. 5 พื้นที่
          </button>
          <button onclick="askQuickPrompt('ที่ตั้งสำนักงานขนส่งจังหวัดเชียงราย และขนส่งสาขาเวียงป่าเป้า พาน เทิง อยู่ตรงไหน เบอร์โทรอะไร')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100 font-medium text-purple-700 dark:text-purple-300">
            📍 ขนส่งเชียงราย & สาขา
          </button>
          <button onclick="askQuickPrompt('ขั้นตอนการโอนรถ 5 ขั้นตอน มีอะไรบ้าง')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100">
            5 ขั้นตอนโอนรถ
          </button>
          <button onclick="askQuickPrompt('เอกสารต่อใบขับขี่ 2 ปีเป็น 5 ปี ใช้อะไรบ้าง')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100">
            ต่อ 2 เป็น 5 ปี
          </button>
          <button onclick="askQuickPrompt('ใบรับรองแพทย์ 5 โรคมีอะไรบ้างและใช้ได้กี่วัน')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100">
            ใบรับรองแพทย์ 5 โรค
          </button>
          <button onclick="askQuickPrompt('รถเกินกี่ปีต้องตรวจ ตรอ. และค่าตรวจเท่าไหร่')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100">
            เกณฑ์ตรวจ ตรอ.
          </button>
          <button onclick="askQuickPrompt('ขั้นตอนและค่าธรรมเนียมโอนลอยรถยนต์')" class="shrink-0 text-[11px] px-2.5 py-1 rounded-full bg-white dark:bg-slate-800 border border-purple-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 active:bg-purple-100">
            โอนลอยรถ
          </button>
        </div>

        <!-- Chat Messages Scrollable Area -->
        <div id="chatMessages" class="flex-1 overflow-y-auto p-3 sm:p-5 space-y-3.5">
          <!-- Initial Welcome Message from AI -->
          <div class="flex items-start gap-2.5">
            <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-dlt-purple text-amber-300 flex items-center justify-center text-xs shrink-0 mt-1 shadow">
              <i class="fa-solid fa-headset" data-e="1" style="font-style:normal">🎧</i>
            </div>
            <div class="max-w-[88%] sm:max-w-[85%] bg-purple-50/80 dark:bg-slate-800/90 text-slate-800 dark:text-slate-200 rounded-2xl rounded-tl-none p-3.5 sm:p-4 text-xs sm:text-sm shadow-sm border border-purple-100 dark:border-slate-700/60">
              <p class="font-medium text-dlt-purple dark:text-purple-300 mb-1">สวัสดีครับ ยินดีต้อนรับสู่ DLT Smart Assistant 🙏</p>
              <p class="leading-relaxed text-slate-600 dark:text-slate-300">
                ถามได้ทุกเรื่องครับ ทั้งงานขนส่งและเรื่องทั่วไป เช่น ทำ/ต่อใบขับขี่, อบรม e-Learning, ค้นหาคลินิกออกใบรับรองแพทย์, หรือตรวจภาษีรถ
              </p>
              <div class="mt-2 pt-2 border-t border-purple-100 dark:border-slate-700 flex flex-wrap gap-1.5">
                <button onclick="switchView('clinic')" class="inline-flex items-center gap-1 px-2 py-1 rounded-lg bg-white dark:bg-slate-700 text-[11px] font-semibold text-dlt-purple dark:text-purple-300 border border-purple-200 dark:border-slate-600">
                  <i class="fa-solid fa-stethoscope text-amber-500" data-e="1" style="font-style:normal">🩺</i> ค้นหาที่ขอใบรับรองแพทย์
                </button>
                <button onclick="switchView('checklist')" class="inline-flex items-center gap-1 px-2 py-1 rounded-lg bg-white dark:bg-slate-700 text-[11px] font-semibold text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-600">
                  <i class="fa-solid fa-clipboard-check text-emerald-500" data-e="1" style="font-style:normal">📋</i> เช็คเอกสารก่อนไปขนส่ง
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Typing Indicator -->
        <div id="typingIndicator" class="hidden px-4 py-2 flex items-center gap-2 text-xs text-slate-400 bg-slate-50/30 dark:bg-slate-900/30">
          <div class="w-1.5 h-1.5 rounded-full bg-purple-600 animate-bounce"></div>
          <div class="w-1.5 h-1.5 rounded-full bg-purple-600 animate-bounce [animation-delay:0.2s]"></div>
          <div class="w-1.5 h-1.5 rounded-full bg-purple-600 animate-bounce [animation-delay:0.4s]"></div>
          <span class="ml-1 text-[11px]">DLT AI กำลังตรวจสอบระเบียบและเรียบเรียงคำตอบ...</span>
        </div>

        <!-- Chat Input Form (Optimized for Mobile Keyboards) -->
        <div id="chatInputBar" class="p-2.5 sm:p-3.5 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900">
          <div id="chatForm" class="flex items-end gap-2">
            <div class="relative flex-1">
              <textarea 
                id="userInput"
                rows="1"
                placeholder="พิมพ์คำถามได้ทุกเรื่องที่นี่..."
                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-800 dark:text-slate-100 text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-dlt-purple dark:focus:ring-purple-400 resize-none max-h-24 transition pr-8"
                oninput="autoResizeTextarea(this)"
                onkeydown="handleKeyDown(event)"></textarea>
              <button type="button" onclick="insertVoicePromptMock()" title="ใส่ตัวอย่างคำถาม" class="absolute right-2.5 bottom-2.5 text-slate-400 hover:text-dlt-purple transition p-1">
                <i class="fa-solid fa-wand-magic-sparkles text-xs" data-e="1" style="font-style:normal">✨</i>
              </button>
            </div>
            <button 
              type="button" 
              onclick="handleChatSubmit(event)"
              id="sendBtn"
              class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-dlt-purple hover:bg-dlt-light text-white font-medium flex items-center justify-center shadow-md shadow-purple-900/20 transition shrink-0 active:scale-90 disabled:opacity-50">
              <i class="fa-solid fa-paper-plane text-xs sm:text-sm" data-e="1" style="font-style:normal">➤</i>
            </button>
          </div>
          <p class="text-[10px] text-center text-slate-400 mt-2 px-2">⚠️ อย่าพิมพ์เลขบัตรประชาชนหรือข้อมูลส่วนตัว • ข้อมูลเป็นแนวทางเบื้องต้น ตรวจสอบกับสายด่วน 1584 อีกครั้ง</p>
        </div>

      </div>

    </section>

    <!-- VIEW: Transport Offices Directory (NEW DEDICATED VIEW) -->
    <section id="view-offices" class="hidden space-y-4">
      <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 sm:p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-4 border-b border-slate-100 dark:border-slate-800">
          <div>
            <div class="inline-flex items-center gap-1.5 text-xs text-dlt-purple dark:text-purple-400 font-bold uppercase tracking-wider mb-1">
              <i class="fa-solid fa-map-location-dot" data-e="1" style="font-style:normal">🗺️</i> ระบบค้นหาพิกัดหน่วยงานขนส่ง
            </div>
            <h2 class="text-lg sm:text-xl font-bold text-slate-800 dark:text-white">
              ที่ตั้งสำนักงานขนส่งจังหวัดและสาขาทั่วประเทศ
            </h2>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">
              ค้นหาข้อมูลที่ตั้ง สำนักงานขนส่ง กทม. 5 พื้นที่, ขนส่งจังหวัด, และสาขาประจำอำเภอ พร้อมเบอร์โทรและแผนที่นำทาง
            </p>
          </div>

          <div class="flex items-center gap-2">
            <a href="tel:1584" class="inline-flex items-center gap-1.5 px-3 py-2 rounded-xl bg-purple-50 dark:bg-purple-950/60 text-dlt-purple dark:text-purple-300 border border-purple-200 dark:border-purple-800 text-xs font-semibold">
              <i class="fa-solid fa-phone text-amber-500" data-e="1" style="font-style:normal">📞</i> สายด่วน 1584
            </a>
            <a href="https://gecc.dlt.go.th/" target="_blank" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-dlt-purple hover:bg-dlt-light text-white text-xs font-semibold shadow transition active:scale-95">
              <i class="fa-solid fa-calendar-check text-amber-300" data-e="1" style="font-style:normal">📅</i> จองคิว Smart Queue
            </a>
          </div>
        </div>

        <!-- Filter & Search Bar -->
        <div class="mt-4 flex flex-col sm:flex-row gap-2">
          <!-- Search text input -->
          <div class="relative flex-1">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-slate-400 text-xs" data-e="1" style="font-style:normal">🔍</i>
            <input type="text" id="officeSearchInput" onkeyup="filterOffices()" placeholder="ค้นหาชื่อสำนักงาน, อำเภอ, จังหวัด (เช่น เวียงป่าเป้า, จตุจักร, เชียงใหม่)..." class="w-full pl-8 pr-3 py-2 text-xs rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-1 focus:ring-dlt-purple" />
          </div>

          <!-- Region Filter buttons -->
          <div class="flex overflow-x-auto no-scrollbar gap-1.5 pb-1">
            <button onclick="setOfficeFilter('all')" id="btnFilterAll" class="office-filter-btn active px-3 py-1.5 rounded-xl text-xs font-medium bg-dlt-purple text-white shadow shrink-0">ทั้งหมด</button>
            <button onclick="setOfficeFilter('bkk')" id="btnFilterBkk" class="office-filter-btn px-3 py-1.5 rounded-xl text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 shrink-0">กทม. 5 พื้นที่</button>
            <button onclick="setOfficeFilter('north')" id="btnFilterNorth" class="office-filter-btn px-3 py-1.5 rounded-xl text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 shrink-0">ภาคเหนือ (เชียงราย/ชม.)</button>
            <button onclick="setOfficeFilter('central')" id="btnFilterCentral" class="office-filter-btn px-3 py-1.5 rounded-xl text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 shrink-0">ภาคกลาง/ตะวันออก</button>
            <button onclick="setOfficeFilter('isan_south')" id="btnFilterIsanSouth" class="office-filter-btn px-3 py-1.5 rounded-xl text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 shrink-0">อีสาน & ใต้</button>
          </div>
        </div>

        <!-- Office Results Cards Grid -->
        <div id="officeResultsGrid" class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
          <!-- Dynamically populated via JS -->
        </div>

      </div>
    </section>

    <!-- VIEW: Medical Certificate & Clinic Finder -->
    <section id="view-clinic" class="hidden space-y-4">
      <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 sm:p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-4 border-b border-slate-100 dark:border-slate-800">
          <div>
            <div class="inline-flex items-center gap-1.5 text-xs text-rose-500 font-bold uppercase tracking-wider mb-1">
              <i class="fa-solid fa-heart-pulse" data-e="1" style="font-style:normal">❤️</i> บริการค้นหาพิกัด
            </div>
            <h2 class="text-lg sm:text-xl font-bold text-slate-800 dark:text-white">
              พิกัดขอใบรับรองแพทย์ทำใบขับขี่
            </h2>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">
              ค้นหาสถานพยาบาลและคลินิกเวชกรรมที่ออกใบรับรองแพทย์มาตรฐานแพทยสภา (5 โรค)
            </p>
          </div>

          <button onclick="detectUserLocationAndClinics()" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-dlt-purple text-white text-xs font-semibold shadow hover:bg-dlt-light transition active:scale-95 shrink-0">
            <i class="fa-solid fa-location-arrow" data-e="1" style="font-style:normal">📍</i> ค้นหาใกล้ตำแหน่งฉัน
          </button>
        </div>

        <!-- 5 Diseases Alert Box -->
        <div class="mt-4 p-3.5 rounded-xl bg-amber-50 dark:bg-amber-950/40 border border-amber-200 dark:border-amber-800 text-xs text-amber-800 dark:text-amber-200 flex items-start gap-2.5">
          <i class="fa-solid fa-circle-exclamation text-amber-600 mt-0.5 shrink-0" data-e="1" style="font-style:normal">❗</i>
          <div>
            <span class="font-bold">เกณฑ์มาตรฐานแพทยสภา:</span> ใบรับรองแพทย์ต้องมีอายุไม่เกิน 1 เดือน (30 วัน) และรับรองการตรวจ 5 โรคต้องห้าม (โรคเรื้อน, วัณโรคระยะอันตราย, โรคเท้าช้าง, โรคติดยาเสพติดให้โทษ, และโรคพิษสุราเรื้อรัง) รวมถึงไม่เป็นบุคคลวิกลจริต
          </div>
        </div>

        <!-- Clinic Search Filter Bar -->
        <div class="mt-4 flex gap-2">
          <div class="relative flex-1">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-slate-400 text-xs" data-e="1" style="font-style:normal">🔍</i>
            <input type="text" id="clinicSearchInput" onkeyup="filterClinics()" placeholder="พิมพ์ชื่ออำเภอ ตำบล หรือชื่อคลินิก..." class="w-full pl-8 pr-3 py-2 text-xs rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-1 focus:ring-dlt-purple" />
          </div>
          <button onclick="filterClinics()" class="px-3 py-2 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 text-xs font-medium rounded-xl text-slate-700 dark:text-slate-300">
            ค้นหา
          </button>
        </div>

        <!-- Clinic Results Cards Grid -->
        <div id="clinicResultsGrid" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-3">
          <!-- Dynamically populated or default nearby places -->
        </div>

        <!-- Search Google Maps Directly Option -->
        <div class="mt-4 p-4 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 text-center">
          <p class="text-xs text-slate-600 dark:text-slate-300 mb-2">ต้องการเปิดแผนที่ Google Maps เพื่อค้นหาคลินิกใกล้ตัวทันทีหรือไม่?</p>
          <a href="https://www.google.com/maps/search/%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%81+%E0%B9%83%E0%B8%9A%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%81%E0%B8%9E%E0%B8%97%E0%B8%A2%E0%B9%8C+%E0%B9%83%E0%B8%9A%E0%B8%82%E0%B8%B1%E0%B8%9A%E0%B8%82%E0%B8%B5%E0%B9%88" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold shadow transition active:scale-95">
            <i class="fa-solid fa-map-location-dot" data-e="1" style="font-style:normal">🗺️</i> เปิด Google Maps ค้นหาคลินิกใบขับขี่
          </a>
        </div>

      </div>
    </section>

    <!-- VIEW 2: Interactive Document Checklist -->
    <section id="view-checklist" class="hidden bg-white dark:bg-slate-900 rounded-2xl p-4 sm:p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
      <div class="max-w-4xl mx-auto">
        
        <div class="text-center mb-5">
          <div class="w-10 h-10 rounded-2xl bg-purple-100 dark:bg-purple-900/50 text-dlt-purple dark:text-purple-300 mx-auto flex items-center justify-center text-lg mb-2 shadow">
            <i class="fa-solid fa-clipboard-check" data-e="1" style="font-style:normal">📋</i>
          </div>
          <h2 class="text-lg sm:text-xl font-bold text-slate-800 dark:text-white">เช็คเอกสารที่ต้องใช้ (Checklist)</h2>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">เลือกบริการเพื่อตรวจความพร้อมก่อนไปสำนักงานขนส่ง</p>
        </div>

        <!-- Service Selection Dropdown & Horizontal Scroll Tabs -->
        <div class="mb-4 flex overflow-x-auto no-scrollbar gap-2 pb-1" id="checklistTabs">
          <button onclick="loadChecklist('license-2to5')" class="checklist-tab active shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-dlt-purple text-white shadow">
            ต่อ 2 ปี เป็น 5 ปี
          </button>
          <button onclick="loadChecklist('license-5to5')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            ต่อ 5 ปี เป็น 5 ปี
          </button>
          <button onclick="loadChecklist('transfer-vehicle')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            โอนกรรมสิทธิ์รถ
          </button>
          <button onclick="loadChecklist('tax-annual')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            ต่อภาษีประจำปี
          </button>
          <button onclick="loadChecklist('new-license')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            ทำใบขับขี่ใหม่
          </button>
          <button onclick="loadChecklist('first-car')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            🆕 ไม่มีใบขับขี่: รถยนต์
          </button>
          <button onclick="loadChecklist('first-moto')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            🆕 ไม่มีใบขับขี่: มอเตอร์ไซค์
          </button>
          <button onclick="loadChecklist('first-foreign')" class="checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
            🆕 ไม่มีใบขับขี่: ชาวต่างชาติ
          </button>
        </div>

        <!-- Checklist Card -->
        <div class="bg-slate-50 dark:bg-slate-800/60 rounded-2xl p-4 sm:p-5 border border-slate-200 dark:border-slate-700">
          <div class="flex items-center justify-between mb-3 pb-2.5 border-b border-slate-200 dark:border-slate-700">
            <div>
              <h3 id="checklistTitle" class="text-sm sm:text-base font-bold text-dlt-purple dark:text-purple-300">ต่อใบขับขี่ 2 ปี เป็น 5 ปี</h3>
              <p id="checklistSub" class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">ต่อล่วงหน้าได้ 60 วัน</p>
            </div>
            <div id="checklistProgressBadge" class="px-2.5 py-1 bg-purple-100 dark:bg-purple-900/60 text-dlt-purple dark:text-purple-300 rounded-full text-[11px] font-bold shrink-0">
              0 / 4 รายการ
            </div>
          </div>

          <!-- Items list -->
          <div id="checklistItems" class="space-y-2.5">
            <!-- Dynamic checklists populated via JS -->
          </div>

          <!-- Additional advice alert -->
          <div id="checklistNote" class="mt-4 p-3 rounded-xl bg-amber-50 dark:bg-amber-950/40 border border-amber-200 dark:border-amber-800/60 text-xs text-amber-800 dark:text-amber-200 flex gap-2.5 items-start">
            <!-- Populated via JS -->
          </div>

          <div class="mt-4 flex justify-between sm:justify-end gap-2">
            <button onclick="resetChecklist()" class="px-3 py-2 rounded-xl text-xs font-semibold border border-slate-300 dark:border-slate-600 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 active:scale-95">
              <i class="fa-solid fa-arrow-rotate-left mr-1" data-e="1" style="font-style:normal">↺</i> ล้าง
            </button>
            <button onclick="askAIAssistantWithChecklist()" class="px-3.5 py-2 rounded-xl text-xs font-semibold bg-dlt-purple hover:bg-dlt-light text-white shadow active:scale-95">
              <i class="fa-solid fa-robot mr-1" data-e="1" style="font-style:normal">🤖</i> ปรึกษา AI ต่อยอด
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- VIEW 3: Service Guides & Steps -->
    <section id="view-guides" class="hidden space-y-4">
      <div class="text-center max-w-2xl mx-auto mb-2">
        <h2 class="text-lg sm:text-xl font-bold text-slate-800 dark:text-white">คู่มือและขั้นตอนการดำเนินงาน</h2>
        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">รวมไทม์ไลน์และระเบียบการดำเนินการที่ควรรู้</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <!-- Guide 1 -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between">
          <div>
            <div class="w-9 h-9 rounded-xl bg-purple-100 dark:bg-purple-950 text-dlt-purple dark:text-purple-300 flex items-center justify-center text-base mb-2.5">
              <i class="fa-solid fa-calendar-days" data-e="1" style="font-style:normal">🗓️</i>
            </div>
            <h3 class="font-bold text-sm text-slate-800 dark:text-slate-100 mb-1.5">จองคิว DLT Smart Queue</h3>
            <ol class="text-xs text-slate-600 dark:text-slate-300 space-y-1.5 list-decimal pl-4">
              <li>โหลดแอป DLT Smart Queue หรือเข้าเว็บ gecc.dlt.go.th</li>
              <li>ลงทะเบียนด้วยเลขบัตรประชาชน 13 หลัก</li>
              <li>เลือกสำนักงานขนส่งที่ต้องการรับบริการ</li>
              <li>เลือกวัน-เวลา และบันทึกภาพหน้าจอคิว</li>
            </ol>
          </div>
          <div class="mt-3 pt-2.5 border-t border-slate-100 dark:border-slate-800">
            <button onclick="askQuickPrompt('แนะนำขั้นตอนการจองคิวผ่าน DLT Smart Queue อย่างละเอียด')" class="text-xs font-semibold text-dlt-purple dark:text-purple-400 hover:underline">
              ถาม AI เพิ่มเติม &rarr;
            </button>
          </div>
        </div>

        <!-- Guide 2 -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between">
          <div>
            <div class="w-9 h-9 rounded-xl bg-amber-100 dark:bg-amber-950 text-amber-600 dark:text-amber-400 flex items-center justify-center text-base mb-2.5">
              <i class="fa-solid fa-video" data-e="1" style="font-style:normal">🎥</i>
            </div>
            <h3 class="font-bold text-sm text-slate-800 dark:text-slate-100 mb-1.5">อบรมออนไลน์ e-Learning</h3>
            <ol class="text-xs text-slate-600 dark:text-slate-300 space-y-1.5 list-decimal pl-4">
              <li>เข้าเว็บ www.dlt-elearning.com</li>
              <li>กรอกเลขบัตรประชาชน และวันเกิด</li>
              <li>ดูวิดีโอจนจบพร้อมตอบคำถาม (1 ชั่วโมง)</li>
              <li>แคปผลสอบผ่านไว้แสดงต่อเจ้าหน้าที่ (อายุ 90 วัน)</li>
            </ol>
          </div>
          <div class="mt-3 pt-2.5 border-t border-slate-100 dark:border-slate-800">
            <button onclick="askQuickPrompt('ผลการอบรม e-learning มีอายุกี่วัน และถ้าดูไม่จบระบบจะบันทึกไหม?')" class="text-xs font-semibold text-dlt-purple dark:text-purple-400 hover:underline">
              ถาม AI ข้อสงสัย e-Learning &rarr;
            </button>
          </div>
        </div>

        <!-- Guide 3 -->
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between">
          <div>
            <div class="w-9 h-9 rounded-xl bg-emerald-100 dark:bg-emerald-950 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-base mb-2.5">
              <i class="fa-solid fa-car-burst" data-e="1" style="font-style:normal">💥</i>
            </div>
            <h3 class="font-bold text-sm text-slate-800 dark:text-slate-100 mb-1.5">เกณฑ์ตรวจสภาพ ตรอ.</h3>
            <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-1.5 list-disc pl-4">
              <li>รถยนต์ส่วนบุคคล: เมื่ออายุครบ 7 ปีขึ้นไป</li>
              <li>รถจักรยานยนต์: เมื่ออายุครบ 5 ปีขึ้นไป</li>
              <li>ตรวจล่วงหน้าได้ 3 เดือนก่อนภาษีหมดอายุ</li>
              <li>ค่าตรวจ: รถเก๋ง 200 บาท / มอเตอร์ไซค์ 60 บาท</li>
            </ul>
          </div>
          <div class="mt-3 pt-2.5 border-t border-slate-100 dark:border-slate-800">
            <button onclick="askQuickPrompt('รถยนต์อายุเกิน 7 ปี จะต่อภาษีออนไลน์ได้ไหม ต้องส่งผล ตรอ. อย่างไร?')" class="text-xs font-semibold text-dlt-purple dark:text-purple-400 hover:underline">
              ถาม AI เรื่อง ตรอ. &rarr;
            </button>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- Mobile Bottom Sticky Navigation Bar (App-like UX) -->
  <nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/95 dark:bg-slate-900/95 border-t border-slate-200 dark:border-slate-800 glass-effect pb-safe">
    <div class="grid grid-cols-5 h-16">
      <button onclick="switchView('chat')" id="mNavChatBtn" class="flex flex-col items-center justify-center text-dlt-purple dark:text-purple-400 transition active:scale-90">
        <i class="fa-solid fa-comments text-base mb-0.5" data-e="1" style="font-style:normal">💬</i>
        <span class="text-[9px] font-medium">แชท AI</span>
      </button>
      <button onclick="switchView('offices')" id="mNavOfficesBtn" class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 transition active:scale-90">
        <i class="fa-solid fa-building-columns text-base mb-0.5" data-e="1" style="font-style:normal">🏛️</i>
        <span class="text-[9px] font-medium">ที่ตั้งขนส่ง</span>
      </button>
      <button onclick="switchView('clinic')" id="mNavClinicBtn" class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 transition active:scale-90">
        <i class="fa-solid fa-user-doctor text-base mb-0.5" data-e="1" style="font-style:normal">🩺</i>
        <span class="text-[9px] font-medium">ใบรับรองแพทย์</span>
      </button>
      <button onclick="switchView('checklist')" id="mNavChecklistBtn" class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 transition active:scale-90">
        <i class="fa-solid fa-list-check text-base mb-0.5" data-e="1" style="font-style:normal">✅</i>
        <span class="text-[9px] font-medium">เอกสาร</span>
      </button>
      <button onclick="switchView('guides')" id="mNavGuidesBtn" class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 transition active:scale-90">
        <i class="fa-solid fa-book-open text-base mb-0.5" data-e="1" style="font-style:normal">📖</i>
        <span class="text-[9px] font-medium">คู่มือ</span>
      </button>
    </div>
  </nav>

  <footer class="hidden md:block mt-auto border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 py-4 text-xs text-slate-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
        <span>DLT Smart Assistant — รองรับการใช้งานบนสมาร์ตโฟนเต็มรูปแบบ</span>
      </div>
      <div>
        <span>สายด่วนกรมการขนส่งทางบก 1584</span>
      </div>
    </div>
  </footer>

  <!-- Notification Toast Container -->
  <div id="toast" class="fixed bottom-20 md:bottom-5 right-4 left-4 sm:left-auto sm:right-5 z-50 transform translate-y-24 opacity-0 transition-all duration-300 bg-slate-900 text-white dark:bg-white dark:text-slate-900 px-4 py-3 rounded-xl shadow-xl flex items-center gap-3 text-xs pointer-events-none">
    <i id="toastIcon" class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
    <span id="toastMsg" class="font-medium">แจ้งเตือน</span>
  </div>

  <script>
    /* ==========================================================================
       🔑 API KEY ของ Gemini เก็บไว้ฝั่งเซิร์ฟเวอร์ที่ api/config.php (ห้ามใส่ในหน้าเว็บ)
       แชทเรียกผ่าน api/chat.php ส่วน System Prompt อยู่ที่ api/system_prompt.txt
       ========================================================================== */

    // --- ระยะทางจากตำแหน่งจริงของเครื่องผู้ใช้ (คำนวณเส้นตรงเมื่อสถานที่มี lat/lng) ---
    let USER_POS = null, LOC_TRIED = false;
    function distKm(a, b) {
      const R = 6371, r = x => x * Math.PI / 180, dLa = r(b.lat - a.lat), dLo = r(b.lng - a.lng);
      const h = Math.sin(dLa / 2) ** 2 + Math.cos(r(a.lat)) * Math.cos(r(b.lat)) * Math.sin(dLo / 2) ** 2;
      return 2 * R * Math.asin(Math.sqrt(h));
    }
    function distBadge(item) {
      if (item.lat == null || item.lng == null) return 'ดูระยะในแผนที่';
      if (!USER_POS) return 'เปิดตำแหน่งเพื่อดูระยะ';
      const d = distKm(USER_POS, item);
      return 'ห่าง ' + (d < 10 ? d.toFixed(1) : Math.round(d)) + ' กม. (เส้นตรง)';
    }
    function sortByDist(list) {
      if (!USER_POS) return list;
      const k = x => x.pin ? -1 : (x.lat != null && x.lng != null ? distKm(USER_POS, x) : Infinity);
      return [...list].sort((a, b) => k(a) - k(b));
    }
    function requestLocation(force) {
      return new Promise(res => {
        if (!navigator.geolocation || (LOC_TRIED && !force)) return res(USER_POS);
        LOC_TRIED = true;
        const t = setTimeout(() => res(USER_POS), 7000);
        try {
          navigator.geolocation.getCurrentPosition(
            p => { clearTimeout(t); USER_POS = { lat: p.coords.latitude, lng: p.coords.longitude }; res(USER_POS); },
            () => { clearTimeout(t); res(USER_POS); },
            { timeout: 6000, maximumAge: 300000 });
        } catch (e) { clearTimeout(t); res(USER_POS); }
      });
    }
    /* ========================================================================== */

    
    // Chat History storage
    let chatHistory = [];
    let isGenerating = false;

    // Comprehensive Database of Transport Offices & Branches
    const DLT_OFFICES_DATABASE = [
      {
        id: "dlt-wpp",
        lat: 19.296471, lng: 99.511925,
        name: "สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอเวียงป่าเป้า",
        province: "เชียงราย",
        region: "north",
        type: "สำนักงานขนส่งสาขา",
        badge: "ใกล้คุณ",
        address: "7GW6+HQF ต.ป่างิ้ว อ.เวียงป่าเป้า จ.เชียงราย 57170 (ริมทางหลวง 118 สายเชียงใหม่-เชียงราย)",
        phone: "099-229-9976 หรือ 053-781-329",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น. (เว้นวันหยุดราชการ)",
        services: ["ทำและต่อใบขับขี่", "ตรวจสภาพรถ", "ต่อภาษีประจำปี", "งานโอน-ย้ายทะเบียน"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอเวียงป่าเป้า"
      },
      {
        id: "dlt-cri",
        name: "สำนักงานขนส่งจังหวัดเชียงราย (สำนักงานใหญ่ - ริมกก)",
        province: "เชียงราย",
        region: "north",
        type: "สำนักงานขนส่งจังหวัด",
        badge: "สำนักงานใหญ่ จ.เชียงราย",
        address: "405 หมู่ 6 ถ.ศูนย์ราชการ ต.ริมกก อ.เมืองเชียงราย จ.เชียงราย 57100",
        phone: "053-152-076 หรือ 053-152-077",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำใบขับขี่ทุกประเภท", "ใบขับขี่สากล", "งานทะเบียนรถทุกชนิด", "ตรวจสภาพรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+ตำบลริมกก"
      },
      {
        id: "dlt-phan",
        name: "สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอพาน",
        province: "เชียงราย",
        region: "north",
        type: "สำนักงานขนส่งสาขา",
        badge: "สาขา อ.พาน",
        address: "ต.เมืองพาน อ.พาน จ.เชียงราย 57120",
        phone: "053-721-515",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "ต่อภาษี", "โอนทะเบียน"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอพาน"
      },
      {
        id: "dlt-thoeng",
        name: "สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอเทิง",
        province: "เชียงราย",
        region: "north",
        type: "สำนักงานขนส่งสาขา",
        badge: "สาขา อ.เทิง",
        address: "ต.เวียง อ.เทิง จ.เชียงราย 57160",
        phone: "053-795-399",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "ต่อภาษี", "งานทะเบียนรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอเทิง"
      },
      {
        id: "dlt-bkk5",
        name: "สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 5 (จตุจักร - กรมใหญ่)",
        province: "กรุงเทพมหานคร",
        region: "bkk",
        type: "สำนักงานขนส่ง กทม.",
        badge: "กรมการขนส่งทางบก (ใหญ่)",
        address: "1032 ถ.พหลโยธิน แขวงจอมพล เขตจตุจักร กทม. 10900 (ตรงข้ามสวนจตุจักร / ใกล้ BTS หมอชิต & MRT จตุจักร)",
        phone: "02-271-8888 หรือ 1584",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ใบขับขี่ทุกชนิด", "ใบขับขี่สากล", "งานทะเบียนและโอนรถ", "รถสาธารณะ/รถบรรทุก"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+5+จตุจักร"
      },
      {
        id: "dlt-bkk1",
        name: "สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 1 (บางขุนเทียน)",
        province: "กรุงเทพมหานคร",
        region: "bkk",
        type: "สำนักงานขนส่ง กทม.",
        badge: "ฝั่งธนบุรีใต้",
        address: "ถ.บางขุนเทียน-ชายทะเล แขวงท่าข้าม เขตบางขุนเทียน กทม.",
        phone: "02-415-7337",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "งานทะเบียนรถ", "ตรวจสภาพรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+1+บางขุนเทียน"
      },
      {
        id: "dlt-bkk2",
        name: "สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 2 (ตลิ่งชัน)",
        province: "กรุงเทพมหานคร",
        region: "bkk",
        type: "สำนักงานขนส่ง กทม.",
        badge: "ฝั่งธนบุรีเหนือ",
        address: "ถ.สวนผัก แขวงตลิ่งชัน เขตตลิ่งชัน กทม.",
        phone: "02-433-4773",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "ต่อภาษี", "โอนรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+2+ตลิ่งชัน"
      },
      {
        id: "dlt-bkk3",
        name: "สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 3 (พระโขนง - สุขุมวิท 62)",
        province: "กรุงเทพมหานคร",
        region: "bkk",
        type: "สำนักงานขนส่ง กทม.",
        badge: "สุขุมวิท/บางจาก",
        address: "ซอยสุขุมวิท 62 แขวงบางจาก เขตพระโขนง กทม. (ใกล้ BTS บางจาก)",
        phone: "02-332-9688",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "งานทะเบียนรถ", "ตรวจสภาพ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+3+สุขุมวิท+62"
      },
      {
        id: "dlt-bkk4",
        name: "สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 4 (หนองจอก)",
        province: "กรุงเทพมหานคร",
        region: "bkk",
        type: "สำนักงานขนส่ง กทม.",
        badge: "กทม. ฝั่งตะวันออก",
        address: "ถ.สุวินทวงศ์ แขวงลำผักชี เขตหนองจอก กทม.",
        phone: "02-543-5500",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำ/ต่อใบขับขี่", "ทะเบียนรถ", "ตรวจสภาพรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+4+หนองจอก"
      },
      {
        id: "dlt-cnx",
        name: "สำนักงานขนส่งจังหวัดเชียงใหม่ (แห่งที่ 2 - แม่เหียะ)",
        province: "เชียงใหม่",
        region: "north",
        type: "สำนักงานขนส่งจังหวัด",
        badge: "เชียงใหม่ แม่เหียะ",
        address: "ถ.เชียงใหม่-ฮอด ต.แม่เหียะ อ.เมืองเชียงใหม่ จ.เชียงใหม่ 50100",
        phone: "053-270-411",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำใบขับขี่", "งานทะเบียนรถ", "ตรวจสภาพ", "สากล"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงใหม่+แม่เหียะ"
      },
      {
        id: "dlt-chonburi",
        name: "สำนักงานขนส่งจังหวัดชลบุรี",
        province: "ชลบุรี",
        region: "central",
        type: "สำนักงานขนส่งจังหวัด",
        badge: "ชลบุรี หนองข้างคอก",
        address: "ต.หนองข้างคอก อ.เมืองชลบุรี จ.ชลบุรี 20000",
        phone: "038-054-930",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำใบขับขี่", "งานทะเบียนรถ", "ตรวจสภาพ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดชลบุรี"
      },
      {
        id: "dlt-korat",
        name: "สำนักงานขนส่งจังหวัดนครราชสีมา (แห่งที่ 2 - จอหอ)",
        province: "นครราชสีมา",
        region: "isan_south",
        type: "สำนักงานขนส่งจังหวัด",
        badge: "โคราช จอหอ",
        address: "ถ.มิตรภาพ ต.จอหอ อ.เมืองนครราชสีมา จ.นครราชสีมา 30310",
        phone: "044-372-666",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ทำใบขับขี่", "ทะเบียนรถ", "ตรวจสภาพรถ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดนครราชสีมา+แห่งที่+2+จอหอ"
      },
      {
        id: "dlt-phuket",
        name: "สำนักงานขนส่งจังหวัดภูเก็ต",
        province: "ภูเก็ต",
        region: "isan_south",
        type: "สำนักงานขนส่งจังหวัด",
        badge: "ภูเก็ต รัษฎา",
        address: "ถ.รัตนโกสินทร์ 200 ปี ต.รัษฎา อ.เมืองภูเก็ต จ.ภูเก็ต 83000",
        phone: "076-211-019",
        hours: "จันทร์ - ศุกร์ 08:30 – 16:30 น.",
        services: ["ใบขับขี่ไทย/สากล", "งานทะเบียนรถ", "ตรวจสภาพ"],
        mapUrl: "https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดภูเก็ต"
      }
    ];

    // --- สำนักงานขนส่งครบทั้ง 77 จังหวัด (สร้างอัตโนมัติ: ที่อยู่/เส้นทางดูจาก Google Maps เพื่อให้ตรงกับข้อมูลล่าสุด) ---
    (function addAllProvinces() {
      const ALL = "กรุงเทพมหานคร,กระบี่,กาญจนบุรี,กาฬสินธุ์,กำแพงเพชร,ขอนแก่น,จันทบุรี,ฉะเชิงเทรา,ชลบุรี,ชัยนาท,ชัยภูมิ,ชุมพร,เชียงราย,เชียงใหม่,ตรัง,ตราด,ตาก,นครนายก,นครปฐม,นครพนม,นครราชสีมา,นครศรีธรรมราช,นครสวรรค์,นนทบุรี,นราธิวาส,น่าน,บึงกาฬ,บุรีรัมย์,ปทุมธานี,ประจวบคีรีขันธ์,ปราจีนบุรี,ปัตตานี,พระนครศรีอยุธยา,พะเยา,พังงา,พัทลุง,พิจิตร,พิษณุโลก,เพชรบุรี,เพชรบูรณ์,แพร่,ภูเก็ต,มหาสารคาม,มุกดาหาร,แม่ฮ่องสอน,ยโสธร,ยะลา,ร้อยเอ็ด,ระนอง,ระยอง,ราชบุรี,ลพบุรี,ลำปาง,ลำพูน,เลย,ศรีสะเกษ,สกลนคร,สงขลา,สตูล,สมุทรปราการ,สมุทรสงคราม,สมุทรสาคร,สระแก้ว,สระบุรี,สิงห์บุรี,สุโขทัย,สุพรรณบุรี,สุราษฎร์ธานี,สุรินทร์,หนองคาย,หนองบัวลำภู,อ่างทอง,อำนาจเจริญ,อุดรธานี,อุตรดิตถ์,อุทัยธานี,อุบลราชธานี".split(',');
      const NORTH = new Set("เชียงราย,เชียงใหม่,น่าน,พะเยา,แพร่,แม่ฮ่องสอน,ลำปาง,ลำพูน,อุตรดิตถ์,ตาก,กำแพงเพชร,พิษณุโลก,สุโขทัย,พิจิตร,เพชรบูรณ์".split(','));
      const ISAN_SOUTH = new Set("กาฬสินธุ์,ขอนแก่น,ชัยภูมิ,นครพนม,นครราชสีมา,บึงกาฬ,บุรีรัมย์,มหาสารคาม,มุกดาหาร,ยโสธร,ร้อยเอ็ด,เลย,ศรีสะเกษ,สกลนคร,สุรินทร์,หนองคาย,หนองบัวลำภู,อำนาจเจริญ,อุดรธานี,อุบลราชธานี,กระบี่,ชุมพร,ตรัง,นครศรีธรรมราช,นราธิวาส,ปัตตานี,พังงา,พัทลุง,ภูเก็ต,ยะลา,ระนอง,สงขลา,สตูล,สุราษฎร์ธานี".split(','));
      const hasMain = new Set(DLT_OFFICES_DATABASE.filter(o => o.type === 'สำนักงานขนส่งจังหวัด').map(o => o.province));
      const M = q => 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(q);
      ALL.forEach((pv, i) => {
        const bkk = pv === 'กรุงเทพมหานคร';
        const region = bkk ? 'bkk' : NORTH.has(pv) ? 'north' : ISAN_SOUTH.has(pv) ? 'isan_south' : 'central';
        const label = bkk ? pv : 'จังหวัด' + pv;
        const base = { province: pv, region, phone: '1584 (สายด่วนกรมการขนส่งทางบก)', hours: 'ตามเวลาราชการ (ตรวจสอบก่อนเดินทาง)' };
        if (!hasMain.has(pv) && !bkk) {
          DLT_OFFICES_DATABASE.push({ ...base, id: 'auto-main-' + i, name: 'สำนักงานขนส่ง' + label, type: 'สำนักงานขนส่งจังหวัด', badge: 'ทั่วประเทศ',
            address: 'ดูที่อยู่และเส้นทางล่าสุดบนแผนที่ (กดปุ่มแผนที่นำทาง)',
            services: ['ใบขับขี่', 'งานทะเบียนรถ', 'ภาษีรถประจำปี'], mapUrl: M('สำนักงานขนส่ง' + label) });
        }
        DLT_OFFICES_DATABASE.push({ ...base, id: 'auto-br-' + i, name: 'สาขาสำนักงานขนส่งใน' + label + ' (ค้นหาบนแผนที่)', type: 'สำนักงานขนส่งสาขา', badge: 'ทั่วประเทศ',
          address: 'ค้นหาสาขาตามอำเภอใน' + label + ' บนแผนที่ (กดปุ่มแผนที่นำทาง)',
          services: ['ดูสาขาที่ใกล้ที่สุด'], mapUrl: M('สำนักงานขนส่ง สาขา ' + label) });
      });
    })();

    let currentOfficeFilter = 'all';

    // Sample database of nearby clinics & hospitals for medical certificates
    const CLINIC_DATABASE = [
      {
        name: "สบลีคลินิก บ้านหมอแหวว",
        type: "คลินิกเวชกรรม",
        distance: "ห่าง ~1.2 กม.",
        address: "หมู่ 9 บ้านสบลี ต.ป่างิ้ว อ.เวียงป่าเป้า จ.เชียงราย",
        hours: "เปิดทำการ 17:00 – 20:00 น.",
        phone: "081-387-5642",
        price: "ประมาณ 100 - 150 บาท",
        tags: ["ใกล้ที่สุด", "ออกใบรับรอง 5 โรค"],
        mapQuery: "สบลีคลินิก บ้านหมอแหวว ป่างิ้ว เวียงป่าเป้า"
      },
      {
        name: "โรงพยาบาลเวียงป่าเป้า",
        type: "โรงพยาบาลรัฐบาล",
        distance: "ห่าง ~6.3 กม.",
        address: "ตำบลเวียง อำเภอเวียงป่าเป้า จังหวัดเชียงราย",
        hours: "จันทร์-ศุกร์ 08:30 – 16:30 น. (เวลาราชการ)",
        phone: "053-781-342",
        price: "ประมาณ 50 - 120 บาท",
        tags: ["รพ. ประจำอำเภอ", "มาตรฐานแพทยสภา"],
        mapQuery: "โรงพยาบาลเวียงป่าเป้า เชียงราย"
      },
      {
        name: "คลินิกเวชกรรมหมอสมชาย (ตัวอย่างในพื้นที่)",
        type: "คลินิกเวชกรรมทั่วไป",
        distance: "ห่าง ~3.5 กม.",
        address: "ย่านตลาดสดเวียงป่าเป้า ริมถนนสาย 118",
        hours: "เปิด 08:00 – 12:00 น. และ 17:00 – 20:00 น.",
        phone: "053-781-xxx",
        price: "ประมาณ 100 - 200 บาท",
        tags: ["คลินิกทั่วไป", "รอรับได้ทันที"],
        mapQuery: "คลินิก เวียงป่าเป้า"
      },
      {
        name: "โรงพยาบาลแม่สรวย",
        type: "โรงพยาบาลรัฐบาล",
        distance: "ห่าง ~28 กม.",
        address: "อำเภอแม่สรวย จังหวัดเชียงราย",
        hours: "เวลาราชการ 08:30 – 16:30 น.",
        phone: "053-786-045",
        price: "ประมาณ 80 - 150 บาท",
        tags: ["รพ. ชุมชน"],
        mapQuery: "โรงพยาบาลแม่สรวย เชียงราย"
      }
    ];

    // --- จุดขอใบรับรองแพทย์ทำใบขับขี่ ครบ 77 จังหวัด (ลิงก์ค้นหาพิกัดบน Google Maps) ---
    (function addClinicSearchAll() {
      const PV = "กรุงเทพมหานคร,กระบี่,กาญจนบุรี,กาฬสินธุ์,กำแพงเพชร,ขอนแก่น,จันทบุรี,ฉะเชิงเทรา,ชลบุรี,ชัยนาท,ชัยภูมิ,ชุมพร,เชียงราย,เชียงใหม่,ตรัง,ตราด,ตาก,นครนายก,นครปฐม,นครพนม,นครราชสีมา,นครศรีธรรมราช,นครสวรรค์,นนทบุรี,นราธิวาส,น่าน,บึงกาฬ,บุรีรัมย์,ปทุมธานี,ประจวบคีรีขันธ์,ปราจีนบุรี,ปัตตานี,พระนครศรีอยุธยา,พะเยา,พังงา,พัทลุง,พิจิตร,พิษณุโลก,เพชรบุรี,เพชรบูรณ์,แพร่,ภูเก็ต,มหาสารคาม,มุกดาหาร,แม่ฮ่องสอน,ยโสธร,ยะลา,ร้อยเอ็ด,ระนอง,ระยอง,ราชบุรี,ลพบุรี,ลำปาง,ลำพูน,เลย,ศรีสะเกษ,สกลนคร,สงขลา,สตูล,สมุทรปราการ,สมุทรสงคราม,สมุทรสาคร,สระแก้ว,สระบุรี,สิงห์บุรี,สุโขทัย,สุพรรณบุรี,สุราษฎร์ธานี,สุรินทร์,หนองคาย,หนองบัวลำภู,อ่างทอง,อำนาจเจริญ,อุดรธานี,อุตรดิตถ์,อุทัยธานี,อุบลราชธานี".split(',');
      const KINDS = [
        { n: 'โรงพยาบาลรัฐ', t: 'โรงพยาบาลรัฐบาล', q: 'โรงพยาบาล ใบรับรองแพทย์ใบขับขี่', tag: 'รพ. รัฐ / รพ.ชุมชน' },
        { n: 'คลินิกเวชกรรม', t: 'คลินิกเวชกรรม', q: 'คลินิกเวชกรรม ใบรับรองแพทย์ใบขับขี่', tag: 'คลินิกใกล้บ้าน' },
        { n: 'รพ.สต. / สถานีอนามัย', t: 'รพ.สต. / สถานีอนามัย', q: 'โรงพยาบาลส่งเสริมสุขภาพตำบล สถานีอนามัย', bkq: 'ศูนย์บริการสาธารณสุข กรุงเทพมหานคร', tag: 'อนามัยใกล้บ้าน' }
      ];
      PV.forEach(pv => {
        const bkk = pv === 'กรุงเทพมหานคร';
        const label = bkk ? pv : 'จังหวัด' + pv;
        KINDS.forEach(k => {
          const nm = (bkk && k.bkq) ? 'ศูนย์บริการสาธารณสุข' : k.n;
          CLINIC_DATABASE.push({
            name: nm + ' ใน' + label,
            type: k.t, distance: 'ทั้งจังหวัด',
            address: 'ดูพิกัดและเส้นทาง' + nm + 'ใน' + label + ' บนแผนที่ (กดปุ่มนำทาง)',
            hours: 'โทรสอบถามเวลาให้บริการก่อนไป', phone: '',
            price: 'แตกต่างกันตามสถานพยาบาล (สอบถามก่อนไป)',
            tags: [k.tag, 'โทรถามก่อนว่าออกใบรับรองแพทย์ใบขับขี่ได้หรือไม่'],
            mapQuery: (bkk && k.bkq) ? k.bkq : k.q + ' ' + label
          });
        });
      });
    })();

    // --- รพ.สต.ป่างิ้ว (เพิ่มตามข้อมูลจากผู้ดูแลเว็บ: ออกใบรับรองแพทย์ได้ และอยู่ใกล้สำนักงานขนส่งสาขาเวียงป่าเป้า) ---
    CLINIC_DATABASE.unshift({
      name: "โรงพยาบาลส่งเสริมสุขภาพตำบลป่างิ้ว (Pa Ngio Subdistrict Health Promotion Hospital)",
      type: "รพ.สต. / สถานีอนามัย",
      distance: "ใกล้ขนส่งเวียงป่าเป้า",
      address: "ต.ป่างิ้ว อ.เวียงป่าเป้า จ.เชียงราย (อยู่ใกล้สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอเวียงป่าเป้า)",
      hours: "โทรสอบถามเวลาให้บริการก่อนไป",
      phone: "",
      price: "สอบถามค่าบริการก่อนไป",
      tags: ["ขอใบรับรองแพทย์ได้", "ใกล้สำนักงานขนส่ง", "เชียงราย"],
      mapQuery: "โรงพยาบาลส่งเสริมสุขภาพตำบลป่างิ้ว เวียงป่าเป้า เชียงราย"
    });

    // --- Tab Views Switcher ---
    function switchView(viewName) {
      if (viewName === 'offices' || viewName === 'clinic') requestLocation().then(p => { if (p) { filterOffices(); filterClinics(); } });
      document.getElementById('view-chat').classList.add('hidden');
      document.getElementById('view-offices').classList.add('hidden');
      document.getElementById('view-clinic').classList.add('hidden');
      document.getElementById('view-checklist').classList.add('hidden');
      document.getElementById('view-guides').classList.add('hidden');

      // Desktop nav classes
      const desktopTabs = [
        { id: 'navChatBtn', view: 'chat' },
        { id: 'navOfficesBtn', view: 'offices' },
        { id: 'navClinicBtn', view: 'clinic' },
        { id: 'navChecklistBtn', view: 'checklist' },
        { id: 'navGuidesBtn', view: 'guides' }
      ];

      desktopTabs.forEach(tab => {
        const btn = document.getElementById(tab.id);
        if (!btn) return;
        if (tab.view === viewName) {
          btn.className = "px-3 py-1.5 rounded-lg text-xs font-medium bg-dlt-purple text-white shadow";
        } else {
          btn.className = "px-3 py-1.5 rounded-lg text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800";
        }
      });

      // Mobile bottom nav classes
      const mobileTabs = [
        { id: 'mNavChatBtn', view: 'chat' },
        { id: 'mNavOfficesBtn', view: 'offices' },
        { id: 'mNavClinicBtn', view: 'clinic' },
        { id: 'mNavChecklistBtn', view: 'checklist' },
        { id: 'mNavGuidesBtn', view: 'guides' }
      ];

      mobileTabs.forEach(tab => {
        const btn = document.getElementById(tab.id);
        if (!btn) return;
        if (tab.view === viewName) {
          btn.className = "flex flex-col items-center justify-center text-dlt-purple dark:text-purple-400 font-semibold transition";
        } else {
          btn.className = "flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 transition";
        }
      });

      const activeViewEl = document.getElementById(`view-${viewName}`);
      if (activeViewEl) {
        activeViewEl.classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }

      if (viewName === 'offices') {
        filterOffices();
      } else if (viewName === 'clinic') {
        renderClinics(CLINIC_DATABASE);
      }
    }

    // --- Offices Directory Renderer & Filter ---
    function setOfficeFilter(filterKey) {
      currentOfficeFilter = filterKey;
      const buttons = document.querySelectorAll('.office-filter-btn');
      buttons.forEach(b => {
        b.className = "office-filter-btn px-3 py-1.5 rounded-xl text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 shrink-0";
      });
      if (event && event.currentTarget) {
        event.currentTarget.className = "office-filter-btn active px-3 py-1.5 rounded-xl text-xs font-medium bg-dlt-purple text-white shadow shrink-0";
      }
      filterOffices();
    }

    function renderOffices(list) {
      list = sortByDist(list);
      const container = document.getElementById('officeResultsGrid');
      if (!container) return;

      if (!list || list.length === 0) {
        container.innerHTML = `
          <div class="col-span-full py-10 text-center text-slate-400 text-xs">
            <i class="fa-solid fa-building-circle-xmark text-2xl mb-2 text-slate-300" data-e="1" style="font-style:normal">🏢</i>
            <div>ไม่พบสำนักงานขนส่งตามคำค้นหา ลองระบุชื่ออำเภอหรือจังหวัด เช่น "เวียงป่าเป้า", "ริมกก", หรือ "จตุจักร"</div>
          </div>
        `;
        return;
      }

      container.innerHTML = list.map(item => `
        <div class="p-3.5 sm:p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800/80 shadow-sm flex flex-col justify-between hover:border-purple-300 dark:hover:border-purple-600 transition">
          <div>
            <div class="flex items-start justify-between gap-2 mb-2">
              <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-purple-100 dark:bg-purple-950 text-dlt-purple dark:text-purple-300 border border-purple-200 dark:border-purple-800">
                ${item.type}
              </span>
              <span class="text-[10px] text-amber-700 dark:text-amber-300 bg-amber-50 dark:bg-amber-950/60 px-2 py-0.5 rounded-md font-semibold">
                ${distBadge(item)}
              </span>
            </div>

            <h4 class="font-bold text-sm text-slate-800 dark:text-slate-100 mb-1 leading-snug">
              ${item.name}
            </h4>

            <div class="text-[11px] text-slate-500 dark:text-slate-400 space-y-1 my-2 leading-relaxed">
              <div class="flex items-start gap-1.5">
                <i class="fa-solid fa-location-dot text-rose-500 text-xs mt-0.5 shrink-0" data-e="1" style="font-style:normal">📍</i>
                <span>${item.address}</span>
              </div>
              <div class="flex items-center gap-1.5">
                <i class="fa-solid fa-clock text-indigo-500 text-xs shrink-0" data-e="1" style="font-style:normal">🕒</i>
                <span>${item.hours}</span>
              </div>
              <div class="flex items-center gap-1.5">
                <i class="fa-solid fa-phone text-emerald-500 text-xs shrink-0" data-e="1" style="font-style:normal">📞</i>
                <a href="tel:${item.phone.replace(/[^0-9]/g, '')}" class="text-dlt-purple dark:text-purple-300 font-semibold underline">${item.phone}</a>
              </div>
            </div>

            <!-- Service tags -->
            <div class="flex flex-wrap gap-1 mb-3 pt-1 border-t border-slate-100 dark:border-slate-700/60">
              ${item.services.map(s => `<span class="text-[9px] px-1.5 py-0.5 rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">${s}</span>`).join('')}
            </div>
          </div>

          <div class="flex gap-2 pt-2 border-t border-slate-100 dark:border-slate-700/60">
            <a href="${item.mapUrl}" target="_blank" class="flex-1 text-center py-2 rounded-xl bg-purple-50 dark:bg-purple-950/60 hover:bg-purple-100 text-dlt-purple dark:text-purple-300 font-semibold text-xs transition active:scale-95">
              <i class="fa-solid fa-diamond-turn-right mr-1 text-amber-500" data-e="1" style="font-style:normal">🧭</i> แผนที่นำทาง (Maps)
            </a>
            <button onclick="askAIAboutOffice('${item.name}')" class="px-3 py-2 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 transition active:scale-95" title="ถาม AI เกี่ยวกับสำนักงานนี้">
              <i class="fa-solid fa-robot text-purple-600 dark:text-purple-400" data-e="1" style="font-style:normal">🤖</i>
            </button>
          </div>
        </div>
      `).join('');
    }

    function filterOffices() {
      const q = (document.getElementById('officeSearchInput')?.value || '').trim().toLowerCase();
      let list = DLT_OFFICES_DATABASE;

      if (currentOfficeFilter !== 'all') {
        list = list.filter(o => o.region === currentOfficeFilter);
      }

      if (q) {
        list = list.filter(o => 
          o.name.toLowerCase().includes(q) ||
          o.address.toLowerCase().includes(q) ||
          o.province.toLowerCase().includes(q) ||
          o.type.toLowerCase().includes(q)
        );
      }

      renderOffices(list);
    }

    function askAIAboutOffice(officeName) {
      switchView('chat');
      const input = document.getElementById('userInput');
      input.value = `ขอรายละเอียดที่ตั้ง เวลาเปิด-ปิด และเบอร์โทรศัพท์ของ "${officeName}" หน่อยครับ`;
      document.getElementById('chatForm').dispatchEvent(new Event('submit'));
    }

    // --- Clinics Renderer ---
    function renderClinics(list) {
      list = sortByDist(list);
      const container = document.getElementById('clinicResultsGrid');
      if (!container) return;

      if (list.length === 0) {
        container.innerHTML = `
          <div class="col-span-full py-8 text-center text-slate-400 text-xs">
            ไม่พบสถานพยาบาลที่ค้นหา ลองใช้คำค้นหาอื่น เช่น "เวียงป่าเป้า" หรือเปิดผ่าน Google Maps
          </div>
        `;
        return;
      }

      container.innerHTML = list.map(item => `
        <div class="p-3.5 sm:p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800/80 shadow-sm flex flex-col justify-between hover:border-purple-300 transition">
          <div>
            <div class="flex items-start justify-between gap-2 mb-1.5">
              <h4 class="font-bold text-sm text-slate-800 dark:text-slate-100 flex items-center gap-1.5">
                <i class="fa-solid fa-hospital text-purple-600 dark:text-purple-400 text-xs" data-e="1" style="font-style:normal">🏥</i>
                ${item.name}
              </h4>
              <span class="text-[10px] px-2 py-0.5 rounded-full font-bold bg-purple-100 dark:bg-purple-950 text-dlt-purple dark:text-purple-300 shrink-0">
                ${distBadge(item)}
              </span>
            </div>
            <div class="text-[11px] text-slate-500 dark:text-slate-400 mb-2 leading-relaxed">
              <div>📍 ${item.address}</div>
              <div>⏰ ${item.hours}</div>
              ${item.phone ? `<div>📞 <a href="tel:${item.phone.replace(/[^0-9]/g, '')}" class="text-purple-600 dark:text-purple-400 underline font-semibold">${item.phone}</a></div>` : ''}
              <div>💰 ค่าบริการ: ${item.price}</div>
            </div>
            <div class="flex flex-wrap gap-1 mb-3">
              ${item.tags.map(t => `<span class="text-[9px] px-2 py-0.5 rounded-md bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 font-medium">${t}</span>`).join('')}
            </div>
          </div>
          <div class="flex gap-2 pt-2 border-t border-slate-100 dark:border-slate-700/60">
            <a href="${item.mapUrl || ('https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(item.mapQuery))}" target="_blank" class="flex-1 text-center py-2 rounded-xl bg-purple-50 dark:bg-purple-950/60 hover:bg-purple-100 text-dlt-purple dark:text-purple-300 font-semibold text-xs transition active:scale-95">
              <i class="fa-solid fa-diamond-turn-right mr-1" data-e="1" style="font-style:normal">🧭</i> นำทาง (Maps)
            </a>
            <button onclick="askAIAboutClinic('${item.name}')" class="px-3 py-2 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 text-xs hover:bg-slate-50 transition active:scale-95" title="ถาม AI เกี่ยวกับที่นี่">
              <i class="fa-solid fa-robot" data-e="1" style="font-style:normal">🤖</i>
            </button>
          </div>
        </div>
      `).join('');
    }

    function filterClinics() {
      const q = document.getElementById('clinicSearchInput').value.trim().toLowerCase();
      if (!q) {
        renderClinics(CLINIC_DATABASE);
        return;
      }
      const filtered = CLINIC_DATABASE.filter(c => 
        c.name.toLowerCase().includes(q) || 
        c.address.toLowerCase().includes(q) || 
        c.type.toLowerCase().includes(q)
      );
      renderClinics(filtered);
    }

    function detectUserLocationAndClinics() {
      showToast("กำลังหาตำแหน่งของคุณ...");
      requestLocation(true).then(p => {
        const Q = encodeURIComponent('คลินิก โรงพยาบาล ใบรับรองแพทย์ใบขับขี่');
        const near = {
          pin: true, name: 'ใบรับรองแพทย์ใบขับขี่ ใกล้ตำแหน่งของคุณ', type: 'ค้นหาจากตำแหน่งปัจจุบัน',
          address: p ? 'ตำแหน่งปัจจุบันของคุณ (กดปุ่มนำทางเพื่อดูสถานพยาบาลรอบตัว)' : 'แผนที่จะใช้ตำแหน่งของเครื่องคุณ (กดปุ่มนำทางเพื่อดูสถานพยาบาลรอบตัว)',
          hours: 'โทรสอบถามเวลาให้บริการก่อนไป', phone: '', price: 'แตกต่างกันตามสถานพยาบาล (สอบถามก่อนไป)', tags: ['กดนำทางเพื่อดูรอบตัว'],
          mapUrl: p ? 'https://www.google.com/maps/search/' + Q + '/@' + p.lat + ',' + p.lng + ',14z'
                    : 'https://www.google.com/maps/search/' + Q + '+' + encodeURIComponent('ใกล้ฉัน')
        };
        renderClinics([near, ...CLINIC_DATABASE]);
        showToast(p ? "พบตำแหน่งของคุณแล้ว เรียงตามระยะทางให้แล้ว" : "อ่านตำแหน่งไม่ได้ กดนำทางที่การ์ดแรกเพื่อเปิดแผนที่ใกล้ตัว", !p);
      });
    }

    function askAIAboutClinic(clinicName) {
      switchView('chat');
      const input = document.getElementById('userInput');
      input.value = `ขอรายละเอียดการไปขอใบรับรองแพทย์ 5 โรคสำหรับทำใบขับขี่ที่ "${clinicName}" ต้องเตรียมตัวและมีค่าใช้จ่ายประมาณเท่าไร?`;
      document.getElementById('chatForm').dispatchEvent(new Event('submit'));
    }

    // Auto resize textarea for mobile
    function autoResizeTextarea(textarea) {
      textarea.style.height = 'auto';
      textarea.style.height = Math.min(textarea.scrollHeight, 100) + 'px';
    }

    // --- Dark Mode Toggle ---
    function toggleDarkMode() {
      const html = document.documentElement;
      html.classList.toggle('dark');
      const isDark = html.classList.contains('dark');
      try{localStorage.setItem('dlt_theme', isDark ? 'dark' : 'light');}catch(e){}
    }

    let __t=null;try{__t=localStorage.getItem('dlt_theme');}catch(e){}
    if (__t === 'dark' || (!__t && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    }

    // --- Toast Notification Helper ---
    function showToast(message, isError = false) {
      const toast = document.getElementById('toast');
      const msg = document.getElementById('toastMsg');
      const icon = document.getElementById('toastIcon');

      msg.innerText = message;
      if (isError) {
        icon.className = "fa-solid fa-circle-exclamation text-rose-400 text-sm";
      } else {
        icon.className = "fa-solid fa-circle-check text-emerald-400 text-sm";
      }

      toast.classList.remove('translate-y-24', 'opacity-0');
      setTimeout(() => {
        toast.classList.add('translate-y-24', 'opacity-0');
      }, 3000);
    }

    const CHECKLIST_DATA = {
      'license-2to5': {
        title: "เปลี่ยนใบอนุญาตขับรถ ชั่วคราว (2 ปี) เป็นส่วนบุคคล (5 ปี)",
        sub: "ยื่นเปลี่ยนล่วงหน้าได้ 60 วันก่อนหมดอายุ (กรณีหมดอายุแล้ว ต้องมาทำใหม่เท่านั้น)",
        items: [
          { text: "ใบขับขี่เดิม (ชนิดชั่วคราว 2 ปี)", detail: "ต้องยังไม่หมดอายุ หรือนำมาประกอบการยื่นทำใหม่กรณีหมดอายุแล้ว" },
          { text: "บัตรประจำตัวประชาชนฉบับจริง", detail: "ยังไม่หมดอายุ และข้อมูลเห็นชัดเจน" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "แบบฟอร์มมาตรฐานแพทยสภา ตรวจโรคต้องห้ามครบ 5 โรค" },
          { text: "หลักฐานการจองคิว DLT Smart Queue", detail: "แสดง QR Code หรือหน้าจอในแอปพลิเคชัน" }
        ],
        note: "🔴 <strong>คำเตือนสำคัญ: กรณีใบขับขี่ชั่วคราวหมดอายุ ต้องมาทำใหม่เท่านั้น!</strong><br>หากปล่อยให้ใบขับขี่ชั่วคราว 2 ปี หมดอายุลง จะไม่สามารถต่ออายุได้ตามปกติ ผู้ขับขี่จะต้องเริ่มต้นกระบวนการยื่นขอทำใหม่ทั้งหมด (นำใบรับรองแพทย์ ตรวจสมรรถภาพร่างกาย เข้ารับการอบรม และสอบข้อเขียน/สอบขับรถใหม่ตามขั้นตอนของผู้ขอทำใบขับขี่ใหม่)",
        fee: "ค่าธรรมเนียม: รถยนต์ 505 บาท / รถจักรยานยนต์ 255 บาท (หากเริ่มกระบวนการทำใหม่อาจมีค่าธรรมเนียมตามประเภทคำขอใหม่)"
      },
      'license-5to5': {
        title: "ต่ออายุใบขับขี่ส่วนบุคคล (5 ปี) เป็นส่วนบุคคล (5 ปี)",
        sub: "ต่อล่วงหน้าได้ 6 เดือน (180 วัน) หรือหมดอายุไม่เกิน 1 ปี",
        items: [
          { text: "ใบขับขี่เดิม (ชนิด 5 ปี)", detail: "ตัวจริงที่กำลังจะหมดอายุหรือหมดอายุแล้ว" },
          { text: "บัตรประจำตัวประชาชนฉบับจริง", detail: "ยังไม่หมดอายุ" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "ตามแบบมาตรฐานแพทยสภา" },
          { text: "หลักฐานผ่านการอบรม DLT e-Learning", detail: "อบรมหลักสูตรต่ออายุ 1 ชม. ผ่านเว็บ มีอายุ 90 วัน" },
          { text: "คิวจอง DLT Smart Queue", detail: "เลือกหัวข้อ 'ต่อใบขับขี่ (มีผลอบรมแล้ว)'" }
        ],
        note: "คำแนะนำ: หากใบขับขี่ขาดเกิน 1 ปี ต้องสอบข้อเขียนใหม่ (ต้องได้ 45/50 คะแนน) หากขาดเกิน 3 ปี ต้องสอบขับรถใหม่ด้วย",
        fee: "ค่าธรรมเนียม: รถยนต์ 505 บาท / มอเตอร์ไซค์ 255 บาท"
      },
      'transfer-vehicle': {
        title: "โอนกรรมสิทธิ์รถยนต์ / รถจักรยานยนต์ (เปลี่ยนเจ้าของ)",
        sub: "มาด้วยตนเองใช้ 'บัตร ปชช. ตัวจริง' เสียบ Smart Card ไม่ต้องใช้สำเนา",
        items: [
          { text: "สมุดคู่มือจดทะเบียนรถ (เล่มจริง)", detail: "เล่มสีน้ำเงิน (รถยนต์) หรือเล่มสีเขียว (มอเตอร์ไซค์) ตัวจริง ภาษีต้องไม่ขาดเกิน 3 ปี" },
          { text: "แบบคำขอโอนและรับโอน (ขบ. ๑-๐๑)", detail: "กรอกข้อมูลและลงลายมือชื่อทั้งผู้โอน (เจ้าของเดิม) และผู้รับโอน (ผู้ซื้อ) ให้ครบถ้วน" },
          { text: "บัตรประชาชนตัวจริง (ผู้โอน และ ผู้รับโอน)", detail: "✨ มาด้วยตนเองใช้บัตรตัวจริงเสียบอ่านชิป Smart Card ได้ทันที **ไม่ต้องถ่ายสำเนาบัตร**" },
          { text: "หนังสือมอบอำนาจ + สำเนาบัตร ปชช. (เฉพาะกรณีไม่ได้มาด้วยตนเอง)", detail: "กรณีฝ่ายใดฝ่ายหนึ่งไม่สะดวกมา ติดอากรแสตมป์ 10 บาท (มอบเรื่องเดียว) หรือ 30 บาท พร้อมสำเนาบัตร ปชช. ที่เซ็นรับรองถูกต้อง" }
        ],
        note: "💡 <strong>มาด้วยตนเองสะดวกมาก:</strong> ตามนโยบายยกเลิกการใช้สำเนาเอกสาร หากผู้โอนและผู้รับโอนมาด้วยตนเอง เจ้าหน้าที่จะเสียบอ่านบัตรประชาชนตัวจริง (Smart Card) ทันที ไม่ต้องเตรียมสำเนาบัตรประชาชนมาให้สิ้นเปลือง<br><br>📌 <strong>ขั้นตอนการดำเนินการ 5 ลำดับ:</strong> 1. ยื่นเอกสาร ➔ 2. นำรถมาตรวจสภาพ ➔ 3. ประเมินราคา ➔ 4. ชำระเงิน ➔ 5. รับเล่มทะเบียน",
        fee: "ค่าธรรมเนียม: ค่าคำขอ 5 บาท, ค่าโอน 100 บาท, ตรวจสภาพ (รถยนต์ 100 บาท / มอเตอร์ไซค์ 50 บาท), ค่าอากรแสตมป์ร้อยละ 0.5 (500 บาท ต่อราคาประเมิน 100,000 บาท)"
      },
      'tax-annual': {
        title: "ชำระภาษีรถประจำปี (ต่อป้ายวงกลม)",
        sub: "ต่อล่วงหน้าได้ 90 วัน ทั้งที่สำนักงานขนส่ง ตู้ Kiosk และออนไลน์",
        items: [
          { text: "สมุดคู่มือจดทะเบียนรถ หรือ สำเนา", detail: "ใช้เป็นหลักฐานระบุเลขตัวถังและทะเบียน" },
          { text: "พ.ร.บ. คุ้มครองผู้ประสบภัยจากรถ", detail: "ส่วนท้ายที่ยังไม่หมดอายุ หรือซื้อพร้อมต่อภาษี" },
          { text: "ใบรับรองการตรวจสภาพรถ (ตรอ.)", detail: "กรณีรถยนต์อายุเกิน 7 ปี หรือมอเตอร์ไซค์เกิน 5 ปี" }
        ],
        note: "ชำระออนไลน์ได้ที่เว็บไซต์ eservice.dlt.go.th หากมี พ.ร.บ. และ ตรอ. เรียบร้อยแล้ว จัดส่งป้ายภาษีถึงบ้านทางไปรษณีย์",
        fee: "ค่าภาษีขึ้นอยู่กับขนาดเครื่องยนต์ (cc) สำหรับรถเก๋ง หรือน้ำหนักรถสำหรับรถกระบะ"
      },
      'new-license': {
        title: "ทำใบอนุญาตขับรถยนต์ส่วนบุคคลใหม่ (ชั่วคราว 2 ปี)",
        sub: "ต้องมีอายุ 18 ปีบริบูรณ์ขึ้นไป และผ่านการอบรม 5 ชั่วโมง",
        items: [
          { text: "บัตรประจำตัวประชาชนฉบับจริง", detail: "มีสถานะปกติ ไม่หมดอายุ" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "แสดงว่าไม่มีโรคต้องห้ามและไม่เป็นบุคคลวิกลจริต" },
          { text: "หนังสือรับรองผ่านการอบรม 5 ชม. (ถ้ามี)", detail: "กรณีเรียนจบจากโรงเรียนสอนขับรถที่กรมขนส่งรับรอง" },
          { text: "การจองคิว DLT Smart Queue", detail: "เลือก 'งานทำใบขับขี่ใหม่'" }
        ],
        note: "ขั้นตอนที่ขนส่ง: ทดสอบร่างกาย -> อบรม 5 ชั่วโมง -> สอบข้อเขียน 50 ข้อ (เกณฑ์ผ่าน 90%) -> สอบขับรถในสนาม",
        fee: "ค่าธรรมเนียม: รถยนต์ 205 บาท / รถจักรยานยนต์ 105 บาท"
      },
      'first-car': {
        title: "ไม่มีใบขับขี่ ขอทำครั้งแรก: รถยนต์ส่วนบุคคล (ชั่วคราว 2 ปี)",
        sub: "อายุ 18 ปีบริบูรณ์ขึ้นไป ไม่เคยมีใบขับขี่มาก่อนก็เริ่มได้",
        items: [
          { text: "บัตรประจำตัวประชาชนฉบับจริง", detail: "ยังไม่หมดอายุ ใช้เสียบอ่านชิปที่เคาน์เตอร์ ไม่ต้องถ่ายสำเนา" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "แบบมาตรฐานแพทยสภา ขอได้ที่คลินิกหรือโรงพยาบาล ดูจุดขอใบรับรองแพทย์ในแท็บ \"หาใบรับรองแพทย์\"" },
          { text: "จองคิว DLT Smart Queue", detail: "เลือกหัวข้อ \"ทำใบขับขี่ใหม่\" แล้วเก็บ QR Code ไว้แสดง" },
          { text: "หนังสือรับรองจากโรงเรียนสอนขับรถ (ถ้ามี)", detail: "เฉพาะกรณีเรียนกับโรงเรียนที่กรมการขนส่งทางบกรับรอง สอบถามโรงเรียนว่าใช้แทนขั้นตอนไหนได้บ้าง" },
          { text: "แว่นตา / คอนแทคเลนส์ที่ใช้ประจำ (ถ้ามี)", detail: "ใช้ตอนทดสอบสายตา ควรพักผ่อนให้พอและงดแอลกอฮอล์ก่อนวันทดสอบปฏิกิริยา" },
          { text: "ฝึกทำข้อสอบข้อเขียนล่วงหน้า", detail: "ไม่ใช่เอกสาร แต่ช่วยให้สอบผ่านได้ในครั้งเดียว ประหยัดเวลาและค่าเดินทาง" }
        ],
        note: "📌 <strong>ขั้นตอนที่สำนักงานขนส่ง:</strong> 1. ยื่นเอกสาร ➔ 2. ทดสอบสมรรถภาพร่างกาย (สายตา สีบอด ปฏิกิริยา) ➔ 3. อบรม ➔ 4. สอบข้อเขียน ➔ 5. สอบขับรถ ➔ 6. ถ่ายรูป ชำระเงิน รับใบขับขี่ชั่วคราว 2 ปี<br><br>⏳ <strong>อย่าลืม:</strong> ใบขับขี่ชั่วคราวมีอายุ 2 ปี ต้องเปลี่ยนเป็นแบบ 5 ปีก่อนหมดอายุ (ดูแท็บ \"ต่อ 2 ปี เป็น 5 ปี\") ถ้าปล่อยให้หมดต้องเริ่มทำใหม่ทั้งหมด<br><br>📞 ข้อมูลเป็นแนวทางเบื้องต้น เกณฑ์และค่าธรรมเนียมอาจเปลี่ยนแปลง ยืนยันกับสายด่วน 1584 หรือ dlt.go.th ก่อนไป",
        fee: "ค่าธรรมเนียมโดยประมาณ: รถยนต์ 205 บาท (ยืนยันอัตราปัจจุบันก่อนไป)"
      },
      'first-moto': {
        title: "ไม่มีใบขับขี่ ขอทำครั้งแรก: รถจักรยานยนต์ (ชั่วคราว 2 ปี)",
        sub: "อายุ 15 ปีบริบูรณ์ขึ้นไปสำหรับรถไม่เกิน 110 ซีซี / 18 ปีขึ้นไปสำหรับรถที่ใหญ่กว่านั้น",
        items: [
          { text: "บัตรประจำตัวประชาชนฉบับจริง", detail: "ผู้ที่ยังไม่มีบัตร (อายุต่ำกว่าเกณฑ์ทำบัตร) ให้สอบถามเอกสารแทนกับสำนักงานขนส่งก่อน" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "แบบมาตรฐานแพทยสภา ตรวจโรคต้องห้ามครบ 5 โรค" },
          { text: "จองคิว DLT Smart Queue", detail: "เลือกหัวข้อ \"ทำใบขับขี่ใหม่\" ประเภทรถจักรยานยนต์" },
          { text: "หนังสือยินยอมและบัตรประชาชนของผู้ปกครอง (กรณีอายุต่ำกว่า 18 ปี)", detail: "สอบถามสำนักงานขนส่งว่าต้องให้ผู้ปกครองมาด้วยตนเองหรือไม่ และใช้แบบฟอร์มใด" },
          { text: "แว่นตา / คอนแทคเลนส์ที่ใช้ประจำ (ถ้ามี)", detail: "ใช้ตอนทดสอบสายตา" }
        ],
        note: "📌 <strong>ขั้นตอนที่สำนักงานขนส่ง:</strong> 1. ยื่นเอกสาร ➔ 2. ทดสอบสมรรถภาพร่างกาย (สายตา สีบอด ปฏิกิริยา) ➔ 3. อบรม ➔ 4. สอบข้อเขียน ➔ 5. สอบขับรถ ➔ 6. ถ่ายรูป ชำระเงิน รับใบขับขี่ชั่วคราว 2 ปี<br><br>⏳ <strong>อย่าลืม:</strong> ใบขับขี่ชั่วคราวมีอายุ 2 ปี ต้องเปลี่ยนเป็นแบบ 5 ปีก่อนหมดอายุ (ดูแท็บ \"ต่อ 2 ปี เป็น 5 ปี\") ถ้าปล่อยให้หมดต้องเริ่มทำใหม่ทั้งหมด<br><br>📞 ข้อมูลเป็นแนวทางเบื้องต้น เกณฑ์และค่าธรรมเนียมอาจเปลี่ยนแปลง ยืนยันกับสายด่วน 1584 หรือ dlt.go.th ก่อนไป",
        fee: "ค่าธรรมเนียมโดยประมาณ: รถจักรยานยนต์ 105 บาท (ยืนยันอัตราปัจจุบันก่อนไป)"
      },
      'first-foreign': {
        title: "ไม่มีใบขับขี่ไทย ขอทำครั้งแรก: ชาวต่างชาติ",
        sub: "ต้องมีหลักฐานว่าพำนักในประเทศไทยตามกฎหมาย",
        items: [
          { text: "หนังสือเดินทาง (Passport) ฉบับจริง", detail: "พร้อมวีซ่าหรือหลักฐานการพำนักที่ยังไม่หมดอายุ" },
          { text: "ใบรับรองถิ่นที่อยู่ หรือใบอนุญาตทำงาน", detail: "ใช้พิสูจน์ที่พักอาศัยในไทย ประเภทเอกสารที่รับอาจขึ้นกับสถานะวีซ่า ควรสอบถามล่วงหน้า" },
          { text: "ใบรับรองแพทย์ (อายุไม่เกิน 1 เดือน)", detail: "แบบมาตรฐานแพทยสภา ขอได้ที่คลินิกหรือโรงพยาบาลในไทย" },
          { text: "ใบขับขี่จากประเทศตนเอง / ใบขับขี่สากล (ถ้ามี)", detail: "นำติดตัวไปด้วยและถามเจ้าหน้าที่ว่ามีผลต่อขั้นตอนหรือการยกเว้นการสอบอย่างไร" },
          { text: "จองคิว DLT Smart Queue", detail: "เลือกหัวข้อที่ตรงกับประเภทใบขับขี่ที่ต้องการ" }
        ],
        note: "📌 <strong>ขั้นตอนที่สำนักงานขนส่ง:</strong> 1. ยื่นเอกสาร ➔ 2. ทดสอบสมรรถภาพร่างกาย (สายตา สีบอด ปฏิกิริยา) ➔ 3. อบรม ➔ 4. สอบข้อเขียน ➔ 5. สอบขับรถ ➔ 6. ถ่ายรูป ชำระเงิน รับใบขับขี่ชั่วคราว 2 ปี<br><br>⚠️ เอกสารสำหรับชาวต่างชาติแตกต่างกันตามสัญชาติและประเภทวีซ่ามากที่สุด แนะนำให้โทร 1584 ยืนยันรายการเอกสารก่อนเดินทางไปสำนักงานขนส่ง<br><br>📞 ข้อมูลเป็นแนวทางเบื้องต้น เกณฑ์และค่าธรรมเนียมอาจเปลี่ยนแปลง ยืนยันกับสายด่วน 1584 หรือ dlt.go.th ก่อนไป",
        fee: "ค่าธรรมเนียม: ตามประเภทใบขับขี่ที่ขอ (สอบถามที่ 1584)"
      }
    };

    let currentChecklistKey = 'license-2to5';

    function loadChecklist(key) {
      currentChecklistKey = key;
      const data = CHECKLIST_DATA[key];
      if (!data) return;

      const tabBtns = document.querySelectorAll('#checklistTabs button');
      tabBtns.forEach(btn => {
        btn.className = "checklist-tab shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300";
      });
      if (event && event.currentTarget) {
        event.currentTarget.className = "checklist-tab active shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-dlt-purple text-white shadow";
      }

      document.getElementById('checklistTitle').innerText = data.title;
      document.getElementById('checklistSub').innerText = data.sub;
      document.getElementById('checklistNote').innerHTML = `
        <i class="fa-solid fa-triangle-exclamation text-sm text-amber-600 shrink-0 mt-0.5" data-e="1" style="font-style:normal">⚠️</i>
        <div>
          <div class="font-bold mb-0.5">${data.fee}</div>
          <div>${data.note}</div>
        </div>
      `;

      const container = document.getElementById('checklistItems');
      container.innerHTML = '';

      data.items.forEach((item) => {
        const itemEl = document.createElement('label');
        itemEl.className = "flex items-start gap-3 p-3 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 cursor-pointer hover:border-purple-300 dark:hover:border-purple-600 transition";
        itemEl.innerHTML = `
          <input type="checkbox" onchange="updateChecklistProgress()" class="chk-item mt-0.5 w-4 h-4 text-dlt-purple rounded border-slate-300 focus:ring-dlt-purple dark:bg-slate-700 dark:border-slate-600" />
          <div class="flex-1 text-xs">
            <div class="font-semibold text-slate-800 dark:text-slate-200">${item.text}</div>
            <div class="text-slate-500 dark:text-slate-400 text-[11px] mt-0.5">${item.detail}</div>
          </div>
        `;
        container.appendChild(itemEl);
      });

      updateChecklistProgress();
    }

    function updateChecklistProgress() {
      const checkboxes = document.querySelectorAll('.chk-item');
      let checkedCount = 0;
      checkboxes.forEach(chk => {
        if (chk.checked) checkedCount++;
      });
      const badge = document.getElementById('checklistProgressBadge');
      badge.innerText = `${checkedCount} / ${checkboxes.length} รายการ`;
      if (checkedCount === checkboxes.length && checkboxes.length > 0) {
        badge.className = "px-2.5 py-1 bg-emerald-100 dark:bg-emerald-950 text-emerald-600 dark:text-emerald-400 rounded-full text-[11px] font-bold animate-pulse";
        showToast("เตรียมเอกสารครบถ้วนทุกรายการแล้ว 👏");
      } else {
        badge.className = "px-2.5 py-1 bg-purple-100 dark:bg-purple-900/60 text-dlt-purple dark:text-purple-300 rounded-full text-[11px] font-bold";
      }
    }

    function resetChecklist() {
      const checkboxes = document.querySelectorAll('.chk-item');
      checkboxes.forEach(c => c.checked = false);
      updateChecklistProgress();
      showToast("ล้างรายการตรวจสอบแล้ว");
    }

    function askAIAssistantWithChecklist() {
      const data = CHECKLIST_DATA[currentChecklistKey];
      switchView('chat');
      const input = document.getElementById('userInput');
      input.value = `ขอคำแนะนำและเอกสารที่ต้องใช้สำหรับ "${data.title}" เพิ่มเติมหน่อยครับ มีเงื่อนไขอะไรที่ต้องระวังเป็นพิเศษไหม?`;
      document.getElementById('chatForm').dispatchEvent(new Event('submit'));
    }

    // ฟังก์ชันเรียกใช้งาน Gemini API ตรงๆ แบบง่าย รวดเร็ว ไม่ซับซ้อน
    async function callGemini(userQuery) {
      const msgs = chatHistory.map(m => ({ role: m.role === 'model' ? 'assistant' : 'user', content: m.parts[0].text }));
      msgs.push({ role: 'user', content: userQuery });
      const ctl = new AbortController();
      const tm = setTimeout(() => ctl.abort(), 45000);
      const res = await fetch('api/chat.php', {
        signal: ctl.signal,
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ messages: msgs.slice(-11) })
      });
      clearTimeout(tm);
      if (!res.ok) {
        const e = await res.json().catch(() => ({}));
        throw new Error(e.error || ('HTTP ' + res.status));
      }
      const d = await res.json();
      if (!d.reply) throw new Error('empty');
      return d.reply;
    }

    // ฐานข้อมูลอัจฉริยะสำรอง (ตอบทันทีเมื่อ API Key ขัดข้องหรือไม่มีเน็ต)
    function generateSmartOfflineResponse(query) {
      const q = query.toLowerCase();

      // อบรม e-Learning: อายุผลการอบรม / ดูไม่จบ
      if ((q.includes("e-learning") || q.includes("elearning") || q.includes("อบรมออนไลน์") || q.includes("อบรมใบขับขี่")) &&
          (q.includes("อายุ") || q.includes("กี่วัน") || q.includes("ไม่จบ") || q.includes("บันทึก") || q.includes("หมดอายุ") || q.includes("ใช้ได้"))) {
        return `### 🎓 ผลอบรม DLT e-Learning

* **อายุผลการอบรม:** นำผลไปยื่นที่สำนักงานขนส่งได้ภายใน **90 วัน** นับจากวันที่ผ่านการอบรม เกินกำหนดต้องอบรมใหม่
* **ใช้ได้กับ:** ผู้ที่ใบขับขี่หมดอายุไม่เกิน 1 ปี หรือต่อล่วงหน้าไม่เกิน 90 วันเท่านั้น (หมดอายุเกิน 1 ปีควรจองคิวและดำเนินการที่สำนักงานขนส่ง)

### ⚠️ ถ้าดูวิดีโอไม่จบ ระบบบันทึกไหม?
คำแนะนำที่เผยแพร่ทั่วไประบุว่า **ห้ามกดข้ามและห้ามปิดหน้าต่างระหว่างอบรม** มิฉะนั้นต้องดูใหม่ทั้งหมด จึงไม่ควรคิดว่าระบบจะบันทึกความคืบหน้าให้
* เผื่อเวลาดูรวดเดียวจนจบ (รถส่วนบุคคลประมาณ 1 ชั่วโมง) และตอบคำถามสุ่มที่ขึ้นระหว่างอบรมให้ครบ
* ถ้าหลุดกลางคัน ให้ตรวจสถานะที่เมนู "ตรวจสอบสถานะการอบรมออนไลน์" ที่ dlt-elearning.com หรือโทร **1584** เพื่อยืนยัน
* ผ่านแล้วให้แคปหน้าจอผลการอบรมเก็บไว้เป็นหลักฐาน

📞 ข้อมูลเป็นแนวทางเบื้องต้น ยืนยันกับ 1584 หรือ dlt.go.th อีกครั้ง`;
      }

      // จองคิว DLT Smart Queue
      if (q.includes("smart queue") || q.includes("smartqueue") || q.includes("จองคิว") || q.includes("gecc")) {
        return `### 📱 วิธีจองคิวผ่าน DLT Smart Queue

**เตรียมก่อนจอง:** บัตรประชาชน (หรือพาสปอร์ต) เบอร์มือถือ อีเมล

**ทางแอป (Android/iOS)**
1. ดาวน์โหลดแอป **DLT Smart Queue**
2. เข้าสู่ระบบ/ลงทะเบียน (บางเวอร์ชันให้เข้าด้วย **ThaID** ต้องลงทะเบียนแอป ThaID ก่อน เวอร์ชันเก่าลงทะเบียนด้วยบัตรประชาชนหรือพาสปอร์ตแล้วตั้งรหัสผ่าน)
3. กรอกชื่อ-นามสกุล วันเกิด เบอร์มือถือ อีเมล
4. เลือกสำนักงานขนส่งที่สะดวก
5. เลือกประเภทบริการ **งานใบอนุญาต**
6. เลือกประเภทงาน เช่น ทำใบขับขี่ใหม่ หรือต่ออายุ 2 ปีเป็น 5 ปี / 5 ปีเป็น 5 ปี
7. เลือกวันที่มีคิวว่างและรอบเวลา
8. กดยืนยัน จะได้ **QR Code** และสรุปการจอง ให้แคปหน้าจอเก็บไว้

**ทางเว็บ:** เข้า **gecc.dlt.go.th** ลงทะเบียน/เข้าสู่ระบบ เลือกจังหวัด สำนักงาน ประเภทงาน วันเวลา แล้วดูรหัสการจองที่หน้า "ประวัติการจอง" (ยกเลิกหรือเปลี่ยนวันได้)

**วันไปจริง:** ไปถึงก่อนเวลา 30 นาที – 1 ชั่วโมง แสดง QR Code พร้อมเอกสารตัวจริง (บัตรประชาชน ใบขับขี่เดิม ใบรับรองแพทย์อายุไม่เกิน 1 เดือน ผลอบรม e-Learning ถ้ามี)

📞 ชื่อเมนูอาจต่างตามเวอร์ชันแอป ยืนยันกับ 1584 หรือ dlt.go.th`;
      }

      // หมวดที่ตั้งสำนักงานขนส่ง และสำนักงานสาขา
      if (q.includes("ที่ตั้ง") || q.includes("สาขา") || q.includes("สำนักงานขนส่ง") || q.includes("อยู่ที่ไหน") || q.includes("พิกัด") || q.includes("จตุจักร") || q.includes("พื้นที่ 5") || q.includes("พื้นที่ 1") || q.includes("พื้นที่ 2") || q.includes("พื้นที่ 3") || q.includes("พื้นที่ 4") || q.includes("เวียงป่าเป้า") || q.includes("เชียงราย") || q.includes("เชียงใหม่")) {
        
        // กรณีถามถึง กทม. หรือพื้นที่ 1-5
        if (q.includes("กทม") || q.includes("กรุงเทพ") || q.includes("พื้นที่") || q.includes("จตุจักร") || q.includes("บางขุนเทียน") || q.includes("ตลิ่งชัน") || q.includes("พระโขนง") || q.includes("หนองจอก")) {
          return `### 🏢 ที่ตั้งสำนักงานขนส่งกรุงเทพมหานคร ทั้ง 5 พื้นที่

เวลาทำการ: วันจันทร์ - ศุกร์ เวลา 08:30 – 16:30 น. (เว้นวันหยุดราชการ)

1. **สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 5 (จตุจักร - สำนักงานใหญ่)**
   * **ที่ตั้ง:** ตรงข้ามสวนจตุจักร เลขที่ 1032 ถนนพหลโยธิน แขวงจอมพล เขตจตุจักร กทม.
   * **พื้นที่รับผิดชอบ:** เขตจตุจักร, ดินแดง, ดุสิต, บางซื่อ, พญาไท, ราชเทวี, ลาดพร้าว, ปทุมวัน ฯลฯ
   * **โทรศัพท์:** 02-271-8888, สายด่วน 1584
   * 🗺️ [เปิดแผนที่ Google Maps นำทางไปขนส่งพื้นที่ 5 (จตุจักร)](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+5+จตุจักร)

2. **สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 1 (บางขุนเทียน)**
   * **ที่ตั้ง:** ถนนบางขุนเทียน-ชายทะเล แขวงท่าข้าม เขตบางขุนเทียน กทม.
   * **โทรศัพท์:** 02-415-7337
   * 🗺️ [เปิดแผนที่ Google Maps นำทางไปขนส่งพื้นที่ 1](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+1+บางขุนเทียน)

3. **สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 2 (ตลิ่งชัน)**
   * **ที่ตั้ง:** ถนนสวนผัก แขวงตลิ่งชัน เขตตลิ่งชัน กทม.
   * **โทรศัพท์:** 02-433-4773
   * 🗺️ [เปิดแผนที่ Google Maps นำทางไปขนส่งพื้นที่ 2](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+2+ตลิ่งชัน)

4. **สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 3 (พระโขนง - สุขุมวิท 62)**
   * **ที่ตั้ง:** ซอยสุขุมวิท 62 แขวงบางจาก เขตพระโขนง กทม. (ใกล้ BTS บางจาก)
   * **โทรศัพท์:** 02-332-9688
   * 🗺️ [เปิดแผนที่ Google Maps นำทางไปขนส่งพื้นที่ 3](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+3+สุขุมวิท+62)

5. **สำนักงานขนส่งกรุงเทพมหานครพื้นที่ 4 (หนองจอก)**
   * **ที่ตั้ง:** ถนนสุวินทวงศ์ แขวงลำผักชี เขตหนองจอก กทม.
   * **โทรศัพท์:** 02-543-5500
   * 🗺️ [เปิดแผนที่ Google Maps นำทางไปขนส่งพื้นที่ 4](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งกรุงเทพมหานครพื้นที่+4+หนองจอก)

💡 *แนะนำจองคิวล่วงหน้าผ่านแอป **DLT Smart Queue** ก่อนเดินทางไปเพื่อความสะดวกรวดเร็วครับ*`;
        }

        // กรณีถามถึง เชียงราย หรือสาขาเวียงป่าเป้า/พาน/เทิง
        if (q.includes("เชียงราย") || q.includes("เวียงป่าเป้า") || q.includes("พาน") || q.includes("เทิง")) {
          return `### 📍 ที่ตั้งสำนักงานขนส่งจังหวัดเชียงราย และสำนักงานสาขา

เวลาทำการ: วันจันทร์ - ศุกร์ เวลา 08:30 – 16:30 น. (ปิดพักเที่ยง 12:00-13:00 น. ในบางแผนก)

1. **สำนักงานขนส่งจังหวัดเชียงราย (สำนักงานใหญ่ - ริมกก)**
   * **ที่ตั้ง:** 370 หมู่ 6 ถนนศูนย์ราชการ ตำบลริมกก อำเภอเมือง จังหวัดเชียงราย 57100
   * **โทรศัพท์:** 053-152-076 หรือ 053-152-077
   * 🗺️ [เปิดแผนที่ Google Maps ไปขนส่งเชียงราย (ริมกก)](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+ตำบลริมกก)

2. **สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอเวียงป่าเป้า**
   * **ที่ตั้ง:** หมู่ 2 ตำบลเวียง อำเภอเวียงป่าเป้า จังหวัดเชียงราย 57170 (ริมถนนทางหลวง 118 เชียงใหม่-เชียงราย)
   * **โทรศัพท์:** 053-781-329
   * **บริการ:** ทำและต่ออายุใบขับขี่, ตรวจสภาพและต่อภาษีรถ, งานทะเบียนโอน-ย้าย
   * 🗺️ [เปิดแผนที่ Google Maps ไปขนส่งสาขาเวียงป่าเป้า](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอเวียงป่าเป้า)

3. **สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอพาน**
   * **ที่ตั้ง:** ตำบลเมืองพาน อำเภอพาน จังหวัดเชียงราย 57120
   * **โทรศัพท์:** 053-721-515
   * 🗺️ [เปิดแผนที่ Google Maps ไปขนส่งสาขาพาน](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอพาน)

4. **สำนักงานขนส่งจังหวัดเชียงราย สาขาอำเภอเทิง**
   * **ที่ตั้ง:** ตำบลเวียง อำเภอเทิง จังหวัดเชียงราย 57160
   * **โทรศัพท์:** 053-795-399
   * 🗺️ [เปิดแผนที่ Google Maps ไปขนส่งสาขาเทิง](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงราย+สาขาอำเภอเทิง)

💡 *สามารถนำเอกสารไปติดต่อขอรับบริการได้ทุกสาขาใกล้บ้าน โดยจองคิวผ่านแอป DLT Smart Queue ก่อนเดินทางได้ครับ*`;
        }

        // กรณีถามถึง เชียงใหม่ และสาขา
        if (q.includes("เชียงใหม่")) {
          return `### 📍 ที่ตั้งสำนักงานขนส่งจังหวัดเชียงใหม่ และสำนักงานสาขา

เวลาทำการ: วันจันทร์ - ศุกร์ 08:30 – 16:30 น.

1. **สำนักงานขนส่งจังหวัดเชียงใหม่ (แห่งที่ 2 - แม่เหียะ)**
   * **ที่ตั้ง:** ถนนเชียงใหม่-ฮอด ตำบลแม่เหียะ อำเภอเมือง จังหวัดเชียงใหม่
   * **โทรศัพท์:** 053-270-411, 053-270-412
   * 🗺️ [เปิดแผนที่ Google Maps ไปขนส่งเชียงใหม่ แม่เหียะ](https://www.google.com/maps/search/?api=1&query=สำนักงานขนส่งจังหวัดเชียงใหม่+แม่เหียะ)

2. **สำนักงานขนส่งสาขาอำเภอจอมทอง** (โทร: 053-341-196)
3. **สำนักงานขนส่งสาขาอำเภอฝาง** (โทร: 053-452-921)
4. **สำนักงานขนส่งสาขาอำเภอแม่แตง** (โทร: 053-471-550)

💡 *สามารถจองคิวเลือกสาขาที่สะดวกผ่านแอป DLT Smart Queue ได้เลยครับ*`;
        }

        // กรณีถามหาสำนักงานขนส่งทั่วไป / จังหวัดอื่นๆ
        return `### 🏛️ สำนักงานขนส่งจังหวัดและสาขาทั่วประเทศ

กรมการขนส่งทางบกมีสำนักงานขนส่งประจำทุกจังหวัด และมีสำนักงานขนส่งสาขาในอำเภอสำคัญทั่วประเทศ:

* **วันและเวลาทำการ:** จันทร์ – ศุกร์ เวลา 08:30 – 16:30 น. (ปิดทำการในวันหยุดราชการ)
* **การค้นหาสาขาใกล้คุณ:** 
  1. พิมพ์ชื่อจังหวัดหรืออำเภอ เช่น *"ขนส่งเชียงราย"*, *"ขนส่งสาขาเวียงป่าเป้า"*, *"ขนส่งชลบุรี"*, *"ขนส่งโคราช"* หรือ *"ขนส่ง กทม."* เพื่อดูที่ตั้งและเบอร์ติดต่อได้ทันที
  2. เปิดแอป **DLT Smart Queue** เมนูจะแสดงรายชื่อสำนักงานขนส่งและสาขาที่เปิดให้จองคิวทั่วประเทศ
  3. ค้นหาบน Google Maps โดยพิมพ์: \`สำนักงานขนส่งจังหวัด [ชื่อจังหวัด]\`
* **สอบถามเส้นทางและสาขาโทร:** **สายด่วน 1584** ตลอด 24 ชม.`;
      }
      if (q.includes("ค่าธรรมเนียม") || q.includes("สากล") || q.includes("กี่บาท") || (q.includes("ราคา") && q.includes("ใบขับขี่"))) {
        return `### อัตราค่าธรรมเนียมใบอนุญาตขับรถทุกประเภท (กรมการขนส่งทางบก)

| ประเภทใบอนุญาตขับรถ | ค่าคำขอ | ค่าใบอนุญาต | รวมทั้งสิ้น | หมายเหตุ |
| :--- | :---: | :---: | :---: | :--- |
| รถยนต์ส่วนบุคคล ชั่วคราว (2 ปี) | 5 บาท | 200 บาท | 205 บาท | ผู้ขอทำครั้งแรก |
| รถจักรยานยนต์ ชั่วคราว (2 ปี) | 5 บาท | 100 บาท | 105 บาท | ผู้ขอทำครั้งแรก |
| รถยนต์ส่วนบุคคล (5 ปี) | 5 บาท | 500 บาท | 505 บาท | เปลี่ยน 2→5 ปี / ต่อ 5→5 ปี (ปีละ 100 บ.) |
| รถจักรยานยนต์ส่วนบุคคล (5 ปี) | 5 บาท | 250 บาท | 255 บาท | เปลี่ยน 2→5 ปี / ต่อ 5→5 ปี (ปีละ 50 บ.) |
| ใบขับขี่สากล (ระหว่างประเทศ) | 5 บาท | 500 บาท | 505 บาท | มีอายุ 1 หรือ 3 ปี ตามอนุสัญญา |
| ใบแทน (สูญหาย / ชำรุด) | 5 บาท | 100 บาท | 105 บาท | ออกใบแทนฉบับใหม่ |
| แก้ไขรายการ (เปลี่ยนชื่อ/ที่อยู่) | 5 บาท | 50 บาท | 55 บาท | แนบเอกสารหลักฐานการเปลี่ยน |

---

### ข้อควรรู้สำหรับ "ใบขับขี่สากล (ระหว่างประเทศ)":

### 🌐 ข้อควรรู้สำหรับ "ใบขับขี่สากล (ระหว่างประเทศ)":
* **ค่าธรรมเนียม:** **505 บาท**
* **คุณสมบัติผู้ขอ:** ต้องถือใบขับขี่รถยนต์ส่วนบุคคลหรือรถจักรยานยนต์ส่วนบุคคล **แบบ 5 ปี หรือ ตลอดชีพ** เท่านั้น (ใบขับขี่ชั่วคราว 2 ปี ไม่สามารถขอได้)
* **เอกสารที่ต้องใช้:**
  1. พาสปอร์ตตัวจริง (ยังไม่หมดอายุ) พร้อมสำเนา
  2. บัตรประชาชนตัวจริง
  3. ใบขับขี่ไทยตัวจริง (แบบ 5 ปี หรือ ตลอดชีพ)
  4. รูปถ่ายขนาด 2 นิ้ว จำนวน 2 รูป (ถ่ายไม่เกิน 6 เดือน หน้าตรง ไม่สวมหมวก/แว่นดำ)
  5. สำเนาหลักฐานการเปลี่ยนชื่อ-สกุล (ถ้ามี)
* **ไม่ต้องอบรมและไม่ต้องทดสอบขับรถ** สามารถรับเล่มได้ภายในวันที่ยื่นเอกสาร`;
      }

      if (q.includes("โอน") || q.includes("5 ขั้นตอน") || q.includes("เปลี่ยนเจ้าของ")) {
        return `### 🚗 ขั้นตอนการดำเนินการ (Step-by-Step) ของการโอนรถ 5 ขั้นตอน
1. **ยื่นเอกสาร:** ยื่นแบบคำขอโอนและรับโอน พร้อมสมุดคู่มือจดทะเบียนรถตัวจริง
2. **นำรถมาตรวจสภาพ:** นำรถเข้าช่องตรวจสภาพเพื่อตรวจสอบเลขตัวถังและเลขเครื่องยนต์
3. **ประเมินราคา:** เจ้าหน้าที่ประเมินราคากลางเพื่อคำนวณอัตราอากรแสตมป์ (ร้อยละ 0.5 หรือ 500 บาทต่อแสน)
4. **ชำระเงิน:** ชำระค่าธรรมเนียมโอน (100 บาท), ค่าคำขอ (5 บาท), ค่าตรวจสภาพ (50-100 บาท) และค่าอากรแสตมป์
5. **รับเล่มทะเบียน:** รับสมุดคู่มือจดทะเบียนที่มีชื่อผู้ถือกรรมสิทธิ์ใหม่เรียบร้อย

📌 **เอกสารสำคัญที่ต้องทราบ:**
* **กรณีมาด้วยตนเองทั้ง 2 ฝ่าย:** **ไม่ต้องใช้สำเนาบัตรประชาชน!** ให้ใช้เพียง **บัตรประจำตัวประชาชนตัวจริง (Smart Card)** เจ้าหน้าที่จะเสียบอ่านชิปข้อมูลได้ทันที
* **กรณีมอบอำนาจ (ไม่ได้มาเอง):** ต้องมีหนังสือมอบอำนาจ ติดอากรแสตมป์ 10-30 บาท พร้อมแนบสำเนาบัตรประชาชนที่ลงนามรับรองถูกต้อง`;
      }

      if (q.includes("ชั่วคราว") && (q.includes("หมดอายุ") || q.includes("ขาด"))) {
        return `### ⚠️ ข้อควรระวังสำคัญ: กรณีใบขับขี่ชั่วคราวหมดอายุ
🔴 **"กรณีใบขับขี่ชั่วคราว (2 ปี) หมดอายุแล้ว ต้องมาทำใหม่เท่านั้น!"**
* ไม่สามารถยื่นต่ออายุแบบปกติได้เหมือนใบขับขี่ 5 ปี
* ผู้ขับขี่จะต้องเริ่มต้นกระบวนการทำใหม่ทั้งหมด:
  1. ขอใบรับรองแพทย์ 5 โรค (อายุไม่เกิน 1 เดือน)
  2. จองคิวผ่านแอป **DLT Smart Queue** (เลือกหัวข้อทำใบขับขี่ใหม่)
  3. เข้ารับการทดสอบสมรรถภาพร่างกาย
  4. เข้ารับการอบรม และสอบข้อเขียนใหม่ รวมถึงสอบขับรถในสนาม
💡 *คำแนะนำ: ควรมาเปลี่ยนเป็นแบบ 5 ปี ล่วงหน้าก่อนหมดอายุ (ยื่นได้ล่วงหน้า 60 วัน)*`;
      }

      if (q.includes("2 ปี") || q.includes("2 เป็น 5") || q.includes("ต่อ 2")) {
        return `### 📋 การต่อใบขับขี่ชั่วคราว 2 ปี เป็น 5 ปี
* **ระยะเวลายื่น:** ยื่นล่วงหน้าได้ **60 วัน** ก่อนหมดอายุ
* **เอกสารที่ต้องใช้:**
  1. ใบขับขี่เดิม (ชั่วคราว 2 ปี)
  2. บัตรประชาชนตัวจริง (Smart Card)
  3. ใบรับรองแพทย์ 5 โรค (อายุไม่เกิน 1 เดือน)
* **ค่าธรรมเนียม:** รถยนต์ 505 บาท / รถจักรยานยนต์ 255 บาท
* **การอบรม:** ไม่ต้องอบรม e-Learning (ทดสอบสมรรถภาพร่างกายอย่างเดียว)`;
      }

      if (q.includes("5 ปี") || q.includes("5 เป็น 5") || q.includes("ต่อ 5")) {
        return `### 📋 การต่ออายุใบขับขี่ 5 ปี เป็น 5 ปี
* **ระยะเวลายื่น:** ต่อล่วงหน้าได้ **6 เดือน (180 วัน)**
* **เอกสารที่ต้องใช้:**
  1. ใบขับขี่เดิม (5 ปี)
  2. บัตรประชาชนตัวจริง
  3. ใบรับรองแพทย์ 5 โรค (อายุไม่เกิน 1 เดือน)
  4. ผลผ่านการอบรมออนไลน์ **DLT e-Learning** (1 ชั่วโมง มีอายุ 90 วัน)
* **ค่าธรรมเนียม:** รถยนต์ 505 บาท / มอเตอร์ไซค์ 255 บาท`;
      }

      if (q.includes("แพทย์") || q.includes("5 โรค") || q.includes("คลินิก")) {
        return `### 🩺 เกณฑ์ใบรับรองแพทย์สำหรับทำ/ต่อใบขับขี่
* ต้องเป็นแบบฟอร์มมาตรฐานที่แพทยสภารับรอง (2 ส่วน: ผู้ขอรับรองตนเอง + แพทย์ตรวจรับรอง)
* **อายุเอกสาร:** มีอายุไม่เกิน **1 เดือน (30 วัน)** นับจากวันที่แพทย์ตรวจ
* **ตรวจ 5 โรคต้องห้าม:**
  1. โรคเรื้อนในระยะติดต่อหรือปรากฏอาการ
  2. วัณโรคในระยะอันตราย
  3. โรคเท้าช้างในระยะปรากฏอาการ
  4. โรคติดยาเสพติดให้โทษ
  5. โรคพิษสุราเรื้อรัง
  *(และไม่เป็นบุคคลวิกลจริตหรือจิตฟั่นเฟือน)*
💡 แตะที่แท็บเมนู **"หาใบรับรองแพทย์"** เพื่อดูพิกัดคลินิกและโรงพยาบาลใกล้คุณได้ทันทีครับ`;
      }

      if (q.includes("ตรอ") || q.includes("ตรวจสภาพ") || q.includes("ภาษี")) {
        return `### 🔍 เกณฑ์การตรวจสภาพรถ (ตรอ.) ก่อนต่อภาษี
* **รถยนต์ส่วนบุคคล (เก๋ง/กระบะ):** อายุครบ **7 ปีขึ้นไป** (ค่าตรวจประมาณ 200 บาท)
* **รถจักรยานยนต์:** อายุครบ **5 ปีขึ้นไป** (ค่าตรวจประมาณ 60 บาท)
* ตรวจล่วงหน้าได้ 3 เดือนก่อนภาษีหมดอายุ
* เมื่อตรวจผ่านแล้ว สามารถนำไปต่อภาษีออนไลน์ได้ทันทีที่ \`eservice.dlt.go.th\``;
      }

      // Default Help
      return `⚠️ **ตอนนี้ระบบ AI สำหรับตอบคำถามทั่วไปไม่พร้อมใช้งาน (เชื่อมต่อไม่ได้หรือโควตาเต็ม)** กรุณาลองใหม่อีกครั้งในอีกสักครู่ ระหว่างนี้ผมตอบเรื่องขนส่งได้ตามรายการด้านล่างครับ\n\n### 🚗 DLT Smart Assistant ยินดีให้บริการครับ
ผมสามารถให้ข้อมูลระเบียบงานขนส่งทางบกได้ครบถ้วน สามารถพิมพ์สอบถามเรื่อง:
* **ที่ตั้งสำนักงานขนส่งและสาขา:** เช่น *"ขนส่ง กทม. 5 พื้นที่"*, *"ขนส่งเชียงราย & สาขาเวียงป่าเป้า"*, หรือพิมพ์ชื่อจังหวัดที่ต้องการ
* **ขั้นตอนการโอนรถ 5 ขั้นตอน** และการใช้บัตรประชาชนตัวจริง (ไม่ต้องใช้สำเนา)
* **การต่อใบขับขี่** (2→5 ปี, 5→5 ปี, หรือกรณีชั่วคราวหมดอายุต้องทำใหม่)
* **พิกัดขอใบรับรองแพทย์ 5 โรค** (แตะดูได้ที่แท็บ "หาใบรับรองแพทย์")
* **เกณฑ์ตรวจ ตรอ. และการต่อภาษีประจำปี**
* **สายด่วนสอบถามเร่งด่วน:** โทร **1584** ตลอด 24 ชม.`;
    }

    // Append Message to UI
    function withTimeout(p, ms) {
      return Promise.race([p, new Promise((_, rej) => setTimeout(() => rej(new Error('timeout')), ms))]);
    }

    // แปลง Markdown เป็น HTML: ใช้ marked ถ้าโหลดได้ ถ้าไม่ได้ใช้ตัวแปลงสำรองในไฟล์ (จะได้ไม่พังทั้งแชต)
    function renderMarkdown(text) {
      try { if (window.marked && typeof window.marked.parse === 'function') return window.marked.parse(text); } catch (e) {}
      const esc = t => t.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
      const inline = t => esc(t)
        .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
        .replace(/\*([^*\s][^*]*?)\*/g, '<em>$1</em>')
        .replace(/\[([^\]]+)\]\((https?:\/\/[^\s)]+)\)/g, '<a href="$2" target="_blank" rel="noopener" class="text-purple-600 underline">$1</a>');
      const out = []; let list = null;
      const close = () => { if (list) { out.push('</' + list + '>'); list = null; } };
      text.split('\n').forEach(line => {
        let m;
        if ((m = line.match(/^#{1,4}\s+(.*)/))) { close(); out.push('<p><strong>' + inline(m[1]) + '</strong></p>'); }
        else if ((m = line.match(/^\s*[*-]\s+(.*)/))) { if (list !== 'ul') { close(); out.push('<ul>'); list = 'ul'; } out.push('<li>' + inline(m[1]) + '</li>'); }
        else if ((m = line.match(/^\s*\d+\.\s+(.*)/))) { if (list !== 'ol') { close(); out.push('<ol>'); list = 'ol'; } out.push('<li>' + inline(m[1]) + '</li>'); }
        else if (line.trim() === '') { close(); }
        else { close(); out.push('<p>' + inline(line) + '</p>'); }
      });
      close();
      return out.join('');
    }

    function appendMessage(role, text) {
      const chatContainer = document.getElementById('chatMessages');
      const messageWrapper = document.createElement('div');
      messageWrapper.className = `flex items-start gap-2.5 ${role === 'user' ? 'justify-end' : ''}`;

      if (role === 'ai') {
        const parsedMarkdown = renderMarkdown(text);
        messageWrapper.innerHTML = `
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-dlt-purple text-amber-300 flex items-center justify-center text-xs shrink-0 mt-1 shadow">
            <i class="fa-solid fa-headset" data-e="1" style="font-style:normal">🎧</i>
          </div>
          <div class="max-w-[88%] sm:max-w-[85%] bg-purple-50/80 dark:bg-slate-800/90 text-slate-800 dark:text-slate-200 rounded-2xl rounded-tl-none p-3.5 sm:p-4 text-xs sm:text-sm shadow-sm border border-purple-100 dark:border-slate-700/60 markdown-content">
            ${parsedMarkdown}
          </div>
        `;
      } else {
        messageWrapper.innerHTML = `
          <div class="max-w-[85%] bg-dlt-purple text-white rounded-2xl rounded-tr-none p-3 sm:p-3.5 text-xs sm:text-sm shadow-md">
            <p class="whitespace-pre-wrap">${escapeHTML(text)}</p>
          </div>
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 flex items-center justify-center text-xs shrink-0 mt-1">
            <i class="fa-solid fa-user" data-e="1" style="font-style:normal">👤</i>
          </div>
        `;
      }

      chatContainer.appendChild(messageWrapper);
      chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    function escapeHTML(str) {
      return str.replace(/[&<>'"]/g, 
        tag => ({
          '&': '&amp;',
          '<': '&lt;',
          '>': '&gt;',
          "'": '&#39;',
          '"': '&quot;'
        }[tag] || tag)
      );
    }

    async function handleChatSubmit(e) {
      if (e) e.preventDefault();
      if (isGenerating) return;

      const inputEl = document.getElementById('userInput');
      const userText = inputEl.value.trim();
      if (!userText) return;

      inputEl.value = '';
      inputEl.style.height = 'auto';
      inputEl.disabled = true;
      document.getElementById('sendBtn').disabled = true;
      document.getElementById('typingIndicator').classList.remove('hidden');
      isGenerating = true;

      appendMessage('user', userText);

      try {
        // ลองเชื่อมต่อ Gemini API ก่อน
        const aiResponseText = await callGemini(userText);
        chatHistory.push({ role: 'user', parts: [{ text: userText }] });
        chatHistory.push({ role: 'model', parts: [{ text: aiResponseText }] });
        appendMessage('ai', aiResponseText);
      } catch (err) {
        console.error('[Gemini chat] ใช้ระบบออฟไลน์เพราะ:', err && err.message ? err.message : err);
        // หาก API ไม่พร้อม หรือรหัส Key ผิดพลาด ให้ใช้ Smart Offline Engine ตอบทันที
        const offlineReply = generateSmartOfflineResponse(userText);
        appendMessage('ai', offlineReply);
      } finally {
        isGenerating = false;
        inputEl.disabled = false;
        document.getElementById('sendBtn').disabled = false;
        document.getElementById('typingIndicator').classList.add('hidden');
        // โฟกัสช่องพิมพ์กลับเฉพาะบนคอมพิวเตอร์ ส่วนมือถือไม่โฟกัส เพื่อไม่ให้คีย์บอร์ดเด้งขึ้นมาตอน AI ตอบเสร็จ
        if (window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches) { inputEl.focus(); }
      }
    }

    function handleKeyDown(e) {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        handleChatSubmit();
      }
    }

    function askQuickPrompt(promptText) {
      switchView('chat');
      const input = document.getElementById('userInput');
      input.value = promptText;
      handleChatSubmit();
    }

    function insertVoicePromptMock() {
      const prompts = [
        "ใบขับขี่หมดอายุ 2 ปี ต้องสอบข้อเขียนใหม่ไหม?",
        "ต่อภาษีรถกระบะ 4 ประตู ราคาเท่าไหร่?",
        "ขอใบรับรองแพทย์ 5 โรค ใช้คลินิกไหนได้บ้าง?"
      ];
      const randomPrompt = prompts[Math.floor(Math.random() * prompts.length)];
      const input = document.getElementById('userInput');
      input.value = randomPrompt;
      input.focus();
      showToast("ใส่ตัวอย่างคำถามเรียบร้อย");
    }

    function clearChatHistory() {
      chatHistory = [];
      const chatContainer = document.getElementById('chatMessages');
      chatContainer.innerHTML = `
        <div class="flex items-start gap-2.5">
          <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-dlt-purple text-amber-300 flex items-center justify-center text-xs shrink-0 mt-1 shadow">
            <i class="fa-solid fa-headset" data-e="1" style="font-style:normal">🎧</i>
          </div>
          <div class="max-w-[85%] bg-purple-50/80 dark:bg-slate-800/90 text-slate-800 dark:text-slate-200 rounded-2xl rounded-tl-none p-3.5 text-xs sm:text-sm shadow-sm border border-purple-100 dark:border-slate-700/60">
            <p class="font-medium text-dlt-purple dark:text-purple-300 mb-0.5">ล้างประวัติการสนทนาเรียบร้อยครับ</p>
            <p class="text-xs text-slate-600 dark:text-slate-300">สอบถามเรื่องงานทะเบียน ใบขับขี่ หรือพิกัดขอใบรับรองแพทย์ได้เลยครับ</p>
          </div>
        </div>
      `;
      showToast("ล้างประวัติการสนทนาแล้ว");
    }

    // Initialize Default View & Checklist on start
    window.addEventListener('DOMContentLoaded', () => {
      loadChecklist('license-2to5');
      filterOffices();
      renderClinics(CLINIC_DATABASE);
    });
  </script>


<script>
(function(){const E={'robot':'🤖','headset':'🎧','chevron-right':'›','map-location-dot':'🗺️','building-columns':'🏛️','user-doctor':'🩺','phone':'📞','phone-volume':'📞','magnifying-glass':'🔍','list-check':'✅','id-card':'🪪','diamond-turn-right':'🧭','comments':'💬','clipboard-check':'📋','circle-exclamation':'❗','circle-check':'✔️','calendar-check':'📅','book-open':'📖','wand-magic-sparkles':'✨','sparkles':'✨','video':'🎥','user':'👤','triangle-exclamation':'⚠️','trash-can':'🗑️','sun':'☀️','moon':'🌙','stethoscope':'🩺','receipt':'🧾','paper-plane':'➤','location-dot':'📍','location-arrow':'📍','layer-group':'🗂️','hospital-user':'🏥','hospital':'🏥','heart-pulse':'❤️','handshake':'🤝','graduation-cap':'🎓','clock':'🕒','car-side':'🚗','car-burst':'💥','calendar-days':'🗓️','building-circle-xmark':'🏢','bolt':'⚡','arrow-rotate-left':'↺'};
function fix(r){(r||document).querySelectorAll('i[class*="fa-"]:not([data-e])').forEach(i=>{const m=[...i.classList].find(c=>c.startsWith('fa-')&&c!=='fa-solid'&&c!=='fa-regular'&&E[c.slice(3)]);i.dataset.e=1;i.textContent=m?E[m.slice(3)]:'•';i.style.fontStyle='normal'})}
function init(){fix();new MutationObserver(()=>fix()).observe(document.body,{childList:true,subtree:true})}
if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',init);else init();
window.addEventListener('load',()=>fix());})();
</script>

<script>
(function(){
  function setVars(){
    var r=document.documentElement.style,b=document.getElementById('mNavChatBtn'),n=b&&b.closest('nav'),h=document.querySelector('header');
    if(n)r.setProperty('--nav-h',n.offsetHeight+'px');
    if(h)r.setProperty('--hdr-h',h.offsetHeight+'px');
  }
  setVars();window.addEventListener('resize',setVars);window.addEventListener('load',setVars);
  // กดปุ่มส่งโดยไม่ให้ช่องพิมพ์เสียโฟกัส (กันคีย์บอร์ดหุบแล้วหน้าเลื่อนจนกดพลาด)
  var sb=document.getElementById('sendBtn');
  if(sb)sb.addEventListener('mousedown',function(e){e.preventDefault();});
})();
</script>
</body>
</html>