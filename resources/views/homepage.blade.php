<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WCC SCAN - Homepage</title>
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
        .info-box {
            border: 2px solid white;
            position: relative;
        }
        .info-box::before,
        .info-box::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid white;
        }
        .info-box::before {
            top: -2px;
            right: -2px;
            border-left: none;
            border-bottom: none;
        }
        .info-box::after {
            bottom: -2px;
            left: -2px;
            border-right: none;
            border-top: none;
        }
        .menu-button {
            border: 2px solid white;
            transition: all 0.3s ease;
        }
        .menu-button:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="antialiased overflow-hidden">
    <div class="gradient-bg h-screen w-screen flex flex-col overflow-hidden fade-in">
        <!-- Header -->
        <div class="flex items-center justify-between p-4">
            <!-- QR Code & Avionics Society -->
            <div class="flex items-center space-x-3">
                <div class="p-2 rounded">
                    <img src="{{ asset('img/wcc-scans-logo.png') }}" alt="QR Code" class="w-24 h-24">
                </div>
            </div>

            <!-- WCC SCAN Logo -->
            <div class="flex items-center space-x-3">
                <div class="border-2 border-white p-2 rounded">
                    <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC" class="h-16 w-auto">
                </div>
                <div class="text-white">
                    <h1 class="text-5xl font-bold tracking-wider">SCAN</h1>
                    <p class="text-[9px] tracking-[0.2em] mt-1">SMART CAMPUS ASSISTANT & NAVIGATOR</p>
                </div>
            </div>

            <!-- Airplane Logo -->
            <div>
                <img src="{{ asset('img/wcc-scans-airplain-logo.png') }}" alt="Aviation Logo" class="h-16 w-auto">
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 px-8 py-4 overflow-y-auto space-y-4">
            <!-- Important Reminders Box -->
            <div class="info-box bg-transparent p-4 rounded">
                <h2 class="text-white text-xl font-bold tracking-wider mb-3">IMPORTANT REMINDERS</h2>
                <div class="space-y-3">
                    @forelse($importantReminders as $reminder)
                        <div class="border-t border-white/30 pt-2 first:border-t-0 first:pt-0">
                            <div class="text-white space-y-1">
                                <p class="font-semibold">{{ $reminder->title }}</p>
                                @if($reminder->description)
                                    <p class="text-sm">{{ $reminder->description }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="text-white text-center py-4">
                            <p class="text-sm">No important reminders at this time</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Announcements Box -->
            <div class="info-box bg-transparent p-4 rounded">
                <h2 class="text-white text-xl font-bold tracking-wider mb-3">ANNOUNCEMENTS</h2>
                <div class="space-y-3">
                    @forelse($announcements as $announcement)
                        <div class="border-t border-white/30 pt-2 first:border-t-0 first:pt-0">
                            <div class="text-white space-y-1">
                                <p class="font-semibold">{{ $announcement->title }}</p>
                                @if($announcement->description)
                                    <p class="text-sm">{{ $announcement->description }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="text-white text-center py-4">
                            <p class="text-sm">No announcements at this time</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Menu Buttons -->
        <div class="px-8 py-4">
            <div class="grid grid-cols-4 gap-4">
                <!-- Campus Directory Button -->
                <a href="{{ route('campus.directory') }}" class="menu-button bg-transparent p-6 rounded flex flex-col items-center justify-center hover:shadow-lg min-h-[140px]">
                    <div class="mb-3">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-bold tracking-wider text-center leading-tight">CAMPUS<br>DIRECTORY</p>
                </a>

                <!-- Campus Policies Button -->
                <a href="{{ route('campus.policies') }}" class="menu-button bg-transparent p-6 rounded flex flex-col items-center justify-center hover:shadow-lg min-h-[140px]">
                    <div class="mb-3">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-bold tracking-wider text-center leading-tight">CAMPUS<br>POLICIES</p>
                </a>

                <!-- Submit Tickets Button -->
                <a href="{{ route('submit.ticket') }}" class="menu-button bg-transparent p-6 rounded flex flex-col items-center justify-center hover:shadow-lg min-h-[140px]">
                    <div class="mb-3">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-bold tracking-wider text-center leading-tight">SUBMIT<br>TICKETS</p>
                </a>

                <!-- Events Button -->
                <a href="{{ route('events') }}" class="menu-button bg-transparent p-6 rounded flex flex-col items-center justify-center hover:shadow-lg min-h-[140px]">
                    <div class="mb-3">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-bold tracking-wider text-center leading-tight">EVENTS</p>
                </a>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="flex items-center justify-between px-8 py-4">
            <a href="{{ route('welcome') }}" class="text-white text-sm font-semibold tracking-wider hover:underline">BACK TO HOMEPAGE</a>
            <a href="{{ route('login') }}" class="bg-white text-green-800 font-bold px-8 py-3 rounded-lg hover:bg-gray-100 transition text-base">LOGIN</a>
        </div>
    </div>

    <script>
        // Auto-redirect to homepage after 12 seconds of inactivity
        let inactivityTimer;
        
        function resetTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(() => {
                window.location.href = '{{ route('welcome') }}';
            }, 12000); // 12 seconds
        }
        
        // Reset timer on any user activity
        ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(event => {
            document.addEventListener(event, resetTimer, true);
        });
        
        // Start the timer on page load
        resetTimer();
    </script>
</body>
</html>
