<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts  --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Scripts & Styles  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900">

    {{-- Header --}}
    <header x-data="{ open: false }" class="bg-blue-950 text-white text-sm font-sans py-4 sm:py-0">
        <div
            class="max-w-6xl mx-auto px-4 py-4 hidden md:flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-4 sm:space-y-0">
            <div class="flex justify-center sm:justify-start items-center space-x-3">
                <a href="#" class="hover:opacity-80"><i class="fab fa-facebook-f"></i></a>
                <span class="text-white/50">|</span>
                <a href="#" class="hover:opacity-80"><i class="fab fa-youtube"></i></a>
                <span class="text-white/50">|</span>
                <a href="#" class="hover:opacity-80"><i class="fas fa-envelope"></i></a>
            </div>

            <div class="text-center">
                <h1 class="italic text-gray-300 text-lg sm:text-xl font-medium">"Positive News, Positive Views"</h1>
                <h2 class="italic text-lime-400 text-sm sm:text-base font-light">"The Agrinews Online in the
                    Philippines"</h2>
            </div>

            <div class="flex justify-center sm:justify-end items-center space-x-4">
                <button class="hover:text-gray-300">
                    <i class="fas fa-search"></i>
                </button>
                <a href="#" class="font-semibold hover:text-gray-300">Login</a>
                <span class="text-white/50">|</span>
                <a href="#" class="font-semibold hover:text-gray-300">Sign in</a>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">

            <a href="/" class="flex items-center space-x-2">
                <img src="assets/header/Logo.png" alt="Logo" class="h-auto w-46" />
            </a>

            {{-- Hamburger --}}
            <button @click="open = true" class="sm:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <nav class="hidden sm:flex space-x-6 text-sm font-bold uppercase">
                <a href="#" class="text-red-600">Home</a>
                <a href="#" class="hover:text-red-500">News</a>
                <a href="#" class="hover:text-red-500">Business</a>
                <a href="#" class="hover:text-red-500">Lifestyle</a>
                <a href="#" class="hover:text-red-500">Technology</a>
                <a href="#" class="hover:text-red-500">Sports</a>
                <a href="#" class="hover:text-red-500">Entertainment</a>
                <a href="#" class="hover:text-red-500">Portal</a>
                <a href="#" class="hover:text-red-500">Agri-News</a>
            </nav>
        </div>

        {{-- Mobile Sidebar --}}
        <div x-show="open" x-transition class="fixed inset-0 z-50 flex sm:hidden">
            <div @click="open = false" class="fixed inset-0 bg-opacity-50"></div>
            <div x-show="open" x-transition
                class="ml-auto w-40 h-full bg-blue-950 p-6 flex flex-col space-y-4 font-bold uppercase z-50">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-white text-lg">Menu</span>
                    <button @click="open = false" class="text-white">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <a href="#" class="text-red-500">Home</a>
                <a href="#" class="hover:text-red-500">News</a>
                <a href="#" class="hover:text-red-500">Business</a>
                <a href="#" class="hover:text-red-500">Lifestyle</a>
                <a href="#" class="hover:text-red-500">Technology</a>
                <a href="#" class="hover:text-red-500">Sports</a>
                <a href="#" class="hover:text-red-500">Entertainment</a>
                <a href="#" class="hover:text-red-500">Portal</a>
                <a href="#" class="hover:text-red-500">Agri-News</a>
            </div>
        </div>
    </header>

    {{-- Main content --}}
    <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-blue-950 text-white text-sm pt-12">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <h4 class="font-bold mb-4">NEWS PHILIPPINES ONLINE<br>COMPANY</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="flex justify-between hover:underline">About NewsPhilippinesOnline.com
                            <span class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">About the NPO Maharlika Media
                            Inc. <span class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a>
                    </li>
                    <li><a href="#" class="flex justify-between hover:underline">User Agreement <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Link Policy <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Privacy Policy <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">SERVICES</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="flex justify-between hover:underline">Sitemap <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Advertise <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Email Us <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Archive <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Contact Us <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Job Openings <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">PARTNERS</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="flex justify-between hover:underline">Kalakalkoto.com <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Chatkoto.com <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Adkoto.com <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">CCNPh.org <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">IPMAPhils.org <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">RIFACooperative.org <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">SMART Precision Farming Portal
                            <span class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4">SECTION</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="flex justify-between hover:underline">Sports <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Politics <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Business <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">News <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Lifestyle <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Entertainment <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Technology <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">International News <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">Travel <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                    <li><a href="#" class="flex justify-between hover:underline">AGRI-NEWS <span
                                class="text-white bg-red-600 text-center rounded-full text-xs w-4">1</span></a></li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 py-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-center md:text-left max-w-xl">
                <img src="assets/header/Logo.png" alt="Logo" class="h-10 mb-4 mx-auto md:mx-0">
                <p class="text-gray-200">
                    Our Digital News Online is your news, business, sports, technology, lifestyle and entertainment app.
                    The only digital media company that brings 70% agri-news in the Philippines. We provide you with the
                    latest breaking news and videos straight from the editorial newsroom of News Philippines Online
                    Maharlika Media Inc.
                </p>
            </div>

            <div class="flex space-x-4">
                <a href="#" class="text-white bg-blue-800 hover:bg-blue-700 p-2 rounded-full"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white bg-red-600 hover:bg-red-500 p-2 rounded-full"><i
                        class="fab fa-youtube"></i></a>
                <a href="#" class="text-white bg-white  p-2 rounded-full"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div
            class="bg-gray-100 text-center text-blue-950 text-sm py-4 px-4 flex flex-col md:flex-row justify-between items-center">
            <div>©2025 <strong>News Philippines Online Maharlika Media Inc.</strong> All Rights Reserved.</div>
            <div class="font-bold">Designed & Developed by BB 88 Advertising and Digital Solutions Inc.</div>
        </div>
    </footer>

</body>

</html>
