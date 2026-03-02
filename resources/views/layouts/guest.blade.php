<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WCC SCAN') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .gradient-bg {
                background: linear-gradient(90deg, #164D30 0%, #185336 60%, #369976 100%);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="gradient-bg min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <!-- Logo -->
            <div class="mb-6">
                <a href="/">
                    <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC SCAN" class="h-20 w-auto">
                </a>
            </div>

            <!-- Title -->
            <div class="mb-8 text-center">
                <h1 class="text-white text-4xl font-bold tracking-wider mb-2">WCC SCAN</h1>
                <p class="text-white text-sm tracking-[0.2em] opacity-90">SMART CAMPUS ASSISTANT & NAVIGATOR</p>
            </div>

            <!-- Form Container -->
            <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-lg overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center">
                <p class="text-white text-xs tracking-wider opacity-75">WCC AERONAUTICAL AND TECHNOLOGICAL COLLEGE</p>
                <p class="text-white text-xs tracking-wider opacity-75">AVIATION ELECTRONICS DEPARTMENT</p>
            </div>
        </div>
    </body>
</html>
