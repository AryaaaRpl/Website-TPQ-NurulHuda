<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fasilitas — TPQ Nurul Huda</title>
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

  @include('components.public.navbar', ['active' => 'fasilitas'])

  <section class="relative overflow-hidden bg-white pt-32 pb-16 lg:pt-40 lg:pb-24">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:0.04">
        <defs>
          <pattern id="islamic-geo-f" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
            <polygon points="40,12 44,28 56,20 48,32 64,36 48,40 56,52 44,44 40,60 36,44 24,52 32,40 16,36 32,32 24,20 36,28" fill="#059669"/>
            <polygon points="40,20 43,30 52,24 46,33 56,36 46,39 52,48 43,42 40,52 37,42 28,48 34,39 24,36 34,33 28,24 37,30" fill="none" stroke="#059669" stroke-width="0.8"/>
            <rect x="0" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 8)" />
            <rect x="64" y="0" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 8)" />
            <rect x="0" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 8, 72)" />
            <rect x="64" y="64" width="16" height="16" fill="none" stroke="#059669" stroke-width="0.6" transform="rotate(45, 72, 72)" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#islamic-geo-f)" />
      </svg>
      <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full opacity-20" style="background: radial-gradient(circle, #6ee7b7, transparent 70%)"></div>
      <div class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full opacity-15" style="background: radial-gradient(circle, #fde68a, transparent 70%)"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-6">
        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
        Fasilitas Kami
      </div>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-800 leading-tight mb-5">
        Lingkungan Belajar yang
        <span class="text-emerald-600 relative inline-block">
          Nyaman
          <svg viewBox="0 0 220 12" class="absolute -bottom-2 left-0 w-full" fill="none">
            <path d="M2 8 Q55 2 110 6 Q165 10 218 5" stroke="#fbbf24" stroke-width="3" stroke-linecap="round" />
          </svg>
        </span>
        & Islami
      </h1>
      <p class="text-slate-500 text-base lg:text-lg leading-relaxed max-w-2xl mx-auto">
        Kami menyediakan fasilitas lengkap dan terawat agar santri belajar dengan tenang, aman, dan menyenangkan setiap harinya.
      </p>
    </div>
  </section>

  <section class="relative bg-white py-16 lg:py-24 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
      <svg class="absolute inset-0 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg" style="opacity:0.03">
        <rect width="100%" height="100%" fill="url(#islamic-geo-f)" />
      </svg>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-xl mx-auto mb-12 lg:mb-16">
        <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-700 border border-amber-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-4">
          <span>✦</span> Sarana & Prasarana
        </div>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
          Fasilitas yang Kami Sediakan
        </h2>
        <p class="text-slate-500 text-base leading-relaxed">
          Setiap sudut dirancang untuk mendukung suasana belajar Al-Qur'an yang kondusif dan penuh berkah.
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        @forelse($facilities as $item)
          @php
            $features = $item->metadata['features'] ?? [];
            $mod = $loop->index % 3;
            $border = match($mod) { 0 => 'hover:border-emerald-200', 1 => 'hover:border-amber-200', default => 'hover:border-teal-200' };
            $bg = match($mod) { 0 => 'bg-emerald-100 text-emerald-600', 1 => 'bg-amber-100 text-amber-600', default => 'bg-teal-100 text-teal-600' };
            $check = match($mod) { 0 => 'text-emerald-500', 1 => 'text-amber-500', default => 'text-teal-500' };
          @endphp
          <div class="group relative bg-white rounded-2xl p-6 lg:p-7 shadow-md border border-slate-100 {{ $border }} transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
            @if($item->image_url)
              <img src="{{ str_starts_with($item->image_url, 'http') ? $item->image_url : asset($item->image_url) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover rounded-xl mb-5">
            @else
              <div class="w-14 h-14 rounded-2xl {{ $bg }} flex items-center justify-center mb-5 transition-transform duration-300 group-hover:scale-110">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
              </div>
            @endif
            <h3 class="text-lg font-bold text-slate-800 mb-2">{{ $item->title }}</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $item->description }}</p>
            @if(count($features))
              <ul class="space-y-2">
                @foreach($features as $f)
                  <li class="flex items-center gap-2.5 text-sm text-slate-600"><span class="flex-shrink-0 {{ $check }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="20 6 9 17 4 12"/></svg></span> {{ $f }}</li>
                @endforeach
              </ul>
            @endif
          </div>
        @empty
          <div class="col-span-3 text-center py-12 text-slate-400">Belum ada fasilitas.</div>
        @endforelse
      </div>
    </div>
  </section>

  @include('components.public.cta')
  @include('components.public.footer')
  @include('components.public.scripts')

</body>
</html>
