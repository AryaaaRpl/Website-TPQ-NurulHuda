@extends('layouts.admin')
@section('title', 'Pengaturan Web - Admin TPQ')
@section('content')
<div class="mb-6">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Pengaturan Web</h1>
    <p class="text-gray-500 mt-1 text-sm">Kelola data statistik dan informasi yang tampil di halaman publik.</p>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 sm:p-6 max-w-2xl">
    <form method="post" action="{{ route('admin.settings.update') }}">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="mb-5 p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">Periksa kembali isian formulir.</div>
        @endif

        <div class="mb-6">
            <h2 class="text-sm font-semibold text-gray-800 mb-3 pb-2 border-b border-gray-100">Statistik</h2>
            <div class="grid sm:grid-cols-3 gap-4">
                <div>
                    <label for="total_santri" class="block text-sm font-medium text-gray-700 mb-1.5">Total Santri</label>
                    <input id="total_santri" type="number" min="0" name="total_santri" value="{{ old('total_santri', $setting->total_santri) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('total_santri') border-red-300 @enderror">
                    @error('total_santri')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="total_guru" class="block text-sm font-medium text-gray-700 mb-1.5">Total Guru</label>
                    <input id="total_guru" type="number" min="0" name="total_guru" value="{{ old('total_guru', $setting->total_guru) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('total_guru') border-red-300 @enderror">
                    @error('total_guru')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="years_of_experience" class="block text-sm font-medium text-gray-700 mb-1.5">Tahun Berdiri</label>
                    <input id="years_of_experience" type="number" min="0" name="years_of_experience" value="{{ old('years_of_experience', $setting->years_of_experience) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('years_of_experience') border-red-300 @enderror">
                    @error('years_of_experience')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-6">
            <h2 class="text-sm font-semibold text-gray-800 mb-3 pb-2 border-b border-gray-100">Syarat Pendaftaran</h2>
            <div>
                <label for="syarat_pendaftaran" class="block text-sm font-medium text-gray-700 mb-1.5">Isi Syarat Pendaftaran</label>
                <textarea id="syarat_pendaftaran" name="syarat_pendaftaran" rows="6"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('syarat_pendaftaran') border-red-300 @enderror"
                    placeholder="Masukkan syarat pendaftaran...">{{ old('syarat_pendaftaran', $setting->syarat_pendaftaran) }}</textarea>
                @error('syarat_pendaftaran')
                    <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="text-xs text-gray-400 mt-1.5">Teks ini akan ditampilkan di halaman PPDB.</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="px-5 py-2.5 bg-emerald-600 text-white text-sm font-semibold rounded-lg hover:bg-emerald-700 transition shadow-sm">Simpan Perubahan</button>
            <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition">Batal</a>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#syarat_pendaftaran'), {
        toolbar: ['heading', '|', 'bold', 'italic', '|', 'bulletedList', 'numberedList'],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraf', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h3', title: 'Sub Judul', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h4', title: 'Sub Sub Judul', class: 'ck-heading_heading2' },
            ]
        }
    })
    .catch(error => console.error(error));
</script>
@endsection
