<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
</head>

<body class="bg-gray-50 dark:bg-slate-900">
    @include('layouts.header')
    <!-- ========== MAIN CONTENT ========== -->
    @include('layouts.sidebar-toggle')

    @include('layouts.sidebar')

    <!-- Content -->
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
        <!-- Page Heading -->
        {{ $slot }}
        <!-- End Page Heading -->
    </div>

    <script src="{{ asset('utils/HSThemeAppearance.js') }}"></script>
</body>

</html>
