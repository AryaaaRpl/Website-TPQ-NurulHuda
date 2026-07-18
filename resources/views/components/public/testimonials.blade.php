<section id="testimonial" class="relative bg-gradient-to-b from-white to-emerald-50/50 py-16 lg:py-24 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" style="opacity:0.04">
      <defs>
        <pattern id="dots" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="1.5" fill="#059669" />
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#dots)" />
    </svg>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-xl mx-auto mb-12 lg:mb-14">
      <div class="inline-flex items-center gap-2 bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-semibold px-4 py-1.5 rounded-full mb-4 shadow-sm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        Testimoni Wali Santri
      </div>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
        Apa Kata Orang Tua Santri?
      </h2>
      <p class="text-slate-500 text-base leading-relaxed">
        Kepercayaan orang tua adalah amanah terbesar kami.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
      @forelse ($testimonials as $t)
        @php
          $colors = [
            ['from' => 'from-emerald-500', 'to' => 'to-emerald-700', 'light' => 'bg-emerald-50', 'text' => 'text-emerald-600', 'border' => 'hover:border-emerald-300'],
            ['from' => 'from-amber-500', 'to' => 'to-amber-700', 'light' => 'bg-amber-50', 'text' => 'text-amber-600', 'border' => 'hover:border-amber-300'],
            ['from' => 'from-violet-500', 'to' => 'to-violet-700', 'light' => 'bg-violet-50', 'text' => 'text-violet-600', 'border' => 'hover:border-violet-300'],
            ['from' => 'from-rose-500', 'to' => 'to-rose-700', 'light' => 'bg-rose-50', 'text' => 'text-rose-600', 'border' => 'hover:border-rose-300'],
            ['from' => 'from-sky-500', 'to' => 'to-sky-700', 'light' => 'bg-sky-50', 'text' => 'text-sky-600', 'border' => 'hover:border-sky-300'],
            ['from' => 'from-teal-500', 'to' => 'to-teal-700', 'light' => 'bg-teal-50', 'text' => 'text-teal-600', 'border' => 'hover:border-teal-300'],
          ];
          $c = $colors[$loop->index % count($colors)];
          $initial = $t->avatar_letter ?: substr($t->name, 0, 1);
        @endphp
        <div class="group relative bg-white rounded-2xl p-6 lg:p-7 shadow-lg shadow-slate-200/50 border border-slate-100 {{ $c['border'] }} transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-slate-200/60">
          <div class="absolute -top-3 -right-3 w-10 h-10 {{ $c['light'] }} rounded-full flex items-center justify-center shadow-sm">
            <span class="{{ $c['text'] }} text-3xl font-serif leading-none select-none">&ldquo;</span>
          </div>

          <div class="flex gap-0.5 mb-4">
            @for($i=1;$i<=5;$i++)
              <svg viewBox="0 0 16 16" fill="{{ $i <= $t->rating ? '#f59e0b' : '#e5e7eb' }}" class="w-4 h-4 transition-transform duration-200 {{ $i <= $t->rating ? 'group-hover:scale-110' : '' }}">
                <polygon points="8,1 10,6 15,6 11,9.5 12.5,15 8,11.5 3.5,15 5,9.5 1,6 6,6" />
              </svg>
            @endfor
          </div>

          <p class="text-slate-600 text-sm leading-relaxed mb-4 relative z-10 line-clamp-5">&ldquo;{{ $t->content }}&rdquo;</p>

          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <div class="w-11 h-11 rounded-full bg-gradient-to-br {{ $c['from'] }} {{ $c['to'] }} flex items-center justify-center text-white font-bold text-base flex-shrink-0 shadow-sm">{{ $initial }}</div>
            <div class="min-w-0 flex-1">
              <p class="text-sm font-semibold text-slate-800 truncate">{{ $t->name }}</p>
              @if ($t->role)
                <p class="text-[11px] text-slate-400 truncate">{{ $t->role }}</p>
              @endif
            </div>
            <a href="{{ route('testimonial.detail', $t) }}" class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-50 hover:bg-emerald-50 border border-slate-200 hover:border-emerald-200 flex items-center justify-center text-slate-400 hover:text-emerald-600 transition-all duration-200 group-hover:bg-emerald-50 group-hover:border-emerald-200 group-hover:text-emerald-600" aria-label="Baca selengkapnya">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>
      @empty
        <div class="sm:col-span-2 lg:col-span-3 text-center py-16 text-slate-400 text-sm">
          Belum ada testimoni.
        </div>
      @endforelse
    </div>
  </div>
</section>
