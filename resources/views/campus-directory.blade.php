<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Directory - WCC SCAN</title>
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
        <div class="px-8 py-4">
            <h1 class="text-white text-5xl font-bold tracking-wider mb-4">CAMPUS DIRECTORY</h1>
            <p class="text-white/80 text-sm">Search for rooms, offices, labs, and navigate with ease</p>
        </div>

        <!-- Search Bar -->
        <div class="px-8 py-4">
            <div x-data="campusSearch()" x-init="init()" class="max-w-3xl mx-auto">
                <!-- Search Input -->
                <div class="relative">
                    <input 
                        type="text" 
                        x-model="searchQuery"
                        @input.debounce.300ms="search()"
                        @focus="showResults = true"
                        placeholder="Search for rooms, labs, offices, classrooms..." 
                        class="w-full px-6 py-4 pr-12 text-lg border-2 border-white/50 bg-white/20 backdrop-blur-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-white focus:border-white text-white placeholder-white/60">
                    
                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Search Results -->
                <div 
                    x-show="showResults && searchQuery.length > 0" 
                    @click.away="showResults = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    class="mt-2 bg-white rounded-xl shadow-2xl max-h-96 overflow-y-auto"
                    style="display: none;">
                    
                    <!-- Loading State -->
                    <div x-show="loading" class="p-8 text-center">
                        <svg class="animate-spin h-8 w-8 mx-auto mb-2 text-green-600" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <p class="text-gray-600">Searching...</p>
                    </div>

                    <!-- No Results -->
                    <div x-show="!loading && results.length === 0" class="p-8 text-center text-gray-500">
                        <svg class="w-16 h-16 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="font-semibold">No rooms found</p>
                        <p class="text-sm mt-1">Try searching for "exit", "lab", "classroom", or "office"</p>
                    </div>

                    <!-- Results List -->
                    <div x-show="!loading && results.length > 0" class="divide-y divide-gray-200">
                        <template x-for="room in results" :key="room.id">
                            <a 
                                :href="`/floor/${room.floor}?room=${room.id}`"
                                class="block p-4 hover:bg-green-50 transition-colors cursor-pointer">
                                <div class="flex justify-between items-start">
                                    <div class="flex-1">
                                        <h4 class="font-bold text-gray-800 text-lg" x-text="room.name"></h4>
                                        <p class="text-sm text-gray-600 mt-1" x-text="room.description || room.type"></p>
                                    </div>
                                    <div class="ml-4 flex flex-col items-end">
                                        <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full font-semibold" x-text="'Floor ' + room.floor"></span>
                                        <span class="text-xs text-gray-500 mt-1" x-text="room.type"></span>
                                    </div>
                                </div>
                            </a>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Area - Floor Selection -->
        <div class="flex-1 px-8 py-6 flex items-center justify-center overflow-auto">
            <div class="grid grid-cols-8 gap-4 w-full max-w-7xl">
                @for ($floor = 1; $floor <= 8; $floor++)
                    <a href="{{ route('floor.show', $floor) }}" 
                       class="group relative bg-white/10 backdrop-blur-sm border-2 border-white/30 rounded-xl p-4 hover:bg-white/20 hover:border-white hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-2xl">
                        <!-- Floor Number -->
                        <div class="text-center">
                            <div class="text-4xl font-bold text-white mb-1">{{ $floor }}</div>
                            <div class="text-white text-xs font-semibold tracking-wider">
                                {{ $floor == 1 ? '1ST' : ($floor == 2 ? '2ND' : ($floor == 3 ? '3RD' : $floor . 'TH')) }} FLOOR
                            </div>
                        </div>
                        
                        <!-- Hover Icon -->
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                @endfor
            </div>
        </div>

        <!-- Back to Homepage -->
        <div class="text-center pb-8">
            <a href="{{ route('homepage') }}" class="text-white text-sm font-semibold tracking-wider hover:underline">BACK TO HOMEPAGE</a>
        </div>
    </div>
    
    <script>
        function campusSearch() {
            return {
                searchQuery: '',
                results: [],
                loading: false,
                showResults: false,
                
                init() {
                    // Initialize
                },
                
                async search() {
                    if (this.searchQuery.length < 1) {
                        this.results = [];
                        return;
                    }
                    
                    this.loading = true;
                    
                    try {
                        const params = new URLSearchParams({
                            q: this.searchQuery
                        });
                        
                        const response = await fetch(`/api/rooms/search?${params}`);
                        this.results = await response.json();
                    } catch (error) {
                        console.error('Search error:', error);
                        this.results = [];
                    } finally {
                        this.loading = false;
                    }
                }
            }
        }
        
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
