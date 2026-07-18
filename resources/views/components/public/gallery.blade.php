<section id="galeri" class="bg-slate-50 py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-xl mx-auto mb-12">
      <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-100 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-4">
        <span>📸</span> Galeri Kegiatan
      </div>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-800 mb-4 leading-tight">
        Aktivitas & Kegiatan Santri
      </h2>
      <p class="text-slate-500 text-base leading-relaxed">
        Suasana belajar yang kondusif, hangat, dan penuh semangat bersama para santri kami.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
      @forelse($gallery as $item)
        @php
          $i = $loop->index;
          $isLarge = ($i === 0 || $i === 4 || $i % 4 === 0);
          $ratio = $isLarge ? '2.1/1' : '1/1';
          $span = $isLarge ? 'col-span-2' : '';
        @endphp
        <a href="{{ route('gallery.detail', $item) }}" class="group relative overflow-hidden rounded-2xl bg-emerald-100 {{ $span }}" style="aspect-ratio:{{ $ratio }}">
          <img src="{{ $item->image_url ? (str_starts_with($item->image_url, 'http') ? $item->image_url : asset($item->image_url)) : 'https://images.unsplash.com/photo-1629273229664-11fabc0becc0?w=600&h=400&fit=crop&auto=format' }}"
               alt="{{ $item->title }}"
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm font-semibold">{{ $item->title }}</span>
          </div>
          <div class="absolute top-3 left-3 flex items-center gap-2">
            <span class="bg-white/90 backdrop-blur-sm text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded-full shadow-sm">{{ $item->title }}</span>
            <span class="bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-opacity">
              Detail
            </span>
          </div>
        </a>
      @empty
        <div class="col-span-3 text-center py-12 text-slate-400">Belum ada galeri.</div>
      @endforelse
    </div>
  </div>
</section>
