@extends('layouts.admin')
@section('title', ($item->exists ? 'Edit' : 'Tambah') . ' Testimoni - Admin TPQ')
@section('content')
<div class="mb-6">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">{{ $item->exists ? 'Edit' : 'Tambah' }} Testimoni</h1>
    <p class="text-gray-500 mt-1 text-sm">Masukkan testimoni dari wali santri untuk ditampilkan di website publik.</p>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 sm:p-6 max-w-2xl">
    <form method="post" action="{{ $item->exists ? route('admin.testimonials.update', $item) : route('admin.testimonials.store') }}">
        @csrf
        @if ($item->exists)
            @method('PUT')
        @endif

        @if ($errors->any())
            <div class="mb-5 p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">Periksa kembali isian formulir.</div>
        @endif

        <div class="flex items-center gap-4 mb-6 p-4 bg-gradient-to-r from-emerald-50 to-amber-50 rounded-xl border border-emerald-100">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center text-white font-bold text-xl flex-shrink-0 shadow-sm">
                {{ old('avatar_letter', $item->avatar_letter ?: substr(old('name', $item->name ?? '?'), 0, 1)) }}
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-800">{{ old('name', $item->name ?: 'Nama') }}</p>
                <p class="text-xs text-gray-500">{{ old('role', $item->role ?: 'Keterangan') }}</p>
            </div>
        </div>

        <div class="mb-5">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
            <input id="name" name="name" value="{{ old('name', $item->name) }}" required
                oninput="document.getElementById('preview-name').textContent = this.value || 'Nama'; document.getElementById('preview-avatar').textContent = this.value.charAt(0).toUpperCase() || '?'"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('name') border-red-300 @enderror"
                placeholder="Contoh: Ibu Fatimah Zahra">
            @error('name')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="role" class="block text-sm font-medium text-gray-700 mb-1.5">Keterangan (opsional)</label>
            <input id="role" name="role" value="{{ old('role', $item->role) }}"
                oninput="document.getElementById('preview-role').textContent = this.value || 'Keterangan'"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('role') border-red-300 @enderror"
                placeholder="Contoh: Ibu dari Ahmad Rafi (Kelas Tahfidz)">
            @error('role')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1.5">Isi Testimoni</label>
            <textarea id="content" name="content" rows="4" required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('content') border-red-300 @enderror"
                placeholder="Tuliskan testimoni wali santri...">{{ old('content', $item->content) }}</textarea>
            @error('content')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2.5">Rating</label>
            <div class="flex gap-1.5" x-data="{ rating: {{ old('rating', $item->rating ?? 5) }} }">
                @for($i=1;$i<=5;$i++)
                    <button type="button"
                        @click="rating = {{ $i }}"
                        @mouseenter="hover = {{ $i }}"
                        @mouseleave="hover = 0"
                        class="p-1.5 rounded-lg transition-all duration-150"
                        :class="rating >= {{ $i }} ? 'bg-amber-50 scale-110' : 'bg-gray-50 hover:bg-gray-100'">
                        <svg viewBox="0 0 20 20" :fill="rating >= {{ $i }} ? '#f59e0b' : '#d1d5db'" class="w-8 h-8 transition-transform duration-150" :class="rating >= {{ $i }} ? 'scale-110' : ''">
                            <polygon points="10,1 12.5,7 19,7 14,11 15.5,18 10,14 4.5,18 6,11 1,7 7.5,7" />
                        </svg>
                    </button>
                @endfor
                <input type="hidden" name="rating" x-bind:value="rating">
                <div class="flex items-center ml-3">
                    <span class="text-sm font-semibold text-gray-700" x-text="rating + '/5'"></span>
                </div>
            </div>
            @error('rating')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="avatar_letter" class="block text-sm font-medium text-gray-700 mb-1.5">Huruf Avatar (opsional)</label>
            <input id="avatar_letter" name="avatar_letter" value="{{ old('avatar_letter', $item->avatar_letter) }}" maxlength="2"
                oninput="document.getElementById('preview-avatar').textContent = this.value.toUpperCase() || '?'"
                class="w-20 px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-center uppercase @error('avatar_letter') border-red-300 @enderror"
                placeholder="F">
            <p class="text-xs text-gray-400 mt-1.5">Huruf awal untuk avatar. Kosongi untuk menggunakan huruf pertama dari nama.</p>
            @error('avatar_letter')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col sm:flex-row gap-4 mb-6">
            <div class="flex-1">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                <select id="status" name="status"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition bg-white">
                    <option value="draft" {{ old('status', $item->status ?: 'draft') === 'draft' ? 'selected' : '' }}>Draf</option>
                    <option value="published" {{ old('status', $item->status) === 'published' ? 'selected' : '' }}>Dipublikasikan</option>
                </select>
            </div>
            <div class="w-full sm:w-32">
                <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1.5">Urutan</label>
                <input id="sort_order" type="number" min="0" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
            </div>
        </div>

        <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <button type="submit" class="inline-flex items-center gap-2 px-5 py-2.5 bg-emerald-600 text-white text-sm font-semibold rounded-lg hover:bg-emerald-700 transition shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Simpan Data
            </button>
            <a href="{{ route('admin.testimonials') }}" class="px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition">Batal</a>
        </div>
    </form>
</div>
@endsection
