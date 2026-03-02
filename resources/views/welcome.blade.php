<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WCC SCAN - Smart Campus Assistant & Navigator</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #164D30 0%, #185336 60%, #369976 100%);
        }
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        .slide-up {
            animation: slideUp 0.8s ease-out;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .scan-frame {
            border: 3px solid white;
            border-radius: 8px;
            padding: 20px;
            position: relative;
        }
        .scan-frame::before,
        .scan-frame::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border: 3px solid white;
        }
        .scan-frame::before {
            top: -3px;
            left: -3px;
            border-right: none;
            border-bottom: none;
        }
        .scan-frame::after {
            bottom: -3px;
            right: -3px;
            border-left: none;
            border-top: none;
        }
    </style>
</head>
<body class="antialiased overflow-hidden">
    <div id="landing-screen" class="gradient-bg h-screen w-screen flex flex-col items-center justify-between fade-in overflow-hidden">
        <!-- Top Logos -->
        <div class="w-full flex justify-between items-start p-8">
            <!-- WCC Logo Left -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC Logo" class="h-20 w-auto">
            </div>
            
            <!-- Aviation Electronics Department Logo Right -->
            <div class="flex items-center">
                <img src="{{ asset('img/wcc-scans-airplain-logo.png') }}" alt="Aviation Electronics Department" class="h-20 w-auto">
            </div>
        </div>

        <!-- Center Content -->
        <div class="flex-1 flex flex-col items-center justify-center px-4">
            <!-- SCAN Logo with Frame -->
            <div class="scan-frame mb-12">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC" class="h-16 w-auto">
                    <h1 class="text-white font-bold tracking-wider" style="font-size: 5rem; line-height: 1;">SCAN</h1>
                </div>
            </div>

            <!-- Tagline -->
            <p class="text-white text-xl tracking-[0.3em] mb-16 font-light">SMART CAMPUS ASSISTANT & NAVIGATOR</p>

            <!-- Touch to Start -->
            <div class="pulse-slow cursor-pointer" id="touchToStart">
                <p class="text-white text-lg tracking-wider font-medium">TOUCH ANYWHERE TO START</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="w-full py-8 text-center">
            <h2 class="text-white text-xl font-semibold tracking-wide mb-1">WCC AERONAUTICAL AND TECHNOLOGICAL COLLEGE</h2>
            <p class="text-white text-sm tracking-wider opacity-90">AVIATION ELECTRONICS DEPARTMENT</p>
        </div>
    </div>

    <script>
        // Handle touch/click to navigate
        document.getElementById('touchToStart').addEventListener('click', function() {
            window.location.href = "{{ route('homepage') }}";
        });

        // Also allow clicking anywhere on the landing screen
        document.getElementById('landing-screen').addEventListener('click', function() {
            window.location.href = "{{ route('homepage') }}";
        });
    </script>
</body>
</html>
