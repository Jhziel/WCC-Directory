<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Floor - WCC SCAN Campus Directory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .draw-line {
            stroke-dasharray: 300;
            stroke-dashoffset: 300;
            animation: draw 2s ease-in-out infinite;
        }

        @keyframes draw {
            0% {
                stroke-dashoffset: 300;
            }

            50% {
                stroke-dashoffset: 300;
            }

            100% {
                stroke-dashoffset: 0;
            }
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
                        $paths = config('RoomPaths.1stFloor');
                        $data = $paths[$room] ?? null;
                    @endphp
    <!-- Floor Navigator Component -->
    <x-floor-navigator :currentFloor="1" />

    <!-- Main Content -->
    <div class="floor-container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-black mb-1">1st Floor</h1>
            <p class="text-sm text-black/70">WCC SCAN Campus Directory</p>
        </div>

        <!-- SVG Container -->
        <div class="svg-wrapper" id="svg-wrapper">
            <div class="panzoom-container">
                <svg width="1821" height="870" fill="none" version="1.1" viewBox="0 0 1821 870"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="5.9562" y="-1.2071" width="1821" height="870" fill="#fff" />
                    <g fill="#a6b6c9" fill-opacity=".5">
                        <path class="room"
                            d="m1081.9 50.939-154.39-1.0794-0.13887 162.28 1.5 7.5 4.5 4.5 7 3.5 7 1v-16.5h113.8l0.197 16.5 6.5-1 6.5-2.5 6-5z"  fill="#{{$room==5? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==5? 1:.50196}}"/>
                        <path class="room"
                            d="m929.34 48.75-154.39-1.0794-0.13887 162.28 1.5 7.5 4.5 6.5 7 3.5 7 1v-18.5h113.8l0.197 16.5 6.5-1 6.5-2.5 6-5z" fill="#{{$room==4? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==4? 1:.50196}}"/>
                        <path class="room"
                            d="m620.18 49.732-152.95-1.9865 0.42318 163.19 1.5 7.5 4.5 6.5 7 3.5 7 1v-18.5h113.8l0.197 16.5 6.5-1 6.5-2.5 4-5z" fill="#{{$room==2? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==2? 1:.50196}}"  />
                        <path class="room"
                            d="m774.63 49.083-154.39-1.0794-0.13887 162.28 1.5 7.5 4.5 6.5 7 3.5 7 1v-18.5h113.8l0.197 16.5 6.5-1 6.5-2.5 6-5z" fill="#{{$room==3? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==3? 1:.50196}}" />
                    </g>
                    <rect x="1381.5" y="552" width="81" height="38" fill="#D9D9D9" />
                    <path
                        d="m1080.5 301v158h-306v-158l2-8.5 4-6.5 14-6v21h113.5v-20l6.5 1 6.5 4 4 6 2.5 9 1.5-8 4.5-6.5 7-4 7-1.5v20h113.5v-20.5l12 4 6 7 1.5 5z"
                        clip-rule="evenodd" fill="#{{$room==13? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==13? 1:.50196}}" fill-rule="evenodd" class="room"/>
                    <rect x="7.5" y="461" width="78" height="40" fill="#D9D9D9" />
                    <path
                        d="m1507.5 501h19.5v-22.5l10.5 3.5 6.5 6 3.5 10 3-8.5 6.5-7.5 9-2 0.5 20.5 231 0.5v357h-290l-1-198h-19.5l2-8 4-6 5.5-4.5 8-2.5-7-1.5-6.5-3.5-4-6.5-2-6.5h20.5v-120z"
                        fill="#{{$room==19  ? '44aa00':'D9D9D9'}}" fill-opacity="{{$room==19  ? '1':'0.5'}}"  />
                    {{-- <path
                        d="m851.5 590 655.5 1.5v29.5h-19.5l0.5 4.5 3 6.5 6 4.5 7.5 3-10 4-5.5 7-2 8.5h20.5v199h-589v-56.5h-47.5l-2.5-8-3-5.5-4-2.5-5-2.5-4.009-1.5-0.991-191.5z"
                        fill="#ff0" fill-opacity=".32" opacity=".5" /> --}}
                    <g fill-opacity=".5">
                        <path
                            d="m851.5 590 655.5 1.5v29.5h-19.5l0.5 4.5 3 6.5 6 4.5 7.5 3-10 4-5.5 7-2 8.5h20.5v199h-589v-56.5h-47.5l-2.5-8-3-5.5-4-2.5-5-2.5-4.009-1.5-0.991-191.5z"
                            fill="#{{$room==17  ? '44aa00':'ff0'}}" fill-opacity="{{$room==17  ? '1':'0.5'}}"  />
                        <path class="room"
                            d="m1506.5 332.5 120.5-10.5 1-6.5 4-7.5 6-4 8-2v18l132-57h35.5l1.5 137.5h-148v21.5h-70v17h-90.5v-106.5z"
                            fill="#{{$room==15  ? '44aa00':'D3D3FF'}}" fill-opacity="{{$room==15  ? '1':'0.5'}}"/>
                        <path d="m851.5 802v-20l6.5 2 6.5 3 4.5 7 2 8h47.5v56h-67v-56z" fill="#{{$room==18  ? '44aa00':'9EEB9E'}}" fill-opacity="{{$room==18  ? '1':'0.5'}}"  />
                        <path d="m1082.5 51h132v159h-112.5v19l-6.5-1.5-6.5-2.5-4.5-5.5-2-9.5v-159z" fill="#{{$room==6  ? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==6  ? '1':'0.5'}}" />
                        <path class="room" d="m1082.5 302v-8l4-7 7-4 7-1.5v19.5l114 1v157h-132v-157z" fill="#{{$room==14  ? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==14  ? '1':'0.5'}}"/>
                    </g>
                    <path class="room"
                        d="m467.07 210.25v8.0187l-4.5974 7.0164-8.0455 4.0094-8.0455 1.5035v-19.546l-131.03-1.0023v-157.37h151.72z"
                        fill="#{{$room==1  ? '44aa00':'d3d3ff'}}" fill-opacity="{{$room==14  ? '1':'0.9'}}" stroke-width="1.0733" />
                    <g filter="url(#filter0_d_367_2)">
                        <rect x="314.5" y="360" width="152" height="99" fill="#{{$room==9  ? '44aa00':'9EEB9E'}}" fill-opacity="{{$room==9  ? '1':'0.5'}}" 
                            shape-rendering="crispEdges" />
                    </g>
                    <g filter="url(#filter1_d_367_2)">
                        <rect x="1438.5" y="501" width="68" height="51" fill="#9EEB9E" fill-opacity=".5"
                            shape-rendering="crispEdges" />
                    </g>
                    <g filter="url(#filter2_d_367_2)">
                        <path
                            d="m7.5 260.36h60.762c0.9826-1.475 3.3849-1.907 7.7379-0.512 2.4293-0.808 6.1394-0.786 11.5 0.512h-19.238c-3.4585 5.191 10.672 23.305 19.238 20.164v180.48h-80v-200.64z"
                            fill="#{{$room==7  ? '44aa00':'D89B6C'}}" fill-opacity="{{$room==7  ? '1':'0.5'}}" shape-rendering="crispEdges" />
                    </g>
                    <g filter="url(#filter3_d_367_2)">
                        <path class="room"
                            d="m295.5 359v101h-208v-80.244c-1.5784-2.146-1.537-8.823 0-20.756v20.756c1.0839 1.473 2.9316 0.81 5.5834-1.756 6.1983 1.177 10.625-5.893 14.417-19h188z"
                            fill="#{{$room==8  ? '44aa00':'A6B6C9'}}" fill-opacity="{{$room==8  ? '1':'0.5'}}"  shape-rendering="crispEdges" />
                    </g>
                    <path d="m468.5 301v158h306v-158l-2.5-8.5-3.5-6.5-5-3-8-3v21h-269v-19l-8 1.5-6 3.5-4 7.5v6.5z"
                       fill="#{{$room==10 || $room==11 || $room==12   ? '44aa00':'A6B6C9'}}" fill-opacity="{{$room==10 || $room==11 || $room==12   ? '1':'0.5'}}" fill="#A6B6C9"  />
                    <g filter="url(#filter4_d_367_2)">
                        <path d="m851.5 803.07v-21.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter5_d_367_2)">
                        <path d="m851.66 781.9c11.47 2.559 16.522 5.865 19.34 20.174" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter6_d_367_2)">
                        <rect x="1498.5" y="552" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1499.5" y="553" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter7_d_367_2)">
                        <rect x="1489.5" y="552" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1490.5" y="553" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter8_d_367_2)">
                        <rect x="1480.5" y="552" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1481.5" y="553" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter9_d_367_2)">
                        <rect x="1471.5" y="552" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1472.5" y="553" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter10_d_367_2)">
                        <rect x="1462.5" y="552" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1463.5" y="553" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter11_d_367_2)">
                        <path d="m1817 210.6h-23.5m23.5 39h-24.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter12_d_367_2)">
                        <path d="m1796 210c1.23 12.914 3.69 17.215 19.82 18.492" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter13_d_367_2)">
                        <path d="m1794.5 251c2.28-12.315 5.63-19.013 21-21.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter14_d_367_2)">
                        <path d="m1746.5 19 69 78.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter15_d_367_2)">
                        <rect transform="rotate(90 1549.5 40)" x="1549.5" y="40" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1548.5 41)" x="1548.5" y="41" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter16_d_367_2)">
                        <rect transform="rotate(90 1549.5 31)" x="1549.5" y="31" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1548.5 32)" x="1548.5" y="32" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter17_d_367_2)">
                        <rect transform="rotate(90 1549.5 22)" x="1549.5" y="22" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1548.5 23)" x="1548.5" y="23" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter18_d_367_2)">
                        <rect transform="rotate(90 1549.5 13)" x="1549.5" y="13" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1548.5 14)" x="1548.5" y="14" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter19_d_367_2)">
                        <rect transform="rotate(90 1549.5 4)" x="1549.5" y="4" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1548.5 5)" x="1548.5" y="5" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter20_d_367_2)">
                        <path d="M1549.5 70V49" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter21_d_367_2)">
                        <path d="m1549.5 69.5c-34.45-5.5794-51.23-9.3648-60-19.498" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter22_d_367_2)">
                        <path d="m1431 69c34.45-5.5793 48.49-9.3236 57.26-19.457" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter23_d_367_2)">
                        <path d="M1431 69.5V49" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter24_d_367_2)">
                        <rect transform="rotate(90 1425.5 40)" x="1425.5" y="40" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1424.5 41)" x="1424.5" y="41" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter25_d_367_2)">
                        <rect transform="rotate(90 1425.5 31)" x="1425.5" y="31" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1424.5 32)" x="1424.5" y="32" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter26_d_367_2)">
                        <rect transform="rotate(90 1425.5 22)" x="1425.5" y="22" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1424.5 23)" x="1424.5" y="23" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter27_d_367_2)">
                        <rect transform="rotate(90 1425.5 13)" x="1425.5" y="13" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1424.5 14)" x="1424.5" y="14" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter28_d_367_2)">
                        <rect transform="rotate(90 1425.5 4)" x="1425.5" y="4" width="9" height="125"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 1424.5 5)" x="1424.5" y="5" width="7" height="123"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter29_d_367_2)">
                        <path d="M1418.5 70V49" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter30_d_367_2)">
                        <path d="m1419 69.5c-34.16-5.5793-50.3-9.3647-59-19.498" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter31_d_367_2)">
                        <path d="m1300 68.5c34.16-5.5793 50.07-8.8236 58.77-18.957" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter32_d_367_2)">
                        <line x1="1300.5" x2="1300.5" y1="69" y2="49" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter33_d_367_2)">
                        <path d="m1100.5 301v-20.5m-39 21v-22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter34_d_367_2)">
                        <path d="M947.5 301.5V280" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter35_d_367_2)">
                        <path d="m908.5 301.5v-22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter36_d_367_2)">
                        <path d="M794.5 301.5V280" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter37_d_367_2)">
                        <path d="m756.5 301.5v-22" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter38_d_367_2)">
                        <path d="m486.5 301.5v-21" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter39_d_367_2)">
                        <path d="m601.5 228v-18" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter40_d_367_2)">
                        <path d="m947.5 229.5v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter41_d_367_2)">
                        <path d="m794.5 229.5v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter42_d_367_2)">
                        <path d="m487 281.5c-11.855 1.501-17.903 4.199-19.5 19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter43_d_367_2)">
                        <path d="m795 281c-12.054 1.831-18.526 4.453-20.5 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter44_d_367_2)">
                        <path d="m756 280.5c11.367 2.687 15.534 5.321 18.5 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter45_d_367_2)">
                        <path d="m948 281c-12.054 1.831-18.526 4.453-20.5 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter46_d_367_2)">
                        <path d="m908.5 280.5c11.47 2.559 16.182 5.191 19 19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter47_d_367_2)">
                        <path d="m448 229c12.054-1.831 17.526-4.453 19.5-19.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter48_d_367_2)">
                        <path d="m467.5 209.81c1.831 12.054 4.953 17.213 20 19.187" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter49_d_367_2)">
                        <path d="m601 227c12.054-1.831 17.526-2.453 19.5-17.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter50_d_367_2)">
                        <path d="m620.5 209.5c1.831 12.054 4.453 16.026 19.5 18" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter51_d_367_2)">
                        <rect x="1267.5" y="299" width="20" height="161" fill="#D9D9D9" />
                        <rect x="1268.5" y="300" width="18" height="159" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter52_d_367_2)">
                        <path d="m1285.5 50.5h-971" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter53_d_367_2)">
                        <path d="m314.5 50.5h-207.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter54_d_367_2)">
                        <path d="m108 50.5h-104" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter55_d_367_2)">
                        <path d="m1434.5 501.5h-1430.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter56_d_367_2)">
                        <path d="m6 502.5-4e-5 -454" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter57_d_367_2)">
                        <rect transform="rotate(90 47.5 155.99)" x="47.5" y="155.99" width="41" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 156.99)" x="46.5" y="156.99" width="39" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter58_d_367_2)">
                        <rect transform="rotate(90 57.5 156)" x="57.5" y="156" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 56.5 157)" x="56.5" y="157" width="39" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter59_d_367_2)">
                        <rect transform="rotate(180 1357.5 340)" x="1357.5" y="340" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 339)" x="1356.5" y="339" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter60_d_367_2)">
                        <rect transform="rotate(180 1565.5 440)" x="1565.5" y="440" width="60" height="60"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1564.5 439)" x="1564.5" y="439" width="58" height="58"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter61_d_367_2)">
                        <rect transform="rotate(180 1437.5 430)" x="1437.5" y="430" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 429)" x="1436.5" y="429" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter62_d_367_2)">
                        <rect transform="rotate(180 1357.5 400)" x="1357.5" y="400" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 399)" x="1356.5" y="399" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter63_d_367_2)">
                        <rect transform="rotate(180 1357.5 410)" x="1357.5" y="410" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 409)" x="1356.5" y="409" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter64_d_367_2)">
                        <rect transform="rotate(180 1357.5 420)" x="1357.5" y="420" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 419)" x="1356.5" y="419" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter65_d_367_2)">
                        <rect transform="rotate(269.68 1357.5 430)" x="1357.5" y="430" width="100" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(269.68 1358.5 428.99)" x="1358.5" y="428.99" width="98"
                            height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter66_d_367_2)">
                        <rect transform="rotate(180 1357.5 430)" x="1357.5" y="430" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 429)" x="1356.5" y="429" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter67_d_367_2)">
                        <rect transform="rotate(180 1437.5 350)" x="1437.5" y="350" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 349)" x="1436.5" y="349" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter68_d_367_2)">
                        <rect transform="rotate(180 1437.5 360)" x="1437.5" y="360" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 359)" x="1436.5" y="359" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter69_d_367_2)">
                        <rect transform="rotate(180 1437.5 370)" x="1437.5" y="370" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 369)" x="1436.5" y="369" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter70_d_367_2)">
                        <rect transform="rotate(180 1437.5 380)" x="1437.5" y="380" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 379)" x="1436.5" y="379" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter71_d_367_2)">
                        <rect transform="rotate(180 1437.5 390)" x="1437.5" y="390" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 389)" x="1436.5" y="389" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter72_d_367_2)">
                        <rect transform="rotate(180 1437.5 400)" x="1437.5" y="400" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 399)" x="1436.5" y="399" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter73_d_367_2)">
                        <rect transform="rotate(180 1437.5 410)" x="1437.5" y="410" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 409)" x="1436.5" y="409" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter74_d_367_2)">
                        <rect transform="rotate(180 1437.5 420)" x="1437.5" y="420" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 419)" x="1436.5" y="419" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter75_d_367_2)">
                        <rect transform="rotate(180 1357.5 350)" x="1357.5" y="350" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 349)" x="1356.5" y="349" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter76_d_367_2)">
                        <rect transform="rotate(180 1357.5 360)" x="1357.5" y="360" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 359)" x="1356.5" y="359" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter77_d_367_2)">
                        <rect transform="rotate(180 1357.5 370)" x="1357.5" y="370" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 369)" x="1356.5" y="369" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter78_d_367_2)">
                        <rect transform="rotate(180 1357.5 380)" x="1357.5" y="380" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 379)" x="1356.5" y="379" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter79_d_367_2)">
                        <rect transform="rotate(180 1357.5 390)" x="1357.5" y="390" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1356.5 389)" x="1356.5" y="389" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter80_d_367_2)">
                        <rect transform="rotate(180 1437.5 340)" x="1437.5" y="340" width="70" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1436.5 339)" x="1436.5" y="339" width="68" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter81_d_367_2)">
                        <path d="m67.5 156v41h-10v-41h10z" fill="#D9D9D9" />
                        <path d="m66.5 196h-8v-39h8v39z" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter82_d_367_2)">
                        <rect transform="rotate(90 77.5 156)" x="77.5" y="156" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 76.5 157)" x="76.5" y="157" width="39" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter83_d_367_2)">
                        <rect transform="rotate(90 87.49 156.02)" x="87.49" y="156.02" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 86.49 157.02)" x="86.49" y="157.02" width="39" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter84_d_367_2)">
                        <rect transform="rotate(90 97.5 156)" x="97.5" y="156" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 96.5 157)" x="96.5" y="157" width="39" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter85_d_367_2)">
                        <rect transform="rotate(90 107.5 156)" x="107.5" y="156" width="41" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 106.5 157)" x="106.5" y="157" width="39" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter86_d_367_2)">
                        <rect transform="rotate(90 47.5 147)" x="47.5" y="147" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 148)" x="46.5" y="148" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter87_d_367_2)">
                        <rect transform="rotate(90 47.5 138)" x="47.5" y="138" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 139)" x="46.5" y="139" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter88_d_367_2)">
                        <rect transform="rotate(90 47.5 129)" x="47.5" y="129" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 130)" x="46.5" y="130" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter89_d_367_2)">
                        <rect transform="rotate(90 47.5 120)" x="47.5" y="120" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 121)" x="46.5" y="121" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter90_d_367_2)">
                        <rect transform="rotate(90 47.5 111)" x="47.5" y="111" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 112)" x="46.5" y="112" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter91_d_367_2)">
                        <rect transform="rotate(90 47.5 102)" x="47.5" y="102" width="9" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 46.5 103)" x="46.5" y="103" width="7" height="38"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter92_d_367_2)">
                        <rect transform="rotate(90 276.5 41)" x="276.5" y="41" width="9" height="169"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 275.5 42)" x="275.5" y="42" width="7" height="167"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter93_d_367_2)">
                        <rect transform="rotate(90 276.5 32)" x="276.5" y="32" width="9" height="169"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 275.5 33)" x="275.5" y="33" width="7" height="167"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter94_d_367_2)">
                        <rect transform="rotate(90 276.5 23)" x="276.5" y="23" width="9" height="169"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 275.5 24)" x="275.5" y="24" width="7" height="167"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter95_d_367_2)">
                        <rect transform="rotate(90 276.5 14)" x="276.5" y="14" width="9" height="169"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 275.5 15)" x="275.5" y="15" width="7" height="167"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter96_d_367_2)">
                        <rect transform="rotate(90 276.5 5)" x="276.5" y="5" width="9" height="169"
                            fill="#D9D9D9" />
                        <rect transform="rotate(90 275.5 6)" x="275.5" y="6" width="7" height="167"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter97_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1242.5 493)" width="32" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1242.5 491)" x="1" y="-1" width="30" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter98_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1235.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1235.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter99_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1193.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1193.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter100_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1186.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1186.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter101_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1179.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1179.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter102_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1228.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1228.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter103_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1221.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1221.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter104_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1214.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1214.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter105_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1207.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1207.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter106_d_367_2)">
                        <rect transform="matrix(1 0 0 -1 1200.5 493)" width="7" height="25"
                            fill="#D9D9D9" />
                        <rect transform="matrix(1 0 0 -1 1200.5 491)" x="1" y="-1" width="5" height="23"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter107_d_367_2)">
                        <rect transform="rotate(180 1474.5 123)" x="1474.5" y="123" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1473.5 122)" x="1473.5" y="122" width="98" height="38"
                            stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter108_d_367_2)">
                        <path
                            d="m1410.7 107v-10.182h6.15v1.0937h-4.91v3.4401h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.2358h0.08l2.63-4.2358h1.45l-3.2 5.0908 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.0908h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.0937v-1.0937h7.64v1.0937h-3.2v9.0881h-1.24v-9.0881h-3.2z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter109_d_367_2)">
                        <rect transform="rotate(180 241.5 111)" x="241.5" y="111" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 240.5 110)" x="240.5" y="110" width="98" height="38"
                            stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter110_d_367_2)">
                        <path
                            d="m177.71 97v-10.182h6.145v1.0937h-4.912v3.4404h4.594v1.0937h-4.594v3.4602h4.992v1.0938h-6.225zm8.964-10.182 2.625 4.2358h0.08l2.625-4.2358h1.451l-3.201 5.0909 3.201 5.0909h-1.451l-2.625-4.1562h-0.08l-2.625 4.1562h-1.452l3.282-5.0909-3.282-5.0909h1.452zm9.619 0v10.182h-1.233v-10.182h1.233zm1.915 1.0937v-1.0937h7.637v1.0937h-3.202v9.0881h-1.233v-9.0881h-3.202z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter111_d_367_2)">
                        <rect transform="rotate(180 1782.5 250)" x="1782.5" y="250" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1781.5 249)" x="1781.5" y="249" width="98" height="38"
                            stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter112_d_367_2)">
                        <path
                            d="m1718.7 234v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter113_d_367_2)">
                        <line x1="7.5" x2="87.5" y1="259" y2="259" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter114_d_367_2)">
                        <line x1="86.5" x2="86.5" y1="260" y2="197" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter115_d_367_2)">
                        <line x1="86.5" x2="86.5" y1="500" y2="280" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter116_d_367_2)">
                        <line x1="57.499" x2="1284.5" y1="460" y2="459" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter117_d_367_2)">
                        <path d="m295 359.5h-189" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter118_d_367_2)">
                        <line x1="467.5" x2="467.5" y1="460" y2="300" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter119_d_367_2)">
                        <line x1="1286.5" x2="1286.5" y1="460" y2="300" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter120_d_367_2)">
                        <line x1="774.5" x2="774.5" y1="460" y2="300" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter121_d_367_2)">
                        <path d="m621 460-0.5-48" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter122_d_367_2)">
                        <line x1="1081.5" x2="1081.5" y1="460" y2="300" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter123_d_367_2)">
                        <line x1="1081.5" x2="1081.5" y1="210" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter124_d_367_2)">
                        <line x1="1286.5" x2="1286.5" y1="210" y2="22" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter125_d_367_2)">
                        <line x1="620.5" x2="620.5" y1="210" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter126_d_367_2)">
                        <line x1="467.5" x2="467.5" y1="210" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter127_d_367_2)">
                        <line x1="927.5" x2="927.5" y1="210" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter128_d_367_2)">
                        <line x1="774.5" x2="774.5" y1="210" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter129_d_367_2)">
                        <path d="m1214.5 301h-115" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter130_d_367_2)">
                        <path d="m1100.5 209.75h115" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter131_d_367_2)">
                        <path d="m1061.5 210.5h-114" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter132_d_367_2)">
                        <path d="M908 210.5H794.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter133_d_367_2)">
                        <line x1="754.5" x2="639.5" y1="211" y2="211" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter134_d_367_2)">
                        <line x1="601.5" x2="486.5" y1="211" y2="211" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter135_d_367_2)">
                        <path d="m314.5 211h134" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter136_d_367_2)">
                        <path d="M1061.5 300.5H947" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter137_d_367_2)">
                        <path d="M908.5 300.5H794" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter138_d_367_2)">
                        <path d="m756.5 300.5h-270.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter139_d_367_2)">
                        <path d="M1437 460V300" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter140_d_367_2)">
                        <path d="m1814.5 500.5h-248.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter141_d_367_2)">
                        <path d="m1528 500.5h-39" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter142_d_367_2)">
                        <path d="M1457.5 500.5H1434" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter143_d_367_2)">
                        <path d="m86.5 380c12.565-1.831 18.443-6.453 20.5-21.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter144_d_367_2)">
                        <path d="m68 259.5c1.8306 12.565 4.4534 18.443 19.5 20.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter145_d_367_2)">
                        <path d="m1081.5 210c-1.83 12.054-5.45 17.026-20.5 19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter146_d_367_2)">
                        <path d="m754.5 228.5c12.054-1.831 18.026-3.953 20-19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter147_d_367_2)">
                        <path d="m927.5 210c-1.831 12.054-5.453 16.526-20.5 18.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter148_d_367_2)">
                        <path d="m774.5 209.5c1.831 12.054 5.453 17.026 20.5 19" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter149_d_367_2)">
                        <path d="m927.5 210c1.831 12.054 5.453 16.526 20.5 18.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter150_d_367_2)">
                        <path d="m1081.5 210c1.83 12.054 5.45 17.026 20.5 19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter151_d_367_2)">
                        <path d="m1100.5 281.5c-12.05 1.831-17.03 3.953-19 19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter152_d_367_2)">
                        <path d="m1646.5 302c-12.05 1.831-18.03 4.953-20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter153_d_367_2)">
                        <path d="m1061 280.5c11.37 2.687 17.53 5.321 20.5 19.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter154_d_367_2)">
                        <path d="m1566.5 501.5v-22.812m-39 22.812v-23.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter155_d_367_2)">
                        <path d="m1567 479.65c-12.05 1.83-16.99 4.995-18.96 20.041" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter156_d_367_2)">
                        <path d="m1527.5 479.19c11.37 2.687 17.53 5.822 20.5 20" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter157_d_367_2)">
                        <path d="m1507.7 620.6h-20.5m20.5 39h-21.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter158_d_367_2)">
                        <path d="m1487.2 620.13c1.83 12.054 4.99 16.99 20.04 18.963" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter159_d_367_2)">
                        <path d="m1486.7 659.6c2.69-11.367 5.82-17.533 20-20.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter160_d_367_2)">
                        <path
                            d="m356.15 127v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.831-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.813 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm20.202 0v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.349 10.376c-0.819 0-1.522-0.207-2.108-0.622-0.584-0.417-1.033-1.019-1.348-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.348-1.79 0.586-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.035 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.716-1.243-0.308-0.282-0.672-0.423-1.093-0.423-0.633 0-1.134 0.315-1.502 0.945-0.368 0.626-0.553 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.099 0.418zm5.574 1.362v-1.332l3.535-3.466c0.338-0.341 0.62-0.644 0.845-0.909 0.225-0.266 0.394-0.522 0.507-0.771s0.169-0.514 0.169-0.795c0-0.322-0.073-0.597-0.219-0.826-0.145-0.232-0.346-0.411-0.601-0.537s-0.545-0.189-0.87-0.189c-0.335 0-0.628 0.07-0.88 0.209-0.252 0.136-0.448 0.33-0.587 0.582-0.136 0.252-0.204 0.552-0.204 0.9h-1.755c0-0.647 0.148-1.208 0.443-1.686 0.295-0.477 0.701-0.846 1.218-1.108 0.52-0.262 1.117-0.393 1.79-0.393 0.682 0 1.282 0.128 1.799 0.383s0.918 0.605 1.203 1.049c0.289 0.444 0.433 0.951 0.433 1.521 0 0.381-0.073 0.756-0.219 1.124s-0.402 0.775-0.77 1.223c-0.365 0.447-0.877 0.989-1.537 1.625l-1.755 1.785v0.07h4.435v1.541h-6.98zm-63.516 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==1?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter161_d_367_2)">
                        <path
                            d="m326.14 423.25h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.498 0.179-1.049 0.268-1.656 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm10.788 1.655c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm12.688 10.182v-10.182h6.523v1.546h-4.679v2.765h4.231v1.546h-4.231v4.325h-1.844zm17.301-5.091c0 1.097-0.206 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.41 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.831-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm3.398-4.022v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm27.053 8.636v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.41 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==9?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter162_d_367_2)">
                        <path
                            d="m662.07 430v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.813 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm20.202 0v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.349 10.376c-0.819 0-1.522-0.207-2.108-0.622-0.584-0.417-1.033-1.019-1.348-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.348-1.79 0.586-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.035 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.716-1.243-0.308-0.282-0.672-0.423-1.093-0.423-0.633 0-1.134 0.315-1.502 0.945-0.368 0.626-0.553 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.099 0.418zm9.114 1.501c-0.663 0-1.256-0.124-1.78-0.373-0.524-0.252-0.94-0.596-1.248-1.034-0.305-0.437-0.467-0.938-0.487-1.501h1.79c0.033 0.417 0.213 0.759 0.542 1.024 0.328 0.262 0.722 0.393 1.183 0.393 0.361 0 0.683-0.083 0.964-0.249 0.282-0.166 0.504-0.396 0.666-0.691 0.163-0.295 0.242-0.631 0.239-1.009 3e-3 -0.385-0.078-0.726-0.244-1.024-0.165-0.299-0.392-0.532-0.681-0.701-0.288-0.173-0.619-0.259-0.994-0.259-0.305-3e-3 -0.605 0.053-0.9 0.169s-0.528 0.269-0.701 0.458l-1.665-0.274 0.532-5.25h5.906v1.541h-4.38l-0.293 2.7h0.059c0.189-0.222 0.456-0.406 0.801-0.552 0.344-0.149 0.722-0.224 1.133-0.224 0.617 0 1.167 0.146 1.651 0.438 0.484 0.288 0.865 0.686 1.143 1.193 0.279 0.507 0.418 1.087 0.418 1.74 0 0.673-0.156 1.273-0.467 1.8-0.309 0.524-0.738 0.936-1.288 1.238-0.547 0.298-1.18 0.447-1.899 0.447zm-66.974 10.115h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==12?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter163_d_367_2)">
                        <path
                            d="m1114.5 119v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.69 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.59-5.091h2.26l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm20.21 0v10.182h-1.85v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.76zm6.72 0v10.182h-1.84v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.75zm2.59 10.182v-1.332l3.53-3.466c0.34-0.341 0.62-0.644 0.85-0.909 0.22-0.266 0.39-0.522 0.51-0.771 0.11-0.249 0.16-0.514 0.16-0.795 0-0.322-0.07-0.597-0.21-0.826-0.15-0.232-0.35-0.411-0.61-0.537-0.25-0.126-0.54-0.189-0.87-0.189s-0.62 0.07-0.88 0.209c-0.25 0.136-0.44 0.33-0.58 0.582s-0.21 0.552-0.21 0.9h-1.75c0-0.647 0.15-1.208 0.44-1.686 0.3-0.477 0.7-0.846 1.22-1.108s1.12-0.393 1.79-0.393c0.68 0 1.28 0.128 1.8 0.383s0.92 0.605 1.2 1.049c0.29 0.444 0.43 0.951 0.43 1.521 0 0.381-0.07 0.756-0.21 1.124-0.15 0.368-0.41 0.775-0.78 1.223-0.36 0.447-0.87 0.989-1.53 1.625l-1.76 1.785v0.07h4.44v1.541h-6.98zm-72.88 17v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm3.84 4.614v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm15.33-6.93c-0.09-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.47 0.412-0.42 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.177-0.37 1.939 0 0.769 0.12 1.42 0.37 1.954 0.24 0.534 0.57 0.94 1 1.218 0.44 0.275 0.94 0.413 1.51 0.413 0.51 0 0.96-0.1 1.34-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.31-0.799 0.31-1.292l0.41 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.23 0.512-0.94 0-1.77-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.48-1.034 0.57-0.239 1.19-0.358 1.85-0.358 0.56 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.93 1.073 0.25 0.415 0.41 0.872 0.49 1.373h-1.88zm5.59-3.252v10.182h-1.84v-10.182h1.84zm7.53 2.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577s0.51 0.512 0.68 0.84c0.16 0.328 0.24 0.713 0.24 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.31 0.441 0.48 0.948 0.49 1.521h-1.78zm3.11-1.253v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm9.69 8.636v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.48c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm5.15 4.614h-1.96l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm5.29-5.568v1.014c0 0.292-0.06 0.595-0.17 0.91-0.11 0.312-0.26 0.61-0.45 0.895-0.19 0.282-0.41 0.524-0.66 0.726l-0.83-0.542c0.18-0.275 0.34-0.572 0.47-0.89 0.14-0.321 0.21-0.684 0.21-1.089v-1.024h1.43zm7.08 2.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577s0.51 0.512 0.68 0.84c0.16 0.328 0.24 0.713 0.24 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.31 0.441 0.48 0.948 0.49 1.521h-1.78zm-56 19.292c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h6.52v1.546h-4.68v2.765h4.23v1.546h-4.23v4.325h-1.84zm8.2 0v-10.182h6.52v1.546h-4.68v2.765h4.24v1.546h-4.24v4.325h-1.84zm10.05-10.182v10.182h-1.85v-10.182h1.85zm10.71 3.436h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.22-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.43 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66z"
                            fill="{{$room==6?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter164_d_367_2)">
                        <path
                            d="m493.64 430v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.349 10.376c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.033-1.019-1.347-1.804-0.312-0.789-0.468-1.739-0.468-2.849 4e-3 -1.11 0.161-2.055 0.473-2.834 0.314-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616s1.516 0.205 2.103 0.616 1.036 1.008 1.347 1.79c0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.253-2.038-0.17-0.551-0.408-0.965-0.716-1.243-0.309-0.282-0.673-0.423-1.094-0.423-0.633 0-1.134 0.315-1.502 0.945-0.367 0.626-0.553 1.546-0.556 2.759-4e-3 0.812 0.078 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.675 0.418 1.099 0.418zm9.228 1.501c-0.716 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.492-0.943-0.512-1.516h1.869c0.017 0.275 0.108 0.515 0.273 0.721 0.166 0.202 0.387 0.359 0.662 0.472s0.583 0.169 0.924 0.169c0.365 0 0.688-0.063 0.97-0.189 0.282-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.076-0.58-0.239-0.816-0.162-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.899v-1.422h0.899c0.355 0 0.665-0.062 0.93-0.184 0.269-0.123 0.479-0.295 0.632-0.517 0.152-0.226 0.227-0.486 0.223-0.781 4e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.551-0.503-0.236-0.119-0.513-0.179-0.831-0.179-0.311 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.774c0.013-0.57 0.177-1.07 0.492-1.501 0.318-0.434 0.742-0.772 1.272-1.014 0.531-0.245 1.126-0.368 1.785-0.368 0.68 0 1.27 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019 0.276 0.428 0.413 0.9 0.413 1.417 3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.332 0.76v0.08c0.715 0.099 1.264 0.364 1.645 0.795 0.385 0.428 0.575 0.96 0.572 1.596 0 0.57-0.162 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.333 1.054-0.563 0.256-1.209 0.383-1.939 0.383zm13.587-5.971v1.482h-4.584v-1.482h4.584zm6.752 5.832h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm-75.563 14.246h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==11?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter165_d_367_2)">
                        <path
                            d="m667.46 127v-10.182h3.819c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.457 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.758 0.675-1 1.208-0.238 0.531-0.357 1.182-0.357 1.954s0.119 1.425 0.357 1.959c0.242 0.53 0.576 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.258l3.022 7.378h0.12l3.022-7.378h2.257v10.182h-1.769v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.531-1.626h1.754zm6.349 10.376c-0.818 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.16-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616 0.816 0 1.517 0.205 2.103 0.616 0.587 0.411 1.036 1.008 1.347 1.79 0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.637 0 1.139-0.313 1.507-0.94 0.371-0.63 0.556-1.556 0.556-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.308-0.282-0.673-0.423-1.094-0.423-0.633 0-1.133 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.407 0.971 0.715 1.253 0.309 0.279 0.675 0.418 1.099 0.418zm9.303 1.501c-0.487-3e-3 -0.963-0.088-1.427-0.253-0.464-0.169-0.881-0.443-1.252-0.821-0.372-0.381-0.667-0.886-0.885-1.516-0.219-0.633-0.327-1.417-0.323-2.352 0-0.871 0.092-1.648 0.278-2.331s0.452-1.26 0.8-1.73c0.348-0.474 0.768-0.836 1.258-1.084 0.494-0.249 1.046-0.373 1.656-0.373 0.639 0 1.206 0.126 1.7 0.378 0.497 0.252 0.898 0.596 1.203 1.034 0.305 0.434 0.494 0.925 0.567 1.471h-1.815c-0.093-0.391-0.283-0.702-0.571-0.934-0.286-0.235-0.647-0.353-1.084-0.353-0.706 0-1.25 0.306-1.631 0.92-0.378 0.613-0.568 1.455-0.572 2.525h0.07c0.162-0.291 0.373-0.542 0.631-0.751 0.259-0.208 0.55-0.369 0.875-0.482 0.328-0.116 0.675-0.174 1.039-0.174 0.597 0 1.132 0.143 1.606 0.428 0.477 0.285 0.855 0.678 1.134 1.178 0.278 0.497 0.416 1.067 0.412 1.71 4e-3 0.67-0.149 1.271-0.457 1.805-0.308 0.53-0.738 0.948-1.288 1.253s-1.191 0.456-1.924 0.452zm-0.01-1.491c0.362 0 0.685-0.088 0.97-0.264 0.285-0.175 0.51-0.412 0.676-0.711 0.166-0.298 0.247-0.633 0.244-1.004 3e-3 -0.365-0.077-0.694-0.239-0.989-0.159-0.295-0.38-0.529-0.661-0.701-0.282-0.173-0.604-0.259-0.965-0.259-0.268 0-0.518 0.052-0.75 0.154-0.233 0.103-0.435 0.246-0.607 0.428-0.172 0.179-0.308 0.388-0.408 0.626-0.096 0.236-0.146 0.487-0.149 0.756 3e-3 0.355 0.086 0.681 0.249 0.979 0.162 0.299 0.386 0.537 0.671 0.716s0.608 0.269 0.969 0.269zm-67.043 11.606h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==3?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter166_d_367_2)">
                        <path
                            d="m815.98 127v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.349 10.376c-0.819 0-1.522-0.207-2.108-0.622-0.584-0.417-1.033-1.019-1.348-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.348-1.79 0.586-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.035 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.716-1.243-0.308-0.282-0.672-0.423-1.093-0.423-0.633 0-1.134 0.315-1.502 0.945-0.368 0.626-0.553 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.099 0.418zm9.193 1.501c-0.739 0-1.395-0.124-1.968-0.373-0.57-0.248-1.018-0.588-1.343-1.019-0.321-0.434-0.48-0.926-0.477-1.476-3e-3 -0.428 0.09-0.821 0.278-1.179 0.189-0.358 0.445-0.656 0.766-0.895 0.325-0.242 0.686-0.396 1.084-0.462v-0.07c-0.524-0.116-0.948-0.382-1.273-0.8-0.321-0.421-0.48-0.906-0.477-1.457-3e-3 -0.523 0.142-0.991 0.437-1.402s0.7-0.734 1.213-0.969c0.514-0.239 1.101-0.358 1.76-0.358 0.653 0 1.235 0.119 1.745 0.358 0.514 0.235 0.919 0.558 1.214 0.969 0.298 0.411 0.447 0.879 0.447 1.402 0 0.551-0.164 1.036-0.492 1.457-0.325 0.418-0.744 0.684-1.258 0.8v0.07c0.398 0.066 0.756 0.22 1.074 0.462 0.321 0.239 0.577 0.537 0.765 0.895 0.193 0.358 0.289 0.751 0.289 1.179 0 0.55-0.163 1.042-0.487 1.476-0.325 0.431-0.773 0.771-1.343 1.019-0.566 0.249-1.218 0.373-1.954 0.373zm0-1.422c0.382 0 0.713-0.064 0.995-0.194 0.281-0.132 0.5-0.318 0.656-0.556 0.156-0.239 0.235-0.514 0.239-0.826-4e-3 -0.324-0.088-0.611-0.254-0.86-0.162-0.252-0.386-0.449-0.671-0.591-0.282-0.143-0.603-0.214-0.965-0.214-0.364 0-0.689 0.071-0.974 0.214-0.285 0.142-0.51 0.339-0.676 0.591-0.163 0.249-0.242 0.536-0.239 0.86-3e-3 0.312 0.073 0.587 0.229 0.826 0.156 0.235 0.374 0.419 0.656 0.551 0.285 0.133 0.62 0.199 1.004 0.199zm0-4.638c0.312 0 0.587-0.063 0.826-0.189 0.242-0.126 0.432-0.302 0.571-0.527 0.14-0.225 0.211-0.486 0.214-0.781-3e-3 -0.291-0.073-0.546-0.209-0.765-0.135-0.222-0.324-0.393-0.566-0.512-0.242-0.123-0.521-0.184-0.836-0.184-0.321 0-0.604 0.061-0.85 0.184-0.242 0.119-0.431 0.29-0.566 0.512-0.133 0.219-0.198 0.474-0.194 0.765-4e-3 0.295 0.063 0.556 0.198 0.781 0.14 0.222 0.33 0.398 0.572 0.527 0.245 0.126 0.526 0.189 0.84 0.189zm-66.964 16.175h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==4?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter167_d_367_2)">
                        <path
                            d="m971.13 127v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.508-0.316 0.647-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.475-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.595-5.091h2.26l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.81-6.98h-0.1v7.01h-1.77v-10.182zm20.21 0v10.182h-1.85v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.76zm6.72 0v10.182h-1.84v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.75zm6.35 10.376c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.34-1.804-0.32-0.789-0.47-1.739-0.47-2.849s0.16-2.055 0.47-2.834c0.32-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.29-0.616 2.1-0.616 0.82 0 1.52 0.205 2.1 0.616 0.59 0.411 1.04 1.008 1.35 1.79 0.32 0.782 0.47 1.727 0.47 2.834 0 1.114-0.15 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.3-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.55 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.16 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm-65.652 11.616h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.091 0c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.06-0.368-0.581-0.245-1.035-0.603-1.363-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.45 0.411 0.75 0.527c0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.84-0.215-1.499-0.542-1.986-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.334-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{$room==5?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter168_d_367_2)">
                        <path
                            d="m1115.9 376v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.7-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm20.2 0v10.182h-1.84v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.75zm6.73 0v10.182h-1.85v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.76zm6.72 0v10.182h-1.84v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.75zm-52.77 20.436h-1.85c-0.06-0.305-0.16-0.575-0.3-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.73-0.373-0.26-0.086-0.55-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.42 0.275-0.76 0.68-1 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.73-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.85 0.01c-0.06 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.7-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.38-0.621 0.57 0 1.1 0.08 1.59 0.239 0.48 0.159 0.92 0.392 1.3 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.48 1.512zm2.88 6.746h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm14.13-3.391c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84 0.16 0.328 0.25 0.713 0.25 1.153 0 0.597-0.16 1.122-0.46 1.576-0.31 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.03-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.45 0.411 0.75 0.527c0.31 0.116 0.66 0.174 1.05 0.174 0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.64-0.437-0.28-0.12-0.59-0.226-0.96-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.49-1.576 0.32-0.451 0.77-0.801 1.33-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.32 0.441 0.48 0.948 0.49 1.521h-1.78zm3.56 7.383v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm12.26-10.182v10.182h-1.84v-10.182h1.84zm2 10.182v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm8.5 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter169_d_367_2)">
                        <path
                            d="m511.34 127v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.457 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.697 0c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.12l3.022-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.349 10.376c-0.818 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.16-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616 0.816 0 1.516 0.205 2.103 0.616s1.036 1.008 1.347 1.79c0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.637 0 1.139-0.313 1.507-0.94 0.371-0.63 0.556-1.556 0.556-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.308-0.282-0.673-0.423-1.094-0.423-0.633 0-1.133 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.407 0.971 0.715 1.253 0.309 0.279 0.675 0.418 1.099 0.418zm5.391-0.527v-1.467l4.32-6.826h1.223v2.088h-0.746l-2.908 4.609v0.079h6.03v1.517h-7.919zm4.857 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm-67.875 10.254h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==2?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter170_d_367_2)">
                        <line x1="1284.5" x2="1312.5" y1="459" y2="459" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter171_d_367_2)">
                        <rect transform="rotate(180 1796.5 688)" x="1796.5" y="688" width="100" height="40"
                            fill="#D9D9D9" />
                        <rect transform="rotate(180 1795.5 687)" x="1795.5" y="687" width="98" height="38"
                            stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter172_d_367_2)">
                        <path
                            d="m1733.7 672v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter173_d_367_2)">
                        <line x1="1311.5" x2="1437.5" y1="459" y2="459" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter174_d_367_2)">
                        <line x1="1286.5" x2="1565.5" y1="49" y2="49" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter175_d_367_2)">
                        <path d="m1565 17.5v35" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter176_d_367_2)">
                        <path d="M1565.5 19.5H1748" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter177_d_367_2)">
                        <path d="m1815 96v115" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter178_d_367_2)">
                        <path d="M1815 249.5V500" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter179_d_367_2)">
                        <path d="M276.5 71V50" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter180_d_367_2)">
                        <path d="m276.5 70.5c-48.513-5.5794-72.145-9.3675-84.5-19.501" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter181_d_367_2)">
                        <path d="m107.5 69.5c48.512-5.5793 70.399-8.8264 82.754-18.96" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter182_d_367_2)">
                        <line x1="107.5" x2="107.5" y1="70" y2="50" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter183_d_367_2)">
                        <rect x="1515.5" y="390" width="40" height="42" fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter184_d_367_2)">
                        <path d="m1528.8 422v-23.273h14.04v2.5h-11.23v7.864h10.5v2.5h-10.5v7.909h11.41v2.5h-14.22z"
                            fill="#fff" />
                    </g>
                    <g filter="url(#filter185_d_367_2)">
                        <path
                            d="m164.63 416v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.508-0.316 0.647-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.475-4.614h2.013zm12.944-0.477c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.813-6.98h-0.095v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.381 1.521v-1.69l2.53-1.626h1.755zm6.349 10.376c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.468-1.739-0.468-2.849 4e-3 -1.11 0.161-2.055 0.473-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616s1.516 0.205 2.103 0.616 1.036 1.008 1.347 1.79c0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.372-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.309-0.282-0.673-0.423-1.094-0.423-0.633 0-1.134 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-4e-3 0.812 0.078 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.309 0.279 0.675 0.418 1.099 0.418zm9.716-8.82v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755z"
                            fill="{{$room==8?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter186_d_367_2)">
                        <path d="m1214.5 50v160.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter187_d_367_2)">
                        <line x1="1215.5" x2="1215.5" y1="300" y2="460" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter188_d_367_2)">
                        <rect x="1267.5" y="13" width="20" height="197" fill="#D9D9D9" />
                        <rect x="1268.5" y="14" width="18" height="195" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter189_d_367_2)">
                        <rect x="294.5" y="14" width="20" height="198" fill="#D9D9D9" />
                        <rect x="295.5" y="15" width="18" height="196" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter190_d_367_2)">
                        <rect x="294.5" y="300" width="20" height="160" fill="#D9D9D9" />
                        <rect x="295.5" y="301" width="18" height="158" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter191_d_367_2)">
                        <path d="M755 229.5V210" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter192_d_367_2)">
                        <path d="m907.5 229.5v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter193_d_367_2)">
                        <path d="m487.5 230v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter194_d_367_2)">
                        <path d="m448.5 230v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter195_d_367_2)">
                        <path d="m487.5 230v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter196_d_367_2)">
                        <path d="M639.5 228.5V210" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter197_d_367_2)">
                        <path d="m1101.5 230v-21" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter198_d_367_2)">
                        <path d="m1646.5 321v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter199_d_367_2)">
                        <path d="m1061.5 230v-20.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter200_d_367_2)">
                        <rect x="67.5" y="433" width="20" height="28" fill="#D9D9D9" />
                        <rect x="68.5" y="434" width="18" height="26" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter201_d_367_2)">
                        <line x1="56.5" x2="56.5" y1="500" y2="472" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter202_d_367_2)">
                        <line x1="1425.5" x2="1425.5" y1="49" y2="70" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter203_d_367_2)">
                        <path d="m1564.5 439h33.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter204_d_367_2)">
                        <path d="m1597.5 440v-19" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter205_d_367_2)">
                        <path d="m1598.5 422.02h69.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter206_d_367_2)">
                        <path d="M1667 421.5V382" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter207_d_367_2)">
                        <line x1="1667.5" x2="1815.5" y1="401" y2="401" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter208_d_367_2)">
                        <path d="m1768.5 387h47v30h-47v-30z" fill="#D9D9D9" />
                        <path d="m1814.5 388v28h-45v-28h45z" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter209_d_367_2)">
                        <path d="m1506.5 380v-48.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter210_d_367_2)">
                        <path d="m1506 332.5 121.46-10.998" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter211_d_367_2)">
                        <path d="M1646.1 320.086L1778 262" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter212_d_367_2)">
                        <line x1="1777.5" x2="1815.5" y1="262" y2="262" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter213_d_367_2)">
                        <path d="m1437.5 501.01v50.492m69.5-50.492v118.99" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter214_d_367_2)">
                        <path d="m1377.5 551.5h60.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter215_d_367_2)">
                        <path d="m1438 552.5h69.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter216_d_367_2)">
                        <path d="m1463 591-83.5-0.043" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter217_d_367_2)">
                        <path d="m1381.5 590.27-533-1e-3" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter218_d_367_2)">
                        <path d="m1797.5 860h-948" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter219_d_367_2)">
                        <line x1="1379.5" x2="1379.5" y1="551" y2="590" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter220_d_367_2)">
                        <line x1="850.5" x2="851.5" y1="589.99" y2="859.99" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter221_d_367_2)">
                        <path d="m1507 660v200" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter222_d_367_2)">
                        <path d="m1799.5 501v361" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter223_d_367_2)">
                        <path d="m1507.5 671h90" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter224_d_367_2)">
                        <line x1="1707.5" x2="1797.5" y1="692" y2="692" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter225_d_367_2)">
                        <path d="m869.5 801.5 50-0.49" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter226_d_367_2)">
                        <path d="m918.5 801v59" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter227_d_367_2)">
                        <line x1="1472.5" x2="1472.5" y1="513" y2="552" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter228_d_367_2)">
                        <path d="m1456 512h32" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter229_d_367_2)">
                        <path
                            d="m42.318 390.55h10.182v1.845h-8.3871v0.06l1.5213 2.381h-1.6903l-1.6257-2.531v-1.755zm10.182-2.684h-10.182v-6.523h1.5461v4.678h2.7643v-4.231h1.5461v4.231h4.3253v1.845zm-6.7464-20.391v1.859c-0.305 0.053-0.5751 0.151-0.8104 0.293-0.2387 0.143-0.4408 0.32-0.6066 0.532-0.1657 0.213-0.29 0.455-0.3728 0.726-0.0862 0.269-0.1293 0.559-0.1293 0.87 0 0.554 0.1392 1.044 0.4176 1.472 0.2751 0.427 0.6795 0.762 1.2131 1.004 0.5303 0.242 1.1783 0.363 1.9439 0.363 0.7789 0 1.4351-0.121 1.9687-0.363 0.5303-0.245 0.9314-0.58 1.2032-1.004 0.2684-0.428 0.4027-0.917 0.4027-1.467 0-0.305-0.0398-0.59-0.1194-0.855-0.0828-0.268-0.2038-0.509-0.3629-0.721-0.1591-0.215-0.3546-0.396-0.5866-0.542-0.232-0.149-0.4972-0.251-0.7955-0.308l0.01-1.859c0.4839 0.069 0.9379 0.22 1.3622 0.452 0.4242 0.229 0.7987 0.529 1.1236 0.9 0.3215 0.371 0.5733 0.805 0.7556 1.303 0.179 0.497 0.2685 1.049 0.2685 1.655 0 0.895-0.2071 1.694-0.6214 2.396-0.4143 0.703-1.0126 1.257-1.7948 1.661s-1.7202 0.607-2.8139 0.607c-1.0971 0-2.035-0.204-2.8139-0.612-0.7822-0.408-1.3805-0.963-1.7948-1.665-0.4143-0.703-0.6214-1.499-0.6214-2.387 0-0.567 0.0795-1.094 0.2386-1.581s0.3928-0.921 0.701-1.302c0.3049-0.382 0.6795-0.695 1.1236-0.94 0.4408-0.249 0.9446-0.411 1.5114-0.487zm6.7464-1.689h-10.182v-1.845h8.6356v-4.484h1.5462v6.329zm-10.182-9.774h10.182v1.844h-10.182v-1.844zm0-10.365h10.182v1.641l-6.9354 4.797v0.085h6.9354v1.844h-10.182v-1.65l6.9403-4.793v-0.089h-6.9403v-1.835zm0-3.854h10.182v1.844h-10.182v-1.844zm3.4354-10.713v1.86c-0.305 0.053-0.5751 0.15-0.8104 0.293-0.2387 0.142-0.4408 0.32-0.6066 0.532-0.1657 0.212-0.29 0.454-0.3728 0.726-0.0862 0.268-0.1293 0.558-0.1293 0.87 0 0.553 0.1392 1.044 0.4176 1.471 0.2751 0.428 0.6795 0.763 1.2131 1.005 0.5303 0.242 1.1783 0.363 1.9439 0.363 0.7789 0 1.4351-0.121 1.9687-0.363 0.5303-0.246 0.9314-0.58 1.2032-1.005 0.2684-0.427 0.4027-0.916 0.4027-1.466 0-0.305-0.0398-0.59-0.1194-0.855-0.0828-0.269-0.2038-0.509-0.3629-0.721-0.1591-0.216-0.3546-0.396-0.5866-0.542-0.232-0.149-0.4972-0.252-0.7955-0.308l0.01-1.86c0.4839 0.07 0.9379 0.221 1.3622 0.453 0.4242 0.228 0.7987 0.528 1.1236 0.9 0.3215 0.371 0.5733 0.805 0.7556 1.302 0.179 0.497 0.2685 1.049 0.2685 1.656 0 0.895-0.2071 1.693-0.6214 2.396s-1.0126 1.256-1.7948 1.66c-0.7822 0.405-1.7202 0.607-2.8139 0.607-1.0971 0-2.035-0.204-2.8139-0.612-0.7822-0.407-1.3805-0.962-1.7948-1.665s-0.6214-1.498-0.6214-2.386c0-0.567 0.0795-1.094 0.2386-1.581 0.1591-0.488 0.3928-0.922 0.701-1.303 0.3049-0.381 0.6795-0.694 1.1236-0.94 0.4408-0.248 0.9446-0.411 1.5114-0.487z"
                            fill="{{$room==7?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter230_d_367_2)">
                        <path d="m314.5 359.5h51" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter231_d_367_2)">
                        <path d="m468.5 359.5h-53" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter232_d_367_2)">
                        <line x1="391.5" x2="391.5" y1="383" y2="460" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter233_d_367_2)">
                        <line x1="365.5" x2="415.5" y1="382" y2="382" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter234_d_367_2)">
                        <line x1="543.5" x2="697.5" y1="411" y2="411" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter235_d_367_2)">
                        <line x1="542.5" x2="542.5" y1="412" y2="332" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter236_d_367_2)">
                        <line x1="696.5" x2="696.5" y1="412" y2="332" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter237_d_367_2)">
                        <path
                            d="m575.6 363v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm20.202 0v10.182h-1.844v-8.387h-0.06l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.349 10.376c-0.819 0-1.522-0.207-2.108-0.622-0.584-0.417-1.033-1.019-1.348-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.348-1.79 0.586-0.411 1.287-0.616 2.103-0.616 0.815 0 1.516 0.205 2.103 0.616 0.586 0.411 1.035 1.008 1.347 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.347 1.799-0.584 0.415-1.285 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.407-0.965-0.716-1.243-0.308-0.282-0.672-0.423-1.093-0.423-0.633 0-1.134 0.315-1.502 0.945-0.368 0.626-0.553 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.099 0.418zm9.228 1.501c-0.716 0-1.352-0.122-1.909-0.368-0.553-0.245-0.991-0.586-1.312-1.024-0.322-0.437-0.493-0.943-0.512-1.516h1.869c0.016 0.275 0.108 0.515 0.273 0.721 0.166 0.202 0.386 0.359 0.662 0.472 0.275 0.113 0.583 0.169 0.924 0.169 0.365 0 0.688-0.063 0.97-0.189 0.281-0.129 0.502-0.308 0.661-0.537s0.237-0.492 0.234-0.79c3e-3 -0.309-0.077-0.58-0.239-0.816-0.162-0.235-0.398-0.419-0.706-0.551-0.305-0.133-0.673-0.199-1.104-0.199h-0.9v-1.422h0.9c0.355 0 0.665-0.062 0.93-0.184 0.268-0.123 0.479-0.295 0.631-0.517 0.153-0.226 0.227-0.486 0.224-0.781 3e-3 -0.288-0.061-0.538-0.194-0.75-0.129-0.216-0.313-0.383-0.552-0.503-0.235-0.119-0.512-0.179-0.83-0.179-0.311 0-0.6 0.057-0.865 0.169-0.265 0.113-0.479 0.274-0.641 0.483-0.163 0.205-0.249 0.45-0.259 0.735h-1.775c0.014-0.57 0.178-1.07 0.493-1.501 0.318-0.434 0.742-0.772 1.272-1.014 0.531-0.245 1.125-0.368 1.785-0.368 0.68 0 1.269 0.128 1.77 0.383 0.504 0.252 0.893 0.591 1.168 1.019s0.413 0.9 0.413 1.417c3e-3 0.573-0.166 1.054-0.507 1.442-0.338 0.387-0.782 0.641-1.333 0.76v0.08c0.716 0.099 1.265 0.364 1.646 0.795 0.384 0.428 0.575 0.96 0.572 1.596 0 0.57-0.163 1.081-0.487 1.531-0.322 0.448-0.766 0.799-1.333 1.054-0.563 0.256-1.21 0.383-1.939 0.383zm13.586-5.971v1.482h-4.583v-1.482h4.583zm5.445 5.832v-10.182h3.898c0.736 0 1.348 0.116 1.835 0.348 0.49 0.229 0.856 0.542 1.098 0.94 0.246 0.398 0.368 0.848 0.368 1.352 0 0.414-0.079 0.769-0.238 1.064-0.159 0.292-0.373 0.529-0.642 0.711-0.268 0.182-0.568 0.313-0.899 0.393v0.099c0.361 0.02 0.707 0.131 1.039 0.333 0.334 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.318 0.806 0.318 1.323 0 0.527-0.128 1.001-0.383 1.422-0.255 0.417-0.639 0.747-1.153 0.989s-1.16 0.363-1.939 0.363h-4.122zm1.845-1.541h1.984c0.669 0 1.151-0.128 1.446-0.383 0.299-0.259 0.448-0.59 0.448-0.994 0-0.302-0.075-0.574-0.224-0.816-0.149-0.245-0.361-0.437-0.636-0.576-0.275-0.143-0.604-0.214-0.985-0.214h-2.033v2.983zm0-4.311h1.825c0.318 0 0.604-0.058 0.86-0.174 0.255-0.119 0.455-0.286 0.601-0.502 0.149-0.218 0.224-0.477 0.224-0.775 0-0.395-0.139-0.719-0.418-0.975-0.275-0.255-0.684-0.383-1.228-0.383h-1.864v2.809zm-76.5 16.106h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.216-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.703-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm1.689 6.746v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.631 0.472c-0.146 0.199-0.221 0.426-0.224 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.248 0.713 0.248 1.153c0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.084 0.378-0.792 0-1.479-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.304-0.122 0.543-0.292 0.715-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.501-0.542-1.989-0.979-0.484-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.773-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.362-1.954-0.239-0.533-0.571-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.995-1.208 0.241-0.534 0.362-1.187 0.362-1.959zm3.599-5.091h2.257l3.022 7.378h0.12l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{$room==10?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter238_d_367_2)">
                        <path
                            d="m1672.6 353.25h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.04 0.268-1.65 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm2.87 6.746h-1.97l3.59-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm3.84 4.614v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm8.51 0v-10.182h6.62v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.66zm8.5 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm16.03-2.132h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586 0.14-0.232 0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.92 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm16.87-10.182v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm1.57 1.546v-1.546h8.12v1.546h-3.15v8.636h-1.83v-8.636h-3.14zm9.69 8.636v-10.182h6.62v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.66zm8.5 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01z"
                            fill="{{$room==15?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter239_d_367_2)">
                        <path
                            d="m1526.8 702v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm11.72 0h-1.97l3.59-10.182h2.27l3.59 10.182h-1.96l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm17.12-6.19v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm8.83 3.252c-0.08-0.269-0.19-0.509-0.34-0.721-0.14-0.216-0.31-0.4-0.52-0.552-0.2-0.153-0.42-0.267-0.68-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.55 0-1.03 0.137-1.46 0.412s-0.76 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.34-0.299 0.38-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.65-1.805-0.4-0.782-0.6-1.71-0.6-2.784 0-0.822 0.12-1.556 0.35-2.202 0.24-0.647 0.56-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.56-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.57 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.88zm4.74 6.93h-1.97l3.59-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02z"
                            fill="{{$room==19?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter240_d_367_2)">
                        <path
                            d="m1090.3 732h-2.81l5.12-14.545h3.26l5.12 14.545h-2.81l-3.88-11.562h-0.12l-3.88 11.562zm0.1-5.703h7.67v2.116h-7.67v-2.116zm12.51-8.842h3.22l4.32 10.539h0.17l4.32-10.539h3.23v14.545h-2.53v-9.993h-0.14l-4.02 9.95h-1.89l-4.02-9.971h-0.13v10.014h-2.53v-14.545zm17.49 2.208v-2.208h11.6v2.208h-4.5v12.337h-2.61v-12.337h-4.49zm18.8 12.337v-14.545h2.63v12.336h6.41v2.209h-9.04zm13.74 0h-2.81l5.12-14.545h3.25l5.13 14.545h-2.81l-3.89-11.562h-0.11l-3.88 11.562zm0.09-5.703h7.67v2.116h-7.67v-2.116zm12.52 5.703v-14.545h5.56c1.06 0 1.93 0.165 2.63 0.497 0.7 0.326 1.22 0.774 1.56 1.342 0.36 0.568 0.53 1.212 0.53 1.932 0 0.592-0.11 1.098-0.34 1.52-0.23 0.416-0.53 0.755-0.92 1.015-0.38 0.261-0.81 0.448-1.28 0.561v0.142c0.51 0.029 1.01 0.188 1.48 0.476 0.48 0.284 0.87 0.687 1.17 1.208 0.31 0.521 0.46 1.15 0.46 1.889 0 0.753-0.18 1.43-0.55 2.031-0.36 0.597-0.91 1.068-1.65 1.414-0.73 0.345-1.65 0.518-2.77 0.518h-5.88zm2.63-2.202h2.84c0.95 0 1.64-0.182 2.06-0.547 0.43-0.369 0.64-0.842 0.64-1.42 0-0.431-0.11-0.819-0.32-1.165-0.21-0.35-0.51-0.625-0.91-0.824-0.39-0.203-0.86-0.305-1.4-0.305h-2.91v4.261zm0-6.157h2.61c0.45 0 0.86-0.083 1.23-0.249 0.36-0.17 0.65-0.41 0.86-0.717 0.21-0.313 0.32-0.682 0.32-1.108 0-0.564-0.2-1.028-0.6-1.392-0.39-0.365-0.98-0.547-1.76-0.547h-2.66v4.013zm23.51 1.086c0 1.568-0.3 2.91-0.88 4.027-0.58 1.113-1.38 1.965-2.39 2.557-1 0.592-2.14 0.888-3.42 0.888-1.27 0-2.41-0.296-3.42-0.888-1-0.597-1.8-1.451-2.38-2.564-0.59-1.117-0.88-2.457-0.88-4.02 0-1.567 0.29-2.907 0.88-4.02 0.58-1.117 1.38-1.972 2.38-2.564 1.01-0.591 2.15-0.887 3.42-0.887 1.28 0 2.42 0.296 3.42 0.887 1.01 0.592 1.81 1.447 2.39 2.564 0.58 1.113 0.88 2.453 0.88 4.02zm-2.65 0c0-1.103-0.17-2.033-0.52-2.791-0.34-0.762-0.81-1.338-1.42-1.726-0.61-0.393-1.3-0.589-2.1-0.589-0.79 0-1.48 0.196-2.09 0.589-0.61 0.388-1.08 0.964-1.43 1.726-0.34 0.758-0.51 1.688-0.51 2.791s0.17 2.036 0.51 2.799c0.35 0.757 0.82 1.332 1.43 1.725 0.61 0.389 1.3 0.583 2.09 0.583 0.8 0 1.49-0.194 2.1-0.583 0.61-0.393 1.08-0.968 1.42-1.725 0.35-0.763 0.52-1.696 0.52-2.799zm5.14 7.273v-14.545h5.45c1.12 0 2.06 0.194 2.82 0.582s1.33 0.933 1.72 1.633c0.4 0.696 0.59 1.509 0.59 2.437 0 0.932-0.2 1.742-0.59 2.429-0.4 0.681-0.98 1.209-1.74 1.583-0.77 0.37-1.71 0.554-2.83 0.554h-3.89v-2.187h3.53c0.66 0 1.19-0.09 1.61-0.27 0.41-0.185 0.72-0.452 0.92-0.803 0.21-0.355 0.31-0.79 0.31-1.306 0-0.517-0.1-0.957-0.31-1.321-0.2-0.37-0.51-0.649-0.93-0.839-0.42-0.194-0.95-0.291-1.61-0.291h-2.42v12.344h-2.63zm7.51-6.591 3.6 6.591h-2.94l-3.53-6.591h2.87zm7.36 6.591h-2.81l5.12-14.545h3.26l5.12 14.545h-2.81l-3.88-11.562h-0.12l-3.88 11.562zm0.1-5.703h7.67v2.116h-7.67v-2.116zm10.11-6.634v-2.208h11.61v2.208h-4.5v12.337h-2.61v-12.337h-4.5zm26.2 5.064c0 1.568-0.3 2.91-0.88 4.027-0.59 1.113-1.38 1.965-2.39 2.557-1 0.592-2.14 0.888-3.42 0.888-1.27 0-2.41-0.296-3.42-0.888-1-0.597-1.8-1.451-2.39-2.564-0.58-1.117-0.87-2.457-0.87-4.02 0-1.567 0.29-2.907 0.87-4.02 0.59-1.117 1.39-1.972 2.39-2.564 1.01-0.591 2.15-0.887 3.42-0.887 1.28 0 2.42 0.296 3.42 0.887 1.01 0.592 1.8 1.447 2.39 2.564 0.58 1.113 0.88 2.453 0.88 4.02zm-2.65 0c0-1.103-0.17-2.033-0.52-2.791-0.34-0.762-0.81-1.338-1.42-1.726-0.61-0.393-1.3-0.589-2.1-0.589-0.79 0-1.48 0.196-2.09 0.589-0.61 0.388-1.08 0.964-1.43 1.726-0.34 0.758-0.51 1.688-0.51 2.791s0.17 2.036 0.51 2.799c0.35 0.757 0.82 1.332 1.43 1.725 0.61 0.389 1.3 0.583 2.09 0.583 0.8 0 1.49-0.194 2.1-0.583 0.61-0.393 1.08-0.968 1.42-1.725 0.35-0.763 0.52-1.696 0.52-2.799zm5.14 7.273v-14.545h5.45c1.12 0 2.06 0.194 2.82 0.582s1.33 0.933 1.72 1.633c0.39 0.696 0.59 1.509 0.59 2.437 0 0.932-0.2 1.742-0.6 2.429-0.39 0.681-0.97 1.209-1.74 1.583-0.76 0.37-1.7 0.554-2.82 0.554h-3.89v-2.187h3.53c0.66 0 1.19-0.09 1.61-0.27 0.41-0.185 0.72-0.452 0.92-0.803 0.2-0.355 0.31-0.79 0.31-1.306 0-0.517-0.11-0.957-0.31-1.321-0.2-0.37-0.51-0.649-0.93-0.839-0.42-0.194-0.95-0.291-1.61-0.291h-2.42v12.344h-2.63zm7.51-6.591 3.6 6.591h-2.94l-3.53-6.591h2.87zm3.94-7.954h2.97l3.56 6.434h0.14l3.56-6.434h2.98l-5.3 9.119v5.426h-2.62v-5.426l-5.29-9.119z"
                            fill="{{$room==17?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter241_d_367_2)">
                        <path
                            d="m866.62 823.7h-1.461c-0.042-0.239-0.119-0.452-0.231-0.637-0.112-0.187-0.251-0.346-0.418-0.476-0.166-0.13-0.356-0.228-0.57-0.293-0.211-0.068-0.439-0.102-0.684-0.102-0.434 0-0.82 0.11-1.156 0.329-0.336 0.216-0.599 0.533-0.789 0.953-0.19 0.416-0.285 0.925-0.285 1.527 0 0.612 0.095 1.128 0.285 1.547 0.193 0.417 0.456 0.732 0.789 0.945 0.336 0.211 0.72 0.317 1.153 0.317 0.239 0 0.463-0.032 0.671-0.094 0.211-0.065 0.4-0.16 0.567-0.285 0.169-0.125 0.311-0.279 0.426-0.461 0.117-0.183 0.198-0.391 0.242-0.625l1.461 8e-3c-0.055 0.38-0.173 0.737-0.356 1.07-0.179 0.333-0.415 0.627-0.707 0.883-0.291 0.252-0.633 0.45-1.023 0.593-0.391 0.141-0.824 0.211-1.301 0.211-0.703 0-1.331-0.162-1.883-0.488-0.552-0.325-0.987-0.795-1.304-1.41-0.318-0.615-0.477-1.352-0.477-2.211 0-0.862 0.16-1.599 0.48-2.211 0.321-0.615 0.757-1.085 1.309-1.41 0.552-0.326 1.177-0.488 1.875-0.488 0.445 0 0.859 0.062 1.242 0.187s0.724 0.309 1.024 0.551c0.299 0.239 0.545 0.534 0.738 0.883 0.195 0.346 0.323 0.742 0.383 1.187zm8.475 1.301c0 0.862-0.161 1.6-0.484 2.215-0.32 0.612-0.758 1.081-1.313 1.406-0.552 0.326-1.178 0.488-1.878 0.488-0.701 0-1.329-0.162-1.883-0.488-0.552-0.328-0.99-0.798-1.313-1.41-0.32-0.615-0.48-1.352-0.48-2.211 0-0.862 0.16-1.599 0.48-2.211 0.323-0.615 0.761-1.085 1.313-1.41 0.554-0.326 1.182-0.488 1.883-0.488 0.7 0 1.326 0.162 1.878 0.488 0.555 0.325 0.993 0.795 1.313 1.41 0.323 0.612 0.484 1.349 0.484 2.211zm-1.457 0c0-0.607-0.095-1.118-0.285-1.535-0.187-0.419-0.448-0.736-0.781-0.949-0.333-0.217-0.718-0.325-1.152-0.325-0.435 0-0.819 0.108-1.153 0.325-0.333 0.213-0.595 0.53-0.785 0.949-0.187 0.417-0.281 0.928-0.281 1.535s0.094 1.12 0.281 1.539c0.19 0.417 0.452 0.733 0.785 0.949 0.334 0.214 0.718 0.321 1.153 0.321 0.434 0 0.819-0.107 1.152-0.321 0.333-0.216 0.594-0.532 0.781-0.949 0.19-0.419 0.285-0.932 0.285-1.539zm2.827-4h1.774l2.375 5.797h0.094l2.375-5.797h1.773v8h-1.391v-5.496h-0.074l-2.211 5.473h-1.039l-2.211-5.485h-0.074v5.508h-1.391v-8zm9.969 8v-8h5.125v1.215h-3.676v2.172h3.325v1.215h-3.325v3.398h-1.449zm13.594-4c0 0.862-0.162 1.6-0.484 2.215-0.321 0.612-0.758 1.081-1.313 1.406-0.552 0.326-1.178 0.488-1.879 0.488-0.7 0-1.328-0.162-1.883-0.488-0.552-0.328-0.989-0.798-1.312-1.41-0.32-0.615-0.481-1.352-0.481-2.211 0-0.862 0.161-1.599 0.481-2.211 0.323-0.615 0.76-1.085 1.312-1.41 0.555-0.326 1.183-0.488 1.883-0.488 0.701 0 1.327 0.162 1.879 0.488 0.555 0.325 0.992 0.795 1.313 1.41 0.322 0.612 0.484 1.349 0.484 2.211zm-1.457 0c0-0.607-0.095-1.118-0.285-1.535-0.188-0.419-0.448-0.736-0.782-0.949-0.333-0.217-0.717-0.325-1.152-0.325s-0.819 0.108-1.152 0.325c-0.334 0.213-0.595 0.53-0.785 0.949-0.188 0.417-0.282 0.928-0.282 1.535s0.094 1.12 0.282 1.539c0.19 0.417 0.451 0.733 0.785 0.949 0.333 0.214 0.717 0.321 1.152 0.321s0.819-0.107 1.152-0.321c0.334-0.216 0.594-0.532 0.782-0.949 0.19-0.419 0.285-0.932 0.285-1.539zm2.827 4v-8h3c0.615 0 1.13 0.107 1.547 0.32 0.419 0.214 0.736 0.513 0.949 0.899 0.216 0.383 0.324 0.829 0.324 1.34 0 0.513-0.109 0.958-0.328 1.336-0.216 0.375-0.535 0.665-0.957 0.871-0.422 0.203-0.94 0.304-1.554 0.304h-2.137v-1.203h1.941c0.36 0 0.654-0.049 0.883-0.148 0.229-0.102 0.398-0.249 0.508-0.442 0.112-0.195 0.168-0.435 0.168-0.718 0-0.284-0.056-0.526-0.168-0.727-0.112-0.203-0.283-0.357-0.512-0.461-0.229-0.107-0.525-0.16-0.887-0.16h-1.328v6.789h-1.449zm4.133-3.625 1.98 3.625h-1.617l-1.945-3.625h1.582zm2.67-3.16v-1.215h6.383v1.215h-2.473v6.785h-1.438v-6.785h-2.472zm-37.488 19.785v-8h3c0.615 0 1.13 0.107 1.547 0.32 0.419 0.214 0.736 0.513 0.949 0.899 0.216 0.383 0.324 0.829 0.324 1.34 0 0.513-0.109 0.958-0.328 1.336-0.216 0.375-0.535 0.665-0.957 0.871-0.422 0.203-0.94 0.304-1.555 0.304h-2.136v-1.203h1.941c0.36 0 0.654-0.049 0.883-0.148 0.229-0.102 0.398-0.249 0.508-0.442 0.112-0.195 0.168-0.435 0.168-0.718 0-0.284-0.056-0.526-0.168-0.727-0.112-0.203-0.283-0.357-0.512-0.461-0.229-0.107-0.525-0.16-0.887-0.16h-1.328v6.789h-1.449zm4.133-3.625 1.98 3.625h-1.617l-1.945-3.625h1.582zm10.17-0.375c0 0.862-0.162 1.6-0.485 2.215-0.32 0.612-0.757 1.081-1.312 1.406-0.552 0.326-1.179 0.488-1.879 0.488-0.701 0-1.328-0.162-1.883-0.488-0.552-0.328-0.989-0.798-1.312-1.41-0.321-0.615-0.481-1.352-0.481-2.211 0-0.862 0.16-1.599 0.481-2.211 0.323-0.615 0.76-1.085 1.312-1.41 0.555-0.326 1.182-0.488 1.883-0.488 0.7 0 1.327 0.162 1.879 0.488 0.555 0.325 0.992 0.795 1.312 1.41 0.323 0.612 0.485 1.349 0.485 2.211zm-1.457 0c0-0.607-0.095-1.118-0.285-1.535-0.188-0.419-0.448-0.736-0.782-0.949-0.333-0.217-0.717-0.325-1.152-0.325s-0.819 0.108-1.152 0.325c-0.334 0.213-0.595 0.53-0.786 0.949-0.187 0.417-0.281 0.928-0.281 1.535s0.094 1.12 0.281 1.539c0.191 0.417 0.452 0.733 0.786 0.949 0.333 0.214 0.717 0.321 1.152 0.321s0.819-0.107 1.152-0.321c0.334-0.216 0.594-0.532 0.782-0.949 0.19-0.419 0.285-0.932 0.285-1.539zm9.975 0c0 0.862-0.161 1.6-0.484 2.215-0.32 0.612-0.758 1.081-1.313 1.406-0.552 0.326-1.178 0.488-1.879 0.488-0.7 0-1.328-0.162-1.882-0.488-0.552-0.328-0.99-0.798-1.313-1.41-0.32-0.615-0.48-1.352-0.48-2.211 0-0.862 0.16-1.599 0.48-2.211 0.323-0.615 0.761-1.085 1.313-1.41 0.554-0.326 1.182-0.488 1.882-0.488 0.701 0 1.327 0.162 1.879 0.488 0.555 0.325 0.993 0.795 1.313 1.41 0.323 0.612 0.484 1.349 0.484 2.211zm-1.457 0c0-0.607-0.095-1.118-0.285-1.535-0.187-0.419-0.448-0.736-0.781-0.949-0.333-0.217-0.718-0.325-1.153-0.325-0.434 0-0.819 0.108-1.152 0.325-0.333 0.213-0.595 0.53-0.785 0.949-0.188 0.417-0.281 0.928-0.281 1.535s0.093 1.12 0.281 1.539c0.19 0.417 0.452 0.733 0.785 0.949 0.333 0.214 0.718 0.321 1.152 0.321 0.435 0 0.82-0.107 1.153-0.321 0.333-0.216 0.594-0.532 0.781-0.949 0.19-0.419 0.285-0.932 0.285-1.539zm2.827-4h1.774l2.375 5.797h0.094l2.375-5.797h1.773v8h-1.391v-5.496h-0.074l-2.211 5.473h-1.039l-2.211-5.485h-0.074v5.508h-1.391v-8z"
                            fill="{{$room==18?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter242_d_367_2)">
                        <rect x="1595.5" y="707" width="143" height="143" fill="url(#pattern0_367_2)"
                            shape-rendering="crispEdges" />
                    </g>
                    <g filter="url(#filter243_d_367_2)">
                        <rect transform="rotate(90 1782.5 505)" x="1782.5" y="505" width="143" height="143"
                            fill="url(#pattern1_367_2)" shape-rendering="crispEdges" />
                    </g>
                    <g filter="url(#filter244_d_367_2)">
                        <path
                            d="m1470 530.22h-1.59c-0.05-0.261-0.13-0.493-0.25-0.694-0.13-0.205-0.28-0.378-0.46-0.52s-0.39-0.249-0.62-0.32c-0.23-0.074-0.48-0.111-0.75-0.111-0.47 0-0.89 0.12-1.26 0.358-0.37 0.236-0.65 0.583-0.86 1.04-0.21 0.455-0.31 1.01-0.31 1.666 0 0.668 0.1 1.23 0.31 1.688 0.21 0.454 0.5 0.798 0.86 1.031 0.37 0.23 0.79 0.345 1.26 0.345 0.26 0 0.5-0.034 0.73-0.102 0.23-0.071 0.44-0.175 0.62-0.311s0.34-0.304 0.46-0.503c0.13-0.199 0.22-0.426 0.27-0.682l1.59 9e-3c-0.06 0.415-0.19 0.804-0.39 1.167-0.19 0.364-0.45 0.685-0.77 0.963-0.32 0.276-0.69 0.492-1.11 0.648-0.43 0.154-0.9 0.23-1.42 0.23-0.77 0-1.45-0.177-2.06-0.532-0.6-0.355-1.07-0.868-1.42-1.539-0.35-0.67-0.52-1.474-0.52-2.412 0-0.94 0.17-1.744 0.52-2.412 0.35-0.67 0.83-1.183 1.43-1.538s1.29-0.533 2.05-0.533c0.48 0 0.93 0.069 1.35 0.205s0.79 0.337 1.12 0.601c0.33 0.261 0.59 0.582 0.8 0.963 0.22 0.378 0.36 0.81 0.42 1.295zm4.43 5.783v-8.727h3.27c0.67 0 1.23 0.116 1.69 0.349 0.45 0.233 0.8 0.56 1.03 0.98 0.24 0.418 0.36 0.905 0.36 1.462 0 0.56-0.12 1.045-0.36 1.457-0.24 0.409-0.59 0.726-1.05 0.951-0.46 0.221-1.02 0.332-1.69 0.332h-2.33v-1.313h2.11c0.4 0 0.72-0.054 0.97-0.161 0.25-0.111 0.43-0.272 0.55-0.482 0.12-0.213 0.18-0.474 0.18-0.784s-0.06-0.574-0.18-0.793c-0.12-0.221-0.31-0.389-0.56-0.503-0.25-0.116-0.57-0.174-0.96-0.174h-1.45v7.406h-1.58zm4.5-3.955 2.16 3.955h-1.76l-2.12-3.955h1.72z"
                            fill="{{$room==14?'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter245_d_367_2)">
                        <circle cx="1560.5" cy="270" r="25" fill="#D9D9D9" />
                        <circle cx="1560.5" cy="270" r="24" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter246_d_367_2)">
                        <rect x="47.5" y="117" width="41" height="40" fill="#D9D9D9" />
                        <rect x="48.5" y="118" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter247_d_367_2)">
                        <path d="m1436.5 501v52.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter248_d_367_2)">
                        <path d="m276.5 50.5h18" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter249_d_367_2)">
                        <path d="m1287.5 50.5h13" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter250_d_367_2)">
                        <path d="m1549.5 50.5h16" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter251_d_367_2)">
                        <path d="m1817 502h-19.5" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter252_d_367_2)">
                        <path d="m1289 10v42m-22.5-42v42" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter253_d_367_2)">
                        <path d="m1290.5 12h-26" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter254_d_367_2)">
                        <path d="m316 11v41m-22.5-41v41" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter255_d_367_2)">
                        <path d="m317.5 13h-26" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter256_d_367_2)">
                        <path d="M106.5 51V4M277 51V4" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter257_d_367_2)">
                        <path d="M104.5 4H279" stroke="#000" stroke-width="4" />
                    </g>
                    <g filter="url(#filter258_d_367_2)">
                        <line x1="1299.5" x2="1299.5" y1="3" y2="49" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter259_d_367_2)">
                        <line x1="1549.5" x2="1549.5" y1="4" y2="50" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter260_d_367_2)">
                        <line x1="1297.5" x2="1551.5" y1="2" y2="2" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g transform="matrix(-1 0 0 1 2206.1 1.0788)" filter="url(#filter266_d_367_2-3)">
                        <!-- Arrows -->
                        <path
                            d="m1017 261.91c0.39-0.39 0.39-1.024 0-1.414l-6.37-6.364c-0.39-0.391-1.02-0.391-1.41 0-0.39 0.39-0.39 1.024 0 1.414l5.66 5.657-5.66 5.657c-0.39 0.39-0.39 1.024 0 1.414 0.39 0.391 1.02 0.391 1.41 0zm-90.71-0.707v1h90v-2h-90z"
                            fill="#800000" />
                    </g>
                    <g filter="url(#filter275_d_367_2)">
                        <path d="m1816 226.5v5" stroke="#000" />
                    </g>
                    <path
                        d="m899.08 385v-10.182h6.623v1.546h-4.778v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662zm8.504 0v-10.182h6.622v1.546h-4.777v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662zm17.51-7.383c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm3.559 7.383v-10.182h1.844v4.311h4.718v-4.311h1.85v10.182h-1.85v-4.325h-4.718v4.325h-1.844zm19.516-5.091c0 1.097-0.206 2.037-0.617 2.819-0.408 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.819c0.782 0 1.438 0.146 1.968 0.438 0.534 0.291 0.937 0.692 1.208 1.203 0.276 0.507 0.413 1.084 0.413 1.73 0 0.653-0.137 1.233-0.413 1.74-0.275 0.507-0.681 0.906-1.218 1.198-0.537 0.288-1.198 0.433-1.983 0.433h-2.531v-1.517h2.282c0.458 0 0.832-0.079 1.124-0.238 0.291-0.159 0.507-0.378 0.646-0.657 0.143-0.278 0.214-0.598 0.214-0.959s-0.071-0.68-0.214-0.955c-0.139-0.275-0.356-0.488-0.651-0.641-0.292-0.156-0.668-0.234-1.129-0.234h-1.69v8.641h-1.845z"
                        fill="{{$room==13 ? 'white':'#000'}}" />
                    <path d="m774.5 300v160" stroke="#000" />
                    <rect x="7.5" y="197" width="79" height="62" fill="#D9D9D9" />
                    <defs>
                        <filter id="filter0_d_367_2" x="310.5" y="360" width="160" height="107"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter1_d_367_2" x="1434.5" y="501" width="76" height="59"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter2_d_367_2" x="3.5" y="259" width="88" height="210"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter3_d_367_2" x="82.332" y="359" width="217.17" height="109"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter4_d_367_2" x="846.5" y="781.57" width="10" height="29.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter5_d_367_2" x="847.46" y="780.9" width="28.504" height="29.376"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter6_d_367_2" x="1494.5" y="552" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter7_d_367_2" x="1485.5" y="552" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter8_d_367_2" x="1476.5" y="552" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter9_d_367_2" x="1467.5" y="552" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter10_d_367_2" x="1458.5" y="552" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter11_d_367_2" x="1788.5" y="208.6" width="32.5" height="51"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter12_d_367_2" x="1790" y="209.82" width="30.018" height="28.622"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter13_d_367_2" x="1788.5" y="227.57" width="31.349" height="31.773"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter14_d_367_2" x="1741" y="17.68" width="80.004" height="89.141"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter15_d_367_2" x="1420.5" y="40" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter16_d_367_2" x="1420.5" y="31" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter17_d_367_2" x="1420.5" y="22" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter18_d_367_2" x="1420.5" y="13" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter19_d_367_2" x="1420.5" y="4" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter20_d_367_2" x="1544.5" y="49" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter21_d_367_2" x="1484.3" y="49.745" width="69.794" height="28.29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter22_d_367_2" x="1426.4" y="49.287" width="67.054" height="28.249"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter23_d_367_2" x="1426" y="49" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter24_d_367_2" x="1296.5" y="40" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter25_d_367_2" x="1296.5" y="31" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter26_d_367_2" x="1296.5" y="22" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter27_d_367_2" x="1296.5" y="13" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter28_d_367_2" x="1296.5" y="4" width="133" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter29_d_367_2" x="1413.5" y="49" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter30_d_367_2" x="1354.8" y="49.744" width="68.791" height="28.295"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter31_d_367_2" x="1295.4" y="49.285" width="68.562" height="27.754"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter32_d_367_2" x="1295.5" y="49" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter33_d_367_2" x="1056.5" y="279.5" width="49" height="30"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter34_d_367_2" x="942.5" y="280" width="10" height="29.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter35_d_367_2" x="903.5" y="279.5" width="10" height="30"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter36_d_367_2" x="789.5" y="280" width="10" height="29.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter37_d_367_2" x="751.5" y="279.5" width="10" height="30"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter38_d_367_2" x="481.5" y="280.5" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter39_d_367_2" x="596.5" y="210" width="10" height="26"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter40_d_367_2" x="942.5" y="209.5" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter41_d_367_2" x="789.5" y="209.5" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter42_d_367_2" x="462.53" y="280.49" width="28.591" height="28.127"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter43_d_367_2" x="769.53" y="279.99" width="29.611" height="28.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter44_d_367_2" x="751.78" y="279.5" width="27.673" height="28.713"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter45_d_367_2" x="922.53" y="279.99" width="29.611" height="28.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter46_d_367_2" x="904.3" y="279.5" width="28.164" height="28.703"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter47_d_367_2" x="443.86" y="209.36" width="28.611" height="28.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter48_d_367_2" x="462.49" y="209.67" width="29.148" height="28.298"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter49_d_367_2" x="596.86" y="209.36" width="28.611" height="26.648"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter50_d_367_2" x="615.49" y="209.36" width="28.648" height="27.111"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter51_d_367_2" x="1263.5" y="299" width="28" height="169"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter52_d_367_2" x="310.5" y="48.5" width="979" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter53_d_367_2" x="103" y="49.5" width="215.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter54_d_367_2" x="0" y="48.5" width="112" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter55_d_367_2" x="0" y="499.5" width="1438.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter56_d_367_2" x="0" y="48.5" width="12" height="462"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter57_d_367_2" x="3.5" y="155.99" width="48" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter58_d_367_2" x="43.5" y="156" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter59_d_367_2" x="1283.5" y="330" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter60_d_367_2" x="1501.5" y="380" width="68" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter61_d_367_2" x="1363.5" y="420" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter62_d_367_2" x="1283.5" y="390" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter63_d_367_2" x="1283.5" y="400" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter64_d_367_2" x="1283.5" y="410" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter65_d_367_2" x="1352.9" y="329.95" width="18.558" height="108.05"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter66_d_367_2" x="1283.5" y="420" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter67_d_367_2" x="1363.5" y="340" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter68_d_367_2" x="1363.5" y="350" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter69_d_367_2" x="1363.5" y="360" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter70_d_367_2" x="1363.5" y="370" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter71_d_367_2" x="1363.5" y="380" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter72_d_367_2" x="1363.5" y="390" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter73_d_367_2" x="1363.5" y="400" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter74_d_367_2" x="1363.5" y="410" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter75_d_367_2" x="1283.5" y="340" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter76_d_367_2" x="1283.5" y="350" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter77_d_367_2" x="1283.5" y="360" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter78_d_367_2" x="1283.5" y="370" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter79_d_367_2" x="1283.5" y="380" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter80_d_367_2" x="1363.5" y="330" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter81_d_367_2" x="53.5" y="156" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter82_d_367_2" x="63.5" y="156" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter83_d_367_2" x="73.49" y="156.02" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter84_d_367_2" x="83.5" y="156" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter85_d_367_2" x="93.5" y="156" width="18" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter86_d_367_2" x="3.5" y="147" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter87_d_367_2" x="3.5" y="138" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter88_d_367_2" x="3.5" y="129" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter89_d_367_2" x="3.5" y="120" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter90_d_367_2" x="3.5" y="111" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter91_d_367_2" x="3.5" y="102" width="48" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter92_d_367_2" x="103.5" y="41" width="177" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter93_d_367_2" x="103.5" y="32" width="177" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter94_d_367_2" x="103.5" y="23" width="177" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter95_d_367_2" x="103.5" y="14" width="177" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter96_d_367_2" x="103.5" y="5" width="177" height="17"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter97_d_367_2" x="1238.5" y="468" width="40" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter98_d_367_2" x="1231.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter99_d_367_2" x="1189.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter100_d_367_2" x="1182.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter101_d_367_2" x="1175.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter102_d_367_2" x="1224.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter103_d_367_2" x="1217.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter104_d_367_2" x="1210.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter105_d_367_2" x="1203.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter106_d_367_2" x="1196.5" y="468" width="15" height="33"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter107_d_367_2" x="1370.5" y="83" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter108_d_367_2" x="1406.7" y="96.818" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter109_d_367_2" x="137.5" y="71" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter110_d_367_2" x="173.71" y="86.818" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter111_d_367_2" x="1678.5" y="210" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter112_d_367_2" x="1714.7" y="223.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter113_d_367_2" x="3.5" y="258" width="88" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter114_d_367_2" x="81.5" y="197" width="10" height="71"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter115_d_367_2" x="81.5" y="280" width="10" height="228"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter116_d_367_2" x="53.498" y="458" width="1235" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter117_d_367_2" x="102" y="358.5" width="197" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter118_d_367_2" x="462.5" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter119_d_367_2" x="1281.5" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter120_d_367_2" x="769.5" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter121_d_367_2" x="615.5" y="411.99" width="10.5" height="56.021"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter122_d_367_2" x="1076.5" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter123_d_367_2" x="1076.5" y="50" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter124_d_367_2" x="1281.5" y="22" width="10" height="196"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter125_d_367_2" x="615.5" y="50" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter126_d_367_2" x="462.5" y="50" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter127_d_367_2" x="922.5" y="50" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter128_d_367_2" x="769.5" y="50" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter129_d_367_2" x="1095.5" y="300" width="123" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter130_d_367_2" x="1096.5" y="208.75" width="123" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter131_d_367_2" x="943.5" y="209.5" width="122" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter132_d_367_2" x="790.5" y="209.5" width="121.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter133_d_367_2" x="635.5" y="210" width="123" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter134_d_367_2" x="482.5" y="210" width="123" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter135_d_367_2" x="310.5" y="210" width="142" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter136_d_367_2" x="943" y="299.5" width="122.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter137_d_367_2" x="790" y="299.5" width="122.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter138_d_367_2" x="482" y="299.5" width="278.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter139_d_367_2" x="1432" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter140_d_367_2" x="1562" y="499.5" width="256.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter141_d_367_2" x="1485" y="499.5" width="47" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter142_d_367_2" x="1430" y="499.5" width="31.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter143_d_367_2" x="82.356" y="358.36" width="29.635" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter144_d_367_2" x="63.01" y="259.36" width="28.625" height="29.635"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter145_d_367_2" x="1056.9" y="209.86" width="29.648" height="28.111"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter146_d_367_2" x="750.36" y="209.36" width="29.111" height="28.148"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter147_d_367_2" x="902.86" y="209.86" width="29.648" height="27.611"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter148_d_367_2" x="769.49" y="209.36" width="29.648" height="28.111"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter149_d_367_2" x="922.49" y="209.86" width="29.648" height="27.611"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter150_d_367_2" x="1076.5" y="209.86" width="29.648" height="28.111"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter151_d_367_2" x="1076.5" y="280.49" width="28.111" height="28.148"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter152_d_367_2" x="1621.5" y="300.99" width="29.111" height="29.148"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter153_d_367_2" x="1056.8" y="279.5" width="29.673" height="28.713"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter154_d_367_2" x="1522.5" y="478" width="49" height="31.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter155_d_367_2" x="1543" y="478.64" width="28.075" height="29.19"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter156_d_367_2" x="1523.3" y="478.19" width="29.673" height="29.213"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter157_d_367_2" x="1482.2" y="619.6" width="29.5" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter158_d_367_2" x="1482.1" y="619.99" width="29.19" height="28.075"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter159_d_367_2" x="1481.7" y="638.14" width="29.213" height="29.673"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter160_d_367_2" x="342.57" y="116.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter161_d_367_2" x="313.16" y="419.68" width="138.42" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter162_d_367_2" x="648.57" y="419.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter163_d_367_2" x="1097.9" y="108.68" width="97.137" height="52.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter164_d_367_2" x="489.64" y="419.68" width="102.39" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter165_d_367_2" x="654.07" y="116.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter166_d_367_2" x="802.57" y="116.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter167_d_367_2" x="956.57" y="116.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter168_d_367_2" x="1111.9" y="365.68" width="72.444" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter169_d_367_2" x="498.07" y="116.68" width="96.594" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter170_d_367_2" x="1280.5" y="458" width="36" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter171_d_367_2" x="1692.5" y="648" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter172_d_367_2" x="1729.7" y="661.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter173_d_367_2" x="1307.5" y="458" width="134" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter174_d_367_2" x="1282.5" y="48" width="287" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter175_d_367_2" x="1559" y="17.5" width="12" height="43"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter176_d_367_2" x="1561.5" y="17.5" width="190.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter177_d_367_2" x="1809" y="96" width="12" height="123"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter178_d_367_2" x="1809" y="249.5" width="12" height="258.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter179_d_367_2" x="271.5" y="50" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter180_d_367_2" x="186.73" y="50.8" width="94.395" height="28.099"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter181_d_367_2" x="102.88" y="50.341" width="92.649" height="27.558"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter182_d_367_2" x="102.5" y="50" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter183_d_367_2" x="1511.5" y="390" width="48" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter184_d_367_2" x="1524.8" y="398.73" width="22.227" height="31.273"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter185_d_367_2" x="160.63" y="405.68" width="75.056" height="18.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter186_d_367_2" x="1209.5" y="50" width="10" height="168.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter187_d_367_2" x="1210.5" y="300" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter188_d_367_2" x="1263.5" y="13" width="28" height="205"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter189_d_367_2" x="290.5" y="14" width="28" height="206"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter190_d_367_2" x="290.5" y="300" width="28" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter191_d_367_2" x="750" y="210" width="10" height="27.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter192_d_367_2" x="902.5" y="209.5" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter193_d_367_2" x="482.5" y="210" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter194_d_367_2" x="443.5" y="210" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter195_d_367_2" x="482.5" y="210" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter196_d_367_2" x="634.5" y="210" width="10" height="26.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter197_d_367_2" x="1096.5" y="209" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter198_d_367_2" x="1641.5" y="301" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter199_d_367_2" x="1056.5" y="209.5" width="10" height="28.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter200_d_367_2" x="63.5" y="433" width="28" height="36"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter201_d_367_2" x="51.5" y="472" width="10" height="36"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter202_d_367_2" x="1420.5" y="49" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter203_d_367_2" x="1560.5" y="438" width="41.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter204_d_367_2" x="1592.5" y="421" width="10" height="27"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter205_d_367_2" x="1594.5" y="421.02" width="77.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter206_d_367_2" x="1662" y="382" width="10" height="47.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter207_d_367_2" x="1663.5" y="400" width="156" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter208_d_367_2" x="1764.5" y="387" width="55" height="38"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter209_d_367_2" x="1501.5" y="331.5" width="10" height="56.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter210_d_367_2" x="1501.9" y="320.51" width="129.64" height="20.99"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter211_d_367_2" x="1641.7" y="261.08" width="140.71" height="67.916"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter212_d_367_2" x="1773.5" y="261" width="46" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter213_d_367_2" x="1432.5" y="501.01" width="79.501" height="126.99"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter214_d_367_2" x="1373.5" y="549.5" width="68.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter215_d_367_2" x="1434" y="551.5" width="77.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter216_d_367_2" x="1375.5" y="589.96" width="91.501" height="10.043"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter217_d_367_2" x="844.5" y="588.27" width="541" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter218_d_367_2" x="845.5" y="858" width="956" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter219_d_367_2" x="1373.5" y="551" width="12" height="47"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter220_d_367_2" x="844.5" y="589.98" width="13" height="278.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter221_d_367_2" x="1502" y="660" width="10" height="208"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter222_d_367_2" x="1793.5" y="501" width="12" height="369"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter223_d_367_2" x="1503.5" y="670" width="98" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter224_d_367_2" x="1703.5" y="691" width="98" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter225_d_367_2" x="865.49" y="800.01" width="58.02" height="10.49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter226_d_367_2" x="913.5" y="801" width="10" height="67"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter227_d_367_2" x="1467.5" y="513" width="10" height="47"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter228_d_367_2" x="1452" y="511" width="40" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter229_d_367_2" x="38.179" y="331.08" width="18.46" height="71.756"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter230_d_367_2" x="310.5" y="358.5" width="59" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter231_d_367_2" x="411.5" y="358.5" width="61" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter232_d_367_2" x="386.5" y="383" width="10" height="85"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter233_d_367_2" x="361.5" y="381" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter234_d_367_2" x="539.5" y="410" width="162" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter235_d_367_2" x="537.5" y="332" width="10" height="88"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter236_d_367_2" x="691.5" y="332" width="10" height="88"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter237_d_367_2" x="571.6" y="352.68" width="101.2" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter238_d_367_2" x="1659.6" y="349.68" width="122.17" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter239_d_367_2" x="1522.8" y="691.68" width="67.091" height="18.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter240_d_367_2" x="1083.5" y="717.26" width="193.11" height="22.943"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter241_d_367_2" x="855.56" y="820.89" width="63.015" height="29.219"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter242_d_367_2" x="1591.5" y="707" width="151" height="151"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
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
                            <use transform="scale(.005)" xlink:href="#image0_367_2" />
                        </pattern>
                        <filter id="filter243_d_367_2" x="1635.5" y="505" width="151" height="151"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <pattern id="pattern1_367_2" width="1" height="1"
                            patternContentUnits="objectBoundingBox">
                            <use transform="scale(.005)" xlink:href="#image0_367_2" />
                        </pattern>
                        <filter id="filter244_d_367_2" x="1458.3" y="527.15" width="26.785" height="16.966"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter245_d_367_2" x="1531.5" y="245" width="58" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter246_d_367_2" x="43.5" y="117" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter247_d_367_2" x="1430.5" y="501" width="12" height="60.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter248_d_367_2" x="272.5" y="48.5" width="26" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter249_d_367_2" x="1283.5" y="48.5" width="21" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter250_d_367_2" x="1545.5" y="48.5" width="24" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter251_d_367_2" x="1793.5" y="500" width="27.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter252_d_367_2" x="1260.5" y="10" width="34.5" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter253_d_367_2" x="1260.5" y="10" width="34" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter254_d_367_2" x="287.5" y="11" width="34.5" height="49"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter255_d_367_2" x="287.5" y="11" width="34" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter256_d_367_2" x="100.5" y="4" width="182.5" height="55"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter257_d_367_2" x="100.5" y="2" width="182.5" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter258_d_367_2" x="1293.5" y="3" width="12" height="54"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter259_d_367_2" x="1543.5" y="4" width="12" height="54"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter260_d_367_2" x="1293.5" y="0" width="262" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <filter id="filter275_d_367_2" x="1811.5" y="226.5" width="9" height="13"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_367_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_367_2" result="shape" />
                        </filter>
                        <image id="image0_367_2" width="200" height="200" preserveAspectRatio="none"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAC4dJREFUeJzt3XuMHVUBx/FvH9AHj3YpKJZCt7RSCCAPNYEgCCY+EASC4OsfiRGiBFHxL2Oiool/+Ici+CQSFf2DPyQGTYgY0Jg0Bh9QBEEolJZCaQvK0vLo0na3/nFm3Lmz986duXfumb3d7yeZ3MfOmT13d373zOPMGZAkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSVKdTgMeBf4NnNlwXaQZ57fA/mT6Q8N1kWaUQ4FxpgKyFxhptEYCYG7TFRAAHwQWZF7PBy5pqC7KMCAzw+Ul35NmnQXALqY2r9JpN2HTSw2yBWneZcBhbd5fCHwkcl2kGeNcYB2trcarwFjuvb8k80qzxo3AJNM3q34N3N7m/cmkjHTA+wrTA7AfeBY4AzgZ2Nxhni/Hr64Uz4nAPqZW+AngB8CaNvOuBm5J5smeH1kbpaZSA26mtUX4eIkyH8uVuWlgtZMa9hBTK/q9Fcrdlyn34ADqpQ48zBvXyszz+yuUy847Wk9VVIYBiWcxsDTzeluFstl5R2jtlqIBMiDxHJN7vbVC2ee7LEsDYkDiOTb3+rkKZZ/tsiwNiAGJ57jc6y0VyuYDkl+WBsSAxJPdQd8NvFCh7A7C9SKp0ToqpO4MSDyjmef5FqGb/bS2OKMd5lPNDEg8o5nnm3sov6nDsjRABiSe4zPPN3Wcq7NsmeM7zqVaGZA4DgJWZF4/3cMysgE5NlmmBsyAxLGS1r91Ly3IxszzeXgkKwoDEkd+k6iXFiRfpl0PYNVsftMVmCXeknudPwdyGvABQhf3OYTW4h5gfWaezbkynk3XAeMqWrusp32yTqK1p25++jNwSjLvobmffTpO1Wc3N7GacxHwd+A9wF2EcbBWJtPFwJ3AecDfgEsbqqMUxVW0fvufTzgzvosQhk7eD7wM7AEuwBYkOvdBmnE2ocv6bYT/wWUF8/4CuB54V4R6KceANGNv8nhtMpWxb0B1UQED0ow7CONflT3Ztw+4G/jWwGqktuY0XYE+HUy4wi6dluYe0+dLCSMVNmUF4VBuaoSwb1HFocArmdcPU73TY53GCZ9hLPM41uG9PQ3VsW8zISCH03nF7rbiL2qgvnWoIyDDZDfFASp6r9HPXEdA5lO8Ehe9t5TQbWI22QUso/o+xTzgP7Re1z4bTDA9QGXD9TJ97rtV2QeZC3wdeDetK/tMHYE8uwkwRvgWa9o4YVyrXv5pE8AVwBeYGS1nOghFuh4MahN2HuELZVmP5dPxjtN14T7gm4RD5V1VaUE+TBg7Npb9hG/bXr85xqcvUgO0kN63JA4n7ub+JcDvysxYpQXJ9ycqYy+9b3vuJAzarOEwThieqMpwRql5wBJ6C9cI1bv+l+7H1s9h3puBlyhe2V/vY/maPSYI69JLPZY/hOIgHQlc1381i11Ha1cHz6FoWCykdd39TNmCdlaUChgQqYABkQoYEKmAAZEKGBCpgAGRChgQqYABkQoYEKmAAZEKGBCpgAGRCvTTI/enwFPJtDF5HKujUlKfjiAM7r06mU7odUFVApK/RPGTbeYZI4QlDUz2+bY2y5B6MQdYTlj5s0FIn3e7br/0elglII+WmGcEeEcy5e0mDOGfD85G4BkcGE2t5hNuNZdf+VcTbifRz3X5j5Sdsep1wB8C3sdURVdRz52O9hFC0q712cjMGHBB9VtMWNnbtQLHUc9FeXsIt45I16m7gd+XLdzvhfLzCLcD69TUHdLn8iE0h9tov9m2Efd7ZrojaN8KrKG3cQ7aeZXOm/bP0sfYBoMeSeLNtP5Rsn+kI2v6HWO0D85G3O+JIbs/kA/BasJmdx1epHMIqtxzvpImR1Y8nPatzmrCUJ111O11wn7PRmB7Dcvr1zhwK/BYj+VPBq4hjAzftKMJ/7N+9wdSk8BWOn/Z7arhd1Q2E4YebWchYf+mXbM8ynDf4XUrYfu6arM/l7C5sLz2GsWT3x/IhmAT8EZjNetgpgakSLrf06n1qWO/Z9BWEA5MfAd4J51P2E4CDwA3ED53k4NVlzWw/YEmDGNAujma9sFZQnOfdwGh5UudA3yPcDh8C1P3C8mbT7gl20OEYZfWZX62mea+cfcTxj+Luj+gA9cqWsdl+m7y+LMSZX+czPvD3DJGB1FRqQkHEzYt0pV7Q/J4eYmyFyfzPpMpP8Fw74cNDTsrxrEH2JF5fXzyOFGibNrD4LjMezvovFmmGhmQeLI72DuTx4tKlLsweczeSGYYdtalSu5kahPpH8A/CZtdn6PzwYNrCC3IY4SjWWn5mLehmNUcgDqeLZnnxxDulf5Hwij51wK/AZ5Ifn4CcCnhxOAO4Erg3kx5WxAdcG5gqgWYJOy4HwX8iHDuYH9ueg34CaG7Tn4n/4bIdZ+1bEHiyX7rzyG0IpuAzwJfBN5O2BGfQ2htHmCqF/MqWjfDbEF0wDmL1hbivAplz8uVPav22qktj2LFk//WP7ZC2fy8tiCRGJB4ttF61WSvAdlHb/cBVA8MSDyTwPOZ170G5HmGrMPfMDMgcWU3jXoNiJtXERmQuAzIkDEgcWVPFhqQIWBA4squ3Msod6nq4mTedsvQgBmQuHo51Osh3gYZkLgMyJAxIHEZkCFjQOJ6kTD0T6pqQN5IlqFIDEh8z2WeVw3IczgQXlQGJL6q50I8xNsgAxJfdiU/ruNcUwxIgwxIfLYgQ8SAxJc9m34YYUC7TpYk86QMSGQGJL4qh3o9xNswAxKfARkiBiQ+AzJEDEh8O2kdBK5sQF7Du2lFZ0CaUfZIVvYwsK1HAwxIM8oGxEO8DTMgzTAgQ8KANCO7sq8omC/7MwPSAAPSjOzKvoj2d/w9inCvxnZlFIkBacaW3Ot2m1ke4p0BDEgzypwLMSAzgAFphgEZEgakGbuB/2ZedwvIy4RbJCgyA9Kcbod6PcQ7AxiQ5hiQIWBAmmNAhoABiW8+cCpwROa9Y2j9X8xN3kuNJGW8I1hkne6uqnosAt4GnAGcmTyeQusJwNRypu77sRzY2maeceBfwPrM9DDweq211v8ZkPqMEAKQndYC80qU3Uu4WWfanX0ZISwHlSg7Qbg77vrcZNf4GhiQ3qxgehhW9rCcnYSV+WbCbaCzrgCuB06n9br0sp5hKiwPJo/tWiUVMCDF5hDuWZ4NwumEflJVbad1ZV1PuMttt4Hg5gBrmB7IN/VQhxeZ3tI8WaIOs5YB6exk4B5ad5bLeprp397b66saEOqVD81oD8vZArwX2FBbzTQr3ETrrZfbTfuAR4DbCfc6P5/iYXwGbQS4APgS8CvgUUIdu32ObzdR2WHgYcPO8keaxglHjLKbJ48Quo3MFGPAn5IplT2Slk6n0vr5Fseq4LAxIOU8BZxE622ch8Vu4K/JlJpP2PcYbaJCw8QTheVMMJzh6GQf4TOpCwMiFTAgUgEDIhUwIFIBAyIVMCBSAQMiFfBEYTmjwN2EbuXp9DhT12/U4STg+4T+cdcBj9W47OWErvcnJo9rKR7RUQkD0lm2h+sC4MJkytpF6OT3OK3h2UDr/dC7ORe4i9CXCmAdcEnyWNYiQs/jtZnpxOS9bt3lJyv8nlnF3rydfRS4o8eyk4RestnWJn2evybjSuCXhBBmjQOfYPp1IiuY3hqsJdwqodf/5+Vtfo8wIN2cA5xN6wrZy7UgWa8QWpgnCGNdXU3n/8MkcCuhh3DaGhzS5+9/gdbWbh1wf5/LPGAZkOpGaP8NvgY4uM9l/5xw+e3VfS5nD6GDZX7T73HCIHQqyYDUZx6wiun7AGsJ15t38w3ga8nzrwI3liiznfabcZuxM2ItDEgcS5gemrXAWwk9az8P3JYr8yngFsKh+CeZ3hJsIFzTLh2w5lI86sl8PFclSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSZIkSSrnf3vi4388IVVmAAAAAElFTkSuQmCC" />
                        <filter id="filter266_d_367_2-3" x="1116.5" y="246.64" width="99" height="22.728"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
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
                        <path id="{{ $data['id'] }}" d="{{ $data['path'] }}" stroke="#44aa00" stroke-width="10"
                            stroke-linecap="round" fill="none" data-room="{{ $room }}" />

                        {{-- animated arrow container --}}
                        <g id="Circle-{{ $data['circle'] }}"></g>
                    @endif
                </svg>

            </div>

        </div>

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
