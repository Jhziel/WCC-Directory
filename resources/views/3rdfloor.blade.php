<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd Floor - WCC SCAN Campus Directory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .floor-container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 1rem 1rem 1rem 7rem;
            box-sizing: border-box;
        }

        .svg-wrapper {
            flex: 1;
            overflow: hidden;
            display: flex;
            align-items: stretch;
            width: 100%;
        }

        .panzoom-container {
            flex: 1;
            overflow: hidden;
            display: flex;
            align-items: stretch;
        }

        .svg-wrapper svg {
            width: 100%;
            height: 100%;
            display: block;
        }
    </style>
</head>

<body>
    @php
        $room = request('room');
        $paths = config('RoomPaths.3rdFloor');
        $data = $paths[$room] ?? null;
    @endphp
    <!-- Floor Navigator Component -->
    <x-floor-navigator :currentFloor="3" />

    <!-- Main Content -->
    <div class="floor-container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-black mb-1">3rd Floor</h1>
            <p class="text-sm text-black/70">WCC SCAN Campus Directory</p>
        </div>

        <!-- SVG Container -->
        <div class="svg-wrapper">
            <div class="panzoom-container">

                <svg width="1894" height="852" fill="none" version="1.1" viewBox="0 0 1894 852"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="1894" height="852" fill="#fff" />
                    <rect id="COMFORT-ROOM-NW-BG" x="367" y="244" width="88" height="108" fill="{{ $room == 51 ? '#44aa00' : '#9EEB9E' }}"
fill-opacity="{{ $room == 51 ? 1 : 0.5 }}"

  />
                    <path id="Room-305-BG" fill="{{ $room == 67 ? '#44aa00' : '#D89B6C' }}"
fill-opacity="{{ $room == 67 ? 1 : 0.5 }}"


                        d="m1087 396h318v138l-12.5 5-7 13h-162l-2-18-13 5-11 13-10-13-15-6-1 19h-84.5v-156z"
                   />
                    <path id="COMFORT-ROOM-NW-TEXT"
                        d="m395.84 297.25h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.228 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm32.943 6.746v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014z"
                        fill="{{$room==51? 'white':'#000'}}" />
                    <g fill-opacity=".5">
                        <path id="Room-302-304-BG"
                       fill="{{ $room == 75 ? '#44aa00' : '#bcc4e4' }}"
fill-opacity="{{ $room == 75 ? 1 : 0.5 }}"


                            d="m1261.5 658.5 6-14.5h136.5l1.5 21 15.5-6.5 5.5-14.5h138.5v156h-318v-135z"
                            />
                        <path id="Room-312-BG"
                        fill="{{ $room == 71 ? '#44aa00' : '#bcc4e4' }}"
fill-opacity="{{ $room == 71 ? 1 : 0.5 }}"


                            d="m607 664.5 14.5-6 6-14.5 28.5 14.5 31.5 6 30.5-6 27.5-14.5 1.5 9.5 6 6.5 12 4.5v135.5h-158z"
                            />
                        <path id="Room-311-BG"
                            d="m765.13 397h-160.13l2.5 136.5 12 4.5 7 7.5v8.5l26.5-14 30-8 19 3.5 16 4.5 14.5 6.5 12 6.5 7.5-15 13.643-4.2344-0.50781-136.77z"
                            fill="{{ $room == 63 ? '#44aa00' : '#d3d3ff' }}"
fill-opacity="{{ $room == 63 ? 1 : 0.5 }}"

 />
                    </g>
                    <g fill="#bcc4e4" fill-opacity=".5">
                        <path id="Room-309-BG"
                        fill="{{ $room == 64 ? '#44aa00' : '#bcc4e4' }}"
fill-opacity="{{ $room == 64 ? 1 : 0.5 }}"


                            d="m765.13 397 0.50781 136.77 0.85742-0.26562 17 6.5 3.5 13h118.5l7-15 13-4.5-1.5-136.5h-158.87z" />
                        <path id="Room-313-BG" 
                        fill="{{ $room == 62 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 62 ? 1 : 0.5 }}"
                        d="m444 646h140.5l7 14.5 13.5 4.5v135h-161z" />
                        <path id="Room-314-BG" 
                        fill="{{ $room == 61 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 61 ? 1 : 0.5 }}"


                        d="m289 717 36 7.5 44.5-4 39.5-16 33-28v123.5h-153z" />
                        <path id="FACULTY-ROOM-BG"
                        fill="{{ $room == 50 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 50 ? 1 : 0.5 }}" 
                        d="m285 3.5 218 1.5v189h-137v159h-79z" />
                    </g>
                    <g fill="#a6b6c9">
                        <g fill-opacity=".5">
                            <path id="Room-315-BG"
                            fill="{{ $room == 60 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 60 ? 1 : 0.5 }}"
                                d="m192.68 765.9 2.375 78.096h91.947v-97h-75l-0.5 3.5-2.5 7-5.5 5.5-10.5 3-0.32227-0.0957z" />

                                <path id="Room-316-BG"
                                 fill="{{ $room == 59 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 59 ? 1 : 0.5 }}"
                                d="m100.17 747-0.68945 97h95.574l-2.375-78.096-13.178-3.9043-5-6.5-1.5-8.5h-72.832z" />

                                <path id="Room-317-BG"
                                fill="{{ $room == 58 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 58 ? 1 : 0.5 }}"
                                d="m100.49 701.83-93.49 0.58594v100.08l37 41.5h55.479l0.68945-97h-0.66797v-25l-9.5-2-7-5.5-3.5-12.5h20.99v-0.16797z" />
                       


                            </g>
                        <path d="m100.49 701.83v0.16797h58.51l-0.11523-0.53516-58.395 0.36719z" />
                        <g fill-opacity=".5">
                            <path id="Room-318-BG" fill="{{ $room == 57 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 57 ? 1 : 0.5 }}"
                                d="m7 592.09v110.33l151.88-0.95313-1.3848-6.4648v-7.5l3.5-5.5 10-6-6.5-20.5-3.5-20.5-1.5-18.5 1.2656-23.637-153.77-0.77344z" />
                            


                                <path id="Room-319-BG"
                                fill="{{ $room == 55 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 55 ? 1 : 0.5 }}"


                                d="m63.523 503h-1.0234l-7-1.5-7.5-3.5-3.5-6.5-1-7.5h-36.5v108.09l55.426 0.2793 1.0977-89.369z" />
                            
                                <path id="Room-322-BG" fill="{{ $room == 56 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 56 ? 1 : 0.5 }}"


                                d="m63.523 503-1.0977 89.369 98.34 0.49414 0.23438-4.3633 4-19 5.5-17.5 11.5-25 16-24h-18.5l0.5 19.5-9.5-2.25-5.5-2.75-4.5-6-3-8.5h-93.977z" />
                            <path id="Room-307-BG" fill="{{ $room == 66 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 66 ? 1 : 0.5 }}"
                            d="m927 396h158v137.5l-13.5 4.5-7 14-117.5 1.5-5.5-14-14.5-6z" 
                            


                            />
                            <path id="Room-303-BG" fill="{{ $room == 68 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 68 ? 1 : 0.5 }}"


                             d="m1407 396h158v137.5l-13 6-6.5 13-118.5 1h-20z" />
                            <path id="Room-320-BG" fill="{{ $room == 53 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 53 ? 1 : 0.5 }}"


                                d="m61.783 450.5 0.26953-69.285-54.053 0.78321v89.002h45l-7-6.5-4-14h19.783z" />
                            <path id="Room-321-BG" fill="{{ $room == 52 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 52 ? 1 : 0.5 }}"


                                d="m8 355v26.998l54.053-0.78321-0.26953 69.285h0.2168l3.5-9.5 6-7.5 12.5-3.5v18.5h19.5l9 0.5 9.5-0.5v-93.5h-114z" />
                        </g>
                    </g>
                    <g fill="#bcc4e4" fill-opacity=".5">
                        <path id="Room-310-BG" fill="{{ $room == 72 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 72 ? 1 : 0.5 }}"


                            d="m925.34 664.54-15.336-6.041-4.5-14.5h-117.5l-7.5 14.5-13.5 7v134.5h157.94l0.39649-135.46z" />
                        <path id="Room-308-BG"
                        fill="{{ $room == 73 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 73 ? 1 : 0.5 }}"


                            d="m1085.6 664.83-14.111-6.3262-6.5-14.5h-116.5l-8 14.5-14 6.5-1.1641-0.45898-0.39649 135.46h160.83l-0.1563-135.17z" />
                        <path id="Room-306-BG"
                        fill="{{ $room == 74 ? '#44aa00' : '#a6b6c9' }}"
fill-opacity="{{ $room == 74 ? 1 : 0.5 }}"


                            d="m1085.6 664.83 0.1563 135.17h159.23v-135l-14-6.5-6-14.5h-117l-6.5 14.5-15.5 6.5-0.3887-0.17383z" />
                    </g>
                    <path id="COMFORT-ROOM" d="m1567 396h239v118h-60.5v-21h-121v21h-57.5v-118z"  fill="{{ $room == 69 ? '#44aa00' : '#9EEB9E' }}"
fill-opacity="{{ $room == 69 ? 1 : 0.5 }}"


                        fill-opacity=".5" />
                    <g filter="url(#filter0_d_367_2)">
                        <line x1="287" x2="1884" y1="802" y2="802" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter1_d_367_2)">
                        <line x1="6" x2="6" y1="804" y2="350" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter2_d_367_2)">
                        <line x1="1883" x2="1884" y1="803.99" y2="653.99" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter3_d_367_2)">
                        <line x1="455" x2="1890" y1="352" y2="352" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter4_d_367_2)">
                        <line x1="1888" x2="1887" y1="354.01" y2="598.01" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter5_d_367_2)">
                        <rect x="1841" y="761" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1842" y="762" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter6_d_367_2)">
                        <rect x="1800" y="721" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1801" y="722" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter7_d_367_2)">
                        <rect x="1841" y="751" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1842" y="752" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter8_d_367_2)">
                        <rect x="535" y="514" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="515" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter9_d_367_2)">
                        <rect x="455" y="424" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="425" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter10_d_367_2)">
                        <rect x="535" y="454" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="455" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter11_d_367_2)">
                        <rect x="535" y="444" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="445" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter12_d_367_2)">
                        <rect x="535" y="434" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="435" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter13_d_367_2)">
                        <rect transform="rotate(89.68 535 424)" x="535" y="424" width="100" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(89.68 534 425.01)" x="534" y="425.01" width="98" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter14_d_367_2)">
                        <rect x="535" y="424" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="425" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter15_d_367_2)">
                        <rect x="455" y="504" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="505" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter16_d_367_2)">
                        <rect x="455" y="494" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="495" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter17_d_367_2)">
                        <rect x="455" y="484" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="485" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter18_d_367_2)">
                        <rect x="455" y="474" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="475" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter19_d_367_2)">
                        <rect x="455" y="464" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="465" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter20_d_367_2)">
                        <rect x="455" y="454" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="455" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter21_d_367_2)">
                        <rect x="455" y="444" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="445" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter22_d_367_2)">
                        <rect x="455" y="434" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="435" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter23_d_367_2)">
                        <rect x="535" y="504" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="505" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter24_d_367_2)">
                        <rect x="535" y="494" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="495" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter25_d_367_2)">
                        <rect x="535" y="484" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="485" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter26_d_367_2)">
                        <rect x="535" y="474" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="475" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter27_d_367_2)">
                        <rect x="535" y="464" width="70" height="10" fill="#D9D9D9" />
                        <rect x="536" y="465" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter28_d_367_2)">
                        <rect x="455" y="514" width="70" height="10" fill="#D9D9D9" />
                        <rect x="456" y="515" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter29_d_367_2)">
                        <rect x="1841" y="741" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1842" y="742" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter30_d_367_2)">
                        <rect x="1841" y="731" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1842" y="732" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter31_d_367_2)">
                        <rect x="1841" y="721" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1842" y="722" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter32_d_367_2)">
                        <rect x="1832" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1833" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter33_d_367_2)">
                        <rect x="1778" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1779" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter34_d_367_2)">
                        <rect x="1769" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1770" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter35_d_367_2)">
                        <rect x="1760" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1761" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter36_d_367_2)">
                        <rect x="1823" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1824" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter37_d_367_2)">
                        <rect x="1814" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1815" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter38_d_367_2)">
                        <rect x="1805" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1806" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter39_d_367_2)">
                        <rect x="1796" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1797" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter40_d_367_2)">
                        <rect x="1787" y="761" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1788" y="762" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter41_d_367_2)">
                        <rect x="1782" y="654" width="100" height="40" fill="#D9D9D9" />
                        <rect x="1783" y="655" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter42_d_367_2)">
                        <rect x="480" y="369" width="100" height="40" fill="#D9D9D9" />
                        <rect x="481" y="370" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter43_d_367_2)">
                        <path
                            d="m1821.2 678v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter44_d_367_2)">
                        <path
                            d="m516.21 393v-10.182h6.145v1.094h-4.912v3.44h4.594v1.094h-4.594v3.46h4.992v1.094h-6.225zm8.964-10.182 2.625 4.236h0.08l2.625-4.236h1.451l-3.201 5.091 3.201 5.091h-1.451l-2.625-4.156h-0.08l-2.625 4.156h-1.452l3.282-5.091-3.282-5.091h1.452zm9.619 0v10.182h-1.233v-10.182h1.233zm1.915 1.094v-1.094h7.637v1.094h-3.202v9.088h-1.233v-9.088h-3.202z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter45_d_367_2)">
                        <line x1="1885" x2="1805" y1="596" y2="596" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter46_d_367_2)">
                        <line x1="1807" x2="1807" y1="594" y2="654" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter47_d_367_2)">
                        <line x1="1806" x2="1806" y1="394" y2="564" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter48_d_367_2)">
                        <line x1="1822" x2="580" y1="395" y2="395" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter49_d_367_2)">
                        <line x1="1686" x2="1687" y1="393.99" y2="493.99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter50_d_367_2)">
                        <line x1="1567.5" x2="1567.5" y1="394" y2="554" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter51_d_367_2)">
                        <line x1="1565" x2="1625" y1="515" y2="515" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter52_d_367_2)">
                        <line x1="1805" x2="1745" y1="515" y2="515" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter53_d_367_2)">
                        <line x1="1620" x2="1750" y1="493" y2="493" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter54_d_367_2)">
                        <path d="m1406 394v161" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter55_d_367_2)">
                        <line x1="607.5" x2="607.5" y1="394" y2="554" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter56_d_367_2)">
                        <line x1="1086" x2="1086" y1="394" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter57_d_367_2)">
                        <line x1="926" x2="926" y1="394" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter58_d_367_2)">
                        <line x1="766" x2="766" y1="394" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter59_d_367_2)">
                        <path d="m1567 642v162" stroke="#000" stroke-width="5" />
                    </g>
                    <g filter="url(#filter60_d_367_2)">
                        <line x1="766" x2="766" y1="644" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter61_d_367_2)">
                        <line x1="607.5" x2="607.5" y1="644" y2="804" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter62_d_367_2)">
                        <line x1="1246" x2="1246" y1="644" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter63_d_367_2)">
                        <line x1="926" x2="926" y1="644" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter64_d_367_2)">
                        <line x1="1086" x2="1086" y1="644" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter65_d_367_2)">
                        <line x1="1406" x2="1546" y1="554" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter66_d_367_2)">
                        <path d="m626 643.5c49.485 27.191 75.621 27.919 119 0" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter67_d_367_2)">
                        <path d="m626 553.67c49.485-27.191 75.621-27.919 119 0" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter68_d_367_2)">
                        <line x1="786" x2="906" y1="643" y2="643" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter69_d_367_2)">
                        <line x1="946" x2="1066" y1="643" y2="643" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter70_d_367_2)">
                        <line x1="1106" x2="1226" y1="643" y2="643" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter71_d_367_2)">
                        <line x1="1266" x2="1405" y1="643" y2="643" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter72_d_367_2)">
                        <line x1="1426" x2="1566" y1="643" y2="643" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter73_d_367_2)">
                        <line x1="786" x2="906" y1="553" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter74_d_367_2)">
                        <line x1="946" x2="1066" y1="553" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter75_d_367_2)">
                        <line x1="1086" x2="1172" y1="553" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter76_d_367_2)">
                        <line x1="1221" x2="1386" y1="553" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter77_d_367_2)">
                        <path d="m605 553h-50" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter78_d_367_2)">
                        <line x1="456" x2="456" y1="394" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter79_d_367_2)">
                        <line x1="455" x2="505" y1="553" y2="553" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter80_d_367_2)">
                        <line x1="586" x2="442" y1="645" y2="645" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter81_d_367_2)">
                        <line x1="285" x2="283" y1="354.01" y2="4.0114" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter82_d_367_2)">
                        <line x1="504" x2="503" y1="244.01" y2="4.0083" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter83_d_367_2)">
                        <line x1="281" x2="505" y1="2" y2="2" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter84_d_367_2)">
                        <line x1="367" x2="505" y1="243" y2="243" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter85_d_367_2)">
                        <line x1="457" x2="457" y1="244" y2="354" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter86_d_367_2)">
                        <line x1="8" x2="285" y1="352" y2="352" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter87_d_367_2)">
                        <path d="m364 449v44" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter88_d_367_2)">
                        <line x1="506" x2="506" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter89_d_367_2)">
                        <line x1="556" x2="556" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter90_d_367_2)">
                        <path d="m506.5 535c14.763 5.579 20.24 7.866 24 18" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter91_d_367_2)">
                        <path d="m555.5 535c-14.763 5.579-19.24 7.366-23 17.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter92_d_367_2)">
                        <line x1="506" x2="506" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter93_d_367_2)">
                        <line x1="556" x2="556" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter94_d_367_2)">
                        <line x1="506" x2="506" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter95_d_367_2)">
                        <line x1="556" x2="556" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter96_d_367_2)">
                        <line x1="506" x2="506" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter97_d_367_2)">
                        <line x1="556" x2="556" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter98_d_367_2)">
                        <line x1="506" x2="506" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter99_d_367_2)">
                        <line x1="556" x2="556" y1="534" y2="554" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter100_d_367_2)">
                        <line x1="1172" x2="1172" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter101_d_367_2)">
                        <line x1="1222" x2="1222" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter102_d_367_2)">
                        <path d="m1172.3 533.04c14.76 5.58 19.92 9.329 23.68 19.463" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter103_d_367_2)">
                        <path d="m1221.5 533c-14.76 5.579-19.24 9.366-23 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter104_d_367_2)">
                        <line x1="1172" x2="1172" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter105_d_367_2)">
                        <line x1="1222" x2="1222" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter106_d_367_2)">
                        <line x1="1172" x2="1172" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter107_d_367_2)">
                        <line x1="1222" x2="1222" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter108_d_367_2)">
                        <line x1="1172" x2="1172" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter109_d_367_2)">
                        <line x1="1222" x2="1222" y1="533.42" y2="553.42" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter110_d_367_2)">
                        <path d="m1172 532v22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter111_d_367_2)">
                        <path d="m1222 532v21.421" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter112_d_367_2)">
                        <path d="m606 534.46c12.565 1.831 18.443 4.995 20.5 20.042" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter113_d_367_2)">
                        <path d="m606 664c12.565-1.831 18.943-5.453 21-20.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter114_d_367_2)">
                        <path d="m765.5 664c-12.565-1.831-18.984-4.953-21.042-20" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter115_d_367_2)">
                        <path d="m605.46 664c-12.565-1.831-17.942-4.953-20-20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter116_d_367_2)">
                        <path d="m605.46 764c-12.565-1.831-17.942-4.953-20-20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter117_d_367_2)">
                        <path d="m286 469h20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter118_d_367_2)">
                        <path d="m305.5 469.5c-1.831-12.565-4.953-19.443-20-21.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter119_d_367_2)">
                        <path d="m286 469h20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter120_d_367_2)">
                        <path d="m1405 644v20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter121_d_367_2)">
                        <path d="m1405.5 664c12.57-1.831 18.4-6.953 20.46-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter122_d_367_2)">
                        <path d="m1405 642v23" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter123_d_367_2)">
                        <path d="m258.94 511.62-13.27-15.625" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter124_d_367_2)">
                        <path d="m246.5 496.5c-8.392 9.529-11.388 15.622-3.216 28.423" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter125_d_367_2)">
                        <path d="m258.94 511.62-13.27-15.625" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter126_d_367_2)">
                        <path d="M243.758 688.974L228 702.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter127_d_367_2)">
                        <path d="m229 702c-6.845-10.694-8.718-17.142 1.306-28.55" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter128_d_367_2)">
                        <path d="m172.46 746c1.831 12.565 4.954 17.942 20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter129_d_367_2)">
                        <path d="m212 746c-1.831 12.565-4.953 17.942-20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter130_d_367_2)">
                        <path d="m79.458 702c1.8306 12.565 4.9534 17.942 20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter131_d_367_2)">
                        <path d="m172 675.5c-12.449 6.421-18.93 10.305-13 26" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter132_d_367_2)">
                        <path d="m180 503v20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter133_d_367_2)">
                        <path d="m180 522.5c-12.565-1.831-19.943-5.453-22-20.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter134_d_367_2)">
                        <path d="m180 502v21.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter135_d_367_2)">
                        <path d="m62.458 451h-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter136_d_367_2)">
                        <path d="m43 451c1.8306 12.565 3.4534 18.943 18.5 21" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter137_d_367_2)">
                        <path d="m83 450.5v-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter138_d_367_2)">
                        <path d="m83.5 431c-12.615 1.78-18.504 4.392-20.5 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter139_d_367_2)">
                        <path d="m256.5 355h-21.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter140_d_367_2)">
                        <path d="m234.46 352c1.831 12.565 4.954 17.943 20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter141_d_367_2)">
                        <path d="m279 449v-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter142_d_367_2)">
                        <path d="m278.46 429.46c-12.565 1.831-17.901 5.995-19.958 21.042" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter143_d_367_2)">
                        <path d="m1245.5 664c-12.57-1.831-17.9-6.953-19.96-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter144_d_367_2)">
                        <path d="m1086.5 664c-12.57-1.831-18.4-6.953-20.46-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter145_d_367_2)">
                        <path d="m925.46 664c-12.565-1.831-18.401-6.453-20.458-21.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter146_d_367_2)">
                        <path d="m1246 664c12.56-1.831 18.44-6.953 20.5-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter147_d_367_2)">
                        <path d="m1086 664c12.56-1.831 17.94-6.953 20-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter148_d_367_2)">
                        <path d="m926 664c12.565-1.831 18.943-6.953 21-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter149_d_367_2)">
                        <path d="m766 664c12.565-1.831 18.943-6.453 21-21.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter150_d_367_2)">
                        <path d="m765.46 534.46c-12.565 1.831-17.942 4.954-20 20" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter151_d_367_2)">
                        <path d="m1566.5 534.46c-12.57 1.831-17.94 4.954-20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter152_d_367_2)">
                        <path d="m1406.5 534.46c-12.57 1.831-17.9 4.495-19.96 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter153_d_367_2)">
                        <path d="m1085.5 534.46c-12.57 1.831-17.9 4.495-19.96 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter154_d_367_2)">
                        <path d="m926.46 534.46c-12.565 1.831-18.4 4.495-20.458 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter155_d_367_2)">
                        <path d="m925 534.46c12.565 1.831 18.943 4.495 21 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter156_d_367_2)">
                        <path d="m765 534.46c12.565 1.831 19.943 3.995 22 19.042" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g id="Room-311-Text" filter="url(#filter157_d_367_2)">
                        <path
                            d="m636.41 417v-10.182h3.818c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.209 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.276 0.477-0.682 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.259-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.022-7.378h2.258v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.769v-10.182zm19.714 10.321c-0.715 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.165 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.924 0.169c0.365 0 0.688-0.063 0.97-0.189 0.282-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.103-0.199h-0.9v-1.422h0.9c0.354 0 0.664-0.062 0.929-0.184 0.269-0.123 0.479-0.295 0.632-0.517 0.152-0.226 0.227-0.486 0.223-0.781 4e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.551-0.503-0.236-0.119-0.512-0.179-0.831-0.179-0.311 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.162 0.205-0.249 0.45-0.259 0.735h-1.774c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.272-1.014 0.531-0.245 1.126-0.368 1.785-0.368 0.68 0 1.27 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019 0.276 0.428 0.413 0.9 0.413 1.417 3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.645 0.795 0.385 0.428 0.575 0.96 0.572 1.596 0 0.57-0.162 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.333 1.054-0.563 0.256-1.209 0.383-1.939 0.383zm9.607-10.321v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.726 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm10.707 4.35v1.482h-4.584v-1.482h4.584zm5.445 5.832v-10.182h3.898c0.735 0 1.347 0.116 1.834 0.348 0.491 0.229 0.857 0.542 1.099 0.94 0.245 0.398 0.368 0.848 0.368 1.352 0 0.414-0.08 0.769-0.239 1.064-0.159 0.292-0.373 0.529-0.641 0.711-0.269 0.182-0.569 0.313-0.9 0.393v0.099c0.361 0.02 0.707 0.131 1.039 0.333 0.335 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.318 0.806 0.318 1.323 0 0.527-0.127 1.001-0.382 1.422-0.256 0.417-0.64 0.747-1.154 0.989s-1.16 0.363-1.939 0.363h-4.121zm1.844-1.541h1.984c0.669 0 1.152-0.128 1.447-0.383 0.298-0.259 0.447-0.59 0.447-0.994 0-0.302-0.074-0.574-0.224-0.816-0.149-0.245-0.361-0.437-0.636-0.576-0.275-0.143-0.603-0.214-0.984-0.214h-2.034v2.983zm0-4.311h1.825c0.318 0 0.605-0.058 0.86-0.174 0.255-0.119 0.456-0.286 0.601-0.502 0.15-0.218 0.224-0.477 0.224-0.775 0-0.395-0.139-0.719-0.417-0.975-0.275-0.255-0.685-0.383-1.228-0.383h-1.865v2.809zm-95.802 22.852h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm16.996-2.754h-1.86c-0.053-0.305-0.15-0.575-0.293-0.811-0.142-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.471 0.417-0.428 0.275-0.763 0.68-1.005 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.246 0.53 0.58 0.931 1.005 1.203 0.427 0.268 0.916 0.403 1.466 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.228 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.66-1.795-0.405-0.782-0.607-1.72-0.607-2.814 0-1.097 0.204-2.035 0.612-2.814 0.407-0.782 0.962-1.38 1.665-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239 0.488 0.159 0.922 0.392 1.303 0.701 0.381 0.305 0.694 0.679 0.94 1.123 0.248 0.441 0.411 0.945 0.487 1.512zm10.404 0h-1.859c-0.053-0.305-0.151-0.575-0.294-0.811-0.142-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.725-0.373-0.269-0.086-0.559-0.129-0.871-0.129-0.553 0-1.044 0.139-1.471 0.417-0.428 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.427 0.268 0.916 0.403 1.467 0.403 0.304 0 0.589-0.04 0.855-0.12 0.268-0.083 0.508-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.541-0.586 0.15-0.232 0.252-0.497 0.309-0.796l1.859 0.01c-0.07 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.806 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.397-0.621-0.702-0.415-1.256-1.013-1.66-1.795-0.405-0.782-0.607-1.72-0.607-2.814 0-1.097 0.204-2.035 0.612-2.814 0.407-0.782 0.963-1.38 1.665-1.795 0.703-0.414 1.498-0.621 2.387-0.621 0.566 0 1.093 0.08 1.581 0.239 0.487 0.159 0.921 0.392 1.302 0.701 0.381 0.305 0.695 0.679 0.94 1.123 0.248 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.508-0.316 0.647-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.475-4.614h2.013zm3.846 4.614v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm11.954 0h-3.45v-10.182h3.519c1.011 0 1.88 0.204 2.606 0.612 0.729 0.404 1.289 0.986 1.68 1.745s0.587 1.667 0.587 2.724c0 1.061-0.198 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.516c0.71 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.069-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.239-0.517-0.592-0.903-1.059-1.158-0.464-0.259-1.041-0.388-1.73-0.388h-1.571v6.99zm10.144-8.586v10.182h-1.844v-10.182h1.844zm1.55 1.546v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147zm9.767 8.636h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm7.08-4.644v-1.546h8.124v1.546h-3.147v8.636h-1.829v-8.636h-3.148zm11.535-1.546v10.182h-1.845v-10.182h1.845zm11.095 5.091c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm11.965-5.091v10.182h-1.641l-4.797-6.935h-0.085v6.935h-1.844v-10.182h1.65l4.793 6.941h0.089v-6.941h1.835zm-74.628 27.182v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.705 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==63? 'white':'#000'}}" />
                    </g>
                    <g id="Room-309-Text" filter="url(#filter158_d_367_2)">
                        <path
                            d="m785.03 432v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.813 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.353-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.165 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.925 0.169c0.364 0 0.687-0.063 0.969-0.189 0.282-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.397-0.419-0.706-0.551-0.304-0.133-0.672-0.199-1.103-0.199h-0.9v-1.422h0.9c0.354 0 0.664-0.062 0.929-0.184 0.269-0.123 0.479-0.295 0.632-0.517 0.152-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.062-0.538-0.194-0.75-0.13-0.216-0.314-0.383-0.552-0.503-0.236-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.866 0.169-0.265 0.113-0.478 0.274-0.641 0.483-0.162 0.205-0.248 0.45-0.258 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.784-0.368 0.68 0 1.27 0.128 1.77 0.383 0.504 0.252 0.894 0.591 1.169 1.019s0.412 0.9 0.412 1.417c4e-3 0.573-0.165 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.645 0.795 0.385 0.428 0.575 0.96 0.572 1.596 0 0.57-0.162 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.332 1.054-0.564 0.256-1.21 0.383-1.939 0.383zm9.228 0.055c-0.818 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.16-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616 0.816 0 1.517 0.205 2.103 0.616 0.587 0.411 1.036 1.008 1.347 1.79 0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.637 0 1.139-0.313 1.507-0.94 0.371-0.63 0.556-1.556 0.556-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.308-0.282-0.673-0.423-1.094-0.423-0.633 0-1.133 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.407 0.971 0.715 1.253 0.309 0.279 0.675 0.418 1.099 0.418zm9.109-8.959c0.488 3e-3 0.962 0.089 1.422 0.259 0.464 0.165 0.882 0.437 1.253 0.815 0.371 0.374 0.666 0.876 0.885 1.506s0.328 1.409 0.328 2.337c3e-3 0.875-0.089 1.657-0.278 2.346-0.186 0.687-0.453 1.267-0.801 1.741-0.348 0.473-0.767 0.835-1.257 1.083-0.491 0.249-1.043 0.373-1.656 0.373-0.643 0-1.213-0.126-1.71-0.378-0.494-0.252-0.893-0.596-1.198-1.034-0.305-0.437-0.493-0.938-0.562-1.501h1.814c0.093 0.404 0.282 0.726 0.567 0.964 0.289 0.236 0.651 0.353 1.089 0.353 0.706 0 1.249-0.306 1.631-0.919 0.381-0.614 0.571-1.465 0.571-2.556h-0.069c-0.163 0.292-0.373 0.544-0.632 0.756-0.258 0.209-0.551 0.369-0.88 0.482-0.324 0.113-0.669 0.169-1.034 0.169-0.596 0-1.133-0.142-1.61-0.427-0.474-0.285-0.851-0.677-1.129-1.174-0.275-0.497-0.414-1.065-0.418-1.705 0-0.663 0.153-1.258 0.458-1.785 0.308-0.53 0.737-0.948 1.287-1.253 0.551-0.308 1.194-0.459 1.929-0.452zm5e-3 1.491c-0.358 0-0.681 0.088-0.969 0.264-0.285 0.172-0.511 0.408-0.676 0.706-0.163 0.295-0.244 0.625-0.244 0.989 3e-3 0.362 0.085 0.69 0.244 0.985 0.162 0.295 0.383 0.528 0.661 0.701 0.282 0.172 0.603 0.258 0.964 0.258 0.269 0 0.519-0.051 0.751-0.154s0.434-0.245 0.607-0.428c0.175-0.185 0.311-0.396 0.407-0.631 0.1-0.235 0.148-0.484 0.145-0.746 0-0.348-0.083-0.669-0.249-0.964-0.162-0.295-0.386-0.532-0.671-0.711-0.282-0.179-0.605-0.269-0.97-0.269zm-59.505 18.447c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.785-0.363-1.332-0.363-0.385 0-0.715 0.058-0.99 0.174s-0.485 0.273-0.631 0.472-0.22 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.413 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.677 0.345 0.959 0.577 0.285 0.232 0.511 0.512 0.676 0.84 0.166 0.328 0.249 0.713 0.249 1.153 0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.745 0.804-1.322 1.059-0.573 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.363-1.074-0.324-0.47-0.5-1.044-0.527-1.72h1.815c0.027 0.355 0.136 0.65 0.328 0.885s0.443 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.367-0.321-0.642-0.437-0.271-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.338-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.722 0 1.355 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.483 1.521h-1.775zm3.111-1.253v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm16.108-1.546h1.844v6.652c0 0.729-0.172 1.371-0.517 1.924-0.341 0.554-0.822 0.986-1.442 1.298-0.619 0.308-1.344 0.462-2.172 0.462-0.832 0-1.558-0.154-2.178-0.462-0.62-0.312-1.1-0.744-1.442-1.298-0.341-0.553-0.512-1.195-0.512-1.924v-6.652h1.845v6.498c0 0.424 0.093 0.802 0.278 1.134 0.189 0.331 0.454 0.591 0.796 0.78 0.341 0.186 0.745 0.279 1.213 0.279 0.467 0 0.871-0.093 1.213-0.279 0.345-0.189 0.61-0.449 0.795-0.78 0.186-0.332 0.279-0.71 0.279-1.134v-6.498zm7.299 10.182h-3.45v-10.182h3.52c1.011 0 1.879 0.204 2.605 0.612 0.729 0.404 1.289 0.986 1.68 1.745s0.587 1.667 0.587 2.724c0 1.061-0.197 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.517c0.709 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.068-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.238-0.517-0.591-0.903-1.058-1.158-0.464-0.259-1.041-0.388-1.731-0.388h-1.571v6.99zm8.3 1.596v-10.182h6.623v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.662zm16.872-10.182v10.182h-1.641l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.793 6.941h0.089v-6.941h1.835zm1.562 1.546v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm-49.419 25.636h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm8.758 3.992v-10.182h6.523v1.546h-4.678v2.765h4.231v1.546h-4.231v4.325h-1.845zm8.203 0v-10.182h6.523v1.546h-4.678v2.765h4.231v1.546h-4.231v4.325h-1.845zm8.24 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm10.603-6.19v10.182h-1.844v-10.182h1.844zm1.998 10.182v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.831-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm9.379-2.769c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.786-0.363-1.332-0.363-0.385 0-0.715 0.058-0.99 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.745 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.035-0.603-1.363-1.074-0.324-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.443 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.367-0.321-0.642-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.9 0.378 0.546 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.482 1.521h-1.774zm-40.915 24.383h-1.968l3.584-10.182h2.277l3.59 10.182h-1.969l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm17.126-6.19v10.182h-1.641l-4.797-6.935h-0.085v6.935h-1.844v-10.182h1.65l4.793 6.941h0.089v-6.941h1.835zm5.46 10.182h-3.45v-10.182h3.519c1.011 0 1.88 0.204 2.606 0.612 0.729 0.404 1.289 0.986 1.68 1.745s0.587 1.667 0.587 2.724c0 1.061-0.198 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.516c0.71 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.069-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.239-0.517-0.591-0.903-1.059-1.158-0.464-0.259-1.041-0.388-1.73-0.388h-1.571v6.99zm-33.963 11.213c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.786-0.363-1.332-0.363-0.385 0-0.715 0.058-0.99 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.745 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.035-0.603-1.363-1.074-0.324-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.443 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.367-0.321-0.642-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.9 0.378 0.546 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.482 1.521h-1.774zm3.558 7.383v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm8.504 0v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm4.948-5.568 2.65 8.014h0.104l2.645-8.014h2.028l-3.589 10.182h-2.277l-3.585-10.182h2.024zm10.613 0v10.182h-1.845v-10.182h1.845zm10.712 3.436h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm1.69 6.746v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm14.037-7.383c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.785-0.363-1.332-0.363-0.385 0-0.714 0.058-0.99 0.174-0.275 0.116-0.485 0.273-0.631 0.472s-0.22 0.426-0.224 0.681c0 0.213 0.048 0.397 0.145 0.552 0.099 0.156 0.233 0.289 0.402 0.398 0.169 0.106 0.357 0.196 0.562 0.269 0.206 0.072 0.413 0.134 0.621 0.183l0.955 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.677 0.345 0.959 0.577 0.285 0.232 0.511 0.512 0.676 0.84 0.166 0.328 0.249 0.713 0.249 1.153 0 0.597-0.153 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.814c0.027 0.355 0.136 0.65 0.328 0.885 0.193 0.235 0.443 0.411 0.751 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.366-0.321-0.642-0.437-0.271-0.12-0.589-0.226-0.954-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.338-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.722 0 1.355 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.483 1.521h-1.775zm-46.55 19.292c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h6.523v1.546h-4.679v2.765h4.231v1.546h-4.231v4.325h-1.844zm8.203 0v-10.182h6.523v1.546h-4.678v2.765h4.23v1.546h-4.23v4.325h-1.845zm10.048-10.182v10.182h-1.845v-10.182h1.845zm10.712 3.436h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.606-1.72-0.606-2.814c0-1.097 0.203-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h6.623v1.546h-4.778v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662z"
                            fill="{{$room==64? 'white':'#000'}}" />
                    </g>
                    <g id="Room-307-Text" filter="url(#filter159_d_367_2)">
                        <path
                            d="m968.83 462v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.276 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.417 1.7-0.276 0.477-0.682 0.847-1.219 1.109-0.536 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.599-5.091h2.261l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.771v-10.182zm19.711 10.321c-0.71 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.02 0.275 0.11 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.66 0.472 0.28 0.113 0.59 0.169 0.93 0.169 0.36 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.23-0.79c0.01-0.309-0.07-0.58-0.24-0.816-0.16-0.235-0.39-0.419-0.7-0.551-0.31-0.133-0.67-0.199-1.11-0.199h-0.9v-1.422h0.9c0.36 0 0.67-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.64-0.517 0.15-0.226 0.22-0.486 0.22-0.781 0-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.32-0.383-0.56-0.503-0.23-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.86 0.169-0.27 0.113-0.48 0.274-0.64 0.483-0.17 0.205-0.25 0.45-0.26 0.735h-1.78c0.02-0.57 0.18-1.07 0.5-1.501 0.31-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.12-0.368 1.78-0.368 0.68 0 1.27 0.128 1.77 0.383 0.51 0.252 0.9 0.591 1.17 1.019 0.28 0.428 0.41 0.9 0.41 1.417 0.01 0.573-0.16 1.054-0.5 1.442-0.34 0.387-0.79 0.641-1.34 0.76v0.08c0.72 0.099 1.27 0.364 1.65 0.795 0.38 0.428 0.58 0.96 0.57 1.596 0 0.57-0.16 1.081-0.49 1.531-0.32 0.448-0.76 0.799-1.33 1.054-0.56 0.256-1.21 0.383-1.94 0.383zm9.23 0.055c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.1 0.616 0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.41-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.17 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.68 1.362 4.33-8.571v-0.07h-5.03v-1.541h6.94v1.576l-4.33 8.606h-1.91zm-52.361 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.471 0.417-0.428 0.275-0.763 0.68-1.005 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.246 0.53 0.58 0.931 1.005 1.203 0.427 0.268 0.916 0.403 1.466 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.228 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm10.787 1.655c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.599 5.091v-10.182h1.844v8.636h4.486v1.546h-6.33zm7.93 0v-10.182h1.84v8.636h4.49v1.546h-6.33zm7.93 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm15.32-6.93c-0.08-0.269-0.19-0.509-0.34-0.721-0.14-0.216-0.31-0.4-0.52-0.552-0.2-0.153-0.42-0.267-0.68-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412s-0.76 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.34-0.299 0.39-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.7-0.424-1.26-1.026-1.65-1.805-0.4-0.782-0.6-1.71-0.6-2.784 0-0.822 0.12-1.556 0.35-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.56-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.57 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.88zm3.75 6.93v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm-60.292 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.091 0c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.144 0.199-0.219 0.426-0.222 0.681 0 0.213 0.048 0.397 0.142 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.061-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.187 0.235 0.447 0.411 0.747 0.527 0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.836-0.215-1.499-0.542-1.986-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.567-0.252 1.197-0.378 1.917-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==66? 'white':'#000'}}" />
                    </g>
                    <g id="Room-305-Text" filter="url(#filter160_d_367_2)">
                        <path
                            d="m1094 418v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.24 0.531-0.35 1.182-0.35 1.954s0.11 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.25-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm3.59-5.091h2.26l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm19.72 10.321c-0.72 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.5-0.943-0.52-1.516h1.87c0.02 0.275 0.11 0.515 0.28 0.721 0.16 0.202 0.38 0.359 0.66 0.472 0.27 0.113 0.58 0.169 0.92 0.169 0.37 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.24-0.79c0-0.309-0.08-0.58-0.24-0.816-0.16-0.235-0.4-0.419-0.71-0.551-0.3-0.133-0.67-0.199-1.1-0.199h-0.9v-1.422h0.9c0.35 0 0.66-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.15-0.226 0.23-0.486 0.22-0.781 0.01-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.31-0.383-0.55-0.503-0.24-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.87 0.169-0.26 0.113-0.48 0.274-0.64 0.483-0.16 0.205-0.25 0.45-0.26 0.735h-1.77c0.01-0.57 0.18-1.07 0.49-1.501 0.32-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.13-0.368 1.79-0.368 0.68 0 1.27 0.128 1.77 0.383 0.5 0.252 0.89 0.591 1.17 1.019 0.27 0.428 0.41 0.9 0.41 1.417 0 0.573-0.17 1.054-0.51 1.442-0.34 0.387-0.78 0.641-1.33 0.76v0.08c0.72 0.099 1.26 0.364 1.64 0.795 0.39 0.428 0.58 0.96 0.58 1.596 0 0.57-0.17 1.081-0.49 1.531-0.32 0.448-0.77 0.799-1.33 1.054-0.57 0.256-1.21 0.383-1.94 0.383zm9.23 0.055c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849 0.01-1.11 0.16-2.055 0.48-2.834 0.31-0.782 0.76-1.379 1.34-1.79 0.59-0.411 1.29-0.616 2.11-0.616 0.81 0 1.51 0.205 2.1 0.616s1.04 1.008 1.35 1.79 0.47 1.727 0.47 2.834c0 1.114-0.16 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.63 0 1.14-0.313 1.5-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.31-0.282-0.67-0.423-1.09-0.423-0.64 0-1.14 0.315-1.5 0.945-0.37 0.626-0.56 1.546-0.56 2.759 0 0.812 0.08 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.31 0.279 0.67 0.418 1.1 0.418zm9.11 1.501c-0.66 0-1.26-0.124-1.78-0.373-0.52-0.252-0.94-0.596-1.25-1.034-0.3-0.437-0.46-0.938-0.48-1.501h1.79c0.03 0.417 0.21 0.759 0.54 1.024 0.33 0.262 0.72 0.393 1.18 0.393 0.36 0 0.68-0.083 0.97-0.249 0.28-0.166 0.5-0.396 0.66-0.691s0.24-0.631 0.24-1.009c0-0.385-0.08-0.726-0.24-1.024-0.17-0.299-0.4-0.532-0.68-0.701-0.29-0.173-0.62-0.259-1-0.259-0.3-3e-3 -0.6 0.053-0.9 0.169-0.29 0.116-0.53 0.269-0.7 0.458l-1.67-0.274 0.54-5.25h5.9v1.541h-4.38l-0.29 2.7h0.06c0.19-0.222 0.46-0.406 0.8-0.552 0.34-0.149 0.72-0.224 1.13-0.224 0.62 0 1.17 0.146 1.65 0.438 0.49 0.288 0.87 0.686 1.15 1.193s0.41 1.087 0.41 1.74c0 0.673-0.15 1.273-0.46 1.8-0.31 0.524-0.74 0.936-1.29 1.238-0.55 0.298-1.18 0.447-1.9 0.447zm-67.54 16.861h-1.97l3.59-10.182h2.27l3.59 10.182h-1.96l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm15.17-6.19h1.85v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.34 0.462-2.17 0.462-0.84 0-1.56-0.154-2.18-0.462-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.22 0.279 0.46 0 0.87-0.093 1.21-0.279 0.34-0.189 0.61-0.449 0.8-0.78 0.18-0.332 0.27-0.71 0.27-1.134v-6.498zm7.3 10.182h-3.45v-10.182h3.52c1.01 0 1.88 0.204 2.61 0.612 0.73 0.404 1.29 0.986 1.68 1.745s0.58 1.667 0.58 2.724c0 1.061-0.19 1.972-0.59 2.735-0.39 0.762-0.95 1.347-1.69 1.754-0.74 0.408-1.62 0.612-2.66 0.612zm-1.6-1.596h1.51c0.71 0 1.3-0.129 1.78-0.388 0.47-0.262 0.83-0.651 1.07-1.168 0.24-0.52 0.36-1.17 0.36-1.949s-0.12-1.425-0.36-1.939c-0.24-0.517-0.59-0.903-1.06-1.158-0.47-0.259-1.04-0.388-1.73-0.388h-1.57v6.99zm10.14-8.586v10.182h-1.84v-10.182h1.84zm11.1 5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm8.44-5.091 2.65 8.014h0.1l2.64-8.014h2.03l-3.59 10.182h-2.27l-3.59-10.182h2.03zm10.61 0v10.182h-1.85v-10.182h1.85zm7.53 2.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.63 0.183l0.95 0.239c0.39 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.68 0.84c0.16 0.328 0.24 0.713 0.24 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.51-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.3-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.89 0.378c0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm9.98-2.799h1.84v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.34 0.462-2.17 0.462s-1.56-0.154-2.18-0.462c-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.1 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.8 0.78 0.34 0.186 0.74 0.279 1.21 0.279s0.87-0.093 1.21-0.279c0.35-0.189 0.61-0.449 0.8-0.78 0.18-0.332 0.28-0.71 0.28-1.134v-6.498zm5.15 10.182h-1.97l3.59-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h1.84v8.636h4.49v1.546h-6.33zm11.4 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.69-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==67? 'white':'#000'}}" />
                    </g>
                    <g id="Room-303-Text" filter="url(#filter161_d_367_2)">
                        <path
                            d="m1448.2 462v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.71v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm19.72 10.321c-0.72 0-1.36-0.122-1.91-0.368-0.56-0.245-0.99-0.586-1.32-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.02 0.275 0.11 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.67 0.472 0.27 0.113 0.58 0.169 0.92 0.169 0.37 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.23-0.79c0.01-0.309-0.07-0.58-0.23-0.816-0.17-0.235-0.4-0.419-0.71-0.551-0.3-0.133-0.67-0.199-1.1-0.199h-0.9v-1.422h0.9c0.35 0 0.66-0.062 0.93-0.184 0.26-0.123 0.48-0.295 0.63-0.517 0.15-0.226 0.22-0.486 0.22-0.781 0-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.32-0.383-0.55-0.503-0.24-0.119-0.52-0.179-0.83-0.179-0.32 0-0.6 0.057-0.87 0.169-0.26 0.113-0.48 0.274-0.64 0.483-0.16 0.205-0.25 0.45-0.26 0.735h-1.77c0.01-0.57 0.17-1.07 0.49-1.501 0.32-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.13-0.368 1.79-0.368 0.67 0 1.26 0.128 1.77 0.383 0.5 0.252 0.89 0.591 1.16 1.019 0.28 0.428 0.42 0.9 0.42 1.417 0 0.573-0.17 1.054-0.51 1.442-0.34 0.387-0.78 0.641-1.33 0.76v0.08c0.71 0.099 1.26 0.364 1.64 0.795 0.39 0.428 0.58 0.96 0.57 1.596 0 0.57-0.16 1.081-0.48 1.531-0.32 0.448-0.77 0.799-1.34 1.054-0.56 0.256-1.21 0.383-1.93 0.383zm9.22 0.055c-0.81 0-1.52-0.207-2.1-0.622-0.59-0.417-1.04-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.11 0.616 0.58 0.411 1.03 1.008 1.34 1.79 0.32 0.782 0.48 1.727 0.48 2.834 0 1.114-0.16 2.065-0.48 2.854-0.31 0.785-0.76 1.385-1.34 1.799-0.59 0.415-1.29 0.622-2.11 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.4-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.55 2.759-0.01 0.812 0.07 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.3 0.279 0.67 0.418 1.09 0.418zm9.23 1.501c-0.71 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.01 0.275 0.11 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.66 0.472 0.28 0.113 0.59 0.169 0.93 0.169 0.36 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.23-0.79c0.01-0.309-0.07-0.58-0.24-0.816-0.16-0.235-0.39-0.419-0.7-0.551-0.31-0.133-0.68-0.199-1.11-0.199h-0.9v-1.422h0.9c0.36 0 0.67-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.16-0.226 0.23-0.486 0.23-0.781 0-0.288-0.06-0.538-0.2-0.75-0.12-0.216-0.31-0.383-0.55-0.503-0.23-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.86 0.169-0.27 0.113-0.48 0.274-0.64 0.483-0.17 0.205-0.25 0.45-0.26 0.735h-1.78c0.02-0.57 0.18-1.07 0.49-1.501 0.32-0.434 0.75-0.772 1.28-1.014 0.53-0.245 1.12-0.368 1.78-0.368 0.68 0 1.27 0.128 1.77 0.383 0.51 0.252 0.9 0.591 1.17 1.019 0.28 0.428 0.41 0.9 0.41 1.417 0.01 0.573-0.16 1.054-0.5 1.442-0.34 0.387-0.79 0.641-1.34 0.76v0.08c0.72 0.099 1.27 0.364 1.65 0.795 0.38 0.428 0.57 0.96 0.57 1.596 0 0.57-0.16 1.081-0.49 1.531-0.32 0.448-0.76 0.799-1.33 1.054-0.56 0.256-1.21 0.383-1.94 0.383zm-55.32 10.115h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h1.84v8.636h4.49v1.546h-6.33zm7.93 0v-10.182h1.84v8.636h4.49v1.546h-6.33zm7.93 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm15.32-6.93c-0.08-0.269-0.19-0.509-0.34-0.721-0.14-0.216-0.31-0.4-0.52-0.552-0.2-0.153-0.42-0.267-0.68-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412s-0.76 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.34-0.299 0.39-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.7-0.424-1.26-1.026-1.65-1.805-0.4-0.782-0.6-1.71-0.6-2.784 0-0.822 0.12-1.556 0.35-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.56-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.57 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.88zm3.75 6.93v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm-60.29 10.254h-1.86c-0.05-0.305-0.15-0.575-0.3-0.811-0.14-0.238-0.31-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.26-1.013-1.66-1.795s-0.61-1.72-0.61-2.814c0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.62 0h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm14.13-3.391c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.63 0.183l0.95 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.51-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.3-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.89 0.378c0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm9.09 0c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.45 0.411 0.75 0.527c0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.49-1.576 0.32-0.451 0.77-0.801 1.33-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==68? 'white':'#000'}}" />
                    </g>
                    <g id="Room-312-Text" filter="url(#filter162_d_367_2)">
                        <path
                            d="m650.26 731v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.508-0.316 0.647-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.475-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.813-6.98h-0.095v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.352-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.87c0.016 0.275 0.107 0.515 0.273 0.721 0.166 0.202 0.386 0.359 0.661 0.472s0.584 0.169 0.925 0.169c0.365 0 0.688-0.063 0.97-0.189 0.281-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.233-0.79c4e-3 -0.309-0.076-0.58-0.238-0.816-0.163-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.665-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.153-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.319-0.434 0.743-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.783 0.641-1.333 0.76v0.08c0.716 0.099 1.265 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.572 1.596 0 0.57-0.163 1.081-0.488 1.531-0.321 0.448-0.765 0.799-1.332 1.054-0.563 0.256-1.21 0.383-1.939 0.383zm9.606-10.321v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm2.586 10.182v-1.332l3.534-3.466c0.339-0.341 0.62-0.644 0.846-0.909 0.225-0.266 0.394-0.522 0.507-0.771 0.112-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.219-0.826-0.146-0.232-0.346-0.411-0.602-0.537-0.255-0.126-0.545-0.189-0.87-0.189-0.334 0-0.628 0.07-0.88 0.209-0.251 0.136-0.447 0.33-0.586 0.582-0.136 0.252-0.204 0.552-0.204 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.521-0.262 1.117-0.393 1.79-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.288 0.444 0.433 0.951 0.433 1.521 0 0.381-0.073 0.756-0.219 1.124s-0.403 0.775-0.771 1.223c-0.364 0.447-0.876 0.989-1.536 1.625l-1.755 1.785v0.07h4.435v1.541h-6.98zm-55.074 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm14.037-7.383c-0.046-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.785-0.363-1.332-0.363-0.385 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472-0.22 0.426-0.224 0.681c0 0.213 0.049 0.397 0.145 0.552 0.099 0.156 0.233 0.289 0.402 0.398 0.169 0.106 0.357 0.196 0.562 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.959 0.577 0.285 0.232 0.511 0.512 0.676 0.84 0.166 0.328 0.249 0.713 0.249 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.814c0.027 0.355 0.136 0.65 0.328 0.885 0.193 0.235 0.443 0.411 0.751 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.082-0.483-0.234-0.656-0.153-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.487-1.576 0.329-0.451 0.774-0.801 1.338-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.722 0 1.355 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm12.656 2.292c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm7.114-5.568-3.281 12.19h-1.576l3.281-12.19h1.576zm1.228 10.659v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.457 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm7.296 4.614h-3.45v-10.182h3.52c1.011 0 1.879 0.204 2.605 0.612 0.729 0.404 1.289 0.986 1.68 1.745s0.587 1.667 0.587 2.724c0 1.061-0.197 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.517c0.709 0 1.3-0.129 1.774-0.388 0.474-0.262 0.831-0.651 1.069-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.238-0.517-0.591-0.903-1.059-1.158-0.464-0.259-1.04-0.388-1.73-0.388h-1.571v6.99zm17.398-3.495c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959z"
                            fill="{{$room==71? 'white':'#000'}}" />
                    </g>
                    <g id="Room-310-Text" filter="url(#filter163_d_367_2)">
                        <path
                            d="m809.44 712v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.353-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.166 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.925 0.169c0.364 0 0.688-0.063 0.969-0.189 0.282-0.129 0.502-0.308 0.661-0.537 0.16-0.229 0.237-0.492 0.234-0.79 3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.397-0.419-0.705-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.354 0 0.664-0.062 0.93-0.184 0.268-0.123 0.478-0.295 0.631-0.517 0.152-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.062-0.538-0.194-0.75-0.13-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.865 0.169-0.266 0.113-0.479 0.274-0.642 0.483-0.162 0.205-0.248 0.45-0.258 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.769 0.383 0.504 0.252 0.894 0.591 1.169 1.019s0.412 0.9 0.412 1.417c4e-3 0.573-0.165 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.571 1.596 0 0.57-0.162 1.081-0.487 1.531-0.321 0.448-0.766 0.799-1.332 1.054-0.564 0.256-1.21 0.383-1.939 0.383zm9.606-10.321v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.349 10.376c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.033-1.019-1.347-1.804-0.312-0.789-0.468-1.739-0.468-2.849 4e-3 -1.11 0.161-2.055 0.473-2.834 0.314-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.036 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.311 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.715-1.243-0.309-0.282-0.673-0.423-1.094-0.423-0.633 0-1.134 0.315-1.502 0.945-0.367 0.626-0.553 1.546-0.556 2.759-4e-3 0.812 0.077 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.675 0.418 1.099 0.418zm-55.755 11.616h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.606-1.72-0.606-2.814c0-1.097 0.203-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm10.787 1.655c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h1.845v8.636h4.484v1.546h-6.329zm7.93 0v-10.182h1.844v8.636h4.485v1.546h-6.329zm7.93 0v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm15.325-6.93c-0.083-0.269-0.198-0.509-0.344-0.721-0.142-0.216-0.314-0.4-0.517-0.552-0.198-0.153-0.427-0.267-0.686-0.343-0.258-0.08-0.54-0.119-0.845-0.119-0.547 0-1.034 0.137-1.461 0.412-0.428 0.275-0.764 0.68-1.01 1.213-0.242 0.531-0.363 1.177-0.363 1.939 0 0.769 0.121 1.42 0.363 1.954s0.579 0.94 1.01 1.218c0.43 0.275 0.931 0.413 1.501 0.413 0.517 0 0.964-0.1 1.342-0.299 0.381-0.198 0.675-0.48 0.88-0.845 0.206-0.368 0.308-0.799 0.308-1.292l0.418 0.064h-2.764v-1.442h4.131v1.223c0 0.872-0.185 1.626-0.557 2.263-0.371 0.636-0.881 1.126-1.531 1.471-0.649 0.342-1.395 0.512-2.237 0.512-0.938 0-1.762-0.21-2.471-0.631-0.706-0.424-1.258-1.026-1.655-1.805-0.395-0.782-0.592-1.71-0.592-2.784 0-0.822 0.116-1.556 0.348-2.202 0.235-0.647 0.563-1.195 0.984-1.646 0.421-0.454 0.915-0.799 1.482-1.034 0.567-0.239 1.183-0.358 1.849-0.358 0.564 0 1.089 0.083 1.576 0.249 0.488 0.162 0.92 0.394 1.298 0.696 0.381 0.301 0.694 0.659 0.94 1.073 0.245 0.415 0.406 0.872 0.482 1.373h-1.879zm3.747 6.93v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm-58.557 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==72? 'white':'#000'}}" />
                    </g>
                    <g id="Room-308-Text" filter="url(#filter164_d_367_2)">
                        <path
                            d="m968.28 712v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.258l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.768v-10.182zm19.718 10.321c-0.72 0-1.36-0.122-1.91-0.368-0.56-0.245-0.99-0.586-1.32-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.02 0.275 0.11 0.515 0.28 0.721 0.16 0.202 0.38 0.359 0.66 0.472 0.27 0.113 0.58 0.169 0.92 0.169 0.37 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.24-0.79c0-0.309-0.08-0.58-0.24-0.816-0.17-0.235-0.4-0.419-0.71-0.551-0.3-0.133-0.67-0.199-1.1-0.199h-0.9v-1.422h0.9c0.35 0 0.66-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.15-0.226 0.23-0.486 0.22-0.781 0.01-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.31-0.383-0.55-0.503-0.24-0.119-0.52-0.179-0.83-0.179-0.32 0-0.6 0.057-0.87 0.169-0.26 0.113-0.48 0.274-0.64 0.483-0.16 0.205-0.25 0.45-0.26 0.735h-1.77c0.01-0.57 0.17-1.07 0.49-1.501 0.32-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.13-0.368 1.79-0.368 0.68 0 1.27 0.128 1.77 0.383 0.5 0.252 0.89 0.591 1.16 1.019 0.28 0.428 0.42 0.9 0.42 1.417 0 0.573-0.17 1.054-0.51 1.442-0.34 0.387-0.78 0.641-1.33 0.76v0.08c0.71 0.099 1.26 0.364 1.64 0.795 0.39 0.428 0.58 0.96 0.58 1.596 0 0.57-0.17 1.081-0.49 1.531-0.32 0.448-0.77 0.799-1.33 1.054-0.57 0.256-1.21 0.383-1.94 0.383zm9.23 0.055c-0.82 0-1.53-0.207-2.11-0.622-0.59-0.417-1.04-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849 0.01-1.11 0.16-2.055 0.47-2.834 0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.11-0.616 0.81 0 1.51 0.205 2.1 0.616 0.58 0.411 1.03 1.008 1.35 1.79 0.31 0.782 0.47 1.727 0.47 2.834 0 1.114-0.16 2.065-0.47 2.854-0.32 0.785-0.77 1.385-1.35 1.799-0.59 0.415-1.29 0.622-2.1 0.622zm0-1.556c0.63 0 1.13-0.313 1.5-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.16-0.551-0.4-0.965-0.71-1.243-0.31-0.282-0.67-0.423-1.09-0.423-0.64 0-1.14 0.315-1.51 0.945-0.36 0.626-0.55 1.546-0.55 2.759-0.01 0.812 0.07 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.3 0.279 0.67 0.418 1.1 0.418zm9.19 1.501c-0.74 0-1.4-0.124-1.97-0.373-0.57-0.248-1.02-0.588-1.34-1.019-0.32-0.434-0.48-0.926-0.48-1.476 0-0.428 0.09-0.821 0.28-1.179s0.44-0.656 0.76-0.895c0.33-0.242 0.69-0.396 1.09-0.462v-0.07c-0.53-0.116-0.95-0.382-1.27-0.8-0.33-0.421-0.49-0.906-0.48-1.457-0.01-0.523 0.14-0.991 0.44-1.402 0.29-0.411 0.7-0.734 1.21-0.969 0.51-0.239 1.1-0.358 1.76-0.358 0.65 0 1.23 0.119 1.74 0.358 0.52 0.235 0.92 0.558 1.22 0.969s0.44 0.879 0.44 1.402c0 0.551-0.16 1.036-0.49 1.457-0.32 0.418-0.74 0.684-1.26 0.8v0.07c0.4 0.066 0.76 0.22 1.08 0.462 0.32 0.239 0.57 0.537 0.76 0.895 0.2 0.358 0.29 0.751 0.29 1.179 0 0.55-0.16 1.042-0.49 1.476-0.32 0.431-0.77 0.771-1.34 1.019-0.56 0.249-1.22 0.373-1.95 0.373zm0-1.422c0.38 0 0.71-0.064 0.99-0.194 0.28-0.132 0.5-0.318 0.66-0.556 0.16-0.239 0.23-0.514 0.24-0.826-0.01-0.324-0.09-0.611-0.26-0.86-0.16-0.252-0.38-0.449-0.67-0.591-0.28-0.143-0.6-0.214-0.96-0.214-0.37 0-0.69 0.071-0.98 0.214-0.28 0.142-0.51 0.339-0.67 0.591-0.16 0.249-0.24 0.536-0.24 0.86 0 0.312 0.07 0.587 0.23 0.826 0.15 0.235 0.37 0.419 0.65 0.551 0.29 0.133 0.62 0.199 1.01 0.199zm0-4.638c0.31 0 0.59-0.063 0.82-0.189 0.25-0.126 0.44-0.302 0.58-0.527 0.13-0.225 0.21-0.486 0.21-0.781 0-0.291-0.07-0.546-0.21-0.765-0.14-0.222-0.32-0.393-0.57-0.512-0.24-0.123-0.52-0.184-0.83-0.184-0.32 0-0.61 0.061-0.85 0.184-0.24 0.119-0.43 0.29-0.57 0.512-0.13 0.219-0.2 0.474-0.19 0.765-0.01 0.295 0.06 0.556 0.2 0.781 0.14 0.222 0.33 0.398 0.57 0.527 0.24 0.126 0.52 0.189 0.84 0.189zm-57.068 16.175h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.606-1.72-0.606-2.814c0-1.097 0.203-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm10.787 1.655c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h1.845v8.636h4.484v1.546h-6.329zm7.927 0v-10.182h1.85v8.636h4.48v1.546h-6.33zm7.93 0v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm15.33-6.93c-0.09-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.47 0.412-0.42 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.177-0.37 1.939 0 0.769 0.12 1.42 0.37 1.954 0.24 0.534 0.57 0.94 1 1.218 0.44 0.275 0.94 0.413 1.51 0.413 0.51 0 0.96-0.1 1.34-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.31-0.799 0.31-1.292l0.41 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.23 0.512-0.94 0-1.77-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.48-1.034 0.57-0.239 1.19-0.358 1.85-0.358 0.56 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.29 0.696 0.39 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.49 1.373h-1.88zm3.74 6.93v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm-58.552 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.091 0c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.144 0.199-0.219 0.426-0.222 0.681 0 0.213 0.048 0.397 0.142 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.061-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.187 0.235 0.447 0.411 0.747 0.527 0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.836-0.215-1.499-0.542-1.986-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.567-0.252 1.197-0.378 1.917-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==73? 'white':'#000'}}" />
                    </g>
                    <g id="Room-306-Text" filter="url(#filter165_d_367_2)">
                        <path
                            d="m1128.3 712v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.24 0.531-0.35 1.182-0.35 1.954s0.11 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm19.72 10.321c-0.72 0-1.36-0.122-1.91-0.368-0.56-0.245-0.99-0.586-1.32-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.02 0.275 0.11 0.515 0.28 0.721 0.16 0.202 0.38 0.359 0.66 0.472 0.27 0.113 0.58 0.169 0.92 0.169 0.37 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.24-0.79c0-0.309-0.08-0.58-0.24-0.816-0.17-0.235-0.4-0.419-0.71-0.551-0.3-0.133-0.67-0.199-1.1-0.199h-0.9v-1.422h0.9c0.35 0 0.66-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.15-0.226 0.23-0.486 0.22-0.781 0.01-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.32-0.383-0.55-0.503-0.24-0.119-0.52-0.179-0.83-0.179-0.32 0-0.6 0.057-0.87 0.169-0.26 0.113-0.48 0.274-0.64 0.483-0.16 0.205-0.25 0.45-0.26 0.735h-1.77c0.01-0.57 0.17-1.07 0.49-1.501 0.32-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.13-0.368 1.79-0.368 0.68 0 1.27 0.128 1.77 0.383 0.5 0.252 0.89 0.591 1.16 1.019 0.28 0.428 0.42 0.9 0.42 1.417 0 0.573-0.17 1.054-0.51 1.442-0.34 0.387-0.78 0.641-1.33 0.76v0.08c0.71 0.099 1.26 0.364 1.64 0.795 0.39 0.428 0.58 0.96 0.57 1.596 0 0.57-0.16 1.081-0.48 1.531-0.32 0.448-0.77 0.799-1.34 1.054-0.56 0.256-1.2 0.383-1.93 0.383zm9.22 0.055c-0.81 0-1.52-0.207-2.1-0.622-0.59-0.417-1.04-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849 0.01-1.11 0.16-2.055 0.47-2.834 0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.11 0.616 0.58 0.411 1.03 1.008 1.34 1.79 0.32 0.782 0.48 1.727 0.48 2.834 0 1.114-0.16 2.065-0.48 2.854-0.31 0.785-0.76 1.385-1.34 1.799-0.59 0.415-1.29 0.622-2.11 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.16-0.551-0.4-0.965-0.71-1.243-0.31-0.282-0.67-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.36 0.626-0.55 1.546-0.55 2.759-0.01 0.812 0.07 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.3 0.279 0.67 0.418 1.09 0.418zm9.31 1.501c-0.49-3e-3 -0.97-0.088-1.43-0.253-0.46-0.169-0.88-0.443-1.25-0.821-0.37-0.381-0.67-0.886-0.89-1.516-0.22-0.633-0.32-1.417-0.32-2.352 0-0.871 0.09-1.648 0.28-2.331 0.18-0.683 0.45-1.26 0.8-1.73 0.35-0.474 0.77-0.836 1.26-1.084 0.49-0.249 1.04-0.373 1.65-0.373 0.64 0 1.21 0.126 1.7 0.378 0.5 0.252 0.9 0.596 1.21 1.034 0.3 0.434 0.49 0.925 0.56 1.471h-1.81c-0.1-0.391-0.29-0.702-0.57-0.934-0.29-0.235-0.65-0.353-1.09-0.353-0.7 0-1.25 0.306-1.63 0.92-0.38 0.613-0.57 1.455-0.57 2.525h0.07c0.16-0.291 0.37-0.542 0.63-0.751 0.26-0.208 0.55-0.369 0.88-0.482 0.32-0.116 0.67-0.174 1.03-0.174 0.6 0 1.14 0.143 1.61 0.428 0.48 0.285 0.86 0.678 1.13 1.178 0.28 0.497 0.42 1.067 0.42 1.71 0 0.67-0.15 1.271-0.46 1.805-0.31 0.53-0.74 0.948-1.29 1.253s-1.19 0.456-1.92 0.452zm-0.01-1.491c0.36 0 0.68-0.088 0.97-0.264 0.28-0.175 0.51-0.412 0.67-0.711 0.17-0.298 0.25-0.633 0.25-1.004 0-0.365-0.08-0.694-0.24-0.989s-0.38-0.529-0.66-0.701c-0.28-0.173-0.61-0.259-0.97-0.259-0.27 0-0.52 0.052-0.75 0.154-0.23 0.103-0.43 0.246-0.6 0.428-0.18 0.179-0.31 0.388-0.41 0.626-0.1 0.236-0.15 0.487-0.15 0.756 0 0.355 0.08 0.681 0.25 0.979 0.16 0.299 0.38 0.537 0.67 0.716 0.28 0.179 0.61 0.269 0.97 0.269zm-55.41 11.606h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h1.84v8.636h4.49v1.546h-6.33zm7.93 0v-10.182h1.84v8.636h4.49v1.546h-6.33zm7.93 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm15.32-6.93c-0.08-0.269-0.19-0.509-0.34-0.721-0.14-0.216-0.31-0.4-0.52-0.552-0.2-0.153-0.42-0.267-0.68-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412s-0.76 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.34-0.299 0.39-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.7-0.424-1.26-1.026-1.65-1.805-0.4-0.782-0.6-1.71-0.6-2.784 0-0.822 0.12-1.556 0.35-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.56-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.57 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.88zm3.75 6.93v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm-60.29 10.254h-1.86c-0.05-0.305-0.15-0.575-0.3-0.811-0.14-0.238-0.31-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.26-1.013-1.66-1.795s-0.61-1.72-0.61-2.814c0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.62 0h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm14.13-3.391c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.63 0.183l0.95 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.51-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.3-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.89 0.378c0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm9.09 0c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.45 0.411 0.75 0.527c0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.49-1.576 0.32-0.451 0.77-0.801 1.33-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==74? 'white':'#000'}}" />
                    </g>
                    <g id="Room-302-304-Text" filter="url(#filter166_d_367_2)">
                        <path
                            d="m1351.4 704v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.7-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm19.71 10.321c-0.71 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.02 0.275 0.11 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.66 0.472 0.28 0.113 0.59 0.169 0.93 0.169 0.36 0 0.69-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.24-0.492 0.23-0.79c0.01-0.309-0.07-0.58-0.24-0.816-0.16-0.235-0.39-0.419-0.7-0.551-0.31-0.133-0.67-0.199-1.11-0.199h-0.89v-1.422h0.89c0.36 0 0.67-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.64-0.517 0.15-0.226 0.22-0.486 0.22-0.781 0-0.288-0.06-0.538-0.19-0.75-0.13-0.216-0.32-0.383-0.56-0.503-0.23-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.86 0.169-0.27 0.113-0.48 0.274-0.64 0.483-0.17 0.205-0.25 0.45-0.26 0.735h-1.78c0.02-0.57 0.18-1.07 0.5-1.501 0.31-0.434 0.74-0.772 1.27-1.014 0.53-0.245 1.12-0.368 1.78-0.368 0.68 0 1.27 0.128 1.77 0.383 0.51 0.252 0.9 0.591 1.17 1.019 0.28 0.428 0.41 0.9 0.41 1.417 0.01 0.573-0.16 1.054-0.5 1.442-0.34 0.387-0.78 0.641-1.33 0.76v0.08c0.71 0.099 1.26 0.364 1.64 0.795 0.39 0.428 0.58 0.96 0.57 1.596 0 0.57-0.16 1.081-0.48 1.531-0.33 0.448-0.77 0.799-1.34 1.054-0.56 0.256-1.21 0.383-1.94 0.383zm9.23 0.055c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.11 0.616 0.58 0.411 1.03 1.008 1.34 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.34 1.799-0.59 0.415-1.29 0.622-2.11 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.41-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.17 0.554 0.41 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.58 1.362v-1.332l3.53-3.466c0.34-0.341 0.62-0.644 0.85-0.909 0.22-0.266 0.39-0.522 0.5-0.771 0.12-0.249 0.17-0.514 0.17-0.795 0-0.322-0.07-0.597-0.22-0.826-0.14-0.232-0.34-0.411-0.6-0.537-0.25-0.126-0.54-0.189-0.87-0.189s-0.63 0.07-0.88 0.209c-0.25 0.136-0.44 0.33-0.58 0.582s-0.21 0.552-0.21 0.9h-1.75c0-0.647 0.14-1.208 0.44-1.686 0.29-0.477 0.7-0.846 1.22-1.108s1.11-0.393 1.79-0.393 1.28 0.128 1.8 0.383c0.51 0.255 0.92 0.605 1.2 1.049 0.29 0.444 0.43 0.951 0.43 1.521 0 0.381-0.07 0.756-0.22 1.124-0.14 0.368-0.4 0.775-0.77 1.223-0.36 0.447-0.87 0.989-1.53 1.625l-1.76 1.785v0.07h4.44v1.541h-6.98zm13.34-5.832v1.482h-4.58v-1.482h4.58zm5.43 5.971c-0.71 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.01 0.275 0.11 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.66 0.472 0.28 0.113 0.59 0.169 0.93 0.169 0.36 0 0.68-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.23-0.492 0.23-0.79c0-0.309-0.07-0.58-0.24-0.816-0.16-0.235-0.39-0.419-0.7-0.551-0.31-0.133-0.68-0.199-1.11-0.199h-0.9v-1.422h0.9c0.36 0 0.67-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.16-0.226 0.23-0.486 0.23-0.781 0-0.288-0.06-0.538-0.2-0.75-0.13-0.216-0.31-0.383-0.55-0.503-0.23-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.86 0.169-0.27 0.113-0.48 0.274-0.64 0.483-0.17 0.205-0.25 0.45-0.26 0.735h-1.78c0.02-0.57 0.18-1.07 0.49-1.501 0.32-0.434 0.75-0.772 1.28-1.014 0.53-0.245 1.12-0.368 1.78-0.368 0.68 0 1.27 0.128 1.77 0.383 0.51 0.252 0.89 0.591 1.17 1.019s0.41 0.9 0.41 1.417c0.01 0.573-0.16 1.054-0.5 1.442-0.34 0.387-0.79 0.641-1.34 0.76v0.08c0.72 0.099 1.27 0.364 1.65 0.795 0.38 0.428 0.57 0.96 0.57 1.596 0 0.57-0.16 1.081-0.49 1.531-0.32 0.448-0.76 0.799-1.33 1.054-0.56 0.256-1.21 0.383-1.94 0.383zm9.23 0.055c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.32-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.1 0.616 0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.3-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.16 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.39-0.527v-1.467l4.32-6.826h1.22v2.088h-0.74l-2.91 4.609v0.079h6.03v1.517h-7.92zm4.86 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm-167.72 10.07c-0.09-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.47 0.412-0.42 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954 0.25 0.534 0.58 0.94 1.01 1.218 0.43 0.275 0.93 0.413 1.51 0.413 0.51 0 0.96-0.1 1.34-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.31-0.799 0.31-1.292l0.41 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.23 0.512-0.94 0-1.77-0.21-2.48-0.631-0.7-0.424-1.25-1.026-1.65-1.805-0.4-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.57-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.29 0.696 0.39 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.49 1.373h-1.88zm10.16-3.252h1.85v6.652c0 0.729-0.18 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.17 0.462-0.84 0-1.56-0.154-2.18-0.462-0.62-0.312-1.1-0.744-1.44-1.298-0.35-0.553-0.52-1.195-0.52-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.22 0.279 0.46 0 0.87-0.093 1.21-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm5.7 0v10.182h-1.85v-10.182h1.85zm5.44 10.182h-3.45v-10.182h3.52c1.01 0 1.88 0.204 2.61 0.612 0.73 0.404 1.29 0.986 1.68 1.745s0.59 1.667 0.59 2.724c0 1.061-0.2 1.972-0.6 2.735-0.39 0.762-0.95 1.347-1.69 1.754-0.74 0.408-1.62 0.612-2.66 0.612zm-1.6-1.596h1.51c0.71 0 1.31-0.129 1.78-0.388 0.47-0.262 0.83-0.651 1.07-1.168 0.24-0.52 0.36-1.17 0.36-1.949s-0.12-1.425-0.36-1.939c-0.24-0.517-0.59-0.903-1.06-1.158-0.47-0.259-1.04-0.388-1.73-0.388h-1.57v6.99zm9.06 1.596h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm17.13-6.19v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.8 6.941h0.08v-6.941h1.84zm10.72 3.436h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.73-0.373-0.26-0.086-0.55-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.24 0.531-0.37 1.178-0.37 1.944 0 0.779 0.13 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586s0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.93 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm10.54-1.392-0.06 0.547c-0.05 0.417-0.13 0.842-0.25 1.273-0.12 0.434-0.24 0.833-0.37 1.198-0.13 0.364-0.23 0.651-0.31 0.86h-1.22c0.05-0.202 0.11-0.477 0.19-0.825s0.16-0.74 0.24-1.174 0.13-0.875 0.15-1.322l0.04-0.557h1.59zm13.97-5.354h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.04 0.268-1.65 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm10.02-5.091h1.84v6.652c0 0.729-0.17 1.371-0.51 1.924-0.35 0.554-0.83 0.986-1.45 1.298-0.62 0.308-1.34 0.462-2.17 0.462s-1.56-0.154-2.18-0.462c-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.1 0.802 0.28 1.134 0.19 0.331 0.46 0.591 0.8 0.78 0.34 0.186 0.74 0.279 1.21 0.279s0.87-0.093 1.21-0.279c0.35-0.189 0.61-0.449 0.8-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm12.21 0v10.182h-1.64l-4.79-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm7.55 2.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.37-1.074c-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.41 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.18-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.08-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.73 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm3.56 7.383v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm8.5 0v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.77-10.182v10.182h-1.84v-10.182h1.84zm10.37 0v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.8 6.941h0.08v-6.941h1.84zm8.83 3.252c-0.08-0.269-0.2-0.509-0.34-0.721-0.15-0.216-0.32-0.4-0.52-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.25-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.46 0.412-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.37 1.177-0.37 1.939 0 0.769 0.13 1.42 0.37 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.96-0.1 1.34-0.299 0.38-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.77v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.55 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.12-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.48-1.034 0.57-0.239 1.19-0.358 1.85-0.358 0.57 0 1.09 0.083 1.58 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.94 1.073 0.24 0.415 0.4 0.872 0.48 1.373h-1.88zm10.18 7.079c-0.69 0-1.29-0.126-1.79-0.378s-0.89-0.591-1.16-1.019c-0.27-0.431-0.4-0.916-0.4-1.457 0-0.407 0.08-0.768 0.25-1.083 0.16-0.315 0.4-0.607 0.69-0.875 0.3-0.269 0.64-0.536 1.04-0.801l1.8-1.228c0.27-0.172 0.47-0.354 0.6-0.547 0.14-0.192 0.21-0.417 0.21-0.676 0-0.219-0.09-0.426-0.28-0.621-0.18-0.196-0.43-0.294-0.75-0.294-0.22 0-0.41 0.052-0.57 0.155-0.17 0.099-0.29 0.23-0.39 0.392-0.09 0.163-0.13 0.335-0.13 0.517 0 0.222 0.06 0.448 0.18 0.677 0.13 0.228 0.29 0.465 0.49 0.71 0.2 0.246 0.42 0.506 0.65 0.781l4.77 5.598h-1.95l-3.96-4.544c-0.3-0.345-0.58-0.684-0.86-1.019-0.27-0.335-0.49-0.683-0.67-1.044-0.17-0.365-0.26-0.759-0.26-1.183 0-0.481 0.11-0.91 0.34-1.288 0.22-0.381 0.53-0.681 0.92-0.9 0.41-0.219 0.88-0.328 1.41-0.328 0.54 0 1 0.106 1.38 0.318 0.39 0.212 0.69 0.494 0.89 0.845 0.21 0.352 0.32 0.734 0.32 1.149 0 0.48-0.12 0.911-0.36 1.292-0.24 0.378-0.57 0.721-1 1.029l-2.05 1.507c-0.34 0.245-0.58 0.494-0.73 0.746-0.15 0.248-0.22 0.46-0.22 0.636 0 0.268 0.07 0.512 0.21 0.731 0.13 0.218 0.32 0.394 0.57 0.527 0.25 0.129 0.54 0.194 0.87 0.194 0.36 0 0.72-0.082 1.08-0.244 0.35-0.166 0.67-0.401 0.97-0.706 0.29-0.305 0.52-0.669 0.69-1.094 0.17-0.427 0.26-0.901 0.26-1.422h1.55c0 0.643-0.07 1.204-0.22 1.681-0.14 0.474-0.32 0.875-0.55 1.203-0.22 0.325-0.46 0.585-0.71 0.78-0.08 0.057-0.16 0.113-0.23 0.17-0.08 0.056-0.15 0.112-0.23 0.169-0.36 0.324-0.78 0.563-1.26 0.715-0.48 0.153-0.95 0.229-1.41 0.229zm9.35-8.785v-1.546h8.12v1.546h-3.15v8.636h-1.82v-8.636h-3.15zm9.69 8.636v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm14.04-7.383c-0.05-0.434-0.25-0.772-0.59-1.014s-0.79-0.363-1.33-0.363c-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.35 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363 0.35 0.152 0.67 0.345 0.95 0.577 0.29 0.232 0.51 0.512 0.68 0.84s0.25 0.713 0.25 1.153c0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.8 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.32-0.47-0.5-1.044-0.53-1.72h1.82c0.03 0.355 0.13 0.65 0.33 0.885 0.19 0.235 0.44 0.411 0.75 0.527s0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.49-0.441-0.73-1.026-0.73-1.755 0-0.6 0.16-1.125 0.49-1.576s0.77-0.801 1.34-1.049c0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm3.11-1.253v-1.546h8.12v1.546h-3.15v8.636h-1.83v-8.636h-3.14zm11.53-1.546v10.182h-1.84v-10.182h1.84zm10.36 0v10.182h-1.64l-4.79-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm8.84 3.252c-0.09-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412-0.42 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954 0.25 0.534 0.58 0.94 1.01 1.218 0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.35-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.3-0.799 0.3-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.24 0.512-0.93 0-1.76-0.21-2.47-0.631-0.7-0.424-1.25-1.026-1.65-1.805-0.4-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.34-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.57-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.29 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.87z"
                            fill="{{$room==75? 'white':'#000'}}" />
                    </g>
                    <g id="COMFORT-ROOM-TEXT" filter="url(#filter182_d_367_2)">
                        <path
                            d="m1614.9 411.25h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.53-0.606-0.22-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.43 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.24 0.531-0.35 1.182-0.35 1.954s0.11 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm12.69 10.182v-10.182h6.52v1.546h-4.68v2.765h4.23v1.546h-4.23v4.325h-1.84zm17.3-5.091c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm3.4-4.022v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm30.53 8.636v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.6-5.091h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.33l-2.81-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==69? 'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter183_d_367_2)">
                        <line x1="480" x2="455" y1="395" y2="395" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter184_d_367_2)">
                        <rect x="285" y="389" width="80" height="60" fill="#D9D9D9" />
                        <rect x="286" y="390" width="78" height="58" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter185_d_367_2)">
                        <rect transform="rotate(180 357 439)" x="357" y="439" width="64" height="42"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter186_d_367_2)">
                        <path d="m318.26 429v-23.273h14.045v2.5h-11.227v7.864h10.5v2.5h-10.5v7.909h11.409v2.5h-14.227z"
                            fill="#fff" />
                    </g>
                    <g filter="url(#filter187_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 669 387)" width="32" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 669 385)" x="1" y="-1" width="30" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter188_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 662 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 662 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter189_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 620 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 620 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter190_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 613 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 613 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter191_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 606 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 606 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter192_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 655 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 655 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter193_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 648 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 648 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter194_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 641 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 641 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter195_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 634 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 634 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter196_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 627 387)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 627 385)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter197_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 456 244)" width="47" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 456 242)" x="1" y="-1" width="45" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter198_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 446 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 446 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter199_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 385 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 385 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter200_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 375 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 375 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter201_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 365 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 365 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter202_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 436 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 436 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter203_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 426 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 426 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter204_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 416 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 416 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter205_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 406 244)" width="10" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 406 242)" x="1" y="-1" width="8" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter206_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 395 244)" width="11" height="50"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 395 242)" x="1" y="-1" width="9" height="48"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter207_d_367_2)">
                        <path d="M366 354V244" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter208_d_367_2)">
                        <line x1="365" x2="394" y1="353" y2="353" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter209_d_367_2)">
                        <line x1="458" x2="506" y1="246" y2="246" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter210_d_367_2)">
                        <line x1="429" x2="455" y1="353" y2="353" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter211_d_367_2)">
                        <path d="m397 333h31" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter212_d_367_2)">
                        <line x1="412" x2="413" y1="243.99" y2="333.99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g id="FACULTY-ROOM-TEXT" filter="url(#filter213_d_367_2)">
                        <path
                            d="m347.04 85v-10.182h6.523v1.5461h-4.678v2.7643h4.231v1.5461h-4.231v4.3253h-1.845zm8.24 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.0938h-0.08l-2.714 8.0938zm0.064-3.9922h5.37v1.4815h-5.37v-1.4815zm16.996-2.7542h-1.86c-0.053-0.305-0.151-0.5751-0.293-0.8104-0.143-0.2387-0.32-0.4408-0.532-0.6066-0.212-0.1657-0.454-0.29-0.726-0.3728-0.268-0.0862-0.558-0.1293-0.87-0.1293-0.553 0-1.044 0.1392-1.471 0.4176-0.428 0.2751-0.763 0.6795-1.005 1.2131-0.242 0.5303-0.363 1.1783-0.363 1.9439 0 0.7789 0.121 1.4351 0.363 1.9687 0.246 0.5303 0.58 0.9314 1.005 1.2032 0.427 0.2684 0.916 0.4027 1.466 0.4027 0.305 0 0.59-0.0398 0.855-0.1194 0.269-0.0828 0.509-0.2038 0.721-0.3629 0.216-0.1591 0.396-0.3546 0.542-0.5866 0.149-0.232 0.252-0.4972 0.308-0.7955l1.86 0.01c-0.07 0.4839-0.221 0.9379-0.453 1.3622-0.228 0.4242-0.528 0.7987-0.9 1.1236-0.371 0.3215-0.805 0.5733-1.302 0.7556-0.497 0.179-1.049 0.2685-1.656 0.2685-0.895 0-1.693-0.2071-2.396-0.6214s-1.256-1.0126-1.661-1.7948c-0.404-0.7822-0.606-1.7202-0.606-2.8139 0-1.0971 0.204-2.035 0.611-2.8139 0.408-0.7822 0.963-1.3805 1.666-1.7948s1.498-0.6214 2.386-0.6214c0.567 0 1.094 0.0795 1.581 0.2386s0.922 0.3928 1.303 0.701c0.381 0.3049 0.694 0.6795 0.939 1.1236 0.249 0.4408 0.411 0.9446 0.488 1.5114zm8.107-3.4354h1.845v6.652c0 0.7291-0.173 1.3705-0.517 1.924-0.342 0.5535-0.822 0.986-1.442 1.2976-0.62 0.3082-1.344 0.4623-2.173 0.4623-0.832 0-1.558-0.1541-2.177-0.4623-0.62-0.3116-1.101-0.7441-1.442-1.2976-0.342-0.5535-0.512-1.1949-0.512-1.924v-6.652h1.844v6.4979c0 0.4242 0.093 0.802 0.279 1.1335 0.189 0.3314 0.454 0.5916 0.795 0.7805 0.341 0.1856 0.746 0.2784 1.213 0.2784s0.872-0.0928 1.213-0.2784c0.345-0.1889 0.61-0.4491 0.796-0.7805 0.185-0.3315 0.278-0.7093 0.278-1.1335v-6.4979zm3.849 10.182v-10.182h1.845v8.6356h4.484v1.5462h-6.329zm6.184-8.6357v-1.5461h8.123v1.5461h-3.147v8.6357h-1.829v-8.6357h-3.147zm8.993-1.5461h2.083l2.491 4.5042h0.1l2.49-4.5042h2.084l-3.704 6.3835v3.7983h-1.84v-3.7983l-3.704-6.3835zm14.026 10.182v-10.182h3.819c0.782 0 1.438 0.1359 1.968 0.4077 0.534 0.2717 0.937 0.6529 1.209 1.1434 0.275 0.4872 0.412 1.0557 0.412 1.7053 0 0.6529-0.139 1.2197-0.417 1.7003-0.276 0.4772-0.682 0.8468-1.219 1.1086-0.536 0.2585-1.196 0.3878-1.978 0.3878h-2.72v-1.5312h2.471c0.458 0 0.832-0.063 1.124-0.189 0.291-0.1292 0.507-0.3165 0.646-0.5618 0.143-0.2485 0.214-0.5535 0.214-0.9147 0-0.3613-0.071-0.6695-0.214-0.9247-0.142-0.2586-0.36-0.4541-0.651-0.5867-0.292-0.1359-0.668-0.2038-1.129-0.2038h-1.69v8.6406h-1.845zm5.26-4.6136 2.521 4.6136h-2.058l-2.476-4.6136h2.013zm12.944-0.4773c0 1.0971-0.206 2.0367-0.617 2.8189-0.407 0.7789-0.964 1.3755-1.67 1.7898-0.703 0.4143-1.5 0.6214-2.391 0.6214-0.892 0-1.691-0.2071-2.397-0.6214-0.702-0.4177-1.259-1.0159-1.67-1.7948-0.408-0.7822-0.612-1.7202-0.612-2.8139 0-1.0971 0.204-2.035 0.612-2.8139 0.411-0.7822 0.968-1.3805 1.67-1.7948 0.706-0.4143 1.505-0.6214 2.397-0.6214 0.891 0 1.688 0.2071 2.391 0.6214 0.706 0.4143 1.263 1.0126 1.67 1.7948 0.411 0.7789 0.617 1.7168 0.617 2.8139zm-1.854 0c0-0.7723-0.121-1.4235-0.363-1.9538-0.239-0.5337-0.57-0.9364-0.995-1.2081-0.424-0.2751-0.913-0.4127-1.466-0.4127-0.554 0-1.043 0.1376-1.467 0.4127-0.424 0.2717-0.757 0.6744-0.999 1.2081-0.239 0.5303-0.358 1.1815-0.358 1.9538 0 0.7722 0.119 1.4252 0.358 1.9588 0.242 0.5303 0.575 0.933 0.999 1.2081 0.424 0.2718 0.913 0.4077 1.467 0.4077 0.553 0 1.042-0.1359 1.466-0.4077 0.425-0.2751 0.756-0.6778 0.995-1.2081 0.242-0.5336 0.363-1.1866 0.363-1.9588zm12.696 0c0 1.0971-0.206 2.0367-0.617 2.8189-0.407 0.7789-0.964 1.3755-1.67 1.7898-0.703 0.4143-1.5 0.6214-2.392 0.6214-0.891 0-1.69-0.2071-2.396-0.6214-0.702-0.4177-1.259-1.0159-1.67-1.7948-0.408-0.7822-0.612-1.7202-0.612-2.8139 0-1.0971 0.204-2.035 0.612-2.8139 0.411-0.7822 0.968-1.3805 1.67-1.7948 0.706-0.4143 1.505-0.6214 2.396-0.6214 0.892 0 1.689 0.2071 2.392 0.6214 0.706 0.4143 1.263 1.0126 1.67 1.7948 0.411 0.7789 0.617 1.7168 0.617 2.8139zm-1.855 0c0-0.7723-0.121-1.4235-0.363-1.9538-0.238-0.5337-0.57-0.9364-0.994-1.2081-0.424-0.2751-0.913-0.4127-1.467-0.4127-0.553 0-1.042 0.1376-1.466 0.4127-0.424 0.2717-0.757 0.6744-0.999 1.2081-0.239 0.5303-0.358 1.1815-0.358 1.9538 0 0.7722 0.119 1.4252 0.358 1.9588 0.242 0.5303 0.575 0.933 0.999 1.2081 0.424 0.2718 0.913 0.4077 1.466 0.4077 0.554 0 1.043-0.1359 1.467-0.4077 0.424-0.2751 0.756-0.6778 0.994-1.2081 0.242-0.5336 0.363-1.1866 0.363-1.9588zm3.599-5.0909h2.257l3.022 7.3778h0.12l3.022-7.3778h2.258v10.182h-1.77v-6.995h-0.095l-2.814 6.9652h-1.322l-2.814-6.9801h-0.095v7.0099h-1.769v-10.182z"
                            fill="{{$room==50? 'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter214_d_367_2)">
                        <path
                            d="m364.5 492c-10.396-2.616-19.826-3-31.103-3-69.255 0-125.4 52.607-125.4 117.5s56.142 117.5 125.4 117.5c11.277 0 22.207-1.395 32.603-4.011"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter215_d_367_2)">
                        <path d="m443 672.5c-15.651 22.863-44.07 40.647-77 47.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter216_d_367_2)">
                        <line x1="443" x2="443" y1="644" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter217_d_367_2)">
                        <line x1="586" x2="442" y1="745" y2="745" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter218_d_367_2)">
                        <line x1="287" x2="287" y1="469" y2="498" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter219_d_367_2)">
                        <line x1="279" x2="286" y1="448" y2="448" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter220_d_367_2)">
                        <path d="m255 371v25" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter221_d_367_2)">
                        <line x1="254" x2="122" y1="395" y2="395" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter222_d_367_2)">
                        <line x1="123" x2="123" y1="354" y2="450" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter223_d_367_2)">
                        <path d="M259 449.5H122.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter224_d_367_2)">
                        <line x1="8" x2="62" y1="383" y2="383" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter225_d_367_2)">
                        <path d="m63 382v70" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter226_d_367_2)">
                        <path d="m83 449.5h40" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter227_d_367_2)">
                        <line x1="62" x2="8" y1="472" y2="472" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter228_d_367_2)">
                        <path d="m8 483h54.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter229_d_367_2)">
                        <path d="m62.458 484h-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter230_d_367_2)">
                        <path d="m43 484.5c1.8306 12.565 4.4534 16.443 19.5 18.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter231_d_367_2)">
                        <line x1="63" x2="63" y1="504" y2="594" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter232_d_367_2)">
                        <line x1="8" x2="160" y1="593" y2="593" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter233_d_367_2)">
                        <path d="m170.99 676c-7.424-19.41-11.491-40.48-11.491-62.5 0-41.905 14.729-80.37 39.292-110.5"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter234_d_367_2)">
                        <line x1="62" x2="159" y1="503" y2="503" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter235_d_367_2)">
                        <path d="m180 503h19.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter236_d_367_2)">
                        <line x1="7" x2="160" y1="702" y2="702" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter237_d_367_2)">
                        <path d="m100 721v121" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter238_d_367_2)">
                        <line x1="5.4682" x2="42.468" y1="802.64" y2="842.64" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter239_d_367_2)">
                        <line x1="41" x2="287" y1="842" y2="842" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter240_d_367_2)">
                        <line x1="288" x2="288" y1="716" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <line x1="193" x2="193" y1="748" y2="844"
                        filter="url(#filter241_d_367_2)" stroke="#000" stroke-width="2" />
                    <g filter="url(#filter242_d_367_2)">
                        <path d="m346 753c1.831 12.565 5.412 19.942 20.458 22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter243_d_367_2)">
                        <path d="m386 753c-1.831 12.565-4.953 19.942-20 22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter244_d_367_2)">
                        <line x1="367" x2="367" y1="757" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter245_d_367_2)">
                        <line x1="99" x2="172" y1="747" y2="747" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter246_d_367_2)">
                        <line x1="212" x2="287" y1="747" y2="747" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter247_d_367_2)">
                        <line x1="287" x2="346" y1="754" y2="754" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter248_d_367_2)">
                        <line x1="386" x2="442" y1="754" y2="754" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter249_d_367_2)">
                        <line x1="873" x2="873" y1="394" y2="424" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter250_d_367_2)">
                        <path d="M872.5 454.5V554" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter251_d_367_2)">
                        <line x1="1503" x2="1503" y1="644" y2="684" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter252_d_367_2)">
                        <line x1="1246" x2="1299" y1="693" y2="693" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter253_d_367_2)">
                        <line x1="1303" x2="1303" y1="734" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter254_d_367_2)">
                        <line x1="1374" x2="1374" y1="734" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter255_d_367_2)">
                        <line x1="1440" x2="1440" y1="734" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter256_d_367_2)">
                        <line x1="1503" x2="1503" y1="733" y2="804" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter257_d_367_2)">
                        <line x1="1352" x2="1394" y1="733" y2="733" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter258_d_367_2)">
                        <line x1="1418" x2="1460" y1="733" y2="733" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter259_d_367_2)">
                        <line x1="1302" x2="1322" y1="733" y2="733" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter260_d_367_2)">
                        <path d="m1482 733h22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter261_d_367_2)">
                        <line x1="720" x2="720" y1="540" y2="444" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter262_d_367_2)">
                        <line x1="720" x2="765" y1="443" y2="443" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter263_d_367_2)">
                        <path
                            d="m893 406.79v-1.968l10.182 3.584v2.277l-10.182 3.59v-1.969l8.094-2.72v-0.079l-8.094-2.715zm3.992 0.065v5.369h-1.481v-5.369h1.481zm4.644 7.081h1.546v8.123h-1.546v-3.147h-8.636v-1.829h8.636v-3.147zm-8.636 9.689h10.182v1.845h-4.311v4.718h4.311v1.849h-10.182v-1.849h4.325v-4.718h-4.325v-1.845zm0 10.418h10.182v1.845h-8.636v4.484h-1.546v-6.329zm0 7.93h10.182v6.622h-1.546v-4.778h-2.765v4.435h-1.546v-4.435h-2.779v4.818h-1.546v-6.662zm8.636 8.056h1.546v8.124h-1.546v-3.147h-8.636v-1.829h8.636v-3.148zm1.546 11.535h-10.182v-1.845h10.182v1.845zm-3.436 10.712v-1.859c0.305-0.053 0.575-0.151 0.811-0.294 0.238-0.142 0.441-0.319 0.606-0.532 0.166-0.212 0.29-0.454 0.373-0.725 0.086-0.269 0.129-0.559 0.129-0.87 0-0.554-0.139-1.044-0.417-1.472-0.275-0.428-0.68-0.762-1.213-1.004-0.531-0.242-1.178-0.363-1.944-0.363-0.779 0-1.435 0.121-1.969 0.363-0.53 0.245-0.931 0.58-1.203 1.004-0.268 0.428-0.403 0.916-0.403 1.467 0 0.305 0.04 0.59 0.12 0.855 0.083 0.268 0.203 0.508 0.363 0.721 0.159 0.215 0.354 0.396 0.586 0.542 0.232 0.149 0.497 0.251 0.796 0.308l-0.01 1.859c-0.484-0.069-0.938-0.22-1.362-0.452-0.425-0.229-0.799-0.529-1.124-0.9-0.322-0.371-0.573-0.806-0.756-1.303-0.179-0.497-0.268-1.049-0.268-1.655 0-0.895 0.207-1.694 0.621-2.397 0.415-0.702 1.013-1.256 1.795-1.66s1.72-0.607 2.814-0.607c1.097 0 2.035 0.204 2.814 0.612 0.782 0.408 1.38 0.963 1.795 1.665 0.414 0.703 0.621 1.498 0.621 2.387 0 0.567-0.08 1.094-0.239 1.581s-0.392 0.921-0.701 1.302c-0.305 0.381-0.679 0.695-1.123 0.94-0.441 0.248-0.945 0.411-1.512 0.487zm0.637 7.223c0.434-0.047 0.772-0.242 1.014-0.587 0.242-0.341 0.363-0.786 0.363-1.332 0-0.385-0.058-0.715-0.174-0.99s-0.273-0.485-0.472-0.631-0.426-0.221-0.681-0.224c-0.213 0-0.397 0.048-0.552 0.144-0.156 0.1-0.289 0.234-0.398 0.403-0.106 0.169-0.196 0.356-0.269 0.562-0.072 0.205-0.134 0.412-0.183 0.621l-0.239 0.955c-0.09 0.384-0.211 0.754-0.363 1.108-0.152 0.358-0.345 0.678-0.577 0.96-0.232 0.285-0.512 0.51-0.84 0.676s-0.713 0.249-1.153 0.249c-0.597 0-1.122-0.153-1.576-0.458-0.451-0.305-0.804-0.745-1.059-1.322-0.252-0.574-0.378-1.268-0.378-2.083 0-0.792 0.123-1.48 0.368-2.063 0.245-0.58 0.603-1.035 1.074-1.363 0.47-0.324 1.044-0.5 1.72-0.527v1.815c-0.355 0.026-0.65 0.136-0.885 0.328s-0.411 0.443-0.527 0.751c-0.116 0.311-0.174 0.659-0.174 1.044 0 0.401 0.06 0.752 0.179 1.054 0.122 0.305 0.292 0.543 0.507 0.716 0.219 0.172 0.474 0.26 0.766 0.263 0.265-3e-3 0.483-0.081 0.656-0.233 0.175-0.153 0.321-0.367 0.437-0.642 0.12-0.272 0.226-0.59 0.319-0.954l0.298-1.159c0.215-0.838 0.542-1.501 0.979-1.988 0.441-0.484 1.026-0.726 1.755-0.726 0.6 0 1.125 0.162 1.576 0.487 0.451 0.328 0.801 0.774 1.049 1.337 0.252 0.564 0.378 1.202 0.378 1.914 0 0.723-0.126 1.356-0.378 1.9-0.248 0.546-0.595 0.976-1.039 1.287-0.441 0.312-0.948 0.473-1.521 0.482v-1.774zm-2.292 16.129c-1.097 0-2.037-0.206-2.819-0.617-0.779-0.407-1.375-0.964-1.79-1.67-0.414-0.703-0.621-1.5-0.621-2.392 0-0.891 0.207-1.69 0.621-2.396 0.418-0.703 1.016-1.259 1.795-1.67 0.782-0.408 1.72-0.612 2.814-0.612 1.097 0 2.035 0.204 2.814 0.612 0.782 0.411 1.38 0.967 1.795 1.67 0.414 0.706 0.621 1.505 0.621 2.396 0 0.892-0.207 1.689-0.621 2.392-0.415 0.706-1.013 1.263-1.795 1.67-0.779 0.411-1.717 0.617-2.814 0.617zm0-1.855c0.772 0 1.423-0.121 1.954-0.363 0.533-0.238 0.936-0.57 1.208-0.994 0.275-0.424 0.412-0.913 0.412-1.467 0-0.553-0.137-1.042-0.412-1.466-0.272-0.424-0.675-0.758-1.208-0.999-0.531-0.239-1.182-0.358-1.954-0.358s-1.425 0.119-1.959 0.358c-0.53 0.241-0.933 0.575-1.208 0.999-0.272 0.424-0.408 0.913-0.408 1.466 0 0.554 0.136 1.043 0.408 1.467 0.275 0.424 0.678 0.756 1.208 0.994 0.534 0.242 1.187 0.363 1.959 0.363zm-5.091 3.598h10.182v6.523h-1.546v-4.678h-2.765v4.231h-1.546v-4.231h-4.325v-1.845zm0 8.204h10.182v6.522h-1.546v-4.678h-2.765v4.231h-1.546v-4.231h-4.325v-1.844zm10.182 10.047h-10.182v-1.844h10.182v1.844zm-3.436 10.713v-1.86c0.305-0.053 0.575-0.15 0.811-0.293 0.238-0.142 0.441-0.32 0.606-0.532 0.166-0.212 0.29-0.454 0.373-0.726 0.086-0.268 0.129-0.558 0.129-0.87 0-0.553-0.139-1.044-0.417-1.471-0.275-0.428-0.68-0.763-1.213-1.005-0.531-0.242-1.178-0.363-1.944-0.363-0.779 0-1.435 0.121-1.969 0.363-0.53 0.246-0.931 0.58-1.203 1.005-0.268 0.427-0.403 0.916-0.403 1.466 0 0.305 0.04 0.59 0.12 0.855 0.083 0.269 0.203 0.509 0.363 0.721 0.159 0.216 0.354 0.396 0.586 0.542 0.232 0.149 0.497 0.252 0.796 0.308l-0.01 1.86c-0.484-0.07-0.938-0.221-1.362-0.453-0.425-0.228-0.799-0.528-1.124-0.9-0.322-0.371-0.573-0.805-0.756-1.302-0.179-0.497-0.268-1.049-0.268-1.656 0-0.895 0.207-1.693 0.621-2.396 0.415-0.703 1.013-1.256 1.795-1.66 0.782-0.405 1.72-0.607 2.814-0.607 1.097 0 2.035 0.204 2.814 0.612 0.782 0.407 1.38 0.962 1.795 1.665 0.414 0.703 0.621 1.498 0.621 2.386 0 0.567-0.08 1.094-0.239 1.581-0.159 0.488-0.392 0.922-0.701 1.303-0.305 0.381-0.679 0.694-1.123 0.94-0.441 0.248-0.945 0.41-1.512 0.487zm-6.746 1.689h10.182v6.622h-1.546v-4.778h-2.765v4.435h-1.546v-4.435h-2.779v4.818h-1.546v-6.662z"
                            fill="#000" />
                    </g>
                    <g id="Room-321-Text" filter="url(#filter264_d_367_2)">
                        <path
                            d="m17.259 374v-10.182h3.8182c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2916-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6679-0.204-1.1286-0.204h-1.6903v8.641h-1.8445zm5.26-4.614 2.5206 4.614h-2.0583l-2.4758-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6165 2.819-0.4076 0.779-0.9644 1.375-1.6704 1.79-0.7027 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6886 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6704 1.795 0.411 0.779 0.6165 1.717 0.6165 2.814zm-1.8544 0c0-0.772-0.121-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4667 0.412c-0.4242 0.272-0.7573 0.675-0.9993 1.208-0.2386 0.531-0.3579 1.182-0.3579 1.954s0.1193 1.425 0.3579 1.959c0.242 0.53 0.5751 0.933 0.9993 1.208 0.4243 0.272 0.9132 0.408 1.4667 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.2419-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6165 2.819-0.4076 0.779-0.9644 1.375-1.6704 1.79-0.7027 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3964-0.621-0.7026-0.418-1.2594-1.016-1.6704-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6704-1.795 0.706-0.414 1.5048-0.621 2.3964-0.621 0.8915 0 1.6886 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6704 1.795 0.411 0.779 0.6165 1.717 0.6165 2.814zm-1.8544 0c0-0.772-0.121-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4667 0.412c-0.4242 0.272-0.7573 0.675-0.9993 1.208-0.2386 0.531-0.3579 1.182-0.3579 1.954s0.1193 1.425 0.3579 1.959c0.242 0.53 0.5751 0.933 0.9993 1.208 0.4243 0.272 0.9132 0.408 1.4667 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.2419-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0227 7.378h0.1194l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0945l-2.8139 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182zm19.715 10.321c-0.716 0-1.3523-0.122-1.9091-0.368-0.5535-0.245-0.991-0.586-1.3125-1.024-0.3215-0.437-0.4922-0.943-0.5121-1.516h1.8693c0.0166 0.275 0.1077 0.515 0.2734 0.721 0.1658 0.202 0.3862 0.359 0.6613 0.472s0.5833 0.169 0.9247 0.169c0.3646 0 0.6877-0.063 0.9694-0.189 0.2818-0.129 0.5022-0.308 0.6613-0.537s0.2369-0.492 0.2336-0.79c0.0033-0.309-0.0762-0.58-0.2386-0.816-0.1624-0.235-0.3977-0.419-0.706-0.551-0.3049-0.133-0.6728-0.199-1.1037-0.199h-0.8998v-1.422h0.8998c0.3547 0 0.6646-0.062 0.9297-0.184 0.2685-0.123 0.4789-0.295 0.6314-0.517 0.1525-0.226 0.227-0.486 0.2237-0.781 0.0033-0.288-0.0613-0.538-0.1939-0.75-0.1292-0.216-0.3132-0.383-0.5518-0.503-0.2353-0.119-0.5121-0.179-0.8303-0.179-0.3115 0-0.5999 0.057-0.865 0.169-0.2652 0.113-0.4789 0.274-0.6414 0.483-0.1624 0.205-0.2485 0.45-0.2585 0.735h-1.7748c0.0132-0.57 0.1773-1.07 0.4922-1.501 0.3181-0.434 0.7424-0.772 1.2727-1.014 0.5303-0.245 1.1252-0.368 1.7848-0.368 0.6794 0 1.2694 0.128 1.7699 0.383 0.5038 0.252 0.8932 0.591 1.1683 1.019s0.4126 0.9 0.4126 1.417c0.0033 0.573-0.1657 1.054-0.5071 1.442-0.338 0.387-0.7822 0.641-1.3324 0.76v0.08c0.716 0.099 1.2645 0.364 1.6456 0.795 0.3845 0.428 0.5751 0.96 0.5718 1.596 0 0.57-0.1624 1.081-0.4872 1.531-0.3215 0.448-0.7657 0.799-1.3324 1.054-0.5635 0.256-1.2098 0.383-1.9389 0.383zm5.465-0.139v-1.332l3.5348-3.466c0.338-0.341 0.6198-0.644 0.8451-0.909 0.2254-0.266 0.3945-0.522 0.5071-0.771 0.1127-0.249 0.1691-0.514 0.1691-0.795 0-0.322-0.0729-0.597-0.2188-0.826-0.1458-0.232-0.3463-0.411-0.6015-0.537s-0.5453-0.189-0.8701-0.189c-0.3347 0-0.628 0.07-0.8799 0.209-0.2519 0.136-0.4475 0.33-0.5867 0.582-0.1359 0.252-0.2038 0.552-0.2038 0.9h-1.755c0-0.647 0.1475-1.208 0.4425-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.5204-0.262 1.117-0.393 1.7898-0.393 0.6828 0 1.2827 0.128 1.7997 0.383 0.5171 0.255 0.9181 0.605 1.2031 1.049 0.2884 0.444 0.4326 0.951 0.4326 1.521 0 0.381-0.073 0.756-0.2188 1.124s-0.4027 0.775-0.7706 1.223c-0.3646 0.447-0.8766 0.989-1.5362 1.625l-1.755 1.785v0.07h4.4347v1.541h-6.9801zm12.837-10.182v10.182h-1.8444v-8.387h-0.0597l-2.3814 1.521v-1.69l2.5305-1.626h1.755z"
                            fill="{{$room==52? 'white':'#000'}}" />
                    </g>
                    <g id="Room-320-Text" filter="url(#filter265_d_367_2)">
                        <path
                            d="m15.004 404v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0228 7.378h0.1193l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0944l-2.814 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182zm-27.234 27.321c-0.7159 0-1.3522-0.122-1.909-0.368-0.5535-0.245-0.991-0.586-1.3125-1.024-0.3215-0.437-0.4922-0.943-0.5121-1.516h1.8693c0.0166 0.275 0.1077 0.515 0.2734 0.721 0.1658 0.202 0.3862 0.359 0.6613 0.472s0.5833 0.169 0.9247 0.169c0.3646 0 0.6877-0.063 0.9694-0.189 0.2818-0.129 0.5022-0.308 0.6613-0.537s0.2369-0.492 0.2336-0.79c0.0033-0.309-0.0762-0.58-0.2386-0.816-0.1624-0.235-0.3977-0.419-0.706-0.551-0.3049-0.133-0.6728-0.199-1.1037-0.199h-0.8998v-1.422h0.8998c0.3547 0 0.6646-0.062 0.9297-0.184 0.2685-0.123 0.4789-0.295 0.6314-0.517 0.1525-0.226 0.227-0.486 0.2237-0.781 0.0033-0.288-0.0613-0.538-0.1939-0.75-0.1292-0.216-0.3132-0.383-0.5518-0.503-0.2353-0.119-0.5121-0.179-0.8303-0.179-0.3115 0-0.5999 0.057-0.865 0.169-0.2652 0.113-0.479 0.274-0.6414 0.483-0.1624 0.205-0.2485 0.45-0.2585 0.735h-1.7748c0.0132-0.57 0.1773-1.07 0.4921-1.501 0.3182-0.434 0.7425-0.772 1.2728-1.014 0.5303-0.245 1.1252-0.368 1.7848-0.368 0.6794 0 1.2694 0.128 1.7699 0.383 0.5038 0.252 0.8932 0.591 1.1683 1.019s0.4126 0.9 0.4126 1.417c0.0033 0.573-0.1657 1.054-0.5071 1.442-0.338 0.387-0.7822 0.641-1.3324 0.76v0.08c0.716 0.099 1.2645 0.364 1.6456 0.795 0.3845 0.428 0.5751 0.96 0.5718 1.596 0 0.57-0.1624 1.081-0.4872 1.531-0.3215 0.448-0.7657 0.799-1.3324 1.054-0.5635 0.256-1.2098 0.383-1.939 0.383zm5.4651-0.139v-1.332l3.5348-3.466c0.338-0.341 0.6198-0.644 0.8451-0.909 0.2254-0.266 0.3945-0.522 0.5071-0.771 0.1127-0.249 0.1691-0.514 0.1691-0.795 0-0.322-0.0729-0.597-0.2188-0.826-0.1458-0.232-0.3463-0.411-0.6015-0.537s-0.5453-0.189-0.8701-0.189c-0.3347 0-0.628 0.07-0.8799 0.209-0.2519 0.136-0.4475 0.33-0.5867 0.582-0.1359 0.252-0.2038 0.552-0.2038 0.9h-1.755c0-0.647 0.1475-1.208 0.4425-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.5204-0.262 1.117-0.393 1.7898-0.393 0.6828 0 1.2827 0.128 1.7997 0.383 0.5171 0.255 0.9181 0.605 1.2031 1.049 0.2884 0.444 0.4326 0.951 0.4326 1.521 0 0.381-0.073 0.756-0.2188 1.124s-0.4027 0.775-0.7706 1.223c-0.3646 0.447-0.8766 0.989-1.5362 1.625l-1.755 1.785v0.07h4.4347v1.541h-6.9801zm12.459 0.194c-0.8187 0-1.5213-0.207-2.108-0.622-0.5833-0.417-1.0324-1.019-1.3473-1.804-0.3115-0.789-0.4673-1.739-0.4673-2.849 0.0033-1.11 0.1607-2.055 0.4723-2.834 0.3149-0.782 0.764-1.379 1.3473-1.79 0.5866-0.411 1.2876-0.616 2.103-0.616 0.8153 0 1.5163 0.205 2.103 0.616 0.5866 0.411 1.0357 1.008 1.3473 1.79 0.3148 0.782 0.4723 1.727 0.4723 2.834 0 1.114-0.1575 2.065-0.4723 2.854-0.3116 0.785-0.7607 1.385-1.3473 1.799-0.5834 0.415-1.2844 0.622-2.103 0.622zm0-1.556c0.6363 0 1.1385-0.313 1.5064-0.94 0.3712-0.63 0.5568-1.556 0.5568-2.779 0-0.809-0.0845-1.488-0.2536-2.038-0.169-0.551-0.4076-0.965-0.7159-1.243-0.3082-0.282-0.6728-0.423-1.0937-0.423-0.6331 0-1.1335 0.315-1.5014 0.945-0.3679 0.626-0.5535 1.546-0.5569 2.759-0.0033 0.812 0.0779 1.495 0.2436 2.048 0.1691 0.554 0.4077 0.971 0.716 1.253 0.3082 0.279 0.6744 0.418 1.0987 0.418z"
                            fill="{{$room==53? 'white':'#000'}}" />
                    </g>
                    <g id="Room-319-Text" filter="url(#filter266_d_367_2)">
                        <path
                            d="m15.004 519v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0228 7.378h0.1193l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0944l-2.814 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182zm-27.234 27.321c-0.7159 0-1.3522-0.122-1.909-0.368-0.5535-0.245-0.991-0.586-1.3125-1.024-0.3215-0.437-0.4922-0.943-0.5121-1.516h1.8693c0.0166 0.275 0.1077 0.515 0.2734 0.721 0.1658 0.202 0.3862 0.359 0.6613 0.472s0.5833 0.169 0.9247 0.169c0.3646 0 0.6877-0.063 0.9694-0.189 0.2818-0.129 0.5022-0.308 0.6613-0.537s0.2369-0.492 0.2336-0.79c0.0033-0.309-0.0762-0.58-0.2386-0.816-0.1624-0.235-0.3977-0.419-0.706-0.551-0.3049-0.133-0.6728-0.199-1.1037-0.199h-0.8998v-1.422h0.8998c0.3547 0 0.6646-0.062 0.9297-0.184 0.2685-0.123 0.4789-0.295 0.6314-0.517 0.1525-0.226 0.227-0.486 0.2237-0.781 0.0033-0.288-0.0613-0.538-0.1939-0.75-0.1292-0.216-0.3132-0.383-0.5518-0.503-0.2353-0.119-0.5121-0.179-0.8303-0.179-0.3115 0-0.5999 0.057-0.865 0.169-0.2652 0.113-0.479 0.274-0.6414 0.483-0.1624 0.205-0.2485 0.45-0.2585 0.735h-1.7748c0.0132-0.57 0.1773-1.07 0.4921-1.501 0.3182-0.434 0.7425-0.772 1.2728-1.014 0.5303-0.245 1.1252-0.368 1.7848-0.368 0.6794 0 1.2694 0.128 1.7699 0.383 0.5038 0.252 0.8932 0.591 1.1683 1.019s0.4126 0.9 0.4126 1.417c0.0033 0.573-0.1657 1.054-0.5071 1.442-0.338 0.387-0.7822 0.641-1.3324 0.76v0.08c0.716 0.099 1.2645 0.364 1.6456 0.795 0.3845 0.428 0.5751 0.96 0.5718 1.596 0 0.57-0.1624 1.081-0.4872 1.531-0.3215 0.448-0.7657 0.799-1.3324 1.054-0.5635 0.256-1.2098 0.383-1.939 0.383zm9.6064-10.321v10.182h-1.8445v-8.387h-0.0596l-2.3814 1.521v-1.69l2.5305-1.626h1.755zm6.12-0.139c0.4872 3e-3 0.9612 0.089 1.4219 0.259 0.464 0.165 0.8816 0.437 1.2528 0.815 0.3713 0.374 0.6662 0.876 0.885 1.506 0.2187 0.63 0.3281 1.409 0.3281 2.337 0.0033 0.875-0.0895 1.657-0.2784 2.346-0.1856 0.687-0.4524 1.267-0.8004 1.741-0.348 0.473-0.7673 0.835-1.2578 1.083-0.4906 0.249-1.0424 0.373-1.6556 0.373-0.643 0-1.213-0.126-1.7102-0.378-0.4938-0.252-0.8932-0.596-1.1982-1.034-0.3049-0.437-0.4921-0.938-0.5617-1.501h1.8146c0.0928 0.404 0.2817 0.726 0.5668 0.964 0.2883 0.236 0.6512 0.353 1.0887 0.353 0.706 0 1.2496-0.306 1.6307-0.919 0.3812-0.614 0.5717-1.465 0.5717-2.556h-0.0696c-0.1624 0.292-0.3728 0.544-0.6313 0.756-0.2586 0.209-0.5519 0.369-0.88 0.482-0.3248 0.113-0.6695 0.169-1.0341 0.169-0.5966 0-1.1335-0.142-1.6108-0.427-0.474-0.285-0.8501-0.677-1.1286-1.174-0.2751-0.497-0.4143-1.065-0.4176-1.705 0-0.663 0.1525-1.258 0.4574-1.785 0.3083-0.53 0.7375-0.948 1.2877-1.253 0.5501-0.308 1.1931-0.459 1.9289-0.452zm5e-3 1.491c-0.3579 0-0.6811 0.088-0.9695 0.264-0.285 0.172-0.5104 0.408-0.6761 0.706-0.1624 0.295-0.2436 0.625-0.2436 0.989 0.0033 0.362 0.0845 0.69 0.2436 0.985 0.1624 0.295 0.3828 0.528 0.6612 0.701 0.2818 0.172 0.6033 0.258 0.9645 0.258 0.2685 0 0.5187-0.051 0.7507-0.154s0.4342-0.245 0.6066-0.428c0.1756-0.185 0.3115-0.396 0.4076-0.631 0.0995-0.235 0.1475-0.484 0.1442-0.746 0-0.348-0.0828-0.669-0.2486-0.964-0.1624-0.295-0.3861-0.532-0.6711-0.711-0.2818-0.179-0.6049-0.269-0.9695-0.269z"
                            fill="{{$room==55? 'white':'#000'}}" />
                    </g>
                    <g id="Room-322-Text" filter="url(#filter267_d_367_2)">
                        <path
                            d="m73.004 529v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.6704 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.7064 0.415 1.2624 1.013 1.6704 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.3628-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.2418-0.534 0.3628-1.187 0.3628-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.493-0.943-0.512-1.516h1.869c0.016 0.275 0.108 0.515 0.273 0.721 0.166 0.202 0.386 0.359 0.661 0.472 0.276 0.113 0.584 0.169 0.925 0.169 0.365 0 0.688-0.063 0.97-0.189 0.281-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.077-0.58-0.239-0.816-0.162-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.665-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.153-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.311 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.775c0.014-0.57 0.178-1.07 0.492-1.501 0.319-0.434 0.743-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.333 0.76v0.08c0.716 0.099 1.265 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.572 1.596 0 0.57-0.163 1.081-0.488 1.531-0.321 0.448-0.765 0.799-1.332 1.054-0.563 0.256-1.21 0.383-1.939 0.383zm5.465-0.139v-1.332l3.535-3.466c0.338-0.341 0.62-0.644 0.845-0.909 0.226-0.266 0.395-0.522 0.507-0.771 0.113-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.218-0.826-0.146-0.232-0.347-0.411-0.602-0.537s-0.545-0.189-0.87-0.189c-0.335 0-0.628 0.07-0.88 0.209-0.252 0.136-0.447 0.33-0.587 0.582-0.136 0.252-0.203 0.552-0.203 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.52-0.262 1.117-0.393 1.79-0.393 0.683 0 1.282 0.128 1.8 0.383 0.517 0.255 0.918 0.605 1.203 1.049 0.288 0.444 0.432 0.951 0.432 1.521 0 0.381-0.073 0.756-0.219 1.124-0.145 0.368-0.402 0.775-0.77 1.223-0.365 0.447-0.877 0.989-1.536 1.625l-1.755 1.785v0.07h4.434v1.541h-6.98zm8.696 0v-1.332l3.534-3.466c0.338-0.341 0.62-0.644 0.845-0.909 0.226-0.266 0.395-0.522 0.508-0.771 0.112-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.219-0.826-0.146-0.232-0.346-0.411-0.602-0.537-0.255-0.126-0.545-0.189-0.87-0.189-0.334 0-0.628 0.07-0.88 0.209-0.252 0.136-0.447 0.33-0.586 0.582-0.136 0.252-0.204 0.552-0.204 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.521-0.262 1.117-0.393 1.79-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.288 0.444 0.432 0.951 0.432 1.521 0 0.381-0.072 0.756-0.218 1.124s-0.403 0.775-0.771 1.223c-0.364 0.447-0.877 0.989-1.536 1.625l-1.755 1.785v0.07h4.435v1.541h-6.98zm-59.131 9.617c-0.0464-0.434-0.2419-0.772-0.5866-1.014-0.3414-0.242-0.7855-0.363-1.3324-0.363-0.3845 0-0.7142 0.058-0.9893 0.174s-0.4856 0.273-0.6314 0.472c-0.1459 0.199-0.2204 0.426-0.2238 0.681 0 0.213 0.0481 0.397 0.1442 0.552 0.0995 0.156 0.2337 0.289 0.4027 0.398 0.1691 0.106 0.3563 0.196 0.5618 0.269 0.2055 0.072 0.4127 0.134 0.6215 0.183l0.9545 0.239c0.3845 0.09 0.754 0.211 1.1087 0.363 0.3579 0.152 0.6778 0.345 0.9595 0.577 0.285 0.232 0.5104 0.512 0.6761 0.84s0.2486 0.713 0.2486 1.153c0 0.597-0.1525 1.122-0.4574 1.576-0.3049 0.451-0.7457 0.804-1.3224 1.059-0.5734 0.252-1.2678 0.378-2.0831 0.378-0.7922 0-1.4799-0.123-2.0632-0.368-0.5801-0.245-1.0341-0.603-1.3622-1.074-0.3249-0.47-0.5005-1.044-0.527-1.72h1.8146c0.0265 0.355 0.1359 0.65 0.3281 0.885 0.1923 0.235 0.4425 0.411 0.7507 0.527 0.3116 0.116 0.6596 0.174 1.0441 0.174 0.401 0 0.7523-0.06 1.0539-0.179 0.305-0.122 0.5436-0.292 0.716-0.507 0.1723-0.219 0.2601-0.474 0.2634-0.766-0.0033-0.265-0.0812-0.483-0.2336-0.656-0.1525-0.175-0.3663-0.321-0.6414-0.437-0.2717-0.12-0.5899-0.226-0.9545-0.319l-1.1584-0.298c-0.8385-0.215-1.5014-0.542-1.9886-0.979-0.4839-0.441-0.7259-1.026-0.7259-1.755 0-0.6 0.1624-1.125 0.4872-1.576 0.3282-0.451 0.774-0.801 1.3374-1.049 0.5635-0.252 1.2015-0.378 1.9141-0.378 0.7225 0 1.3556 0.126 1.8991 0.378 0.5469 0.248 0.9761 0.595 1.2877 1.039 0.3115 0.441 0.4723 0.948 0.4822 1.521h-1.7749zm3.111-1.253v-1.546h8.1236v1.546h-3.147v8.636h-1.8296v-8.636h-3.147zm18.336 3.545c0 1.097-0.2055 2.037-0.6165 2.819-0.4077 0.779-0.9645 1.375-1.6704 1.79-0.7027 0.414-1.4998 0.621-2.3914 0.621s-1.6903-0.207-2.3963-0.621c-0.7026-0.418-1.2595-1.016-1.6704-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.4109-0.782 0.9678-1.38 1.6704-1.795 0.706-0.414 1.5047-0.621 2.3963-0.621s1.6887 0.207 2.3914 0.621c0.7059 0.415 1.2627 1.013 1.6704 1.795 0.411 0.779 0.6165 1.717 0.6165 2.814zm-1.8544 0c0-0.772-0.121-1.423-0.3629-1.954-0.2387-0.533-0.5701-0.936-0.9944-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4242 0.272-0.7573 0.675-0.9993 1.208-0.2386 0.531-0.3579 1.182-0.3579 1.954s0.1193 1.425 0.3579 1.959c0.242 0.53 0.5751 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4243-0.275 0.7557-0.678 0.9944-1.208 0.2419-0.534 0.3629-1.187 0.3629-1.959zm12.313-1.655h-1.859c-0.053-0.305-0.151-0.575-0.294-0.811-0.142-0.238-0.319-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.725-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.045 0.139-1.472 0.417-0.428 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.427 0.268 0.916 0.403 1.467 0.403 0.304 0 0.59-0.04 0.855-0.12 0.268-0.083 0.508-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.541-0.586 0.15-0.232 0.252-0.497 0.309-0.796l1.859 0.01c-0.07 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.806 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.397-0.621-0.702-0.415-1.256-1.013-1.66-1.795s-0.607-1.72-0.607-2.814c0-1.097 0.204-2.035 0.612-2.814 0.408-0.782 0.963-1.38 1.665-1.795 0.703-0.414 1.498-0.621 2.387-0.621 0.566 0 1.093 0.08 1.581 0.239 0.487 0.159 0.921 0.392 1.302 0.701 0.381 0.305 0.695 0.679 0.94 1.123 0.248 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h1.845v4.678h0.124l3.972-4.678h2.252l-3.937 4.569 3.972 5.613h-2.217l-3.038-4.365-1.128 1.332v3.033h-1.845zm-39.129 17v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.6704 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.7064 0.415 1.2624 1.013 1.6704 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.3628-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.2418-0.534 0.3628-1.187 0.3628-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182z"
                            fill="{{$room==56? 'white':'#000'}}" />
                    </g>
                    <g id="Room-318-Text" filter="url(#filter268_d_367_2)">
                        <path
                            d="m15.004 616v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0228 7.378h0.1193l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0944l-2.814 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182zm19.715 10.321c-0.7159 0-1.3523-0.122-1.9091-0.368-0.5535-0.245-0.991-0.586-1.3125-1.024-0.3215-0.437-0.4922-0.943-0.5121-1.516h1.8693c0.0166 0.275 0.1077 0.515 0.2735 0.721 0.1657 0.202 0.3861 0.359 0.6612 0.472s0.5833 0.169 0.9247 0.169c0.3646 0 0.6877-0.063 0.9695-0.189 0.2817-0.129 0.5021-0.308 0.6612-0.537s0.237-0.492 0.2336-0.79c0.0034-0.309-0.0762-0.58-0.2386-0.816-0.1624-0.235-0.3977-0.419-0.706-0.551-0.3049-0.133-0.6728-0.199-1.1037-0.199h-0.8998v-1.422h0.8998c0.3547 0 0.6646-0.062 0.9297-0.184 0.2685-0.123 0.479-0.295 0.6314-0.517 0.1525-0.226 0.2271-0.486 0.2237-0.781 0.0034-0.288-0.0613-0.538-0.1938-0.75-0.1293-0.216-0.3133-0.383-0.5519-0.503-0.2353-0.119-0.5121-0.179-0.8302-0.179-0.3116 0-0.6 0.057-0.8651 0.169-0.2652 0.113-0.4789 0.274-0.6413 0.483-0.1624 0.205-0.2486 0.45-0.2586 0.735h-1.7748c0.0132-0.57 0.1773-1.07 0.4922-1.501 0.3182-0.434 0.7424-0.772 1.2727-1.014 0.5303-0.245 1.1252-0.368 1.7848-0.368 0.6794 0 1.2694 0.128 1.7699 0.383 0.5038 0.252 0.8932 0.591 1.1683 1.019s0.4126 0.9 0.4126 1.417c0.0034 0.573-0.1657 1.054-0.5071 1.442-0.338 0.387-0.7821 0.641-1.3323 0.76v0.08c0.7159 0.099 1.2644 0.364 1.6456 0.795 0.3844 0.428 0.575 0.96 0.5717 1.596 0 0.57-0.1624 1.081-0.4872 1.531-0.3215 0.448-0.7657 0.799-1.3324 1.054-0.5635 0.256-1.2098 0.383-1.9389 0.383zm9.6063-10.321v10.182h-1.8444v-8.387h-0.0597l-2.3814 1.521v-1.69l2.5306-1.626h1.7549zm6.2046 10.321c-0.7391 0-1.3954-0.124-1.9688-0.373-0.5701-0.248-1.0175-0.588-1.3423-1.019-0.3215-0.434-0.4806-0.926-0.4773-1.476-0.0033-0.428 0.0895-0.821 0.2784-1.179s0.4442-0.656 0.7657-0.895c0.3248-0.242 0.686-0.396 1.0838-0.462v-0.07c-0.5237-0.116-0.948-0.382-1.2728-0.8-0.3215-0.421-0.4806-0.906-0.4772-1.457-0.0034-0.523 0.1425-0.991 0.4375-1.402 0.2949-0.411 0.6993-0.734 1.213-0.969 0.5138-0.239 1.1004-0.358 1.76-0.358 0.6529 0 1.2346 0.119 1.745 0.358 0.5137 0.235 0.9181 0.558 1.2131 0.969 0.2983 0.411 0.4474 0.879 0.4474 1.402 0 0.551-0.1641 1.036-0.4922 1.457-0.3248 0.418-0.7441 0.684-1.2578 0.8v0.07c0.3977 0.066 0.7557 0.22 1.0739 0.462 0.3215 0.239 0.5767 0.537 0.7656 0.895 0.1922 0.358 0.2884 0.751 0.2884 1.179 0 0.55-0.1625 1.042-0.4873 1.476-0.3248 0.431-0.7722 0.771-1.3423 1.019-0.5668 0.249-1.218 0.373-1.9538 0.373zm0-1.422c0.3811 0 0.7126-0.064 0.9943-0.194 0.2817-0.132 0.5005-0.318 0.6562-0.556 0.1558-0.239 0.2354-0.514 0.2387-0.826-0.0033-0.324-0.0879-0.611-0.2536-0.86-0.1624-0.252-0.3861-0.449-0.6711-0.591-0.2818-0.143-0.6033-0.214-0.9645-0.214-0.3646 0-0.6894 0.071-0.9745 0.214-0.285 0.142-0.5104 0.339-0.6761 0.591-0.1624 0.249-0.2419 0.536-0.2386 0.86-0.0033 0.312 0.0729 0.587 0.2287 0.826 0.1557 0.235 0.3745 0.419 0.6562 0.551 0.285 0.133 0.6198 0.199 1.0043 0.199zm0-4.638c0.3115 0 0.5866-0.063 0.8253-0.189 0.2419-0.126 0.4325-0.302 0.5717-0.527s0.2105-0.486 0.2138-0.781c-0.0033-0.291-0.073-0.546-0.2088-0.765-0.1359-0.222-0.3249-0.393-0.5668-0.512-0.242-0.123-0.5204-0.184-0.8352-0.184-0.3215 0-0.6049 0.061-0.8502 0.184-0.2419 0.119-0.4308 0.29-0.5667 0.512-0.1326 0.219-0.1972 0.474-0.1939 0.765-0.0033 0.295 0.0629 0.556 0.1988 0.781 0.1392 0.222 0.3298 0.398 0.5718 0.527 0.2452 0.126 0.5253 0.189 0.8402 0.189zm-57.6 16.175h-1.8594c-0.053-0.305-0.1508-0.575-0.2933-0.811-0.1426-0.238-0.3199-0.441-0.532-0.606-0.2121-0.166-0.4541-0.29-0.7259-0.373-0.2684-0.086-0.5584-0.129-0.87-0.129-0.5535 0-1.044 0.139-1.4716 0.417-0.4275 0.275-0.7623 0.68-1.0042 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.2452 0.53 0.58 0.931 1.0042 1.203 0.4276 0.268 0.9165 0.403 1.4666 0.403 0.305 0 0.59-0.04 0.8552-0.12 0.2684-0.083 0.5087-0.203 0.7208-0.363 0.2155-0.159 0.3961-0.354 0.5419-0.586 0.1492-0.232 0.2519-0.497 0.3083-0.796l1.8594 0.01c-0.0696 0.484-0.2204 0.938-0.4525 1.362-0.2286 0.425-0.5286 0.799-0.8998 1.124-0.3712 0.322-0.8054 0.573-1.3026 0.756-0.4971 0.179-1.049 0.268-1.6555 0.268-0.8949 0-1.6937-0.207-2.3963-0.621-0.7027-0.415-1.2562-1.013-1.6605-1.795-0.4044-0.782-0.6066-1.72-0.6066-2.814 0-1.097 0.2039-2.035 0.6115-2.814 0.4077-0.782 0.9629-1.38 1.6655-1.795 0.7027-0.414 1.4981-0.621 2.3864-0.621 0.5668 0 1.0937 0.08 1.581 0.239 0.4872 0.159 0.9214 0.392 1.3025 0.701 0.3812 0.305 0.6944 0.679 0.9396 1.123 0.2486 0.441 0.411 0.945 0.4873 1.512zm10.787 1.655c0 1.097-0.2055 2.037-0.6165 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4997 0.621-2.3913 0.621s-1.6903-0.207-2.3963-0.621c-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4076-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2039-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.706-0.414 1.5047-0.621 2.3963-0.621s1.6887 0.207 2.3913 0.621c0.706 0.415 1.2628 1.013 1.6705 1.795 0.411 0.779 0.6165 1.717 0.6165 2.814zm-1.8544 0c0-0.772-0.121-1.423-0.363-1.954-0.2386-0.533-0.57-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2386 0.531-0.358 1.182-0.358 1.954s0.1194 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4243-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm11.965-5.091v10.182h-1.6406l-4.7976-6.935h-0.0845v6.935h-1.8444v-10.182h1.6505l4.7926 6.941h0.0895v-6.941h1.8345zm2.0098 10.182v-10.182h6.5227v1.546h-4.6782v2.765h4.2308v1.546h-4.2308v4.325h-1.8445zm8.2031 0v-10.182h6.6222v1.546h-4.7777v2.765h4.4347v1.546h-4.4347v2.779h4.8175v1.546h-6.662zm8.5039 0v-10.182h3.8182c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2916-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2137-0.553 0.2137-0.914 0-0.362-0.0712-0.67-0.2137-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6679-0.204-1.1286-0.204h-1.6903v8.641h-1.8445zm5.26-4.614 2.5206 4.614h-2.0583l-2.4758-4.614h2.0135zm3.8455 4.614v-10.182h6.6222v1.546h-4.7777v2.765h4.4346v1.546h-4.4346v2.779h4.8174v1.546h-6.6619zm16.871-10.182v10.182h-1.6406l-4.7976-6.935h-0.0845v6.935h-1.8445v-10.182h1.6506l4.7926 6.941h0.0895v-6.941h1.8345zm10.725 3.436h-1.8595c-0.053-0.305-0.1508-0.575-0.2933-0.811-0.1426-0.238-0.3199-0.441-0.532-0.606-0.2121-0.166-0.4541-0.29-0.7258-0.373-0.2685-0.086-0.5585-0.129-0.8701-0.129-0.5535 0-1.044 0.139-1.4716 0.417-0.4275 0.275-0.7623 0.68-1.0042 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.2452 0.53 0.58 0.931 1.0042 1.203 0.4276 0.268 0.9165 0.403 1.4667 0.403 0.3049 0 0.5899-0.04 0.8551-0.12 0.2684-0.083 0.5087-0.203 0.7208-0.363 0.2155-0.159 0.3961-0.354 0.542-0.586 0.1491-0.232 0.2518-0.497 0.3082-0.796l1.8595 0.01c-0.0697 0.484-0.2205 0.938-0.4525 1.362-0.2287 0.425-0.5287 0.799-0.8999 1.124-0.3712 0.322-0.8054 0.573-1.3026 0.756-0.4971 0.179-1.049 0.268-1.6555 0.268-0.8949 0-1.6937-0.207-2.3963-0.621-0.7027-0.415-1.2562-1.013-1.6605-1.795-0.4044-0.782-0.6066-1.72-0.6066-2.814 0-1.097 0.2039-2.035 0.6116-2.814 0.4076-0.782 0.9628-1.38 1.6654-1.795 0.7027-0.414 1.4981-0.621 2.3864-0.621 0.5668 0 1.0937 0.08 1.581 0.239 0.4872 0.159 0.9214 0.392 1.3025 0.701 0.3812 0.305 0.6944 0.679 0.9397 1.123 0.2485 0.441 0.4109 0.945 0.4873 1.512zm1.689 6.746v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm-86.721 17v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0228 7.378h0.1193l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0944l-2.814 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182z"
                            fill="{{$room==57? 'white':'#000'}}" />
                    </g>
                    <g id="Room-317-Text" filter="url(#filter269_d_367_2)">
                        <path
                            d="m15.004 734v-10.182h3.8181c0.7822 0 1.4385 0.136 1.9688 0.408 0.5336 0.272 0.9363 0.653 1.2081 1.143 0.2751 0.488 0.4126 1.056 0.4126 1.706 0 0.653-0.1392 1.219-0.4176 1.7-0.2751 0.477-0.6811 0.847-1.218 1.109-0.537 0.258-1.1965 0.387-1.9787 0.387h-2.7195v-1.531h2.4709c0.4574 0 0.8319-0.063 1.1236-0.189 0.2917-0.129 0.5071-0.316 0.6463-0.562 0.1425-0.248 0.2138-0.553 0.2138-0.914 0-0.362-0.0713-0.67-0.2138-0.925-0.1425-0.259-0.3596-0.454-0.6513-0.587-0.2917-0.136-0.6678-0.204-1.1285-0.204h-1.6904v8.641h-1.8444zm5.2599-4.614 2.5206 4.614h-2.0582l-2.4759-4.614h2.0135zm12.944-0.477c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4242-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0424-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm12.696 0c0 1.097-0.2055 2.037-0.6164 2.819-0.4077 0.779-0.9645 1.375-1.6705 1.79-0.7026 0.414-1.4998 0.621-2.3913 0.621-0.8916 0-1.6904-0.207-2.3963-0.621-0.7027-0.418-1.2595-1.016-1.6705-1.795-0.4077-0.782-0.6115-1.72-0.6115-2.814 0-1.097 0.2038-2.035 0.6115-2.814 0.411-0.782 0.9678-1.38 1.6705-1.795 0.7059-0.414 1.5047-0.621 2.3963-0.621 0.8915 0 1.6887 0.207 2.3913 0.621 0.706 0.415 1.2628 1.013 1.6705 1.795 0.4109 0.779 0.6164 1.717 0.6164 2.814zm-1.8544 0c0-0.772-0.1209-1.423-0.3629-1.954-0.2386-0.533-0.5701-0.936-0.9943-1.208-0.4243-0.275-0.9131-0.412-1.4666-0.412s-1.0424 0.137-1.4666 0.412c-0.4243 0.272-0.7574 0.675-0.9993 1.208-0.2387 0.531-0.358 1.182-0.358 1.954s0.1193 1.425 0.358 1.959c0.2419 0.53 0.575 0.933 0.9993 1.208 0.4242 0.272 0.9131 0.408 1.4666 0.408s1.0423-0.136 1.4666-0.408c0.4242-0.275 0.7557-0.678 0.9943-1.208 0.242-0.534 0.3629-1.187 0.3629-1.959zm3.5982-5.091h2.2571l3.0228 7.378h0.1193l3.0227-7.378h2.2571v10.182h-1.7699v-6.995h-0.0944l-2.814 6.965h-1.3224l-2.8139-6.98h-0.0945v7.01h-1.7699v-10.182zm-27.234 27.321c-0.7159 0-1.3522-0.122-1.909-0.368-0.5535-0.245-0.991-0.586-1.3125-1.024-0.3215-0.437-0.4922-0.943-0.5121-1.516h1.8693c0.0166 0.275 0.1077 0.515 0.2734 0.721 0.1658 0.202 0.3862 0.359 0.6613 0.472s0.5833 0.169 0.9247 0.169c0.3646 0 0.6877-0.063 0.9694-0.189 0.2818-0.129 0.5022-0.308 0.6613-0.537s0.2369-0.492 0.2336-0.79c0.0033-0.309-0.0762-0.58-0.2386-0.816-0.1624-0.235-0.3977-0.419-0.706-0.551-0.3049-0.133-0.6728-0.199-1.1037-0.199h-0.8998v-1.422h0.8998c0.3547 0 0.6646-0.062 0.9297-0.184 0.2685-0.123 0.4789-0.295 0.6314-0.517 0.1525-0.226 0.227-0.486 0.2237-0.781 0.0033-0.288-0.0613-0.538-0.1939-0.75-0.1292-0.216-0.3132-0.383-0.5518-0.503-0.2353-0.119-0.5121-0.179-0.8303-0.179-0.3115 0-0.5999 0.057-0.865 0.169-0.2652 0.113-0.479 0.274-0.6414 0.483-0.1624 0.205-0.2485 0.45-0.2585 0.735h-1.7748c0.0132-0.57 0.1773-1.07 0.4921-1.501 0.3182-0.434 0.7425-0.772 1.2728-1.014 0.5303-0.245 1.1252-0.368 1.7848-0.368 0.6794 0 1.2694 0.128 1.7699 0.383 0.5038 0.252 0.8932 0.591 1.1683 1.019s0.4126 0.9 0.4126 1.417c0.0033 0.573-0.1657 1.054-0.5071 1.442-0.338 0.387-0.7822 0.641-1.3324 0.76v0.08c0.716 0.099 1.2645 0.364 1.6456 0.795 0.3845 0.428 0.5751 0.96 0.5718 1.596 0 0.57-0.1624 1.081-0.4872 1.531-0.3215 0.448-0.7657 0.799-1.3324 1.054-0.5635 0.256-1.2098 0.383-1.939 0.383zm9.6064-10.321v10.182h-1.8445v-8.387h-0.0596l-2.3814 1.521v-1.69l2.5305-1.626h1.755zm2.9581 10.182 4.3303-8.571v-0.07h-5.0263v-1.541h6.9353v1.576l-4.3252 8.606h-1.9141z"
                            fill="{{$room==58? 'white':'#000'}}" />
                    </g>
                    <g id="Room-316-Text" filter="url(#filter270_d_367_2)">
                        <path
                            d="m125.27 793v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.705 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm-17.958 27.321c-0.716 0-1.352-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.87c0.016 0.275 0.107 0.515 0.273 0.721 0.166 0.202 0.386 0.359 0.661 0.472s0.584 0.169 0.925 0.169c0.365 0 0.688-0.063 0.97-0.189 0.281-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.233-0.79c4e-3 -0.309-0.076-0.58-0.238-0.816-0.163-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.665-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.153-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.319-0.434 0.743-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.783 0.641-1.333 0.76v0.08c0.716 0.099 1.265 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.572 1.596 0 0.57-0.163 1.081-0.488 1.531-0.321 0.448-0.765 0.799-1.332 1.054-0.563 0.256-1.21 0.383-1.939 0.383zm9.606-10.321v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.314 10.321c-0.487-3e-3 -0.963-0.088-1.427-0.253-0.464-0.169-0.881-0.443-1.252-0.821-0.372-0.381-0.667-0.886-0.885-1.516-0.219-0.633-0.327-1.417-0.323-2.352 0-0.871 0.092-1.648 0.278-2.331s0.452-1.26 0.8-1.73c0.348-0.474 0.768-0.836 1.258-1.084 0.494-0.249 1.046-0.373 1.656-0.373 0.639 0 1.206 0.126 1.7 0.378 0.497 0.252 0.898 0.596 1.203 1.034 0.305 0.434 0.494 0.925 0.567 1.471h-1.815c-0.093-0.391-0.283-0.702-0.571-0.934-0.286-0.235-0.647-0.353-1.084-0.353-0.706 0-1.25 0.306-1.631 0.92-0.378 0.613-0.568 1.455-0.572 2.525h0.07c0.162-0.291 0.373-0.542 0.631-0.751 0.259-0.208 0.55-0.369 0.875-0.482 0.328-0.116 0.675-0.174 1.039-0.174 0.597 0 1.132 0.143 1.606 0.428 0.477 0.285 0.855 0.678 1.134 1.178 0.278 0.497 0.416 1.067 0.412 1.71 4e-3 0.67-0.149 1.271-0.457 1.805-0.308 0.53-0.737 0.948-1.288 1.253-0.55 0.305-1.191 0.456-1.924 0.452zm-0.01-1.491c0.362 0 0.685-0.088 0.97-0.264 0.285-0.175 0.51-0.412 0.676-0.711 0.166-0.298 0.247-0.633 0.244-1.004 3e-3 -0.365-0.077-0.694-0.239-0.989-0.159-0.295-0.38-0.529-0.661-0.701-0.282-0.173-0.604-0.259-0.965-0.259-0.268 0-0.518 0.052-0.75 0.154-0.232 0.103-0.435 0.246-0.607 0.428-0.172 0.179-0.308 0.388-0.408 0.626-0.096 0.236-0.146 0.487-0.149 0.756 3e-3 0.355 0.086 0.681 0.249 0.979 0.162 0.299 0.386 0.537 0.671 0.716s0.608 0.269 0.969 0.269z"
                            fill="{{$room==59? 'white':'#000'}}" />
                    </g>
                    <g id="Room-315-Text" filter="url(#filter271_d_367_2)">
                        <path
                            d="m217.03 793v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm-16.113 27.321c-0.715 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.165 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.924 0.169c0.365 0 0.688-0.063 0.97-0.189 0.282-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.899v-1.422h0.899c0.355 0 0.665-0.062 0.93-0.184 0.269-0.123 0.479-0.295 0.632-0.517 0.152-0.226 0.227-0.486 0.223-0.781 4e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.551-0.503-0.236-0.119-0.513-0.179-0.831-0.179-0.311 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.774c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.272-1.014 0.531-0.245 1.126-0.368 1.785-0.368 0.68 0 1.27 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019 0.276 0.428 0.413 0.9 0.413 1.417 3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.645 0.795 0.385 0.428 0.575 0.96 0.572 1.596 0 0.57-0.162 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.333 1.054-0.563 0.256-1.209 0.383-1.939 0.383zm9.607-10.321v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.125 10.321c-0.663 0-1.256-0.124-1.78-0.373-0.524-0.252-0.94-0.596-1.248-1.034-0.305-0.437-0.467-0.938-0.487-1.501h1.79c0.033 0.417 0.213 0.759 0.542 1.024 0.328 0.262 0.722 0.393 1.183 0.393 0.361 0 0.683-0.083 0.964-0.249 0.282-0.166 0.504-0.396 0.666-0.691 0.163-0.295 0.242-0.631 0.239-1.009 3e-3 -0.385-0.078-0.726-0.244-1.024-0.165-0.299-0.392-0.532-0.681-0.701-0.288-0.173-0.619-0.259-0.994-0.259-0.305-3e-3 -0.605 0.053-0.9 0.169s-0.528 0.269-0.701 0.458l-1.665-0.274 0.532-5.25h5.906v1.541h-4.38l-0.293 2.7h0.059c0.189-0.222 0.456-0.406 0.801-0.552 0.344-0.149 0.722-0.224 1.133-0.224 0.617 0 1.167 0.146 1.651 0.438 0.484 0.288 0.865 0.686 1.143 1.193 0.279 0.507 0.418 1.087 0.418 1.74 0 0.673-0.156 1.273-0.467 1.8-0.309 0.524-0.738 0.936-1.288 1.238-0.547 0.298-1.18 0.447-1.899 0.447z"
                            fill="{{$room==60? 'white':'#000'}}" />
                    </g>
                    <g id="Room-314-Text" filter="url(#filter272_d_367_2)">
                        <path
                            d="m331.44 743v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.353-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.165 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.925 0.169c0.364 0 0.687-0.063 0.969-0.189 0.282-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.397-0.419-0.706-0.551-0.305-0.133-0.672-0.199-1.103-0.199h-0.9v-1.422h0.9c0.354 0 0.664-0.062 0.929-0.184 0.269-0.123 0.479-0.295 0.632-0.517 0.152-0.226 0.227-0.486 0.223-0.781 4e-3 -0.288-0.061-0.538-0.193-0.75-0.13-0.216-0.314-0.383-0.552-0.503-0.236-0.119-0.512-0.179-0.831-0.179-0.311 0-0.599 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.162 0.205-0.248 0.45-0.258 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.784-0.368 0.68 0 1.27 0.128 1.77 0.383 0.504 0.252 0.894 0.591 1.169 1.019s0.412 0.9 0.412 1.417c4e-3 0.573-0.165 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.645 0.795 0.385 0.428 0.575 0.96 0.572 1.596 0 0.57-0.162 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.332 1.054-0.564 0.256-1.21 0.383-1.939 0.383zm9.606-10.321v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm2.401 8.293v-1.467l4.321-6.826h1.223v2.088h-0.746l-2.909 4.609v0.079h6.031v1.517h-7.92zm4.857 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76z"
                            fill="{{$room==61? 'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter273_d_367_2)">
                        <path
                            d="m323.75 785h-1.968l3.584-10.182h2.277l3.59 10.182h-1.969l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter274_d_367_2)">
                        <path
                            d="m400.4 785v-10.182h3.897c0.736 0 1.348 0.116 1.835 0.348 0.49 0.229 0.857 0.542 1.099 0.94 0.245 0.398 0.368 0.848 0.368 1.352 0 0.414-0.08 0.769-0.239 1.064-0.159 0.292-0.373 0.529-0.641 0.711-0.269 0.182-0.569 0.313-0.9 0.393v0.099c0.361 0.02 0.707 0.131 1.039 0.333 0.335 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.318 0.806 0.318 1.323 0 0.527-0.127 1.001-0.383 1.422-0.255 0.417-0.639 0.747-1.153 0.989s-1.16 0.363-1.939 0.363h-4.121zm1.844-1.541h1.984c0.669 0 1.152-0.128 1.447-0.383 0.298-0.259 0.447-0.59 0.447-0.994 0-0.302-0.075-0.574-0.224-0.816-0.149-0.245-0.361-0.437-0.636-0.576-0.275-0.143-0.603-0.214-0.984-0.214h-2.034v2.983zm0-4.311h1.825c0.318 0 0.605-0.058 0.86-0.174 0.255-0.119 0.456-0.286 0.601-0.502 0.15-0.218 0.224-0.477 0.224-0.775 0-0.395-0.139-0.719-0.418-0.975-0.275-0.255-0.684-0.383-1.228-0.383h-1.864v2.809z"
                            fill="#000" />
                    </g>
                    <g id="Room-313-Text" filter="url(#filter275_d_367_2)">
                        <path
                            d="m488.05 696v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.457 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.758 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.241 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm19.715 10.321c-0.716 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.493-0.943-0.513-1.516h1.87c0.016 0.275 0.108 0.515 0.273 0.721 0.166 0.202 0.386 0.359 0.661 0.472 0.276 0.113 0.584 0.169 0.925 0.169 0.365 0 0.688-0.063 0.97-0.189 0.281-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.077-0.58-0.239-0.816-0.163-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.665-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.153-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.775c0.014-0.57 0.178-1.07 0.492-1.501 0.319-0.434 0.743-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.333 0.76v0.08c0.716 0.099 1.265 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.572 1.596 0 0.57-0.163 1.081-0.488 1.531-0.321 0.448-0.765 0.799-1.332 1.054-0.563 0.256-1.21 0.383-1.939 0.383zm9.606-10.321v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.531-1.626h1.754zm6.24 10.321c-0.716 0-1.352-0.122-1.909-0.368-0.554-0.245-0.991-0.586-1.313-1.024-0.321-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.274 0.721 0.166 0.202 0.386 0.359 0.661 0.472s0.583 0.169 0.925 0.169c0.364 0 0.688-0.063 0.969-0.189 0.282-0.129 0.502-0.308 0.662-0.537 0.159-0.229 0.237-0.492 0.233-0.79 4e-3 -0.309-0.076-0.58-0.238-0.816-0.163-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.664-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.152-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.062-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.312 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.642 0.483-0.162 0.205-0.248 0.45-0.258 0.735h-1.775c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.743-0.772 1.273-1.014 0.53-0.245 1.125-0.368 1.785-0.368 0.679 0 1.269 0.128 1.77 0.383 0.503 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.508 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.716 0.099 1.264 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.571 1.596 0 0.57-0.162 1.081-0.487 1.531-0.321 0.448-0.765 0.799-1.332 1.054-0.564 0.256-1.21 0.383-1.939 0.383z"
                            fill="{{$room==62? 'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter276_d_367_2)">
                        <circle cx="289" cy="605" r="25" fill="#D9D9D9" />
                        <circle cx="289" cy="605" r="24" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter285_d_367_2)">
                        <path
                            d="m1861 415.09h10.18v6.622h-1.54v-4.777h-2.77v4.434h-1.54v-4.434h-2.78v4.817h-1.55v-6.662zm0 8.504h10.18v1.844h-8.63v4.485h-1.55v-6.329zm0 7.93h10.18v6.622h-1.54v-4.778h-2.77v4.435h-1.54v-4.435h-2.78v4.818h-1.55v-6.662zm6.75 17.219v-1.86c0.3-0.053 0.57-0.15 0.81-0.293 0.24-0.142 0.44-0.32 0.6-0.532 0.17-0.212 0.29-0.454 0.38-0.726 0.08-0.268 0.13-0.558 0.13-0.87 0-0.553-0.14-1.044-0.42-1.471-0.28-0.428-0.68-0.763-1.22-1.005-0.53-0.242-1.17-0.362-1.94-0.362-0.78 0-1.43 0.12-1.97 0.362-0.53 0.246-0.93 0.58-1.2 1.005-0.27 0.427-0.4 0.916-0.4 1.466 0 0.305 0.04 0.59 0.12 0.855 0.08 0.269 0.2 0.509 0.36 0.721 0.16 0.216 0.35 0.396 0.59 0.542 0.23 0.149 0.49 0.252 0.79 0.308l-0.01 1.86c-0.48-0.07-0.94-0.221-1.36-0.453-0.43-0.228-0.8-0.528-1.13-0.899-0.32-0.372-0.57-0.806-0.75-1.303s-0.27-1.049-0.27-1.656c0-0.894 0.21-1.693 0.62-2.396 0.42-0.703 1.01-1.256 1.8-1.66 0.78-0.405 1.72-0.607 2.81-0.607 1.1 0 2.04 0.204 2.81 0.612 0.79 0.407 1.39 0.962 1.8 1.665s0.62 1.498 0.62 2.386c0 0.567-0.08 1.094-0.24 1.581-0.16 0.488-0.39 0.922-0.7 1.303-0.3 0.381-0.68 0.694-1.12 0.94-0.44 0.248-0.95 0.411-1.51 0.487zm1.89 1.241h1.54v8.124h-1.54v-3.147h-8.64v-1.83h8.64v-3.147zm-8.64 9.69h10.18v3.818c0 0.782-0.13 1.439-0.41 1.969-0.27 0.534-0.65 0.936-1.14 1.208-0.49 0.275-1.05 0.413-1.7 0.413-0.66 0-1.22-0.139-1.7-0.418-0.48-0.275-0.85-0.681-1.11-1.218s-0.39-1.196-0.39-1.979v-2.719h1.53v2.471c0 0.457 0.06 0.832 0.19 1.123 0.13 0.292 0.32 0.508 0.56 0.647 0.25 0.142 0.55 0.214 0.92 0.214 0.36 0 0.66-0.072 0.92-0.214 0.26-0.143 0.45-0.36 0.59-0.652 0.13-0.291 0.2-0.667 0.2-1.128v-1.69h-8.64v-1.845zm4.61 5.26-4.61 2.521v-2.059l4.61-2.475v2.013zm5.57 5.69h-10.18v-1.844h10.18v1.844zm-3.43 10.713v-1.86c0.3-0.053 0.57-0.151 0.81-0.293 0.24-0.143 0.44-0.32 0.6-0.532 0.17-0.212 0.29-0.454 0.38-0.726 0.08-0.268 0.13-0.558 0.13-0.87 0-0.553-0.14-1.044-0.42-1.472-0.28-0.427-0.68-0.762-1.22-1.004-0.53-0.242-1.17-0.363-1.94-0.363-0.78 0-1.43 0.121-1.97 0.363-0.53 0.245-0.93 0.58-1.2 1.004-0.27 0.428-0.4 0.917-0.4 1.467 0 0.305 0.04 0.59 0.12 0.855 0.08 0.269 0.2 0.509 0.36 0.721 0.16 0.215 0.35 0.396 0.59 0.542 0.23 0.149 0.49 0.252 0.79 0.308l-0.01 1.86c-0.48-0.07-0.94-0.221-1.36-0.453-0.43-0.229-0.8-0.528-1.13-0.9-0.32-0.371-0.57-0.805-0.75-1.302s-0.27-1.049-0.27-1.656c0-0.895 0.21-1.693 0.62-2.396 0.42-0.703 1.01-1.256 1.8-1.661 0.78-0.404 1.72-0.606 2.81-0.606 1.1 0 2.04 0.204 2.81 0.611 0.79 0.408 1.39 0.963 1.8 1.666 0.41 0.702 0.62 1.498 0.62 2.386 0 0.567-0.08 1.094-0.24 1.581s-0.39 0.922-0.7 1.303c-0.3 0.381-0.68 0.694-1.12 0.939-0.44 0.249-0.95 0.411-1.51 0.488zm-6.75 2.873v-1.969l10.18 3.585v2.277l-10.18 3.589v-1.968l8.09-2.72v-0.079l-8.09-2.715zm3.99 0.065v5.369h-1.48v-5.369h1.48zm-3.99 8.758h10.18v1.845h-8.63v4.484h-1.55v-6.329zm0 11.403h10.18v3.818c0 0.782-0.13 1.438-0.41 1.969-0.27 0.533-0.65 0.936-1.14 1.208-0.49 0.275-1.05 0.413-1.7 0.413-0.66 0-1.22-0.14-1.7-0.418-0.48-0.275-0.85-0.681-1.11-1.218s-0.39-1.197-0.39-1.979v-2.719h1.53v2.471c0 0.457 0.06 0.831 0.19 1.123s0.32 0.507 0.56 0.646c0.25 0.143 0.55 0.214 0.92 0.214 0.36 0 0.66-0.071 0.92-0.214 0.26-0.142 0.45-0.359 0.59-0.651 0.13-0.291 0.2-0.668 0.2-1.128v-1.691h-8.64v-1.844zm4.61 5.26-4.61 2.52v-2.058l4.61-2.476v2.014zm0.48 12.943c-1.1 0-2.04-0.205-2.82-0.616-0.78-0.408-1.37-0.965-1.79-1.671-0.41-0.702-0.62-1.499-0.62-2.391s0.21-1.69 0.62-2.396c0.42-0.703 1.02-1.26 1.8-1.671 0.78-0.407 1.72-0.611 2.81-0.611 1.1 0 2.04 0.204 2.81 0.611 0.79 0.411 1.39 0.968 1.8 1.671 0.41 0.706 0.62 1.504 0.62 2.396s-0.21 1.689-0.62 2.391c-0.41 0.706-1.01 1.263-1.8 1.671-0.77 0.411-1.71 0.616-2.81 0.616zm0-1.854c0.77 0 1.42-0.121 1.95-0.363 0.54-0.239 0.94-0.57 1.21-0.994 0.28-0.425 0.42-0.913 0.42-1.467 0-0.553-0.14-1.042-0.42-1.467-0.27-0.424-0.67-0.757-1.21-0.999-0.53-0.239-1.18-0.358-1.95-0.358s-1.42 0.119-1.96 0.358c-0.53 0.242-0.93 0.575-1.21 0.999-0.27 0.425-0.4 0.914-0.4 1.467 0 0.554 0.13 1.042 0.4 1.467 0.28 0.424 0.68 0.755 1.21 0.994 0.54 0.242 1.19 0.363 1.96 0.363zm0 12.696c-1.1 0-2.04-0.205-2.82-0.616-0.78-0.408-1.37-0.965-1.79-1.671-0.41-0.702-0.62-1.5-0.62-2.391 0-0.892 0.21-1.69 0.62-2.396 0.42-0.703 1.02-1.26 1.8-1.671 0.78-0.408 1.72-0.611 2.81-0.611 1.1 0 2.04 0.203 2.81 0.611 0.79 0.411 1.39 0.968 1.8 1.671 0.41 0.706 0.62 1.504 0.62 2.396 0 0.891-0.21 1.689-0.62 2.391-0.41 0.706-1.01 1.263-1.8 1.671-0.77 0.411-1.71 0.616-2.81 0.616zm0-1.854c0.77 0 1.42-0.121 1.95-0.363 0.54-0.239 0.94-0.57 1.21-0.995 0.28-0.424 0.42-0.913 0.42-1.466 0-0.554-0.14-1.043-0.42-1.467-0.27-0.424-0.67-0.757-1.21-0.999-0.53-0.239-1.18-0.358-1.95-0.358s-1.42 0.119-1.96 0.358c-0.53 0.242-0.93 0.575-1.21 0.999-0.27 0.424-0.4 0.913-0.4 1.467 0 0.553 0.13 1.042 0.4 1.466 0.28 0.425 0.68 0.756 1.21 0.995 0.54 0.242 1.19 0.363 1.96 0.363zm5.09 3.598v2.257l-7.38 3.023v0.119l7.38 3.023v2.257h-10.18v-1.77h7v-0.094l-6.97-2.814v-1.323l6.98-2.814v-0.094h-7.01v-1.77h10.18z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter287_d_367_2)">
                        <line x1="286" x2="286" y1="389" y2="354" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter288_d_367_2)">
                        <line x1="289" x2="289" y1="803" y2="844" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter289_d_367_2)">
                        <line x1="1806" x2="1886" y1="652" y2="652" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter290_d_367_2)">
                        <path d="m529.5 553h4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter291_d_367_2)">
                        <path d="m1195 553h4.5" stroke="#000" stroke-width="2" />
                    </g>
                    <rect x="216" y="601" width="55" height="55" fill="url(#pattern0_367_2)" />
                    <defs>
                        <filter id="filter0_d_367_2" x="283" y="800" width="1605" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter1_d_367_2" x="0" y="350" width="12" height="462"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter2_d_367_2" x="1877" y="653.97" width="12.974" height="158.03"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter3_d_367_2" x="451" y="350" width="1443" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter4_d_367_2" x="1881" y="354" width="13.004" height="252.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter5_d_367_2" x="1837" y="761" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter6_d_367_2" x="1796" y="721" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter7_d_367_2" x="1837" y="751" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter8_d_367_2" x="531" y="514" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter9_d_367_2" x="451" y="424" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter10_d_367_2" x="531" y="454" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter11_d_367_2" x="531" y="444" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter12_d_367_2" x="531" y="434" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter13_d_367_2" x="521" y="424" width="18.558" height="108.05"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter14_d_367_2" x="531" y="424" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter15_d_367_2" x="451" y="504" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter16_d_367_2" x="451" y="494" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter17_d_367_2" x="451" y="484" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter18_d_367_2" x="451" y="474" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter19_d_367_2" x="451" y="464" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter20_d_367_2" x="451" y="454" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter21_d_367_2" x="451" y="444" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter22_d_367_2" x="451" y="434" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter23_d_367_2" x="531" y="504" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter24_d_367_2" x="531" y="494" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter25_d_367_2" x="531" y="484" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter26_d_367_2" x="531" y="474" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter27_d_367_2" x="531" y="464" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter28_d_367_2" x="451" y="514" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter29_d_367_2" x="1837" y="741" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter30_d_367_2" x="1837" y="731" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter31_d_367_2" x="1837" y="721" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter32_d_367_2" x="1828" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter33_d_367_2" x="1774" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter34_d_367_2" x="1765" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter35_d_367_2" x="1756" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter36_d_367_2" x="1819" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter37_d_367_2" x="1810" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter38_d_367_2" x="1801" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter39_d_367_2" x="1792" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter40_d_367_2" x="1783" y="761" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter41_d_367_2" x="1778" y="654" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter42_d_367_2" x="476" y="369" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter43_d_367_2" x="1817.2" y="667.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter44_d_367_2" x="512.21" y="382.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter45_d_367_2" x="1801" y="594" width="88" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter46_d_367_2" x="1801" y="594" width="12" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter47_d_367_2" x="1801" y="394" width="10" height="178"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter48_d_367_2" x="576" y="394" width="1250" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter49_d_367_2" x="1681" y="393.98" width="11" height="108.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter50_d_367_2" x="1561" y="394" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter51_d_367_2" x="1561" y="514" width="68" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter52_d_367_2" x="1741" y="514" width="68" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter53_d_367_2" x="1616" y="492" width="138" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter54_d_367_2" x="1401" y="394" width="10" height="169"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter55_d_367_2" x="601" y="394" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter56_d_367_2" x="1081" y="394" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter57_d_367_2" x="921" y="394" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter58_d_367_2" x="761" y="394" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter59_d_367_2" x="1560.5" y="642" width="13" height="170"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter60_d_367_2" x="761" y="644" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter61_d_367_2" x="601" y="644" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter62_d_367_2" x="1241" y="644" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter63_d_367_2" x="921" y="644" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter64_d_367_2" x="1081" y="644" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter65_d_367_2" x="1402" y="552" width="148.01" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter66_d_367_2" x="621.52" y="642.62" width="128.02" height="30.544"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter67_d_367_2" x="621.52" y="532" width="128.02" height="30.544"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter68_d_367_2" x="782" y="642" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter69_d_367_2" x="942" y="642" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter70_d_367_2" x="1102" y="642" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter71_d_367_2" x="1262" y="642" width="147" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter72_d_367_2" x="1422" y="642" width="148" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter73_d_367_2" x="782" y="552" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter74_d_367_2" x="942" y="552" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter75_d_367_2" x="1082" y="552" width="94" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter76_d_367_2" x="1217" y="552" width="173" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter77_d_367_2" x="551" y="552" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter78_d_367_2" x="451" y="394" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter79_d_367_2" x="451" y="552" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter80_d_367_2" x="438" y="644" width="152" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter81_d_367_2" x="277" y="4" width="14" height="358.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter82_d_367_2" x="497" y="4" width="13" height="248.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter83_d_367_2" x="277" y="0" width="232" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter84_d_367_2" x="363" y="242" width="146" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter85_d_367_2" x="451" y="244" width="12" height="118"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter86_d_367_2" x="4" y="350" width="285" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter87_d_367_2" x="359" y="449" width="10" height="52"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter88_d_367_2" x="501" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter89_d_367_2" x="551" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter90_d_367_2" x="502.15" y="534.06" width="33.291" height="27.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter91_d_367_2" x="527.56" y="534.06" width="32.291" height="26.783"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter92_d_367_2" x="501" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter93_d_367_2" x="551" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter94_d_367_2" x="501" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter95_d_367_2" x="551" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter96_d_367_2" x="501" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter97_d_367_2" x="551" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter98_d_367_2" x="501" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter99_d_367_2" x="551" y="534" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter100_d_367_2" x="1167" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter101_d_367_2" x="1217" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter102_d_367_2" x="1168" y="532.1" width="32.971" height="28.746"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter103_d_367_2" x="1193.6" y="532.06" width="32.291" height="28.783"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter104_d_367_2" x="1167" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter105_d_367_2" x="1217" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter106_d_367_2" x="1167" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter107_d_367_2" x="1217" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter108_d_367_2" x="1167" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter109_d_367_2" x="1217" y="533.42" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter110_d_367_2" x="1167" y="532" width="10" height="30"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter111_d_367_2" x="1217" y="532" width="10" height="29.421"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter112_d_367_2" x="601.86" y="533.47" width="29.635" height="29.167"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter113_d_367_2" x="601.86" y="643.36" width="30.135" height="29.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter114_d_367_2" x="739.47" y="643.86" width="30.177" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter115_d_367_2" x="580.47" y="643.86" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter116_d_367_2" x="580.47" y="743.86" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter117_d_367_2" x="282" y="468" width="28.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter118_d_367_2" x="281.36" y="447.01" width="29.125" height="30.635"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter119_d_367_2" x="282" y="468" width="28.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter120_d_367_2" x="1400" y="644" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter121_d_367_2" x="1401.4" y="641.86" width="29.593" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter122_d_367_2" x="1400" y="642" width="10" height="31"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter123_d_367_2" x="240.91" y="495.35" width="22.795" height="24.92"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter124_d_367_2" x="233.49" y="495.84" width="17.756" height="37.622"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter125_d_367_2" x="240.91" y="495.35" width="22.795" height="24.92"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter126_d_367_2" x="223.35" y="688.22" width="25.061" height="23.044"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter127_d_367_2" x="218.32" y="672.79" width="16.732" height="37.75"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter128_d_367_2" x="167.47" y="745.86" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter129_d_367_2" x="187.86" y="745.86" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter130_d_367_2" x="74.469" y="701.86" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter131_d_367_2" x="151.8" y="674.61" width="24.661" height="35.242"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter132_d_367_2" x="175" y="503" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter133_d_367_2" x="153.01" y="501.86" width="31.135" height="29.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter134_d_367_2" x="175" y="502" width="10" height="29.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter135_d_367_2" x="37.958" y="450" width="28.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter136_d_367_2" x="38.01" y="450.86" width="27.625" height="30.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter137_d_367_2" x="78" y="430" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter138_d_367_2" x="58.009" y="430.01" width="29.631" height="28.621"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter139_d_367_2" x="231" y="354" width="29.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter140_d_367_2" x="229.47" y="351.86" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter141_d_367_2" x="274" y="428.5" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter142_d_367_2" x="253.51" y="428.47" width="29.093" height="30.167"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter143_d_367_2" x="1220.5" y="641.86" width="29.093" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter144_d_367_2" x="1061" y="641.86" width="29.593" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter145_d_367_2" x="900.01" y="642.36" width="29.593" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter146_d_367_2" x="1241.9" y="641.86" width="29.635" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter147_d_367_2" x="1081.9" y="641.86" width="29.135" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter148_d_367_2" x="921.86" y="641.86" width="30.135" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter149_d_367_2" x="761.86" y="642.36" width="30.135" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter150_d_367_2" x="740.47" y="533.47" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter151_d_367_2" x="1541.5" y="533.47" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter152_d_367_2" x="1381.5" y="533.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter153_d_367_2" x="1060.5" y="533.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter154_d_367_2" x="901.01" y="533.47" width="29.593" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter155_d_367_2" x="920.86" y="533.47" width="30.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter156_d_367_2" x="760.86" y="533.47" width="31.135" height="28.167"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter157_d_367_2" x="619.47" y="406.68" width="119.92" height="52.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter158_d_367_2" x="781.03" y="421.67" width="80.734" height="103.47"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter159_d_367_2" x="956.07" y="451.68" width="96.594" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter160_d_367_2" x="1089.3" y="407.68" width="153.69" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter161_d_367_2" x="1436.1" y="451.68" width="96.594" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter162_d_367_2" x="644.91" y="720.68" width="80.192" height="36.852"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter163_d_367_2" x="796.07" y="701.68" width="96.594" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter164_d_367_2" x="956.07" y="701.68" width="96.594" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter165_d_367_2" x="1116.1" y="701.68" width="96.594" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter166_d_367_2" x="1276.1" y="693.68" width="256.75" height="37.807"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter182_d_367_2" x="1601.9" y="407.68" width="141.89" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter183_d_367_2" x="451" y="394" width="33" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter184_d_367_2" x="281" y="389" width="88" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter185_d_367_2" x="289" y="397" width="72" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter186_d_367_2" x="314.26" y="405.73" width="22.227" height="31.273"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter187_d_367_2" x="665" y="362" width="40" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter188_d_367_2" x="658" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter189_d_367_2" x="616" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter190_d_367_2" x="609" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter191_d_367_2" x="602" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter192_d_367_2" x="651" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter193_d_367_2" x="644" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter194_d_367_2" x="637" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter195_d_367_2" x="630" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter196_d_367_2" x="623" y="362" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter197_d_367_2" x="452" y="194" width="55" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter198_d_367_2" x="442" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter199_d_367_2" x="381" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter200_d_367_2" x="371" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter201_d_367_2" x="361" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter202_d_367_2" x="432" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter203_d_367_2" x="422" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter204_d_367_2" x="412" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter205_d_367_2" x="402" y="194" width="18" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter206_d_367_2" x="391" y="194" width="19" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter207_d_367_2" x="361" y="244" width="10" height="118"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter208_d_367_2" x="361" y="352" width="37" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter209_d_367_2" x="454" y="244" width="56" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter210_d_367_2" x="425" y="352" width="34" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter211_d_367_2" x="393" y="332" width="39" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter212_d_367_2" x="407" y="243.98" width="11" height="98.022"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter213_d_367_2" x="343.04" y="74.679" width="115.93" height="18.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter214_d_367_2" x="203" y="488" width="167.24" height="245"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter215_d_367_2" x="361.8" y="671.94" width="86.029" height="57.044"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter216_d_367_2" x="438" y="644" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter217_d_367_2" x="438" y="744" width="152" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter218_d_367_2" x="282" y="469" width="10" height="37"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter219_d_367_2" x="275" y="447" width="15" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter220_d_367_2" x="250" y="371" width="10" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter221_d_367_2" x="118" y="394" width="140" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter222_d_367_2" x="118" y="354" width="10" height="104"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter223_d_367_2" x="118.5" y="448.5" width="144.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter224_d_367_2" x="4" y="382" width="62" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter225_d_367_2" x="58" y="382" width="10" height="78"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter226_d_367_2" x="79" y="448.5" width="48" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter227_d_367_2" x="4" y="471" width="62" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter228_d_367_2" x="4" y="482" width="62.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter229_d_367_2" x="37.958" y="483" width="28.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter230_d_367_2" x="38.01" y="484.36" width="28.625" height="27.635"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter231_d_367_2" x="58" y="504" width="10" height="98"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter232_d_367_2" x="4" y="592" width="160" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter233_d_367_2" x="154.5" y="502.37" width="49.067" height="181.99"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter234_d_367_2" x="58" y="502" width="105" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter235_d_367_2" x="176" y="502" width="27.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter236_d_367_2" x="3" y="701" width="161" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter237_d_367_2" x="95" y="721" width="10" height="129"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter238_d_367_2" x="0" y="801.28" width="47.936" height="50.716"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter239_d_367_2" x="37" y="840" width="254" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter240_d_367_2" x="283" y="716" width="10" height="96"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter241_d_367_2" x="188" y="748" width="10" height="104"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter242_d_367_2" x="341.01" y="752.86" width="29.583" height="31.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter243_d_367_2" x="361.86" y="752.86" width="29.125" height="31.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter244_d_367_2" x="362" y="757" width="10" height="55"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter245_d_367_2" x="95" y="746" width="81" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter246_d_367_2" x="208" y="746" width="83" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter247_d_367_2" x="283" y="753" width="67" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter248_d_367_2" x="382" y="753" width="64" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter249_d_367_2" x="868" y="394" width="10" height="38"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter250_d_367_2" x="867.5" y="454.5" width="10" height="107.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter251_d_367_2" x="1498" y="644" width="10" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter252_d_367_2" x="1242" y="692" width="61" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter253_d_367_2" x="1298" y="734" width="10" height="78"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter254_d_367_2" x="1369" y="734" width="10" height="78"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter255_d_367_2" x="1435" y="734" width="10" height="78"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter256_d_367_2" x="1498" y="733" width="10" height="79"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter257_d_367_2" x="1348" y="732" width="50" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter258_d_367_2" x="1414" y="732" width="50" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter259_d_367_2" x="1298" y="732" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter260_d_367_2" x="1478" y="732" width="30" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter261_d_367_2" x="715" y="444" width="10" height="104"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter262_d_367_2" x="716" y="442" width="53" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter263_d_367_2" x="888.85" y="404.82" width="18.475" height="137.86"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter264_d_367_2" x="13.259" y="363.68" width="76.806" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter265_d_367_2" x="10.825" y="393.68" width="49.647" height="35.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter266_d_367_2" x="10.825" y="508.68" width="49.647" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter267_d_367_2" x="68.636" y="518.68" width="80.012" height="52.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter268_d_367_2" x="10.746" y="605.68" width="101.64" height="52.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter269_d_367_2" x="10.825" y="723.68" width="49.647" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter270_d_367_2" x="121.27" y="782.68" width="49.468" height="35.465"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter271_d_367_2" x="213.03" y="782.68" width="49.468" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter272_d_367_2" x="327.44" y="732.68" width="78.431" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter273_d_367_2" x="317.78" y="774.82" width="17.451" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter274_d_367_2" x="396.4" y="774.82" width="15.597" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter275_d_367_2" x="484.05" y="685.68" width="78.113" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter276_d_367_2" x="260" y="580" width="58" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter285_d_367_2" x="1856.9" y="415.09" width="18.46" height="138.81"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter287_d_367_2" x="281" y="354" width="10" height="43"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter288_d_367_2" x="283" y="803" width="12" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter289_d_367_2" x="1802" y="650" width="88" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter290_d_367_2" x="525.5" y="552" width="12" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter291_d_367_2" x="1191" y="552" width="12.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <pattern id="pattern0_367_2" width="1" height="1"
                            patternContentUnits="objectBoundingBox">
                            <use transform="scale(.0019531)" xlink:href="#image0_367_2" />
                        </pattern>
                        <image id="image0_367_2" width="512" height="512" preserveAspectRatio="none"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7N13eBzluTbw+5nZVbUtS+6ytLvSrguWsY0V24ANMb1DqCEklJCEA0kOJeGEkITkJKRxSEJN/9IIIbTQUiC0QKjGGEwxIFtltZKFuyXbqrszz/eHnIQQW5I1szu7O/fvOlzXuezMM4+12pl73nnnHYCIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIYhXjdARJkVi8XGDQwMmEVAOQD0AdsLCgqsxsbGHV73RkSZwwBAlGdi02NVMK0DVOx5CqNGVKsgqFYgLEDpUNsq0C1AKxRtEG0DEFc1XzMsY3Xj+sb2DP0TiCgDGACIcpsRC4cX2CpHCXAYROsBmZieXekWqKwC8KSIPt7Y2roagJ2efRFRujEAEOWYWCxWqKnUcVCcBehR6TvhD2uzAI9BcDcCgUcaGxv7PeqDiEaBAYAoN0g0HF4ukHMVOBXAeK8bep/tCrnPEP1tYzz+tNfNENHwGACIslgsFivUAevDMPRKKPb3up8RalDFj/tSAz/v6Ojo8boZItozBgCiLDRr1qyxyd7+K0T0vz0c4ndqMyA3F/WU3Lhm85pdXjdDRP+OAYAoi9TV1RX07ey5AKJfBzDV637coVtU5Xu2gZvi8Xif190Q0SAGAKIsEQvVnKHQH0BQ7XUvaZIA9PKm1tb7vW6EiBgAiDw3s6pqumUGbgZwmte9ZIJA/2QZxmdbWlpave6FyM9Mrxsg8jGJhiKX2obxgADzvW4mc2SmqH6yYnzFzu1dnSu97obIrzgCQOSBmZUzJ9rB/l8p5ESve/GSKh61DZwfj8c3eN0Lkd8wABBlWDQcPhyQ3wKo9LqXLLFeBB9rjMef8roRIj/hLQCiDIqGai6C6O8BKfO6lywyDsC5FWXl27d3db7kdTNEfsEAQJQZZiwS+Q6A7wJieN1MFjIgOK6ifHzl/M7OR+J8xwBR2vEWAFGaVVZWlhQHC+8G9ASve8kFKvjjQCr14fb29l6veyHKZwwARGm0++T/EKBHeN1LLlHF34t7S0/gCoJE6cMAQJQmdZPqxvQWd/9ZBId6sf8yCPZTYLYKpkEwHcBkAGMUGAtB4e7/XTeAfgDbAWwTxXoALVC0iOJtAbqgXrQPAH8r7es96fWNG7u9aoAonzEAEKVBVVVVcaFpPgrIskztsxDAB1SwVAWLYSDkwnlbMRgGXjUUz0KxUhQDzsvui6ctwbFcQpjIfQwARO4zouHIPcjAyn4GgIUqOFENHKaC4jTvr0eAp2HjIVG8IpqZsQHBPU3x+NngxEAiVzEAELksForcoILL07mPQgAnqYFzbANV6dzRENoA3GVYeFAU/Wnfm3y/qbXlyrTvhshHGACIXBQLhz+jkFvTVb8AwIfVwMfUQLlnt+b/3TYAtxsW7k7z7QEVfLo5Hv9xGndB5CsMAEQumRGJLLEVf8fgedp1x6iBT6uBaVly4n+/DihuMhR/k7SN1A+obSxrbmvm+wOIXMAAQOSCqqqqikIz8AqAsNu1pypwtZo4SHPj6/qCKL5p2NichhkCCrTYgoXxeLzT9eJEPsMVyYick4JA4NdIw8n/eBXcqYGcOfkDwEEq+L1l4lh1//AiQI2p+JXrhYl8iEsBEzlUGw5fKJD/cbNmAYDLbAOfVRNBNwtnSCGAw1QwEYIVom5P359dUVbesr2r8zV3yxL5S+5cVhBloZqamimmrW8pUOFWzXIFfqAm6nLoqn8oqwFcZaSw3d1/zlYEzDlNTU2bXK1K5CO8BUDkgKF6s5sn/+kQ/FwDeXPyB4AFAH5pm6hy93pjgqSsG9wsSOQ3+XOUIcqwaCRyLBQPu1UvooKf2KZ7aSLLbALwWcNCXNybHCiGHNPY0vKoawWJfIQjAESjY6jiO24Vq4Lgh7aRtyd/YPA9BD+0DVS6eN2htl4PHseIRoVfHKJRiEYi58rg6LZj5QrcahmY5IMBuUkQ3Gybbi5iNC8WqjnHtWpEPpL/Rxwil0UikSJT0QAg5LRWEMAttomFeXTPfyTeEMXFhoWkO+VaJRiY1djYmP4ViYnyCEcAiPZRQPVCuHDyB4Av2obvTv4AsL8KrrBdO/yENZW6wK1iRH7BAEC0bwyFXOZGoWPUwElpWCwnV5yhhnuLBSmuAI9nRPuEXxiifRAL1ZwAYKbTOtMUuMq9K+CcdaXt2tyHWbWh2uPdKETkFzwCEe0DFb3CjTpXqYkxbhTKceMAfNmlICRif86VQkQ+wQBANEK1VbUzACx3WucIFRzsw/v+e3OwCg5z51bAYTU1NbPcKETkBwwARCMkpnUuHD45UwjgCpuv4Hi/S21x5R3KpupHXChD5AsMAEQjI4A4ft78dDUw2Y1u8sx0CM50YRRAVT8KPt5MNCIMAEQjEA2HDwIQdVKjGMD5Pp71P5yP2YYLowASmxGJLHahHaK8x6MR0cic6rTASSpuroCXdyYAONmNUQAXPisiP2AAIBoJkWMcbQ64MsSd7z6s4nj8XhVHu9IMUZ7jEYloGOFweBoUc53UOFAFYc78H1ZYBQc4/zktqKmpmeJGP0T5jAGAaBgBNY6Cw4llrq145wOnOP9ZiWnhKDd6IcpnPCoRDUMFhzrZvhDABzkxfcQOUUHQYQ0V29FnRuQHDABEwxDoQifbL1FBCSf/jdgYAB9wfBvAcPSZEfkBAwDREGKxWCGAOic1DuS9/312iOOfmc6tr693OpBAlNcYAIiGYPfb+wPOHk9fzK/ZPjvA+TyAwh1btzoKbkT5jkcmoiGI6Bwn25crEOLw/z6rAVDmcN6EpcoAQDQEBgCioQjCTjafycl/o2IA2M9hcDLg7LMjyncMAERDskNOtp7NADBqNQ7nAaiKo8+OKN8xABANwelJpJrD/6MWdpqdBAwARENgACAagohWOtl+CkcARm26wxEAARx9dkT5jgGAaEgy1snWXI929Modbq+DSwoQ0V4wABANSUudbD2OawCMWoXz2yeOPjuifMcAQDQkcXQVWcTz/6iViOMfHgMA0RAYAIiGVuhk4wJOAhw1w/nPrsiFNojyFgMA0dCSTjbm+X/0TIfbKzDgSiNEeYoBgGho/U427mEEGDWnZ2/D4WdHlO8YAIiGpM4CgPP72L61y+GPThkAiIbEAEA0JOlxsnUPBwBGrVsd//B63eiDKF8xABANQRQbnGy/VZgARmuT88ETR58dUb5jACAaggo6nGyf4ByAUWt3+rMTrHenE6L8xABANASFOAoAcY4AjFqH85/du270QZSvGACIhmCItjvZvtWtRnxordMCKo4+O6J8xwBANLS3nGy8FsqbAKOgAN52OAKgKm+70w1RfmIAIBqCYdtvONl+uwCNfBJwn7WKYqfDGmqqo8+OKN8xABANYW0i0QJgh5Maq2C71I1/vOh83KSrpaUl4UYvRPmKAYBoaArgTScFVrqwqL3fvOB4AqC+Aa7ETDQkBgCiYYjgGSfbr4Si261mfKBHgFXO7/87+syI/IABgGgYCjzlZPs+AE8IbwOM1BOwXXiLj/GkC60Q5TUGAKJhFHWXPguHbwX8C9cDGDEXflYDY/q7X3CjF6J8xgBANIw1m9fsAuQlJzVWi2I9b0kPqx3Aq84DwAuvb9zIuy5Ew2AAIBoR+35HWwP4HScDDut2sZ0/M6G4z41eiPIdAwDRSAQCd8PhrPKHxMYWjgLs1XYB/mw4Pv3bpp36gxv9EOU7BgCiEWhqampTwNFtgAEAt3MUYK9+DRv9jqvIC2vb2/kSIKIRYAAgGinBnU5L3Cc2OjgK8B/aobjX+dU/AOefEZFfMAAQjdBAKnUbgF4nNfoAfN+dE11eudWwnT1mAUCBbkv0dlcaIvIBBgCiEWpvb98mwO+d1nlGFM9wFOCfnhHFky48JimK2+PxeKcLLRH5AgMA0T5QtX/kRp3rDcvxy27ywU4A33FpRMQ2xZXPhsgvGACI9kFTIrEKDpcGBoANAlxrWL4fB/iuYbn1ZMSTLS0tr7tRiMgvGACI9pHa9tfdqPOUKO728RLB94jiMZdWSBTBN1wpROQjDABE+6g5kXgCDt8P8A+3GDZe9+Eywa+L4ibDcqmaPNEYjz/tUjEi32AAIBoFVeMaN+oMALjcsLDWRyGgHcD/iOXCC38G2TZcGZEh8hsGAKJRaE40PwvFg27U2gXgc4aFjeJGtey2GYrPmha2u/dvva+lrYWv/iUaBQYAolGyDFwOoMeNWpsAfFYsbMjjELBBgP8y3VsISYFuNY0rXClG5EOm1w0Q5arOzs7OivFlAsjhbtTrEuAJsXGgCsqRX0mgHcAlRgodbv6zFF9tjrf8xcWKRL7CEQAiByQY/J4A77hVbxMGr5LzaWLgK6L4uGnhXXczzZrisaU3uFqRyGfy6zKDyAPRUKgeYjwPoMCtmgUA/ts2cJYaOf0l/YNh4wfifJnf9+m3DVnS0tLymrtlifyFtwCIHNre1fVuedn4pAiOdKumBeAFUawVxYFqoNCtwhnSDeBaw8ZvxIbbKx0I9KrmePwBl8sS+U4uX1wQZRMjGo48BsCV+QDvNU2BK20Th+TI1/UZUVyfpgmNInisMR4/BvD9IopEjuXGEYUoB0QikammYgWAUDrqH6KCz9sGKrP0a9sBxQ2GjafTN3+hFQFzcVNT06Z07YDIT7LzSEKUo2ZEIgssxbMClKajfiGA02wDH1PBpCz5+m4F8CvDwv2ibt/rfw/dZRvGUq73T+Se7DiCEOWRaDh8KiD3Io1P2RQAOHF3EKjy6GvcAsXdovizYaMvvbuyRXBaYzzuysJLRDSIAYAoDWKRyBWq+EG69yMAFqjgeDVwhArGpHl/uwA8JTb+IopVopm5Ea+4rCkRvzkTuyLyEwYAojSJhcNfUsi3MrW/AgCL1cAiAPUqiKm4MgTRAsVLMvjfClHX1vAfCRVc3RyPfzeDuyTyDQYAojSKhsPXAvIVL/Y9HsAsCKpVUKOCkALlApQqMAZACQQmBq/qkwC6oNggg4sRtYpiLRRrZfDPvaHXNrW2ftWjnRPlPQYAIhfFYrFxkkrtZ6nGIFJtKEI2cF66JgXmKwW6DeA2W5CAapsp0qiBwNuNjY07vO6NKF8wABCN0uzp0yckA4HFIrJEFYsAzEWaHgGkf2oFsEYVL4noS/2WtaK9vX2b100R5SIGAKIRqqysLCkKBpcDcqQIjoRiLvgd8poCeEMhjwvsx3uTyac7OjpceUMjUb7jwYtoCFVVVRWFgcBJsHEqBEcDKPa6JxpSD4C/QuWBJKw/JhKJ7V43RJStGACI/pNZG6o9TMQ6D5AzwJN+ruoX6GNQ47aySRUPrFq1Kn3rFBHlIAYAot1mVlVNt0zzYkA+BWCK1/2QqzaI4GemZf20oa2tw+tmiLIBAwD53oxIZIENXA3V0wAJeN0PpVUSwL22IdfxdcLkdwwA5FuxSORAVfkKoMeD3wW/UYH+2TKMa1taWl7yuhkiL/CgR74zIxzezxb5OhRngN8B3xPon0zg0obW1haveyHKJB78yDei0ehkTdnfFugFAEyv+6Gs0gvIDYGigu82NDTs9LoZokzgQZD8wIiGas6FWg8KsAxpfEsf5awggEPsVOpT5WXlA9u7Ol8GPFsDmSgjOAJAeW1WOFyTAm4DZJnXvVDuUGAFTOO85ubmtV73QpQuHAGgvBUN1Zxni/4JkJjXvVBuEaBKVD9ZXjZ+1/auTk4SpLzEEQDKOzU1NVNE9eeiOMnrXigPKP4aUOtCrh9A+YYBgPJKNBw+FcDPAJnodS+UVzaL4FON8fiDXjdC5BbeAqB8IbWhyFUi8lNA+OpdclspgA9PKB9fvK2z80lwgiDlAY4AUM6rqqoqLgwEfg3FWV73Agw+YjAVgrACERWEBJiuglIARRCUqGIsBMUYnHruZ0kAvQB2QtEjgl4ougF0iKIVQByKhAAboLC9bfW97uy3Uhe2t7f3et0IkRMMAJTTZlVXV6ZM8wEoFnnVQzGAA1RQr4J6NRADUOBVM3lqAMA6UbwCxcuieFWAPg8vwhVYYQs+FI/HN3jWBJFDDACUs2Lh8EIFHgSkKtP7jqjgaBUsgqBOBXyBQGalALwJYKVh4zEo4uJBGFC0GQZOXhePr878zomcYwCgnBQLhw9SyCMAxmVqn+MAHKGC42wTCzK1UxqRZigeNhQPwcb2zB7VdojgmMZ4/MWM7pXIBQwAlHMGX+KDvyJDJ/8DVPBRNXAwr/SzXhLA86K4w7DxauZuEXQZgmPWxeMrMrVDIjcwAFBOiYZC9RDjMQDl6d7XfBVcpAYWKb8muWg1gN8aFp4VzUQUYAignMMjG+WMGZHIEnvwyr8snfv5oAo+YRuYza9HXngLwC9MC8+kPwZ02YYczdcLU67gEY5ywuCEP3kSaTz5h1XwP2pgMa/489IKUfyfWGhL78fbKdDDG1tbX03rXohcwCMdZb1wODwtoLICgup01C8EcJ4aON82+PhenksBuFds/MjQdD5G2GFaqcVr29vXp2sHRG5gAKCstnuRn6fT9Zz/EhVcbRuo5FfBV9ZD8W3Dxso0PT4oipf67NRyLhZE2YxLAVM2k0nlFb8BcIzbhU0An1QDX7JNjOPJ33fGQXC8GhgHYKWkYZVBwfSAaczc3tl5r9ulidzCAEBZKxaJ/C+Az7pddzKA71smTlCDp34fEwBzIVgIwQoBetzfRV3F+LLk9q6uZ9wvTeQcAwBlpdpw+DRAfgiXb1MdrIKb7QBqeOqn3aZBcDwMrINiveu/FnLYhPLxq7d1dja4XZnIKR4FKevMqq6uTBnm6wAmuFn3BFvwFTVg8tee9sACcJ1h4QHX5wXoFktkf743gLKN4XUDRO8jKcP8OVw++Z+vBr6qJk/+tFcmgKttE59Stw+LMtG08WvwgouyDG8BUFapjUQuEeByt+oJgEttE5/k/X4aAQFQr4IyCF50cwVBQWzC+PL2bV2dr7hVksgpHhMpa0SrojE1rdUClLpRzwDwNdvEcVzYh0bhz4biG2K5uVrAzgB0fkNra4t7JYlGj7cAKFuYMK3fuHXyB4ArbIMnfxq1E2zB5e7eDhibEvkNeNylLMFbAJQVopHIRQAucavehWrgAtfv5ZLf7K+CAQFec29iYLh8fFlie1cXlwomz/HyiDw3a9assam+/rUAprpR73gVfM3mdD9yhwL4lmHjIXFtuaCNEgzMbGxs3OFWQaLR4CUSeS7Z2381XDr5H6yCa3jyJxcJgKttwRL3fqumaDJ5pVvFiEaLx0nyVDQarUbKegdAidNakwHcbgUw3nlbRP9huwAfNSxscWdaYK+axuzm5uaEG8WIRoMjAOStlPV/cOHkbwK41jJ58qe0KVfgm7bh1sSpYrGsb7pTimh0OAmQPFNTU7NYFDfChZGoT6uBYznpj9JsGgQGgJddmRQo8yrKxv1pe1fXuy4UI9pnPGKSZwxbr4ILJ/8lKjjX5q8yZcYFamCRO4+XCmBc40YhotHgHADyxKxwuCYFWQeHo1CFAO60TEznrzJlUDsUZ5sWBpyXUtjmvKa2pjedlyLaN7xsIk+kgM/BhVtQF9oGT/6UcVUQXODOqJOokbrKjUJE+4pHTsq4UChUHhRJADLGSZ1qBX5vB1DgVmNE+2AAg08FtDqfD5AM2Fakoa2tw4W2iEaMIwCUcQUilzg9+QPAlWry5E+eKQBwpTsTT4NJMT/pRiGifcEAQBlVX18fVMhnnNb5oAoO4jr/5LElKjjEhd9DEfzXciDgvCOikWMAoIzq2rztWACVTutcaPMJVsoOF7ozClCZCIePdqMQ0UgxAFBmCc53WuIgFeznRi9ELqhTwWI3RgEg57rQDtGIMQBQxoRCoXKFnui0zsd59U9ZxqVRgFNisdg4NwoRjQQDAGVM0DBOweCj+6O2UAULXOqHyC0u/V4W28mk44BMNFIMAJQ5Nj7ktMQ5XO6XstQ57oxMnepGEaKR4NGUMmLelCmlEDia5FSug6/7JcpGS1VQ5nBpFQGOraqqKnapJaIhMQBQRuwqKloOwNGB7WgYfE6KslYQwFGOA6qMKQoGD3GjH6LhMABQhsgRTisczxf+UJY73oURKrXtI11ohWhYPKJSRgj0KCfbR/joH+WAuSqIOB8FYACgjGAAoLSbPX36BEDqnNQ4mvf+KUcc6fwVK/Mjkch4N3ohGgpvqVLaDQQCS8Thi6cWZei9VY0AHjRsrBTFP97MUglgsQpOsQ1EM9IFjVY2fH6LVPD/nP26GgGRxQAedacjoj1jAKC0M0SWqIMXphVjcLW1dBoAcKNh4z6xYb/v75oBNIviHtPGqWrgCttAMK3d0L7Kps9vrgqKAPQ5qGFbeiAYACjNeAuA0k4Vi5xsf4BKWpPqAIDLDAv37uHk8V4WgHvFxmWGhWQa+6F9k22fXxDAfIeBVQZHAIjSigGA0k8x18nm9Wm++r9BbKzah3e6vyyKGw0rjR3RvsjGz6/e8S0rdTRnhmgkGAAorWpra8sgqHJS4wNpXP2vEcD9xlDXjXt2nyia4eC+BrkiWz+/Rc5Da7huUt0YN3oh2hsGAEorw7LmwMEEQANI68Sth4yhh433xgLw4D5cdVJ6ZOvnF1VxOgYgPWN65rjTDdGeMQBQWtlArZPtp0JQ4FYze7DCwUngpVFceZK7svXzKwIwxWG+MFQdfXeIhsMAQGllAGEn20fSfJG9wcEw8LscAPBcNn9+YXE4BmAj5E4nRHvGxwAprVQl5GQsNJzmCYC9DrbtEWBz+9BvgJtUxcmCTgz38+0Np0ZduyfNS0uEFFjhYB8q4ig8Ew2HIwCUVmqg0sn2IS4ASDmqxumjgKrTXWqFaI8YACitRKXCyfaVXAKYctRUpwUMOPruEA2HAYDSTCc62ZrPQVGuKnUaXpUBgNKLAYDSzdFLTYo5AkA5qtT5r265C20Q7RUDAKVbkZONXTiIEnmi1PlTBsUutEG0VwwAlG6OHuMvcfIWISIPlTp/g2WhG30Q7Q0DAKWbswCQodcAE7mtxHkJBgBKKwYASrehH+QeBl+7S7nKhRUsHX13iIbDAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAlG4DTjbuEbfaIMqsbucl+p2XINo7BgBKM93hZOuNqm41QpRRG5yXcPTdIRoOAwCll8p2J5uvEAYAyk0vGbaj7QXY6lIrRHvEAEDpJWh0svmDhg3LrV6IMsQC8IDj8KqOvjtEw2EAoLRS4B0n2zcBuF+cXUkRZdq9YqMFzgKA0+8O0XAYACitDJUXnNa4wbCxkrcCKEe8JIqbHA7/A4ACjr87RENhAKD0KjCfApxdCiUBXG5YuEeUtwMoa1kA7hIblxsWUs7L2QOW9ZTzMkR7xwBAadXY2LgZLlzJJAFcb1j4qGnh94aNJgC9jrsjcqYXg7ep7hAb55gWvm/Ybpz8oYpn29vbt7lQimivAl43QD4guA2Kg90o1QzFDaKAyXkBo9GIwYmVK0XRsfvPKgEsVsEptoGoh715YbHpxunafYbIb73ugfIfAwClnQXcZQLXAxjrdS9+NQDgRsPGfWLj/dGpGUCzKO4xbZyqBq6wDQQ96JH+qQtB826vm6D8x1sAlHbxeLxTBD/yug+/GgBwmWHh3j2c/N/LwuDs9csMC8kM9UZ7Irc2NjZyESBKOwYAygg1zR+AK5t54gaxsWofnqJ4WRQ3Gpxu6ZHtZjJ4o9dNkD8wAFBGNDU1bYLiGq/78JtGAPeP4pG0+0TR7PA5dtp3Av3K2o61W7zug/yBAYAypikR/yGAF73uw08eMoYe9t8bC8CDXHsh055vbG39qddNkH8wAFAmWZbgIwAcvR+ARs7JuxScrmVPIyfANjWNjwBc6oIyhwGAMioej8chOAfgPLNMcPI2xXc5AJApA5bK2c3NzQmvGyF/YQCgjGuKxx8RlU/A4QqBNLwe8WZbGjFboR9vSbQ85nUj5D8MAOSJxkTLbxV6LjgSQL6lKYV+qrm19Q6vOyF/YgAgzzS3tv4O0FPAOQHkMwJss9U4vrm19Zde90L+xQBAnmpqbX3YEixUYIXXvRBlyPO2aRzAYX/yGgMAeS4ej8ebW+MHQ+V8AFu97ocoTTpVcXlTa/xQTvijbMAAQNnCbkq03CbBwH6q+A64aiDljy5AvmUmC2Y0J+I3gY/6UZbgy4Aoq+x+ffCXvh6GdwAAIABJREFUamtrr5OUngWxzwPkYDCsUm6xIXhOVG5D0Lyba/tTNmIAoKzU3NzcBeDnAH5eVVVVUWCaywU4SIDZgMQUOhGQsQAKPW6V/K0fwA4BtgLaqMA7CrwwYFlPtbe3b/O6OaKhMABQ1tt9IL1v93+uioYjXIvAx5pa41ztgHyLw6pEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMMAERERD7EAEBERORDDABEREQ+xABARETkQwwAREREPsQAQERE5EMBrxsgyhBjVnX11JRhRCASgo2QioQA9bov8lBtuOZWUU3AQAKqiYBtxxva2jYAsL3ujSjdGAAoL9TV1RX09vZGNKVhU+wQREIKRKAIAQgBqEoBBQAGz/kCCE/+vifQz0CwOwcKUoaJaDgyAKAdQAKChAAttmoCaiYQQKK4uDi+Zs2aAU8bJ3IBAwDllFnV1ZVJCc4RaK0YWqtALRR1fbu6ZwlgigAK4YU9OVEAoBaDv1u786IAYgMW0LerG9Fw5F1A10CkWW00G5BmwHqrKpFoeApIeds+0cgwAFDWqampmWLYdh1EZkBlBkRniGKmArUpoEB2j84qT/LknWmATIMCg6FTARhoC0cGYkCzCtZCZR1E10F1HQKBN5uamjZ53TTRezEAkGdisVghBgZiCrNeDJ0D1TqF1MPWafjnVbz+4/+IckGBArOhmP2vX1wBUhai4ch2QN6C6Bq18RZgrAoWB19raGjY6XXT5E8MAJR2y4FARygUsmHWwdB6BeZAUafJ1GyIYQC6+2pePO6UKK3KAV0KxVIRALCR6ut/7+2Et2DLKsBaYxnGmng83ud1w5TfGADIbWYsFJqtMOthaD1U6tug9QCKeClPtEf/uJ1wJGTwVoKpmoqGI2sBXaUqqwBjlVFgrGxsbOz3ulnKHwwA5Mis6upKSwL1MHSpqiwD9AAFSv51sucZn2jfSQDAHEDmiOBcwIYm7WQ0HFkHwbOw5TmBtaoxkXgbfGSRRokBgEaspqZmitj2MgEOBOQDABamgHE82RNlRBCDt8/mQPQihYFoOLIDwCuArlRghRrGsy0tLRu9bpRyAwMA7dXuq/ulaugyqCyFrQsH5zwTUZYYB2A5IMsFgNiKaDjSDOhzUONZgfVcYyKxxuMeKUsxANA/zQyFai2YR0LsZYAckgIivLonyjm1gNRC9NzdowQbBPqyrfKswH68KZF4FbxtQGAA8DOZEYnMt1WOEtiHKmSpNThLGZyNT5RXpirkRBGcCBiIhSPbbMFzovJ328BjLS0tr4MJ35cYAHxkZuXMiXYgeZgaeiRUj7cVVYNLmPCET+QXClSI4iRATzJsIBqObIbgKdjyeEBTf2poa+vwukfKDAaA/GZGQ6EFCuNIETnJwsBBAAzwmXsi+pdJUJwJ0TNTYtrRcM2rIvq4bRuPF48t/jvfe5C/GADyTE1NTdhQPRaKYwAcDqBs8FTPET4iGpYBaL0q6kXsq/p2dXdFw5EnoPJXDcgjzc3NCa8bJPcwAOSBWeFwTVLlZBE5E7YeDF7eE5E7ygCcBtHTxFJEw5G3RHCPqN61rrX1ba+bI2cYAHJUTU3NPFP1NFU9PQWZO/hwHq/yh2KaimkTLFROSmH65BSqJ6dw813jvW6LPHTphzvRtimA9bv/27DNhGUxPw9hjiq+ppCvRSORN9TGH2Ab9zW3N7/hdWO07/ibnkNioVAdDONMKD6swGyv+8k2AVNRMc7G5AoL1VOSCE0dPMlXT0khNDWJyokpmOa/bxM7LeJon39uLRzy7ydVWY7qO7XYdPZm2pcsb68RNrebQ/79CWFnK+M23hf/jz/r2mWgbWMAbRuDSGwIoG1TAG0bA9i4LYD2jQH0DfCw+X4KtIjgj2ob9zQnmp8Dr0ZyAkcAslxNTc1isfVsAU5TIOz3r1XAVISnphCtSqJmehI1lUmEp6ZQNSWFyeUpmIbXHVKuKxtjo2zMAOZG/3Pum2UDG7cNjha0bgigpSOI5vYgmtqDSGwMIOXT0QMBaqC4VMS+NBqOxBVyH2z5fXNb88te90Z7xwCQhWLTY1W2mTrdEHxcbZ3vdT9eGFdqD17BT0liRvXgf9VTkpgRSqIw6PMURJ4xDaByYgqVE1NYNOff/86ygI4tASQ2BLGuLYjG9iDaNgawtrUAmzuHHsnIMxGBfg6Gfi4WjrwDwV2Gbd+2NpFo9rox+ncMAFmisrKypLig4CwoLlCkDhHA8MNprmyMjf0iA9ivZgCxqiRqpycRrUqiYpy3Q+dE+8o0geopg7ecls7v/be/27bDRFN7EM3rg2hsC+LteAHejhega1d+D1kpMBuKr1liXBMNR56G4De9AwP3dHR09HjdGzEAeC4WCs2BYZwHxadUUeF1P+k0udzC3Gg/ZoSSiE1PYm60H7HqJN8uQHmvYpyFijkWFs3p+7c/37TNxJtNhVjXFsS69iDebCpEU3sQmn/p3wBwGBSHFQcLbo5GIneK6k8aW1tf9boxP2MA8EBlZWVJSbDwHBW9SBWL8u2+fsBUzKhODl7Z1w5gTs0A9osMYFwplx8neq/JFRYOr+jB4Yv+9Wddu4zBEYKWArwVL8A7LQVY1xbMp/kF46C4SCEXxUKRlyD6sz7LuqO9vb13+E3JTQwAGbR7kZ5Pi+KTCq3IlxP/5AoLC2f3oX5WPxbM7Edd7QAKeJ+eaFTKxtg4cG4fDpz7r9GCgaTgzaYCrF5biFcaivBKQyE2bcv9eQUqWAzI4iIz8H/RSOT/qWH8kIsNZQ4DQAbEIpHlqrgUtp4MwMzlU2PAVMypHcABM/txwKx+LJzdj8qJzh41I6KhFQQVC2cPft8uxA4AwPrNAbzyTiFeXVuIVxsK8VZLQc6uYaBABRRfEMv+fCxc84AYuHldS8vfve4r3zEApI9RGw5/yFC5ShWLvW5mtMaPtVG/Xx8Wzhw8+MyN9qO4MJcjDFF+mD4phemTUjjpkG4AQG+/4M2mQqxqGAwEq94uQufOnJtkaCr0dLVxejQceRGC65ri8YfA1xenBQOAy+rq6gr6dvacDdEvAthPcyyQFxcqFs7uw8H792Hp/F7MqRmAkXPHECL/KS5ULJrT928TDds2BvDca8V47vUiPPNqMXb15tSX+UAo7o+GI02quMU28NN4PN43/GY0Ujl2espe9fX1wc6tWy+EjS9DUO11PyNlmooFMwZw8LxeHLR/Hw6Y1Y9gwD9X+FwJcGh+XAkwXw0kBavXFuL514vw/BvFeG1dzt0ySEDlm+MnVfx61apVSa+byQc59elno+VAIBGJnAvFNQLUeN3PSMwMDWDpvD4cNK8PS+b2obTIv6NrDABDYwDIX919Bla8UYTn3yjCc68XY10i6HVLI9UMwTea4vHbAXDBEAd4C2D0JBaqOaMN+i1RzPC6maGYpmLxnH4csagHRy7qQdUUTtoj8rvSIhuHL+rB4YsG1+Rp2xjA4ytL8OTKErz0VmE2jw7UQvHraDhytUK/3Nza+gevG8pVDACjUFtd+wEx7R+o6iFe97I3xYWKg/bvxXEHDX7By8b49yqfiIZXPSWFj5+4Ax8/cQe6dhl4/vViPPFyMZ54qQQ7e7Jy7sAsgdxbG46sEOjnmlpbn/e6oVzDALAPotFotaTs7yjsc6DZd/tk2oQUjljciyMX92BJXZ+v7uUTkXvKxtg47uBuHHdwN5IpwYo1RXhsRQmeXFmMd7dm12lDgCWAPBMNh38nqeCXGtc3tnvdU67Irk8ySy0HAm3h8GVIpf5XIWO87ue9JpRZOGFZN04+pBsLZjq7H0pE9H7BgGLZ/F4sm9+L//0UsHptIR56phR/ea4UW7uyZjEiA5BzNZA8tTYSuaY5Hr8FnB8wLAaAYcTC4YVtIj+BYtHw/+vMKCpQHPaBHpz6wW4curAXgZxeWoiIcoUIcMCswUXAvnLhNrzaUIQHni7FH/9eiu6+bLhNIGNEcUMsHLkAgosb4/EXve4omzEA7EVlZWVJcTB4nUI+DYXnv9kBU3HIgj6cdOguHLWoB8VFPOkTkXdMA/jAfn34wH59+PIF2/DoSyX449/H4JnXijyfQKjAfCiejUYit/anUlfzPQN7xgCwBzMikSW24jYAM73uZWZoAB85ehdOXNaNcr4il4iyUHGR4pRDu3HKod3YtsPEn54pxe8fG+v1o4UmFJcVmYFjaqtrz2tua17pZTPZiAHgPZYDgUQo8nlbcS0Az35zgwHFkYt7cPZRu3DwvF6+LpeIckbFOAvnnbAD552wA282FeDOx8bi/r+NQX/SmwOZArPFsJ6PRSLfL5sw4RouIvQvDAC7xabHqtoCqbsFOMirHionpvCRY3bizCN3YWIZr/aJKLfNjQ7gm9GtuPwjnbj7sTG489Gx6NjixWlHAqq4qnPLtmWzqqvPamhr6/CgiazDAAAgFol8UDV1J4Cpmd63YQAH7d+Ls4/ahaOXdMPMmkm1RETumFhm4dNndOHi07rwwhvFuPOxMXj0xVJYGV+eRJemDHN1baj2nOZE8+OZ3nu28XsAkNpQ5Auq+BaAjJ56TVNx8qHduPjULkSrOCJFRPnPMICl83uxdH4vGts68ZP7y/DHZ0ozPWlwkoj1cDRcc3VTa8v3MrnjbOP57HavLAcC0UjkJyL4LjJ48g8GFB9avgt/vakD1//3Fp78iciXYtVJfO/SLXjih+tx/gk7UFSQySebJADo9dFQ5Ff19fU58xIEt/lyBKBuUt2YtpLuu6A4PlP7LC5SnHXETlz0oS5MmcD7+0REAFA1OYVrPrENnz6jC797ZCx++dC4zL22WHBB19at02Ox2BmNjY07MrPT7OG7EYBoNDq5r6T7aSAzJ/+SYhufPbMTz/y0Ddd8YhtP/kREezChzMKlH+7E3368Hp8+oytja52o4ihNWk9Go9HJGdlhFvFVAIjFYpOQSj0BYGG692UYwIeW78Ljt67H5R/pxPixfBkPEdFwysdZ+Nw52/HEre04++idMDNyltJ6SVlP19TUTMnE3rKFbwJALBabpKnUE4DMTfe+Dpzbhweu78D3Lt2CyeW84ici2leTKyx88+KtuO//OrC4ri/t+1NgtmHrozMrZ05M+86yhC8CQCgUKtdk6nEo9k/nfiLTkvjxFzfh9m9swJyagXTuiojIF+pqB3DHtRvwo6s2ITwt7ZOm51nBgUdra2vL0r2jbJD3AaC+vj4YFLkbwLx07aO4UPHF87fj4Zs6cNTinnTthojIt45e0oNHburAF87djuLCtM4POEBS9l3LfTBJPu8DQNeWrTcBcmS66i+u68ND3+/AJ0/pQjDAF/QQEaVLMKC46NQuPHzjeiybn8b3+wiOaQuHf5y+HWSHvA4A0VDkUgUuSUftkmIb3/nMFtxx7QbUVPJZfiKiTKmaksKvvroR37x4axqfFpBP1kYiaTl/ZIu8DQDR6uhcCK5LR+15M/rx0PXv4swjdqWjPBERDUMEOPvonXj4hvVYOLs/PftQ3FBTU5O228dey8sAUFVVVQzDugtAkZt1RYBPfagL93z7XUR41U9E5LmqKSncce0GfPyktKzjU2io3h6LxQrTUdxreRkACgOB7wKY42bN0iIbt1y5CVedt50v7CEiyiIBU/Hlj2/DTZ/fjJJil9dcUexvJ61vu1s0O+RdAJgRiSyA4jNu1qycmMK9330Xxx7EGf5ERNnqhKXduOfbGzB1YsrVugK9rLaqNq2PkXsh7wKArXo9XHy5z6zwAO7+9gbMCHHIn4go280KD+C+695FXa2ra7GYYto3ulkwG+RVAIiGw6e6+cjfwtn9uCsNaZKIiNJncrmF27+xAQtmujo58PBYdc3Jbhb0Wl4FAED+161Ki+b04Vdf3Ygxbt9PIiKitBtbYuPXX9vo6hMCtqFfd61YFsibAFAbCh0Bl1b7mxkawE+v3oTSIp78iYhy1ZhiG7+8ZiP2i7hzO0CABbFIZLkrxbJA3gQAGMZlbpSZNiGFX12zEeNKefInIsp1Y4pt/OzLm1x7FbsqXDnXZIO8CAC1tbUhUZzgtE7AVNz6hc2u/aIQEZH3pk1I4ZbPb0LAdGXVwJNi02NVbhTyWl4EAEnpKXDh3/KFc7dj/oz0rChFRETeWTi7H5//aKcbpUwEknkxGTAvAgAEpzgtMW9GP84/MS0rSRERURb4xMldrjwZYKs4Pudkg5wPAIPvbdZDndQwDOCbF2+FmfM/DSIi2hvDAL5+0VYYDo/1Ilgei8XGudOVd3L/lJfCIgBBJyWOObAbc2pcXTSCiIiyUF3tAI5a7HhV1wJNJuvd6MdLOR8ADLEcP/p38WldbrRCREQ54L9OdX7MV5H5LrTiqZwPAAoscLJ9rDrp9pKRRESUxebN6He8vLvYYADwmkJmOtn++IO73WqFiIhyxDFLHB77BbPd6cQ7OR8ABDrByfZuLhNJRES54YBZjo/95W704aWcDwCAjHWydWw63/JHROQ3LrzhdbwbfXgpDwKAsw+hvIyr/hER+U3FOMfHfgYA76npZGub538iIt+xbHFaIufPnzn/DwDQ52TjzZ2O8gMREeWgzdscH/sdLybgtXwIAI4Wd353a8CtPoiIKEe8u9VxAMj5BWRyPgAoZL2T7Ve8WeRWK0RElCNedH7sb3ejDy/lfAAQRdzJ9s+sLnapEyIiyhXPOj/2t7rRh5dyPgBA9A0nm69eW4imdkevEiAiohzS3BHEG02Fjmqo4jWX2vFM7gcA4BUnG6sCt/0551/qREREI/SLB8fBtp3VUIijc082yPkAECgqehbQlJMa9z01Bpu282kAIqJ8t2FLAA88NcZpmWRJb8kLbvTjpZyfAt/Q0LAzGg6/CGDZaGv09guu/UUFbrlys4udkR+cEM7vpaQXm46ytXNhj/dPeefaX1agP+lsDQBVvLBm85pdLrXkmZwfAQAAFbnDaY2Hny/FkytL3GiHiIiy0NOvFOOvLzo/zgvkdy6047m8CAAp274TgONLsS//eAI2On82lIiIssym7Sau/tFEN0r1WYbe7UYhr+VFAEgkEtsF8iendTZ3mvjM9ZMx4HB4iIiIssdAUnDJdyZjk/PV/wDFg/F43NECdNkiLwIAANiwf+lGndVrC/G1n02AqhvViIjIS6rAl38yAa81Onvs7x/EFFfONdkgbwJAc2vrXwC86Eate54Yg2t/WeFGKSIi8ogq8PX/NwH3/83xrH8AgCheamxpecyVYlkgbwIAAKga17hV67Y/j8O3GAKIiHLW935XjtsfHutaPRW9GkDejA/nVQBoTjQ/DuBJt+r96k/jcPWPJsLiK4OJiHKGZQNf+9kE/PS+MtdqiuCxptZW184v2SCvAgAAqG18EYBrp+x7Hh+DS66bjN4+TgzMR6VFDpcDo5zFzz4/9fQa+K9vT8HvHnHvyh+ApbZ9tZsFs0HeBYDmtuaVIviemzWffLkE53x1Kjq25Py6SfQ+0yZxeMevpk/mIkP5Zv3mAM7+ylQ89YrbL3mT65oSiVUuF/Vc3gUAAEAg8DUAr7tZ8o3GQpz8+co0/GKRl5bN7/W6BfLIsgV9XrdALnry5RKc8vlKvNVS4GpdBVYXjSn5uqtFs0Rernqzbds2a3xF+QuiuBAu/hv7BgR/fGYMBgYES+b2wcjP+OQrUydYuPPRsXzs02dMA/j2JVtQUcbbALnOsoDv31GOr/98AvoGXL9V2y+2eVxDY8O7bhfOBnkZAACgs7NzY3n5+F0CHOt27ZffKcLfVxfjgFkDmFDGIeRcNqHMwtYuE6+79Iww5Ybzjt+BU5d3e90GOdTQWoBPfXsKHn6+NC31BXp5U6Llz2kpngXyNgAAwPbOzhcrysZPg+ADbtfeuC2Ae54YA8MAFs7q52hADls6vw+vNhShbSPnePjB0vm9uP7SrfzO5rCUJfjxH8bjczdOxIat6fre6q1Nra15OfT/D3kdAABgflfnI11l4w8UQdTt2pYteOGNYjz1Sgn2qx3A1AqOBuQi0wBOXNaNHd0G1jQV8nZAnjKNwSv/6y/dioDJDzlXrV5biIu/Oxl/fKYUtp22p7P+0tTaej7y6Jn/PfHFs221tbVlYtnPAahL1z4MAzj98F248qPbeVsgh61LBHH3E2Px3GtFaN8cQE8vLxNzWUmxjapJKSxb0IezjtiJWHXS65ZolLZ0mfjeb8vxh7+NSXdIfz1QVLisoaFhZ1r3kgV8EQAAYGZV1XTLDDwBYFY69zOu1MZlZ3fio8fu5FUGEZFDyZTg9kfG4uY7x2NnT9oD+dsp6BGtra15Oenv/XwTAAAgGo1OhmU9DsX+6d7X9EkpXHJ6F848cidMXkQSEe0TVeCRF0rxvd+NR+u7wUzs0lcnf8BnAQAAqqqqKgpN86+AuD4xcE9mhJK49KxOHHcwZxwTEY3Ec68V47rbyl1/pn9vFFgdSBYctbZj7ZaM7DBL+C4AAIMhoMAM/EWAJZna58LZ/bjk9E4sX9gL8eVPnYho71SBv71cgh/9oQyr12b0sdznk2qfmEgktmdyp9nAt6eiWCxWqKnUz6A4L5P7nR0ewCdO3oGTP7iLtwaIyPdsG3hqVQluuacMb2R+PY47+63Uhe3t7b5cEtS3AWA3iYXDVyvkWmR4WeTo9CQuPHkHTvngLhQVcLIgEflLb7/gwafH4JcPjUNzR0bu8b+XrYovNSfi12V6x9nE7wEAAFAbDh8vkN8DGJfpfY8tsXHaYbvwiVN2oHIiX05CRPlt03YTdz46Fr99eCy27/BiKRrdBZFzm+LxBzzYeVZhANgtEonMNhV3ADjAi/0HTMWxB/Xgo8fuxKI5fEkJEeUPVeDlt4vw24fH4q8vlsCyPDv1vGIbck5LS0uDVw1kEwaA96ivrw92bd36ZVVcAw/flFhTmcQZh+/CmUfuQsU4LipERLlpR7eBvzxXit8+PBYNrZmZ0b8XCsEtRaWl/7NmzZoBLxvJJgwAexCrqTlabf01gGle9lEQVBxzYA/OOnInltTx7YNElP1sG3jxzSLc/fhYPLqiBANJz08zHarG+c2J5se9biTbeP7JZKtYLDYJydSNCpzjdS8AMG1CCqcc2o1TPrgLM0JczpSIssvaRAEe/HspHnq6FO+m7QU9+0ahtweShVf47fn+kWIAGEYsEjlGFT8CUOt1L/9QVzuAD31wF05Y1o3J5bxFQETe2LTNxJ+eLcX9T4/B2xlatGdktFHVvIRX/UNjABiBqqqq4qJA4CpVXA0ga37LDQM4YGY/jju4G8cd1I0pExgGiCi9tu8w8dSqYjz8QgmefrXYywl9e5KE4Melvb1fen3jRi6/Ooys+uSyXU1NzTzD1hsBHOZ1L+9nGED97D4ce1APjj2QYYCI3LNhSwB/XVGCh58vwSsNRbBtrzvaE3kCtnF5U1vTm153kisYAEahNlR7pBj2DzLxUqHRilUnccSiHhxW34v62X1cfpiI9sm6RBBPvlyCJ18uwSsNhel+Be+oCfAOVL7amGi5x+tecg1PC6O0HAgkIpFPiuLrACZ73c9Qpk5M4fD6Xhy+qAcHzu3jyoNE9B/6BgQvvFGEJ1eW4G+vFGPDluyYyDeEDVD5alOi5ZcAOOQ5CgwADs2aNWus1d9/pSouA1DmdT/DKSpQfGC/PhxyQC+Wze/DrDAfiSXyq3daC/Ds6mI8u7oIK98qQr/3j+yNRKcqbijuLf3Bms1rdnndTC7LiU87F0QikfEB4PLdQWC81/2M1OQKC4fM78WyBb04aF4fJpYxSBPlq82dJl54owjPvlqMZ18rxqbtXizFOzoCbFPIjWrKzc3NzV1e95MPGABcNmvWrLHJ3v5PG4IvKFDhdT/7qnpKCkvn96J+Vj8OnNeHaRP4fgKiXLW1y8RrawuxqqEQz71WjDXNBVl7L38IW0Vwawq4MR6Pd3rdTD5hAEiTWCw2TgdSF0P0vwGp8rqf0YpVJ7Gkrg+L5vShfr9+BgKiLNaxJYBVbxfi5beK8OKaIjS1Z/wte25KAHJLoKjgpw0NDTu9biYfMQCknxEL1Zygol8EcLDXzTg1udzC3Gg/6mf3o36/fsyL9aMgmHuXFES5zrKA5vVBrHqnCC+/U4iX3y5C+8asn7g3ArIKipvHT6r4/apVq7jsaRoxAGRQNBRaKmJeodAPAcidm29DKC5U7B8bDAL7xwYwL9aP6ikcJSByW2JDAG80FeKNxgK8tq4QbzYVorc/Xw7hmoLIfaJ6Y2Nr6wted+MX+fLbk1NqamrChm1/ApALAUz3uh+3jR9jY//dgWD/WD/mRgd464BoH3RsCeDNpgK80Th4wn+zqRCdu/LxbWDaLiK/UNP8RVNTU5vX3fgNA4C3jNpQ7eFi2BdB9VRA8mH8bo/GltiYGUpibrQfM6qTiFUP/v9ck4D8LGUJWtYH8GZTIRrXB7EuEcRr6wqxtSsvBgj3xgb0SVHjZ1WJlvufAnh14BEGgCwRjUarNWldKIILAEQ8bicjAqZiRnUSM8MDmBFKIjY9iRnVSVRNScLMx4uOYoBsAAAHjklEQVQd8i3LBto2BLGuPYim9iDWJQrQ0BpEY3sQqexaSz9tFGiB4tcBO/WLte3t673uhxgAspHUhmqXCuyPieDMXHyU0KnCoKK2KolYVRIzqgcQrUqipjKFyLQkJxxSVutPCuIdQbR0BNDUXoB1bUE0rR886Q/kxiI7btsqwN2q9u+aEonnAfALnEV8+RuZK+rq6gr6d/Yco2KfCcjpAEq87slrZWPswWAQGkD15BRCU1OonpLEjFAShQwHlAGWNXiPPrEhiLaNAbRtCmBdIoh1bQXo2ByAlZUvysmofoE+BjVuKxxb8uCaNWu43GiWYgDIEZFIZLwJnKLA6aI4CkCR1z1lE9NU/P/27ve3qeuO4/j7e66dxHacH87vQLKIRIvUNKgaXXmwtk/Kg43twaT9nZ02aWObVB6sYprQxqoOqAQjkIRAAgHnh2OHOL7nuwcXlVJRwehS58fnJV3pxCdyvpJ9cz8+9/icsYGUU0MtTg+3ODXcYmK4xemR7BjpbxF0W0HeQBrh8UaOlUfZcf9xjgePc6w8P9aqyWHbAvcweIbzF7Dfes5+r5X6jga9i4+g2dnZcmtv75fu/hvDLqKRgdfK55zRgZTRgRbjgynDlRajAyljgy1GBlLGKi0G+1KFhGMuRniymbBazfHoacLqkxxrTxMePc2x+jRh9WmOtSfJibkv/3041M24BHzaVS/9UevyHz16lx9x4+Pjxa58/ucGvwZ+ATbY7pqOqlziDPanDPenDPamDPRGhistBnoig30pQ/0pld6sv1zUOO9hsl0PrG8mVLcS1jeSrL0deFzN8XQr8GQr4fFGwpMNXdy/p3WMP+H+u700/fPKyspuuwuSt6cz4XgJM1NTH7jbr8AvAu+h1/hA5BKnvxzp64n0daf0dWftSk+aPV5O6e2OlIuR7kKktzvSXXC6i5F8TnMVXmW/Zew0Aju7xtZOoNYI7OwGtnYCm7WEjVqgup2wuR3Y3Als1BK2aoGNWtBF/eA48AX4pWD2h/8sLv4DUPo9JnTWHGOzExPjachd9CwMfAL0tLsmybZk7i5EuouRcinSU4p05p3ODqe76HTksqDQ1ZG1e7sj+bxT7MyCQ08p+//bkXcKnVm70JX9LkC5FL/zxC4X43fe5ogRao1Xd7q/6Gvu29cr0DWeBfZbWXu7nvU39ozmvrG9E2i2jGfN7MLebBk7DWOvaeztG1s7CTuNrK/WCEdlK9qTYAu4bPilfbi0tLS02u6C5GDojDs5kunJyfeccMHML4B9BHS2uygRaTdvQfjSzD+LMXzWP9T/V63BfzIoAJxQZ0dGSvWuro+dcCHgnzjMA5oCJ3L8ReBL8MuYXd5tNj9/+PBho91FyQ9PAUCA7JsF+7v750OIH7r7zzRCIHJcZJ/wMf+bRbvyLO5fXllZqba7Kmk/BQB5pfHx8WIhnz/vbh+b2UfgHwDldtclIq+1bcbVGLkSAp8/a7Wuara+vIoCgLyxH09OnklJPiT4OdzOgf8U6Gh3XSInWArcAr/mbteMeGVhefkLNFNf3oACgLy1uaG57r1S/f0YOY/5+4b9BDjT7rpEjikH7mL8i8g/LXC1s166pgV45G0pAMj/1czMTE9sxrMQz5n5OQjvgM+jkQKR/0UKLBn+FWbXiHYttPJ/v/3w9pN2FybHhwKAHLizIyOlRqEw79HmsTgPNgd+VqsWigCwDlzHuEG0GyH4v+vN5nXNzJeDpgAgbTM1NTUaYng3hDiP826EOYNZoK/dtYkcgA2H22A3ML9BDDc88ev37t171O7C5GRSAJBDZ3Jysj8PZyCZs+DvOJzBmSMLB0m76xN5jVXwm5jd9chXEG7maN29vbx8j+w+vsihoAAgR8bMzEwnzeY0nszExM+Y+zTYNDANTKF5BvLDaAKLwAL4gpsthGgLZvGO5/N379y5s9fm+kTeiAKAHBfJ1NTURIhxOphNYTbpMIUzCUw8PxQQ5E3sASvAMs6yBZZwX47uizGEhcXFxftkk/REjjQFADkpbHZiYiwN4Ud4mMDi6YidNhjFOI37GNgpoNDuQuVA7eKsEFgz536ER8G4T7QHBF/ed19aWlpaQ0P1cgIoAIh8w+TkZH8HjKck4wHGsDgEYQzzIZxBsBGII8+/wdDV7noFgGc465g/Anv8vL0OrOFhPcJqQvqgFcLDxcXFzXYXK3JYKACIvKXZ2dnyfn1/NMnFSnSvOFTMQ8XxigUq7l4xrAJUgH6y0YUy2bbMmsz4shTYBmoGDYdNoOp41cyqHqkaVnWLVYNqMKumrVDNl/Jrt27dqrW5dpEjSQFApA3m5uY6arVaqWDWl7oXo+cKGH0hxJJDgWg9WCxDKJp5ySO9BIpAAff+l57MrBe3r3dyNLzkL8936ASK3/g5AL3fKmmLl5aP9TpY88Vz0nSs/uJvesR961t1bAC7RBoW2HK3HYi7eKgRfNtgN8ZQx9kM1mokZru77pvlcrl+8+bNJiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIibfZfeQTxILlnK8AAAAAASUVORK5CYII=" />
                    </defs>
                    @if ($data)
                        {{-- main route --}}
                        <path id="{{ $data['id'] }}" d="{{ $data['path'] }}" stroke="#44aa00" stroke-width="10"
                            stroke-linecap="round" fill="none" data-room="{{ $room }}" />

                        {{-- animated arrow container --}}
                        <g id="Circle-{{ $data['circle'] }}"></g>
                    @endif
                </svg>



            </div>

        </div>

        <!-- Back Button -->
        <!-- Back Buttons -->
        <div class="flex justify-center gap-4 mt-2 mb-2">
            <a href="{{ route('homepage') }}"
                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-600 to-green-700 text-white text-sm font-semibold rounded-lg hover:from-green-700 hover:to-green-800 transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Homepage
            </a>
            <a href="{{ route('campus.directory') }}"
                class="inline-flex items-center px-4 py-2 bg-white text-green-800 text-sm font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Campus Directory
            </a>
        </div>
    </div>
    <script>
        let inactivityTimer;

        function resetTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(() => {
                window.location.href = '{{ route('welcome') }}';
            }, 30000);
        }
        ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(event => {
            document.addEventListener(event, resetTimer, true);
        });
        resetTimer();
    </script>
</body>

</html>
