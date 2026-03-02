<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit Ticket - WCC SCAN</title>
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
        <div class="px-8 py-3">
            <h1 class="text-white text-4xl font-bold tracking-wider">SUBMIT TICKET</h1>
        </div>

        <!-- Form Area -->
        <div class="flex-1 px-8 py-4 flex items-center justify-center">
            <div class="max-w-3xl w-full">
                <form method="POST" action="{{ route('ticket.store') }}" class="space-y-4">
                    @csrf

                    <!-- Text Input Field -->
                    <div class="border-2 border-white p-4 rounded-lg">
                        <textarea
                            name="ticket_message"
                            rows="4"
                            class="w-full px-4 py-3 rounded-lg text-gray-700 text-base focus:outline-none focus:ring-2 focus:ring-white"
                            placeholder="Enter your feedback or concern... (optional)"
                        ></textarea>
                        @error('ticket_message')
                            <p class="text-red-300 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Rate Your Experience -->
                    <div class="border-2 border-white p-6 rounded-lg">
                        <h3 class="text-white text-xl font-bold text-center tracking-wider mb-5">PLEASE RATE YOUR EXPERIENCE</h3>
                        <input type="hidden" name="rating" id="ratingInput">
                        <div class="flex justify-center items-center space-x-4">
                            <!-- Angry Red -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="1" title="Very Unhappy">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#ef4444"/><circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/><path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/></svg>
                            </div>
                            <!-- Sad Orange -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="2" title="Unhappy">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#f97316"/><circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/><path d="M 30 65 Q 50 55 70 65" stroke="#000" stroke-width="3" fill="none"/></svg>
                            </div>
                            <!-- Neutral Yellow -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="3" title="Neutral">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#eab308"/><circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/><line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/></svg>
                            </div>
                            <!-- Light Green -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="4" title="Satisfied">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#84cc16"/><circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/><path d="M 30 60 Q 50 70 70 60" stroke="#000" stroke-width="3" fill="none"/></svg>
                            </div>
                            <!-- Happy Green -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="5" title="Happy">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#22c55e"/><circle cx="35" cy="40" r="5" fill="#000"/><circle cx="65" cy="40" r="5" fill="#000"/><path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/></svg>
                            </div>
                            <!-- Very Happy Teal -->
                            <div class="emoji-rating cursor-pointer opacity-50 hover:opacity-100 hover:scale-110 transition-all duration-200" data-rating="6" title="Very Happy">
                                <svg class="w-14 h-14" viewBox="0 0 100 100"><circle cx="50" cy="50" r="45" fill="#14b8a6"/><circle cx="35" cy="35" r="5" fill="#000"/><circle cx="65" cy="35" r="5" fill="#000"/><path d="M 25 55 Q 50 80 75 55" stroke="#000" stroke-width="3" fill="none"/></svg>
                            </div>
                        </div>
                        @error('rating')
                            <p class="text-red-300 text-center text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button
                            type="submit"
                            class="bg-white text-green-800 font-bold px-12 py-3 rounded-lg hover:bg-gray-100 transition text-lg"
                        >
                            SUBMIT
                        </button>
                    </div>
                </form>

                <!-- Description Text -->
                <div class="mt-4 text-center">
                    <p class="text-white text-xs leading-relaxed">
                        WE ARE COMMITTED TO IMPROVING YOUR LEARNING ENVIRONMENT.<br>
                        THIS IS A CONFIDENTIAL CHANNEL FOR YOU TO PROVIDE FEEDBACK<br>
                        ON YOUR CLASSROOM SITUATION, INSTRUCTORS, AND MORE. YOUR<br>
                        HONEST INPUT HELPS US MAKE A DIFFERENCE.
                    </p>
                </div>
            </div>
        </div>

        <!-- Back to Homepage -->
        <div class="text-center pb-6">
            <a href="{{ route('homepage') }}" class="text-white text-sm font-semibold tracking-wider hover:underline">BACK TO HOMEPAGE</a>
        </div>
    </div>
    
    <script>
        // Emoji rating selection
        document.querySelectorAll('.emoji-rating').forEach(emoji => {
            emoji.addEventListener('click', function () {
                document.querySelectorAll('.emoji-rating').forEach(e => {
                    e.classList.remove('opacity-100', 'scale-125');
                    e.classList.add('opacity-50');
                });
                this.classList.remove('opacity-50');
                this.classList.add('opacity-100', 'scale-125');
                document.getElementById('ratingInput').value = this.dataset.rating;
            });
        });

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
