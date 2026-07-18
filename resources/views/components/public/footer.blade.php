<section id="kontak" class="bg-slate-900 pt-16 pb-8 lg:pt-20">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12 lg:mb-16">
      <div class="lg:col-span-2">
        <div class="flex items-center gap-2.5 mb-4">
          <img src="{{ asset('logo.jpeg') }}" alt="Logo TPQ Nurul Huda" class="w-[50px] h-[50px] object-contain">
          <div>
            <p class="font-bold text-white text-base leading-tight">TPQ Nurul Huda</p>
            <p class="text-[10px] text-emerald-400 font-medium">Taman Pendidikan Al-Qur'an</p>
          </div>
        </div>
        <p class="text-slate-400 text-sm leading-relaxed mb-5 max-w-xs">
          Mendidik generasi Qur'ani yang berakhlak mulia sejak 2006. Bersama kami, anak Anda belajar Al-Qur'an dengan penuh rasa cinta.
        </p>
        <div class="flex gap-3">
          <button class="w-9 h-9 bg-slate-800 hover:bg-emerald-600 rounded-xl flex items-center justify-center text-slate-400 hover:text-white transition-all duration-200">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
            </svg>
          </button>
          <button class="w-9 h-9 bg-slate-800 hover:bg-emerald-600 rounded-xl flex items-center justify-center text-slate-400 hover:text-white transition-all duration-200">
            <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12.004 2C6.485 2 2 6.485 2 12.004c0 1.773.463 3.49 1.348 4.988L2 22l5.149-1.329A9.953 9.953 0 0 0 12.004 22C17.519 22 22 17.519 22 12.004 22 6.485 17.519 2 12.004 2zm0 18.189a8.17 8.17 0 0 1-4.168-1.143l-.298-.178-3.097.799.826-3.013-.196-.309A8.187 8.187 0 0 1 3.812 12c0-4.517 3.675-8.189 8.192-8.189C16.525 3.811 20.2 7.484 20.2 12c0 4.517-3.675 8.189-8.196 8.189z"/>
            </svg>
          </button>
        </div>
      </div>

      <div>
        <h4 class="text-white font-semibold text-sm mb-4">Program</h4>
        <ul class="space-y-2.5">
          <li><a href="{{ route('home') }}#program" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">Kelas Iqro</a></li>
          <li><a href="{{ route('home') }}#program" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">Kelas Tahfidz</a></li>
          <li><a href="{{ route('home') }}#program" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">Kajian Anak</a></li>
          <li><a href="{{ route('ekskul') }}" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">Ekstrakurikuler</a></li>
          <li><a href="{{ route('fasilitas') }}" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">Fasilitas</a></li>
          <li><a href="{{ route('ppdb') }}" class="text-slate-400 hover:text-emerald-400 text-sm transition-colors">PPDB</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-white font-semibold text-sm mb-4">Kontak Kami</h4>
        <ul class="space-y-3.5">
          <li class="flex items-start gap-2.5 text-slate-400 text-sm">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 flex-shrink-0">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            <span>Jl. Masjid Al-Hikmah No. 12, Kelurahan Bahagia, Kota Sejahtera</span>
          </li>
          <li class="flex items-center gap-2.5 text-slate-400 text-sm">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.44 2 2 0 0 1 3.6 1.28h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.7a16 16 0 0 0 6.29 6.29l.91-.9a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <a href="tel:+6281234567890" class="hover:text-emerald-400 transition-colors">+62 812-3456-7890</a>
          </li>
          <li class="flex items-center gap-2.5 text-slate-400 text-sm">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 flex-shrink-0">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
            <a href="mailto:info@tpqnurulhuda.id" class="hover:text-emerald-400 transition-colors">info@tpqnurulhuda.id</a>
          </li>
        </ul>

        <div class="mt-5 p-3.5 bg-slate-800 rounded-xl">
          <p class="text-xs font-semibold text-emerald-400 mb-2">Jam Operasional</p>
          <p class="text-slate-400 text-xs">Senin – Jumat: 14.00 – 17.30</p>
          <p class="text-slate-400 text-xs">Sabtu: 08.00 – 11.00</p>
        </div>
      </div>
    </div>

    <div class="border-t border-slate-800 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-slate-500 text-xs">© 2026 TPQ Nurul Huda. Hak Cipta Dilindungi.</p>
      <p class="text-slate-600 text-xs flex items-center gap-1">
        Dibuat Oleh <span class="text-emerald-500">Dea Vindi Safani</span>
      </p>
    </div>
  </div>
</section>
