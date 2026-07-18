<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $testimonial->name }} — Testimoni TPQ Nurul Huda</title>
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
<body class="min-h-screen bg-gradient-to-b from-white to-emerald-50/50">

  @include('components.public.navbar', ['active' => 'testimonial'])

  <main class="pt-28 pb-16 lg:pb-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="{{ route('home') }}#testimonial" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors mb-8 group">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform group-hover:-translate-x-1"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        Kembali ke Testimoni
      </a>

      @php
        $colors = [
          'from-emerald-500 to-emerald-700', 'from-amber-500 to-amber-700',
          'from-violet-500 to-violet-700', 'from-rose-500 to-rose-700',
          'from-sky-500 to-sky-700', 'from-teal-500 to-teal-700',
        ];
        $gradient = $colors[crc32($testimonial->id) % count($colors)];
        $initial = $testimonial->avatar_letter ?: substr($testimonial->name, 0, 1);
      @endphp

      <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 sm:p-10 lg:p-12">
        <div class="flex flex-col sm:flex-row sm:items-start gap-6 sm:gap-8 mb-8">
          <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-gradient-to-br {{ $gradient }} flex items-center justify-center text-white font-bold text-3xl sm:text-4xl flex-shrink-0 shadow-lg mx-auto sm:mx-0">
            {{ $initial }}
          </div>
          <div class="text-center sm:text-left">
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-slate-800 mb-1">{{ $testimonial->name }}</h1>
            @if ($testimonial->role)
              <p class="text-sm sm:text-base text-slate-500 mb-3">{{ $testimonial->role }}</p>
            @endif
            <div class="flex gap-1 justify-center sm:justify-start">
              @for($i=1;$i<=5;$i++)
                <svg viewBox="0 0 20 20" fill="{{ $i <= $testimonial->rating ? '#f59e0b' : '#e5e7eb' }}" class="w-5 h-5">
                  <polygon points="10,1 12.5,7 19,7 14,11 15.5,18 10,14 4.5,18 6,11 1,7 7.5,7" />
                </svg>
              @endfor
            </div>
          </div>
        </div>

        <div class="relative">
          <span class="absolute -top-2 -left-1 text-6xl sm:text-7xl font-serif text-emerald-100 leading-none select-none">&ldquo;</span>
          <p class="text-base sm:text-lg leading-relaxed text-slate-700 pl-6 sm:pl-10">
            {{ $testimonial->content }}
          </p>
          <span class="block text-right text-6xl sm:text-7xl font-serif text-emerald-100 leading-none select-none -mb-6">&rdquo;</span>
        </div>
      </div>

      @if ($others->isNotEmpty())
        <div class="mt-16">
          <h2 class="text-lg sm:text-xl font-bold text-slate-800 mb-6">Testimoni Lainnya</h2>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($others as $o)
              @php
                $oc = $colors[crc32($o->id) % count($colors)];
                $oi = $o->avatar_letter ?: substr($o->name, 0, 1);
              @endphp
              <a href="{{ route('testimonial.detail', $o) }}"
                 class="group bg-white rounded-2xl p-5 shadow-md border border-slate-100 hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex gap-0.5 mb-3">
                  @for($i=1;$i<=5;$i++)
                    <svg viewBox="0 0 16 16" fill="{{ $i <= $o->rating ? '#f59e0b' : '#e5e7eb' }}" class="w-3.5 h-3.5">
                      <polygon points="8,1 10,6 15,6 11,9.5 12.5,15 8,11.5 3.5,15 5,9.5 1,6 6,6" />
                    </svg>
                  @endfor
                </div>
                <p class="text-slate-600 text-sm leading-relaxed line-clamp-3 mb-3">&ldquo;{{ $o->content }}&rdquo;</p>
                <div class="flex items-center gap-2.5 pt-3 border-t border-slate-100">
                  <div class="w-8 h-8 rounded-full bg-gradient-to-br {{ $oc }} flex items-center justify-center text-white font-bold text-xs flex-shrink-0">{{ $oi }}</div>
                  <p class="text-sm font-semibold text-slate-800 truncate">{{ $o->name }}</p>
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
