<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'TPQ Nurul Huda'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-emerald-50 via-white to-emerald-50">
        <div class="mb-6 text-center">
            <div class="w-16 h-16 mx-auto mb-3 bg-emerald-600 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-200">
                <img src="{{ asset('logo.jpeg') }}" alt="Logo TPQ Nurul Huda" class="w-100 h-100 object-contain">
            </div>
            <h1 class="text-xl font-bold text-gray-900">TPQ Nurul Huda</h1>
            <p class="text-sm text-gray-500 mt-1">Panel Administrator</p>
        </div>
        <div class="w-full sm:max-w-md px-8 py-6 bg-white shadow-lg shadow-gray-200/50 rounded-2xl">
            @yield('content')
        </div>
    </div>
</body>
</html>
