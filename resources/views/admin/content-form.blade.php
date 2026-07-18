@extends('layouts.admin')
@section('title', ($item->exists ? 'Edit' : 'Tambah') . ' ' . $label . ' - Admin TPQ')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">{{ $item->exists ? 'Edit' : 'Tambah' }} {{ $label }}</h1>
    <p class="text-gray-500 mt-1">Lengkapi data konten untuk ditampilkan di website publik.</p>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-2xl">
    <form method="post" action="{{ $item->exists ? route('admin.contents.update', [$type, $item]) : route('admin.contents.store', $type) }}" enctype="multipart/form-data">
        @csrf
        @if ($item->exists)
            @method('PUT')
        @endif

        @if ($errors->any())
            <div class="mb-5 p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">Periksa kembali isian formulir.</div>
        @endif

        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">Judul</label>
            <input id="title" name="title" value="{{ old('title', $item->title) }}" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('title') border-red-300 @enderror"
                placeholder="Masukkan judul">
            @error('title')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi</label>
            <textarea id="description" name="description" rows="5"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('description') border-red-300 @enderror"
                placeholder="Masukkan deskripsi">{{ old('description', $item->description) }}</textarea>
            @error('description')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Gambar</label>
            <div class="flex items-start gap-4">
                <div class="flex-1">
                    <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/webp"
                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition @error('image') border-red-300 @enderror"
                        onchange="previewImage(event)">
                    <p class="text-xs text-gray-400 mt-1.5">Format: JPG, PNG, WebP. Maks 5MB.</p>
                    @error('image')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                @if ($item->exists && $item->image_url)
                    <div class="relative group flex-shrink-0">
                        <img src="{{ str_starts_with($item->image_url, 'http') ? $item->image_url : asset($item->image_url) }}" alt="Preview" class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                        <label class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center cursor-pointer hover:bg-red-600 transition shadow-sm">
                            <input type="checkbox" name="remove_image" value="1" class="hidden" onchange="this.closest('form').submit()">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </label>
                        <input type="hidden" name="_image_old" value="{{ $item->image_url }}">
                    </div>
                @endif
            </div>
            <div id="image-preview" class="hidden mt-3"></div>
        </div>

        <div class="flex gap-4 mb-6">
            <div class="flex-1">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                <select id="status" name="status"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition bg-white">
                    <option value="draft" {{ old('status', $item->status ?: 'draft') === 'draft' ? 'selected' : '' }}>Draf</option>
                    <option value="published" {{ old('status', $item->status) === 'published' ? 'selected' : '' }}>Dipublikasikan</option>
                </select>
            </div>
            <div class="w-32">
                <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1.5">Urutan</label>
                <input id="sort_order" type="number" min="0" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="px-5 py-2.5 bg-emerald-600 text-white text-sm font-semibold rounded-lg hover:bg-emerald-700 transition shadow-sm">Simpan Data</button>
            <a href="{{ route('admin.contents', $type) }}" class="px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition">Batal</a>
        </div>
    </form>
</div>

<script>
function previewImage(event) {
    const [file] = event.target.files;
    if (file) {
        const container = document.getElementById('image-preview');
        container.innerHTML = `<img src="${URL.createObjectURL(file)}" class="w-32 h-32 object-cover rounded-lg border border-gray-200 shadow-sm">`;
        container.classList.remove('hidden');
    }
}
</script>
@endsection
