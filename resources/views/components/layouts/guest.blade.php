<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900">

    {{-- Header --}}
    <header class="w-full bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-4 px-6 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <x-application-logo class="w-8 h-8 text-gray-500" />
                <span
                    class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
    </header>

    {{-- Main content --}}
    <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </main>

</body>

</html>
