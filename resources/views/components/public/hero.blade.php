<section id="beranda" class="relative min-h-screen flex items-center overflow-hidden bg-white pt-16">
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:0.04">
      <defs>
        <pattern id="islamic-geo-1" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
          <polygon points="40,12 44,28 56,20 48,32 64,36 48,40 56,52 44,44 40,60 36,44 24,52 32,40 16,36 32,32 24,20 36,28" fill="#059669"/>
          <polygon points="40,20 43,30 52,24 46,33 56,36 46,39 52,48 43,42 40,52 37,42 28,48 34,39 24,36 34,33 28,24 37,30" fill="none" stroke="#059669" stroke-width="0.8"/>
          <rect x="0" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 8)" />
          <rect x="64" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 8)" />
          <rect x="0" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 72)" />
          <rect x="64" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 72)" />
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#islamic-geo-1)" />
    </svg>
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full opacity-20" style="background: radial-gradient(circle, #6ee7b7, transparent 70%)"></div>
    <div class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full opacity-15" style="background: radial-gradient(circle, #fde68a, transparent 70%)"></div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="order-2 lg:order-1">
        <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
          Pendaftaran Santri Baru 2026/2027 Dibuka
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-800 leading-tight mb-5">
          Membentuk Generasi
          <span class="text-emerald-600 relative inline-block">
            Qur'ani
            <svg viewBox="0 0 220 12" class="absolute -bottom-2 left-0 w-full" fill="none">
              <path d="M2 8 Q55 2 110 6 Q165 10 218 5" stroke="#fbbf24" stroke-width="3" stroke-linecap="round" />
            </svg>
          </span>
          yang Berakhlak Mulia
        </h1>

        <p class="text-slate-500 text-base lg:text-lg leading-relaxed mb-8 max-w-lg">
          Program pendidikan Al-Qur'an untuk anak-anak dengan metode yang menyenangkan, terstruktur, dan berlandaskan nilai-nilai Islam yang mulia.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 mb-10">
          <a href="{{ route('ppdb') }}" class="inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-7 py-3.5 rounded-2xl transition-all duration-200 shadow-lg shadow-emerald-200 hover:shadow-xl hover:shadow-emerald-300 hover:-translate-y-0.5 text-base">
            Daftar Santri Baru
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
              <line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" />
            </svg>
          </a>
          <button data-link="program" class="scroll-btn inline-flex items-center justify-center gap-2 border-2 border-emerald-200 text-emerald-700 hover:border-emerald-400 hover:bg-emerald-50 font-semibold px-7 py-3.5 rounded-2xl transition-all duration-200 text-base">
            Lihat Program
          </button>
        </div>

        <div class="flex flex-wrap gap-5">
          <div class="flex items-center gap-2">
            <span class="text-xl font-extrabold text-emerald-600">{{ number_format($setting->total_santri ?? 0) }}+</span>
            <span class="text-sm text-slate-400 font-medium">Santri Aktif</span>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-xl font-extrabold text-emerald-600">18 Thn</span>
            <span class="text-sm text-slate-400 font-medium">Pengalaman</span>
          </div>
        </div>
      </div>

      <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
        <div class="relative w-full max-w-sm sm:max-w-md lg:max-w-lg">
          <svg viewBox="0 0 520 460" xmlns="http://www.w3.org/2000/svg" class="w-full h-full drop-shadow-xl">
            <defs>
              <radialGradient id="bgCircle" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="#ecfdf5" />
                <stop offset="100%" stop-color="#d1fae5" />
              </radialGradient>
              <radialGradient id="floorGrad" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="#6ee7b7" stop-opacity="0.5" />
                <stop offset="100%" stop-color="#059669" stop-opacity="0.2" />
              </radialGradient>
            </defs>
            <circle cx="260" cy="230" r="205" fill="url(#bgCircle)" />
            <circle cx="260" cy="230" r="195" fill="none" stroke="#bbf7d0" stroke-width="1.5" stroke-dasharray="6 4" />
            <ellipse cx="260" cy="148" rx="60" ry="52" fill="#a7f3d0" opacity="0.5" />
            <rect x="243" y="180" width="34" height="42" rx="17" fill="#6ee7b7" opacity="0.45" />
            <rect x="148" y="138" width="20" height="88" rx="5" fill="#a7f3d0" opacity="0.45" />
            <ellipse cx="158" cy="136" rx="14" ry="20" fill="#6ee7b7" opacity="0.45" />
            <line x1="158" y1="116" x2="158" y2="100" stroke="#fbbf24" stroke-width="2" opacity="0.7" />
            <rect x="352" y="138" width="20" height="88" rx="5" fill="#a7f3d0" opacity="0.45" />
            <ellipse cx="362" cy="136" rx="14" ry="20" fill="#6ee7b7" opacity="0.45" />
            <line x1="362" y1="116" x2="362" y2="100" stroke="#fbbf24" stroke-width="2" opacity="0.7" />
            <path d="M395 55 Q432 75 422 118 Q388 106 385 79 Q382 48 395 55Z" fill="#fbbf24" opacity="0.9" />
            <circle cx="416" cy="52" r="5" fill="#fbbf24" opacity="0.7" />
            <circle cx="436" cy="70" r="3.5" fill="#fbbf24" opacity="0.5" />
            <g transform="translate(88,168)" opacity="0.45"><polygon points="0,-14 3.5,-3.5 14,0 3.5,3.5 0,14 -3.5,3.5 -14,0 -3.5,-3.5" fill="#fbbf24" /></g>
            <g transform="translate(432,195)" opacity="0.45"><polygon points="0,-12 3,-3 12,0 3,3 0,12 -3,3 -12,0 -3,-3" fill="#fbbf24" /></g>
            <g transform="translate(110,385)" opacity="0.3"><polygon points="0,-10 2.5,-2.5 10,0 2.5,2.5 0,10 -2.5,2.5 -10,0 -2.5,-2.5" fill="#059669" /></g>
            <g transform="translate(408,360)" opacity="0.35"><polygon points="0,-10 2.5,-2.5 10,0 2.5,2.5 0,10 -2.5,2.5 -10,0 -2.5,-2.5" fill="#059669" /></g>
            <ellipse cx="258" cy="398" rx="158" ry="24" fill="url(#floorGrad)" />
            <rect x="108" y="377" width="300" height="30" rx="12" fill="#059669" opacity="0.15" />
            <rect x="114" y="380" width="288" height="24" rx="9" fill="none" stroke="#059669" stroke-width="1" opacity="0.3" />
            <rect x="122" y="383" width="272" height="18" rx="7" fill="none" stroke="#fbbf24" stroke-width="0.8" opacity="0.4" />
            <ellipse cx="200" cy="385" rx="48" ry="16" fill="#047857" opacity="0.85" />
            <path d="M168 310 Q155 395 195 402 Q220 406 232 392 Q244 375 235 305Z" fill="#059669" />
            <path d="M170 330 Q158 340 162 355 Q166 365 178 358" stroke="#047857" stroke-width="14" stroke-linecap="round" fill="none" />
            <path d="M232 330 Q246 340 243 355 Q240 364 228 358" stroke="#047857" stroke-width="14" stroke-linecap="round" fill="none" />
            <ellipse cx="200" cy="248" rx="27" ry="9" fill="#065f46" />
            <rect x="175" y="230" width="50" height="20" rx="8" fill="#065f46" />
            <rect x="190" y="263" width="20" height="18" rx="5" fill="#fde68a" />
            <circle cx="200" cy="245" r="32" fill="#fde68a" />
            <ellipse cx="190" cy="241" rx="4" ry="4.5" fill="#1f2937" />
            <ellipse cx="210" cy="241" rx="4" ry="4.5" fill="#1f2937" />
            <circle cx="192" cy="239.5" r="1.5" fill="white" />
            <circle cx="212" cy="239.5" r="1.5" fill="white" />
            <path d="M185 233 Q190 230 195 233" stroke="#92400e" stroke-width="1.5" fill="none" stroke-linecap="round" />
            <path d="M205 233 Q210 230 215 233" stroke="#92400e" stroke-width="1.5" fill="none" stroke-linecap="round" />
            <circle cx="200" cy="249" r="2" fill="#f59e0b" opacity="0.5" />
            <path d="M191 256 Q200 265 209 256" stroke="#92400e" stroke-width="2" fill="none" stroke-linecap="round" />
            <circle cx="166" cy="358" r="13" fill="#fde68a" />
            <circle cx="235" cy="358" r="13" fill="#fde68a" />
            <rect x="154" y="338" width="94" height="64" rx="8" fill="white" stroke="#059669" stroke-width="2.5" />
            <line x1="201" y1="338" x2="201" y2="402" stroke="#059669" stroke-width="2" />
            <rect x="197" y="338" width="8" height="64" fill="#d1fae5" rx="1" />
            <line x1="163" y1="348" x2="193" y2="348" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="165" y1="358" x2="193" y2="358" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="163" y1="368" x2="193" y2="368" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="165" y1="378" x2="193" y2="378" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="163" y1="388" x2="193" y2="388" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="210" y1="348" x2="237" y2="348" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="210" y1="358" x2="239" y2="358" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="210" y1="368" x2="237" y2="368" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="210" y1="378" x2="239" y2="378" stroke="#6ee7b7" stroke-width="1.5" />
            <line x1="210" y1="388" x2="237" y2="388" stroke="#6ee7b7" stroke-width="1.5" />
            <path d="M165 345 Q180 342 193 345" stroke="#059669" stroke-width="1.8" fill="none" stroke-linecap="round" opacity="0.6" />
            <path d="M210 345 Q222 342 237 345" stroke="#059669" stroke-width="1.8" fill="none" stroke-linecap="round" opacity="0.6" />
            <ellipse cx="318" cy="390" rx="46" ry="15" fill="#0f766e" opacity="0.85" />
            <path d="M287 316 Q275 398 312 406 Q338 410 350 395 Q362 378 354 310Z" fill="#0d9488" />
            <path d="M289 335 Q277 345 280 360 Q284 370 296 364" stroke="#0f766e" stroke-width="13" stroke-linecap="round" fill="none" />
            <path d="M350 335 Q363 345 360 360 Q357 370 345 364" stroke="#0f766e" stroke-width="13" stroke-linecap="round" fill="none" />
            <ellipse cx="320" cy="255" rx="32" ry="11" fill="#0f766e" />
            <ellipse cx="320" cy="265" rx="38" ry="28" fill="#0f766e" />
            <path d="M282 265 Q296 300 320 295 Q344 300 358 265" fill="#0f766e" />
            <rect x="310" y="272" width="20" height="14" rx="4" fill="#fde68a" />
            <circle cx="320" cy="253" r="30" fill="#fde68a" />
            <ellipse cx="310" cy="250" rx="3.5" ry="4" fill="#1f2937" />
            <ellipse cx="330" cy="250" rx="3.5" ry="4" fill="#1f2937" />
            <circle cx="311.5" cy="248.5" r="1.3" fill="white" />
            <circle cx="331.5" cy="248.5" r="1.3" fill="white" />
            <path d="M305 242 Q310 239 315 242" stroke="#92400e" stroke-width="1.5" fill="none" stroke-linecap="round" />
            <path d="M325 242 Q330 239 335 242" stroke="#92400e" stroke-width="1.5" fill="none" stroke-linecap="round" />
            <circle cx="320" cy="257" r="1.8" fill="#f59e0b" opacity="0.5" />
            <path d="M312 264 Q320 272 328 264" stroke="#92400e" stroke-width="2" fill="none" stroke-linecap="round" />
            <ellipse cx="305" cy="263" rx="8" ry="5" fill="#fca5a5" opacity="0.35" />
            <ellipse cx="335" cy="263" rx="8" ry="5" fill="#fca5a5" opacity="0.35" />
            <circle cx="283" cy="364" r="12" fill="#fde68a" />
            <circle cx="348" cy="364" r="12" fill="#fde68a" />
            <rect x="271" y="344" width="96" height="63" rx="8" fill="white" stroke="#0d9488" stroke-width="2.5" />
            <line x1="319" y1="344" x2="319" y2="407" stroke="#0d9488" stroke-width="2" />
            <rect x="315" y="344" width="8" height="63" fill="#ccfbf1" rx="1" />
            <line x1="280" y1="353" x2="309" y2="353" stroke="#5eead4" stroke-width="1.5" />
            <line x1="281" y1="363" x2="309" y2="363" stroke="#5eead4" stroke-width="1.5" />
            <line x1="280" y1="373" x2="309" y2="373" stroke="#5eead4" stroke-width="1.5" />
            <line x1="281" y1="383" x2="309" y2="383" stroke="#5eead4" stroke-width="1.5" />
            <line x1="280" y1="393" x2="309" y2="393" stroke="#5eead4" stroke-width="1.5" />
            <line x1="328" y1="353" x2="358" y2="353" stroke="#5eead4" stroke-width="1.5" />
            <line x1="328" y1="363" x2="357" y2="363" stroke="#5eead4" stroke-width="1.5" />
            <line x1="328" y1="373" x2="358" y2="373" stroke="#5eead4" stroke-width="1.5" />
            <line x1="328" y1="383" x2="357" y2="383" stroke="#5eead4" stroke-width="1.5" />
            <line x1="328" y1="393" x2="358" y2="393" stroke="#5eead4" stroke-width="1.5" />
            <circle cx="136" cy="300" r="7" fill="#fbbf24" opacity="0.6" />
            <circle cx="136" cy="300" r="4" fill="#fde68a" opacity="0.8" />
            <circle cx="393" cy="272" r="6" fill="#fbbf24" opacity="0.5" />
            <circle cx="393" cy="272" r="3.5" fill="#fde68a" opacity="0.7" />
            <circle cx="148" cy="348" r="4.5" fill="#34d399" opacity="0.6" />
            <circle cx="375" cy="340" r="5" fill="#34d399" opacity="0.5" />
            <circle cx="424" cy="290" r="4" fill="#fbbf24" opacity="0.4" />
            <circle cx="88" cy="230" r="5" fill="#fbbf24" opacity="0.4" />
            <g transform="translate(112,415)" opacity="0.5">
              <circle cx="0" cy="0" r="5" fill="#34d399" />
              <circle cx="10" cy="-4" r="3.5" fill="#6ee7b7" />
              <circle cx="-8" cy="-6" r="3" fill="#6ee7b7" />
              <circle cx="4" cy="-12" r="2.5" fill="#a7f3d0" />
            </g>
            <g transform="translate(405,420)" opacity="0.5">
              <circle cx="0" cy="0" r="5" fill="#34d399" />
              <circle cx="-10" cy="-4" r="3.5" fill="#6ee7b7" />
              <circle cx="8" cy="-6" r="3" fill="#6ee7b7" />
            </g>
          </svg>
          <div class="absolute top-6 -left-2 sm:-left-6 bg-white rounded-2xl shadow-lg shadow-slate-100 border border-slate-50 px-3.5 py-2.5 flex items-center gap-2.5">
            <div class="w-8 h-8 bg-amber-100 rounded-xl flex items-center justify-center text-amber-500 text-lg">⭐</div>
            <div><p class="text-xs font-bold text-slate-700">Metode Terbaik</p><p class="text-[10px] text-slate-400">Jilid & Tartili</p></div>
          </div>
          <div class="absolute bottom-14 -right-2 sm:-right-6 bg-emerald-600 rounded-2xl shadow-lg shadow-emerald-300 px-3.5 py-2.5 flex items-center gap-2.5">
            <div class="text-2xl">🕌</div>
            <div><p class="text-xs font-bold text-white">Lingkungan Islami</p><p class="text-[10px] text-emerald-200">Nyaman & Aman</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" class="w-full h-12 lg:h-16" fill="#f0fdf4">
      <path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60Z" />
    </svg>
  </div>
</section>
