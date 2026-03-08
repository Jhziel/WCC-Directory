<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Floor - WCC SCAN Campus Directory</title>
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

<body style="background: linear-gradient(90deg);">
    @php
        $room = request('room');
        $paths = config('RoomPaths.2ndFloor');
        $data = $paths[$room] ?? null;
    @endphp


    <!-- Floor Navigator Component -->
    <x-floor-navigator :currentFloor="2" />

    <!-- Main Content -->
    <div class="floor-container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-black mb-1">2nd Floor</h1>
            <p class="text-sm text-black/70">WCC SCAN Campus Directory</p>
        </div>

        <!-- SVG Container -->
        <div class="svg-wrapper">
            <div class="panzoom-container">
                <svg width="1939" height="653" fill="none" version="1.1" viewBox="0 0 1939 653"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="1939" height="653" fill="#fff" />
                    <path
                        d="m56 400h288.5v1.5l-11.5 5.5-6.5 6-4 7-2 6.5-0.5 8.5 1.5 7.5 4.5 8 6.5 6.5 9 5.5 11.5 3.5h299v159.5h-519l-77-91v-134.5z"
                        fill="#D9D9D9" />
                    <g fill-opacity=".5">
                        <path id="Room-202-BG" fill="{{ $room == 47 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 47 ? 1 : 0.5 }}"
                            d="m1133 485 7.5-1.5 6.5-4 4.5-8 1.5-7.5h269.5v21l6.23-2.423 7.03-4.128 6.24-5.449 5-9 3 6.5 6.5 7 7.5 4.5 7.41 3.5v-21.5h142.59v161h-481z"
                            fill="#d89b6c" />
                        <path d="m310 217h24.5l2.5 8.5 5.5 6 11.5 4v37.5h-44z" fill="#9eeb9e" />
                        <g fill="#d3d3ff">
                            <rect x="190" y="275" width="165" height="123" />
                            <rect x="189" y="217" width="119" height="56" />
                            <rect x="100" y="217" width="88" height="78" />
                        </g>
                        <rect x="8" y="217" width="90" height="78" fill="#d89b6c" />
                        <rect x="8" y="296" width="180" height="102" fill="#7e9cdf" />
                        <path d="m415 44h116.5v10h19.5v100h-20.5v21.5l-115.5-0.5z" fill="#7e9cdf" />
                    </g>
                    <path d="m1853 174.5h79v241.5h-79v-8.5h19l-3-11-7.5-7-8.5-3v-212z" fill="#D9D9D9" />
                    <g filter="url(#filter7_d_367_2)" opacity=".5">
                        <path
                            d="m1614 217h238v118h-34l-1-5-1.5-5.5-4-4-4.5-3.5-5.5-2-6.5-1h-127l-7.5 1.5-8 4-2.5 3-1.5 4.5-1.5 8h-33v-118z"
                            fill="#9EEB9E" />
                    </g>
                    <g id="COMFORT-ROOM" filter="url(#filter8_d_367_2)">
                        <path
                            d="m1614 217h238v118h-34l-1-5-1.5-5.5-4-4-4.5-3.5-5.5-2-6.5-1h-127l-7.5 1.5-8 4-2.5 3-1.5 4.5-1.5 8h-33v-118z"
                            fill="{{ $room == 41 || $room == 42 ? '#44aa00' : '#9EEB9E' }}"
                            fill-opacity="{{ $room == 41 || $room == 42 ? 1 : 0.5 }}" shape-rendering="crispEdges" />
                    </g>
                    <rect x="8" y="177" width="90" height="38" fill="#D9D9D9" />
                    <g fill="#a6b6c9" fill-opacity=".5">
                        <path id="Room-211-BG" fill="{{ $room == 36 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 36 ? 1 : 0.5 }}"
                            d="m813.3 217h-159.3v137.94l13.527 5.5176 6.0137 13.041h117.96l5.7988-13.996 15.533-4.4199 0.47071-138.08z" />
                        d="m813.3 217h-159.3v137.94l13.527 5.5176 6.0137 13.041h117.96l5.7988-13.996 15.533-4.4199
                        0.47071-138.08z" />
                        <path id="Room-209-BG" fill="{{ $room == 37 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 37 ? 1 : 0.5 }}"
                            d="m971.17 217h-157.87l-0.47071 138.08 0.49805-0.14258 14.531 6.5625 4.0078 11.5h121.13l1.125-6.5 5.0117-6.5469 14.25-4.8574-2.2168-138.1z" />
                        <path id="Room-207-BG" fill="{{ $room == 38 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 38 ? 1 : 0.5 }}"
                            d="m1133.1 217h-161.89l2.2168 138.1 0.2793-0.0957 7.5156 3.5 7.0137 4.0606 2.5058 4.9394 1.002 5.5 120.76 0.4961 1-6.9961 5.5098-6.5469 7.5097-3.4531 6.1875-1.2344 0.3867-138.27z" />
                        <path id="Room-205-BG" fill="{{ $room == 39 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 39 ? 1 : 0.5 }}"
                            d="m1292.2 263.5h-23.746v-29.5h-29.5v-17h-105.94l-0.3867 138.27 1.3321-0.26563 8.5 3.5 6.5293 4 4.0117 10.996 119.25 0.5039 2-7.5 4.0097-6.5 8.0196-3.5 6.2109-1.2109-0.291-91.791z" />
                        <path id="Room-203-BG" fill="{{ $room == 40 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 40 ? 1 : 0.5 }}"
                            d="m1292.2 263.5 0.291 91.791 1.7988-0.35157 8.17 3.5625 5.8593 3.5 3.0118 5.5 1.5 5.9961h120.25l1.5097-6.4961 5.0098-6.5 11.52-4.5586 2 0.55859v16.996l114.74 0.5039h44.6l-0.01-2e-3 1.5-157h-321v46.5h-0.7539z" />
                        <path id="Room-210-BG" fill="{{ $room == 44 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 44 ? 1 : 0.5 }}"
                            d="m812.63 484.93-7.1309-1.4258-6.5-4.5-5-8-1-7h-119.5l-2 9-5 7-7.5 4-6 1v137h159.77l-0.13672-137.07z" />
                        <path id="Room-208-BG" fill="{{ $room == 45 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 45 ? 1 : 0.5 }}"
                            d="m972.68 484.92-7.1816-1.916-6.5-3.5-4.5-8-2-7.5h-119.5l-1.5 7-3.5 7-6.5 5-8.5 2-0.36914-0.0742 0.13672 137.07h160.23l-0.31836-137.08z" />
                        <path id="Room-207-BG" fill="{{ $room == 46 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 46 ? 1 : 0.5 }}"
                            d="m972.68 484.92 0.31836 137.08h159v-136.5l-6.5-2.5-6.5-4-4-7.5-2-7.5h-120l-2 7.5-3.5 7-6.5 4.5-8 2-0.31836-0.084z" />
                    </g>
                    <g filter="url(#filter9_d_367_2)">
                        <line x1="132" x2="1612" y1="624" y2="624" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter10_d_367_2)">
                        <path d="m55 535v-135" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter11_d_367_2)">
                        <path d="m4 174.5h410.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter12_d_367_2)">
                        <path d="m414.5 175.5h137.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter13_d_367_2)">
                        <path d="m551 174.5h1382" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter14_d_367_2)">
                        <path d="m1932.5 172.5-0.56 471.95" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter15_d_367_2)">
                        <rect x="1890" y="605" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1891" y="606" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter16_d_367_2)">
                        <rect x="1849" y="565" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1850" y="566" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter17_d_367_2)">
                        <rect x="1890" y="595" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1891" y="596" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter18_d_367_2)">
                        <rect x="582" y="335" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="336" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter19_d_367_2)">
                        <rect x="502" y="245" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="246" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter20_d_367_2)">
                        <rect x="582" y="275" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="276" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter21_d_367_2)">
                        <rect x="582" y="265" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="266" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter22_d_367_2)">
                        <rect x="582" y="255" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="256" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter23_d_367_2)">
                        <rect transform="rotate(89.68 582 245)" x="582" y="245" width="100" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(89.68 581 246.01)" x="581" y="246.01" width="98" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter24_d_367_2)">
                        <rect x="582" y="245" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="246" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter25_d_367_2)">
                        <rect x="502" y="325" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="326" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter26_d_367_2)">
                        <rect x="502" y="315" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="316" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter27_d_367_2)">
                        <rect x="502" y="305" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="306" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter28_d_367_2)">
                        <rect x="502" y="295" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="296" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter29_d_367_2)">
                        <rect x="502" y="285" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="286" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter30_d_367_2)">
                        <rect x="502" y="275" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="276" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter31_d_367_2)">
                        <rect x="502" y="265" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="266" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter32_d_367_2)">
                        <rect x="502" y="255" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="256" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter33_d_367_2)">
                        <rect x="582" y="325" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="326" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter34_d_367_2)">
                        <rect x="582" y="315" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="316" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter35_d_367_2)">
                        <rect x="582" y="305" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="306" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter36_d_367_2)">
                        <rect x="582" y="295" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="296" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter37_d_367_2)">
                        <rect x="582" y="285" width="70" height="10" fill="#D9D9D9" />
                        <rect x="583" y="286" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter38_d_367_2)">
                        <rect x="502" y="335" width="70" height="10" fill="#D9D9D9" />
                        <rect x="503" y="336" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter39_d_367_2)">
                        <rect x="1890" y="585" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1891" y="586" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter40_d_367_2)">
                        <rect x="1890" y="575" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1891" y="576" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter41_d_367_2)">
                        <rect x="1890" y="565" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1891" y="566" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter42_d_367_2)">
                        <rect x="1881" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1882" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter43_d_367_2)">
                        <rect x="1827" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1828" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter44_d_367_2)">
                        <rect x="1818" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1819" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter45_d_367_2)">
                        <rect x="1809" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1810" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter46_d_367_2)">
                        <rect x="1872" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1873" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter47_d_367_2)">
                        <rect x="1863" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1864" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter48_d_367_2)">
                        <rect x="1854" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1855" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter49_d_367_2)">
                        <rect x="1845" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1846" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter50_d_367_2)">
                        <rect x="1836" y="605" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1837" y="606" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter51_d_367_2)">
                        <path d="M506 4H552V35H531.5V44H506V4Z" fill="#D9D9D9" />
                        <path d="m551.5 4.5v30h-20.5v9h-24.5v-39h45z" stroke="#000" />
                    </g>
                    <g filter="url(#filter52_d_367_2)">
                        <rect x="495" y="4" width="11" height="40" fill="#D9D9D9" />
                        <rect x="496" y="5" width="9" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter53_d_367_2)">
                        <rect x="434" y="4" width="11" height="40" fill="#D9D9D9" />
                        <rect x="435" y="5" width="9" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter54_d_367_2)">
                        <rect x="424" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="425" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter55_d_367_2)">
                        <rect x="414" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="415" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter56_d_367_2)">
                        <rect x="485" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="486" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter57_d_367_2)">
                        <rect x="475" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="476" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter58_d_367_2)">
                        <rect x="465" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="466" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter59_d_367_2)">
                        <rect x="455" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="456" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter60_d_367_2)">
                        <rect x="445" y="4" width="10" height="40" fill="#D9D9D9" />
                        <rect x="446" y="5" width="8" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter61_d_367_2)">
                        <rect x="1832" y="475" width="100" height="40" fill="#D9D9D9" />
                        <rect x="1833" y="476" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter62_d_367_2)">
                        <rect x="527" y="190" width="100" height="40" fill="#D9D9D9" />
                        <rect x="528" y="191" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter63_d_367_2)">
                        <path
                            d="m1868.2 499v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter64_d_367_2)">
                        <path
                            d="m563.21 214v-10.182h6.145v1.094h-4.912v3.44h4.594v1.094h-4.594v3.46h4.992v1.094h-6.225zm8.964-10.182 2.625 4.236h0.08l2.625-4.236h1.451l-3.201 5.091 3.201 5.091h-1.451l-2.625-4.156h-0.08l-2.625 4.156h-1.452l3.282-5.091-3.282-5.091h1.452zm9.619 0v10.182h-1.233v-10.182h1.233zm1.915 1.094v-1.094h7.637v1.094h-3.202v9.088h-1.233v-9.088h-3.202z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter65_d_367_2)">
                        <path d="m1933 416h-80.72" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter66_d_367_2)">
                        <line x1="1853" x2="1853" y1="406" y2="475" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter67_d_367_2)">
                        <path d="m1852 175 0.5 212.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter68_d_367_2)">
                        <line x1="1852" x2="627" y1="216" y2="216" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter69_d_367_2)">
                        <line x1="1733" x2="1734" y1="214.99" y2="314.99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter70_d_367_2)">
                        <path d="m1614.5 215v161" stroke="#000" stroke-width="5" />
                    </g>
                    <g filter="url(#filter71_d_367_2)">
                        <line x1="1613" x2="1673" y1="336" y2="336" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter72_d_367_2)">
                        <line x1="1852" x2="1792" y1="336" y2="336" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter73_d_367_2)">
                        <line x1="1667" x2="1797" y1="314" y2="314" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter74_d_367_2)">
                        <path d="m1453 354.5v21" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter75_d_367_2)">
                        <line x1="654.5" x2="653.5" y1="175.01" y2="390.01" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter76_d_367_2)">
                        <line x1="1133" x2="1133" y1="215" y2="375" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter77_d_367_2)">
                        <line x1="1293" x2="1293" y1="215" y2="375" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter78_d_367_2)">
                        <line x1="973" x2="973" y1="215" y2="375" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter79_d_367_2)">
                        <line x1="813" x2="813" y1="215" y2="375" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter80_d_367_2)">
                        <path d="m1613.5 463v158" stroke="#000" stroke-width="5" />
                    </g>
                    <g filter="url(#filter81_d_367_2)">
                        <path d="m1614 621v24" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter82_d_367_2)">
                        <line x1="813" x2="813" y1="465" y2="625" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter83_d_367_2)">
                        <line x1="653.5" x2="653.5" y1="441" y2="625" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter84_d_367_2)">
                        <line x1="973" x2="973" y1="465" y2="625" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter85_d_367_2)">
                        <line x1="1133" x2="1133" y1="465" y2="625" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter86_d_367_2)">
                        <path d="M1452.5 374.5L1614 375" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter87_d_367_2)">
                        <line x1="673" x2="793" y1="374" y2="374" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter88_d_367_2)">
                        <line x1="673" x2="793" y1="464" y2="464" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter89_d_367_2)">
                        <line x1="833" x2="953" y1="464" y2="464" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter90_d_367_2)">
                        <line x1="993" x2="1113" y1="464" y2="464" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter91_d_367_2)">
                        <path d="m1153 465 269.5-0.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter92_d_367_2)">
                        <path d="m1472 464h141.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter93_d_367_2)">
                        <path d="m833 374h120.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter94_d_367_2)">
                        <line x1="993" x2="1113" y1="374" y2="374" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter95_d_367_2)">
                        <line x1="1153" x2="1273" y1="374" y2="374" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter96_d_367_2)">
                        <line x1="1313" x2="1433" y1="374" y2="374" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter97_d_367_2)">
                        <path d="m652.2 374.3h-50" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter98_d_367_2)">
                        <path d="m502 214.99v158.3" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter99_d_367_2)">
                        <line x1="502" x2="552" y1="372.3" y2="372.3" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter100_d_367_2)">
                        <path d="m652 465.5-297-0.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter101_d_367_2)">
                        <path d="M414 176.5V4" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter102_d_367_2)">
                        <path d="m553 175v-175" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter103_d_367_2)">
                        <line x1="355" x2="356.02" y1="254.99" y2="394.99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter104_d_367_2)">
                        <line x1="553" x2="553" y1="353.3" y2="373.3" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter105_d_367_2)">
                        <line x1="603" x2="603" y1="353.3" y2="373.3" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter106_d_367_2)">
                        <path d="m552.5 354.3c14.763 5.58 21.24 9.866 25 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter107_d_367_2)">
                        <path d="m603.5 354.3c-14.763 5.58-20.24 9.867-24 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter108_d_367_2)">
                        <path d="M673.5 391H651" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter109_d_367_2)">
                        <path d="m673 391c-5.579 14.763-10.366 20.24-20.5 24" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter110_d_367_2)">
                        <path d="m672.5 441c-5.579-14.763-9.866-21.24-20-25" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter111_d_367_2)">
                        <path d="m1472.1 486.51v-23.513" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter112_d_367_2)">
                        <path d="m1472.5 485.5c-14.76-5.579-21.74-10.866-25.5-21" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter113_d_367_2)">
                        <path d="m1421.5 485.5c14.76-5.579 21.24-10.866 25-21" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter114_d_367_2)">
                        <path d="m1422.1 486.5v-23" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter115_d_367_2)">
                        <path d="m653 355.46c12.565 1.831 17.943 4.495 20 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter116_d_367_2)">
                        <path d="m1667.5 314c-12.56 1.831-18.94 6.453-21 21.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter117_d_367_2)">
                        <path d="m1796.5 314c12.56 1.831 19.44 6.453 21.5 21.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter118_d_367_2)">
                        <path d="m653 485c12.565-1.831 18.443-6.953 20.5-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter119_d_367_2)">
                        <path d="m812.5 485c-12.565-1.831-17.943-6.953-20-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter120_d_367_2)">
                        <path d="m1133.5 485c-12.57-1.831-18.4-6.953-20.46-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter121_d_367_2)">
                        <path d="m972.46 485c-12.565-1.831-17.901-6.953-19.958-22" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter122_d_367_2)">
                        <path d="m1133 485c12.56-1.831 17.94-5.953 20-21" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter123_d_367_2)">
                        <path d="m973 485c12.565-1.831 17.943-6.953 20-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter124_d_367_2)">
                        <path d="m813 485c12.565-1.831 17.943-6.953 20-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter125_d_367_2)">
                        <path d="m812.46 355.46c-12.565 1.831-17.901 4.495-19.958 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter126_d_367_2)">
                        <path d="m1452.5 355.5c-11.65 2.022-17.2 5.548-19.5 19.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter127_d_367_2)">
                        <path d="m653.5 196c-11.653 2.022-17.203 5.548-19.5 19.5" stroke="#000" stroke-width="5" />
                    </g>
                    <g filter="url(#filter128_d_367_2)">
                        <path d="m1873 407h-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter129_d_367_2)">
                        <path d="m1872 406.5c-2.02-11.653-6.55-17.703-20.5-20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter130_d_367_2)">
                        <line transform="matrix(0 -1 -1 0 354 235)" x2="20" y1="-1" y2="-1"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter131_d_367_2)">
                        <path d="m354.5 234.5c-11.653-2.022-17.203-5.548-19.5-19.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter132_d_367_2)">
                        <path d="m1292.5 355.46c-12.57 1.831-17.9 4.495-19.96 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter133_d_367_2)">
                        <path d="m1132.5 355.46c-12.57 1.831-17.9 4.495-19.96 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter134_d_367_2)">
                        <path d="m973.46 355.46c-12.565 1.831-17.901 4.495-19.958 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter135_d_367_2)">
                        <path d="m1293 355.46c12.56 1.831 17.94 4.495 20 19.542" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter136_d_367_2)">
                        <path d="m1133 355.46c12.56 1.831 17.94 4.495 20 19.542" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter137_d_367_2)">
                        <path d="m973 355.46c12.565 1.831 17.943 4.495 20 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter138_d_367_2)">
                        <path d="m813 355.5c12.565 1.831 17.943 4.453 20 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g id="Room-211-Text" filter="url(#filter139_d_367_2)">
                        <path
                            d="m702.46 292v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.276 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.536 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.758 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.241 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.258l3.022 7.378h0.12l3.022-7.378h2.257v10.182h-1.769v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm16.061 10.182v-1.332l3.535-3.466c0.338-0.341 0.62-0.644 0.845-0.909 0.226-0.266 0.395-0.522 0.507-0.771 0.113-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.218-0.826-0.146-0.232-0.347-0.411-0.602-0.537s-0.545-0.189-0.87-0.189c-0.335 0-0.628 0.07-0.88 0.209-0.252 0.136-0.447 0.33-0.587 0.582-0.136 0.252-0.203 0.552-0.203 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.52-0.262 1.117-0.393 1.79-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.288 0.444 0.432 0.951 0.432 1.521 0 0.381-0.073 0.756-0.219 1.124-0.145 0.368-0.402 0.775-0.77 1.223-0.365 0.447-0.877 0.989-1.536 1.625l-1.755 1.785v0.07h4.434v1.541h-6.98zm12.837-10.182v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.726 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755z"
                            fill="{{ $room == 36 ? 'white' : '#000' }}" />
                    </g>36
                    <g id="Room-209-Text" filter="url(#filter140_d_367_2)">
                        <path
                            d="m860.47 292v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412s-1.042 0.137-1.467 0.412c-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408s1.042-0.136 1.467-0.408c0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm16.061 10.182v-1.332l3.535-3.466c0.338-0.341 0.619-0.644 0.845-0.909 0.225-0.266 0.394-0.522 0.507-0.771s0.169-0.514 0.169-0.795c0-0.322-0.073-0.597-0.219-0.826-0.146-0.232-0.346-0.411-0.601-0.537-0.256-0.126-0.546-0.189-0.87-0.189-0.335 0-0.629 0.07-0.88 0.209-0.252 0.136-0.448 0.33-0.587 0.582-0.136 0.252-0.204 0.552-0.204 0.9h-1.755c0-0.647 0.148-1.208 0.443-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.52-0.262 1.117-0.393 1.789-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.289 0.444 0.433 0.951 0.433 1.521 0 0.381-0.073 0.756-0.219 1.124s-0.403 0.775-0.771 1.223c-0.364 0.447-0.876 0.989-1.536 1.625l-1.755 1.785v0.07h4.435v1.541h-6.98zm12.459 0.194c-0.819 0-1.522-0.207-2.108-0.622-0.584-0.417-1.033-1.019-1.348-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.348-1.79 0.586-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.035 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.716-1.243-0.308-0.282-0.672-0.423-1.093-0.423-0.633 0-1.134 0.315-1.502 0.945-0.368 0.626-0.553 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.099 0.418zm9.109-8.959c0.487 3e-3 0.961 0.089 1.422 0.258 0.464 0.166 0.881 0.438 1.252 0.816 0.372 0.374 0.667 0.876 0.885 1.506 0.219 0.63 0.329 1.409 0.329 2.337 3e-3 0.875-0.09 1.657-0.279 2.346-0.185 0.687-0.452 1.267-0.8 1.741-0.348 0.473-0.768 0.835-1.258 1.083-0.491 0.249-1.042 0.373-1.656 0.373-0.643 0-1.213-0.126-1.71-0.378-0.494-0.252-0.893-0.596-1.198-1.034-0.305-0.437-0.492-0.938-0.562-1.501h1.815c0.093 0.404 0.282 0.726 0.567 0.964 0.288 0.236 0.651 0.353 1.088 0.353 0.706 0 1.25-0.306 1.631-0.919 0.381-0.614 0.572-1.465 0.572-2.556h-0.07c-0.162 0.292-0.373 0.544-0.631 0.756-0.259 0.209-0.552 0.369-0.88 0.482-0.325 0.113-0.67 0.169-1.034 0.169-0.597 0-1.134-0.142-1.611-0.427-0.474-0.285-0.85-0.677-1.129-1.174-0.275-0.497-0.414-1.065-0.417-1.705 0-0.663 0.152-1.258 0.457-1.785 0.308-0.53 0.738-0.948 1.288-1.253 0.55-0.308 1.193-0.459 1.929-0.452zm5e-3 1.491c-0.358 0-0.681 0.088-0.97 0.264-0.285 0.172-0.51 0.408-0.676 0.706-0.162 0.295-0.243 0.625-0.243 0.989 3e-3 0.362 0.084 0.69 0.243 0.985 0.163 0.295 0.383 0.528 0.661 0.701 0.282 0.172 0.604 0.258 0.965 0.258 0.268 0 0.519-0.051 0.751-0.154s0.434-0.245 0.606-0.428c0.176-0.185 0.312-0.396 0.408-0.631 0.099-0.235 0.147-0.484 0.144-0.746 0-0.348-0.083-0.669-0.249-0.964-0.162-0.295-0.386-0.532-0.671-0.711-0.282-0.179-0.605-0.269-0.969-0.269z"
                            fill="{{ $room == 37 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter141_d_367_2)">
                        <path id="Room-207-BG"
                            d="m1021 292v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.71v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm16.06 10.182v-1.332l3.54-3.466c0.33-0.341 0.62-0.644 0.84-0.909 0.23-0.266 0.4-0.522 0.51-0.771s0.17-0.514 0.17-0.795c0-0.322-0.08-0.597-0.22-0.826-0.15-0.232-0.35-0.411-0.6-0.537-0.26-0.126-0.55-0.189-0.87-0.189-0.34 0-0.63 0.07-0.88 0.209-0.25 0.136-0.45 0.33-0.59 0.582s-0.2 0.552-0.2 0.9h-1.76c0-0.647 0.15-1.208 0.44-1.686 0.3-0.477 0.7-0.846 1.22-1.108s1.12-0.393 1.79-0.393c0.68 0 1.28 0.128 1.8 0.383s0.92 0.605 1.2 1.049c0.29 0.444 0.44 0.951 0.44 1.521 0 0.381-0.08 0.756-0.22 1.124-0.15 0.368-0.4 0.775-0.77 1.223-0.37 0.447-0.88 0.989-1.54 1.625l-1.75 1.785v0.07h4.43v1.541h-6.98zm12.46 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.46-1.739-0.46-2.849s0.16-2.055 0.47-2.834c0.31-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.28-0.616 2.1-0.616s1.52 0.205 2.1 0.616c0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.3-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.16 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.67 1.362 4.33-8.571v-0.07h-5.02v-1.541h6.93v1.576l-4.32 8.606h-1.92z"
                            fill="{{ $room == 38 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Room-205-Text" filter="url(#filter142_d_367_2)">
                        <path
                            d="m1176.1 292v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm16.06 10.182v-1.332l3.54-3.466c0.34-0.341 0.62-0.644 0.84-0.909 0.23-0.266 0.4-0.522 0.51-0.771s0.17-0.514 0.17-0.795c0-0.322-0.07-0.597-0.22-0.826-0.15-0.232-0.35-0.411-0.6-0.537-0.26-0.126-0.55-0.189-0.87-0.189-0.34 0-0.63 0.07-0.88 0.209-0.25 0.136-0.45 0.33-0.59 0.582-0.13 0.252-0.2 0.552-0.2 0.9h-1.76c0-0.647 0.15-1.208 0.45-1.686 0.29-0.477 0.7-0.846 1.21-1.108 0.52-0.262 1.12-0.393 1.79-0.393 0.69 0 1.29 0.128 1.8 0.383 0.52 0.255 0.92 0.605 1.21 1.049 0.28 0.444 0.43 0.951 0.43 1.521 0 0.381-0.07 0.756-0.22 1.124s-0.4 0.775-0.77 1.223c-0.36 0.447-0.88 0.989-1.54 1.625l-1.75 1.785v0.07h4.43v1.541h-6.98zm12.46 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.1 0.616 0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.41-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.17 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm9.12 1.501c-0.67 0-1.26-0.124-1.78-0.373-0.53-0.252-0.94-0.596-1.25-1.034-0.31-0.437-0.47-0.938-0.49-1.501h1.79c0.03 0.417 0.21 0.759 0.54 1.024 0.33 0.262 0.73 0.393 1.19 0.393 0.36 0 0.68-0.083 0.96-0.249s0.5-0.396 0.67-0.691c0.16-0.295 0.24-0.631 0.24-1.009 0-0.385-0.08-0.726-0.25-1.024-0.16-0.299-0.39-0.532-0.68-0.701-0.29-0.173-0.62-0.259-0.99-0.259-0.31-3e-3 -0.61 0.053-0.9 0.169-0.3 0.116-0.53 0.269-0.7 0.458l-1.67-0.274 0.53-5.25h5.91v1.541h-4.38l-0.3 2.7h0.06c0.19-0.222 0.46-0.406 0.81-0.552 0.34-0.149 0.72-0.224 1.13-0.224 0.62 0 1.17 0.146 1.65 0.438 0.48 0.288 0.86 0.686 1.14 1.193s0.42 1.087 0.42 1.74c0 0.673-0.16 1.273-0.47 1.8-0.31 0.524-0.73 0.936-1.28 1.238-0.55 0.298-1.18 0.447-1.9 0.447z"
                            fill="{{ $room == 39 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Room-203-Text" filter="url(#filter143_d_367_2)">
                        <path
                            d="m1379 287v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm19.51-5.091c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.6-5.091h2.25l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.1v7.01h-1.76v-10.182zm12.68 10.182v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm11.98 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm17.22-6.746h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.53-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm11.97-5.091v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm11.1 5.091c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.69-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm14.53 0v10.182h-1.84v-10.182h1.84zm10.71 3.436h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.53-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.26-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.92 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm7.22-0.637c-0.04-0.434-0.24-0.772-0.58-1.014s-0.79-0.363-1.33-0.363c-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.23 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.09 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.35 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.1 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84s0.25 0.713 0.25 1.153c0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.8 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.32-0.47-0.5-1.044-0.53-1.72h1.82c0.02 0.355 0.13 0.65 0.33 0.885 0.19 0.235 0.44 0.411 0.75 0.527s0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.96-0.319l-1.15-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.49-0.441-0.73-1.026-0.73-1.755 0-0.6 0.16-1.125 0.49-1.576s0.77-0.801 1.34-1.049c0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.78zm-99.95 24.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm16.06 10.182v-1.332l3.54-3.466c0.34-0.341 0.62-0.644 0.84-0.909 0.23-0.266 0.4-0.522 0.51-0.771s0.17-0.514 0.17-0.795c0-0.322-0.07-0.597-0.22-0.826-0.15-0.232-0.35-0.411-0.6-0.537-0.26-0.126-0.55-0.189-0.87-0.189-0.34 0-0.63 0.07-0.88 0.209-0.25 0.136-0.45 0.33-0.59 0.582-0.13 0.252-0.2 0.552-0.2 0.9h-1.76c0-0.647 0.15-1.208 0.45-1.686 0.29-0.477 0.7-0.846 1.21-1.108 0.52-0.262 1.12-0.393 1.79-0.393 0.69 0 1.29 0.128 1.8 0.383 0.52 0.255 0.92 0.605 1.21 1.049s0.43 0.951 0.43 1.521c0 0.381-0.07 0.756-0.22 1.124s-0.4 0.775-0.77 1.223c-0.36 0.447-0.88 0.989-1.54 1.625l-1.75 1.785v0.07h4.43v1.541h-6.98zm12.46 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.11 0.616 0.58 0.411 1.03 1.008 1.34 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.34 1.799-0.59 0.415-1.29 0.622-2.11 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.41-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.17 0.554 0.41 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm9.23 1.501c-0.72 0-1.35-0.122-1.91-0.368-0.55-0.245-0.99-0.586-1.31-1.024-0.32-0.437-0.49-0.943-0.51-1.516h1.87c0.01 0.275 0.1 0.515 0.27 0.721 0.17 0.202 0.39 0.359 0.66 0.472 0.28 0.113 0.58 0.169 0.93 0.169 0.36 0 0.68-0.063 0.97-0.189 0.28-0.129 0.5-0.308 0.66-0.537s0.23-0.492 0.23-0.79c0-0.309-0.08-0.58-0.24-0.816-0.16-0.235-0.4-0.419-0.7-0.551-0.31-0.133-0.68-0.199-1.11-0.199h-0.9v-1.422h0.9c0.36 0 0.67-0.062 0.93-0.184 0.27-0.123 0.48-0.295 0.63-0.517 0.16-0.226 0.23-0.486 0.23-0.781 0-0.288-0.06-0.538-0.2-0.75-0.13-0.216-0.31-0.383-0.55-0.503-0.23-0.119-0.51-0.179-0.83-0.179-0.31 0-0.6 0.057-0.86 0.169-0.27 0.113-0.48 0.274-0.65 0.483-0.16 0.205-0.24 0.45-0.25 0.735h-1.78c0.01-0.57 0.18-1.07 0.49-1.501 0.32-0.434 0.75-0.772 1.28-1.014 0.53-0.245 1.12-0.368 1.78-0.368 0.68 0 1.27 0.128 1.77 0.383 0.5 0.252 0.89 0.591 1.17 1.019 0.27 0.428 0.41 0.9 0.41 1.417 0 0.573-0.16 1.054-0.51 1.442-0.33 0.387-0.78 0.641-1.33 0.76v0.08c0.72 0.099 1.27 0.364 1.65 0.795 0.38 0.428 0.57 0.96 0.57 1.596 0 0.57-0.16 1.081-0.49 1.531-0.32 0.448-0.76 0.799-1.33 1.054-0.56 0.256-1.21 0.383-1.94 0.383z"
                            fill="{{ $room == 40 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Room-210-Text" filter="url(#filter144_d_367_2)">
                        <path
                            d="m697.15 549v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.831-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.813 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm16.061 10.182v-1.332l3.534-3.466c0.338-0.341 0.62-0.644 0.846-0.909 0.225-0.266 0.394-0.522 0.507-0.771 0.112-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.219-0.826-0.146-0.232-0.346-0.411-0.602-0.537-0.255-0.126-0.545-0.189-0.87-0.189-0.334 0-0.628 0.07-0.88 0.209-0.252 0.136-0.447 0.33-0.586 0.582-0.136 0.252-0.204 0.552-0.204 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.521-0.262 1.117-0.393 1.79-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.288 0.444 0.433 0.951 0.433 1.521 0 0.381-0.073 0.756-0.219 1.124s-0.403 0.775-0.771 1.223c-0.364 0.447-0.876 0.989-1.536 1.625l-1.755 1.785v0.07h4.435v1.541h-6.98zm12.836-10.182v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.349 10.376c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.468-1.739-0.468-2.849 4e-3 -1.11 0.161-2.055 0.473-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616s1.516 0.205 2.103 0.616 1.036 1.008 1.347 1.79c0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.372-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.309-0.282-0.673-0.423-1.094-0.423-0.633 0-1.134 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-4e-3 0.812 0.078 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.675 0.418 1.099 0.418z"
                            fill="{{ $room == 44 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Room-208-Text" filter="url(#filter145_d_367_2)">
                        <path
                            d="m856.49 546v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.209 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.276 0.477-0.682 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.022-7.378h2.258v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.769v-10.182zm16.06 10.182v-1.332l3.535-3.466c0.338-0.341 0.62-0.644 0.845-0.909 0.226-0.266 0.395-0.522 0.507-0.771 0.113-0.249 0.169-0.514 0.169-0.795 0-0.322-0.073-0.597-0.218-0.826-0.146-0.232-0.347-0.411-0.602-0.537s-0.545-0.189-0.87-0.189c-0.335 0-0.628 0.07-0.88 0.209-0.252 0.136-0.447 0.33-0.587 0.582-0.135 0.252-0.203 0.552-0.203 0.9h-1.755c0-0.647 0.147-1.208 0.442-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.52-0.262 1.117-0.393 1.79-0.393 0.683 0 1.283 0.128 1.8 0.383s0.918 0.605 1.203 1.049c0.288 0.444 0.432 0.951 0.432 1.521 0 0.381-0.073 0.756-0.218 1.124-0.146 0.368-0.403 0.775-0.771 1.223-0.365 0.447-0.877 0.989-1.536 1.625l-1.755 1.785v0.07h4.434v1.541h-6.98zm12.459 0.194c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.16-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616s1.516 0.205 2.103 0.616 1.036 1.008 1.347 1.79c0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.636 0 1.139-0.313 1.506-0.94 0.372-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.308-0.282-0.673-0.423-1.094-0.423-0.633 0-1.133 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.309 0.279 0.675 0.418 1.099 0.418zm9.194 1.501c-0.739 0-1.396-0.124-1.969-0.373-0.57-0.248-1.017-0.588-1.342-1.019-0.322-0.434-0.481-0.926-0.478-1.476-3e-3 -0.428 0.09-0.821 0.279-1.179s0.444-0.656 0.765-0.895c0.325-0.242 0.687-0.396 1.084-0.462v-0.07c-0.523-0.116-0.948-0.382-1.272-0.8-0.322-0.421-0.481-0.906-0.478-1.457-3e-3 -0.523 0.143-0.991 0.438-1.402s0.699-0.734 1.213-0.969c0.514-0.239 1.1-0.358 1.76-0.358 0.653 0 1.234 0.119 1.745 0.358 0.514 0.235 0.918 0.558 1.213 0.969 0.298 0.411 0.447 0.879 0.447 1.402 0 0.551-0.164 1.036-0.492 1.457-0.325 0.418-0.744 0.684-1.258 0.8v0.07c0.398 0.066 0.756 0.22 1.074 0.462 0.322 0.239 0.577 0.537 0.766 0.895 0.192 0.358 0.288 0.751 0.288 1.179 0 0.55-0.162 1.042-0.487 1.476-0.325 0.431-0.772 0.771-1.342 1.019-0.567 0.249-1.218 0.373-1.954 0.373zm0-1.422c0.381 0 0.712-0.064 0.994-0.194 0.282-0.132 0.501-0.318 0.656-0.556 0.156-0.239 0.236-0.514 0.239-0.826-3e-3 -0.324-0.088-0.611-0.254-0.86-0.162-0.252-0.386-0.449-0.671-0.591-0.281-0.143-0.603-0.214-0.964-0.214-0.365 0-0.69 0.071-0.975 0.214-0.285 0.142-0.51 0.339-0.676 0.591-0.162 0.249-0.242 0.536-0.238 0.86-4e-3 0.312 0.073 0.587 0.228 0.826 0.156 0.235 0.375 0.419 0.657 0.551 0.285 0.133 0.619 0.199 1.004 0.199zm0-4.638c0.311 0 0.586-0.063 0.825-0.189 0.242-0.126 0.433-0.302 0.572-0.527s0.21-0.486 0.214-0.781c-4e-3 -0.291-0.073-0.546-0.209-0.765-0.136-0.222-0.325-0.393-0.567-0.512-0.242-0.123-0.52-0.184-0.835-0.184-0.322 0-0.605 0.061-0.85 0.184-0.242 0.119-0.431 0.29-0.567 0.512-0.133 0.219-0.197 0.474-0.194 0.765-3e-3 0.295 0.063 0.556 0.199 0.781 0.139 0.222 0.33 0.398 0.572 0.527 0.245 0.126 0.525 0.189 0.84 0.189z"
                            fill="#000" />
                    </g>
                    <g id="Room-207-Computer-Room-Text" filter="url(#filter146_d_367_2)">
                        <path
                            d="m1020.5 538v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.71v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm16.06 10.182v-1.332l3.54-3.466c0.33-0.341 0.62-0.644 0.84-0.909 0.23-0.266 0.4-0.522 0.51-0.771s0.17-0.514 0.17-0.795c0-0.322-0.08-0.597-0.22-0.826-0.15-0.232-0.35-0.411-0.6-0.537-0.26-0.126-0.55-0.189-0.87-0.189-0.34 0-0.63 0.07-0.88 0.209-0.25 0.136-0.45 0.33-0.59 0.582s-0.2 0.552-0.2 0.9h-1.76c0-0.647 0.15-1.208 0.44-1.686 0.3-0.477 0.7-0.846 1.22-1.108s1.12-0.393 1.79-0.393c0.68 0 1.28 0.128 1.8 0.383s0.92 0.605 1.2 1.049c0.29 0.444 0.44 0.951 0.44 1.521 0 0.381-0.08 0.756-0.22 1.124-0.15 0.368-0.4 0.775-0.77 1.223-0.37 0.447-0.88 0.989-1.54 1.625l-1.75 1.785v0.07h4.43v1.541h-6.98zm12.46 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.46-1.739-0.46-2.849s0.16-2.055 0.47-2.834c0.31-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.28-0.616 2.1-0.616s1.52 0.205 2.1 0.616c0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.3-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.16 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.67 1.362 4.33-8.571v-0.07h-5.02v-1.541h6.93v1.576l-4.32 8.606h-1.92zm-83.31 10.254h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.142-0.238-0.319-0.441-0.531-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.53-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.546-0.586s0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.301 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.926 0.392 1.306 0.701c0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm10.79 1.655c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.59-5.091h2.26l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm12.69 10.182v-10.182h3.82c0.78 0 1.44 0.146 1.97 0.438 0.53 0.291 0.94 0.692 1.21 1.203 0.27 0.507 0.41 1.084 0.41 1.73 0 0.653-0.14 1.233-0.41 1.74-0.28 0.507-0.68 0.906-1.22 1.198-0.54 0.288-1.2 0.433-1.98 0.433h-2.54v-1.517h2.29c0.45 0 0.83-0.079 1.12-0.238s0.51-0.378 0.65-0.657c0.14-0.278 0.21-0.598 0.21-0.959s-0.07-0.68-0.21-0.955-0.36-0.489-0.65-0.641c-0.3-0.156-0.67-0.234-1.13-0.234h-1.69v8.641h-1.85zm15.43-10.182h1.84v6.652c0 0.729-0.17 1.371-0.51 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.18 0.462s-1.55-0.154-2.17-0.462c-0.62-0.312-1.1-0.744-1.45-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.27 1.134 0.19 0.331 0.46 0.591 0.8 0.78 0.34 0.186 0.75 0.279 1.21 0.279 0.47 0 0.87-0.093 1.22-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm3.4 1.546v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm9.69 8.636v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm8.51 0v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.69 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm7.31 4.614v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm12.95-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182z"
                            fill="{{ $room == 46 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Room-202-Text" filter="url(#filter147_d_367_2)">
                        <path
                            d="m1284.3 538v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm12.26-10.182v10.182h-1.84v-10.182h1.84zm8.82 3.252c-0.08-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.47 0.412-0.42 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.177-0.37 1.939 0 0.769 0.12 1.42 0.37 1.954 0.24 0.534 0.57 0.94 1 1.218 0.44 0.275 0.94 0.413 1.51 0.413 0.51 0 0.96-0.1 1.34-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.31-0.799 0.31-1.292l0.41 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.23 0.512-0.94 0-1.77-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.48-1.034 0.57-0.239 1.19-0.358 1.85-0.358 0.57 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.93 1.073 0.25 0.415 0.41 0.872 0.49 1.373h-1.88zm3.75 6.93v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm19.42-7.383c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.63 0.183l0.95 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.51-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.3-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.89 0.378c0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm12.27 0.637h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.53-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586 0.14-0.232 0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.92 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h1.85v4.311h4.71v-4.311h1.85v10.182h-1.85v-4.325h-4.71v4.325h-1.85zm19.52-5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.47 0.412-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h1.85v8.636h4.48v1.546h-6.33zm11.41 0v-10.182h1.84v8.636h4.48v1.546h-6.32zm9.77-10.182v10.182h-1.84v-10.182h1.84zm2 10.182v-10.182h3.9c0.73 0 1.34 0.116 1.83 0.348 0.49 0.229 0.86 0.542 1.1 0.94s0.37 0.848 0.37 1.352c0 0.414-0.08 0.769-0.24 1.064-0.16 0.292-0.38 0.529-0.64 0.711-0.27 0.182-0.57 0.313-0.9 0.393v0.099c0.36 0.02 0.7 0.131 1.04 0.333 0.33 0.199 0.6 0.481 0.82 0.845 0.21 0.365 0.31 0.806 0.31 1.323 0 0.527-0.12 1.001-0.38 1.422-0.25 0.417-0.64 0.747-1.15 0.989-0.52 0.242-1.16 0.363-1.94 0.363h-4.12zm1.84-1.541h1.99c0.67 0 1.15-0.128 1.44-0.383 0.3-0.259 0.45-0.59 0.45-0.994 0-0.302-0.07-0.574-0.22-0.816-0.15-0.245-0.37-0.437-0.64-0.576-0.28-0.143-0.6-0.214-0.98-0.214h-2.04v2.983zm0-4.311h1.83c0.31 0 0.6-0.058 0.86-0.174 0.25-0.119 0.45-0.286 0.6-0.502 0.15-0.218 0.22-0.477 0.22-0.775 0-0.395-0.14-0.719-0.42-0.975-0.27-0.255-0.68-0.383-1.22-0.383h-1.87v2.809zm7.36 5.852v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm5.15 4.614h-1.97l3.59-10.182h2.27l3.59 10.182h-1.96l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.75 3.992v-10.182h3.82c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.53 4.614h-2.06l-2.48-4.614h2.01zm2.76-5.568h2.08l2.49 4.504h0.1l2.49-4.504h2.09l-3.71 6.384v3.798h-1.84v-3.798l-3.7-6.384zm-106.53 27.182v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.69 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.59-5.091h2.26l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm16.07 10.182v-1.332l3.53-3.466c0.34-0.341 0.62-0.644 0.85-0.909 0.22-0.266 0.39-0.522 0.5-0.771s0.17-0.514 0.17-0.795c0-0.322-0.07-0.597-0.22-0.826-0.14-0.232-0.34-0.411-0.6-0.537-0.25-0.126-0.54-0.189-0.87-0.189s-0.63 0.07-0.88 0.209c-0.25 0.136-0.45 0.33-0.59 0.582-0.13 0.252-0.2 0.552-0.2 0.9h-1.75c0-0.647 0.14-1.208 0.44-1.686 0.29-0.477 0.7-0.846 1.22-1.108s1.11-0.393 1.79-0.393 1.28 0.128 1.8 0.383c0.51 0.255 0.91 0.605 1.2 1.049s0.43 0.951 0.43 1.521c0 0.381-0.07 0.756-0.22 1.124-0.14 0.368-0.4 0.775-0.77 1.223-0.36 0.447-0.87 0.989-1.53 1.625l-1.76 1.785v0.07h4.44v1.541h-6.98zm12.45 0.194c-0.81 0-1.52-0.207-2.1-0.622-0.59-0.417-1.04-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.77-1.379 1.35-1.79 0.59-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.11 0.616 0.58 0.411 1.03 1.008 1.34 1.79 0.32 0.782 0.48 1.727 0.48 2.834 0 1.114-0.16 2.065-0.48 2.854-0.31 0.785-0.76 1.385-1.34 1.799-0.59 0.415-1.29 0.622-2.11 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.09-1.488-0.26-2.038-0.17-0.551-0.4-0.965-0.71-1.243-0.31-0.282-0.68-0.423-1.1-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.55 2.759-0.01 0.812 0.07 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.3 0.279 0.67 0.418 1.09 0.418zm5.58 1.362v-1.332l3.53-3.466c0.34-0.341 0.62-0.644 0.85-0.909 0.22-0.266 0.39-0.522 0.51-0.771 0.11-0.249 0.16-0.514 0.16-0.795 0-0.322-0.07-0.597-0.21-0.826-0.15-0.232-0.35-0.411-0.61-0.537-0.25-0.126-0.54-0.189-0.87-0.189s-0.62 0.07-0.88 0.209c-0.25 0.136-0.44 0.33-0.58 0.582s-0.21 0.552-0.21 0.9h-1.75c0-0.647 0.15-1.208 0.44-1.686 0.3-0.477 0.7-0.846 1.22-1.108s1.12-0.393 1.79-0.393c0.68 0 1.28 0.128 1.8 0.383s0.92 0.605 1.2 1.049c0.29 0.444 0.43 0.951 0.43 1.521 0 0.381-0.07 0.756-0.21 1.124-0.15 0.368-0.41 0.775-0.77 1.223-0.37 0.447-0.88 0.989-1.54 1.625l-1.76 1.785v0.07h4.44v1.541h-6.98z"
                            fill="{{ $room == 47 ? 'white' : '#000' }}" />
                    </g>
                    <g id="COMFORT-ROOM-TEXT-MEN" filter="url(#filter148_d_367_2)">
                        <path
                            d="m1640.2 259.82h2.25l3.03 7.378h0.12l3.02-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.09v7.01h-1.77v-10.182zm12.68 10.182v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm16.87-10.182v10.182h-1.64l-4.79-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm3.46 0v1.014c0 0.292-0.06 0.595-0.17 0.91-0.11 0.312-0.26 0.61-0.45 0.895-0.19 0.282-0.41 0.524-0.66 0.726l-0.83-0.542c0.18-0.275 0.34-0.572 0.48-0.89 0.13-0.321 0.2-0.684 0.2-1.089v-1.024h1.43zm7.08 2.799c-0.04-0.434-0.24-0.772-0.58-1.014-0.35-0.242-0.79-0.363-1.34-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.41 0.398 0.16 0.106 0.35 0.196 0.56 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.03-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.82c0.02 0.355 0.13 0.65 0.32 0.885 0.2 0.235 0.45 0.411 0.75 0.527 0.32 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.55-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.49-1.576 0.32-0.451 0.77-0.801 1.33-1.049 0.57-0.252 1.21-0.378 1.92-0.378 0.72 0 1.35 0.126 1.9 0.378 0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm15.75 0.637h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.53-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02z"
                            fill="{{ $room == 41 || 42 ? 'white' : '#000' }}" />
                    </g>
                    <g id="COMFORT-ROOM-TEXT-WOMEN" filter="url(#filter149_d_367_2)">
                        <path
                            d="m1749.6 270-2.87-10.182h1.98l1.84 7.482h0.09l1.96-7.482h1.81l1.96 7.487h0.09l1.83-7.487h1.99l-2.88 10.182h-1.82l-2.03-7.144h-0.08l-2.05 7.144h-1.82zm20.51-5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.24 0.531-0.35 1.182-0.35 1.954s0.11 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm12.69 10.182v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm16.87-10.182v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.8 6.941h0.09v-6.941h1.83zm3.46 0v1.014c0 0.292-0.06 0.595-0.17 0.91-0.11 0.312-0.26 0.61-0.46 0.895-0.19 0.282-0.41 0.524-0.65 0.726l-0.84-0.542c0.19-0.275 0.34-0.572 0.48-0.89 0.14-0.321 0.2-0.684 0.2-1.089v-1.024h1.44zm7.08 2.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.79-0.363-1.33-0.363-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363 0.35 0.152 0.67 0.345 0.96 0.577 0.28 0.232 0.51 0.512 0.67 0.84 0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.37-1.074c-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.4 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.18-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.08-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.73-1.026-0.73-1.755 0-0.6 0.17-1.125 0.49-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.73 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm15.74 0.637h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.24 0.53-0.37 1.178-0.37 1.944 0 0.779 0.13 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586 0.14-0.232 0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.93 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01z"
                            fill="{{ $room == 41 || 42 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter150_d_367_2)">
                        <rect x="354" y="215" width="60" height="60" fill="#D9D9D9" />
                        <rect x="355" y="216" width="58" height="58" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter151_d_367_2)">
                        <rect transform="rotate(180 404 265)" x="404" y="265" width="40" height="42"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter152_d_367_2)">
                        <path d="m377.26 255v-23.273h14.045v2.5h-11.227v7.864h10.5v2.5h-10.5v7.909h11.409v2.5h-14.227z"
                            fill="#fff" />
                    </g>
                    <g filter="url(#filter153_d_367_2)">
                        <line x1="413" x2="552" y1="44" y2="44" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter154_d_367_2)">
                        <path d="m355 400c-19.33 0-35 14.551-35 32.5s15.67 32.5 35 32.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter155_d_367_2)">
                        <circle cx="355" cy="400" r="10" fill="#D9D9D9" />
                        <circle cx="355" cy="400" r="9" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter156_d_367_2)">
                        <line x1="336" x2="8" y1="216" y2="216" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter157_d_367_2)">
                        <path d="m54.5 534 78.962 90.855" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter158_d_367_2)">
                        <path d="m345 399.5h-288.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter159_d_367_2)">
                        <path d="m57 400.5h-53" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter160_d_367_2)">
                        <line x1="6" x2="6" y1="401" y2="174" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter161_d_367_2)">
                        <path d="M355.5 274H188" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter162_d_367_2)">
                        <line x1="99" x2="99" y1="175" y2="295" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter163_d_367_2)">
                        <line x1="189" x2="189" y1="215" y2="400" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter164_d_367_2)">
                        <line x1="188" x2="8" y1="296" y2="296" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter165_d_367_2)">
                        <path d="m1568.5 215v50.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter166_d_367_2)">
                        <path d="m1567.5 265c11.05 0 21.5 8.954 21.5 20s-10.45 20-21.5 20" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter167_d_367_2)">
                        <path d="M1568.5 304.5V375" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter168_d_367_2)">
                        <path d="m1568 284.21h44" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter169_d_367_2)">
                        <path d="m1568 283.52h21" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter170_d_367_2)">
                        <line x1="1568" x2="1589" y1="285" y2="285" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter171_d_367_2)">
                        <line x1="309" x2="309" y1="215" y2="275" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter172_d_367_2)">
                        <path d="m651 441h22.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter173_d_367_2)">
                        <line x1="1239" x2="1239" y1="215" y2="235" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter174_d_367_2)">
                        <line x1="1238" x2="1268" y1="234" y2="234" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter175_d_367_2)">
                        <path d="m1268.5 233v32" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter176_d_367_2)">
                        <line x1="1268" x2="1292" y1="264" y2="264" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter177_d_367_2)">
                        <path d="m1853 216h26" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter178_d_367_2)">
                        <path d="m1878.5 215v50.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter179_d_367_2)">
                        <line x1="1853" x2="1878" y1="264.5" y2="264.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter180_d_367_2)">
                        <line x1="501" x2="527" y1="214" y2="214" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter181_d_367_2)">
                        <path d="m737 174h50v20h-50v-20z" fill="#D9D9D9" />
                        <path d="m786 175v18h-48v-18h48z" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter182_d_367_2)">
                        <line x1="1688" x2="1778" y1="234" y2="234" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter183_d_367_2)">
                        <line x1="1688" x2="1778" y1="256" y2="256" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter184_d_367_2)">
                        <line x1="1733" x2="1778" y1="277" y2="277" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter185_d_367_2)">
                        <path
                            d="m461.98 100.25h-1.859c-0.053-0.3054-0.151-0.5755-0.294-0.8108-0.142-0.2387-0.319-0.4408-0.532-0.6066-0.212-0.1657-0.454-0.29-0.725-0.3728-0.269-0.0862-0.559-0.1293-0.87-0.1293-0.554 0-1.044 0.1392-1.472 0.4176-0.428 0.2751-0.762 0.6795-1.004 1.2131-0.242 0.5298-0.363 1.1778-0.363 1.9438 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.916 0.403 1.467 0.403 0.304 0 0.59-0.04 0.855-0.12 0.268-0.083 0.508-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.541-0.586 0.15-0.232 0.252-0.497 0.309-0.796l1.859 0.01c-0.07 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.806 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.397-0.621-0.702-0.415-1.256-1.013-1.66-1.795s-0.607-1.72-0.607-2.814c0-1.097 0.204-2.0349 0.612-2.8138 0.408-0.7822 0.963-1.3805 1.665-1.7948 0.703-0.4143 1.498-0.6214 2.387-0.6214 0.566 0 1.093 0.0795 1.581 0.2386 0.487 0.1591 0.921 0.3928 1.302 0.701 0.381 0.3049 0.695 0.6795 0.94 1.1236 0.248 0.4408 0.411 0.9446 0.487 1.5118zm2.874 6.746h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.0938h-0.08l-2.714 8.0938zm0.064-3.992h5.37v1.481h-5.37v-1.481zm8.759-6.1898h2.257l3.023 7.3778h0.119l3.023-7.3778h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.9799h-0.094v7.0099h-1.77v-10.182zm12.687 10.182v-10.182h3.819c0.782 0 1.438 0.1458 1.968 0.4375 0.534 0.2916 0.937 0.6927 1.209 1.2031 0.275 0.5071 0.412 1.0838 0.412 1.7302 0 0.653-0.137 1.233-0.412 1.74-0.276 0.507-0.682 0.906-1.219 1.198-0.536 0.288-1.198 0.433-1.983 0.433h-2.531v-1.517h2.282c0.458 0 0.832-0.079 1.124-0.238 0.291-0.159 0.507-0.378 0.646-0.657 0.143-0.278 0.214-0.598 0.214-0.959 0-0.3614-0.071-0.6795-0.214-0.9546-0.139-0.2751-0.356-0.4889-0.651-0.6414-0.292-0.1557-0.668-0.2336-1.129-0.2336h-1.69v8.6406h-1.845zm15.429-10.182h1.844v6.6518c0 0.729-0.172 1.371-0.517 1.924-0.341 0.554-0.822 0.986-1.442 1.298-0.62 0.308-1.344 0.462-2.172 0.462-0.832 0-1.558-0.154-2.178-0.462-0.62-0.312-1.1-0.744-1.442-1.298-0.341-0.553-0.512-1.195-0.512-1.924v-6.6518h1.845v6.4978c0 0.424 0.093 0.802 0.278 1.134 0.189 0.331 0.454 0.591 0.796 0.78 0.341 0.186 0.745 0.279 1.213 0.279 0.467 0 0.871-0.093 1.213-0.279 0.344-0.189 0.61-0.449 0.795-0.78 0.186-0.332 0.279-0.71 0.279-1.134v-6.4978zm9.382 2.799c-0.046-0.4342-0.242-0.7723-0.586-1.0142-0.342-0.242-0.786-0.3629-1.333-0.3629-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.2734-0.632 0.4723c-0.145 0.1988-0.22 0.4259-0.223 0.6811 0 0.2121 0.048 0.396 0.144 0.5515 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.7552 0-0.5999 0.163-1.1252 0.488-1.576 0.328-0.4507 0.774-0.8004 1.337-1.049 0.563-0.2519 1.201-0.3778 1.914-0.3778 0.723 0 1.356 0.1259 1.899 0.3778 0.547 0.2486 0.976 0.5949 1.288 1.0391 0.311 0.4408 0.472 0.9479 0.482 1.5213h-1.775zm-52.169 17.637h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.53-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.498 0.179-1.049 0.268-1.656 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm2.874 6.746h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm17.126-6.19v10.182h-1.641l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.793 6.941h0.089v-6.941h1.835zm1.562 1.546v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm9.69 8.636v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.661zm8.503 0v-10.182h6.623v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.662zm16.872-10.182v10.182h-1.641l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.792 6.941h0.09v-6.941h1.835z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter186_d_367_2)">
                        <path
                            d="m265.43 517.82h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm13.995 10.182h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm10.603-6.19v10.182h-1.845v-10.182h1.845zm10.364 0v10.182h-1.64l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.792 6.941h0.09v-6.941h1.834zm5.483 10.182v-10.182h1.844v8.636h4.485v1.546h-6.329zm16.631-5.091c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.897c0.736 0 1.348 0.116 1.835 0.348 0.491 0.229 0.857 0.542 1.099 0.94 0.245 0.398 0.368 0.848 0.368 1.352 0 0.414-0.08 0.769-0.239 1.064-0.159 0.292-0.373 0.529-0.641 0.711-0.269 0.182-0.569 0.313-0.9 0.393v0.099c0.361 0.02 0.707 0.131 1.039 0.333 0.335 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.318 0.806 0.318 1.323 0 0.527-0.127 1.001-0.382 1.422-0.256 0.417-0.64 0.747-1.154 0.989s-1.16 0.363-1.939 0.363h-4.121zm1.844-1.541h1.984c0.669 0 1.152-0.128 1.447-0.383 0.298-0.259 0.447-0.59 0.447-0.994 0-0.302-0.075-0.574-0.224-0.816-0.149-0.245-0.361-0.437-0.636-0.576-0.275-0.143-0.603-0.214-0.984-0.214h-2.034v2.983zm0-4.311h1.825c0.318 0 0.605-0.058 0.86-0.174 0.255-0.119 0.456-0.286 0.601-0.502 0.15-0.218 0.224-0.477 0.224-0.775 0-0.395-0.139-0.719-0.417-0.975-0.276-0.255-0.685-0.383-1.228-0.383h-1.865v2.809zm7.357 5.852v-10.182h3.898c0.735 0 1.347 0.116 1.834 0.348 0.491 0.229 0.857 0.542 1.099 0.94 0.245 0.398 0.368 0.848 0.368 1.352 0 0.414-0.08 0.769-0.239 1.064-0.159 0.292-0.373 0.529-0.641 0.711-0.269 0.182-0.569 0.313-0.9 0.393v0.099c0.361 0.02 0.708 0.131 1.039 0.333 0.335 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.319 0.806 0.319 1.323 0 0.527-0.128 1.001-0.383 1.422-0.255 0.417-0.64 0.747-1.154 0.989-0.513 0.242-1.16 0.363-1.939 0.363h-4.121zm1.844-1.541h1.984c0.67 0 1.152-0.128 1.447-0.383 0.298-0.259 0.447-0.59 0.447-0.994 0-0.302-0.074-0.574-0.223-0.816-0.15-0.245-0.362-0.437-0.637-0.576-0.275-0.143-0.603-0.214-0.984-0.214h-2.034v2.983zm0-4.311h1.825c0.318 0 0.605-0.058 0.86-0.174 0.255-0.119 0.456-0.286 0.602-0.502 0.149-0.218 0.223-0.477 0.223-0.775 0-0.395-0.139-0.719-0.417-0.975-0.275-0.255-0.685-0.383-1.228-0.383h-1.865v2.809zm6.661-4.33h2.083l2.491 4.504h0.099l2.491-4.504h2.083l-3.704 6.384v3.798h-1.839v-3.798l-3.704-6.384zm-75.69 22.091c0-1.243 0.164-2.385 0.492-3.425 0.332-1.044 0.824-2.009 1.477-2.894h1.695c-0.252 0.328-0.487 0.731-0.706 1.208-0.219 0.474-0.409 0.995-0.572 1.561-0.159 0.564-0.285 1.149-0.377 1.755-0.09 0.607-0.135 1.205-0.135 1.795 0 0.786 0.078 1.581 0.234 2.386 0.159 0.806 0.373 1.553 0.641 2.243 0.272 0.686 0.577 1.248 0.915 1.685h-1.695c-0.653-0.885-1.145-1.848-1.477-2.888-0.328-1.045-0.492-2.186-0.492-3.426zm9.184-5.091v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm8.218 2.799c-0.046-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.785-0.363-1.332-0.363-0.385 0-0.714 0.058-0.989 0.174-0.276 0.116-0.486 0.273-0.632 0.472s-0.22 0.426-0.224 0.681c0 0.213 0.048 0.397 0.145 0.552 0.099 0.156 0.233 0.289 0.402 0.398 0.169 0.106 0.357 0.196 0.562 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.959 0.577 0.285 0.232 0.511 0.512 0.676 0.84 0.166 0.328 0.249 0.713 0.249 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.814c0.027 0.355 0.136 0.65 0.328 0.885 0.193 0.235 0.443 0.411 0.751 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.082-0.483-0.234-0.656-0.153-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.338-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.722 0 1.355 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.111-1.253v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm13.162 8.636v-10.182h6.523v1.546h-4.678v2.765h4.23v1.546h-4.23v4.325h-1.845zm8.203 0v-10.182h1.845v8.636h4.484v1.546h-6.329zm16.632-5.091c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.508-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.475-4.614h2.013zm6.978-0.477c0 1.24-0.166 2.381-0.497 3.426-0.329 1.04-0.819 2.003-1.472 2.888h-1.695c0.255-0.328 0.49-0.729 0.706-1.203 0.218-0.474 0.407-0.994 0.566-1.561 0.163-0.567 0.289-1.154 0.378-1.76 0.093-0.607 0.139-1.203 0.139-1.79 0-0.785-0.079-1.581-0.238-2.386-0.156-0.806-0.37-1.553-0.642-2.242-0.268-0.69-0.571-1.253-0.909-1.691h1.695c0.653 0.885 1.143 1.85 1.472 2.894 0.331 1.04 0.497 2.182 0.497 3.425z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter187_d_367_2)">
                        <path
                            d="m328.6 267.09h-1.325v-6.963h1.325v2.698h7.402v1.568h-7.402v2.697zm3.038-15.717c0.941 0 1.746 0.176 2.417 0.529 0.667 0.349 1.179 0.826 1.534 1.431 0.355 0.603 0.532 1.286 0.532 2.05s-0.177 1.449-0.532 2.054c-0.358 0.602-0.871 1.08-1.539 1.432-0.67 0.349-1.474 0.524-2.412 0.524-0.94 0-1.744-0.175-2.412-0.524-0.67-0.352-1.183-0.83-1.538-1.432-0.355-0.605-0.533-1.29-0.533-2.054s0.178-1.447 0.533-2.05c0.355-0.605 0.868-1.082 1.538-1.431 0.668-0.353 1.472-0.529 2.412-0.529zm0 1.59c-0.662 0-1.22 0.103-1.674 0.311-0.458 0.204-0.803 0.488-1.036 0.852-0.236 0.364-0.354 0.783-0.354 1.257 0 0.475 0.118 0.894 0.354 1.257 0.233 0.364 0.578 0.649 1.036 0.857 0.454 0.204 1.012 0.307 1.674 0.307s1.222-0.103 1.679-0.307c0.455-0.208 0.8-0.493 1.036-0.857 0.233-0.363 0.349-0.782 0.349-1.257 0-0.474-0.116-0.893-0.349-1.257-0.236-0.364-0.581-0.648-1.036-0.852-0.457-0.208-1.017-0.311-1.679-0.311zm-4.363-4.665h8.727v1.581h-8.727v-1.581zm8.727-1.712h-8.727v-1.581h7.402v-3.844h1.325v5.425zm0-6.797h-8.727v-5.676h1.325v4.095h2.369v-3.801h1.326v3.801h2.382v-4.13h1.325v5.711zm-7.402-6.906h-1.325v-6.963h1.325v2.698h7.402v1.568h-7.402v2.697z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter188_d_367_2)">
                        <path
                            d="m212.3 242v-8.727h1.581v3.694h4.044v-3.694h1.585v8.727h-1.585v-3.707h-4.044v3.707h-1.581zm8.93 0v-8.727h3.273c0.67 0 1.233 0.116 1.687 0.349 0.458 0.233 0.803 0.56 1.036 0.98 0.235 0.418 0.353 0.905 0.353 1.462 0 0.56-0.119 1.045-0.358 1.457-0.235 0.409-0.583 0.726-1.044 0.951-0.46 0.221-1.025 0.332-1.696 0.332h-2.331v-1.313h2.118c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.435-0.272 0.554-0.482 0.122-0.213 0.184-0.474 0.184-0.784s-0.062-0.574-0.184-0.793c-0.122-0.221-0.308-0.389-0.558-0.503-0.25-0.116-0.572-0.174-0.967-0.174h-1.449v7.406h-1.581zm4.508-3.955 2.161 3.955h-1.764l-2.122-3.955h1.725zm8.11 3.955-2.463-8.727h1.7l1.572 6.413h0.081l1.679-6.413h1.547l1.684 6.417h0.076l1.573-6.417h1.7l-2.463 8.727h-1.56l-1.747-6.124h-0.068l-1.752 6.124h-1.559zm10.546 0h-1.688l3.073-8.727h1.951l3.077 8.727h-1.688l-2.331-6.938h-0.068l-2.326 6.938zm0.055-3.422h4.602v1.27h-4.602v-1.27zm9.088-5.305v8.727h-1.581v-8.727h1.581zm1.329 1.325v-1.325h6.963v1.325h-2.697v7.402h-1.569v-7.402h-2.697zm9.886-1.325v8.727h-1.581v-8.727h1.581zm8.884 0v8.727h-1.406l-4.112-5.945h-0.073v5.945h-1.581v-8.727h1.415l4.108 5.949h0.077v-5.949h1.572zm7.569 2.787c-0.071-0.23-0.169-0.436-0.294-0.618-0.122-0.185-0.27-0.343-0.443-0.473-0.17-0.131-0.366-0.229-0.588-0.294-0.221-0.068-0.463-0.103-0.724-0.103-0.469 0-0.887 0.118-1.253 0.354-0.367 0.236-0.655 0.583-0.865 1.04-0.208 0.454-0.311 1.008-0.311 1.662 0 0.659 0.103 1.217 0.311 1.675 0.207 0.457 0.496 0.805 0.865 1.044 0.369 0.235 0.798 0.353 1.287 0.353 0.443 0 0.826-0.085 1.15-0.255 0.327-0.171 0.578-0.412 0.755-0.725 0.176-0.315 0.264-0.684 0.264-1.108l0.358 0.056h-2.37v-1.236h3.542v1.048c0 0.747-0.159 1.394-0.478 1.939-0.318 0.545-0.755 0.966-1.312 1.261-0.557 0.293-1.196 0.439-1.918 0.439-0.804 0-1.51-0.18-2.118-0.541-0.605-0.364-1.078-0.879-1.419-1.547-0.338-0.67-0.507-1.466-0.507-2.386 0-0.705 0.1-1.334 0.299-1.888 0.201-0.554 0.482-1.024 0.843-1.41 0.361-0.39 0.784-0.685 1.27-0.887 0.486-0.204 1.014-0.307 1.585-0.307 0.483 0 0.934 0.071 1.351 0.213 0.418 0.14 0.789 0.339 1.112 0.597 0.327 0.259 0.596 0.565 0.806 0.921 0.21 0.355 0.348 0.747 0.413 1.176h-1.611zm-51.479 20.94v-8.727h3.273c0.67 0 1.233 0.116 1.687 0.349 0.458 0.233 0.803 0.56 1.036 0.98 0.236 0.418 0.353 0.905 0.353 1.462 0 0.56-0.119 1.045-0.358 1.457-0.235 0.409-0.583 0.726-1.044 0.951-0.46 0.221-1.025 0.332-1.696 0.332h-2.331v-1.313h2.118c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.435-0.272 0.554-0.482 0.123-0.213 0.184-0.474 0.184-0.784s-0.061-0.574-0.184-0.793c-0.122-0.221-0.308-0.389-0.558-0.503-0.25-0.116-0.572-0.174-0.967-0.174h-1.449v7.406h-1.581zm4.509-3.955 2.16 3.955h-1.764l-2.122-3.955h1.726zm11.094-0.409c0 0.941-0.176 1.746-0.528 2.417-0.35 0.667-0.827 1.179-1.432 1.534-0.603 0.355-1.286 0.532-2.05 0.532s-1.449-0.177-2.054-0.532c-0.602-0.358-1.079-0.871-1.432-1.539-0.349-0.67-0.524-1.474-0.524-2.412 0-0.94 0.175-1.744 0.524-2.412 0.353-0.67 0.83-1.183 1.432-1.538 0.605-0.355 1.29-0.533 2.054-0.533s1.447 0.178 2.05 0.533c0.605 0.355 1.082 0.868 1.432 1.538 0.352 0.668 0.528 1.472 0.528 2.412zm-1.59 0c0-0.662-0.103-1.22-0.311-1.674-0.204-0.458-0.488-0.803-0.852-1.036-0.364-0.236-0.783-0.354-1.257-0.354s-0.893 0.118-1.257 0.354c-0.364 0.233-0.649 0.578-0.857 1.036-0.204 0.454-0.306 1.012-0.306 1.674s0.102 1.222 0.306 1.679c0.208 0.455 0.493 0.8 0.857 1.036 0.364 0.233 0.783 0.349 1.257 0.349s0.893-0.116 1.257-0.349c0.364-0.236 0.648-0.581 0.852-1.036 0.208-0.457 0.311-1.017 0.311-1.679zm10.883 0c0 0.941-0.176 1.746-0.528 2.417-0.35 0.667-0.827 1.179-1.432 1.534-0.603 0.355-1.286 0.532-2.05 0.532s-1.449-0.177-2.054-0.532c-0.602-0.358-1.08-0.871-1.432-1.539-0.349-0.67-0.524-1.474-0.524-2.412 0-0.94 0.175-1.744 0.524-2.412 0.352-0.67 0.83-1.183 1.432-1.538 0.605-0.355 1.29-0.533 2.054-0.533s1.447 0.178 2.05 0.533c0.605 0.355 1.082 0.868 1.432 1.538 0.352 0.668 0.528 1.472 0.528 2.412zm-1.59 0c0-0.662-0.103-1.22-0.311-1.674-0.204-0.458-0.488-0.803-0.852-1.036-0.364-0.236-0.783-0.354-1.257-0.354s-0.893 0.118-1.257 0.354c-0.364 0.233-0.649 0.578-0.857 1.036-0.204 0.454-0.306 1.012-0.306 1.674s0.102 1.222 0.306 1.679c0.208 0.455 0.493 0.8 0.857 1.036 0.364 0.233 0.783 0.349 1.257 0.349s0.893-0.116 1.257-0.349c0.364-0.236 0.648-0.581 0.852-1.036 0.208-0.457 0.311-1.017 0.311-1.679zm3.085-4.363h1.934l2.591 6.324h0.102l2.591-6.324h1.935v8.727h-1.517v-5.996h-0.081l-2.412 5.97h-1.133l-2.412-5.983h-0.081v6.009h-1.517v-8.727z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter189_d_367_2)">
                        <path
                            d="m219.28 326.27h1.934l2.591 6.324h0.103l2.591-6.324h1.934v8.727h-1.517v-5.996h-0.081l-2.412 5.97h-1.133l-2.412-5.983h-0.081v6.009h-1.517v-8.727zm11.996 8.727h-1.688l3.072-8.727h1.952l3.077 8.727h-1.688l-2.331-6.938h-0.068l-2.326 6.938zm0.055-3.422h4.602v1.27h-4.602v-1.27zm7.507 3.422v-8.727h3.273c0.671 0 1.233 0.116 1.688 0.349 0.457 0.233 0.802 0.56 1.035 0.98 0.236 0.418 0.354 0.905 0.354 1.462 0 0.56-0.119 1.045-0.358 1.457-0.236 0.409-0.584 0.726-1.044 0.951-0.46 0.221-1.026 0.332-1.696 0.332h-2.331v-1.313h2.118c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.434-0.272 0.554-0.482 0.122-0.213 0.183-0.474 0.183-0.784s-0.061-0.574-0.183-0.793c-0.122-0.221-0.308-0.389-0.558-0.503-0.25-0.116-0.573-0.174-0.968-0.174h-1.449v7.406h-1.581zm4.509-3.955 2.16 3.955h-1.764l-2.122-3.955h1.726zm3.296 3.955v-8.727h1.581v4.01h0.107l3.404-4.01h1.931l-3.375 3.916 3.405 4.811h-1.901l-2.604-3.741-0.967 1.142v2.599h-1.581zm8.121 0v-8.727h5.676v1.325h-4.095v2.369h3.801v1.326h-3.801v2.382h4.129v1.325h-5.71zm6.906-7.402v-1.325h6.963v1.325h-2.698v7.402h-1.568v-7.402h-2.697zm9.886-1.325v8.727h-1.581v-8.727h1.581zm8.884 0v8.727h-1.406l-4.112-5.945h-0.073v5.945h-1.581v-8.727h1.415l4.108 5.949h0.077v-5.949h1.572zm7.569 2.787c-0.071-0.23-0.169-0.436-0.294-0.618-0.122-0.185-0.27-0.343-0.443-0.473-0.17-0.131-0.366-0.229-0.588-0.294-0.222-0.068-0.463-0.103-0.725-0.103-0.468 0-0.886 0.118-1.252 0.354-0.367 0.236-0.655 0.583-0.865 1.04-0.208 0.454-0.311 1.008-0.311 1.662 0 0.659 0.103 1.217 0.311 1.675 0.207 0.457 0.495 0.805 0.865 1.044 0.369 0.235 0.798 0.353 1.287 0.353 0.443 0 0.826-0.085 1.15-0.255 0.327-0.171 0.578-0.412 0.754-0.725 0.177-0.315 0.265-0.684 0.265-1.108l0.358 0.056h-2.37v-1.236h3.541v1.048c0 0.747-0.159 1.394-0.477 1.939s-0.756 0.966-1.312 1.261c-0.557 0.293-1.196 0.439-1.918 0.439-0.804 0-1.51-0.18-2.118-0.541-0.605-0.364-1.078-0.879-1.419-1.547-0.338-0.67-0.507-1.466-0.507-2.386 0-0.705 0.099-1.334 0.298-1.888 0.202-0.554 0.483-1.024 0.844-1.41 0.361-0.39 0.784-0.685 1.27-0.887 0.486-0.204 1.014-0.307 1.585-0.307 0.483 0 0.933 0.071 1.351 0.213 0.418 0.14 0.788 0.339 1.112 0.597 0.327 0.259 0.595 0.565 0.806 0.921 0.21 0.355 0.348 0.747 0.413 1.176h-1.611zm7.31 5.94h-1.688l3.072-8.727h1.952l3.077 8.727h-1.688l-2.331-6.938h-0.068l-2.326 6.938zm0.055-3.422h4.602v1.27h-4.602v-1.27zm14.679-5.305v8.727h-1.406l-4.112-5.945h-0.073v5.945h-1.581v-8.727h1.415l4.108 5.949h0.077v-5.949h1.572zm4.68 8.727h-2.957v-8.727h3.017c0.866 0 1.611 0.174 2.233 0.524 0.625 0.346 1.105 0.845 1.44 1.496 0.335 0.65 0.503 1.429 0.503 2.335 0 0.909-0.169 1.69-0.507 2.344-0.335 0.653-0.82 1.154-1.453 1.504-0.631 0.349-1.389 0.524-2.276 0.524zm-1.376-1.368h1.3c0.608 0 1.115-0.111 1.521-0.332 0.406-0.225 0.712-0.559 0.916-1.002 0.205-0.446 0.307-1.003 0.307-1.67 0-0.668-0.102-1.222-0.307-1.662-0.204-0.443-0.507-0.774-0.908-0.993-0.397-0.222-0.892-0.332-1.483-0.332h-1.346v5.991zm-79.076 16.368h-1.687l3.072-8.727h1.952l3.077 8.727h-1.688l-2.331-6.938h-0.068l-2.327 6.938zm0.056-3.422h4.602v1.27h-4.602v-1.27zm10.465 3.422h-2.958v-8.727h3.017c0.867 0 1.611 0.174 2.233 0.524 0.625 0.346 1.105 0.845 1.441 1.496 0.335 0.65 0.502 1.429 0.502 2.335 0 0.909-0.169 1.69-0.507 2.344-0.335 0.653-0.819 1.154-1.453 1.504-0.63 0.349-1.389 0.524-2.275 0.524zm-1.377-1.368h1.3c0.608 0 1.115-0.111 1.521-0.332 0.407-0.225 0.712-0.559 0.916-1.002 0.205-0.446 0.307-1.003 0.307-1.67 0-0.668-0.102-1.222-0.307-1.662-0.204-0.443-0.507-0.774-0.907-0.993-0.398-0.222-0.892-0.332-1.483-0.332h-1.347v5.991zm7.115-7.359h1.934l2.591 6.324h0.102l2.591-6.324h1.935v8.727h-1.517v-5.996h-0.081l-2.412 5.97h-1.133l-2.412-5.983h-0.081v6.009h-1.517v-8.727zm12.456 0v8.727h-1.581v-8.727h1.581zm6.454 2.399c-0.039-0.372-0.207-0.662-0.502-0.869-0.293-0.208-0.674-0.312-1.142-0.312-0.33 0-0.613 0.05-0.848 0.15-0.236 0.099-0.417 0.234-0.542 0.404-0.125 0.171-0.189 0.366-0.191 0.584 0 0.182 0.041 0.34 0.123 0.473 0.085 0.134 0.2 0.247 0.345 0.341 0.145 0.091 0.306 0.168 0.482 0.23 0.176 0.063 0.354 0.115 0.533 0.158l0.818 0.205c0.329 0.076 0.646 0.18 0.95 0.311 0.307 0.13 0.581 0.295 0.822 0.494 0.245 0.199 0.438 0.439 0.58 0.72s0.213 0.611 0.213 0.989c0 0.511-0.131 0.961-0.392 1.351-0.261 0.386-0.639 0.688-1.134 0.907-0.491 0.216-1.086 0.324-1.785 0.324-0.679 0-1.268-0.105-1.768-0.315-0.498-0.21-0.887-0.517-1.168-0.921-0.278-0.403-0.429-0.895-0.452-1.474h1.556c0.022 0.304 0.116 0.557 0.281 0.758 0.165 0.202 0.379 0.353 0.643 0.452 0.267 0.1 0.566 0.149 0.895 0.149 0.344 0 0.645-0.051 0.904-0.153 0.261-0.105 0.466-0.25 0.613-0.435 0.148-0.187 0.223-0.406 0.226-0.656-3e-3 -0.227-0.069-0.415-0.2-0.563-0.131-0.15-0.314-0.275-0.55-0.375-0.233-0.102-0.506-0.193-0.818-0.272l-0.993-0.256c-0.719-0.185-1.287-0.464-1.705-0.839-0.414-0.378-0.622-0.88-0.622-1.505 0-0.514 0.14-0.964 0.418-1.351 0.281-0.386 0.663-0.686 1.146-0.899 0.483-0.216 1.03-0.324 1.641-0.324 0.619 0 1.162 0.108 1.628 0.324 0.468 0.213 0.836 0.51 1.103 0.891 0.267 0.378 0.405 0.812 0.414 1.304h-1.522zm7.793 0c-0.039-0.372-0.207-0.662-0.502-0.869-0.293-0.208-0.674-0.312-1.142-0.312-0.33 0-0.613 0.05-0.848 0.15-0.236 0.099-0.417 0.234-0.542 0.404-0.125 0.171-0.189 0.366-0.191 0.584 0 0.182 0.041 0.34 0.123 0.473 0.085 0.134 0.2 0.247 0.345 0.341 0.145 0.091 0.306 0.168 0.482 0.23 0.176 0.063 0.354 0.115 0.533 0.158l0.818 0.205c0.329 0.076 0.646 0.18 0.95 0.311 0.307 0.13 0.581 0.295 0.822 0.494 0.245 0.199 0.438 0.439 0.58 0.72s0.213 0.611 0.213 0.989c0 0.511-0.131 0.961-0.392 1.351-0.261 0.386-0.639 0.688-1.134 0.907-0.491 0.216-1.086 0.324-1.785 0.324-0.679 0-1.269-0.105-1.769-0.315-0.497-0.21-0.886-0.517-1.167-0.921-0.279-0.403-0.429-0.895-0.452-1.474h1.556c0.022 0.304 0.116 0.557 0.281 0.758 0.165 0.202 0.379 0.353 0.643 0.452 0.267 0.1 0.566 0.149 0.895 0.149 0.344 0 0.645-0.051 0.904-0.153 0.261-0.105 0.465-0.25 0.613-0.435 0.148-0.187 0.223-0.406 0.226-0.656-3e-3 -0.227-0.07-0.415-0.2-0.563-0.131-0.15-0.314-0.275-0.55-0.375-0.233-0.102-0.506-0.193-0.818-0.272l-0.993-0.256c-0.719-0.185-1.287-0.464-1.705-0.839-0.414-0.378-0.622-0.88-0.622-1.505 0-0.514 0.139-0.964 0.418-1.351 0.281-0.386 0.663-0.686 1.146-0.899 0.483-0.216 1.03-0.324 1.641-0.324 0.619 0 1.162 0.108 1.628 0.324 0.468 0.213 0.836 0.51 1.103 0.891 0.267 0.378 0.405 0.812 0.414 1.304h-1.522zm4.631-2.399v8.727h-1.581v-8.727h1.581zm9.511 4.363c0 0.941-0.176 1.746-0.529 2.417-0.349 0.667-0.826 1.179-1.431 1.534-0.603 0.355-1.286 0.532-2.05 0.532s-1.449-0.177-2.054-0.532c-0.602-0.358-1.08-0.871-1.432-1.539-0.349-0.67-0.524-1.474-0.524-2.412 0-0.94 0.175-1.744 0.524-2.412 0.352-0.67 0.83-1.183 1.432-1.538 0.605-0.355 1.29-0.533 2.054-0.533s1.447 0.178 2.05 0.533c0.605 0.355 1.082 0.868 1.431 1.538 0.353 0.668 0.529 1.472 0.529 2.412zm-1.59 0c0-0.662-0.103-1.22-0.311-1.674-0.204-0.458-0.488-0.803-0.852-1.036-0.364-0.236-0.783-0.354-1.257-0.354-0.475 0-0.894 0.118-1.257 0.354-0.364 0.233-0.649 0.578-0.857 1.036-0.204 0.454-0.307 1.012-0.307 1.674s0.103 1.222 0.307 1.679c0.208 0.455 0.493 0.8 0.857 1.036 0.363 0.233 0.782 0.349 1.257 0.349 0.474 0 0.893-0.116 1.257-0.349 0.364-0.236 0.648-0.581 0.852-1.036 0.208-0.457 0.311-1.017 0.311-1.679zm10.256-4.363v8.727h-1.406l-4.112-5.945h-0.073v5.945h-1.581v-8.727h1.415l4.108 5.949h0.077v-5.949h1.572zm6.466 2.399c-0.04-0.372-0.208-0.662-0.503-0.869-0.293-0.208-0.673-0.312-1.142-0.312-0.33 0-0.612 0.05-0.848 0.15-0.236 0.099-0.416 0.234-0.541 0.404-0.125 0.171-0.189 0.366-0.192 0.584 0 0.182 0.041 0.34 0.124 0.473 0.085 0.134 0.2 0.247 0.345 0.341 0.145 0.091 0.305 0.168 0.481 0.23 0.176 0.063 0.354 0.115 0.533 0.158l0.818 0.205c0.33 0.076 0.646 0.18 0.95 0.311 0.307 0.13 0.581 0.295 0.823 0.494 0.244 0.199 0.437 0.439 0.579 0.72s0.213 0.611 0.213 0.989c0 0.511-0.13 0.961-0.392 1.351-0.261 0.386-0.639 0.688-1.133 0.907-0.492 0.216-1.087 0.324-1.786 0.324-0.679 0-1.268-0.105-1.768-0.315-0.497-0.21-0.886-0.517-1.168-0.921-0.278-0.403-0.429-0.895-0.451-1.474h1.555c0.023 0.304 0.116 0.557 0.281 0.758 0.165 0.202 0.38 0.353 0.644 0.452 0.267 0.1 0.565 0.149 0.895 0.149 0.343 0 0.644-0.051 0.903-0.153 0.261-0.105 0.466-0.25 0.614-0.435 0.147-0.187 0.223-0.406 0.226-0.656-3e-3 -0.227-0.07-0.415-0.201-0.563-0.13-0.15-0.314-0.275-0.549-0.375-0.233-0.102-0.506-0.193-0.819-0.272l-0.993-0.256c-0.718-0.185-1.287-0.464-1.704-0.839-0.415-0.378-0.622-0.88-0.622-1.505 0-0.514 0.139-0.964 0.417-1.351 0.282-0.386 0.664-0.686 1.147-0.899 0.483-0.216 1.029-0.324 1.64-0.324 0.62 0 1.162 0.108 1.628 0.324 0.469 0.213 0.837 0.51 1.104 0.891 0.267 0.378 0.405 0.812 0.413 1.304h-1.521z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter190_d_367_2)">
                        <path
                            d="m112.08 259v-8.727h1.581v3.694h4.044v-3.694h1.585v8.727h-1.585v-3.707h-4.044v3.707h-1.581zm8.929 0v-8.727h3.273c0.67 0 1.233 0.116 1.688 0.349 0.457 0.233 0.802 0.56 1.035 0.98 0.236 0.418 0.354 0.905 0.354 1.462 0 0.56-0.12 1.045-0.358 1.457-0.236 0.409-0.584 0.726-1.044 0.951-0.461 0.221-1.026 0.332-1.696 0.332h-2.331v-1.313h2.118c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.434-0.272 0.554-0.482 0.122-0.213 0.183-0.474 0.183-0.784s-0.061-0.574-0.183-0.793c-0.122-0.221-0.309-0.389-0.559-0.503-0.25-0.116-0.572-0.174-0.967-0.174h-1.449v7.406h-1.581zm4.509-3.955 2.16 3.955h-1.764l-2.122-3.955h1.726zm14.071-0.409c0 0.941-0.176 1.746-0.529 2.417-0.349 0.667-0.826 1.179-1.431 1.534-0.603 0.355-1.286 0.532-2.05 0.532s-1.449-0.177-2.054-0.532c-0.602-0.358-1.08-0.871-1.432-1.539-0.349-0.67-0.524-1.474-0.524-2.412 0-0.94 0.175-1.744 0.524-2.412 0.352-0.67 0.83-1.183 1.432-1.538 0.605-0.355 1.29-0.533 2.054-0.533s1.447 0.178 2.05 0.533c0.605 0.355 1.082 0.868 1.431 1.538 0.353 0.668 0.529 1.472 0.529 2.412zm-1.59 0c0-0.662-0.103-1.22-0.311-1.674-0.204-0.458-0.488-0.803-0.852-1.036-0.364-0.236-0.783-0.354-1.257-0.354-0.475 0-0.894 0.118-1.257 0.354-0.364 0.233-0.649 0.578-0.857 1.036-0.204 0.454-0.307 1.012-0.307 1.674s0.103 1.222 0.307 1.679c0.208 0.455 0.493 0.8 0.857 1.036 0.363 0.233 0.782 0.349 1.257 0.349 0.474 0 0.893-0.116 1.257-0.349 0.364-0.236 0.648-0.581 0.852-1.036 0.208-0.457 0.311-1.017 0.311-1.679zm3.084 4.364v-8.727h5.591v1.325h-4.01v2.369h3.627v1.326h-3.627v3.707h-1.581zm7.032 0v-8.727h5.591v1.325h-4.01v2.369h3.626v1.326h-3.626v3.707h-1.581zm8.612-8.727v8.727h-1.581v-8.727h1.581zm9.182 2.944h-1.594c-0.045-0.261-0.129-0.493-0.251-0.694-0.122-0.205-0.274-0.378-0.456-0.52s-0.389-0.249-0.622-0.32c-0.23-0.074-0.479-0.111-0.746-0.111-0.474 0-0.895 0.12-1.261 0.358-0.367 0.236-0.654 0.583-0.861 1.04-0.207 0.455-0.311 1.01-0.311 1.666 0 0.668 0.104 1.23 0.311 1.688 0.21 0.454 0.497 0.798 0.861 1.031 0.366 0.23 0.785 0.345 1.257 0.345 0.261 0 0.506-0.034 0.733-0.102 0.23-0.071 0.436-0.175 0.618-0.311 0.184-0.136 0.339-0.304 0.464-0.503 0.128-0.199 0.216-0.426 0.264-0.682l1.594 9e-3c-0.06 0.415-0.189 0.804-0.388 1.167-0.196 0.364-0.453 0.685-0.771 0.963-0.318 0.276-0.69 0.492-1.116 0.648-0.427 0.154-0.9 0.23-1.419 0.23-0.768 0-1.452-0.177-2.054-0.532-0.603-0.355-1.077-0.868-1.424-1.539-0.346-0.67-0.52-1.474-0.52-2.412 0-0.94 0.175-1.744 0.525-2.412 0.349-0.67 0.825-1.183 1.427-1.538s1.284-0.533 2.046-0.533c0.485 0 0.937 0.069 1.355 0.205 0.417 0.136 0.789 0.337 1.116 0.601 0.327 0.261 0.595 0.582 0.806 0.963 0.213 0.378 0.352 0.81 0.417 1.295zm1.448 5.783v-8.727h5.676v1.325h-4.095v2.369h3.801v1.326h-3.801v2.382h4.129v1.325h-5.71z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter191_d_367_2)">
                        <path
                            d="m74.279 352v-8.727h3.2727c0.6704 0 1.2329 0.125 1.6875 0.375 0.4574 0.25 0.8025 0.593 1.0355 1.031 0.2358 0.435 0.3537 0.929 0.3537 1.483 0 0.56-0.1179 1.057-0.3537 1.491-0.2358 0.435-0.5838 0.777-1.044 1.027-0.4603 0.248-1.027 0.371-1.7003 0.371h-2.169v-1.3h1.9559c0.3921 0 0.7131-0.068 0.9631-0.204s0.4346-0.324 0.554-0.563c0.1221-0.238 0.1832-0.512 0.1832-0.822s-0.0611-0.582-0.1832-0.818c-0.1194-0.236-0.3054-0.419-0.5583-0.55-0.25-0.133-0.5724-0.2-0.9673-0.2h-1.4489v7.406h-1.5809zm7.8707 0h-1.6875l3.0724-8.727h1.9518l3.0767 8.727h-1.6875l-2.331-6.938h-0.0682l-2.3267 6.938zm0.0554-3.422h4.6023v1.27h-4.6023v-1.27zm14.679-5.305v8.727h-1.4062l-4.1122-5.945h-0.0725v5.945h-1.5809v-8.727h1.4147l4.108 5.949h0.0767v-5.949h1.5724zm1.3392 1.325v-1.325h6.9626v1.325h-2.697v7.402h-1.568v-7.402h-2.6976zm8.3056 7.402v-8.727h3.272c0.671 0 1.233 0.116 1.688 0.349 0.457 0.233 0.803 0.56 1.036 0.98 0.235 0.418 0.353 0.905 0.353 1.462 0 0.56-0.119 1.045-0.358 1.457-0.236 0.409-0.584 0.726-1.044 0.951-0.46 0.221-1.025 0.332-1.696 0.332h-2.331v-1.313h2.118c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.435-0.272 0.554-0.482 0.122-0.213 0.183-0.474 0.183-0.784s-0.061-0.574-0.183-0.793c-0.122-0.221-0.308-0.389-0.558-0.503-0.25-0.116-0.573-0.174-0.967-0.174h-1.449v7.406h-1.581zm4.508-3.955 2.161 3.955h-1.764l-2.123-3.955h1.726zm2.36-4.772h1.786l2.134 3.861h0.086l2.135-3.861h1.785l-3.175 5.471v3.256h-1.576v-3.256l-3.175-5.471z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter192_d_367_2)">
                        <path
                            d="m12.655 243.27v8.727h-1.581v-8.727h1.581zm8.8838 0v8.727h-1.4062l-4.1122-5.945h-0.0725v5.945h-1.5809v-8.727h1.4147l4.108 5.949h0.0767v-5.949h1.5724zm1.3392 1.325v-1.325h6.963v1.325h-2.6974v7.402h-1.5682v-7.402h-2.6974zm8.3054 7.402v-8.727h5.6761v1.325h-4.0952v2.369h3.8012v1.326h-3.8012v2.382h4.1293v1.325h-5.7102zm7.289 0v-8.727h3.2728c0.6704 0 1.2329 0.116 1.6875 0.349 0.4573 0.233 0.8025 0.56 1.0355 0.98 0.2358 0.418 0.3537 0.905 0.3537 1.462 0 0.56-0.1194 1.045-0.358 1.457-0.2358 0.409-0.5838 0.726-1.044 0.951-0.4603 0.221-1.0256 0.332-1.6961 0.332h-2.3309v-1.313h2.1179c0.392 0 0.713-0.054 0.963-0.161 0.25-0.111 0.4347-0.272 0.554-0.482 0.1222-0.213 0.1833-0.474 0.1833-0.784s-0.0611-0.574-0.1833-0.793c-0.1221-0.221-0.3082-0.389-0.5582-0.503-0.25-0.116-0.5725-0.174-0.9673-0.174h-1.4489v7.406h-1.581zm4.5085-3.955 2.1606 3.955h-1.7642l-2.1222-3.955h1.7258zm4.2412-4.772 2.2713 6.869h0.0895l2.267-6.869h1.7386l-3.0767 8.727h-1.9517l-3.0724-8.727h1.7344zm9.0969 0v8.727h-1.581v-8.727h1.581zm1.712 8.727v-8.727h5.6762v1.325h-4.0952v2.369h3.8011v1.326h-3.8011v2.382h4.1292v1.325h-5.7102zm9.1257 0-2.463-8.727h1.7002l1.5725 6.413h0.081l1.6789-6.413h1.5469l1.6832 6.417h0.0767l1.5725-6.417h1.7003l-2.4631 8.727h-1.5597l-1.7471-6.124h-0.0682l-1.7514 6.124h-1.5597zm11.826-8.727v8.727h-1.581v-8.727h1.581zm8.8839 0v8.727h-1.4063l-4.1122-5.945h-0.0725v5.945h-1.5809v-8.727h1.4148l4.1079 5.949h0.0767v-5.949h1.5725zm7.5692 2.787c-0.071-0.23-0.169-0.436-0.294-0.618-0.1222-0.185-0.2699-0.343-0.4432-0.473-0.1705-0.131-0.3665-0.229-0.5881-0.294-0.2216-0.068-0.4631-0.103-0.7244-0.103-0.4688 0-0.8864 0.118-1.2529 0.354-0.3664 0.236-0.6548 0.583-0.865 1.04-0.2074 0.454-0.3111 1.008-0.3111 1.662 0 0.659 0.1037 1.217 0.3111 1.675 0.2074 0.457 0.4957 0.805 0.865 1.044 0.3694 0.235 0.7983 0.353 1.287 0.353 0.4432 0 0.8267-0.085 1.1505-0.255 0.3267-0.171 0.5782-0.412 0.7543-0.725 0.1761-0.315 0.2642-0.684 0.2642-1.108l0.358 0.056h-2.3694v-1.236h3.5412v1.048c0 0.747-0.1591 1.394-0.4772 1.939-0.3182 0.545-0.7557 0.966-1.3125 1.261-0.5569 0.293-1.1961 0.439-1.9176 0.439-0.804 0-1.51-0.18-2.1179-0.541-0.6052-0.364-1.0782-0.879-1.4191-1.547-0.338-0.67-0.5071-1.466-0.5071-2.386 0-0.705 0.0995-1.334 0.2983-1.888 0.2017-0.554 0.483-1.024 0.8438-1.41 0.3608-0.39 0.7841-0.685 1.2699-0.887 0.4857-0.204 1.0142-0.307 1.5852-0.307 0.4829 0 0.9332 0.071 1.3508 0.213 0.4176 0.14 0.7884 0.339 1.1122 0.597 0.3268 0.259 0.5952 0.565 0.8054 0.921 0.2103 0.355 0.3481 0.747 0.4134 1.176h-1.6108zm-59.208 20.94v-8.727h3.2727c0.6705 0 1.233 0.116 1.6875 0.349 0.4574 0.233 0.8026 0.56 1.0355 0.98 0.2358 0.418 0.3537 0.905 0.3537 1.462 0 0.56-0.1193 1.045-0.3579 1.457-0.2358 0.409-0.5838 0.726-1.0441 0.951-0.4602 0.221-1.0255 0.332-1.696 0.332h-2.331v-1.313h2.1179c0.3921 0 0.7131-0.054 0.9631-0.161 0.25-0.111 0.4347-0.272 0.554-0.482 0.1221-0.213 0.1832-0.474 0.1832-0.784s-0.0611-0.574-0.1832-0.793c-0.1222-0.221-0.3083-0.389-0.5583-0.503-0.25-0.116-0.5724-0.174-0.9673-0.174h-1.4489v7.406h-1.5809zm4.5085-3.955 2.1605 3.955h-1.7642l-2.1221-3.955h1.7258zm11.094-0.409c0 0.941-0.1762 1.746-0.5284 2.417-0.3495 0.667-0.8267 1.179-1.4319 1.534-0.6022 0.355-1.2855 0.532-2.0497 0.532s-1.4488-0.177-2.054-0.532c-0.6022-0.358-1.0795-0.871-1.4318-1.539-0.3494-0.67-0.5241-1.474-0.5241-2.412 0-0.94 0.1747-1.744 0.5241-2.412 0.3523-0.67 0.8296-1.183 1.4318-1.538 0.6052-0.355 1.2898-0.533 2.054-0.533s1.4475 0.178 2.0497 0.533c0.6052 0.355 1.0824 0.868 1.4319 1.538 0.3522 0.668 0.5284 1.472 0.5284 2.412zm-1.5895 0c0-0.662-0.1037-1.22-0.3111-1.674-0.2045-0.458-0.4886-0.803-0.8523-1.036-0.3636-0.236-0.7826-0.354-1.2571-0.354-0.4744 0-0.8934 0.118-1.2571 0.354-0.3636 0.233-0.6491 0.578-0.8565 1.036-0.2046 0.454-0.3068 1.012-0.3068 1.674s0.1022 1.222 0.3068 1.679c0.2074 0.455 0.4929 0.8 0.8565 1.036 0.3637 0.233 0.7827 0.349 1.2571 0.349 0.4745 0 0.8935-0.116 1.2571-0.349 0.3637-0.236 0.6478-0.581 0.8523-1.036 0.2074-0.457 0.3111-1.017 0.3111-1.679zm10.882 0c0 0.941-0.1761 1.746-0.5284 2.417-0.3494 0.667-0.8267 1.179-1.4318 1.534-0.6023 0.355-1.2855 0.532-2.0497 0.532s-1.4489-0.177-2.054-0.532c-0.6023-0.358-1.0795-0.871-1.4318-1.539-0.3494-0.67-0.5242-1.474-0.5242-2.412 0-0.94 0.1748-1.744 0.5242-2.412 0.3523-0.67 0.8295-1.183 1.4318-1.538 0.6051-0.355 1.2898-0.533 2.054-0.533s1.4474 0.178 2.0497 0.533c0.6051 0.355 1.0824 0.868 1.4318 1.538 0.3523 0.668 0.5284 1.472 0.5284 2.412zm-1.5895 0c0-0.662-0.1036-1.22-0.311-1.674-0.2046-0.458-0.4887-0.803-0.8523-1.036-0.3636-0.236-0.7827-0.354-1.2571-0.354s-0.8935 0.118-1.2571 0.354c-0.3636 0.233-0.6492 0.578-0.8565 1.036-0.2046 0.454-0.3069 1.012-0.3069 1.674s0.1023 1.222 0.3069 1.679c0.2073 0.455 0.4929 0.8 0.8565 1.036 0.3636 0.233 0.7827 0.349 1.2571 0.349s0.8935-0.116 1.2571-0.349c0.3636-0.236 0.6477-0.581 0.8523-1.036 0.2074-0.457 0.311-1.017 0.311-1.679zm3.0842-4.363h1.9347l2.5909 6.324h0.1022l2.591-6.324h1.9346v8.727h-1.517v-5.996h-0.081l-2.4119 5.97h-1.1335l-2.412-5.983h-0.0809v6.009h-1.5171v-8.727z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter193_d_367_2)">
                        <path
                            d="m18.652 192.67c-0.0398-0.372-0.2074-0.662-0.5028-0.869-0.2926-0.208-0.6733-0.312-1.1421-0.312-0.3295 0-0.6122 0.05-0.848 0.15-0.2358 0.099-0.4162 0.234-0.5412 0.404-0.125 0.171-0.1889 0.366-0.1917 0.584 0 0.182 0.0412 0.34 0.1235 0.473 0.0853 0.134 0.2003 0.247 0.3452 0.341 0.1449 0.091 0.3054 0.168 0.4816 0.23 0.1761 0.063 0.3536 0.115 0.5326 0.158l0.8182 0.205c0.3296 0.076 0.6463 0.18 0.9503 0.311 0.3068 0.13 0.581 0.295 0.8224 0.494 0.2444 0.199 0.4375 0.439 0.5796 0.72 0.142 0.281 0.213 0.611 0.213 0.989 0 0.511-0.1306 0.961-0.392 1.351-0.2614 0.386-0.6392 0.688-1.1335 0.907-0.4915 0.216-1.0867 0.324-1.7855 0.324-0.679 0-1.2685-0.105-1.7685-0.315-0.4972-0.21-0.8864-0.517-1.1676-0.921-0.2784-0.403-0.429-0.895-0.4517-1.474h1.5554c0.0227 0.304 0.1165 0.557 0.2812 0.758 0.1648 0.202 0.3793 0.353 0.6435 0.452 0.267 0.1 0.5653 0.149 0.8949 0.149 0.3437 0 0.6449-0.051 0.9034-0.153 0.2614-0.105 0.4659-0.25 0.6136-0.435 0.1478-0.187 0.223-0.406 0.2259-0.656-0.0029-0.227-0.0696-0.415-0.2003-0.563-0.1307-0.15-0.3139-0.275-0.5497-0.375-0.233-0.102-0.5057-0.193-0.8182-0.272l-0.9929-0.256c-0.7187-0.185-1.2869-0.464-1.7045-0.839-0.4148-0.378-0.6222-0.88-0.6222-1.505 0-0.514 0.1392-0.964 0.4176-1.351 0.2813-0.386 0.6634-0.686 1.1463-0.899 0.483-0.216 1.0298-0.324 1.6406-0.324 0.6194 0 1.162 0.108 1.6279 0.324 0.4687 0.213 0.8366 0.51 1.1037 0.891 0.267 0.378 0.4048 0.812 0.4133 1.304h-1.5213zm2.6666-1.074v-1.325h6.963v1.325h-2.6974v7.402h-1.5682v-7.402h-2.6974zm15.717 3.038c0 0.941-0.1761 1.746-0.5284 2.417-0.3494 0.667-0.8267 1.179-1.4318 1.534-0.6023 0.355-1.2855 0.532-2.0497 0.532s-1.4489-0.177-2.054-0.532c-0.6022-0.358-1.0795-0.871-1.4318-1.539-0.3494-0.67-0.5241-1.474-0.5241-2.412 0-0.94 0.1747-1.744 0.5241-2.412 0.3523-0.67 0.8296-1.183 1.4318-1.538 0.6051-0.355 1.2898-0.533 2.054-0.533s1.4474 0.178 2.0497 0.533c0.6051 0.355 1.0824 0.868 1.4318 1.538 0.3523 0.668 0.5284 1.472 0.5284 2.412zm-1.5894 0c0-0.662-0.1037-1.22-0.3111-1.674-0.2046-0.458-0.4887-0.803-0.8523-1.036-0.3636-0.236-0.7827-0.354-1.2571-0.354s-0.8935 0.118-1.2571 0.354c-0.3636 0.233-0.6491 0.578-0.8565 1.036-0.2046 0.454-0.3069 1.012-0.3069 1.674s0.1023 1.222 0.3069 1.679c0.2074 0.455 0.4929 0.8 0.8565 1.036 0.3636 0.233 0.7827 0.349 1.2571 0.349s0.8935-0.116 1.2571-0.349c0.3636-0.236 0.6477-0.581 0.8523-1.036 0.2074-0.457 0.3111-1.017 0.3111-1.679zm10.554-1.419h-1.5938c-0.0454-0.261-0.1292-0.493-0.2514-0.694-0.1221-0.205-0.2741-0.378-0.4559-0.52-0.1819-0.142-0.3893-0.249-0.6222-0.32-0.2301-0.074-0.4787-0.111-0.7457-0.111-0.4745 0-0.8949 0.12-1.2614 0.358-0.3665 0.236-0.6534 0.583-0.8608 1.04-0.2074 0.455-0.3111 1.01-0.3111 1.666 0 0.668 0.1037 1.23 0.3111 1.688 0.2102 0.454 0.4972 0.798 0.8608 1.031 0.3665 0.23 0.7855 0.345 1.2571 0.345 0.2614 0 0.5057-0.034 0.7329-0.102 0.2302-0.071 0.4361-0.175 0.6179-0.311 0.1847-0.136 0.3395-0.304 0.4645-0.503 0.1279-0.199 0.2159-0.426 0.2642-0.682l1.5938 9e-3c-0.0597 0.415-0.1889 0.804-0.3878 1.167-0.196 0.364-0.4531 0.685-0.7713 0.963-0.3182 0.276-0.6903 0.492-1.1165 0.648-0.4261 0.154-0.8991 0.23-1.419 0.23-0.7671 0-1.4517-0.177-2.054-0.532s-1.0767-0.868-1.4233-1.539c-0.3466-0.67-0.5199-1.474-0.5199-2.412 0-0.94 0.1747-1.744 0.5242-2.412 0.3494-0.67 0.8253-1.183 1.4275-1.538 0.6023-0.355 1.2841-0.533 2.0455-0.533 0.4858 0 0.9375 0.069 1.3551 0.205s0.7898 0.337 1.1165 0.601c0.3267 0.261 0.5951 0.582 0.8054 0.963 0.213 0.378 0.3522 0.81 0.4176 1.295zm1.4478 5.783v-8.727h1.581v4.01h0.1065l3.4048-4.01h1.9304l-3.375 3.916 3.4048 4.811h-1.9005l-2.6037-3.741-0.9673 1.142v2.599h-1.581zm11.098 0v-8.727h3.2728c0.6704 0 1.2329 0.116 1.6875 0.349 0.4574 0.233 0.8025 0.56 1.0355 0.98 0.2358 0.418 0.3537 0.905 0.3537 1.462 0 0.56-0.1193 1.045-0.358 1.457-0.2358 0.409-0.5838 0.726-1.044 0.951-0.4602 0.221-1.0256 0.332-1.696 0.332h-2.331v-1.313h2.1179c0.392 0 0.7131-0.054 0.9631-0.161 0.25-0.111 0.4346-0.272 0.5539-0.482 0.1222-0.213 0.1833-0.474 0.1833-0.784s-0.0611-0.574-0.1833-0.793c-0.1221-0.221-0.3082-0.389-0.5582-0.503-0.25-0.116-0.5724-0.174-0.9673-0.174h-1.4489v7.406h-1.581zm4.5086-3.955 2.1605 3.955h-1.7642l-2.1222-3.955h1.7259zm11.094-0.409c0 0.941-0.1761 1.746-0.5284 2.417-0.3494 0.667-0.8267 1.179-1.4318 1.534-0.6023 0.355-1.2855 0.532-2.0497 0.532s-1.4489-0.177-2.054-0.532c-0.6023-0.358-1.0795-0.871-1.4318-1.539-0.3494-0.67-0.5242-1.474-0.5242-2.412 0-0.94 0.1748-1.744 0.5242-2.412 0.3523-0.67 0.8295-1.183 1.4318-1.538 0.6051-0.355 1.2898-0.533 2.054-0.533s1.4474 0.178 2.0497 0.533c0.6051 0.355 1.0824 0.868 1.4318 1.538 0.3523 0.668 0.5284 1.472 0.5284 2.412zm-1.5895 0c0-0.662-0.1037-1.22-0.311-1.674-0.2046-0.458-0.4887-0.803-0.8523-1.036-0.3637-0.236-0.7827-0.354-1.2571-0.354s-0.8935 0.118-1.2571 0.354c-0.3637 0.233-0.6492 0.578-0.8566 1.036-0.2045 0.454-0.3068 1.012-0.3068 1.674s0.1023 1.222 0.3068 1.679c0.2074 0.455 0.4929 0.8 0.8566 1.036 0.3636 0.233 0.7827 0.349 1.2571 0.349s0.8934-0.116 1.2571-0.349c0.3636-0.236 0.6477-0.581 0.8523-1.036 0.2073-0.457 0.311-1.017 0.311-1.679zm10.882 0c0 0.941-0.1761 1.746-0.5284 2.417-0.3494 0.667-0.8267 1.179-1.4318 1.534-0.6023 0.355-1.2855 0.532-2.0497 0.532-0.7643 0-1.4489-0.177-2.054-0.532-0.6023-0.358-1.0796-0.871-1.4318-1.539-0.3495-0.67-0.5242-1.474-0.5242-2.412 0-0.94 0.1747-1.744 0.5242-2.412 0.3522-0.67 0.8295-1.183 1.4318-1.538 0.6051-0.355 1.2897-0.533 2.054-0.533 0.7642 0 1.4474 0.178 2.0497 0.533 0.6051 0.355 1.0824 0.868 1.4318 1.538 0.3523 0.668 0.5284 1.472 0.5284 2.412zm-1.5895 0c0-0.662-0.1037-1.22-0.3111-1.674-0.2045-0.458-0.4886-0.803-0.8522-1.036-0.3637-0.236-0.7827-0.354-1.2571-0.354-0.4745 0-0.8935 0.118-1.2572 0.354-0.3636 0.233-0.6491 0.578-0.8565 1.036-0.2045 0.454-0.3068 1.012-0.3068 1.674s0.1023 1.222 0.3068 1.679c0.2074 0.455 0.4929 0.8 0.8565 1.036 0.3637 0.233 0.7827 0.349 1.2572 0.349 0.4744 0 0.8934-0.116 1.2571-0.349 0.3636-0.236 0.6477-0.581 0.8522-1.036 0.2074-0.457 0.3111-1.017 0.3111-1.679zm3.0842-4.363h1.9346l2.5909 6.324h0.1023l2.5909-6.324h1.9347v8.727h-1.5171v-5.996h-0.0809l-2.412 5.97h-1.1335l-2.4119-5.983h-0.081v6.009h-1.517v-8.727z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter194_d_367_2)">
                        <path d="m530 175v-22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter195_d_367_2)">
                        <line x1="530" x2="551" y1="154" y2="154" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter196_d_367_2)">
                        <line x1="551" x2="531" y1="35" y2="35" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter197_d_367_2)">
                        <line x1="532" x2="532" y1="35" y2="55" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter198_d_367_2)">
                        <line x1="532" x2="551" y1="54" y2="54" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter199_d_367_2)">
                        <path d="m1613 643h321" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter200_d_367_2)">
                        <line x1="132" x2="1612" y1="624" y2="623" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter201_d_367_2)">
                        <line x1="412" x2="552" y1="2" y2="2.0073" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter202_d_367_2)">
                        <path d="m576.5 374.3h4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter203_d_367_2)">
                        <path d="m652 414v3" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter204_d_367_2)">
                        <path d="m1445.5 464h2.5" stroke="#000" stroke-width="2" />
                    </g>
                    <defs>
                        <filter id="filter7_d_367_2" x="1610" y="217" width="246" height="126"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter8_d_367_2" x="1610" y="217" width="246" height="126"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter9_d_367_2" x="128" y="623" width="1488" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter10_d_367_2" x="49" y="400" width="12" height="143"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter11_d_367_2" x="0" y="172.5" width="418.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter12_d_367_2" x="410.5" y="174.5" width="145.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter13_d_367_2" x="547" y="172.5" width="1390" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter14_d_367_2" x="1925.9" y="172.5" width="12.565" height="479.95"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter15_d_367_2" x="1886" y="605" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter16_d_367_2" x="1845" y="565" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter17_d_367_2" x="1886" y="595" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter18_d_367_2" x="578" y="335" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter19_d_367_2" x="498" y="245" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter20_d_367_2" x="578" y="275" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter21_d_367_2" x="578" y="265" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter22_d_367_2" x="578" y="255" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter23_d_367_2" x="568" y="245" width="18.558" height="108.05"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter24_d_367_2" x="578" y="245" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter25_d_367_2" x="498" y="325" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter26_d_367_2" x="498" y="315" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter27_d_367_2" x="498" y="305" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter28_d_367_2" x="498" y="295" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter29_d_367_2" x="498" y="285" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter30_d_367_2" x="498" y="275" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter31_d_367_2" x="498" y="265" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter32_d_367_2" x="498" y="255" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter33_d_367_2" x="578" y="325" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter34_d_367_2" x="578" y="315" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter35_d_367_2" x="578" y="305" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter36_d_367_2" x="578" y="295" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter37_d_367_2" x="578" y="285" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter38_d_367_2" x="498" y="335" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter39_d_367_2" x="1886" y="585" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter40_d_367_2" x="1886" y="575" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter41_d_367_2" x="1886" y="565" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter42_d_367_2" x="1877" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter43_d_367_2" x="1823" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter44_d_367_2" x="1814" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter45_d_367_2" x="1805" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter46_d_367_2" x="1868" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter47_d_367_2" x="1859" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter48_d_367_2" x="1850" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter49_d_367_2" x="1841" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter50_d_367_2" x="1832" y="605" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter51_d_367_2" x="502" y="4" width="54" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter52_d_367_2" x="491" y="4" width="19" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter53_d_367_2" x="430" y="4" width="19" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter54_d_367_2" x="420" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter55_d_367_2" x="410" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter56_d_367_2" x="481" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter57_d_367_2" x="471" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter58_d_367_2" x="461" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter59_d_367_2" x="451" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter60_d_367_2" x="441" y="4" width="18" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter61_d_367_2" x="1828" y="475" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter62_d_367_2" x="523" y="190" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter63_d_367_2" x="1864.2" y="488.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter64_d_367_2" x="559.21" y="203.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter65_d_367_2" x="1848.3" y="415" width="88.724" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter66_d_367_2" x="1848" y="406" width="10" height="77"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter67_d_367_2" x="1847" y="175" width="10.5" height="220.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter68_d_367_2" x="623" y="215" width="1233" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter69_d_367_2" x="1728" y="214.98" width="11" height="108.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter70_d_367_2" x="1608" y="215" width="13" height="169"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter71_d_367_2" x="1609" y="335" width="68" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter72_d_367_2" x="1788" y="335" width="68" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter73_d_367_2" x="1663" y="313" width="138" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter74_d_367_2" x="1448" y="354.5" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter75_d_367_2" x="647" y="175" width="14" height="223.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter76_d_367_2" x="1128" y="215" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter77_d_367_2" x="1288" y="215" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter78_d_367_2" x="968" y="215" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter79_d_367_2" x="808" y="215" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter80_d_367_2" x="1607" y="463" width="13" height="166"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter81_d_367_2" x="1608" y="621" width="12" height="32"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter82_d_367_2" x="808" y="465" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter83_d_367_2" x="647" y="441" width="13" height="192"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter84_d_367_2" x="968" y="465" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter85_d_367_2" x="1128" y="465" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter86_d_367_2" x="1448.5" y="373.5" width="169.51" height="10.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter87_d_367_2" x="669" y="373" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter88_d_367_2" x="669" y="463" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter89_d_367_2" x="829" y="463" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter90_d_367_2" x="989" y="463" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter91_d_367_2" x="1149" y="463.5" width="277.5" height="10.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter92_d_367_2" x="1468" y="463" width="149.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter93_d_367_2" x="829" y="373" width="128.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter94_d_367_2" x="989" y="373" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter95_d_367_2" x="1149" y="373" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter96_d_367_2" x="1309" y="373" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter97_d_367_2" x="598.2" y="373.3" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter98_d_367_2" x="497" y="214.99" width="10" height="166.3"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter99_d_367_2" x="498" y="371.3" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter100_d_367_2" x="351" y="464" width="305" height="10.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter101_d_367_2" x="408" y="4" width="12" height="180.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter102_d_367_2" x="547" y="1.0661e-5" width="12" height="183"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter103_d_367_2" x="350" y="254.98" width="11.022" height="148.01"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter104_d_367_2" x="548" y="353.3" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter105_d_367_2" x="598" y="353.3" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter106_d_367_2" x="548.15" y="353.36" width="34.291" height="29.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter107_d_367_2" x="574.56" y="353.36" width="33.291" height="29.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter108_d_367_2" x="647" y="390" width="30.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter109_d_367_2" x="648.15" y="390.65" width="29.783" height="33.291"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter110_d_367_2" x="648.15" y="415.06" width="29.283" height="34.291"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter111_d_367_2" x="1467.1" y="463" width="10" height="31.514"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter112_d_367_2" x="1442.1" y="464.15" width="34.791" height="30.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter113_d_367_2" x="1417.2" y="464.15" width="34.291" height="30.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter114_d_367_2" x="1417.1" y="463.5" width="10" height="31"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter115_d_367_2" x="648.86" y="354.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter116_d_367_2" x="1641.5" y="313.01" width="30.135" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter117_d_367_2" x="1792.4" y="313.01" width="30.635" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter118_d_367_2" x="648.86" y="462.86" width="29.635" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter119_d_367_2" x="787.51" y="462.86" width="29.135" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter120_d_367_2" x="1108" y="462.86" width="29.593" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter121_d_367_2" x="947.51" y="462.86" width="29.093" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter122_d_367_2" x="1128.9" y="463.86" width="29.135" height="30.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter123_d_367_2" x="968.86" y="462.86" width="29.135" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter124_d_367_2" x="808.86" y="462.86" width="29.135" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter125_d_367_2" x="787.51" y="354.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter126_d_367_2" x="1428" y="354.52" width="28.658" height="28.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter127_d_367_2" x="627.53" y="193.54" width="30.394" height="30.369"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter128_d_367_2" x="1848.5" y="406" width="28.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter129_d_367_2" x="1847.3" y="385.51" width="29.648" height="29.158"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter130_d_367_2" x="350" y="215" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter131_d_367_2" x="330.01" y="214.84" width="28.658" height="28.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter132_d_367_2" x="1267.5" y="354.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter133_d_367_2" x="1107.5" y="354.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter134_d_367_2" x="948.51" y="354.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter135_d_367_2" x="1288.9" y="354.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter136_d_367_2" x="1128.9" y="354.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter137_d_367_2" x="968.86" y="354.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter138_d_367_2" x="808.86" y="354.51" width="29.135" height="28.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter139_d_367_2" x="698.46" y="281.68" width="74.413" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter140_d_367_2" x="856.47" y="281.67" width="80.31" height="18.525"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter141_d_367_2" x="1017" y="281.68" width="79.222" height="18.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter142_d_367_2" x="1172.1" y="281.68" width="80.077" height="18.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter143_d_367_2" x="1375" y="276.68" width="139.27" height="35.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter144_d_367_2" x="693.15" y="538.68" width="77.958" height="18.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter145_d_367_2" x="852.5" y="535.68" width="80.286" height="18.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter146_d_367_2" x="989.24" y="527.68" width="133.26" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter147_d_367_2" x="1280.3" y="527.68" width="167.19" height="35.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter148_d_367_2" x="1636.2" y="259.68" width="73.312" height="18.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter149_d_367_2" x="1742.8" y="259.68" width="98.433" height="18.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter150_d_367_2" x="350" y="215" width="68" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter151_d_367_2" x="360" y="223" width="48" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter152_d_367_2" x="373.26" y="231.73" width="22.227" height="31.273"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter153_d_367_2" x="409" y="43" width="147" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter154_d_367_2" x="315" y="399" width="44" height="75"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter155_d_367_2" x="341" y="390" width="28" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter156_d_367_2" x="4" y="215" width="336" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter157_d_367_2" x="48.99" y="532.69" width="89.981" height="101.48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter158_d_367_2" x="52.5" y="398.5" width="296.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter159_d_367_2" x="0" y="398.5" width="61" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter160_d_367_2" x="0" y="174" width="12" height="235"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter161_d_367_2" x="184" y="273" width="175.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter162_d_367_2" x="94" y="175" width="10" height="128"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter163_d_367_2" x="184" y="215" width="10" height="193"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter164_d_367_2" x="4" y="295" width="188" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter165_d_367_2" x="1563.5" y="215" width="10" height="58.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter166_d_367_2" x="1563.5" y="264" width="30.5" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter167_d_367_2" x="1563.5" y="304.5" width="10" height="78.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter168_d_367_2" x="1564" y="283.21" width="52" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter169_d_367_2" x="1564" y="282.52" width="29" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter170_d_367_2" x="1564" y="284" width="29" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter171_d_367_2" x="304" y="215" width="10" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter172_d_367_2" x="647" y="440" width="30.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter173_d_367_2" x="1234" y="215" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter174_d_367_2" x="1234" y="233" width="38" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter175_d_367_2" x="1263.5" y="233" width="10" height="40"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter176_d_367_2" x="1264" y="263" width="32" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter177_d_367_2" x="1849" y="215" width="34" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter178_d_367_2" x="1873.5" y="215" width="10" height="58.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter179_d_367_2" x="1849" y="263.5" width="33" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter180_d_367_2" x="497" y="213" width="34" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter181_d_367_2" x="733" y="174" width="58" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter182_d_367_2" x="1684" y="233" width="98" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter183_d_367_2" x="1684" y="255" width="98" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter184_d_367_2" x="1729" y="276" width="53" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter185_d_367_2" x="446.04" y="96.679" width="73.665" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter186_d_367_2" x="261.43" y="517.68" width="93.838" height="36.544"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter187_d_367_2" x="323.15" y="225.92" width="16.966" height="49.17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter188_d_367_2" x="208.3" y="233.15" width="78.588" height="31.966"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter189_d_367_2" x="215.28" y="326.15" width="107.69" height="31.979"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter190_d_367_2" x="108.08" y="250.15" width="68.988" height="16.966"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter191_d_367_2" x="70.279" y="343.27" width="55.044" height="16.727"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter192_d_367_2" x="7.0737" y="243.15" width="94.046" height="31.966"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter193_d_367_2" x="9.5943" y="190.15" width="88.496" height="16.979"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter194_d_367_2" x="525" y="153" width="10" height="30"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter195_d_367_2" x="526" y="153" width="29" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter196_d_367_2" x="527" y="34" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter197_d_367_2" x="527" y="35" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter198_d_367_2" x="528" y="53" width="27" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter199_d_367_2" x="1609" y="641" width="329" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter200_d_367_2" x="128" y="621" width="1488" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter201_d_367_2" x="408" y="0" width="148" height="12.007"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter202_d_367_2" x="572.5" y="373.3" width="12" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter203_d_367_2" x="647" y="414" width="10" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter204_d_367_2" x="1441.5" y="463" width="10.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                    </defs>
                    @if ($data)
                        {{-- main route --}}
                        <path id="{{ $data['id'] }}" d="{{ $data['path'] }}" stroke="#44aa00"
                            stroke-width="10" stroke-linecap="round" fill="none"
                            data-room="{{ $room }}" />

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
            }, 15000);
        }
        ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(event => {
            document.addEventListener(event, resetTimer, true);
        });
        resetTimer();
    </script>
</body>

</html>
