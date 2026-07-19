<section class="relative bg-emerald-600 py-16 lg:py-20 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-10">
    <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:1">
      <rect width="100%" height="100%" fill="url(#islamic-geo-1)" />
    </svg>
  </div>
  <div class="absolute top-0 right-0 w-64 h-64 rounded-full opacity-10" style="background: radial-gradient(circle, #fde68a, transparent 70%)"></div>
  <div class="absolute bottom-0 left-0 w-48 h-48 rounded-full opacity-10" style="background: radial-gradient(circle, #fde68a, transparent 70%)"></div>

  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 bg-white/20 text-white text-xs font-semibold px-3.5 py-1.5 rounded-full mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-amber-300 animate-pulse"></span>
      Pendaftaran Terbuka
    </div>
    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mb-4 leading-tight">
      Daftarkan Putra/Putri Anda <br class="hidden sm:block">
      Bersama Kami Sekarang
    </h2>
    <p class="text-emerald-100 text-base lg:text-lg mb-8 max-w-xl mx-auto leading-relaxed">
      Investasi terbaik untuk masa depan anak adalah pendidikan Al-Qur'an. Bergabunglah bersama {{ number_format($setting->total_santri ?? 0) }}+ keluarga yang telah mempercayakan pendidikan Al-Qur'an putra-putrinya kepada kami.
    </p>
    <div class="flex flex-col sm:flex-row gap-3 justify-center">
      <a href="{{ route('ppdb') }}" class="inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-300 text-emerald-900 font-bold px-8 py-4 rounded-2xl transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-base">
        Daftar Santri Baru
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
          <line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" />
        </svg>
      </a>
      <a href="https://wa.me/6282148744520" class="inline-flex items-center justify-center gap-2 bg-white/15 hover:bg-white/25 text-white border border-white/30 font-semibold px-8 py-4 rounded-2xl transition-all duration-200 text-base">
        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
          <path d="M12.004 2C6.485 2 2 6.485 2 12.004c0 1.773.463 3.49 1.348 4.988L2 22l5.149-1.329A9.953 9.953 0 0 0 12.004 22C17.519 22 22 17.519 22 12.004 22 6.485 17.519 2 12.004 2zm0 18.189a8.17 8.17 0 0 1-4.168-1.143l-.298-.178-3.097.799.826-3.013-.196-.309A8.187 8.187 0 0 1 3.812 12c0-4.517 3.675-8.189 8.192-8.189C16.525 3.811 20.2 7.484 20.2 12c0 4.517-3.675 8.189-8.196 8.189z"/>
        </svg>
        Chat WhatsApp
      </a>
    </div>
  </div>
</section>
