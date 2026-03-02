<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events - WCC SCAN</title>
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
        .event-card {
            border: 2px solid white;
            position: relative;
            transition: all 0.3s ease;
        }
        .event-card:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-4px);
        }
        .event-card::before,
        .event-card::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid white;
        }
        .event-card::before {
            top: -2px;
            right: -2px;
            border-left: none;
            border-bottom: none;
        }
        .event-card::after {
            bottom: -2px;
            left: -2px;
            border-right: none;
            border-top: none;
        }
    </style>
</head>
<body class="antialiased overflow-hidden">
    <div class="gradient-bg h-screen w-screen flex flex-col overflow-hidden fade-in">
        <!-- Header -->
        <div class="flex items-center justify-end p-6">
            <!-- WCC SCAN Logo -->
            <div class="flex items-center space-x-3">
                <div class="border-2 border-white p-2 rounded">
                    <img src="{{ asset('img/wcc-scans.png') }}" alt="WCC" class="h-12 w-auto">
                </div>
                <div class="text-white">
                    <h1 class="text-4xl font-bold tracking-wider">SCAN</h1>
                    <p class="text-[8px] tracking-[0.2em] mt-1">SMART CAMPUS ASSISTANT & NAVIGATOR</p>
                </div>
            </div>
        </div>

        <!-- Title -->
        <div class="px-12 py-4">
            <h1 class="text-white text-4xl font-bold tracking-wider">EVENTS</h1>
        </div>

        <!-- Content Area -->
        <div class="flex-1 px-12 py-4 overflow-y-auto">
            <div class="space-y-8">
                @forelse($events as $event)
                    <div class="event-card bg-transparent p-8 rounded-lg flex gap-8">
                        @if($event->image)
                            <div class="flex-shrink-0 w-2/5">
                                <img src="{{ asset('storage/' . $event->image) }}" 
                                     alt="{{ $event->title }}" 
                                     class="w-full h-80 object-cover rounded-lg shadow-lg">
                            </div>
                        @endif
                        <div class="text-white space-y-4 flex-1">
                            <h2 class="text-3xl font-bold">{{ $event->title }}</h2>
                            @if($event->description)
                                <p class="text-lg leading-relaxed">{{ $event->description }}</p>
                            @endif
                            <p class="text-base text-white/70">Posted: {{ $event->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-white text-center py-16">
                        <svg class="w-24 h-24 mx-auto mb-4 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-2xl font-semibold mb-2">No events at this time</p>
                        <p class="text-lg text-white/70">Check back later for upcoming events!</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Back to Homepage -->
        <div class="text-center pb-8">
            <a href="{{ route('homepage') }}" class="text-white text-sm font-semibold tracking-wider hover:underline">BACK TO HOMEPAGE</a>
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
