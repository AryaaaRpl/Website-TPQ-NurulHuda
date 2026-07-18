<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ekstrakurikuler — TPQ Nurul Huda</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          emerald: {
            50:'#ecfdf5',100:'#d1fae5',200:'#a7f3d0',300:'#6ee7b7',400:'#34d399',
            500:'#10b981',600:'#059669',700:'#047857',800:'#065f46',900:'#064e3b'
          }
        }
      }
    }
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Plus Jakarta Sans', sans-serif; }
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: transparent; }
  ::-webkit-scrollbar-thumb { background: #d1fae5; border-radius: 3px; }
  ::-webkit-scrollbar-thumb:hover { background: #059669; }
</style>
</head>
<body class="min-h-screen bg-white">

  @include('components.public.navbar', ['active' => 'ekskul'])

  <section class="relative overflow-hidden bg-white pt-32 pb-16 lg:pt-40 lg:pb-24">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:0.04">
        <defs>
          <pattern id="islamic-geo-e" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
            <polygon points="40,12 44,28 56,20 48,32 64,36 48,40 56,52 44,44 40,60 36,44 24,52 32,40 16,36 32,32 24,20 36,28" fill="#059669"/>
            <polygon points="40,20 43,30 52,24 46,33 56,36 46,39 52,48 43,42 40,52 37,42 28,48 34,39 24,36 34,33 28,24 37,30" fill="none" stroke="#059669" stroke-width="0.8"/>
            <rect x="0" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 8)" />
            <rect x="64" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 8)" />
            <rect x="0" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 72)" />
            <rect x="64" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 72)" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#islamic-geo-e)" />
      </svg>
      <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full opacity-20" style="background: radial-gradient(circle, #6ee7b7, transparent 70%)"></div>
      <div class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full opacity-15" style="background: radial-gradient(circle, #fde68a, transparent 70%)"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-6">
        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
        Ekstrakurikuler
      </div>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-800 leading-tight mb-5">
        Kembangkan Bakat & Minat
        <span class="text-emerald-600 relative inline-block">
          Santri
          <svg viewBox="0 0 220 12" class="absolute -bottom-2 left-0 w-full" fill="none">
            <path d="M2 8 Q55 2 110 6 Q165 10 218 5" stroke="#fbbf24" stroke-width="3" stroke-linecap="round" />
          </svg>
        </span>
      </h1>
      <p class="text-slate-500 text-base lg:text-lg leading-relaxed max-w-2xl mx-auto">
        Kegiatan ekstrakurikuler pilihan untuk membentuk karakter, kreativitas, dan kecerdasan emosional santri di luar waktu belajar utama.
      </p>
    </div>
  </section>

  <section class="bg-emerald-50 py-10 lg:py-14">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8">
        <div class="text-center"><p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">7</p><p class="text-sm text-slate-500 font-medium">Program Aktif</p></div>
        <div class="text-center"><p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">18+</p><p class="text-sm text-slate-500 font-medium">Jam/Minggu</p></div>
        <div class="text-center"><p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">12</p><p class="text-sm text-slate-500 font-medium">Pembina</p></div>
        <div class="text-center"><p class="text-3xl sm:text-4xl font-extrabold text-emerald-600 mb-1">🏆</p><p class="text-sm text-slate-500 font-medium">Prestasi Nasional</p></div>
      </div>
    </div>
  </section>

  <section class="relative bg-white py-16 lg:py-24 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
      <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:0.03">
        <rect width="100%" height="100%" fill="url(#islamic-geo-e)" />
      </svg>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-xl mx-auto mb-12 lg:mb-16">
        <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-700 border border-amber-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-4">
          <span>🎯</span> Program Pilihan
        </div>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
          Ekstrakurikuler Unggulan
        </h2>
        <p class="text-slate-500 text-base leading-relaxed">
          Berbagai kegiatan seru dan bermanfaat yang bisa diikuti oleh seluruh santri.
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        @forelse($extras as $item)
          @php
            $mod = $loop->index % 4;
            $iconBg = match($mod) { 0 => 'bg-emerald-100 text-emerald-600', 1 => 'bg-amber-100 text-amber-600', 2 => 'bg-sky-100 text-sky-600', default => 'bg-purple-100 text-purple-600' };
            $badge = match($mod) { 0 => 'bg-emerald-50 text-emerald-700 border-emerald-200', 1 => 'bg-amber-50 text-amber-700 border-amber-200', 2 => 'bg-sky-50 text-sky-700 border-sky-200', default => 'bg-purple-50 text-purple-700 border-purple-200' };
            $hoverBorder = match($mod) { 0 => 'hover:border-emerald-200', 1 => 'hover:border-amber-200', 2 => 'hover:border-sky-200', default => 'hover:border-purple-200' };
          @endphp
          <div class="group relative bg-white rounded-2xl p-6 lg:p-7 shadow-md border border-slate-100 {{ $hoverBorder }} transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
            @if($item->image_url)
              <img src="{{ str_starts_with($item->image_url, 'http') ? $item->image_url : asset($item->image_url) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover rounded-xl mb-5">
            @else
              <div class="w-14 h-14 rounded-2xl {{ $iconBg }} flex items-center justify-center mb-5 transition-transform duration-300 group-hover:scale-110">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
              </div>
            @endif
            <div class="flex items-center gap-2 mb-3">
              <h3 class="text-lg font-bold text-slate-800">{{ $item->title }}</h3>
              @if($item->metadata['jadwal'] ?? false)
                <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full border {{ $badge }}">{{ $item->metadata['jadwal'] }}</span>
              @endif
            </div>
            <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $item->description }}</p>
            @if($item->metadata['pembimbing'] ?? false)
              <div class="flex items-center gap-2 text-xs text-slate-400 border-t border-slate-100 pt-4">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                Dibimbing oleh: <span class="text-slate-500 font-medium">{{ $item->metadata['pembimbing'] }}</span>
              </div>
            @endif
          </div>
        @empty
          <div class="col-span-3 text-center py-12 text-slate-400">Belum ada ekstrakurikuler.</div>
        @endforelse
      </div>
    </div>
  </section>

  <section class="bg-slate-50 py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-xl mx-auto mb-12">
        <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-100 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-4">
          <span>🏆</span> Prestasi Santri
        </div>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
          Kebanggaan Kami
        </h2>
        <p class="text-slate-500 text-base leading-relaxed">
          Prestasi yang diraih santri di berbagai ajang lomba dan kompetisi.
        </p>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
        <div class="group relative overflow-hidden rounded-2xl bg-amber-100 col-span-2" style="aspect-ratio:2.1/1">
          <img src="https://images.unsplash.com/photo-1523050854058-8df90110c7f1?w=600&h=400&fit=crop&auto=format" alt="Lomba" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"><span class="text-white text-sm font-semibold">Lomba Kaligrafi</span></div>
          <div class="absolute top-3 left-3"><span class="bg-white/90 backdrop-blur-sm text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">Lomba Kaligrafi</span></div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl bg-amber-100" style="aspect-ratio:1/1">
          <img src="https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?w=600&h=500&fit=crop&auto=format" alt="Pentas" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"><span class="text-white text-sm font-semibold">Pentas Seni</span></div>
          <div class="absolute top-3 left-3"><span class="bg-white/90 backdrop-blur-sm text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">Pentas Seni</span></div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl bg-amber-100" style="aspect-ratio:1/1">
          <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&h=400&fit=crop&auto=format" alt="Tahfidz" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"><span class="text-white text-sm font-semibold">Wisuda Tahfidz</span></div>
          <div class="absolute top-3 left-3"><span class="bg-white/90 backdrop-blur-sm text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">Wisuda Tahfidz</span></div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl bg-amber-100" style="aspect-ratio:1/1">
          <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&h=400&fit=crop&auto=format" alt="Hadrah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"><span class="text-white text-sm font-semibold">Hadrah & Marawis</span></div>
          <div class="absolute top-3 left-3"><span class="bg-white/90 backdrop-blur-sm text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">Hadrah & Marawis</span></div>
        </div>
        <div class="group relative overflow-hidden rounded-2xl bg-amber-100 col-span-2" style="aspect-ratio:2.1/1">
          <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=600&h=400&fit=crop&auto=format" alt="Outdoor" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"><span class="text-white text-sm font-semibold">Kegiatan Outdoor</span></div>
          <div class="absolute top-3 left-3"><span class="bg-white/90 backdrop-blur-sm text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">Kegiatan Outdoor</span></div>
        </div>
      </div>
    </div>
  </section>

  @include('components.public.cta')
  @include('components.public.footer')
  @include('components.public.scripts')

</body>
</html>
