<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4th Floor - WCC SCAN Campus Directory</title>
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

<body style="">
    @php
        $room = request('room');
        $paths = config('RoomPaths.4thFloor');
        $data = $paths[$room] ?? null;
    @endphp
    <!-- Floor Navigator Component -->
    <x-floor-navigator :currentFloor="4" />

    <!-- Main Content -->
    <div class="floor-container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-black mb-1">4th Floor</h1>
            <p class="text-sm text-black/70">WCC SCAN Campus Directory</p>
        </div>

        <!-- SVG Container -->
        <div class="svg-wrapper">
            <div class="panzoom-container">
                <svg width="1984" height="818" fill="none" version="1.1" viewBox="0 0 1984 818"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="m0 350h291.47v-350h234.44l-3.1681 348.5h1462.6v245.5h-83.956v55h79.732v153h-1981.1z"
                        fill="#fff" stroke-width="1.0276" />
                    <path
                        d="m496 8h98v350.73h-47.5v-34.732h19l-2.5-10-7.5-7.5-9-2v-35.5h-60.5v-60h10v-170h19.5l-2-9.5-6-6-11.5-3.5v-12z"
                        fill="#D9D9D9" />
                    <path id="LIBRARY-BG"
                        d="m96 360h359.4-81.404v78h83.5v110.92h-18c5.18 13.339 7.219 19.413 18.5 25.577-10.107 3.444-11.988 9.894-18.5 24.5h19v52.652h237.5v155.35h-600v-447z"
                        fill="{{ $room == 83 ? '#44aa00' : '#D89B6C' }}" fill-opacity="{{ $room == 83 ? 1 : 0.5 }}" />
                    <g fill="#d3d3ff">
                        <path id="AMT-BG" fill="{{ $room == 80 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 80 ? 1 : 0.5 }}"
                            d="m496 208.67-79.658 0.23242c-0.02984-0.829-0.091-1.6244-0.18164-2.3887-0.09065-0.76425-0.21075-1.4974-0.35938-2.1992s-0.32549-1.3721-0.5293-2.0137c-0.2038-0.64158-0.43524-1.2542-0.6914-1.8379-0.25616-0.58367-0.53609-1.138-0.8418-1.666s-0.63584-1.0292-0.98828-1.5039c-0.70487-0.94941-1.5001-1.7952-2.375-2.5449-0.8749-0.74973-1.8292-1.4043-2.8516-1.9726-1.0224-0.56834-2.1143-1.0499-3.2617-1.4551-1.1474-0.40521-2.3517-0.7338-3.6016-0.99414-1.2499-0.26034-2.5452-0.45219-3.875-0.58594l0.02929 19.285-23.814 0.07812v150.89h114.5v-20.5c17.196 8.387 23.466 12.921 25 20.5 4.623-10.456 9.616-15.169 25-20.5v20.5l9-1.5v-34.5h18.5l-2.5-11.5-7.5-6-8.5-2.5v-35h-60v-60h9.5v-0.32617z" />
                        <path d="m495.35 98.334h0.56836l0.08594 69.357v-128.54h-0.21484l-0.43946 59.188z" />
                        <path id="ACADEMIC-BG" fill="{{ $room == 79 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 79 ? 1 : 0.5 }}"
                            d="m373.33 98.971-0.33398 70.838v39.299l23.814-0.07812-0.02929-19.285c1.3298 0.13375 2.6251 0.3256 3.875 0.58594 1.2499 0.26034 2.4542 0.58893 3.6016 0.99414 1.1474 0.4052 2.2393 0.88674 3.2617 1.4551 1.0224 0.56833 1.9767 1.2229 2.8516 1.9726 0.8749 0.74974 1.6701 1.5955 2.375 2.5449 0.35244 0.4747 0.68257 0.97586 0.98828 1.5039s0.58564 1.0824 0.8418 1.666c0.25616 0.58366 0.4876 1.1963 0.6914 1.8379 0.20381 0.64157 0.38067 1.3119 0.5293 2.0137s0.26873 1.435 0.35938 2.1992c0.09064 0.76424 0.1518 1.5597 0.18164 2.3887l79.658-0.23242v-40.982l-0.08594-69.357h-0.56836l-0.00586 0.85742-122.01-0.2207z" />
                        <g>
                            <path d="m373 10v159.81l0.33398-70.838h-0.13867l0.70508-88.971h-0.90039z" />
                            <path
                                d="m515.14 37.49c-0.01535 0.5009 8e-5 0.98074-0.05859 1.5098h0.41406l-0.35547-1.5098z" />
                            <path
                                d="m507.47 23.832c0.2867 0.17305 0.57847 0.32856 0.85937 0.51758 0.44227 0.29759 0.86406 0.63762 1.2852 0.97656l-0.61914-0.82617-1.5254-0.66797z" />
                            <path
                                d="m500.13 20.912c0.56643 0.13027 1.1745 0.30515 1.8027 0.49609l-0.93164-0.4082-0.87109-0.087891z" />
                        </g>
                        <path id="DEAN-BG" fill="{{ $room == 78 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 78 ? 1 : 0.5 }}"
                            d="m495.96 10h-122.05l-0.70508 88.971 122.14 0.2207 0.44532-60.045h0.21484v-0.14648h19.086c0.05867-0.52903 0.04324-1.0089 0.05859-1.5098l-1.6445-6.9902-3.8809-5.1738c-0.4211-0.33894-0.84289-0.67897-1.2852-0.97656-0.2809-0.18901-0.57267-0.34453-0.85937-0.51758l-5.543-2.4238c-0.62822-0.19094-1.2363-0.36583-1.8027-0.49609l-4.1289-0.41211v-0.042969c-0.01172 0.006131-0.08417-9.6e-4 -0.0918 0.00586l0.04688-10.463z" />
                        <path
                            d="m495.96 10-0.04688 10.463c0.00763-0.00682 0.08008 2.71e-4 0.0918-0.00586v-10.457h-0.04492z" />
                    </g>
                    <path id="QUALITY-BG" d="m1797.6 403h-140.57v99c18.5 1.5 18.5 9.5 20 18h101.5 21.359l-2.2852-117z"
                        fill="{{ $room == 90 ? '#44aa00' : '#9eeb9e' }}" fill-opacity="{{ $room == 90 ? 1 : 0.5 }}" />
                    <path id="Clinic-BG" d="m1797.6 403 2.2852 117h75.641c1.5-13.5 8-18 19.5-18v-99h-97.426z"
                        fill="{{ $room == 91 ? '#44aa00' : '#9eeb9e' }}" fill-opacity="{{ $room == 91 ? 1 : 0.5 }}" />
                    <g fill="#a6b6c9" fill-opacity=".5">
                        <path id="Glassware-BG" fill="{{ $room == 84 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 84 ? 1 : 0.5 }}"
                            d="m854.8 400.84h-158.8v139l13 4 7 15h138.76l0.03321-158z" />
                        <path id="LeAvi-BG" fill="{{ $room == 85 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 85 ? 1 : 0.5 }}"
                            d="m1175 400.84h-320.24l-0.03321 158h0.73633c0.5-14.342 0.5-19.842 0.5-18.842 12.366 3.941 17.671 7.3778 18.5 18.842l104.5 0.1582v-19.158l6.5 0.6582 6.5 4.5 2.5 2 3 2 4.5 6v3l3-3 2-3.5 1.5-2.5 6-4 4-3 3.5-1.5h4v18.5l33-0.00391c12.45 0 24.641-0.01134 36.711-0.02734 0.83 0.118 1.2891 0.14125 1.2891 0.03125v-0.0332c26.439-0.03533 52.716-0.07765 79.484-0.09961l-1.4492-158.03z" />
                        <path id="UNIT-HOT-BG" fill="{{ $room == 86 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 86 ? 1 : 0.5 }}"
                            d="m1337.6 400.84h-162.52l1.4492 158.03c6.5724-0.00539 12.817-0.02539 19.516-0.02539h118c3.92-11.455 8.62-15.8 22.5-19 0.0633 0.01893 0.1109 0.0377 0.1738 0.05664l0.8809-139.06z" />
                        <path id="UNIT-COLD-BG" fill="{{ $room == 87 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 87 ? 1 : 0.5 }}"
                            d="m1496.7 400.84h-159.15l-0.8809 139.06c14.028 4.2218 18.181 8.4315 19.326 18.943h138.94l1.7637-158z" />
                        <path id="SIHM-LAB-BG" fill="{{ $room == 88 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 88 ? 1 : 0.5 }}"
                            d="m1496.7 400.84-1.7637 158h1.0586 140.5c3.75-14.598 8.33-17.668 18.5-19v-139h-158.29z" />
                        <path fill="{{ $room == 95 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 95 ? 1 : 0.5 }}"
                            d="m854.11 670.9c-14.925-6.1787-18.222-11.614-19.107-21.896h-121.5c1.605 14.062-4.097 17.018-18 19.5v138.5h160.87l-2.2578-136.1z" />
                        <path id="OJT-BG" fill="{{ $room == 93 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 93 ? 1 : 0.5 }}"
                            d="m1003.5 671.96c-0.957 0.05768-1.9362 0.08138-2.957 0.04492-14-0.5-19.334-10.672-22.5-23h-100.5c-3.267 11.909-7.734 17.027-21 23-0.98475-0.37753-1.4968-0.7327-2.3926-1.1035l2.2578 136.1h147.27l-0.1797-135.04z" />
                        <path id="Defense-Tactics-BG" fill="{{ $room == 89 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 89 ? 1 : 0.5 }}"
                            d="m1129.4 671.47c-0.295 0.00762-0.574 0.03125-0.877 0.03125-11.5 0-20-16-20-22.5h-84.5c-1.3721 13.964-8.375 22.222-20.543 22.955l0.1797 135.04h125.87l-0.1269-135.53z" />
                        <path id="ROOM-404-BG" fill="{{ $room == 92 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 92 ? 1 : 0.5 }}"
                            d="m1336.3 671.06c-15.072-5.0955-19.682-10.149-20.781-22.064h-165c-3.4184 15.139-8.7647 22.149-21.123 22.469l0.1269 135.53h208.46l-1.6836-135.94z" />
                        <path fill="{{ $room == 94 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 94 ? 1 : 0.5 }}"
                            d="m1496.4 649h-0.1894-21.23-119.5c-2.18 14.831-5.62 20.381-18 22.5-0.4444-0.14468-0.7915-0.29109-1.2188-0.43555l1.6836 135.94h159.05l-0.5918-158z" />
                        <path fill="{{ $room == 96 ? '#44aa00' : '#a6b6c9' }}"
                            fill-opacity="{{ $room == 96 ? 1 : 0.5 }}"
                            d="m1496.4 649 0.5918 158h157.49l3-135.5c-12.59-1.561-17.77-5.8291-22-22.5h-119-20.08z" />
                    </g>
                    <g filter="url(#filter0_d_441_2)">
                        <line x1="98" x2="1974" y1="808" y2="808" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter1_d_441_2)">
                        <line x1="96" x2="96" y1="810" y2="357" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter2_d_441_2)">
                        <line x1="1973" x2="1974" y1="809.99" y2="659.99" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter3_d_441_2)">
                        <line x1="594" x2="1980" y1="358" y2="358" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter4_d_441_2)">
                        <line x1="1978" x2="1977" y1="360.01" y2="600.01" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter5_d_441_2)">
                        <rect x="1931" y="768" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1932" y="769" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter6_d_441_2)">
                        <rect x="1890" y="728" width="41" height="40" fill="#D9D9D9" />
                        <rect x="1891" y="729" width="39" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter7_d_441_2)">
                        <rect x="1931" y="758" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1932" y="759" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter8_d_441_2)">
                        <rect x="625" y="520" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="521" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g id="LIFT-BG" fill-opacity="0" filter="url(#filter9_d_441_2)">
                        <rect x="373" y="418" width="75" height="20" fill="#D9D9D9" />
                        <rect x="374" y="419" width="73" height="18" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter10_d_441_2)">
                        <rect x="545" y="430" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="431" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter11_d_441_2)">
                        <rect x="625" y="460" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="461" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter12_d_441_2)">
                        <rect x="625" y="450" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="451" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter13_d_441_2)">
                        <rect x="625" y="440" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="441" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter14_d_441_2)">
                        <rect transform="rotate(89.68 625 430)" x="625" y="430" width="100" height="10"
                            fill="#D9D9D9" />
                        <rect transform="rotate(89.68 624 431.01)" x="624" y="431.01" width="98" height="8"
                            stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter15_d_441_2)">
                        <rect x="625" y="430" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="431" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter16_d_441_2)">
                        <rect x="545" y="510" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="511" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter17_d_441_2)">
                        <rect x="545" y="500" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="501" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter18_d_441_2)">
                        <rect x="545" y="490" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="491" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter19_d_441_2)">
                        <rect x="545" y="480" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="481" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter20_d_441_2)">
                        <rect x="545" y="470" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="471" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter21_d_441_2)">
                        <rect x="545" y="460" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="461" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter22_d_441_2)">
                        <rect x="545" y="450" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="451" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter23_d_441_2)">
                        <rect x="545" y="440" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="441" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter24_d_441_2)">
                        <rect x="625" y="510" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="511" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter25_d_441_2)">
                        <rect x="625" y="500" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="501" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter26_d_441_2)">
                        <rect x="625" y="490" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="491" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter27_d_441_2)">
                        <rect x="625" y="480" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="481" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter28_d_441_2)">
                        <rect x="625" y="470" width="70" height="10" fill="#D9D9D9" />
                        <rect x="626" y="471" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter29_d_441_2)">
                        <rect x="545" y="520" width="70" height="10" fill="#D9D9D9" />
                        <rect x="546" y="521" width="68" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter30_d_441_2)">
                        <rect x="1931" y="748" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1932" y="749" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter31_d_441_2)">
                        <rect x="1931" y="738" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1932" y="739" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter32_d_441_2)">
                        <rect x="1931" y="728" width="41" height="10" fill="#D9D9D9" />
                        <rect x="1932" y="729" width="39" height="8" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter33_d_441_2)">
                        <rect x="1922" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1923" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter34_d_441_2)">
                        <rect x="1868" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1869" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter35_d_441_2)">
                        <rect x="1859" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1860" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter36_d_441_2)">
                        <rect x="1850" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1851" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter37_d_441_2)">
                        <rect x="1913" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1914" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter38_d_441_2)">
                        <rect x="1904" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1905" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter39_d_441_2)">
                        <rect x="1895" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1896" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter40_d_441_2)">
                        <rect x="1886" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1887" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter41_d_441_2)">
                        <rect x="1877" y="768" width="9" height="40" fill="#D9D9D9" />
                        <rect x="1878" y="769" width="7" height="38" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter42_d_441_2)">
                        <rect x="1873" y="660" width="100" height="40" fill="#D9D9D9" />
                        <rect x="1874" y="661" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter43_d_441_2)">
                        <rect x="570" y="375" width="100" height="40" fill="#D9D9D9" />
                        <rect x="571" y="376" width="98" height="38" stroke="#00FF26" stroke-width="2" />
                    </g>
                    <g filter="url(#filter44_d_441_2)">
                        <path
                            d="m1911.2 684v-10.182h6.15v1.094h-4.91v3.44h4.59v1.094h-4.59v3.46h4.99v1.094h-6.23zm8.97-10.182 2.62 4.236h0.08l2.63-4.236h1.45l-3.2 5.091 3.2 5.091h-1.45l-2.63-4.156h-0.08l-2.62 4.156h-1.45l3.28-5.091-3.28-5.091h1.45zm9.62 0v10.182h-1.24v-10.182h1.24zm1.91 1.094v-1.094h7.64v1.094h-3.2v9.088h-1.24v-9.088h-3.2z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter45_d_441_2)">
                        <path
                            d="m606.21 399v-10.182h6.145v1.094h-4.912v3.44h4.594v1.094h-4.594v3.46h4.992v1.094h-6.225zm8.964-10.182 2.625 4.236h0.08l2.625-4.236h1.451l-3.201 5.091 3.201 5.091h-1.451l-2.625-4.156h-0.08l-2.625 4.156h-1.452l3.282-5.091-3.282-5.091h1.452zm9.619 0v10.182h-1.233v-10.182h1.233zm1.915 1.094v-1.094h7.637v1.094h-3.202v9.088h-1.233v-9.088h-3.202z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter46_d_441_2)">
                        <line x1="1979" x2="1895" y1="602" y2="602" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter47_d_441_2)">
                        <line x1="1897" x2="1897" y1="600" y2="660" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter48_d_441_2)">
                        <line x1="1976" x2="1916" y1="401" y2="401" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter49_d_441_2)">
                        <path d="m1896 400.01-1 121.49" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter50_d_441_2)">
                        <line x1="1895" x2="670" y1="401" y2="401" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter51_d_441_2)">
                        <path d="m1799.2 401v121.01" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter52_d_441_2)">
                        <line x1="1657.5" x2="1657.5" y1="400" y2="560" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter53_d_441_2)">
                        <path d="m1676 521h200.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter54_d_441_2)">
                        <line x1="1496" x2="1496" y1="400" y2="560" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter55_d_441_2)">
                        <line x1="697.5" x2="697.5" y1="400" y2="560" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter56_d_441_2)">
                        <line x1="1176" x2="1176" y1="400" y2="560" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter57_d_441_2)">
                        <line x1="1336" x2="1336" y1="400" y2="560" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter58_d_441_2)">
                        <line x1="856" x2="856" y1="400" y2="560" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter59_d_441_2)">
                        <path d="m1657 648v162" stroke="#000" stroke-width="5" />
                    </g>
                    <g filter="url(#filter60_d_441_2)">
                        <line x1="856" x2="856" y1="650" y2="810" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter61_d_441_2)">
                        <line x1="697.5" x2="697.5" y1="650" y2="810" stroke="#000"
                            stroke-width="5" />
                    </g>
                    <g filter="url(#filter62_d_441_2)">
                        <line x1="1337" x2="1337" y1="649" y2="809" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter63_d_441_2)">
                        <line x1="1496" x2="1496" y1="650" y2="810" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter64_d_441_2)">
                        <line x1="1002" x2="1002" y1="650" y2="810" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter65_d_441_2)">
                        <path d="m1129 648 1 159" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter66_d_441_2)">
                        <path d="m1492.5 559h145" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter67_d_441_2)">
                        <path d="m716 559h141" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter68_d_441_2)">
                        <line x1="716" x2="836" y1="649" y2="649" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter69_d_441_2)">
                        <line x1="876" x2="979" y1="649" y2="649" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter70_d_441_2)">
                        <path d="m1023 649 88-1" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter71_d_441_2)">
                        <path d="m1147 648 169.5 1" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter72_d_441_2)">
                        <path d="m1355 649h141" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter73_d_441_2)">
                        <path d="m1495 649h141" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter74_d_441_2)">
                        <path d="m874 559h105" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter75_d_441_2)">
                        <path d="m1027 560 149.5-1" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter76_d_441_2)">
                        <path d="m1175 559h141" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter77_d_441_2)">
                        <path d="m1356 559h140" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter78_d_441_2)">
                        <path d="m695 559h-50" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter79_d_441_2)">
                        <line x1="546" x2="546" y1="360" y2="560" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter80_d_441_2)">
                        <line x1="545" x2="595" y1="559" y2="559" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter81_d_441_2)">
                        <line x1="695" x2="457" y1="651" y2="651" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter82_d_441_2)">
                        <path d="m458 439h-85" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter83_d_441_2)">
                        <line x1="411" x2="411" y1="418" y2="438" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter84_d_441_2)">
                        <line x1="373.48" x2="410.48" y1="417.12" y2="437.12" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter85_d_441_2)">
                        <line x1="410.48" x2="373.48" y1="418.88" y2="438.88" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g id="LIFT-Text" filter="url(#filter86_d_441_2)">
                        <path
                            d="m415.4 434v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.774-10.182v10.182h-1.844v-10.182h1.844zm1.997 10.182v-10.182h6.523v1.546h-4.678v2.765h4.231v1.546h-4.231v4.325h-1.845zm7.756-8.636v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147z"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter87_d_441_2)">
                        <line x1="373" x2="373" y1="360" y2="7" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter88_d_441_2)">
                        <line x1="593" x2="593" y1="360" y2="10" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter89_d_441_2)">
                        <line x1="371" x2="595" y1="8" y2="8" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter90_d_441_2)">
                        <path d="m496 10v11.5" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter91_d_441_2)">
                        <line x1="375" x2="396" y1="209" y2="209" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter92_d_441_2)">
                        <path d="m496 38v112" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter93_d_441_2)">
                        <line x1="495" x2="595" y1="99" y2="99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter94_d_441_2)">
                        <line x1="375" x2="475" y1="99" y2="99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter95_d_441_2)">
                        <line x1="415" x2="545" y1="209" y2="209" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter96_d_441_2)">
                        <line x1="544" x2="544" y1="210" y2="40" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter97_d_441_2)">
                        <line x1="545" x2="530" y1="41" y2="41" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter98_d_441_2)">
                        <line x1="496" x2="496" y1="180" y2="210" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter99_d_441_2)">
                        <line x1="486" x2="486" y1="210" y2="270" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter100_d_441_2)">
                        <line x1="485" x2="595" y1="269" y2="269" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter101_d_441_2)">
                        <line x1="515" x2="545" y1="149" y2="149" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter102_d_441_2)">
                        <path d="m546 270v35.741" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter103_d_441_2)">
                        <path d="M546 323.5V360" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter104_d_441_2)">
                        <path d="M485.479 209.122L591.5 268" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter105_d_441_2)">
                        <path d="m487 268 107.52-58.878" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter106_d_441_2)">
                        <path d="M545.5 99.5L592 209" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter107_d_441_2)">
                        <path d="m590.5 99.5-46.5 110" stroke="#000" stroke-width="2" />
                    </g>
                    <g id="AMT-Text" filter="url(#filter108_d_441_2)">
                        <path
                            d="m416.54 273h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm8.759-6.19h2.257l3.022 7.378h0.12l3.022-7.378h2.257v10.182h-1.769v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.095v7.01h-1.769v-10.182zm12.24 1.546v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm-49.061 25.636h-3.45v-10.182h3.52c1.011 0 1.879 0.204 2.605 0.612 0.729 0.404 1.289 0.986 1.68 1.745 0.392 0.759 0.587 1.667 0.587 2.724 0 1.061-0.197 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.517c0.709 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.069-1.168 0.238-0.52 0.358-1.17 0.358-1.949s-0.12-1.425-0.358-1.939c-0.239-0.517-0.592-0.903-1.059-1.158-0.464-0.259-1.041-0.388-1.731-0.388h-1.571v6.99zm8.301 1.596v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.661zm8.503 0v-10.182h3.819c0.782 0 1.438 0.146 1.968 0.438 0.534 0.291 0.937 0.692 1.208 1.203 0.276 0.507 0.413 1.084 0.413 1.73 0 0.653-0.137 1.233-0.413 1.74-0.275 0.507-0.681 0.906-1.218 1.198-0.536 0.288-1.198 0.433-1.983 0.433h-2.531v-1.517h2.282c0.458 0 0.832-0.079 1.124-0.238 0.291-0.159 0.507-0.378 0.646-0.657 0.143-0.278 0.214-0.598 0.214-0.959s-0.071-0.68-0.214-0.955c-0.139-0.275-0.356-0.488-0.651-0.641-0.292-0.156-0.668-0.234-1.129-0.234h-1.69v8.641h-1.845zm9.183 0h-1.969l3.585-10.182h2.277l3.589 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm8.758 3.992v-10.182h3.818c0.783 0 1.439 0.136 1.969 0.408 0.534 0.272 0.937 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.978 0.387h-2.72v-1.531h2.471c0.457 0 0.832-0.063 1.124-0.189 0.291-0.129 0.507-0.316 0.646-0.562 0.142-0.248 0.214-0.553 0.214-0.914 0-0.362-0.072-0.67-0.214-0.925-0.143-0.259-0.36-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.058l-2.476-4.614h2.013zm3.398-4.022v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147zm9.69-1.546h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm12.687 10.182v-10.182h6.623v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.662zm16.872-10.182v10.182h-1.641l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.793 6.941h0.089v-6.941h1.835zm1.562 1.546v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm-54.118 20.545c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h6.523v1.546h-4.679v2.765h4.231v1.546h-4.231v4.325h-1.844zm8.203 0v-10.182h6.523v1.546h-4.678v2.765h4.23v1.546h-4.23v4.325h-1.845zm10.048-10.182v10.182h-1.845v-10.182h1.845zm10.712 3.436h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.606-1.72-0.606-2.814c0-1.097 0.203-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h6.623v1.546h-4.778v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662z"
                            fill="{{ $room == 80 ? 'white' : '#000' }}" />
                    </g>
                    <g id="ACADEMIC-Text" filter="url(#filter109_d_441_2)">
                        <path
                            d="m394.49 143h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.369v1.481h-5.369v-1.481zm16.996-2.754h-1.86c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.268-0.086-0.558-0.129-0.87-0.129-0.553 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.269-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.86 0.01c-0.07 0.484-0.221 0.938-0.453 1.362-0.229 0.425-0.528 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.497 0.179-1.049 0.268-1.656 0.268-0.895 0-1.693-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.922 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.488 1.512zm2.873 6.746h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm12.209 3.992h-3.451v-10.182h3.52c1.011 0 1.88 0.204 2.605 0.612 0.73 0.404 1.29 0.986 1.681 1.745s0.587 1.667 0.587 2.724c0 1.061-0.198 1.972-0.592 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.516c0.71 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.069-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.239-0.517-0.592-0.903-1.059-1.158-0.464-0.259-1.041-0.388-1.73-0.388h-1.571v6.99zm8.3 1.596v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm8.504-10.182h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm14.532 0v10.182h-1.845v-10.182h1.845zm10.712 3.436h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.302 0.756-0.498 0.179-1.049 0.268-1.656 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.256-1.013-1.661-1.795-0.404-0.782-0.606-1.72-0.606-2.814 0-1.097 0.204-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.303 0.701c0.381 0.305 0.694 0.679 0.939 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm-61.775 23.746v-10.182h1.844v4.311h4.718v-4.311h1.85v10.182h-1.85v-4.325h-4.718v4.325h-1.844zm10.418 0v-10.182h6.622v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.818v1.546h-6.662zm9.811 0h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm12.209 3.992h-3.451v-10.182h3.52c1.011 0 1.88 0.204 2.605 0.612 0.73 0.404 1.29 0.986 1.681 1.745s0.586 1.667 0.586 2.724c0 1.061-0.197 1.972-0.591 2.735-0.391 0.762-0.956 1.347-1.695 1.754-0.736 0.408-1.621 0.612-2.655 0.612zm-1.606-1.596h1.516c0.709 0 1.301-0.129 1.775-0.388 0.474-0.262 0.83-0.651 1.069-1.168 0.239-0.52 0.358-1.17 0.358-1.949s-0.119-1.425-0.358-1.939c-0.239-0.517-0.592-0.903-1.059-1.158-0.464-0.259-1.041-0.388-1.73-0.388h-1.571v6.99zm9.747-8.586v1.014c0 0.292-0.057 0.595-0.169 0.91-0.11 0.312-0.261 0.61-0.453 0.895-0.192 0.282-0.411 0.524-0.656 0.726l-0.835-0.542c0.182-0.275 0.341-0.572 0.477-0.89 0.136-0.321 0.204-0.684 0.204-1.089v-1.024h1.432zm7.08 2.799c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.793 0-1.48-0.123-2.064-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.989-0.979-0.483-0.441-0.725-1.026-0.725-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.977 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm-37.984 19.292c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h6.523v1.546h-4.679v2.765h4.231v1.546h-4.231v4.325h-1.844zm8.203 0v-10.182h6.523v1.546h-4.678v2.765h4.23v1.546h-4.23v4.325h-1.845zm10.048-10.182v10.182h-1.845v-10.182h1.845zm10.712 3.436h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.252-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.606-1.72-0.606-2.814c0-1.097 0.203-2.035 0.611-2.814 0.408-0.782 0.963-1.38 1.666-1.795 0.702-0.414 1.498-0.621 2.386-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h6.623v1.546h-4.778v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662z"
                            fill="{{ $room == 79 ? 'white' : '#000' }}" />
                    </g>
                    <g id="DEAN-Text" filter="url(#filter110_d_441_2)">
                        <path
                            d="m410.83 50h-3.45v-10.182h3.52c1.011 0 1.879 0.2038 2.605 0.6115 0.729 0.4043 1.289 0.986 1.681 1.745 0.391 0.759 0.586 1.6672 0.586 2.7244 0 1.0607-0.197 1.9721-0.591 2.7344-0.392 0.7623-0.957 1.3473-1.696 1.755-0.736 0.4077-1.62 0.6115-2.655 0.6115zm-1.605-1.5959h1.516c0.709 0 1.301-0.1292 1.775-0.3878 0.474-0.2618 0.83-0.6512 1.069-1.1683 0.238-0.5203 0.358-1.17 0.358-1.9489 0-0.7788-0.12-1.4251-0.358-1.9389-0.239-0.517-0.592-0.9031-1.059-1.1584-0.464-0.2585-1.041-0.3877-1.73-0.3877h-1.571v6.99zm8.3 1.5959v-10.182h6.622v1.5461h-4.778v2.7643h4.435v1.5461h-4.435v2.7791h4.818v1.5462h-6.662zm9.811 0h-1.969l3.585-10.182h2.277l3.589 10.182h-1.968l-2.72-8.0938h-0.079l-2.715 8.0938zm0.065-3.9922h5.369v1.4815h-5.369v-1.4815zm17.126-6.1896v10.182h-1.641l-4.798-6.9354h-0.084v6.9354h-1.845v-10.182h1.651l4.793 6.9403h0.089v-6.9403h1.835zm3.456 0v1.0142c0 0.2917-0.056 0.5949-0.169 0.9098-0.109 0.3115-0.26 0.6098-0.452 0.8949-0.193 0.2817-0.411 0.5236-0.657 0.7258l-0.835-0.5419c0.183-0.2751 0.342-0.5717 0.477-0.8899 0.136-0.3215 0.204-0.6844 0.204-1.0888v-1.0241h1.432zm7.081 2.799c-0.046-0.4342-0.242-0.7723-0.587-1.0142-0.341-0.242-0.785-0.3629-1.332-0.3629-0.385 0-0.714 0.058-0.989 0.174-0.276 0.116-0.486 0.2734-0.632 0.4723-0.146 0.1988-0.22 0.4259-0.224 0.6811 0 0.2121 0.049 0.396 0.145 0.5518 0.099 0.1558 0.233 0.2884 0.402 0.3977 0.169 0.1061 0.357 0.1956 0.562 0.2685 0.206 0.0729 0.413 0.1342 0.622 0.184l0.954 0.2386c0.385 0.0895 0.754 0.2105 1.109 0.3629 0.358 0.1525 0.678 0.3447 0.959 0.5767 0.285 0.232 0.511 0.5121 0.676 0.8402 0.166 0.3282 0.249 0.7126 0.249 1.1534 0 0.5966-0.152 1.122-0.457 1.576-0.305 0.4508-0.746 0.8038-1.323 1.059-0.573 0.2519-1.268 0.3778-2.083 0.3778-0.792 0-1.48-0.1226-2.063-0.3679-0.58-0.2452-1.034-0.6032-1.362-1.0738-0.325-0.4707-0.501-1.0441-0.527-1.7202h1.814c0.027 0.3546 0.136 0.6496 0.328 0.8849 0.193 0.2354 0.443 0.411 0.751 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.0596 1.054-0.179 0.305-0.1226 0.544-0.2916 0.716-0.5071 0.172-0.2187 0.26-0.4739 0.264-0.7656-4e-3 -0.2651-0.082-0.4839-0.234-0.6562-0.153-0.1757-0.366-0.3215-0.641-0.4375-0.272-0.1193-0.59-0.2254-0.955-0.3182l-1.158-0.2983c-0.839-0.2154-1.502-0.5419-1.989-0.9794-0.484-0.4408-0.726-1.0258-0.726-1.755 0-0.5999 0.163-1.1252 0.487-1.576 0.328-0.4507 0.774-0.8004 1.338-1.049 0.563-0.2519 1.201-0.3778 1.914-0.3778 0.722 0 1.355 0.1259 1.899 0.3778 0.547 0.2486 0.976 0.595 1.288 1.0391 0.311 0.4408 0.472 0.9479 0.482 1.5213h-1.775zm-37.964 19.292c0 1.0971-0.205 2.0367-0.616 2.8189-0.408 0.7789-0.965 1.3755-1.671 1.7898-0.702 0.4143-1.499 0.6214-2.391 0.6214s-1.69-0.2071-2.396-0.6214c-0.703-0.4177-1.26-1.0159-1.671-1.7948-0.407-0.7822-0.611-1.7202-0.611-2.8139 0-1.0971 0.204-2.035 0.611-2.8139 0.411-0.7822 0.968-1.3805 1.671-1.7948 0.706-0.4143 1.504-0.6214 2.396-0.6214s1.689 0.2071 2.391 0.6214c0.706 0.4143 1.263 1.0126 1.671 1.7948 0.411 0.7789 0.616 1.7168 0.616 2.8139zm-1.854 0c0-0.7723-0.121-1.4235-0.363-1.9538-0.239-0.5337-0.57-0.9364-0.994-1.2081-0.425-0.2751-0.914-0.4127-1.467-0.4127-0.554 0-1.042 0.1376-1.467 0.4127-0.424 0.2717-0.757 0.6744-0.999 1.2081-0.239 0.5303-0.358 1.1815-0.358 1.9538 0 0.7722 0.119 1.4252 0.358 1.9588 0.242 0.5303 0.575 0.933 0.999 1.2081 0.425 0.2718 0.913 0.4077 1.467 0.4077 0.553 0 1.042-0.1359 1.467-0.4077 0.424-0.2751 0.755-0.6778 0.994-1.2081 0.242-0.5336 0.363-1.1866 0.363-1.9588zm3.598 5.0909v-10.182h6.523v1.5461h-4.679v2.7643h4.231v1.5461h-4.231v4.3253h-1.844zm8.203 0v-10.182h6.523v1.5461h-4.678v2.7643h4.23v1.5461h-4.23v4.3253h-1.845zm10.048-10.182v10.182h-1.845v-10.182h1.845zm10.712 3.4354h-1.859c-0.053-0.305-0.151-0.5751-0.293-0.8104-0.143-0.2387-0.32-0.4408-0.532-0.6066-0.212-0.1657-0.454-0.29-0.726-0.3728-0.269-0.0862-0.559-0.1293-0.87-0.1293-0.554 0-1.044 0.1392-1.472 0.4176-0.427 0.2751-0.762 0.6795-1.004 1.2131-0.242 0.5303-0.363 1.1783-0.363 1.9439 0 0.7789 0.121 1.4351 0.363 1.9687 0.245 0.5303 0.58 0.9314 1.004 1.2032 0.428 0.2684 0.917 0.4027 1.467 0.4027 0.305 0 0.59-0.0398 0.855-0.1194 0.268-0.0828 0.509-0.2038 0.721-0.3629 0.215-0.1591 0.396-0.3546 0.542-0.5866 0.149-0.232 0.252-0.4972 0.308-0.7955l1.859 0.01c-0.069 0.4839-0.22 0.9379-0.452 1.3622-0.229 0.4242-0.529 0.7987-0.9 1.1236-0.371 0.3215-0.805 0.5733-1.303 0.7556-0.497 0.179-1.049 0.2685-1.655 0.2685-0.895 0-1.694-0.2071-2.396-0.6214-0.703-0.4143-1.257-1.0126-1.661-1.7948s-0.606-1.7202-0.606-2.8139c0-1.0971 0.203-2.035 0.611-2.8139 0.408-0.7822 0.963-1.3805 1.666-1.7948 0.702-0.4143 1.498-0.6214 2.386-0.6214 0.567 0 1.094 0.0795 1.581 0.2386s0.921 0.3928 1.302 0.701c0.382 0.3049 0.695 0.6795 0.94 1.1236 0.249 0.4408 0.411 0.9446 0.487 1.5114zm1.689 6.7464v-10.182h6.623v1.5461h-4.778v2.7643h4.434v1.5461h-4.434v2.7791h4.817v1.5462h-6.662z"
                            fill="{{ $room == 78 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter111_d_441_2)">
                        <line x1="94.007" x2="375.01" y1="358" y2="358.96" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter112_d_441_2)">
                        <path id="LIBRARY-Text"
                            d="m199.09 600-4.926-17.455h3.401l3.145 12.827h0.161l3.358-12.827h3.094l3.367 12.836h0.153l3.145-12.836h3.4l-4.926 17.455h-3.119l-3.494-12.247h-0.137l-3.502 12.247h-3.12zm34.494-11.565h-3.188c-0.091-0.523-0.258-0.986-0.503-1.39-0.244-0.409-0.548-0.755-0.911-1.039-0.364-0.284-0.779-0.497-1.245-0.64-0.46-0.147-0.957-0.221-1.491-0.221-0.949 0-1.79 0.239-2.523 0.716-0.733 0.471-1.307 1.165-1.722 2.079-0.414 0.909-0.622 2.02-0.622 3.333 0 1.335 0.208 2.46 0.622 3.375 0.421 0.909 0.995 1.596 1.722 2.062 0.733 0.46 1.571 0.691 2.514 0.691 0.523 0 1.012-0.069 1.466-0.205 0.46-0.142 0.872-0.349 1.236-0.622 0.369-0.273 0.679-0.608 0.929-1.006 0.256-0.398 0.432-0.852 0.528-1.363l3.188 0.017c-0.12 0.829-0.378 1.608-0.776 2.335-0.392 0.727-0.906 1.369-1.542 1.926-0.637 0.551-1.381 0.983-2.233 1.295-0.853 0.307-1.799 0.461-2.838 0.461-1.534 0-2.904-0.355-4.108-1.066-1.205-0.71-2.154-1.735-2.847-3.076s-1.04-2.949-1.04-4.824c0-1.881 0.35-3.489 1.049-4.824 0.698-1.341 1.65-2.367 2.855-3.077 1.204-0.71 2.568-1.065 4.091-1.065 0.971 0 1.875 0.136 2.71 0.409s1.579 0.673 2.233 1.202c0.653 0.522 1.19 1.164 1.611 1.926 0.426 0.755 0.704 1.619 0.835 2.591zm17.836 0h-3.188c-0.091-0.523-0.258-0.986-0.503-1.39-0.244-0.409-0.548-0.755-0.912-1.039-0.363-0.284-0.778-0.497-1.244-0.64-0.46-0.147-0.957-0.221-1.491-0.221-0.949 0-1.79 0.239-2.523 0.716-0.733 0.471-1.307 1.165-1.722 2.079-0.414 0.909-0.622 2.02-0.622 3.333 0 1.335 0.208 2.46 0.622 3.375 0.421 0.909 0.995 1.596 1.722 2.062 0.733 0.46 1.571 0.691 2.514 0.691 0.523 0 1.012-0.069 1.466-0.205 0.46-0.142 0.872-0.349 1.236-0.622 0.369-0.273 0.679-0.608 0.929-1.006 0.256-0.398 0.432-0.852 0.528-1.363l3.188 0.017c-0.12 0.829-0.378 1.608-0.776 2.335-0.392 0.727-0.906 1.369-1.542 1.926-0.637 0.551-1.381 0.983-2.233 1.295-0.853 0.307-1.799 0.461-2.838 0.461-1.535 0-2.904-0.355-4.108-1.066-1.205-0.71-2.154-1.735-2.847-3.076s-1.04-2.949-1.04-4.824c0-1.881 0.35-3.489 1.049-4.824 0.698-1.341 1.65-2.367 2.855-3.077 1.204-0.71 2.568-1.065 4.091-1.065 0.971 0 1.875 0.136 2.71 0.409s1.579 0.673 2.233 1.202c0.653 0.522 1.19 1.164 1.611 1.926 0.426 0.755 0.704 1.619 0.835 2.591zm8.848 11.565v-17.455h3.162v14.804h7.688v2.651h-10.85zm16.756-17.455v17.455h-3.162v-17.455h3.162zm3.424 17.455v-17.455h6.682c1.261 0 2.31 0.199 3.145 0.597 0.841 0.392 1.469 0.929 1.883 1.611 0.421 0.682 0.631 1.454 0.631 2.318 0 0.71-0.136 1.318-0.409 1.824-0.273 0.5-0.639 0.906-1.099 1.219-0.461 0.312-0.975 0.537-1.543 0.673v0.17c0.619 0.034 1.213 0.225 1.781 0.571 0.574 0.341 1.043 0.824 1.406 1.449 0.364 0.625 0.546 1.381 0.546 2.267 0 0.904-0.219 1.716-0.656 2.438-0.438 0.716-1.097 1.281-1.978 1.696-0.88 0.415-1.988 0.622-3.324 0.622h-7.065zm3.162-2.642h3.401c1.147 0 1.974-0.219 2.48-0.656 0.511-0.443 0.767-1.012 0.767-1.705 0-0.517-0.128-0.983-0.384-1.398-0.255-0.42-0.619-0.75-1.091-0.988-0.471-0.245-1.034-0.367-1.687-0.367h-3.486v5.114zm0-7.389h3.128c0.545 0 1.037-0.1 1.474-0.299 0.438-0.204 0.782-0.491 1.032-0.86 0.255-0.375 0.383-0.819 0.383-1.33 0-0.676-0.239-1.233-0.716-1.67-0.471-0.438-1.173-0.657-2.105-0.657h-3.196v4.816zm12.612 10.031v-17.455h6.545c1.341 0 2.466 0.233 3.375 0.699 0.915 0.466 1.605 1.12 2.071 1.961 0.472 0.835 0.707 1.809 0.707 2.923 0 1.119-0.238 2.091-0.715 2.915-0.472 0.818-1.168 1.451-2.089 1.9-0.92 0.443-2.051 0.665-3.392 0.665h-4.662v-2.625h4.236c0.784 0 1.426-0.108 1.926-0.324 0.5-0.222 0.87-0.543 1.108-0.963 0.245-0.426 0.367-0.949 0.367-1.568s-0.122-1.148-0.367-1.585c-0.244-0.444-0.616-0.779-1.116-1.006-0.5-0.233-1.145-0.349-1.935-0.349h-2.897v14.812h-3.162zm9.017-7.909 4.321 7.909h-3.529l-4.244-7.909h3.452zm8.833 7.909h-3.375l6.145-17.455h3.904l6.153 17.455h-3.375l-4.662-13.875h-0.136l-4.654 13.875zm0.111-6.844h9.205v2.54h-9.205v-2.54zm15.015 6.844v-17.455h6.546c1.341 0 2.466 0.233 3.375 0.699 0.914 0.466 1.605 1.12 2.071 1.961 0.471 0.835 0.707 1.809 0.707 2.923 0 1.119-0.239 2.091-0.716 2.915-0.471 0.818-1.168 1.451-2.088 1.9-0.92 0.443-2.051 0.665-3.392 0.665h-4.662v-2.625h4.236c0.784 0 1.426-0.108 1.926-0.324 0.5-0.222 0.869-0.543 1.108-0.963 0.244-0.426 0.366-0.949 0.366-1.568s-0.122-1.148-0.366-1.585c-0.244-0.444-0.617-0.779-1.117-1.006-0.5-0.233-1.144-0.349-1.934-0.349h-2.898v14.812h-3.162zm9.017-7.909 4.321 7.909h-3.528l-4.245-7.909h3.452zm4.72-9.546h3.571l4.27 7.722h0.17l4.27-7.722h3.571l-6.349 10.944v6.511h-3.154v-6.511l-6.349-10.944z"
                            fill="{{ $room == 83 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter113_d_441_2)">
                        <line x1="457" x2="458" y1="439.99" y2="549.99" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter114_d_441_2)">
                        <path d="m458 650v-50" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter115_d_441_2)">
                        <path d="M397 188.5V210" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter116_d_441_2)">
                        <path d="m396.35 189.65c12.564 1.83 17.942 4.953 20 20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter117_d_441_2)">
                        <path d="m696 540.46c12.565 1.831 17.943 4.495 20 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter118_d_441_2)">
                        <path d="m696 668c12.565-1.831 17.943-4.953 20-20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter119_d_441_2)">
                        <path d="m855.5 670c-12.565-1.831-18.443-6.453-20.5-21.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter120_d_441_2)">
                        <path d="m1656.5 670c-12.57-1.831-18.4-6.953-20.46-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter121_d_441_2)">
                        <path d="m1335.5 670c-12.57-1.831-17.9-5.953-19.96-21" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter122_d_441_2)">
                        <path d="m999.92 670c-12.565-1.831-17.9-6.953-19.958-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter123_d_441_2)">
                        <path d="m1336 670c12.56-1.831 17.94-5.953 20-21" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter124_d_441_2)">
                        <path d="m1001.8 670c12.56-1.831 18.44-6.953 20.5-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter125_d_441_2)">
                        <path d="m856 670c12.565-1.831 18.443-6.953 20.5-22" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter126_d_441_2)">
                        <path d="m1656.5 540.46c-12.57 1.831-17.9 3.995-19.96 19.042" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter127_d_441_2)">
                        <path d="m1895.2 501.71c-12.56 1.83-17.9 3.995-19.96 19.042" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter128_d_441_2)">
                        <path d="m1335.5 540.46c-12.57 1.831-17.9 4.495-19.96 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter129_d_441_2)">
                        <path d="m1336 540.46c12.56 1.831 17.94 4.495 20 19.542" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter130_d_441_2)">
                        <path d="m1657 501.58c12.56 1.831 17.94 4.496 20 19.542" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter131_d_441_2)">
                        <path d="m1896.5 381c12.56 1.831 18.44 4.411 20.5 19.458" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter132_d_441_2)">
                        <path d="m855 540.46c12.565 1.831 17.943 4.495 20 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter133_d_441_2)">
                        <path d="M566.5 323.812H545" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter134_d_441_2)">
                        <path d="m565.35 324.46c-1.831-12.565-4.954-17.942-20-20" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter135_d_441_2)">
                        <path d="m496 130.46c12.565 1.831 17.943 4.495 20 19.542" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter136_d_441_2)">
                        <path d="m516 60c12.565-1.8306 18.443-3.9535 20.5-19" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter137_d_441_2)">
                        <path d="m516 40.458c-1.831-12.565-4.953-17.942-20-20" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter138_d_441_2)">
                        <line x1="496" x2="516" y1="39" y2="39" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter139_d_441_2)">
                        <path d="m516 40v21" stroke="#000" stroke-width="2" />
                    </g>
                    <g id="Glassware-Text" filter="url(#filter140_d_441_2)">
                        <path
                            d="m739.37 470.07c-0.083-0.269-0.197-0.509-0.343-0.721-0.142-0.216-0.315-0.4-0.517-0.552-0.199-0.153-0.427-0.267-0.686-0.343-0.258-0.08-0.54-0.119-0.845-0.119-0.547 0-1.034 0.137-1.462 0.412-0.427 0.275-0.764 0.68-1.009 1.213-0.242 0.531-0.363 1.177-0.363 1.939 0 0.769 0.121 1.42 0.363 1.954s0.578 0.94 1.009 1.218c0.431 0.275 0.932 0.413 1.502 0.413 0.517 0 0.964-0.1 1.342-0.299 0.381-0.198 0.674-0.48 0.88-0.845 0.205-0.368 0.308-0.799 0.308-1.292l0.418 0.064h-2.764v-1.442h4.131v1.223c0 0.872-0.186 1.626-0.557 2.263-0.371 0.636-0.881 1.126-1.531 1.471-0.65 0.342-1.395 0.512-2.237 0.512-0.938 0-1.762-0.21-2.471-0.631-0.706-0.424-1.258-1.026-1.656-1.805-0.394-0.782-0.591-1.71-0.591-2.784 0-0.822 0.116-1.556 0.348-2.202 0.235-0.647 0.563-1.195 0.984-1.646 0.421-0.454 0.915-0.799 1.482-1.034 0.566-0.239 1.183-0.358 1.849-0.358 0.563 0 1.089 0.083 1.576 0.249 0.487 0.162 0.92 0.394 1.298 0.696 0.381 0.301 0.694 0.659 0.939 1.073 0.245 0.415 0.406 0.872 0.482 1.373h-1.879zm3.748 6.93v-10.182h1.844v8.636h4.484v1.546h-6.328zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm14.128-3.391c-0.046-0.434-0.242-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472c-0.145 0.199-0.22 0.426-0.223 0.681 0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.561 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.267 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.815c0.026 0.355 0.135 0.65 0.328 0.885 0.192 0.235 0.442 0.411 0.75 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.173-0.219 0.261-0.474 0.264-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.488-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm9.092 0c-0.046-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.785-0.363-1.332-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.486 0.273-0.632 0.472-0.22 0.426-0.223 0.681c0 0.213 0.048 0.397 0.144 0.552 0.099 0.156 0.233 0.289 0.402 0.398 0.169 0.106 0.357 0.196 0.562 0.269 0.206 0.072 0.413 0.134 0.622 0.183l0.954 0.239c0.385 0.09 0.754 0.211 1.109 0.363 0.358 0.152 0.678 0.345 0.959 0.577 0.285 0.232 0.511 0.512 0.677 0.84 0.165 0.328 0.248 0.713 0.248 1.153 0 0.597-0.152 1.122-0.457 1.576-0.305 0.451-0.746 0.804-1.323 1.059-0.573 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.501-1.044-0.527-1.72h1.814c0.027 0.355 0.136 0.65 0.328 0.885 0.193 0.235 0.443 0.411 0.751 0.527 0.312 0.116 0.66 0.174 1.044 0.174 0.401 0 0.753-0.06 1.054-0.179 0.305-0.122 0.544-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.264-0.766-4e-3 -0.265-0.082-0.483-0.234-0.656-0.153-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.955-0.319l-1.158-0.298c-0.839-0.215-1.502-0.542-1.989-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.163-1.125 0.487-1.576 0.329-0.451 0.774-0.801 1.338-1.049 0.563-0.252 1.201-0.378 1.914-0.378 0.722 0 1.355 0.126 1.899 0.378 0.547 0.248 0.976 0.595 1.288 1.039 0.311 0.441 0.472 0.948 0.482 1.521h-1.775zm5.701 7.383-2.873-10.182h1.983l1.835 7.482h0.094l1.959-7.482h1.805l1.964 7.487h0.089l1.835-7.487h1.983l-2.873 10.182h-1.82l-2.038-7.144h-0.08l-2.043 7.144h-1.82zm12.304 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm8.759 3.992v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm3.845 4.614v-10.182h6.623v1.546h-4.778v2.765h4.435v1.546h-4.435v2.779h4.817v1.546h-6.662zm-75.957 9.617c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.786-0.363-1.332-0.363-0.385 0-0.715 0.058-0.99 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.745 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.035-0.603-1.363-1.074-0.324-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.443 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.367-0.321-0.642-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.9 0.378 0.546 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.482 1.521h-1.774zm3.111-1.253v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm18.336 3.545c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.313-1.655h-1.859c-0.053-0.305-0.151-0.575-0.294-0.811-0.142-0.238-0.32-0.441-0.532-0.606-0.212-0.166-0.454-0.29-0.725-0.373-0.269-0.086-0.559-0.129-0.871-0.129-0.553 0-1.044 0.139-1.471 0.417-0.428 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.427 0.268 0.916 0.403 1.467 0.403 0.304 0 0.589-0.04 0.855-0.12 0.268-0.083 0.508-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.541-0.586 0.15-0.232 0.252-0.497 0.309-0.796l1.859 0.01c-0.07 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.806 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.397-0.621-0.702-0.415-1.256-1.013-1.66-1.795-0.405-0.782-0.607-1.72-0.607-2.814 0-1.097 0.204-2.035 0.612-2.814 0.407-0.782 0.963-1.38 1.665-1.795 0.703-0.414 1.498-0.621 2.387-0.621 0.566 0 1.093 0.08 1.581 0.239 0.487 0.159 0.921 0.392 1.302 0.701 0.381 0.305 0.695 0.679 0.94 1.123 0.248 0.441 0.411 0.945 0.487 1.512zm1.689 6.746v-10.182h1.845v4.678h0.124l3.972-4.678h2.252l-3.937 4.569 3.972 5.613h-2.217l-3.038-4.365-1.128 1.332v3.033h-1.845zm9.475 0v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.914-0.412-1.467-0.412-0.554 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.813 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182z"
                            fill="{{ $room == 84 ? 'white' : '#000' }}" />
                    </g>
                    <g id="LeAvi-Text" filter="url(#filter141_d_441_2)">
                        <path
                            d="m972.57 468v-10.182h1.844v8.636h4.485v1.546h-6.329zm7.929 0v-10.182h6.623v1.546h-4.778v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662zm13.284 0h-1.968l3.584-10.182h2.277l3.593 10.182h-1.972l-2.72-8.094h-0.079l-2.715 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm8.961-6.19 2.65 8.014h0.1l2.65-8.014h2.03l-3.59 10.182h-2.28l-3.59-10.182h2.03zm10.61 0v10.182h-1.84v-10.182h1.84zm3.31 10.182h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm7.08-4.644v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm9.69 8.636v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm14.92-10.182h1.85v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.17 0.462-0.84 0-1.56-0.154-2.18-0.462-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.52-1.195-0.52-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.22 0.279 0.46 0 0.87-0.093 1.21-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm3.85 10.182v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm-87.569 21.614v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm3.845 4.614v-10.182h6.622v1.546h-4.777v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662zm14.038-7.383c-0.047-0.434-0.242-0.772-0.587-1.014-0.341-0.242-0.786-0.363-1.332-0.363-0.385 0-0.715 0.058-0.99 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.745 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.792 0-1.48-0.123-2.063-0.368-0.58-0.245-1.035-0.603-1.363-1.074-0.324-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.443 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.233-0.656-0.153-0.175-0.367-0.321-0.642-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.9 0.378 0.546 0.248 0.976 0.595 1.287 1.039 0.312 0.441 0.473 0.948 0.482 1.521h-1.774zm3.111-1.253v-1.546h8.125v1.546h-3.15v8.636h-1.828v-8.636h-3.147zm9.765 8.636h-1.97l3.59-10.182h2.27l3.59 10.182h-1.97l-2.71-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm15.17-6.19h1.85v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.17 0.462-0.84 0-1.56-0.154-2.18-0.462-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.52-1.195-0.52-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.22 0.279 0.46 0 0.87-0.093 1.21-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm3.85 10.182v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm5.16 4.614h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm17.13-6.19v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm1.56 1.546v-1.546h8.12v1.546h-3.15v8.636h-1.82v-8.636h-3.15zm-50.88 23.747v-1.467l4.32-6.826h1.22v2.088h-0.74l-2.91 4.609v0.079h6.03v1.517h-7.92zm4.86 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm8.41 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.46-1.739-0.46-2.849s0.16-2.055 0.47-2.834c0.31-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.28-0.616 2.1-0.616s1.52 0.205 2.1 0.616c0.59 0.411 1.04 1.008 1.35 1.79s0.47 1.727 0.47 2.834c0 1.114-0.16 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.3-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.56 1.546-0.56 2.759 0 0.812 0.08 1.495 0.25 2.048 0.16 0.554 0.4 0.971 0.71 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.67 1.362 4.33-8.571v-0.07h-5.02v-1.541h6.93v1.576l-4.32 8.606h-1.92z"
                            fill="{{ $room == 85 ? 'white' : '#000' }}" />
                    </g>
                    <g id="UNIT-HOT-Text" filter="url(#filter142_d_441_2)">
                        <path
                            d="m1212.9 466.82h1.84v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.34 0.462-2.17 0.462s-1.56-0.154-2.18-0.462c-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.1 0.802 0.28 1.134 0.19 0.331 0.46 0.591 0.8 0.78 0.34 0.186 0.74 0.279 1.21 0.279s0.87-0.093 1.21-0.279c0.35-0.189 0.61-0.449 0.8-0.78 0.18-0.332 0.28-0.71 0.28-1.134v-6.498zm12.21 0v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm3.86 0v10.182h-1.85v-10.182h1.85zm1.55 1.546v-1.546h8.12v1.546h-3.15v8.636h-1.83v-8.636h-3.14zm13.16 8.636v-10.182h1.84v4.678h0.13l3.97-4.678h2.25l-3.93 4.569 3.97 5.613h-2.22l-3.04-4.365-1.13 1.332v3.033h-1.84zm11.32-10.182v10.182h-1.85v-10.182h1.85zm1.55 1.546v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm17.95 1.89h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.26-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.92 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.93 1.123 0.25 0.441 0.42 0.945 0.49 1.512zm1.69 6.746v-10.182h1.85v4.311h4.71v-4.311h1.85v10.182h-1.85v-4.325h-4.71v4.325h-1.85zm10.42 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm16.87-10.182v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.8 6.941h0.09v-6.941h1.83zm-67.66 22.091c0-1.243 0.16-2.385 0.49-3.425 0.33-1.044 0.82-2.009 1.48-2.894h1.69c-0.25 0.328-0.49 0.731-0.7 1.208-0.22 0.474-0.41 0.995-0.58 1.561-0.16 0.564-0.28 1.149-0.37 1.755-0.09 0.607-0.14 1.205-0.14 1.795 0 0.786 0.08 1.581 0.23 2.386 0.16 0.806 0.38 1.553 0.65 2.243 0.27 0.686 0.57 1.248 0.91 1.685h-1.69c-0.66-0.885-1.15-1.848-1.48-2.888-0.33-1.045-0.49-2.186-0.49-3.426zm5.14 5.091v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm19.51-5.091c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm2.7-3.545v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm12.82 3.545c0 1.24-0.16 2.381-0.5 3.426-0.32 1.04-0.81 2.003-1.47 2.888h-1.69c0.25-0.328 0.49-0.729 0.7-1.203 0.22-0.474 0.41-0.994 0.57-1.561s0.29-1.154 0.38-1.76c0.09-0.607 0.14-1.203 0.14-1.79 0-0.785-0.08-1.581-0.24-2.386-0.16-0.806-0.37-1.553-0.64-2.242-0.27-0.69-0.57-1.253-0.91-1.691h1.69c0.66 0.885 1.15 1.85 1.47 2.894 0.34 1.04 0.5 2.182 0.5 3.425z"
                            fill="{{ $room == 86 ? 'white' : '#000' }}" />
                    </g>
                    <g id="UNIT-COLD-Text" filter="url(#filter143_d_441_2)">
                        <path
                            d="m1372.9 466.82h1.84v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.34 0.462-2.17 0.462s-1.56-0.154-2.18-0.462c-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.1 0.802 0.28 1.134 0.19 0.331 0.46 0.591 0.8 0.78 0.34 0.186 0.74 0.279 1.21 0.279s0.87-0.093 1.21-0.279c0.35-0.189 0.61-0.449 0.8-0.78 0.18-0.332 0.28-0.71 0.28-1.134v-6.498zm12.21 0v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm3.86 0v10.182h-1.85v-10.182h1.85zm1.55 1.546v-1.546h8.12v1.546h-3.15v8.636h-1.83v-8.636h-3.14zm13.16 8.636v-10.182h1.84v4.678h0.13l3.97-4.678h2.25l-3.93 4.569 3.97 5.613h-2.22l-3.04-4.365-1.13 1.332v3.033h-1.84zm11.32-10.182v10.182h-1.85v-10.182h1.85zm1.55 1.546v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm17.95 1.89h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.26-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.92 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.93 1.123 0.25 0.441 0.42 0.945 0.49 1.512zm1.69 6.746v-10.182h1.85v4.311h4.71v-4.311h1.85v10.182h-1.85v-4.325h-4.71v4.325h-1.85zm10.42 0v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm16.87-10.182v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.8 6.941h0.09v-6.941h1.83zm-72.3 22.091c0-1.243 0.17-2.385 0.49-3.425 0.34-1.044 0.83-2.009 1.48-2.894h1.7c-0.26 0.328-0.49 0.731-0.71 1.208-0.22 0.474-0.41 0.995-0.57 1.561-0.16 0.564-0.29 1.149-0.38 1.755-0.09 0.607-0.13 1.205-0.13 1.795 0 0.786 0.07 1.581 0.23 2.386 0.16 0.806 0.37 1.553 0.64 2.243 0.27 0.686 0.58 1.248 0.92 1.685h-1.7c-0.65-0.885-1.14-1.848-1.48-2.888-0.32-1.045-0.49-2.186-0.49-3.426zm13.86-1.655h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.04 0.268-1.65 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm10.79 1.655c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h1.84v8.636h4.49v1.546h-6.33zm11.38 0h-3.45v-10.182h3.52c1.01 0 1.88 0.204 2.6 0.612 0.73 0.404 1.29 0.986 1.69 1.745 0.39 0.759 0.58 1.667 0.58 2.724 0 1.061-0.2 1.972-0.59 2.735-0.39 0.762-0.96 1.347-1.7 1.754-0.73 0.408-1.62 0.612-2.65 0.612zm-1.61-1.596h1.52c0.71 0 1.3-0.129 1.78-0.388 0.47-0.262 0.83-0.651 1.06-1.168 0.24-0.52 0.36-1.17 0.36-1.949s-0.12-1.425-0.36-1.939c-0.23-0.517-0.59-0.903-1.05-1.158-0.47-0.259-1.05-0.388-1.73-0.388h-1.58v6.99zm11.44-3.495c0 1.24-0.17 2.381-0.5 3.426-0.33 1.04-0.82 2.003-1.47 2.888h-1.7c0.26-0.328 0.49-0.729 0.71-1.203s0.41-0.994 0.57-1.561 0.28-1.154 0.37-1.76c0.1-0.607 0.14-1.203 0.14-1.79 0-0.785-0.08-1.581-0.24-2.386-0.15-0.806-0.37-1.553-0.64-2.242-0.27-0.69-0.57-1.253-0.91-1.691h1.7c0.65 0.885 1.14 1.85 1.47 2.894 0.33 1.04 0.5 2.182 0.5 3.425z"
                            fill="{{ $room == 87 ? 'white' : '#000' }}" />
                    </g>
                    <g id="SIHM-LAB-Text" filter="url(#filter144_d_441_2)">
                        <path
                            d="m1563 460.62c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.37-1.074c-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.41 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.18-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.08-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.73 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm5.4-2.799v10.182h-1.84v-10.182h1.84zm2 10.182v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm10.42-10.182h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.33l-2.81-6.98h-0.09v7.01h-1.77v-10.182zm-52.68 27.182v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.62 0h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h3.9c0.74 0 1.35 0.116 1.83 0.348 0.49 0.229 0.86 0.542 1.1 0.94 0.25 0.398 0.37 0.848 0.37 1.352 0 0.414-0.08 0.769-0.24 1.064-0.16 0.292-0.37 0.529-0.64 0.711s-0.57 0.313-0.9 0.393v0.099c0.36 0.02 0.71 0.131 1.04 0.333 0.33 0.199 0.61 0.481 0.82 0.845 0.21 0.365 0.32 0.806 0.32 1.323 0 0.527-0.13 1.001-0.38 1.422-0.26 0.417-0.64 0.747-1.16 0.989-0.51 0.242-1.16 0.363-1.94 0.363h-4.12zm1.85-1.541h1.98c0.67 0 1.15-0.128 1.45-0.383 0.3-0.259 0.44-0.59 0.44-0.994 0-0.302-0.07-0.574-0.22-0.816-0.15-0.245-0.36-0.437-0.64-0.576-0.27-0.143-0.6-0.214-0.98-0.214h-2.03v2.983zm0-4.311h1.82c0.32 0 0.61-0.058 0.86-0.174 0.26-0.119 0.46-0.286 0.6-0.502 0.15-0.218 0.23-0.477 0.23-0.775 0-0.395-0.14-0.719-0.42-0.975-0.28-0.255-0.69-0.383-1.23-0.383h-1.86v2.809zm16.45 0.761c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h3.82c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.53 4.614h-2.06l-2.48-4.614h2.01zm5.16 4.614h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm7.08-4.644v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm18.34 3.545c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.47 0.412-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm2.76-5.568h2.08l2.49 4.504h0.1l2.49-4.504h2.08l-3.7 6.384v3.798h-1.84v-3.798l-3.7-6.384zm-77.3 19.799c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.37-1.074c-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.4 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.18-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.08-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.73-1.026-0.73-1.755 0-0.6 0.17-1.125 0.49-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.73 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm3.11-1.253v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm18.34 3.545c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.31-1.655h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.73-0.373-0.26-0.086-0.55-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.24 0.531-0.37 1.178-0.37 1.944 0 0.779 0.13 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586s0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.93 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h1.85v4.678h0.12l3.97-4.678h2.26l-3.94 4.569 3.97 5.613h-2.22l-3.03-4.365-1.13 1.332v3.033h-1.85zm9.48 0v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182z"
                            fill="{{ $room == 88 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter145_d_441_2)">
                        <path
                            d="m744.19 711.25h-1.859c-0.053-0.305-0.151-0.575-0.293-0.811-0.143-0.238-0.32-0.441-0.532-0.606-0.213-0.166-0.455-0.29-0.726-0.373-0.269-0.086-0.559-0.129-0.87-0.129-0.554 0-1.044 0.139-1.472 0.417-0.427 0.275-0.762 0.68-1.004 1.213-0.242 0.531-0.363 1.178-0.363 1.944 0 0.779 0.121 1.435 0.363 1.969 0.245 0.53 0.58 0.931 1.004 1.203 0.428 0.268 0.917 0.403 1.467 0.403 0.305 0 0.59-0.04 0.855-0.12 0.268-0.083 0.509-0.203 0.721-0.363 0.215-0.159 0.396-0.354 0.542-0.586 0.149-0.232 0.251-0.497 0.308-0.796l1.859 0.01c-0.069 0.484-0.22 0.938-0.452 1.362-0.229 0.425-0.529 0.799-0.9 1.124-0.371 0.322-0.805 0.573-1.303 0.756-0.497 0.179-1.049 0.268-1.655 0.268-0.895 0-1.694-0.207-2.396-0.621-0.703-0.415-1.257-1.013-1.661-1.795s-0.607-1.72-0.607-2.814c0-1.097 0.204-2.035 0.612-2.814 0.408-0.782 0.963-1.38 1.665-1.795 0.703-0.414 1.499-0.621 2.387-0.621 0.567 0 1.094 0.08 1.581 0.239s0.921 0.392 1.302 0.701c0.382 0.305 0.695 0.679 0.94 1.123 0.249 0.441 0.411 0.945 0.487 1.512zm10.787 1.655c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.499 0.621-2.391 0.621s-1.69-0.207-2.396-0.621c-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621s1.689 0.207 2.391 0.621c0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.425-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.425 0.272 0.914 0.408 1.467 0.408 0.554 0 1.042-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.094l-2.814 6.965h-1.323l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm12.688 10.182v-10.182h3.818c0.782 0 1.438 0.146 1.969 0.438 0.533 0.291 0.936 0.692 1.208 1.203 0.275 0.507 0.412 1.084 0.412 1.73 0 0.653-0.137 1.233-0.412 1.74s-0.681 0.906-1.218 1.198c-0.537 0.288-1.199 0.433-1.984 0.433h-2.531v-1.517h2.282c0.458 0 0.832-0.079 1.124-0.238s0.507-0.378 0.646-0.657c0.143-0.278 0.214-0.598 0.214-0.959s-0.071-0.68-0.214-0.955c-0.139-0.275-0.356-0.488-0.651-0.641-0.292-0.156-0.668-0.234-1.129-0.234h-1.69v8.641h-1.844zm15.428-10.182h1.844v6.652c0 0.729-0.172 1.371-0.517 1.924-0.341 0.554-0.822 0.986-1.442 1.298-0.619 0.308-1.344 0.462-2.172 0.462-0.832 0-1.558-0.154-2.178-0.462-0.62-0.312-1.1-0.744-1.442-1.298-0.341-0.553-0.512-1.195-0.512-1.924v-6.652h1.845v6.498c0 0.424 0.093 0.802 0.278 1.134 0.189 0.331 0.454 0.591 0.796 0.78 0.341 0.186 0.745 0.279 1.213 0.279 0.467 0 0.871-0.093 1.213-0.279 0.345-0.189 0.61-0.449 0.795-0.78 0.186-0.332 0.279-0.71 0.279-1.134v-6.498zm3.402 1.546v-1.546h8.123v1.546h-3.147v8.636h-1.829v-8.636h-3.147zm9.689 8.636v-10.182h6.622v1.546h-4.777v2.765h4.434v1.546h-4.434v2.779h4.817v1.546h-6.662zm8.504 0v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.534 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.139 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.196 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.667-0.204-1.128-0.204h-1.69v8.641h-1.845zm5.26-4.614 2.521 4.614h-2.059l-2.476-4.614h2.014zm-83.531 21.614v-10.182h1.844v8.636h4.484v1.546h-6.328zm9.62 0h-1.969l3.584-10.182h2.277l3.59 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm8.759 3.992v-10.182h3.898c0.735 0 1.347 0.116 1.834 0.348 0.491 0.229 0.857 0.542 1.099 0.94 0.245 0.398 0.368 0.848 0.368 1.352 0 0.414-0.08 0.769-0.239 1.064-0.159 0.292-0.373 0.529-0.641 0.711-0.269 0.182-0.569 0.313-0.9 0.393v0.099c0.361 0.02 0.708 0.131 1.039 0.333 0.335 0.199 0.608 0.481 0.82 0.845 0.212 0.365 0.319 0.806 0.319 1.323 0 0.527-0.128 1.001-0.383 1.422-0.256 0.417-0.64 0.747-1.154 0.989-0.513 0.242-1.16 0.363-1.939 0.363h-4.121zm1.844-1.541h1.984c0.67 0 1.152-0.128 1.447-0.383 0.298-0.259 0.447-0.59 0.447-0.994 0-0.302-0.074-0.574-0.224-0.816-0.149-0.245-0.361-0.437-0.636-0.576-0.275-0.143-0.603-0.214-0.984-0.214h-2.034v2.983zm0-4.311h1.825c0.318 0 0.605-0.058 0.86-0.174 0.255-0.119 0.456-0.286 0.602-0.502 0.149-0.218 0.223-0.477 0.223-0.775 0-0.395-0.139-0.719-0.417-0.975-0.275-0.255-0.685-0.383-1.228-0.383h-1.865v2.809zm16.455 0.761c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.705-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598 5.091v-10.182h3.818c0.782 0 1.439 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.413 1.056 0.413 1.706 0 0.653-0.14 1.219-0.418 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.471c0.457 0 0.832-0.063 1.123-0.189 0.292-0.129 0.507-0.316 0.647-0.562 0.142-0.248 0.213-0.553 0.213-0.914 0-0.362-0.071-0.67-0.213-0.925-0.143-0.259-0.36-0.454-0.652-0.587-0.291-0.136-0.668-0.204-1.128-0.204h-1.691v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm5.153 4.614h-1.969l3.585-10.182h2.277l3.589 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.065-3.992h5.369v1.481h-5.369v-1.481zm7.08-4.644v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147zm18.337 3.545c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.599 5.091v-10.182h3.818c0.782 0 1.438 0.136 1.968 0.408 0.534 0.272 0.937 0.653 1.209 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.72v-1.531h2.471c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm2.753-5.568h2.083l2.49 4.504h0.1l2.491-4.504h2.083l-3.704 6.384v3.798h-1.84v-3.798l-3.703-6.384zm-49.702 25.293v-1.467l4.32-6.826h1.223v2.088h-0.746l-2.908 4.609v0.079h6.031v1.517h-7.92zm4.857 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm8.656-10.182v10.182h-1.845v-8.387h-0.059l-2.382 1.521v-1.69l2.531-1.626h1.755zm6.348 10.376c-0.818 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.311-0.789-0.467-1.739-0.467-2.849 3e-3 -1.11 0.161-2.055 0.472-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616 0.816 0 1.517 0.205 2.103 0.616 0.587 0.411 1.036 1.008 1.348 1.79 0.315 0.782 0.472 1.727 0.472 2.834 0 1.114-0.157 2.065-0.472 2.854-0.312 0.785-0.761 1.385-1.348 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.637 0 1.139-0.313 1.507-0.94 0.371-0.63 0.557-1.556 0.557-2.779 0-0.809-0.085-1.488-0.254-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.308-0.282-0.673-0.423-1.094-0.423-0.633 0-1.133 0.315-1.501 0.945-0.368 0.626-0.554 1.546-0.557 2.759-3e-3 0.812 0.078 1.495 0.244 2.048 0.169 0.554 0.407 0.971 0.716 1.253 0.308 0.279 0.674 0.418 1.098 0.418z"
                            fill="{{ $room == 95 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter146_d_441_2)">
                        <path id="OJT-Text"
                            d="m931.14 704.91c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.407-0.782-0.611-1.72-0.611-2.814 0-1.097 0.204-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.705 0.415 1.262 1.013 1.67 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.425 0.272-0.758 0.675-1 1.208-0.238 0.531-0.358 1.182-0.358 1.954s0.12 1.425 0.358 1.959c0.242 0.53 0.575 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.755-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm7.615-5.091h1.83v7.159c-3e-3 0.657-0.143 1.222-0.418 1.696-0.275 0.47-0.659 0.833-1.153 1.088-0.491 0.252-1.062 0.378-1.715 0.378-0.597 0-1.134-0.106-1.611-0.318-0.474-0.215-0.85-0.534-1.129-0.955-0.278-0.42-0.417-0.944-0.417-1.571h1.834c3e-3 0.276 0.063 0.513 0.179 0.711 0.119 0.199 0.284 0.352 0.492 0.458 0.209 0.106 0.449 0.159 0.721 0.159 0.295 0 0.545-0.061 0.751-0.184 0.205-0.126 0.361-0.312 0.467-0.557 0.11-0.245 0.166-0.547 0.169-0.905v-7.159zm3.383 1.546v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147zm-42.445 18.253c-0.046-0.434-0.241-0.772-0.586-1.014-0.342-0.242-0.786-0.363-1.333-0.363-0.384 0-0.714 0.058-0.989 0.174s-0.485 0.273-0.631 0.472-0.221 0.426-0.224 0.681c0 0.213 0.048 0.397 0.144 0.552 0.1 0.156 0.234 0.289 0.403 0.398 0.169 0.106 0.356 0.196 0.562 0.269 0.205 0.072 0.412 0.134 0.621 0.183l0.955 0.239c0.384 0.09 0.754 0.211 1.108 0.363 0.358 0.152 0.678 0.345 0.96 0.577 0.285 0.232 0.51 0.512 0.676 0.84s0.249 0.713 0.249 1.153c0 0.597-0.153 1.122-0.458 1.576-0.305 0.451-0.746 0.804-1.322 1.059-0.574 0.252-1.268 0.378-2.083 0.378-0.793 0-1.48-0.123-2.064-0.368-0.58-0.245-1.034-0.603-1.362-1.074-0.325-0.47-0.5-1.044-0.527-1.72h1.815c0.026 0.355 0.136 0.65 0.328 0.885s0.442 0.411 0.751 0.527c0.311 0.116 0.659 0.174 1.044 0.174 0.401 0 0.752-0.06 1.054-0.179 0.305-0.122 0.543-0.292 0.716-0.507 0.172-0.219 0.26-0.474 0.263-0.766-3e-3 -0.265-0.081-0.483-0.234-0.656-0.152-0.175-0.366-0.321-0.641-0.437-0.272-0.12-0.59-0.226-0.954-0.319l-1.159-0.298c-0.838-0.215-1.501-0.542-1.988-0.979-0.484-0.441-0.726-1.026-0.726-1.755 0-0.6 0.162-1.125 0.487-1.576 0.328-0.451 0.774-0.801 1.337-1.049 0.564-0.252 1.202-0.378 1.914-0.378 0.723 0 1.356 0.126 1.899 0.378 0.547 0.248 0.977 0.595 1.288 1.039 0.312 0.441 0.472 0.948 0.482 1.521h-1.775zm5.403-2.799v10.182h-1.844v-10.182h1.844zm1.998 0h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm19.106 0h1.844v6.652c0 0.729-0.172 1.371-0.517 1.924-0.341 0.554-0.822 0.986-1.442 1.298-0.62 0.308-1.344 0.462-2.172 0.462-0.832 0-1.558-0.154-2.178-0.462-0.62-0.312-1.1-0.744-1.442-1.298-0.341-0.553-0.512-1.195-0.512-1.924v-6.652h1.845v6.498c0 0.424 0.092 0.802 0.278 1.134 0.189 0.331 0.454 0.591 0.796 0.78 0.341 0.186 0.745 0.279 1.213 0.279 0.467 0 0.871-0.093 1.213-0.279 0.344-0.189 0.61-0.449 0.795-0.78 0.186-0.332 0.279-0.71 0.279-1.134v-6.498zm3.849 10.182v-10.182h1.844v8.636h4.485v1.546h-6.329zm9.62 0h-1.969l3.585-10.182h2.277l3.589 10.182h-1.969l-2.719-8.094h-0.08l-2.714 8.094zm0.064-3.992h5.37v1.481h-5.37v-1.481zm7.081-4.644v-1.546h8.124v1.546h-3.147v8.636h-1.83v-8.636h-3.147zm11.534-1.546v10.182h-1.844v-10.182h1.844zm11.096 5.091c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.392 0.621-0.891 0-1.69-0.207-2.396-0.621-0.703-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.967-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.396-0.621 0.892 0 1.689 0.207 2.392 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.855 0c0-0.772-0.121-1.423-0.363-1.954-0.238-0.533-0.57-0.936-0.994-1.208-0.424-0.275-0.913-0.412-1.467-0.412-0.553 0-1.042 0.137-1.466 0.412-0.424 0.272-0.758 0.675-1 1.208-0.238 0.531-0.357 1.182-0.357 1.954s0.119 1.425 0.357 1.959c0.242 0.53 0.576 0.933 1 1.208 0.424 0.272 0.913 0.408 1.466 0.408 0.554 0 1.043-0.136 1.467-0.408 0.424-0.275 0.756-0.678 0.994-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm11.966-5.091v10.182h-1.641l-4.798-6.935h-0.084v6.935h-1.845v-10.182h1.651l4.793 6.941h0.089v-6.941h1.835zm-65.167 27.182v-10.182h3.818c0.782 0 1.438 0.136 1.969 0.408 0.533 0.272 0.936 0.653 1.208 1.143 0.275 0.488 0.412 1.056 0.412 1.706 0 0.653-0.139 1.219-0.417 1.7-0.275 0.477-0.681 0.847-1.218 1.109-0.537 0.258-1.197 0.387-1.979 0.387h-2.719v-1.531h2.47c0.458 0 0.832-0.063 1.124-0.189 0.292-0.129 0.507-0.316 0.646-0.562 0.143-0.248 0.214-0.553 0.214-0.914 0-0.362-0.071-0.67-0.214-0.925-0.142-0.259-0.359-0.454-0.651-0.587-0.292-0.136-0.668-0.204-1.129-0.204h-1.69v8.641h-1.844zm5.26-4.614 2.52 4.614h-2.058l-2.476-4.614h2.014zm12.943-0.477c0 1.097-0.205 2.037-0.616 2.819-0.408 0.779-0.965 1.375-1.671 1.79-0.702 0.414-1.5 0.621-2.391 0.621-0.892 0-1.69-0.207-2.396-0.621-0.703-0.418-1.26-1.016-1.671-1.795-0.408-0.782-0.611-1.72-0.611-2.814 0-1.097 0.203-2.035 0.611-2.814 0.411-0.782 0.968-1.38 1.671-1.795 0.706-0.414 1.504-0.621 2.396-0.621 0.891 0 1.689 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.671 1.795 0.411 0.779 0.616 1.717 0.616 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm12.696 0c0 1.097-0.206 2.037-0.617 2.819-0.407 0.779-0.964 1.375-1.67 1.79-0.703 0.414-1.5 0.621-2.391 0.621-0.892 0-1.691-0.207-2.397-0.621-0.702-0.418-1.259-1.016-1.67-1.795-0.408-0.782-0.612-1.72-0.612-2.814 0-1.097 0.204-2.035 0.612-2.814 0.411-0.782 0.968-1.38 1.67-1.795 0.706-0.414 1.505-0.621 2.397-0.621 0.891 0 1.688 0.207 2.391 0.621 0.706 0.415 1.263 1.013 1.67 1.795 0.411 0.779 0.617 1.717 0.617 2.814zm-1.854 0c0-0.772-0.121-1.423-0.363-1.954-0.239-0.533-0.57-0.936-0.995-1.208-0.424-0.275-0.913-0.412-1.466-0.412-0.554 0-1.043 0.137-1.467 0.412-0.424 0.272-0.757 0.675-0.999 1.208-0.239 0.531-0.358 1.182-0.358 1.954s0.119 1.425 0.358 1.959c0.242 0.53 0.575 0.933 0.999 1.208 0.424 0.272 0.913 0.408 1.467 0.408 0.553 0 1.042-0.136 1.466-0.408 0.425-0.275 0.756-0.678 0.995-1.208 0.242-0.534 0.363-1.187 0.363-1.959zm3.598-5.091h2.257l3.023 7.378h0.119l3.023-7.378h2.257v10.182h-1.77v-6.995h-0.095l-2.814 6.965h-1.322l-2.814-6.98h-0.094v7.01h-1.77v-10.182zm-26.373 27.182v-10.182h1.844v4.311h4.718v-4.311h1.85v10.182h-1.85v-4.325h-4.718v4.325h-1.844zm10.134-1.889v-1.467l4.321-6.826h1.223v2.088h-0.746l-2.909 4.609v0.079h6.031v1.517h-7.92zm4.858 1.889v-2.337l0.019-0.656v-7.189h1.74v10.182h-1.759zm8.414 0.194c-0.819 0-1.521-0.207-2.108-0.622-0.583-0.417-1.032-1.019-1.347-1.804-0.312-0.789-0.468-1.739-0.468-2.849 4e-3 -1.11 0.161-2.055 0.473-2.834 0.315-0.782 0.764-1.379 1.347-1.79 0.587-0.411 1.288-0.616 2.103-0.616s1.516 0.205 2.103 0.616 1.036 1.008 1.347 1.79c0.315 0.782 0.473 1.727 0.473 2.834 0 1.114-0.158 2.065-0.473 2.854-0.311 0.785-0.76 1.385-1.347 1.799-0.583 0.415-1.284 0.622-2.103 0.622zm0-1.556c0.636 0 1.138-0.313 1.506-0.94 0.372-0.63 0.557-1.556 0.557-2.779 0-0.809-0.084-1.488-0.253-2.038-0.169-0.551-0.408-0.965-0.716-1.243-0.309-0.282-0.673-0.423-1.094-0.423-0.633 0-1.134 0.315-1.502 0.945-0.367 0.626-0.553 1.546-0.556 2.759-4e-3 0.812 0.078 1.495 0.243 2.048 0.169 0.554 0.408 0.971 0.716 1.253 0.308 0.279 0.675 0.418 1.099 0.418zm9.194 1.501c-0.739 0-1.396-0.124-1.969-0.373-0.57-0.248-1.018-0.588-1.342-1.019-0.322-0.434-0.481-0.926-0.478-1.476-3e-3 -0.428 0.09-0.821 0.279-1.179s0.444-0.656 0.765-0.895c0.325-0.242 0.686-0.396 1.084-0.462v-0.07c-0.524-0.116-0.948-0.382-1.273-0.8-0.321-0.421-0.48-0.906-0.477-1.457-3e-3 -0.523 0.143-0.991 0.438-1.402s0.699-0.734 1.213-0.969c0.513-0.239 1.1-0.358 1.76-0.358 0.653 0 1.234 0.119 1.745 0.358 0.513 0.235 0.918 0.558 1.213 0.969 0.298 0.411 0.447 0.879 0.447 1.402 0 0.551-0.164 1.036-0.492 1.457-0.325 0.418-0.744 0.684-1.258 0.8v0.07c0.398 0.066 0.756 0.22 1.074 0.462 0.322 0.239 0.577 0.537 0.766 0.895 0.192 0.358 0.288 0.751 0.288 1.179 0 0.55-0.162 1.042-0.487 1.476-0.325 0.431-0.772 0.771-1.343 1.019-0.566 0.249-1.218 0.373-1.953 0.373zm0-1.422c0.381 0 0.712-0.064 0.994-0.194 0.282-0.132 0.5-0.318 0.656-0.556 0.156-0.239 0.236-0.514 0.239-0.826-3e-3 -0.324-0.088-0.611-0.254-0.86-0.162-0.252-0.386-0.449-0.671-0.591-0.282-0.143-0.603-0.214-0.964-0.214-0.365 0-0.69 0.071-0.975 0.214-0.285 0.142-0.51 0.339-0.676 0.591-0.162 0.249-0.242 0.536-0.239 0.86-3e-3 0.312 0.073 0.587 0.229 0.826 0.156 0.235 0.375 0.419 0.656 0.551 0.285 0.133 0.62 0.199 1.005 0.199zm0-4.638c0.311 0 0.586-0.063 0.825-0.189 0.242-0.126 0.432-0.302 0.572-0.527 0.139-0.225 0.21-0.486 0.213-0.781-3e-3 -0.291-0.072-0.546-0.208-0.765-0.136-0.222-0.325-0.393-0.567-0.512-0.242-0.123-0.521-0.184-0.835-0.184-0.322 0-0.605 0.061-0.851 0.184-0.241 0.119-0.43 0.29-0.566 0.512-0.133 0.219-0.197 0.474-0.194 0.765-3e-3 0.295 0.063 0.556 0.199 0.781 0.139 0.222 0.329 0.398 0.571 0.527 0.246 0.126 0.526 0.189 0.841 0.189z"
                            fill="{{ $room == 93 ? 'white' : '#000' }}" />
                    </g>
                    <g id="Defense-Tactics-Text" filter="url(#filter147_d_441_2)">
                        <path
                            d="m1038.8 727h-3.45v-10.182h3.52c1.01 0 1.88 0.204 2.61 0.612 0.72 0.404 1.28 0.986 1.68 1.745 0.39 0.759 0.58 1.667 0.58 2.724 0 1.061-0.19 1.972-0.59 2.735-0.39 0.762-0.96 1.347-1.69 1.754-0.74 0.408-1.63 0.612-2.66 0.612zm-1.61-1.596h1.52c0.71 0 1.3-0.129 1.78-0.388 0.47-0.262 0.83-0.651 1.06-1.168 0.24-0.52 0.36-1.17 0.36-1.949s-0.12-1.425-0.36-1.939c-0.23-0.517-0.59-0.903-1.05-1.158-0.47-0.259-1.04-0.388-1.73-0.388h-1.58v6.99zm8.3 1.596v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm8.51 0v-10.182h6.52v1.546h-4.68v2.765h4.23v1.546h-4.23v4.325h-1.84zm8.2 0v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm16.87-10.182v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm7.55 2.799c-0.05-0.434-0.25-0.772-0.59-1.014s-0.79-0.363-1.33-0.363c-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363 0.35 0.152 0.67 0.345 0.96 0.577 0.28 0.232 0.51 0.512 0.67 0.84 0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.8 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.32-0.47-0.5-1.044-0.53-1.72h1.82c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.17-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.09-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.73-1.026-0.73-1.755 0-0.6 0.17-1.125 0.49-1.576 0.33-0.451 0.77-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm3.55 7.383v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm-53.93 8.364v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm9.77 8.636h-1.97l3.59-10.182h2.27l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm17-2.754h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.54-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.04 0.268-1.65 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.24-1.89v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm11.54-1.546v10.182h-1.85v-10.182h1.85zm10.71 3.436h-1.86c-0.05-0.305-0.15-0.575-0.3-0.811-0.14-0.238-0.31-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.26-1.013-1.66-1.795s-0.61-1.72-0.61-2.814c0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm7.22-0.637c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.38 0-0.71 0.058-0.99 0.174-0.27 0.116-0.48 0.273-0.63 0.472s-0.22 0.426-0.22 0.681c0 0.213 0.04 0.397 0.14 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.57 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577s0.51 0.512 0.68 0.84c0.16 0.328 0.24 0.713 0.24 1.153 0 0.597-0.15 1.122-0.45 1.576-0.31 0.451-0.75 0.804-1.33 1.059-0.57 0.252-1.26 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.36-1.074c-0.33-0.47-0.5-1.044-0.53-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.05 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.54-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.16-0.175-0.37-0.321-0.65-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.57-0.252 1.2-0.378 1.92-0.378s1.35 0.126 1.9 0.378c0.54 0.248 0.97 0.595 1.28 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77z"
                            fill="{{ $room == 89 ? 'white' : '#000' }}" />
                    </g>
                    <g id="ROOM-404-Text" filter="url(#filter148_d_441_2)">
                        <path
                            d="m1192 711.25h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.22-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.43 0.268 0.91 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.2 1.143c0.28 0.488 0.42 1.056 0.42 1.706 0 0.653-0.14 1.219-0.42 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.84-0.063 1.13-0.189 0.29-0.129 0.51-0.316 0.64-0.562 0.15-0.248 0.22-0.553 0.22-0.914 0-0.362-0.07-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.66-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm5.69-5.568v10.182h-1.84v-10.182h1.84zm2 0h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm14.53 0v10.182h-1.85v-10.182h1.85zm10.36 0v10.182h-1.64l-4.79-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.83zm11.11 5.091c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.6 5.091v-10.182h1.84v8.636h4.48v1.546h-6.32zm16.63-5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm10.42-1.839c-0.08-0.269-0.2-0.509-0.34-0.721-0.14-0.216-0.32-0.4-0.52-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.25-0.08-0.54-0.119-0.84-0.119-0.55 0-1.03 0.137-1.46 0.412s-0.77 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.96-0.1 1.34-0.299 0.38-0.198 0.68-0.48 0.88-0.845 0.21-0.368 0.31-0.799 0.31-1.292l0.42 0.064h-2.77v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.55 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.4 0.512-2.24 0.512-0.94 0-1.76-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.12-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.49-1.034 0.56-0.239 1.18-0.358 1.84-0.358 0.57 0 1.09 0.083 1.58 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.94 1.073 0.24 0.415 0.4 0.872 0.48 1.373h-1.88zm2.67-3.252h2.08l2.49 4.504h0.1l2.49-4.504h2.09l-3.71 6.384v3.798h-1.84v-3.798l-3.7-6.384zm-86.55 27.182v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.62 0h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h3.9c0.74 0 1.35 0.116 1.83 0.348 0.49 0.229 0.86 0.542 1.1 0.94 0.25 0.398 0.37 0.848 0.37 1.352 0 0.414-0.08 0.769-0.24 1.064-0.16 0.292-0.37 0.529-0.64 0.711s-0.57 0.313-0.9 0.393v0.099c0.36 0.02 0.71 0.131 1.04 0.333 0.33 0.199 0.61 0.481 0.82 0.845 0.21 0.365 0.32 0.806 0.32 1.323 0 0.527-0.13 1.001-0.38 1.422-0.26 0.417-0.64 0.747-1.16 0.989-0.51 0.242-1.16 0.363-1.94 0.363h-4.12zm1.85-1.541h1.98c0.67 0 1.15-0.128 1.45-0.383 0.3-0.259 0.44-0.59 0.44-0.994 0-0.302-0.07-0.574-0.22-0.816-0.15-0.245-0.36-0.437-0.64-0.576-0.27-0.143-0.6-0.214-0.98-0.214h-2.03v2.983zm0-4.311h1.82c0.32 0 0.61-0.058 0.86-0.174 0.26-0.119 0.46-0.286 0.6-0.502 0.15-0.218 0.23-0.477 0.23-0.775 0-0.395-0.14-0.719-0.42-0.975-0.28-0.255-0.69-0.383-1.23-0.383h-1.86v2.809zm16.45 0.761c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h3.82c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.53 4.614h-2.06l-2.48-4.614h2.01zm5.16 4.614h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm7.08-4.644v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm18.34 3.545c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.47 0.412-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm3.59 5.091v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.21 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.05l-2.48-4.614h2.01zm2.76-5.568h2.08l2.49 4.504h0.1l2.49-4.504h2.08l-3.7 6.384v3.798h-1.84v-3.798l-3.7-6.384zm-63.63 27.182v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.47 0.412-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.68 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.68 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.6-5.091h2.25l3.03 7.378h0.11l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.09v7.01h-1.77v-10.182zm20.2 0v10.182h-1.85v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.76zm-38.43 25.293v-1.467l4.32-6.826h1.22v2.088h-0.74l-2.91 4.609v0.079h6.03v1.517h-7.92zm4.85 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm8.42 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.46-1.739-0.46-2.849s0.16-2.055 0.47-2.834c0.31-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.28-0.616 2.1-0.616 0.81 0 1.52 0.205 2.1 0.616 0.59 0.411 1.04 1.008 1.35 1.79s0.47 1.727 0.47 2.834c0 1.114-0.16 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.64 0 1.14-0.313 1.51-0.94 0.37-0.63 0.55-1.556 0.55-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.31-0.282-0.67-0.423-1.09-0.423-0.63 0-1.13 0.315-1.5 0.945-0.37 0.626-0.56 1.546-0.56 2.759 0 0.812 0.08 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.31 0.279 0.68 0.418 1.1 0.418zm5.39-0.527v-1.467l4.32-6.826h1.22v2.088h-0.74l-2.91 4.609v0.079h6.03v1.517h-7.92zm4.86 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76z"
                            fill="{{ $room == 92 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter149_d_441_2)">
                        <path id="Interrogation-Room-Text"
                            d="m1363.6 713.82v10.182h-1.84v-10.182h1.84zm10.37 0v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm1.56 1.546v-1.546h8.12v1.546h-3.15v8.636h-1.82v-8.636h-3.15zm9.69 8.636v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm8.5 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm3.85 4.614v-10.182h3.82c0.78 0 1.43 0.136 1.96 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.13 1.219-0.41 1.7-0.28 0.477-0.68 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.13-0.189 0.29-0.129 0.5-0.316 0.64-0.562 0.14-0.248 0.22-0.553 0.22-0.914 0-0.362-0.08-0.67-0.22-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm10.42-1.839c-0.09-0.269-0.2-0.509-0.35-0.721-0.14-0.216-0.31-0.4-0.51-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412-0.42 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954 0.25 0.534 0.58 0.94 1.01 1.218 0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.35-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.3-0.799 0.3-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.24 0.512-0.93 0-1.76-0.21-2.47-0.631-0.7-0.424-1.25-1.026-1.65-1.805-0.4-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.34-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.57-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.58 0.249 0.48 0.162 0.92 0.394 1.29 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.87zm4.74 6.93h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm7.08-4.644v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm11.54-1.546v10.182h-1.85v-10.182h1.85zm11.09 5.091c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm11.96-5.091v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.66l4.79 6.941h0.09v-6.941h1.83zm-76.96 27.182v-10.182h3.81c0.79 0 1.44 0.136 1.97 0.408 0.54 0.272 0.94 0.653 1.21 1.143 0.28 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.41 1.7-0.28 0.477-0.69 0.847-1.22 1.109-0.54 0.258-1.2 0.387-1.98 0.387h-2.72v-1.531h2.47c0.46 0 0.83-0.063 1.12-0.189 0.3-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.14-0.259-0.36-0.454-0.65-0.587-0.29-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.84zm5.26-4.614 2.52 4.614h-2.06l-2.48-4.614h2.02zm12.94-0.477c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.25-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm12.69 0c0 1.097-0.2 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.42 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.12-1.423-0.37-1.954-0.23-0.533-0.57-0.936-0.99-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.42-0.275 0.76-0.678 0.99-1.208 0.25-0.534 0.37-1.187 0.37-1.959zm3.6-5.091h2.25l3.02 7.378h0.12l3.03-7.378h2.25v10.182h-1.77v-6.995h-0.09l-2.81 6.965h-1.33l-2.81-6.98h-0.1v7.01h-1.76v-10.182z"
                            fill="{{ $room == 94 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter150_d_441_2)">
                        <path
                            d="m1564.5 710.62c-0.05-0.434-0.24-0.772-0.59-1.014-0.34-0.242-0.78-0.363-1.33-0.363-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.42 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363s0.68 0.345 0.96 0.577 0.51 0.512 0.67 0.84c0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.06-0.368s-1.04-0.603-1.37-1.074c-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.41 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.18-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.08-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.72-1.026-0.72-1.755 0-0.6 0.16-1.125 0.48-1.576 0.33-0.451 0.78-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.73 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm5.4-2.799v10.182h-1.84v-10.182h1.84zm2 10.182v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm10.42-10.182h2.25l3.03 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.33l-2.81-6.98h-0.09v7.01h-1.77v-10.182zm-60.04 27.182v-10.182h1.85v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.85zm19.52-5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.25-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm10.02-5.091h1.85v6.652c0 0.729-0.18 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.18 0.462s-1.55-0.154-2.17-0.462c-0.62-0.312-1.1-0.744-1.45-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.28 1.134 0.18 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.21 0.279 0.47 0 0.88-0.093 1.22-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm9.38 2.799c-0.04-0.434-0.24-0.772-0.58-1.014s-0.79-0.363-1.34-0.363c-0.38 0-0.71 0.058-0.98 0.174-0.28 0.116-0.49 0.273-0.64 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.41 0.398 0.17 0.106 0.35 0.196 0.56 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.95 0.239c0.39 0.09 0.76 0.211 1.11 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84s0.25 0.713 0.25 1.153c0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.09 0.378-0.79 0-1.47-0.123-2.06-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.33-0.47-0.5-1.044-0.53-1.72h1.82c0.02 0.355 0.13 0.65 0.33 0.885 0.19 0.235 0.44 0.411 0.75 0.527s0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.55-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.96-0.319l-1.15-0.298c-0.84-0.215-1.51-0.542-1.99-0.979-0.49-0.441-0.73-1.026-0.73-1.755 0-0.6 0.16-1.125 0.49-1.576s0.77-0.801 1.34-1.049c0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.97 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.78zm3.56 7.383v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm8.51 0v-10.182h1.84v4.678h0.12l3.98-4.678h2.25l-3.94 4.569 3.97 5.613h-2.21l-3.04-4.365-1.13 1.332v3.033h-1.84zm9.47 0v-10.182h6.62v1.546h-4.77v2.765h4.43v1.546h-4.43v2.779h4.81v1.546h-6.66zm8.5 0v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm8.51 0v-10.182h3.82c0.78 0 1.44 0.146 1.97 0.438 0.53 0.291 0.93 0.692 1.2 1.203 0.28 0.507 0.42 1.084 0.42 1.73 0 0.653-0.14 1.233-0.42 1.74-0.27 0.507-0.68 0.906-1.21 1.198-0.54 0.288-1.2 0.433-1.99 0.433h-2.53v-1.517h2.28c0.46 0 0.84-0.079 1.13-0.238s0.5-0.378 0.64-0.657c0.15-0.278 0.22-0.598 0.22-0.959s-0.07-0.68-0.22-0.955c-0.14-0.275-0.35-0.488-0.65-0.641-0.29-0.156-0.67-0.234-1.13-0.234h-1.69v8.641h-1.84zm10.85-10.182v10.182h-1.84v-10.182h1.84zm10.37 0v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm8.83 3.252c-0.08-0.269-0.2-0.509-0.34-0.721-0.15-0.216-0.32-0.4-0.52-0.552-0.2-0.153-0.43-0.267-0.69-0.343-0.26-0.08-0.54-0.119-0.84-0.119-0.55 0-1.04 0.137-1.46 0.412-0.43 0.275-0.77 0.68-1.01 1.213-0.25 0.531-0.37 1.177-0.37 1.939 0 0.769 0.12 1.42 0.37 1.954 0.24 0.534 0.57 0.94 1.01 1.218 0.43 0.275 0.93 0.413 1.5 0.413 0.51 0 0.96-0.1 1.34-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.31-0.799 0.31-1.292l0.41 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.18 1.626-0.55 2.263-0.38 0.636-0.89 1.126-1.54 1.471-0.65 0.342-1.39 0.512-2.23 0.512-0.94 0-1.77-0.21-2.47-0.631-0.71-0.424-1.26-1.026-1.66-1.805-0.39-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.35-2.202 0.23-0.647 0.56-1.195 0.98-1.646 0.42-0.454 0.92-0.799 1.48-1.034 0.57-0.239 1.19-0.358 1.85-0.358 0.57 0 1.09 0.083 1.58 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.69 0.659 0.94 1.073 0.24 0.415 0.4 0.872 0.48 1.373h-1.88zm-88.11 23.93v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.72v-1.531h2.48c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.69-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.1l-2.81 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm15.88 8.293v-1.467l4.32-6.826h1.22v2.088h-0.75l-2.9 4.609v0.079h6.03v1.517h-7.92zm4.85 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm8.42 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.46-1.739-0.46-2.849s0.16-2.055 0.47-2.834c0.31-0.782 0.76-1.379 1.35-1.79 0.58-0.411 1.28-0.616 2.1-0.616 0.81 0 1.51 0.205 2.1 0.616s1.04 1.008 1.35 1.79 0.47 1.727 0.47 2.834c0 1.114-0.16 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.63 0 1.14-0.313 1.5-0.94 0.38-0.63 0.56-1.556 0.56-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.31-0.282-0.67-0.423-1.09-0.423-0.63 0-1.14 0.315-1.5 0.945-0.37 0.626-0.56 1.546-0.56 2.759 0 0.812 0.08 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.31 0.279 0.67 0.418 1.1 0.418zm5.57 1.362v-1.332l3.54-3.466c0.34-0.341 0.62-0.644 0.84-0.909 0.23-0.266 0.4-0.522 0.51-0.771s0.17-0.514 0.17-0.795c0-0.322-0.07-0.597-0.22-0.826-0.15-0.232-0.35-0.411-0.6-0.537-0.26-0.126-0.55-0.189-0.87-0.189-0.34 0-0.63 0.07-0.88 0.209-0.25 0.136-0.45 0.33-0.59 0.582-0.13 0.252-0.2 0.552-0.2 0.9h-1.76c0-0.647 0.15-1.208 0.45-1.686 0.29-0.477 0.7-0.846 1.21-1.108 0.52-0.262 1.12-0.393 1.79-0.393 0.69 0 1.29 0.128 1.8 0.383 0.52 0.255 0.92 0.605 1.21 1.049 0.28 0.444 0.43 0.951 0.43 1.521 0 0.381-0.07 0.756-0.22 1.124s-0.4 0.775-0.77 1.223c-0.37 0.447-0.88 0.989-1.54 1.625l-1.75 1.785v0.07h4.43v1.541h-6.98z"
                            fill="{{$room==96? 'white':'#000'}}" />
                    </g>
                    <g filter="url(#filter151_d_441_2)">
                        <path d="m1896 400v-20" stroke="#000" stroke-width="2" />
                    </g>
                    <g id="QUALITY-Text" filter="url(#filter164_d_441_2)">
                        <path
                            d="m1706.2 420.58h1.67l0.98 1.282 0.71 0.835 1.7 2.178h-1.79l-1.16-1.462-0.49-0.696-1.62-2.137zm5.3-1.671c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.68-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.42-0.782 0.97-1.38 1.68-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.47 0.412-0.42 0.272-0.75 0.675-0.99 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 0.99 1.208 0.43 0.272 0.92 0.408 1.47 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm10.03-5.091h1.84v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.34 0.462-2.17 0.462s-1.56-0.154-2.18-0.462c-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.51-1.195-0.51-1.924v-6.652h1.84v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.8 0.78 0.34 0.186 0.74 0.279 1.21 0.279s0.87-0.093 1.21-0.279c0.35-0.189 0.61-0.449 0.8-0.78 0.18-0.332 0.28-0.71 0.28-1.134v-6.498zm5.15 10.182h-1.97l3.59-10.182h2.28l3.58 10.182h-1.96l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm8.76 3.992v-10.182h1.84v8.636h4.48v1.546h-6.32zm9.77-10.182v10.182h-1.84v-10.182h1.84zm1.55 1.546v-1.546h8.12v1.546h-3.14v8.636h-1.83v-8.636h-3.15zm8.99-1.546h2.09l2.49 4.504h0.1l2.49-4.504h2.08l-3.7 6.384v3.798h-1.84v-3.798l-3.71-6.384zm-62.67 27.182h-1.97l3.59-10.182h2.27l3.59 10.182h-1.96l-2.72-8.094h-0.08l-2.72 8.094zm0.07-3.992h5.37v1.481h-5.37v-1.481zm14.12-3.391c-0.04-0.434-0.24-0.772-0.58-1.014s-0.79-0.363-1.33-0.363c-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.64 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.15 0.552 0.09 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.35 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.1 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84s0.25 0.713 0.25 1.153c0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.8 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.32-0.47-0.5-1.044-0.53-1.72h1.82c0.02 0.355 0.13 0.65 0.33 0.885 0.19 0.235 0.44 0.411 0.75 0.527s0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.55-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.96-0.319l-1.15-0.298c-0.84-0.215-1.51-0.542-1.99-0.979-0.49-0.441-0.73-1.026-0.73-1.755 0-0.6 0.16-1.125 0.49-1.576s0.77-0.801 1.34-1.049c0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.78zm9.1 0c-0.05-0.434-0.25-0.772-0.59-1.014s-0.79-0.363-1.33-0.363c-0.39 0-0.72 0.058-0.99 0.174-0.28 0.116-0.49 0.273-0.63 0.472-0.15 0.199-0.22 0.426-0.23 0.681 0 0.213 0.05 0.397 0.15 0.552 0.1 0.156 0.23 0.289 0.4 0.398 0.17 0.106 0.36 0.196 0.56 0.269 0.21 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.11 0.363 0.35 0.152 0.67 0.345 0.96 0.577 0.28 0.232 0.51 0.512 0.67 0.84 0.17 0.328 0.25 0.713 0.25 1.153 0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.74 0.804-1.32 1.059-0.57 0.252-1.27 0.378-2.08 0.378-0.79 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.32-0.47-0.5-1.044-0.52-1.72h1.81c0.03 0.355 0.14 0.65 0.33 0.885s0.44 0.411 0.75 0.527 0.66 0.174 1.04 0.174c0.4 0 0.76-0.06 1.06-0.179 0.3-0.122 0.54-0.292 0.71-0.507 0.17-0.219 0.26-0.474 0.27-0.766-0.01-0.265-0.09-0.483-0.24-0.656-0.15-0.175-0.36-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.95-0.319l-1.16-0.298c-0.84-0.215-1.5-0.542-1.99-0.979-0.48-0.441-0.73-1.026-0.73-1.755 0-0.6 0.17-1.125 0.49-1.576 0.33-0.451 0.77-0.801 1.34-1.049 0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.77zm9.97-2.799h1.85v6.652c0 0.729-0.17 1.371-0.52 1.924-0.34 0.554-0.82 0.986-1.44 1.298-0.62 0.308-1.35 0.462-2.17 0.462-0.84 0-1.56-0.154-2.18-0.462-0.62-0.312-1.1-0.744-1.44-1.298-0.34-0.553-0.52-1.195-0.52-1.924v-6.652h1.85v6.498c0 0.424 0.09 0.802 0.28 1.134 0.19 0.331 0.45 0.591 0.79 0.78 0.34 0.186 0.75 0.279 1.22 0.279 0.46 0 0.87-0.093 1.21-0.279 0.34-0.189 0.61-0.449 0.79-0.78 0.19-0.332 0.28-0.71 0.28-1.134v-6.498zm3.85 10.182v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.94 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.97 0.387h-2.72v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.65-0.587-0.3-0.136-0.67-0.204-1.13-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm5.16 4.614h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm17.13-6.19v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm10.72 3.436h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.22-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.26-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.39 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h6.62v1.546h-4.78v2.765h4.44v1.546h-4.44v2.779h4.82v1.546h-6.66zm-48.98 17h-1.97l3.58-10.182h2.28l3.59 10.182h-1.97l-2.72-8.094h-0.08l-2.71 8.094zm0.06-3.992h5.37v1.481h-5.37v-1.481zm17.13-6.19v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm5.46 10.182h-3.45v-10.182h3.52c1.01 0 1.88 0.204 2.6 0.612 0.73 0.404 1.29 0.986 1.68 1.745s0.59 1.667 0.59 2.724c0 1.061-0.2 1.972-0.59 2.735-0.39 0.762-0.96 1.347-1.7 1.754-0.73 0.408-1.62 0.612-2.65 0.612zm-1.61-1.596h1.52c0.71 0 1.3-0.129 1.77-0.388 0.48-0.262 0.83-0.651 1.07-1.168 0.24-0.52 0.36-1.17 0.36-1.949s-0.12-1.425-0.36-1.939c-0.24-0.517-0.59-0.903-1.06-1.158-0.46-0.259-1.04-0.388-1.73-0.388h-1.57v6.99zm-56.58 9.96v-1.546h8.13v1.546h-3.15v8.636h-1.83v-8.636h-3.15zm9.69 8.636v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm17.22-6.746h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.25 0.531-0.37 1.178-0.37 1.944 0 0.779 0.12 1.435 0.37 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.55-0.586 0.14-0.232 0.25-0.497 0.3-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.71-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.49-0.621 2.38-0.621 0.57 0 1.1 0.08 1.58 0.239 0.49 0.159 0.93 0.392 1.31 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.24 0.441 0.41 0.945 0.48 1.512zm1.69 6.746v-10.182h1.85v4.311h4.71v-4.311h1.85v10.182h-1.85v-4.325h-4.71v4.325h-1.85zm18.79-10.182v10.182h-1.64l-4.8-6.935h-0.09v6.935h-1.84v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm11.11 5.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h1.84v8.636h4.49v1.546h-6.33zm16.63-5.091c0 1.097-0.21 2.037-0.62 2.819-0.4 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.39-0.621c-0.71-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.62-1.72-0.62-2.814 0-1.097 0.21-2.035 0.62-2.814 0.41-0.782 0.96-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.27 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.85 0c0-0.772-0.13-1.423-0.37-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.04-0.136 1.47-0.408 0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.37-1.187 0.37-1.959zm10.41-1.839c-0.08-0.269-0.19-0.509-0.34-0.721-0.14-0.216-0.31-0.4-0.52-0.552-0.19-0.153-0.42-0.267-0.68-0.343-0.26-0.08-0.54-0.119-0.85-0.119-0.54 0-1.03 0.137-1.46 0.412s-0.76 0.68-1.01 1.213c-0.24 0.531-0.36 1.177-0.36 1.939 0 0.769 0.12 1.42 0.36 1.954s0.58 0.94 1.01 1.218c0.43 0.275 0.93 0.413 1.5 0.413 0.52 0 0.97-0.1 1.35-0.299 0.38-0.198 0.67-0.48 0.88-0.845 0.2-0.368 0.3-0.799 0.3-1.292l0.42 0.064h-2.76v-1.442h4.13v1.223c0 0.872-0.19 1.626-0.56 2.263-0.37 0.636-0.88 1.126-1.53 1.471-0.65 0.342-1.39 0.512-2.24 0.512-0.93 0-1.76-0.21-2.47-0.631-0.7-0.424-1.26-1.026-1.65-1.805-0.4-0.782-0.59-1.71-0.59-2.784 0-0.822 0.11-1.556 0.34-2.202 0.24-0.647 0.57-1.195 0.99-1.646 0.42-0.454 0.91-0.799 1.48-1.034 0.57-0.239 1.18-0.358 1.85-0.358 0.56 0 1.09 0.083 1.57 0.249 0.49 0.162 0.92 0.394 1.3 0.696 0.38 0.301 0.7 0.659 0.94 1.073 0.25 0.415 0.41 0.872 0.48 1.373h-1.88zm2.67-3.252h2.09l2.49 4.504h0.1l2.49-4.504h2.08l-3.7 6.384v3.798h-1.84v-3.798l-3.71-6.384zm-77.92 22.091c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.4-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-0.99-1.208-0.43-0.275-0.92-0.412-1.47-0.412s-1.04 0.137-1.47 0.412c-0.42 0.272-0.75 0.675-1 1.208-0.23 0.531-0.35 1.182-0.35 1.954s0.12 1.425 0.35 1.959c0.25 0.53 0.58 0.933 1 1.208 0.43 0.272 0.92 0.408 1.47 0.408s1.04-0.136 1.47-0.408c0.42-0.275 0.75-0.678 0.99-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h6.53v1.546h-4.68v2.765h4.23v1.546h-4.23v4.325h-1.85zm8.21 0v-10.182h6.52v1.546h-4.68v2.765h4.23v1.546h-4.23v4.325h-1.84zm10.04-10.182v10.182h-1.84v-10.182h1.84zm10.72 3.436h-1.86c-0.06-0.305-0.15-0.575-0.3-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.48 0.417-0.42 0.275-0.76 0.68-1 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.31 0 0.59-0.04 0.86-0.12 0.26-0.083 0.5-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.46 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.21-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239 0.48 0.159 0.92 0.392 1.3 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.68 6.746v-10.182h6.63v1.546h-4.78v2.765h4.43v1.546h-4.43v2.779h4.82v1.546h-6.67zm11.98 0v-10.182h3.82c0.78 0 1.44 0.136 1.97 0.408s0.93 0.653 1.21 1.143c0.27 0.488 0.41 1.056 0.41 1.706 0 0.653-0.14 1.219-0.42 1.7-0.27 0.477-0.68 0.847-1.22 1.109-0.53 0.258-1.19 0.387-1.98 0.387h-2.71v-1.531h2.47c0.45 0 0.83-0.063 1.12-0.189 0.29-0.129 0.51-0.316 0.65-0.562 0.14-0.248 0.21-0.553 0.21-0.914 0-0.362-0.07-0.67-0.21-0.925-0.15-0.259-0.36-0.454-0.66-0.587-0.29-0.136-0.66-0.204-1.12-0.204h-1.69v8.641h-1.85zm5.26-4.614 2.52 4.614h-2.06l-2.47-4.614h2.01zm12.94-0.477c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621-0.9 0-1.69-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.5-0.621 2.4-0.621 0.89 0 1.69 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.7 0c0 1.097-0.21 2.037-0.62 2.819-0.41 0.779-0.96 1.375-1.67 1.79-0.7 0.414-1.5 0.621-2.39 0.621s-1.69-0.207-2.4-0.621c-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.51-0.621 2.4-0.621s1.69 0.207 2.39 0.621c0.71 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.62 1.717 0.62 2.814zm-1.86 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.04 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.43 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6-5.091h2.26l3.02 7.378h0.12l3.02-7.378h2.26v10.182h-1.77v-6.995h-0.09l-2.82 6.965h-1.32l-2.82-6.98h-0.09v7.01h-1.77v-10.182zm-56.62 25.293v-1.467l4.32-6.826h1.22v2.088h-0.75l-2.91 4.609v0.079h6.03v1.517h-7.91zm4.85 1.889v-2.337l0.02-0.656v-7.189h1.74v10.182h-1.76zm8.42 0.194c-0.82 0-1.52-0.207-2.11-0.622-0.58-0.417-1.03-1.019-1.35-1.804-0.31-0.789-0.47-1.739-0.47-2.849 0.01-1.11 0.17-2.055 0.48-2.834 0.31-0.782 0.76-1.379 1.34-1.79 0.59-0.411 1.29-0.616 2.11-0.616 0.81 0 1.51 0.205 2.1 0.616s1.04 1.008 1.35 1.79 0.47 1.727 0.47 2.834c0 1.114-0.16 2.065-0.47 2.854-0.31 0.785-0.76 1.385-1.35 1.799-0.58 0.415-1.28 0.622-2.1 0.622zm0-1.556c0.63 0 1.14-0.313 1.5-0.94 0.37-0.63 0.56-1.556 0.56-2.779 0-0.809-0.08-1.488-0.25-2.038-0.17-0.551-0.41-0.965-0.72-1.243-0.31-0.282-0.67-0.423-1.09-0.423-0.64 0-1.14 0.315-1.5 0.945-0.37 0.626-0.56 1.546-0.56 2.759 0 0.812 0.08 1.495 0.24 2.048 0.17 0.554 0.41 0.971 0.72 1.253 0.31 0.279 0.67 0.418 1.1 0.418zm9.71-8.82v10.182h-1.84v-8.387h-0.06l-2.38 1.521v-1.69l2.53-1.626h1.75zm7.24 4.35v1.482h-4.59v-1.482h4.59zm1.97 5.832v-10.182h3.9c0.73 0 1.34 0.116 1.83 0.348 0.49 0.229 0.86 0.542 1.1 0.94s0.37 0.848 0.37 1.352c0 0.414-0.08 0.769-0.24 1.064-0.16 0.292-0.37 0.529-0.64 0.711s-0.57 0.313-0.9 0.393v0.099c0.36 0.02 0.71 0.131 1.04 0.333 0.33 0.199 0.61 0.481 0.82 0.845 0.21 0.365 0.32 0.806 0.32 1.323 0 0.527-0.13 1.001-0.39 1.422-0.25 0.417-0.64 0.747-1.15 0.989s-1.16 0.363-1.94 0.363h-4.12zm1.84-1.541h1.99c0.67 0 1.15-0.128 1.44-0.383 0.3-0.259 0.45-0.59 0.45-0.994 0-0.302-0.07-0.574-0.22-0.816-0.15-0.245-0.36-0.437-0.64-0.576-0.27-0.143-0.6-0.214-0.98-0.214h-2.04v2.983zm0-4.311h1.83c0.32 0 0.6-0.058 0.86-0.174 0.25-0.119 0.45-0.286 0.6-0.502 0.15-0.218 0.22-0.477 0.22-0.775 0-0.395-0.14-0.719-0.41-0.975-0.28-0.255-0.69-0.383-1.23-0.383h-1.87v2.809z"
                            fill="{{ $room == 90 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter165_d_441_2)">
                        <path id="Clinic-Text"
                            d="m1824.8 450.62c-0.04-0.434-0.24-0.772-0.58-1.014s-0.79-0.363-1.34-0.363c-0.38 0-0.71 0.058-0.98 0.174-0.28 0.116-0.49 0.273-0.64 0.472-0.14 0.199-0.22 0.426-0.22 0.681 0 0.213 0.05 0.397 0.14 0.552 0.1 0.156 0.24 0.289 0.41 0.398 0.17 0.106 0.35 0.196 0.56 0.269 0.2 0.072 0.41 0.134 0.62 0.183l0.96 0.239c0.38 0.09 0.75 0.211 1.1 0.363 0.36 0.152 0.68 0.345 0.96 0.577 0.29 0.232 0.51 0.512 0.68 0.84s0.25 0.713 0.25 1.153c0 0.597-0.15 1.122-0.46 1.576-0.3 0.451-0.75 0.804-1.32 1.059-0.58 0.252-1.27 0.378-2.08 0.378-0.8 0-1.48-0.123-2.07-0.368-0.58-0.245-1.03-0.603-1.36-1.074-0.33-0.47-0.5-1.044-0.53-1.72h1.82c0.02 0.355 0.13 0.65 0.33 0.885 0.19 0.235 0.44 0.411 0.75 0.527s0.66 0.174 1.04 0.174c0.4 0 0.75-0.06 1.05-0.179 0.31-0.122 0.55-0.292 0.72-0.507 0.17-0.219 0.26-0.474 0.26-0.766 0-0.265-0.08-0.483-0.23-0.656-0.15-0.175-0.37-0.321-0.64-0.437-0.27-0.12-0.59-0.226-0.96-0.319l-1.15-0.298c-0.84-0.215-1.51-0.542-1.99-0.979-0.49-0.441-0.73-1.026-0.73-1.755 0-0.6 0.16-1.125 0.49-1.576s0.77-0.801 1.34-1.049c0.56-0.252 1.2-0.378 1.91-0.378 0.72 0 1.36 0.126 1.9 0.378 0.55 0.248 0.98 0.595 1.29 1.039 0.31 0.441 0.47 0.948 0.48 1.521h-1.78zm12.28 0.637h-1.86c-0.05-0.305-0.15-0.575-0.3-0.811-0.14-0.238-0.31-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.72-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.56 0-1.05 0.139-1.47 0.417-0.43 0.275-0.77 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.42 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.38 0.322-0.81 0.573-1.31 0.756-0.49 0.179-1.05 0.268-1.65 0.268-0.9 0-1.7-0.207-2.4-0.621-0.7-0.415-1.26-1.013-1.66-1.795s-0.61-1.72-0.61-2.814c0-1.097 0.21-2.035 0.62-2.814 0.4-0.782 0.96-1.38 1.66-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.56 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h1.84v4.311h4.72v-4.311h1.85v10.182h-1.85v-4.325h-4.72v4.325h-1.84zm19.51-5.091c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.4 0.621-0.89 0-1.69-0.207-2.39-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.39-0.621 0.9 0 1.69 0.207 2.4 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.47-0.412-0.55 0-1.04 0.137-1.46 0.412-0.43 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.57 0.933 1 1.208 0.42 0.272 0.91 0.408 1.46 0.408 0.56 0 1.05-0.136 1.47-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm12.69 0c0 1.097-0.2 2.037-0.61 2.819-0.41 0.779-0.97 1.375-1.67 1.79-0.71 0.414-1.5 0.621-2.39 0.621-0.9 0-1.69-0.207-2.4-0.621-0.7-0.418-1.26-1.016-1.67-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.71-0.414 1.5-0.621 2.4-0.621 0.89 0 1.68 0.207 2.39 0.621 0.7 0.415 1.26 1.013 1.67 1.795 0.41 0.779 0.61 1.717 0.61 2.814zm-1.85 0c0-0.772-0.12-1.423-0.36-1.954-0.24-0.533-0.57-0.936-1-1.208-0.42-0.275-0.91-0.412-1.46-0.412-0.56 0-1.05 0.137-1.47 0.412-0.42 0.272-0.76 0.675-1 1.208-0.24 0.531-0.36 1.182-0.36 1.954s0.12 1.425 0.36 1.959c0.24 0.53 0.58 0.933 1 1.208 0.42 0.272 0.91 0.408 1.47 0.408 0.55 0 1.04-0.136 1.46-0.408 0.43-0.275 0.76-0.678 1-1.208 0.24-0.534 0.36-1.187 0.36-1.959zm3.6 5.091v-10.182h1.84v8.636h4.49v1.546h-6.33zm-36.52 10.254h-1.86c-0.05-0.305-0.15-0.575-0.29-0.811-0.15-0.238-0.32-0.441-0.53-0.606-0.22-0.166-0.46-0.29-0.73-0.373-0.27-0.086-0.56-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1.01 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.25 0.53 0.58 0.931 1.01 1.203 0.43 0.268 0.91 0.403 1.46 0.403 0.31 0 0.59-0.04 0.86-0.12 0.27-0.083 0.51-0.203 0.72-0.363 0.22-0.159 0.4-0.354 0.54-0.586 0.15-0.232 0.25-0.497 0.31-0.796l1.86 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.81 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.9 0-1.69-0.207-2.4-0.621-0.7-0.415-1.25-1.013-1.66-1.795-0.4-0.782-0.6-1.72-0.6-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.96-1.38 1.66-1.795 0.71-0.414 1.5-0.621 2.39-0.621 0.57 0 1.09 0.08 1.58 0.239s0.92 0.392 1.3 0.701c0.38 0.305 0.7 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.49 1.512zm1.69 6.746v-10.182h1.84v8.636h4.49v1.546h-6.33zm9.77-10.182v10.182h-1.84v-10.182h1.84zm10.37 0v10.182h-1.64l-4.8-6.935h-0.08v6.935h-1.85v-10.182h1.65l4.79 6.941h0.09v-6.941h1.84zm3.85 0v10.182h-1.84v-10.182h1.84zm10.71 3.436h-1.85c-0.06-0.305-0.16-0.575-0.3-0.811-0.14-0.238-0.32-0.441-0.53-0.606-0.21-0.166-0.45-0.29-0.73-0.373-0.26-0.086-0.55-0.129-0.87-0.129-0.55 0-1.04 0.139-1.47 0.417-0.43 0.275-0.76 0.68-1 1.213-0.24 0.531-0.36 1.178-0.36 1.944 0 0.779 0.12 1.435 0.36 1.969 0.24 0.53 0.58 0.931 1 1.203 0.43 0.268 0.92 0.403 1.47 0.403 0.3 0 0.59-0.04 0.85-0.12 0.27-0.083 0.51-0.203 0.73-0.363 0.21-0.159 0.39-0.354 0.54-0.586s0.25-0.497 0.31-0.796l1.85 0.01c-0.07 0.484-0.22 0.938-0.45 1.362-0.23 0.425-0.53 0.799-0.9 1.124-0.37 0.322-0.8 0.573-1.3 0.756-0.5 0.179-1.05 0.268-1.66 0.268-0.89 0-1.69-0.207-2.39-0.621-0.7-0.415-1.26-1.013-1.66-1.795-0.41-0.782-0.61-1.72-0.61-2.814 0-1.097 0.2-2.035 0.61-2.814 0.41-0.782 0.97-1.38 1.67-1.795 0.7-0.414 1.5-0.621 2.38-0.621 0.57 0 1.1 0.08 1.59 0.239 0.48 0.159 0.92 0.392 1.3 0.701 0.38 0.305 0.69 0.679 0.94 1.123 0.25 0.441 0.41 0.945 0.48 1.512z"
                            fill="{{ $room == 91 ? 'white' : '#000' }}" />
                    </g>
                    <g filter="url(#filter166_d_441_2)">
                        <line x1="570" x2="545" y1="401" y2="401" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter167_d_441_2)">
                        <path d="m486 359h-31" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter168_d_441_2)">
                        <line x1="1896" x2="1976" y1="658" y2="658" stroke="#000"
                            stroke-width="4" />
                    </g>
                    <g filter="url(#filter169_d_441_2)">
                        <line x1="536" x2="594" y1="359" y2="359" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter170_d_441_2)">
                        <path d="m487 339.7v20.3" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter171_d_441_2)">
                        <line x1="537" x2="537" y1="339.7" y2="359.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter172_d_441_2)">
                        <path d="m487.5 340.7c14.763 5.579 20.24 7.866 24 18" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter173_d_441_2)">
                        <path d="m536.5 340.7c-14.763 5.579-19.24 7.366-23 17.5" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter174_d_441_2)">
                        <line x1="537" x2="537" y1="339.7" y2="359.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter175_d_441_2)">
                        <line x1="537" x2="537" y1="339.7" y2="359.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter176_d_441_2)">
                        <line x1="537" x2="537" y1="339.7" y2="359.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter177_d_441_2)">
                        <line x1="537" x2="537" y1="339.7" y2="359.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter178_d_441_2)">
                        <path d="m510.5 358.7h4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter179_d_441_2)">
                        <path d="M438.7 599.5H459" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter180_d_441_2)">
                        <line x1="438.7" x2="458.7" y1="549.5" y2="549.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter181_d_441_2)">
                        <path d="m439.7 599c5.579-14.763 7.866-20.24 18-24" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter182_d_441_2)">
                        <path d="m439.7 550c5.579 14.763 7.366 19.24 17.5 23" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter183_d_441_2)">
                        <line x1="438.7" x2="458.7" y1="549.5" y2="549.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter184_d_441_2)">
                        <line x1="438.7" x2="458.7" y1="549.5" y2="549.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter185_d_441_2)">
                        <line x1="438.7" x2="458.7" y1="549.5" y2="549.5" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter186_d_441_2)">
                        <path d="M438.7 549.5H459" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter187_d_441_2)">
                        <path d="m457.7 576v-4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter188_d_441_2)">
                        <line x1="594" x2="594" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter189_d_441_2)">
                        <line x1="644" x2="644" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter190_d_441_2)">
                        <path d="m594.5 540.7c14.763 5.579 20.24 7.866 24 18" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter191_d_441_2)">
                        <path d="m643.5 540.7c-14.763 5.579-19.24 7.366-23 17.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter192_d_441_2)">
                        <line x1="594" x2="594" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter193_d_441_2)">
                        <line x1="644" x2="644" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter194_d_441_2)">
                        <line x1="594" x2="594" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter195_d_441_2)">
                        <line x1="644" x2="644" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter196_d_441_2)">
                        <line x1="594" x2="594" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter197_d_441_2)">
                        <line x1="644" x2="644" y1="539.7" y2="559.7" stroke="#000"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter198_d_441_2)">
                        <path d="M594 539.7V560" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter199_d_441_2)">
                        <path d="M644 539.7V560" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter200_d_441_2)">
                        <path d="m979 538.7c14.763 5.579 20.24 7.866 24 18" stroke="#000" stroke-dasharray="2 2"
                            stroke-width="2" />
                    </g>
                    <g filter="url(#filter201_d_441_2)">
                        <path d="m1026.2 540.58c-14.76 5.579-19.24 7.366-23 17.5" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter202_d_441_2)">
                        <path d="m979 539v20" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter203_d_441_2)">
                        <path d="m1027 540v20.3" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter204_d_441_2)">
                        <path d="m617.5 558.7h4" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter205_d_441_2)">
                        <rect x="373" y="358" width="82" height="60" fill="#D9D9D9" />
                        <rect x="374" y="359" width="80" height="58" stroke="#000" stroke-width="2" />
                    </g>
                    <g filter="url(#filter206_d_441_2)">
                        <rect transform="rotate(180 446 409)" x="446" y="409" width="65" height="42"
                            fill="#000" />
                    </g>
                    <g filter="url(#filter207_d_441_2)">
                        <path d="m404.76 399v-23.273h14.045v2.5h-11.227v7.864h10.5v2.5h-10.5v7.909h11.409v2.5h-14.227z"
                            fill="#fff" />
                    </g>
                    <g filter="url(#filter208_d_441_2)">
                        <path d="m1109.6 648.65c0.22 12.695 4.56 19.175 19.22 23.124" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <g filter="url(#filter209_d_441_2)">
                        <path d="m1130.8 671.7c12.36-2.919 17.77-8.534 18.51-23.703" stroke="#000"
                            stroke-dasharray="2 2" stroke-width="2" />
                    </g>
                    <defs>
                        <filter id="filter0_d_441_2" x="94" y="806" width="1884" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter1_d_441_2" x="90" y="357" width="12" height="461"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter2_d_441_2" x="1967" y="659.97" width="12.974" height="158.03"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter3_d_441_2" x="590" y="356" width="1394" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter4_d_441_2" x="1971" y="360" width="13" height="248.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter5_d_441_2" x="1927" y="768" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter6_d_441_2" x="1886" y="728" width="49" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter7_d_441_2" x="1927" y="758" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter8_d_441_2" x="621" y="520" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter9_d_441_2" x="369" y="418" width="83" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter10_d_441_2" x="541" y="430" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter11_d_441_2" x="621" y="460" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter12_d_441_2" x="621" y="450" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter13_d_441_2" x="621" y="440" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter14_d_441_2" x="611" y="430" width="18.558" height="108.05"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter15_d_441_2" x="621" y="430" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter16_d_441_2" x="541" y="510" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter17_d_441_2" x="541" y="500" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter18_d_441_2" x="541" y="490" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter19_d_441_2" x="541" y="480" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter20_d_441_2" x="541" y="470" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter21_d_441_2" x="541" y="460" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter22_d_441_2" x="541" y="450" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter23_d_441_2" x="541" y="440" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter24_d_441_2" x="621" y="510" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter25_d_441_2" x="621" y="500" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter26_d_441_2" x="621" y="490" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter27_d_441_2" x="621" y="480" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter28_d_441_2" x="621" y="470" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter29_d_441_2" x="541" y="520" width="78" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter30_d_441_2" x="1927" y="748" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter31_d_441_2" x="1927" y="738" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter32_d_441_2" x="1927" y="728" width="49" height="18"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter33_d_441_2" x="1918" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter34_d_441_2" x="1864" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter35_d_441_2" x="1855" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter36_d_441_2" x="1846" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter37_d_441_2" x="1909" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter38_d_441_2" x="1900" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter39_d_441_2" x="1891" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter40_d_441_2" x="1882" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter41_d_441_2" x="1873" y="768" width="17" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter42_d_441_2" x="1869" y="660" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter43_d_441_2" x="566" y="375" width="108" height="48"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter44_d_441_2" x="1907.2" y="673.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter45_d_441_2" x="602.21" y="388.82" width="36.134" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter46_d_441_2" x="1891" y="600" width="92" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter47_d_441_2" x="1891" y="600" width="12" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter48_d_441_2" x="1912" y="400" width="68" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter49_d_441_2" x="1890" y="400" width="11" height="129.51"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter50_d_441_2" x="666" y="400" width="1233" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter51_d_441_2" x="1794.2" y="401" width="10" height="129.01"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter52_d_441_2" x="1651" y="400" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter53_d_441_2" x="1672" y="520" width="208.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter54_d_441_2" x="1491" y="400" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter55_d_441_2" x="691" y="400" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter56_d_441_2" x="1171" y="400" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter57_d_441_2" x="1331" y="400" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter58_d_441_2" x="851" y="400" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter59_d_441_2" x="1650.5" y="648" width="13" height="170"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter60_d_441_2" x="851" y="650" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter61_d_441_2" x="691" y="650" width="13" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter62_d_441_2" x="1332" y="649" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter63_d_441_2" x="1491" y="650" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter64_d_441_2" x="997" y="650" width="10" height="168"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter65_d_441_2" x="1124" y="647.99" width="11" height="167.01"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter66_d_441_2" x="1488.5" y="558" width="153" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter67_d_441_2" x="712" y="558" width="149" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter68_d_441_2" x="712" y="648" width="128" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter69_d_441_2" x="872" y="648" width="111" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter70_d_441_2" x="1019" y="647" width="96.023" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter71_d_441_2" x="1143" y="647" width="177.51" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter72_d_441_2" x="1351" y="648" width="149" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter73_d_441_2" x="1491" y="648" width="149" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter74_d_441_2" x="870" y="558" width="113" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter75_d_441_2" x="1023" y="558" width="157.51" height="11"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter76_d_441_2" x="1171" y="558" width="149" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter77_d_441_2" x="1352" y="558" width="148" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter78_d_441_2" x="641" y="558" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter79_d_441_2" x="541" y="360" width="10" height="208"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter80_d_441_2" x="541" y="558" width="58" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter81_d_441_2" x="453" y="650" width="246" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter82_d_441_2" x="369" y="438" width="93" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter83_d_441_2" x="406" y="418" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter84_d_441_2" x="369" y="416.24" width="45.951" height="29.76"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter85_d_441_2" x="369" y="418" width="45.951" height="29.76"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter86_d_441_2" x="411.4" y="423.82" width="35.651" height="18.182"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter87_d_441_2" x="367" y="7" width="12" height="361"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter88_d_441_2" x="587" y="10" width="12" height="358"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter89_d_441_2" x="367" y="6" width="232" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter90_d_441_2" x="491" y="10" width="10" height="19.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter91_d_441_2" x="371" y="208" width="29" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter92_d_441_2" x="491" y="38" width="10" height="120"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter93_d_441_2" x="491" y="98" width="108" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter94_d_441_2" x="371" y="98" width="108" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter95_d_441_2" x="411" y="208" width="138" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter96_d_441_2" x="539" y="40" width="10" height="178"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter97_d_441_2" x="526" y="40" width="23" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter98_d_441_2" x="491" y="180" width="10" height="38"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter99_d_441_2" x="481" y="210" width="10" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter100_d_441_2" x="481" y="268" width="118" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter101_d_441_2" x="511" y="148" width="38" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter102_d_441_2" x="541" y="270" width="10" height="43.74"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter103_d_441_2" x="541" y="323.5" width="10" height="44.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter104_d_441_2" x="480.99" y="208.25" width="114.99" height="68.626"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter105_d_441_2" x="482.52" y="208.24" width="116.48" height="68.632"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter106_d_441_2" x="540.58" y="99.109" width="56.341" height="118.28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter107_d_441_2" x="539.08" y="99.111" width="56.342" height="118.78"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter108_d_441_2" x="381.1" y="262.82" width="102.25" height="52.321"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter109_d_441_2" x="388.52" y="132.68" width="82.619" height="52.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter110_d_441_2" x="403.38" y="39.679" width="57.598" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter111_d_441_2" x="90" y="356" width="289.01" height="12.965"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter112_d_441_2" x="190.16" y="582.31" width="172.62" height="25.932"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter113_d_441_2" x="452" y="439.98" width="11" height="118.02"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter114_d_441_2" x="453" y="600" width="10" height="58"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter115_d_441_2" x="392" y="188.5" width="10" height="29.5"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter116_d_441_2" x="392.21" y="188.66" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter117_d_441_2" x="691.86" y="539.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter118_d_441_2" x="691.86" y="647.86" width="29.135" height="29.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter119_d_441_2" x="830.01" y="648.36" width="29.635" height="30.625"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter120_d_441_2" x="1631" y="647.86" width="29.593" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter121_d_441_2" x="1310.5" y="648.86" width="29.093" height="30.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter122_d_441_2" x="974.97" y="647.86" width="29.093" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter123_d_441_2" x="1331.9" y="648.86" width="29.135" height="30.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter124_d_441_2" x="997.61" y="647.86" width="29.635" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter125_d_441_2" x="851.86" y="647.86" width="29.635" height="31.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter126_d_441_2" x="1631.5" y="539.47" width="29.093" height="28.167"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter127_d_441_2" x="1870.3" y="500.72" width="29.093" height="28.167"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter128_d_441_2" x="1310.5" y="539.47" width="29.093" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter129_d_441_2" x="1331.9" y="539.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter130_d_441_2" x="1652.9" y="500.59" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter131_d_441_2" x="1892.4" y="380.01" width="29.635" height="28.583"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter132_d_441_2" x="850.86" y="539.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter133_d_441_2" x="541" y="322.81" width="29.5" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter134_d_441_2" x="541.22" y="303.47" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter135_d_441_2" x="491.86" y="129.47" width="29.135" height="28.667"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter136_d_441_2" x="511.86" y="40.864" width="29.635" height="28.125"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter137_d_441_2" x="491.86" y="19.467" width="29.125" height="29.135"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter138_d_441_2" x="492" y="38" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter139_d_441_2" x="511" y="40" width="10" height="29"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter140_d_441_2" x="726.1" y="466.68" width="98.44" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter141_d_441_2" x="966.02" y="457.82" width="100.4" height="52.376"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter142_d_441_2" x="1202.5" y="466.68" width="105" height="36.544"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter143_d_441_2" x="1362.5" y="466.68" width="105" height="36.544"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter144_d_441_2" x="1524.2" y="457.68" width="101.38" height="52.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter145_d_441_2" x="724.16" y="707.68" width="101.38" height="52.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter146_d_441_2" x="887.93" y="699.68" width="93.762" height="69.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter147_d_441_2" x="1031.3" y="716.68" width="69.486" height="35.475"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter148_d_441_2" x="1179" y="707.68" width="106.47" height="69.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter149_d_441_2" x="1357.8" y="713.68" width="120.46" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter150_d_441_2" x="1518.3" y="707.68" width="115.62" height="52.515"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter151_d_441_2" x="1891" y="380" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter164_d_441_2" x="1680" y="413.68" width="105.35" height="103.52"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter165_d_441_2" x="1814.9" y="447.68" width="66.294" height="35.46"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter166_d_441_2" x="541" y="400" width="33" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter167_d_441_2" x="451" y="358" width="39" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter168_d_441_2" x="1892" y="656" width="88" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter169_d_441_2" x="532" y="358" width="66" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter170_d_441_2" x="482" y="339.7" width="10" height="28.3"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter171_d_441_2" x="532" y="339.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter172_d_441_2" x="483.15" y="339.76" width="33.291" height="27.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter173_d_441_2" x="508.56" y="339.76" width="32.291" height="26.783"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter174_d_441_2" x="532" y="339.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter175_d_441_2" x="532" y="339.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter176_d_441_2" x="532" y="339.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter177_d_441_2" x="532" y="339.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter178_d_441_2" x="506.5" y="357.7" width="12" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter179_d_441_2" x="434.7" y="598.5" width="28.3" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter180_d_441_2" x="434.7" y="548.5" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter181_d_441_2" x="434.76" y="574.06" width="27.283" height="33.291"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter182_d_441_2" x="434.76" y="549.65" width="26.783" height="32.291"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter183_d_441_2" x="434.7" y="548.5" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter184_d_441_2" x="434.7" y="548.5" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter185_d_441_2" x="434.7" y="548.5" width="28" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter186_d_441_2" x="434.7" y="548.5" width="28.3" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter187_d_441_2" x="452.7" y="572" width="10" height="12"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter188_d_441_2" x="589" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter189_d_441_2" x="639" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter190_d_441_2" x="590.15" y="539.76" width="33.291" height="27.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter191_d_441_2" x="615.56" y="539.76" width="32.291" height="26.783"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter192_d_441_2" x="589" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter193_d_441_2" x="639" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter194_d_441_2" x="589" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter195_d_441_2" x="639" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter196_d_441_2" x="589" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter197_d_441_2" x="639" y="539.7" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter198_d_441_2" x="589" y="539.7" width="10" height="28.3"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter199_d_441_2" x="639" y="539.7" width="10" height="28.3"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter200_d_441_2" x="974.65" y="537.76" width="33.291" height="27.283"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter201_d_441_2" x="998.23" y="539.65" width="32.291" height="26.783"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter202_d_441_2" x="974" y="539" width="10" height="28"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter203_d_441_2" x="1022" y="540" width="10" height="28.3"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter204_d_441_2" x="613.5" y="557.7" width="12" height="10"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter205_d_441_2" x="369" y="358" width="90" height="68"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter206_d_441_2" x="377" y="367" width="73" height="50"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter207_d_441_2" x="400.76" y="375.73" width="22.227" height="31.273"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter208_d_441_2" x="1104.6" y="648.63" width="28.483" height="32.107"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
                        </filter>
                        <filter id="filter209_d_441_2" x="1126.6" y="647.95" width="27.732" height="32.725"
                            color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_441_2" />
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_441_2" result="shape" />
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
