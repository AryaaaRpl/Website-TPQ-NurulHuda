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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen flex flex-col lg:flex-row">
        {{-- OVERLAY (mobile) --}}
        <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false" class="fixed inset-0 z-30 bg-black/40 lg:hidden transition-opacity"></div>

        {{-- SIDEBAR --}}
        <aside x-bind:class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed lg:static inset-y-0 left-0 z-40 w-64 bg-emerald-900 text-white flex flex-col transition-transform duration-300 lg:translate-x-0 shrink-0">
            <div class="flex items-center justify-between p-5 border-b border-emerald-800">
                <div>
                    <h1 class="text-lg font-bold tracking-tight">TPQ Nurul Huda</h1>
                    <p class="text-emerald-300 text-xs mt-1">Panel Administrator</p>
                </div>
                <button @click="sidebarOpen = false" class="lg:hidden p-1.5 rounded-lg text-emerald-300 hover:bg-emerald-800 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
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
                <a href="{{ route('admin.testimonials') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->routeIs('admin.testimonials*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    Testimoni
                </a>
                <a href="{{ route('admin.applicants') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->routeIs('admin.applicants*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    PPDB
                </a>
                <a href="{{ route('admin.settings.edit') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium transition {{ request()->routeIs('admin.settings*') ? 'bg-emerald-700 text-white' : 'text-emerald-100 hover:bg-emerald-800 hover:text-white' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Pengaturan
                </a>
            </nav>
            <div class="p-4 border-t border-emerald-800">
                <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 px-2 mb-3 hover:bg-emerald-800 rounded-lg transition py-1.5">
                    <div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center text-sm font-bold overflow-hidden shrink-0">
                        @if (Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" alt="" class="w-full h-full object-cover">
                        @else
                            {{ substr(Auth::user()->name, 0, 1) }}
                        @endif
                    </div>
                    <div class="text-sm truncate">
                        <p class="font-medium truncate">{{ Auth::user()->name }}</p>
                        <p class="text-emerald-300 text-xs truncate">{{ Auth::user()->email }}</p>
                    </div>
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-emerald-100 hover:bg-emerald-800 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Keluar
                    </button>
                </form>
            </div>
        </aside>

        {{-- MAIN CONTENT --}}
        <main class="flex-1 min-w-0">
            {{-- TOP BAR (mobile) --}}
            <div class="sticky top-0 z-20 lg:hidden flex items-center gap-3 bg-white border-b border-gray-200 px-4 py-3">
                <button @click="sidebarOpen = true" class="p-1.5 rounded-lg text-gray-600 hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <div class="flex items-center gap-2.5">
                    <div class="w-7 h-7 rounded-full bg-emerald-600 flex items-center justify-center text-white text-xs font-bold overflow-hidden shrink-0">
                        @if (Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" alt="" class="w-full h-full object-cover">
                        @else
                            {{ substr(Auth::user()->name, 0, 1) }}
                        @endif
                    </div>
                    <p class="text-sm font-medium text-gray-700 truncate">{{ Auth::user()->name }}</p>
                </div>
            </div>

            <div class="p-4 sm:p-6 lg:p-8">
                @yield('content')
            </div>
        </main>
    </div>
    <style>[x-cloak]{display:none!important}</style>
    @if (session('success'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        </script>
    @endif
</body>
</html>
