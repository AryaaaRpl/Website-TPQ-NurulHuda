@extends('layouts.guest')
@section('title', 'Masuk - Admin TPQ')
@section('content')
@if (session('status'))
    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg text-sm">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-5">
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('email') border-red-300 @enderror"
            placeholder="dea@tpqnurulhuda.test">
        @error('email')
            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-5">
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Kata Sandi</label>
        <input id="password" type="password" name="password" required autocomplete="current-password"
            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition @error('password') border-red-300 @enderror"
            placeholder="Masukkan kata sandi">
        @error('password')
            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between mb-6">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="remember" class="rounded border-gray-300 text-emerald-600 focus:ring-emerald-500" {{ old('remember') ? 'checked' : '' }}>
            <span class="text-sm text-gray-600">Ingat saya</span>
        </label>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm text-emerald-600 hover:text-emerald-700 underline">Lupa password?</a>
        @endif
    </div>

    <button type="submit" class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold rounded-lg transition shadow-sm shadow-emerald-200">
        Masuk
    </button>
</form>
@endsection
