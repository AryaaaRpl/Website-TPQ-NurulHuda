<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PPDB — TPQ Nurul Huda</title>
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
  @include('components.public.navbar', ['active' => 'ppdb'])

  <section class="pt-28 pb-16 lg:pb-20 bg-gradient-to-b from-emerald-50/50 to-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-10">
        <div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-semibold px-3.5 py-1.5 rounded-full mb-4">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
          Pendaftaran Santri Baru 2026/2027
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-800 mb-3">Formulir Pendaftaran</h1>
        <p class="text-slate-500 max-w-lg mx-auto">Isi data diri ananda dengan lengkap untuk mendaftar sebagai santri TPQ Nurul Huda.</p>
      </div>

      @if(session('registration_success'))
        <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-6 sm:p-8 text-center mb-8">
          <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
              <polyline points="20 6 9 17 4 12" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-emerald-800 mb-2">Pendaftaran Berhasil!</h3>
          <p class="text-emerald-600 font-semibold">{{ session('registration_success') }}</p>
          <p class="text-slate-500 text-sm mt-3">Silakan simpan nomor pendaftaran Anda untuk informasi selanjutnya.</p>
          <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mt-5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2.5 rounded-xl transition-all duration-200 text-sm">
            Kembali ke Beranda
          </a>
        </div>
      @else
        <form method="POST" action="{{ route('ppdb.register') }}" class="bg-white rounded-2xl shadow-lg shadow-slate-100 border border-slate-100 p-6 sm:p-8 lg:p-10">
          @csrf

          @if($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
              <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Lengkap Ananda <span class="text-red-500">*</span></label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" required
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-100 outline-none transition-all duration-200 text-slate-700 placeholder:text-slate-300">
            </div>
            <div>
              <label for="parent_name" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Orang Tua/Wali <span class="text-red-500">*</span></label>
              <input type="text" id="parent_name" name="parent_name" value="{{ old('parent_name') }}" required
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-100 outline-none transition-all duration-200 text-slate-700 placeholder:text-slate-300">
            </div>
            <div>
              <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1.5">No. HP/WA Orang Tua <span class="text-red-500">*</span></label>
              <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-100 outline-none transition-all duration-200 text-slate-700 placeholder:text-slate-300">
            </div>
            <div>
              <label for="age" class="block text-sm font-semibold text-slate-700 mb-1.5">Usia Ananda <span class="text-red-500">*</span></label>
              <input type="number" id="age" name="age" value="{{ old('age') }}" required min="3" max="18"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-400 focus:ring-2 focus:ring-emerald-100 outline-none transition-all duration-200 text-slate-700 placeholder:text-slate-300">
            </div>
          </div>

          <div class="mt-6 border-t border-slate-100 pt-6">
            <p class="text-sm font-semibold text-slate-700 mb-3">Dokumen Persyaratan</p>
            <div class="grid sm:grid-cols-3 gap-4">
              <div>
                <label for="birth_certificate" class="block text-xs font-medium text-slate-600 mb-1.5">Fotokopi Akta Kelahiran</label>
                <input type="file" id="birth_certificate" name="birth_certificate" accept=".jpg,.jpeg,.png,.pdf"
                  class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-all duration-200 cursor-pointer">
              </div>
              <div>
                <label for="family_card" class="block text-xs font-medium text-slate-600 mb-1.5">Fotokopi Kartu Keluarga</label>
                <input type="file" id="family_card" name="family_card" accept=".jpg,.jpeg,.png,.pdf"
                  class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-all duration-200 cursor-pointer">
              </div>
              <div>
                <label for="photo" class="block text-xs font-medium text-slate-600 mb-1.5">Pas foto 3×4</label>
                <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png"
                  class="w-full text-sm text-slate-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-all duration-200 cursor-pointer">
              </div>
            </div>
          </div>

          <div class="mt-6">
            <label class="block text-sm font-semibold text-slate-700 mb-2.5">Program <span class="text-red-500">*</span></label>
            <div class="flex flex-wrap gap-3">
              <label class="flex items-center gap-2.5 bg-slate-50 hover:bg-emerald-50 border border-slate-200 has-[:checked]:border-emerald-400 has-[:checked]:bg-emerald-50 rounded-xl px-5 py-3 cursor-pointer transition-all duration-200">
                <input type="radio" name="program" value="jilid" {{ old('program') === 'jilid' ? 'checked' : '' }} class="accent-emerald-600 w-4 h-4">
                <div>
                  <span class="text-sm font-semibold text-slate-700">Jilid</span>
                  <span class="text-xs text-slate-400 block">Untuk pemula / dasar</span>
                </div>
              </label>
              <label class="flex items-center gap-2.5 bg-slate-50 hover:bg-emerald-50 border border-slate-200 has-[:checked]:border-emerald-400 has-[:checked]:bg-emerald-50 rounded-xl px-5 py-3 cursor-pointer transition-all duration-200">
                <input type="radio" name="program" value="tahfidz" {{ old('program') === 'tahfidz' ? 'checked' : '' }} class="accent-emerald-600 w-4 h-4">
                <div>
                  <span class="text-sm font-semibold text-slate-700">Tahfidz</span>
                  <span class="text-xs text-slate-400 block">Hafalan Al-Qur'an</span>
                </div>
              </label>
            </div>
          </div>

          <button type="submit" class="w-full mt-6 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-7 py-3.5 rounded-2xl transition-all duration-200 shadow-lg shadow-emerald-200 hover:shadow-xl hover:shadow-emerald-300 hover:-translate-y-0.5 text-base">
            Kirim Pendaftaran
          </button>
        </form>
      @endif

      @if(isset($facilities) && $facilities->isNotEmpty())
        <div class="mt-12 text-center">
          <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">Fasilitas Unggulan</p>
          <div class="grid sm:grid-cols-3 gap-4">
            @foreach($facilities as $facility)
              <div class="bg-white rounded-xl border border-slate-100 p-5 text-center shadow-sm">
                <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                  <span class="text-emerald-600 text-lg">{{ $facility->icon ?? '⭐' }}</span>
                </div>
                <h4 class="text-sm font-bold text-slate-700">{{ $facility->title }}</h4>
                <p class="text-xs text-slate-400 mt-1">{{ $facility->description }}</p>
              </div>
            @endforeach
          </div>
        </div>
      @endif
    </div>
  </section>

  @include('components.public.footer')
  @include('components.public.scripts')
</body>
</html>
