<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="hs-auto-mode-active">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Betech.id') }} - {{ $title ?? '' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-slate-900">
    @include('layouts.header')
    <!-- ========== MAIN CONTENT ========== -->
    @include('layouts.sidebar-toggle')

    @include('layouts.sidebar')

    <!-- Content -->
    <div class="w-full pt-5 px-4 sm:px-6 md:px-8 lg:pl-72  text-slate-700 dark:text-gray-400">
        <!-- Page Heading -->
        <h3 class="text-xl mb-5 text-slate-900 dark:text-gray-300 font-semibold">{{ $title ?? '' }}</h3>

        {{ $slot }}
        <!-- End Page Heading -->
    </div>

    <script src="{{ asset('utils/HSThemeAppearance.js') }}"></script>
    @livewireScripts
</body>

</html>
