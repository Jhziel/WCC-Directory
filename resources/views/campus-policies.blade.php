<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Policies - WCC SCAN</title>
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
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="antialiased ">
    <div class="gradient-bg  w-full flex flex-col  overflow-hidden fade-in">
        <div class="fixed inset-0 flex items-center justify-center ">
            <img src="{{ asset('img/ChatGPTcopy.png') }}" alt="WCC" class="h-screen w-auto opacity-5">
        </div>

        <!-- Header -->
        <div class="flex items-center justify-end py-6 px-4">
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
        <div class="px-8 py-6">
            <h1 class="text-white text-5xl font-bold tracking-wider">POLICIES</h1>
        </div>

        <!-- Content Area -->
        <div class="flex flex-col justify-center items-center px-8 py-12">
            <div class="text-center">
                <h2 class="text-white text-3xl font-light tracking-wider">MISSION</h2>
            </div>
            <p class="text-white text-center text-lg mt-5  tracking-wider max-w-5xl">
                WCC Aeronautical and Technological College commits to contribute in
                nation building and global progress by developing internationally qualified professionals and
                leaders in
                aeronautics through
                offering globally competitive and comprehensive aviation education, innovative learning design
                and unmatched experiential learning approach, stakeholder collaboration and a culture upholding
                Christian values. These we do by God's grace to honor and glorify Him.
            </p>
        </div>

        <div class="flex flex-col justify-center items-center px-8 mb-24">
            <div class="text-center">
                <h2 class="text-white text-3xl font-light tracking-wider">VISION</h2>
            </div>
            <p class="text-white text-center text-lg mt-5  tracking-wider max-w-5xl">
                We are the one of Asia's top aviation-focused universities recognized as a leader in producing
                highly-competent and value-laden graduates who contribute to nation building and global
                progress.​
            </p>
        </div>

        <div class="flex flex-col justify-center items-center px-8 mb-24">
            <div class="text-center">
                <h2 class="text-white text-8xl font-light tracking-wider">AVIONICS</h2>
                <h2 class="text-white text-5xl font-light tracking-wider">PROPER UNIFORM GUIDE</h2>
            </div>

        </div>

        <div class="flex  flex-col justify-center z-10">
            <div class="text-center">
                <h2 class="text-white text-5xl font-900 tracking-wider mb-4">TYPE A</h2>
                <h2 class="text-white text-5xl font-900 tracking-wider">UNIFORM GUIDE</h2>
            </div>
            <img src="{{ asset('/img/Type-A.svg') }}" alt="WCC" class="h-[600px] w-auto mt-12">

        </div>

        <div class="flex  flex-col justify-center z-10 mt-24">
            <div class="text-center">
                <h2 class="text-white text-5xl font-900 tracking-wider mb-4">TYPE B</h2>
                <h2 class="text-white text-5xl font-900 tracking-wider">UNIFORM GUIDE</h2>
            </div>
            <img src="{{ asset('/img/Type-B.svg') }}" alt="WCC" class="h-[600px] w-auto mt-12">

        </div>

        <div class="flex  flex-col justify-center z-10 mt-24 mb-40">
            <div class="text-center">
                <h2 class="text-white text-5xl font-900 tracking-wider mb-4">TYPE C</h2>
                <h2 class="text-white text-5xl font-900 tracking-wider">UNIFORM GUIDE</h2>
            </div>
            <img src="{{ asset('/img/Type-C.svg') }}" alt="WCC" class="h-[600px] w-auto mt-12">

        </div>


        <!-- Back to Homepage -->
        <div class="fixed bottom-0 left-0 w-full text-center pb-2 z-20 ">
            <a href="{{ route('homepage') }}"
                class="text-white text-sm font-semibold tracking-wider hover:underline">BACK TO HOMEPAGE</a>
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
