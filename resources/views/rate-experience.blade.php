<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rate Experience - WCC SCAN</title>
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
        .emoji-rating {
            cursor: pointer;
            transition: transform 0.2s, opacity 0.2s;
            opacity: 0.5;
        }
        .emoji-rating:hover {
            transform: scale(1.1);
            opacity: 1;
        }
        .emoji-rating.selected {
            opacity: 1;
            transform: scale(1.2);
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

        <!-- Main Content -->
        <div class="flex-1 flex items-center justify-center px-8">
            <div class="max-w-4xl w-full">
                <!-- Rating Section -->
                <div class="border-2 border-white p-8 rounded-lg">
                    <h2 class="text-white text-3xl font-bold text-center mb-8 tracking-wider">PLEASE RATE YOUR EXPERIENCE</h2>
                    
                    <form method="POST" action="{{ route('rating.store') }}" id="ratingForm">
                        @csrf
                        
                        <!-- Emoji Rating -->
                        <div class="flex justify-center items-center space-x-6 mb-8">
                            <input type="hidden" name="rating" id="ratingInput" required>
                            
                            <!-- Angry Red -->
                            <div class="emoji-rating" data-rating="1" title="Very Unhappy">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#ef4444"/>
                                    <circle cx="35" cy="40" r="5" fill="#000"/>
                                    <circle cx="65" cy="40" r="5" fill="#000"/>
                                    <path d="M 30 70 Q 50 55 70 70" stroke="#000" stroke-width="3" fill="none"/>
                                </svg>
                            </div>

                            <!-- Sad Orange -->
                            <div class="emoji-rating" data-rating="2" title="Unhappy">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#f97316"/>
                                    <circle cx="35" cy="40" r="5" fill="#000"/>
                                    <circle cx="65" cy="40" r="5" fill="#000"/>
                                    <path d="M 30 65 Q 50 55 70 65" stroke="#000" stroke-width="3" fill="none"/>
                                </svg>
                            </div>

                            <!-- Neutral Yellow -->
                            <div class="emoji-rating" data-rating="3" title="Neutral">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#eab308"/>
                                    <circle cx="35" cy="40" r="5" fill="#000"/>
                                    <circle cx="65" cy="40" r="5" fill="#000"/>
                                    <line x1="30" y1="65" x2="70" y2="65" stroke="#000" stroke-width="3"/>
                                </svg>
                            </div>

                            <!-- Slightly Happy Light Green -->
                            <div class="emoji-rating" data-rating="4" title="Satisfied">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#84cc16"/>
                                    <circle cx="35" cy="40" r="5" fill="#000"/>
                                    <circle cx="65" cy="40" r="5" fill="#000"/>
                                    <path d="M 30 60 Q 50 70 70 60" stroke="#000" stroke-width="3" fill="none"/>
                                </svg>
                            </div>

                            <!-- Happy Green -->
                            <div class="emoji-rating" data-rating="5" title="Happy">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#22c55e"/>
                                    <circle cx="35" cy="40" r="5" fill="#000"/>
                                    <circle cx="65" cy="40" r="5" fill="#000"/>
                                    <path d="M 30 55 Q 50 75 70 55" stroke="#000" stroke-width="3" fill="none"/>
                                </svg>
                            </div>

                            <!-- Very Happy Teal -->
                            <div class="emoji-rating" data-rating="6" title="Very Happy">
                                <svg class="w-20 h-20" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="#14b8a6"/>
                                    <circle cx="35" cy="35" r="5" fill="#000"/>
                                    <circle cx="65" cy="35" r="5" fill="#000"/>
                                    <path d="M 25 55 Q 50 80 75 55" stroke="#000" stroke-width="3" fill="none"/>
                                </svg>
                            </div>
                        </div>

                        @error('rating')
                            <p class="text-red-300 text-center text-sm mb-4">{{ $message }}</p>
                        @enderror

                        <!-- Submit Button -->
                        <div class="flex justify-center">
                            <button 
                                type="submit" 
                                id="submitRating"
                                class="bg-white text-green-800 font-bold px-16 py-4 rounded-lg hover:bg-gray-100 transition text-xl disabled:opacity-50 disabled:cursor-not-allowed"
                                disabled
                            >
                                SUBMIT RATING
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center pb-8">
            <p class="text-white text-sm">Thank you for your feedback!</p>
        </div>
    </div>

    <script>
        // Handle emoji rating selection
        const submitBtn = document.getElementById('submitRating');
        
        document.querySelectorAll('.emoji-rating').forEach(emoji => {
            emoji.addEventListener('click', function() {
                // Remove selected class from all emojis
                document.querySelectorAll('.emoji-rating').forEach(e => e.classList.remove('selected'));
                
                // Add selected class to clicked emoji
                this.classList.add('selected');
                
                // Set the rating value
                document.getElementById('ratingInput').value = this.dataset.rating;
                
                // Enable submit button
                submitBtn.disabled = false;
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
