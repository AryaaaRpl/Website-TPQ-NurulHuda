<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $item->title }} — Galeri TPQ Nurul Huda</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          emerald: { 50:'#ecfdf5',100:'#d1fae5',200:'#a7f3d0',300:'#6ee7b7',400:'#34d399',500:'#10b981',600:'#059669',700:'#047857',800:'#065f46',900:'#064e3b' }
        }
      }
    }
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Plus Jakarta Sans', sans-serif; }
</style>
</head>
<body class="min-h-screen bg-slate-50">

  @include('components.public.navbar', ['active' => 'galeri'])

  <main class="pt-28 pb-16 lg:pb-24">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="{{ route('home') }}#galeri" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors mb-8 group">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform group-hover:-translate-x-1"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        Kembali ke Galeri
      </a>

      <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        <div class="relative bg-slate-100">
          <img src="{{ $item->image_url ? (str_starts_with($item->image_url, 'http') ? $item->image_url : asset($item->image_url)) : 'https://images.unsplash.com/photo-1629273229664-11fabc0becc0?w=1200&h=800&fit=crop&auto=format' }}"
               alt="{{ $item->title }}"
               class="w-full h-auto max-h-[60vh] object-contain mx-auto">
        </div>
        <div class="p-6 sm:p-8 lg:p-10">
          <h1 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-slate-800 mb-4">{{ $item->title }}</h1>
          @if ($item->description)
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed">{{ $item->description }}</p>
          @else
            <p class="text-slate-400 italic text-sm">Tidak ada deskripsi untuk gambar ini.</p>
          @endif
          <p class="text-xs text-slate-400 mt-6">
            Diunggah {{ $item->created_at->format('d F Y') }}
          </p>
        </div>
      </div>

      @if ($others->isNotEmpty())
        <div class="mt-14">
          <h2 class="text-lg sm:text-xl font-bold text-slate-800 mb-6">Galeri Lainnya</h2>
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
            @foreach ($others as $o)
              <a href="{{ route('gallery.detail', $o) }}" class="group relative overflow-hidden rounded-2xl bg-slate-100 aspect-square">
                <img src="{{ $o->image_url ? (str_starts_with($o->image_url, 'http') ? $o->image_url : asset($o->image_url)) : 'https://images.unsplash.com/photo-1629273229664-11fabc0becc0?w=400&h=400&fit=crop&auto=format' }}"
                     alt="{{ $o->title }}"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                  <span class="text-white text-xs font-semibold line-clamp-2">{{ $o->title }}</span>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      @endif
    </div>
  </main>

  @include('components.public.footer')
  @include('components.public.scripts')

</body>
</html>
