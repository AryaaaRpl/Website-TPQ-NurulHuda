<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin TPQ Nurul Huda')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-emerald-900 text-white flex flex-col shrink-0">
            <div class="p-6 border-b border-emerald-800">
                <h1 class="text-lg font-bold tracking-tight">TPQ Nurul Huda</h1>
                <p class="text-emerald-300 text-xs mt-1">Panel Administrator</p>
            </div>
            <nav class="flex-1 p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.contents', 'gallery') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/content/gallery*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Galeri
                </a>
                <a href="{{ route('admin.contents', 'extracurricular') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/content/extracurricular*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    Ekstrakurikuler
                </a>
                <a href="{{ route('admin.contents', 'facility') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/content/facility*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Fasilitas
                </a>
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->routeIs('admin.applicants*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    PPDB
                </a>
            </nav>
            <div class="p-4 border-t border-emerald-800">
                <div class="flex items-center gap-3 px-2 mb-3">
                    <div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center text-sm font-bold">{{ substr(Auth::user()->name, 0, 1) }}</div>
                    <div class="text-sm truncate">
                        <p class="font-medium truncate">{{ Auth::user()->name }}</p>
                        <p class="text-emerald-300 text-xs truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-emerald-100 hover:bg-emerald-800 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Keluar
                    </button>
                </form>
            </div>
        </aside>
        <main class="flex-1 p-8">
            @if (session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg text-sm">{{ session('success') }}</div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
