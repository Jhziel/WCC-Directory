<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7th Floor - WCC SCAN Campus Directory</title>
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
        $paths = config('RoomPaths.7thFloor');
        $data = $paths[$room] ?? null;
    @endphp
    <!-- Floor Navigator Component -->
    <x-floor-navigator :currentFloor="7" />

    <!-- Main Content -->
    <div class="floor-container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-black mb-1">7th Floor</h1>
            <p class="text-sm text-black/70">WCC SCAN Campus Directory</p>
        </div>

        <!-- SVG Container -->
        <div class="svg-wrapper">
            <div class="panzoom-container">

                <svg width="1823" height="496" fill="none" version="1.1" viewBox="0 0 1823 496"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="1823" height="496" fill="#fff" />
                    <rect x="526.97" y="67" width="157" height="346" fill="#AC9362" fill-opacity=".5" />
                    <path id="STAGE-BG" d="m349.97 121h119.5l19.5 21.5 16 19.5v165l-18.5 20.5-17.5 19.5h-119v-246z"
                        fill="{{ $room == 156 ? '#44aa00' : '#AC9362' }}" fill-opacity="{{ $room == 156 ? 1 : 0.5 }}" />
                    <rect id="COMFORT-ROOM-BG" fill="{{ $room == 145 ? '#44aa00' : '#9EEB9E' }}"
                        fill-opacity="{{ $room == 145 ? 1 : 0.61 }}" x="88.967" y="357" width="220" height="86" />
                    <g fill-opacity=".5">
                        <rect id="TOOL-ROOM-BG" x="1506" y="206" width="58" height="178"
                            fill="{{ $room == 148 ? '#44aa00' : '#D78687' }}"
                            fill-opacity="{{ $room == 148 ? 1 : 0.5 }}" />
                        <path id="AMT-LAB-BG" d="m1289 4v200l276-0.5v240.5h-59v40h309v-431h-126-124.5v-49h-275.5z"
                            fill="{{ $room == 147 ? '#44aa00' : '#ff0' }}"
                            fill-opacity="{{ $room == 147 ? 1 : 0.5 }}" />
                        <rect id="BASKETBALL-BG" x="713.97" y="72" width="527" height="345"
                            fill="{{ $room == 146 ? '#44aa00' : '#AC9362' }}"
                            fill-opacity="{{ $room == 146 ? 1 : 0.5 }}" />
                    </g>
                    <g filter="url(#filter0_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1406 484)" width="32" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1406 482)" x="1" y="-1" width="30" height="39"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter1_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1399 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1399 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter2_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1357 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1357 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter3_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1350 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1350 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter4_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1343 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1343 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter5_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1392 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1392 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter6_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1385 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1385 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter7_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1378 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1378 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter8_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1371 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1371 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter9_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1364 484)" width="7" height="41" fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1364 483)" x=".5" y="-.5" width="6" height="40"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter10_d_367_2)">
                        <path d="m1269.5 36h-1260.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter11_d_367_2)">
                        <line x1="9.9999" x2="9.0259" y1="34.013" y2="184.01" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter12_d_367_2)">
                        <path d="m1819 486h-1812" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter13_d_367_2)">
                        <path d="m6 488-1e-5 -248" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter14_d_367_2)">
                        <rect transform="rotate(180 52 77)" x="52" y="77" width="41" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 51 76)" x="51" y="76" width="39" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter15_d_367_2)">
                        <rect transform="rotate(180 93 117)" x="93" y="117" width="41" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 92 116)" x="92" y="116" width="39" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter16_d_367_2)">
                        <rect transform="rotate(180 52 87)" x="52" y="87" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 51.5 86.5)" x="51.5" y="86.5" width="40" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter17_d_367_2)">
                        <rect transform="rotate(180 1358 324)" x="1358" y="324" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 323.5)" x="1357.5" y="323.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g id="ELEVATOR-BG" filter="url(#filter18_d_367_2)">
                        <rect transform="rotate(180 1565 444)" x="1565" y="444" width="60" height="60"
                            fill="{{ $room == 149 ? '#44aa00' : '#D9D9D9' }}"
                            fill-opacity="{{ $room == 149 ? 1 : 0.5 }}" />
                        <rect transform="rotate(180 1564.5 443.5)" x="1564.5" y="443.5" width="59" height="59"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter19_d_367_2)">
                        <rect transform="rotate(180 1438 414)" x="1438" y="414" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 413.5)" x="1437.5" y="413.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter20_d_367_2)">
                        <rect transform="rotate(180 1358 384)" x="1358" y="384" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 383.5)" x="1357.5" y="383.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter21_d_367_2)">
                        <rect transform="rotate(180 1358 394)" x="1358" y="394" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 393.5)" x="1357.5" y="393.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter22_d_367_2)">
                        <rect transform="rotate(180 1358 404)" x="1358" y="404" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 403.5)" x="1357.5" y="403.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter23_d_367_2)">
                        <rect transform="rotate(269.68 1358 414)" x="1358" y="414" width="100" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(269.68 1358.5 413.5)" x="1358.5" y="413.5" width="99"
                            height="9" stroke="#000" />
                    </g>
                    <g filter="url(#filter24_d_367_2)">
                        <rect transform="rotate(180 1358 414)" x="1358" y="414" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 413.5)" x="1357.5" y="413.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter25_d_367_2)">
                        <rect transform="rotate(180 1438 334)" x="1438" y="334" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 333.5)" x="1437.5" y="333.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter26_d_367_2)">
                        <rect transform="rotate(180 1438 344)" x="1438" y="344" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 343.5)" x="1437.5" y="343.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter27_d_367_2)">
                        <rect transform="rotate(180 1438 354)" x="1438" y="354" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 353.5)" x="1437.5" y="353.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter28_d_367_2)">
                        <rect transform="rotate(180 1438 364)" x="1438" y="364" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 363.5)" x="1437.5" y="363.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter29_d_367_2)">
                        <rect transform="rotate(180 1438 374)" x="1438" y="374" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 373.5)" x="1437.5" y="373.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter30_d_367_2)">
                        <rect transform="rotate(180 1438 384)" x="1438" y="384" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 383.5)" x="1437.5" y="383.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter31_d_367_2)">
                        <rect transform="rotate(180 1438 394)" x="1438" y="394" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 393.5)" x="1437.5" y="393.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter32_d_367_2)">
                        <rect transform="rotate(180 1438 404)" x="1438" y="404" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 403.5)" x="1437.5" y="403.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter33_d_367_2)">
                        <rect transform="rotate(180 1358 334)" x="1358" y="334" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 333.5)" x="1357.5" y="333.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter34_d_367_2)">
                        <rect transform="rotate(180 1358 344)" x="1358" y="344" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 343.5)" x="1357.5" y="343.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter35_d_367_2)">
                        <rect transform="rotate(180 1358 354)" x="1358" y="354" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 353.5)" x="1357.5" y="353.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter36_d_367_2)">
                        <rect transform="rotate(180 1358 364)" x="1358" y="364" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 363.5)" x="1357.5" y="363.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter37_d_367_2)">
                        <rect transform="rotate(180 1358 374)" x="1358" y="374" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1357.5 373.5)" x="1357.5" y="373.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter38_d_367_2)">
                        <rect transform="rotate(180 1438 324)" x="1438" y="324" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1437.5 323.5)" x="1437.5" y="323.5" width="69" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter39_d_367_2)">
                        <rect transform="rotate(180 52 97)" x="52" y="97" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 51.5 96.5)" x="51.5" y="96.5" width="40" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter40_d_367_2)">
                        <rect transform="rotate(180 52 107)" x="52" y="107" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 51.5 106.5)" x="51.5" y="106.5" width="40" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter41_d_367_2)">
                        <rect transform="rotate(180 52 117)" x="52" y="117" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 51.5 116.5)" x="51.5" y="116.5" width="40" height="9"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter42_d_367_2)">
                        <rect transform="rotate(180 61 77)" x="61" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 60.5 76.5)" x="60.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter43_d_367_2)">
                        <rect transform="rotate(180 115 77)" x="115" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 114.5 76.5)" x="114.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter44_d_367_2)">
                        <rect transform="rotate(180 124 77)" x="124" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 123.5 76.5)" x="123.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter45_d_367_2)">
                        <rect transform="rotate(180 133 77)" x="133" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 132.5 76.5)" x="132.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter46_d_367_2)">
                        <rect transform="rotate(180 70 77)" x="70" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 69.5 76.5)" x="69.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter47_d_367_2)">
                        <rect transform="rotate(180 79 77)" x="79" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 78.5 76.5)" x="78.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter48_d_367_2)">
                        <rect transform="rotate(180 88 77)" x="88" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 87.5 76.5)" x="87.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter49_d_367_2)">
                        <rect transform="rotate(180 97 77)" x="97" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 96.5 76.5)" x="96.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter50_d_367_2)">
                        <rect transform="rotate(180 106 77)" x="106" y="77" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 105.5 76.5)" x="105.5" y="76.5" width="8" height="39"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter51_d_367_2)">
                        <rect transform="rotate(180 115 176)" x="115" y="176" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 114.5 175.5)" x="114.5" y="175.5" width="99" height="39"
                            stroke="#00FF26" />
                    </g>
                    <g filter="url(#filter52_d_367_2)">
                        <rect transform="rotate(180 1413 469)" x="1413" y="469" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1412 468)" x="1412" y="468" width="98" height="38"
                            stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter53_d_367_2)">
                        <path
                            d="m51.214 160v-10.182h6.1449v1.094h-4.9119v3.44h4.5938v1.094h-4.5938v3.46h4.9915v1.094h-6.2245zm8.9638-10.182 2.625 4.236h0.0796l2.625-4.236h1.4517l-3.2017 5.091 3.2017 5.091h-1.4517l-2.625-4.156h-0.0796l-2.625 4.156h-1.4517l3.2813-5.091-3.2813-5.091h1.4517zm9.6188 0v10.182h-1.2329v-10.182h1.2329zm1.9153 1.094v-1.094h7.6364v1.094h-3.2017v9.088h-1.233v-9.088h-3.2017z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter54_d_367_2)">
                        <path
                            d="m1349.2 453v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter55_d_367_2)">
                        <line x1="8" x2="88" y1="242" y2="242" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter56_d_367_2)">
                        <path d="m86 244v-64" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter57_d_367_2)">
                        <path d="m5.9667 443.7 1307-1e-3" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter58_d_367_2)">
                        <line x1="327.5" x2="327.5" y1="444" y2="284" stroke="#000" />
                    </g>
                    <g filter="url(#filter59_d_367_2)">
                        <line x1="1287.5" x2="1287.5" y1="444" y2="284" stroke="#000" />
                    </g>
                    <g filter="url(#filter60_d_367_2)">
                        <line x1="327.5" x2="327.5" y1="194" y2="34" stroke="#000" />
                    </g>
                    <g filter="url(#filter61_d_367_2)">
                        <path d="M1267 36.5V2" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter62_d_367_2)">
                        <path d="m1268 275.5h70" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter63_d_367_2)">
                        <path d="m1437 443v-167" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter64_d_367_2)">
                        <path d="m1438 275.5h-51.97" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter65_d_367_2)">
                        <path d="m1269 205h43" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter66_d_367_2)">
                        <path d="m1363.5 205h201.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter67_d_367_2)">
                        <line x1="1415" x2="1438" y1="443.5" y2="443.5" stroke="#000" />
                    </g>
                    <g filter="url(#filter68_d_367_2)">
                        <path d="m1265 2h301" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter69_d_367_2)">
                        <path d="m1565.5 1.2975e-4v54" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter70_d_367_2)">
                        <line x1="1565" x2="1815" y1="52" y2="52" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter71_d_367_2)">
                        <path d="m1817 50v438" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter72_d_367_2)">
                        <rect x="1515" y="394" width="40" height="42" fill="#000" />
                    </g>
                    <g filter="url(#filter73_d_367_2)">
                        <path d="m1528.3 426v-23.273h14.04v2.5h-11.23v7.864h10.5v2.5h-10.5v7.909h11.41v2.5h-14.22z"
                            fill="#fff" />
                    </g>
                    <g id="AMT-LAB-Text" filter="url(#filter74_d_367_2)">
                        <path
                            d="m1670.4 175h-2.81l5.12-14.545h3.25l5.13 14.545h-2.81l-3.89-11.562h-0.11l-3.88 11.562zm0.09-5.703h7.67v2.116h-7.67v-2.116zm12.51-8.842h3.23l4.32 10.539h0.17l4.31-10.539h3.23v14.545h-2.53v-9.993h-0.13l-4.02 9.95h-1.89l-4.02-9.971h-0.14v10.014h-2.53v-14.545zm17.49 2.208v-2.208h11.6v2.208h-4.49v12.337h-2.61v-12.337h-4.5zm-28.8 36.337v-14.545h2.63v12.336h6.41v2.209h-9.04zm13.74 0h-2.81l5.12-14.545h3.25l5.13 14.545h-2.82l-3.88-11.562h-0.11l-3.88 11.562zm0.09-5.703h7.67v2.116h-7.67v-2.116zm12.51 5.703v-14.545h5.57c1.05 0 1.93 0.165 2.62 0.497 0.7 0.326 1.23 0.774 1.57 1.342 0.35 0.568 0.53 1.212 0.53 1.932 0 0.592-0.12 1.098-0.34 1.52-0.23 0.416-0.54 0.755-0.92 1.015-0.38 0.261-0.81 0.448-1.29 0.561v0.142c0.52 0.029 1.02 0.188 1.49 0.476 0.48 0.284 0.87 0.687 1.17 1.208s0.46 1.15 0.46 1.889c0 0.753-0.19 1.43-0.55 2.031-0.37 0.597-0.92 1.068-1.65 1.414-0.73 0.345-1.66 0.518-2.77 0.518h-5.89zm2.64-2.202h2.83c0.96 0 1.65-0.182 2.07-0.547 0.42-0.369 0.64-0.842 0.64-1.42 0-0.431-0.11-0.819-0.32-1.165-0.22-0.35-0.52-0.625-0.91-0.824-0.39-0.203-0.86-0.305-1.41-0.305h-2.9v4.261zm0-6.157h2.6c0.46 0 0.87-0.083 1.23-0.249 0.37-0.17 0.65-0.41 0.86-0.717 0.22-0.313 0.32-0.682 0.32-1.108 0-0.564-0.2-1.028-0.59-1.392-0.4-0.365-0.98-0.547-1.76-0.547h-2.66v4.013z"
                            fill="{{ $room == 147 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter75_d_367_2)">
                        <rect x="308" y="37" width="20" height="170" fill="#D9D9D9" />
                        <rect x="309" y="38" width="18" height="168" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter76_d_367_2)">
                        <path d="m468.97 120h-120v248h120" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter77_d_367_2)">
                        <path d="m505.97 161v166.59" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter78_d_367_2)">
                        <rect transform="rotate(-90 348.97 70)" x="348.97" y="70" width="6" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 69.5)" x="349.47" y="69.5" width="5" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter79_d_367_2)">
                        <rect transform="rotate(-90 348.97 106)" x="348.97" y="106" width="6" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 105.5)" x="349.47" y="105.5" width="5" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter80_d_367_2)">
                        <rect transform="rotate(-90 348.97 113)" x="348.97" y="113" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 112.5)" x="349.47" y="112.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter81_d_367_2)">
                        <rect transform="rotate(-90 348.97 120)" x="348.97" y="120" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 119.5)" x="349.47" y="119.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter82_d_367_2)">
                        <rect transform="rotate(-90 348.97 77)" x="348.97" y="77" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 76.5)" x="349.47" y="76.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter83_d_367_2)">
                        <rect transform="rotate(-90 348.97 82)" x="348.97" y="82" width="5" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 81.5)" x="349.47" y="81.5" width="4" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter84_d_367_2)">
                        <rect transform="rotate(-90 348.97 89)" x="348.97" y="89" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 88.5)" x="349.47" y="88.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter85_d_367_2)">
                        <rect transform="rotate(-90 348.97 94)" x="348.97" y="94" width="5" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 93.5)" x="349.47" y="93.5" width="4" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter86_d_367_2)">
                        <rect transform="rotate(-90 348.97 100)" x="348.97" y="100" width="6" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 99.5)" x="349.47" y="99.5" width="5" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter87_d_367_2)">
                        <rect transform="rotate(-90 348.97 375)" x="348.97" y="375" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 374.5)" x="349.47" y="374.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter88_d_367_2)">
                        <rect transform="rotate(-90 348.97 411)" x="348.97" y="411" width="5" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 410.5)" x="349.47" y="410.5" width="4" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter89_d_367_2)">
                        <rect transform="rotate(-90 348.97 417)" x="348.97" y="417" width="6" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 416.5)" x="349.47" y="416.5" width="5" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter90_d_367_2)">
                        <rect transform="rotate(-90 348.97 424)" x="348.97" y="424" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 423.5)" x="349.47" y="423.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter91_d_367_2)">
                        <rect transform="rotate(-90 348.97 382)" x="348.97" y="382" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 381.5)" x="349.47" y="381.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter92_d_367_2)">
                        <rect transform="rotate(-90 348.97 387)" x="348.97" y="387" width="5" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 386.5)" x="349.47" y="386.5" width="4" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter93_d_367_2)">
                        <rect transform="rotate(-90 348.97 394)" x="348.97" y="394" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 393.5)" x="349.47" y="393.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter94_d_367_2)">
                        <rect transform="rotate(-90 348.97 399)" x="348.97" y="399" width="5" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 398.5)" x="349.47" y="398.5" width="4" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter95_d_367_2)">
                        <rect transform="rotate(-90 348.97 406)" x="348.97" y="406" width="7" height="68"
                            fill="#D9D9D9" />
                        <rect transform="rotate(-90 349.47 405.5)" x="349.47" y="405.5" width="6" height="67"
                            stroke="#000" />
                    </g>
                    <g filter="url(#filter96_d_367_2)">
                        <path d="m468.47 119.5 38 42" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter97_d_367_2)">
                        <path d="m468.49 368.35 37.973-41.35" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter98_d_367_2)">
                        <path d="m1240 71v345h-527v-345h527z" shape-rendering="crispEdges" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter99_d_367_2)">
                        <path d="m686.97 70v345h-156v-345h156z" shape-rendering="crispEdges" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter100_d_367_2)">
                        <path
                            d="m979.97 209c18.172 0 33.003 15.615 33.003 35s-14.831 35-33.003 35c-18.173 0-33-15.615-33-35s14.827-35 33-35z"
                            shape-rendering="crispEdges" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter101_d_367_2)">
                        <path d="m1147 208c18.75 0 34 15.643 34 35s-15.25 35-34 35-34-15.643-34-35 15.25-35 34-35z"
                            shape-rendering="crispEdges" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter102_d_367_2)">
                        <path
                            d="m804.97 208c18.751 0 34 15.643 34 35s-15.249 35-34 35c-18.752 0-34-15.643-34-35s15.248-35 34-35z"
                            shape-rendering="crispEdges" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter103_d_367_2)">
                        <path d="m747.97 377c68.223 0 126-60.567 126-133.97 0-73.402-57.777-135.03-126-135.03"
                            stroke="#010000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter104_d_367_2)">
                        <path d="m1205 376c-66.88 0-124-59.74-124-133.43 0-73.692 57.12-135.57 124-135.57"
                            stroke="#010000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter105_d_367_2)">
                        <path d="m747.97 108h-36" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter106_d_367_2)">
                        <path d="m748.97 377h-36" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter107_d_367_2)">
                        <path d="m1205 107h35" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter108_d_367_2)">
                        <path d="m1205 376h35" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter109_d_367_2)">
                        <path d="m1146 207h93" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter110_d_367_2)">
                        <line x1="1146" x2="1239" y1="278" y2="278" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter111_d_367_2)">
                        <path d="m711.97 207h94" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter112_d_367_2)">
                        <path d="m711.97 278h94" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter113_d_367_2)">
                        <line x1="806.97" x2="806.97" y1="207" y2="278" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter114_d_367_2)">
                        <line x1="1147" x2="1147" y1="207" y2="279" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter115_d_367_2)">
                        <line x1="978.97" x2="978.97" y1="70" y2="416" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter116_d_367_2)">
                        <path d="m539.69 69.538v345.87" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter117_d_367_2)">
                        <path d="m677.34 69.778v345.63" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter118_d_367_2)">
                        <path d="m609.25 69.246 0.49 110.43" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter119_d_367_2)">
                        <path d="m610.04 306.51v109.4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter120_d_367_2)">
                        <line x1="529.97" x2="687.97" y1="179" y2="179" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter121_d_367_2)">
                        <line x1="530.97" x2="687.97" y1="306" y2="306" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter122_d_367_2)">
                        <line x1="530.97" x2="687.97" y1="243" y2="243" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter123_d_367_2)">
                        <rect x="1269" y="4" width="20" height="201" fill="#D9D9D9" />
                        <rect x="1270" y="5" width="18" height="199" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter124_d_367_2)">
                        <rect x="1268" y="275" width="20" height="169" fill="#D9D9D9" />
                        <rect x="1269" y="276" width="18" height="167" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter125_d_367_2)">
                        <path d="m1564 385v-181" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter126_d_367_2)">
                        <line x1="721.97" x2="721.97" y1="226" y2="257" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter127_d_367_2)">
                        <line x1="1230" x2="1230" y1="226" y2="257" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter128_d_367_2)">
                        <path d="m725.97 239c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4z"
                            shape-rendering="crispEdges" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter129_d_367_2)">
                        <path d="m1225 238.75c2.21 0 4 1.79 4 4 0 2.209-1.79 4-4 4s-4-1.791-4-4c0-2.21 1.79-4 4-4z"
                            shape-rendering="crispEdges" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter130_d_367_2)">
                        <path d="m1504.9 451.5v-246.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter131_d_367_2)">
                        <line x1="11" x2="87" y1="182" y2="182" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter132_d_367_2)">
                        <path d="m88.467 445v-176" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter133_d_367_2)">
                        <line x1="327.97" x2="327.97" y1="444" y2="284" stroke="#000" />
                    </g>
                    <g filter="url(#filter134_d_367_2)">
                        <path d="m308.97 356.03h-70.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter135_d_367_2)">
                        <path d="m158.97 356.03h-70.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter136_d_367_2)">
                        <rect x="308.47" y="275" width="20" height="170" fill="#D9D9D9" />
                        <rect x="309.47" y="276" width="18" height="168" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter137_d_367_2)">
                        <path d="m198.97 376.5v68" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter138_d_367_2)">
                        <line x1="179.47" x2="218.47" y1="376" y2="376" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter139_d_367_2)">
                        <line x1="7.9667" x2="17.967" y1="442" y2="442" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter140_d_367_2)">
                        <path d="m1505 473.5v10.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g id="TOOL-ROOM-Text" filter="url(#filter141_d_367_2)">
                        <path
                            d="m1531.3 342.12h-1.55v-8.124h1.55v3.147h8.64v1.83h-8.64v3.147zm3.55-18.337c1.09 0 2.03 0.206 2.81 0.617 0.78 0.408 1.38 0.964 1.79 1.67 0.42 0.703 0.63 1.5 0.63 2.392 0 0.891-0.21 1.69-0.63 2.396-0.41 0.703-1.01 1.26-1.79 1.671-0.78 0.407-1.72 0.611-2.81 0.611-1.1 0-2.04-0.204-2.82-0.611-0.78-0.411-1.38-0.968-1.79-1.671-0.42-0.706-0.62-1.505-0.62-2.396 0-0.892 0.2-1.689 0.62-2.392 0.41-0.706 1.01-1.262 1.79-1.67 0.78-0.411 1.72-0.617 2.82-0.617zm0 1.855c-0.78 0-1.43 0.121-1.96 0.363-0.53 0.238-0.93 0.57-1.21 0.994-0.27 0.424-0.41 0.913-0.41 1.467 0 0.553 0.14 1.042 0.41 1.466 0.28 0.425 0.68 0.758 1.21 1 0.53 0.238 1.18 0.358 1.96 0.358 0.77 0 1.42-0.12 1.95-0.358 0.53-0.242 0.94-0.575 1.21-1 0.27-0.424 0.41-0.913 0.41-1.466 0-0.554-0.14-1.043-0.41-1.467s-0.68-0.756-1.21-0.994c-0.53-0.242-1.18-0.363-1.95-0.363zm0-12.696c1.09 0 2.03 0.205 2.81 0.616 0.78 0.408 1.38 0.965 1.79 1.671 0.42 0.702 0.63 1.499 0.63 2.391s-0.21 1.69-0.63 2.396c-0.41 0.703-1.01 1.26-1.79 1.671-0.78 0.407-1.72 0.611-2.81 0.611-1.1 0-2.04-0.204-2.82-0.611-0.78-0.411-1.38-0.968-1.79-1.671-0.42-0.706-0.62-1.504-0.62-2.396s0.2-1.689 0.62-2.391c0.41-0.706 1.01-1.263 1.79-1.671 0.78-0.411 1.72-0.616 2.82-0.616zm0 1.854c-0.78 0-1.43 0.121-1.96 0.363-0.53 0.239-0.93 0.57-1.21 0.994-0.27 0.425-0.41 0.913-0.41 1.467 0 0.553 0.14 1.042 0.41 1.467 0.28 0.424 0.68 0.757 1.21 0.999 0.53 0.238 1.18 0.358 1.96 0.358 0.77 0 1.42-0.12 1.95-0.358 0.53-0.242 0.94-0.575 1.21-0.999 0.27-0.425 0.41-0.914 0.41-1.467 0-0.554-0.14-1.042-0.41-1.467-0.27-0.424-0.68-0.755-1.21-0.994-0.53-0.242-1.18-0.363-1.95-0.363zm5.09-3.598h-10.19v-1.845h8.64v-4.484h1.55v6.329zm0-11.402h-10.19v-3.819c0-0.782 0.14-1.438 0.41-1.968 0.27-0.534 0.66-0.937 1.15-1.208 0.48-0.276 1.05-0.413 1.7-0.413s1.22 0.139 1.7 0.417c0.48 0.276 0.85 0.682 1.11 1.219 0.26 0.536 0.39 1.196 0.39 1.978v2.72h-1.53v-2.471c0-0.458-0.07-0.832-0.19-1.124-0.13-0.291-0.32-0.507-0.56-0.646-0.25-0.143-0.56-0.214-0.92-0.214s-0.67 0.071-0.92 0.214c-0.26 0.142-0.46 0.36-0.59 0.651-0.14 0.292-0.2 0.668-0.2 1.129v1.69h8.64v1.845zm-4.62-5.26 4.62-2.521v2.058l-4.62 2.476v-2.013zm-0.47-12.944c1.09 0 2.03 0.206 2.81 0.617 0.78 0.407 1.38 0.964 1.79 1.67 0.42 0.703 0.63 1.5 0.63 2.391 0 0.892-0.21 1.691-0.63 2.397-0.41 0.702-1.01 1.259-1.79 1.67-0.78 0.408-1.72 0.612-2.81 0.612-1.1 0-2.04-0.204-2.82-0.612-0.78-0.411-1.38-0.968-1.79-1.67-0.42-0.706-0.62-1.505-0.62-2.397 0-0.891 0.2-1.688 0.62-2.391 0.41-0.706 1.01-1.263 1.79-1.67 0.78-0.411 1.72-0.617 2.82-0.617zm0 1.854c-0.78 0-1.43 0.121-1.96 0.363-0.53 0.239-0.93 0.57-1.21 0.995-0.27 0.424-0.41 0.913-0.41 1.466 0 0.554 0.14 1.043 0.41 1.467 0.28 0.424 0.68 0.757 1.21 0.999 0.53 0.239 1.18 0.358 1.96 0.358 0.77 0 1.42-0.119 1.95-0.358 0.53-0.242 0.94-0.575 1.21-0.999s0.41-0.913 0.41-1.467c0-0.553-0.14-1.042-0.41-1.466-0.27-0.425-0.68-0.756-1.21-0.995-0.53-0.242-1.18-0.363-1.95-0.363zm0-12.696c1.09 0 2.03 0.206 2.81 0.617 0.78 0.407 1.38 0.964 1.79 1.67 0.42 0.703 0.63 1.5 0.63 2.392 0 0.891-0.21 1.69-0.63 2.396-0.41 0.702-1.01 1.259-1.79 1.67-0.78 0.408-1.72 0.612-2.81 0.612-1.1 0-2.04-0.204-2.82-0.612-0.78-0.411-1.38-0.968-1.79-1.67-0.42-0.706-0.62-1.505-0.62-2.396 0-0.892 0.2-1.689 0.62-2.392 0.41-0.706 1.01-1.263 1.79-1.67 0.78-0.411 1.72-0.617 2.82-0.617zm0 1.855c-0.78 0-1.43 0.121-1.96 0.363-0.53 0.238-0.93 0.57-1.21 0.994-0.27 0.424-0.41 0.913-0.41 1.467 0 0.553 0.14 1.042 0.41 1.466 0.28 0.424 0.68 0.757 1.21 0.999 0.53 0.239 1.18 0.358 1.96 0.358 0.77 0 1.42-0.119 1.95-0.358 0.53-0.242 0.94-0.575 1.21-0.999s0.41-0.913 0.41-1.466c0-0.554-0.14-1.043-0.41-1.467s-0.68-0.756-1.21-0.994c-0.53-0.242-1.18-0.363-1.95-0.363zm-5.1-3.599v-2.257l7.38-3.022v-0.12l-7.38-3.022v-2.257h10.19v1.769h-7v0.095l6.97 2.814v1.322l-6.98 2.814v0.095h7.01v1.769h-10.19z"
                            fill="{{ $room == 148 ? 'white' : '#000' }}" />
                    </g>
                    <g id="COMFORT-ROOM-TextC" filter="url(#filter142_d_367_2)">
                        <path
                            d="m120.52 399.25h-1.859c-0.053-0.305-0.151-0.575-0.294-0.811-0.142-0.238-0.319-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.725-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.045 0.139-1.472 0.417-0.428 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.427 0.268 0.916 0.403 1.467 0.403 0.304 0 0.59-0.04 0.855-0.12 0.268-0.083 0.508-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.541-0.586 0.15-0.232 0.252-0.497 0.309-0.796l1.859 0.01c-0.07 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.806 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.397-0.621-0.702-0.415-1.256-1.013-1.66-1.795s-0.607-1.72-0.607-2.814c0-1.097 0.204-2.035 0.612-2.814 0.408-0.782 0.963-1.38 1.665-1.795 0.703-0.414 1.498-0.621 2.387-0.621 0.566 0 1.093 0.08 1.581 0.239 0.487 0.159 0.921 0.392 1.302 0.701 0.381 0.305 0.695 0.679 0.94 1.123 0.248 0.441 0.411 0.945 0.487 1.512zm10.787 1.655c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm12.687 10.182v-10.182h6.523v1.546h-4.678v2.765h4.231v1.546h-4.231v4.325h-1.845zm17.302-5.091c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm3.398-4.022v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147z"
                            fill="{{ $room == 145 ? 'white' : '#000' }}" />
                    </g>
                    <g id="COMFORT-ROOM-TextR" filter="url(#filter143_d_367_2)">
                        <path
                            d="m232.73 406v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{ $room == 145 ? 'white' : '#000' }}" />
                    </g>
                    <defs>
                        <filter id="filter0_d_367_2" x="1402" y="443" width="40" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter1_d_367_2" x="1395" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter2_d_367_2" x="1353" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter3_d_367_2" x="1346" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter4_d_367_2" x="1339" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter5_d_367_2" x="1388" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter6_d_367_2" x="1381" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter7_d_367_2" x="1374" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter8_d_367_2" x="1367" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter9_d_367_2" x="1360" y="443" width="15" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter10_d_367_2" x="4.9999" y="34" width="1268.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter11_d_367_2" x="3.0259" y="34" width="12.974" height="158.03"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter12_d_367_2" x="2.9667" y="484" width="1820" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter13_d_367_2" x="5.9605e-8" y="240" width="12" height="256"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter14_d_367_2" x="7" y="37" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter15_d_367_2" x="48" y="77" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter16_d_367_2" x="7" y="77" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter17_d_367_2" x="1284" y="314" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter18_d_367_2" x="1501" y="384" width="68" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter19_d_367_2" x="1364" y="404" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter20_d_367_2" x="1284" y="374" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter21_d_367_2" x="1284" y="384" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter22_d_367_2" x="1284" y="394" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter23_d_367_2" x="1353.4" y="313.95" width="18.558" height="108.05"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter24_d_367_2" x="1284" y="404" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter25_d_367_2" x="1364" y="324" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter26_d_367_2" x="1364" y="334" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter27_d_367_2" x="1364" y="344" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter28_d_367_2" x="1364" y="354" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter29_d_367_2" x="1364" y="364" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter30_d_367_2" x="1364" y="374" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter31_d_367_2" x="1364" y="384" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter32_d_367_2" x="1364" y="394" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter33_d_367_2" x="1284" y="324" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter34_d_367_2" x="1284" y="334" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter35_d_367_2" x="1284" y="344" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter36_d_367_2" x="1284" y="354" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter37_d_367_2" x="1284" y="364" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter38_d_367_2" x="1364" y="314" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter39_d_367_2" x="7" y="87" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter40_d_367_2" x="7" y="97" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter41_d_367_2" x="7" y="107" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter42_d_367_2" x="48" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter43_d_367_2" x="102" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter44_d_367_2" x="111" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter45_d_367_2" x="120" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter46_d_367_2" x="57" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter47_d_367_2" x="66" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter48_d_367_2" x="75" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter49_d_367_2" x="84" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter50_d_367_2" x="93" y="37" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter51_d_367_2" x="11" y="136" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter52_d_367_2" x="1309" y="429" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter53_d_367_2" x="47.214" y="149.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter54_d_367_2" x="1345.2" y="442.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter55_d_367_2" x="4" y="240" width="88" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter56_d_367_2" x="80" y="180" width="12" height="72"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter57_d_367_2" x="1.9667" y="442.7" width="1315" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter58_d_367_2" x="323" y="284" width="9" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter59_d_367_2" x="1283" y="284" width="9" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter60_d_367_2" x="323" y="34" width="9" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter61_d_367_2" x="1261" y="2" width="12" height="42.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter62_d_367_2" x="1264" y="274.5" width="78" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter63_d_367_2" x="1432" y="276" width="10" height="175"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter64_d_367_2" x="1382" y="274.5" width="59.967" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter65_d_367_2" x="1265" y="204" width="51" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter66_d_367_2" x="1359.5" y="204" width="209.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter67_d_367_2" x="1411" y="443" width="31" height="9"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter68_d_367_2" x="1261" y="0" width="309" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter69_d_367_2" x="1559.5" y=".00012855" width="12" height="62"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter70_d_367_2" x="1561" y="50" width="258" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter71_d_367_2" x="1811" y="50" width="12" height="446"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter72_d_367_2" x="1511" y="394" width="48" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter73_d_367_2" x="1524.3" y="402.73" width="22.227" height="31.273"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter74_d_367_2" x="1663.6" y="160.46" width="52.508" height="46.546"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter75_d_367_2" x="304" y="37" width="28" height="178"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter76_d_367_2" x="343.97" y="119" width="129" height="258"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter77_d_367_2" x="500.97" y="161" width="10" height="174.59"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter78_d_367_2" x="344.97" y="64" width="76" height="14"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter79_d_367_2" x="344.97" y="100" width="76" height="14"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter80_d_367_2" x="344.97" y="106" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter81_d_367_2" x="344.97" y="113" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter82_d_367_2" x="344.97" y="70" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter83_d_367_2" x="344.97" y="77" width="76" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter84_d_367_2" x="344.97" y="82" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter85_d_367_2" x="344.97" y="89" width="76" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter86_d_367_2" x="344.97" y="94" width="76" height="14"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter87_d_367_2" x="344.97" y="368" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter88_d_367_2" x="344.97" y="406" width="76" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter89_d_367_2" x="344.97" y="411" width="76" height="14"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter90_d_367_2" x="344.97" y="417" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter91_d_367_2" x="344.97" y="375" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter92_d_367_2" x="344.97" y="382" width="76" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter93_d_367_2" x="344.97" y="387" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter94_d_367_2" x="344.97" y="394" width="76" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter95_d_367_2" x="344.97" y="399" width="76" height="15"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter96_d_367_2" x="463.78" y="118.77" width="47.373" height="51.459"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter97_d_367_2" x="463.81" y="326.26" width="47.336" height="50.82"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter98_d_367_2" x="707.97" y="70" width="537" height="355"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter99_d_367_2" x="525.97" y="69" width="166" height="355"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter100_d_367_2" x="941.97" y="208" width="76" height="80"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter101_d_367_2" x="1108" y="207" width="78" height="80"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter102_d_367_2" x="765.97" y="207" width="78" height="80"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter103_d_367_2" x="743.97" y="107" width="135" height="279"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter104_d_367_2" x="1076" y="106" width="133" height="279"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter105_d_367_2" x="707.97" y="107" width="44" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter106_d_367_2" x="708.97" y="376" width="44" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter107_d_367_2" x="1201" y="106" width="43" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter108_d_367_2" x="1201" y="375" width="43" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter109_d_367_2" x="1142" y="206" width="101" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter110_d_367_2" x="1142" y="277" width="101" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter111_d_367_2" x="707.97" y="206" width="102" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter112_d_367_2" x="707.97" y="277" width="102" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter113_d_367_2" x="801.97" y="207" width="10" height="79"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter114_d_367_2" x="1142" y="207" width="10" height="80"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter115_d_367_2" x="973.97" y="70" width="10" height="354"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter116_d_367_2" x="534.69" y="69.537" width="10" height="353.88"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter117_d_367_2" x="672.34" y="69.777" width="10" height="353.64"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter118_d_367_2" x="604.25" y="69.24" width="10.49" height="118.44"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter119_d_367_2" x="605.04" y="306.51" width="10" height="117.41"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter120_d_367_2" x="525.97" y="178" width="166" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter121_d_367_2" x="526.97" y="305" width="165" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter122_d_367_2" x="526.97" y="242" width="165" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter123_d_367_2" x="1265" y="4" width="28" height="209"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter124_d_367_2" x="1264" y="275" width="28" height="177"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter125_d_367_2" x="1559" y="204" width="10" height="189"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter126_d_367_2" x="716.97" y="226" width="10" height="39"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter127_d_367_2" x="1225" y="226" width="10" height="39"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter128_d_367_2" x="716.97" y="238" width="18" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter129_d_367_2" x="1216" y="237.75" width="18" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter130_d_367_2" x="1499.9" y="205" width="10" height="254.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter131_d_367_2" x="7" y="180" width="84" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter132_d_367_2" x="83.467" y="269" width="10" height="184"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter133_d_367_2" x="323.47" y="284" width="9" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter134_d_367_2" x="234.47" y="355.03" width="78.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter135_d_367_2" x="84.467" y="355.03" width="78.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter136_d_367_2" x="304.47" y="275" width="28" height="178"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter137_d_367_2" x="193.97" y="376.5" width="10" height="76"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter138_d_367_2" x="175.47" y="375" width="47" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter139_d_367_2" x="3.9667" y="440" width="18" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter140_d_367_2" x="1500" y="473.5" width="10" height="18.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter141_d_367_2" x="1525.6" y="258.33" width="18.46" height="91.792"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter142_d_367_2" x="107.55" y="395.68" width="78.019" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter143_d_367_2" x="228.73" y="395.68" width="49.468" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
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

                        {{-- animated circle container --}}
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
