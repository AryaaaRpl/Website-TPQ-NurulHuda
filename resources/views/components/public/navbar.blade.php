<header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 {{ $transparent ?? false ? 'bg-transparent' : 'bg-white/95 backdrop-blur-md shadow-sm border-b border-emerald-50' }}">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-18">
      <a href="{{ route('home') }}" class="flex items-center gap-2.5">
         <img src="{{ asset('logo.jpeg') }}" alt="Logo TPQ Nurul Huda" class="w-[50px] h-[50px] object-contain">
        <div>
          <p class="font-bold text-emerald-700 text-base leading-tight">TPQ Nurul Huda</p>
          <p class="text-[10px] text-emerald-500 leading-tight font-medium">Taman Pendidikan Al-Qur'an</p>
        </div>
      </a>

      <nav class="hidden lg:flex items-center gap-1" id="desktop-nav">
        @if($active ?? false)
          <a href="{{ route('home') }}#beranda" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $active === 'beranda' ? 'text-emerald-700 bg-emerald-50' : 'text-slate-600 hover:text-emerald-700 hover:bg-emerald-50' }}">Beranda</a>
          <a href="{{ route('home') }}#program" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $active === 'program' ? 'text-emerald-700 bg-emerald-50' : 'text-slate-600 hover:text-emerald-700 hover:bg-emerald-50' }}">Program</a>
        @else
          <button data-link="beranda" class="nav-link px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-600 hover:text-emerald-700 hover:bg-emerald-50' }}">Beranda</button>
          <button data-link="program" class="nav-link px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Program</button>
        @endif
        <a href="{{ route('fasilitas') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('fasilitas') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-600 hover:text-emerald-700 hover:bg-emerald-50' }}">Fasilitas</a>
        <a href="{{ route('ekskul') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('ekskul') ? 'text-emerald-700 bg-emerald-50' : 'text-slate-600 hover:text-emerald-700 hover:bg-emerald-50' }}">Ekstrakurikuler</a>
        @if(!($active ?? false))
          <button data-link="galeri" class="nav-link px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Galeri</button>
          <button data-link="testimonial" class="nav-link px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Testimonial</button>
          <button data-link="kontak" class="nav-link px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Kontak</button>
        @endif
      </nav>

      <div class="flex items-center gap-3">
        <a href="{{ route('ppdb') }}" class="hidden sm:inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all duration-200 shadow-md shadow-emerald-200 hover:shadow-emerald-300 hover:-translate-y-px">
          Daftar Sekarang
        </a>
        <button id="menu-toggle" class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">
          <svg id="icon-menu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-6 h-6">
            <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
          </svg>
          <svg id="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="w-6 h-6 hidden">
            <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div id="mobile-menu" class="lg:hidden overflow-hidden transition-all duration-300 max-h-0 bg-white/98 backdrop-blur-md">
    <div class="px-4 py-4 flex flex-col gap-1">
      @if($active ?? false)
        <a href="{{ route('home') }}#beranda" class="text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Beranda</a>
        <a href="{{ route('home') }}#program" class="text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Program</a>
      @else
        <button data-link="beranda" class="scroll-btn text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Beranda</button>
        <button data-link="program" class="scroll-btn text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Program</button>
      @endif
      <a href="{{ route('fasilitas') }}" class="text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Fasilitas</a>
      <a href="{{ route('ekskul') }}" class="text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Ekstrakurikuler</a>
      @if(!($active ?? false))
        <button data-link="galeri" class="scroll-btn text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Galeri</button>
        <button data-link="testimonial" class="scroll-btn text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Testimonial</button>
        <button data-link="kontak" class="scroll-btn text-left px-4 py-3 rounded-xl text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Kontak</button>
      @endif
      <a href="{{ route('ppdb') }}" class="mt-2 bg-emerald-600 text-white font-semibold py-3 rounded-xl text-sm text-center transition-colors hover:bg-emerald-700">Daftar Santri Baru</a>
    </div>
  </div>
</header>
