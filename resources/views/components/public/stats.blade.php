<section class="bg-emerald-50 py-10 lg:py-14">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-wrap justify-center gap-6 sm:gap-8 md:gap-12">
      <div class="text-center w-[140px] sm:w-auto">
        <p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">{{ number_format($setting->total_santri ?? 0) }}+</p>
        <p class="text-sm text-slate-500 font-medium">Santri Aktif</p>
      </div>
      <div class="text-center w-[140px] sm:w-auto">
        <p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">{{ $setting->years_of_experience ?? 0 }}</p>
        <p class="text-sm text-slate-500 font-medium">Tahun Berdiri</p>
      </div>
      <div class="text-center w-[140px] sm:w-auto">
        <p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">{{ number_format($setting->total_guru ?? 0) }}</p>
        <p class="text-sm text-slate-500 font-medium">Ustadz & Ustadzah</p>
      </div>
    </div>
  </div>
</section>
