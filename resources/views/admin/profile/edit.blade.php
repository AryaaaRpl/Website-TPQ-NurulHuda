@extends('layouts.admin')
@section('title', 'Profil Saya - Admin TPQ')
@section('content')
<div class="mb-6">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Profil Saya</h1>
    <p class="text-gray-500 mt-1 text-sm">Kelola informasi akun dan foto profil Anda.</p>
</div>

<div class="grid gap-6 max-w-2xl">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 sm:p-6">
        <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="mb-5 p-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">Periksa kembali isian formulir.</div>
            @endif

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-3">Foto Profil</label>
                <div class="flex items-center gap-5">
                    <div class="w-20 h-20 rounded-full bg-emerald-100 flex items-center justify-center text-2xl font-bold text-emerald-600 overflow-hidden shrink-0 border-2 border-emerald-200">
                        @if ($admin->avatar)
                            <img src="{{ $admin->avatar }}" alt="" class="w-full h-full object-cover" id="avatar-preview-img">
                        @else
                            <span id="avatar-placeholder">{{ substr($admin->name, 0, 1) }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="avatar" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-50 transition cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            Pilih Foto
                        </label>
                        <input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/jpg,image/webp" class="hidden" onchange="previewAvatar(event)">
                        <p class="text-xs text-gray-400 mt-1.5">Format: JPG, PNG, WebP. Maks 2MB.</p>
                    </div>
                </div>
                <div id="avatar-preview-new" class="hidden mt-3"></div>
                @error('avatar')
                    <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                <input id="name" type="text" value="{{ $admin->name }}" disabled
                    class="w-full px-4 py-2.5 border border-gray-200 bg-gray-50 rounded-lg text-sm text-gray-500 cursor-not-allowed">
                <p class="text-xs text-gray-400 mt-1">Nama tidak dapat diubah. Hubungi super admin jika perlu perubahan.</p>
            </div>

            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $admin->email) }}" required
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('email') border-red-300 @enderror">
                @error('email')
                    <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="px-5 py-2.5 bg-emerald-600 text-white text-sm font-semibold rounded-lg hover:bg-emerald-700 transition shadow-sm">Simpan Perubahan</button>
                <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition">Batal</a>
            </div>
        </form>
    </div>
</div>

<script>
function previewAvatar(event) {
    const [file] = event.target.files;
    if (file) {
        const url = URL.createObjectURL(file);
        const img = document.getElementById('avatar-preview-img');
        const placeholder = document.getElementById('avatar-placeholder');
        if (img) { img.src = url; img.classList.remove('hidden'); }
        if (placeholder) placeholder.classList.add('hidden');
    }
}
</script>
@endsection
