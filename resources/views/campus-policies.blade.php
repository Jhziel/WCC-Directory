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
                <h2 class="text-white text-3xl font-bold tracking-wider">MISSION</h2>
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
                <h2 class="text-white text-3xl font-bold tracking-wider">VISION</h2>
            </div>
            <p class="text-white text-center text-lg mt-5  tracking-wider max-w-5xl">
                We are the one of Asia's top aviation-focused universities recognized as a leader in producing
                highly-competent and value-laden graduates who contribute to nation building and global
                progress.​
            </p>
        </div>

        <div class="flex flex-col justify-center items-center px-8 mb-24">

            <div class="text-center mb-10">
                <h2 class="text-white text-4xl font-bold tracking-wider">Core Values</h2>
            </div>

            <div class="flex gap-6 w-full max-w-7xl">
                <div
                    class="flex-1 bg-[#1d6b41] flex flex-col items-center text-white p-8  rounded-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition">
                    <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 512 512"
                        xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <style type="text/css">
                                .st0 {
                                    fill: white;
                                }
                            </style>
                            <g>
                                <polygon class="st0"
                                    points="481.771,313.228 257.896,430.587 261.287,437.071 485.162,319.697 "></polygon>
                                <polygon class="st0"
                                    points="254.896,469.806 486.053,348.603 482.662,342.119 251.506,463.337 "></polygon>
                                <path class="st0"
                                    d="M486.193,364.541L239.209,493.962c-7.5,1.906-5.781-3.953-5.797-13.125 c0.688-24.656,6.719-46.203,13.391-53.25L33.021,142.525c-9.563,11.453-17.781,47.094-10.969,85.891l211.125,281.515 c1.547,2.031,4.328,2.656,6.578,1.469l247.875-131.312c2.203-1.172,3.719-3.328,4.063-5.797s-0.516-4.953-2.328-6.688 L486.193,364.541z">
                                </path>
                                <path class="st0"
                                    d="M489.85,269.259L291.803,5.181c-3.813-5.078-10.766-6.656-16.391-3.688L45.803,122.431L259.6,407.494 l225.938-119.016c3.359-1.766,5.766-4.906,6.609-8.609C492.959,276.166,492.146,272.291,489.85,269.259z M310.818,280.572 l-62.516-83.359l-53.5,28.172l-24.25-32.328l53.5-28.172l-36.594-48.797l40.031-21.078l36.594,48.781l44.594-23.484l24.25,32.328 l-44.594,23.5l62.531,83.344L310.818,280.572z">
                                </path>
                            </g>
                        </g>
                    </svg>

                    <h1 class="text-xl text-center font-semibold mt-8">Christ-Centeredness</h1>
                    <p class="text-center mt-4 text-sm">In everything that you do, in thought and action, you do it to
                        glorify God</p>
                </div>

                <div
                    class="z-10 flex-1 bg-[#1d6b41] flex flex-col items-center text-white p-8  rounded-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition">
                    <svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 57.001 57.001" xml:space="preserve"
                        width="70px" height="70px">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g> </g>
                                <g>
                                    <path
                                        d="M39,13.001c3.309,0,6-2.691,6-6s-2.691-6-6-6s-6,2.691-6,6S35.691,13.001,39,13.001z M39,3.001c2.206,0,4,1.794,4,4 s-1.794,4-4,4c-0.117,0-0.226-0.025-0.34-0.034C39.476,10.234,40,9.182,40,8.001h-2c0,0.986-0.719,1.803-1.66,1.966 C35.524,9.234,35,8.182,35,7.001C35,4.795,36.794,3.001,39,3.001z">
                                    </path>
                                    <path
                                        d="M8,25.001c3.309,0,6-2.691,6-6s-2.691-6-6-6s-6,2.691-6,6S4.691,25.001,8,25.001z M8,15.001c2.206,0,4,1.794,4,4 c0,1.181-0.524,2.233-1.34,2.966C9.719,21.804,9,20.987,9,20.001H7c0,1.181,0.524,2.233,1.34,2.966 C8.226,22.976,8.117,23.001,8,23.001c-2.206,0-4-1.794-4-4S5.794,15.001,8,15.001z">
                                    </path>
                                    <path
                                        d="M56.316,2.053l-6-2c-0.306-0.104-0.639-0.052-0.901,0.136C49.154,0.378,49,0.68,49,1.001v8v5H35 c-0.234,0-0.461,0.082-0.641,0.231l-6,5c-0.105,0.089-0.192,0.198-0.254,0.321l-2.836,5.673l-6.314,2.705l-5.639-1.879 c-0.102-0.033-0.209-0.051-0.316-0.051H5c-2.757,0-5,2.243-5,5v11c0,0.553,0.447,1,1,1h3v12H0v2h5h5h4c0.553,0,1-0.447,1-1v-5h2h5 h7c0.553,0,1-0.447,1-1v-5h6h5c0.553,0,1-0.447,1-1v-5h6h5h3v-2h-2v-8c0-2.757-2.243-5-5-5h-4v-4h5c2.757,0,5-2.243,5-5v-6 c0-0.553-0.447-1-1-1h-3V5.722l5.316-1.772C56.725,3.813,57,3.432,57,3.001S56.725,2.189,56.316,2.053z M40.523,16.001L40,17.309 l-0.523-1.308H40.523z M14,49.001c-0.553,0-1,0.447-1,1v5h-2v-12h5v6H14z M18,49.001v-7c0-0.553-0.447-1-1-1h-7 c-0.553,0-1,0.447-1,1v13H6v-23H4v9H2v-10c0-1.654,1.346-3,3-3h3v7h2v-7h2.838l5.846,1.948c0.232,0.079,0.486,0.066,0.71-0.029 l6.235-2.672l0.607,0.91l0.303,0.455l-6.708,3.353l-6.69-0.956c-0.287-0.042-0.578,0.045-0.797,0.234 C12.126,31.436,12,31.711,12,32.001v5c0,0.553,0.447,1,1,1h5c1.654,0,3,1.346,3,3v8H18z M29,43.001c-0.553,0-1,0.447-1,1v5h-5v-8 c0-2.757-2.243-5-5-5h-4v-2.847l5.858,0.837c0.202,0.029,0.406-0.005,0.589-0.096l8-4c0.146-0.073,0.261-0.184,0.354-0.313 c0.008-0.011,0.023-0.015,0.031-0.026l3.905-5.857L35,22.001v21H29z M47,37.001h-5v-6h5V37.001z M53,15.001c0,1.654-1.346,3-3,3 h-6c-0.553,0-1,0.447-1,1v6c0,0.553,0.447,1,1,1h5c1.654,0,3,1.346,3,3v8h-3v-7c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v8v5 h-3v-23c0-0.379-0.214-0.725-0.553-0.895c-0.338-0.168-0.745-0.133-1.047,0.095l-4,3c-0.091,0.067-0.17,0.15-0.232,0.245 L28,27.198l-0.846-1.27l2.646-5.293l5.562-4.634h1.961l1.748,4.371c0.153,0.38,0.52,0.629,0.929,0.629s0.776-0.249,0.929-0.629 l1.748-4.371H50c0.553,0,1-0.447,1-1v-5h2V15.001z M51,3.613V2.389l1.838,0.612L51,3.613z">
                                    </path>
                                    <rect x="24" y="5.001" width="2" height="2"></rect>
                                    <rect x="20" y="5.001" width="2" height="2"></rect>
                                    <rect x="16" y="5.001" width="2" height="2"></rect>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h1 class="text-xl text-center font-semibold mt-5">Servant-Leadership</h1>
                    <p class="text-center mt-4 text-sm">Leading with humility and being supportive to peers</p>
                </div>

                <div
                    class="z-10 flex-1 bg-[#1d6b41] flex flex-col items-center text-white p-8  rounded-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition">
                    <svg width="70px" height="70px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M11.1459 7.02251C11.5259 6.34084 11.7159 6 12 6C12.2841 6 12.4741 6.34084 12.8541 7.02251L12.9524 7.19887C13.0603 7.39258 13.1143 7.48944 13.1985 7.55334C13.2827 7.61725 13.3875 7.64097 13.5972 7.68841L13.7881 7.73161C14.526 7.89857 14.895 7.98205 14.9828 8.26432C15.0706 8.54659 14.819 8.84072 14.316 9.42898L14.1858 9.58117C14.0429 9.74833 13.9714 9.83191 13.9392 9.93531C13.9071 10.0387 13.9179 10.1502 13.9395 10.3733L13.9592 10.5763C14.0352 11.3612 14.0733 11.7536 13.8435 11.9281C13.6136 12.1025 13.2682 11.9435 12.5773 11.6254L12.3986 11.5431C12.2022 11.4527 12.1041 11.4075 12 11.4075C11.8959 11.4075 11.7978 11.4527 11.6014 11.5431L11.4227 11.6254C10.7318 11.9435 10.3864 12.1025 10.1565 11.9281C9.92674 11.7536 9.96476 11.3612 10.0408 10.5763L10.0605 10.3733C10.0821 10.1502 10.0929 10.0387 10.0608 9.93531C10.0286 9.83191 9.95713 9.74833 9.81418 9.58117L9.68403 9.42898C9.18097 8.84072 8.92945 8.54659 9.01723 8.26432C9.10501 7.98205 9.47396 7.89857 10.2119 7.73161L10.4028 7.68841C10.6125 7.64097 10.7173 7.61725 10.8015 7.55334C10.8857 7.48944 10.9397 7.39258 11.0476 7.19887L11.1459 7.02251Z"
                                stroke="#ffffff" stroke-width="1.5"></path>
                            <path
                                d="M7.35111 15L6.71424 17.323C6.0859 19.6148 5.77173 20.7607 6.19097 21.3881C6.3379 21.6079 6.535 21.7844 6.76372 21.9008C7.41635 22.2331 8.42401 21.7081 10.4393 20.658C11.1099 20.3086 11.4452 20.1339 11.8014 20.0959C11.9335 20.0818 12.0665 20.0818 12.1986 20.0959C12.5548 20.1339 12.8901 20.3086 13.5607 20.658C15.576 21.7081 16.5837 22.2331 17.2363 21.9008C17.465 21.7844 17.6621 21.6079 17.809 21.3881C18.2283 20.7607 17.9141 19.6148 17.2858 17.323L16.6489 15"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M5.5 6.39691C5.17745 7.20159 5 8.08007 5 9C5 12.866 8.13401 16 12 16C15.866 16 19 12.866 19 9C19 5.13401 15.866 2 12 2C11.0801 2 10.2016 2.17745 9.39691 2.5"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>

                    <h1 class="text-xl text-center font-semibold mt-8">Excellence</h1>
                    <p class="text-center mt-4 text-sm">The quality of being outstanding or extremely good</p>
                </div>

                <div
                    class="z-10 flex-1 bg-[#1d6b41] flex flex-col items-center text-white p-8  rounded-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition">
                    <svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="71px" height="71px"
                        viewBox="0 0 233.765 233.765" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                    d="M47.505,187.625h63.292v12.105H35.399V23.188h146.273v132.401h-12.104V35.293H47.505V187.625z M146.918,0H70.134v18.157 h76.784V0z M152.415,52.446H64.652v12.105h87.763V52.446z M152.415,88.386H64.652v12.105h87.763V88.386z M64.658,136.426h87.763 V124.32H64.658V136.426z M190.688,202.49c-0.745,2.672-1.797,5.226-3.145,7.59l5.426,5.426l-12.85,12.839l-5.427-5.427 c-2.37,1.359-4.918,2.4-7.607,3.156v7.69h-18.157v-7.702c-2.678-0.744-5.231-1.797-7.602-3.15l-5.432,5.433l-12.841-12.851 l5.423-5.42c-1.342-2.382-2.397-4.924-3.147-7.602h-7.681v-18.157h7.681c0.744-2.678,1.794-5.237,3.147-7.607l-5.429-5.433 l12.835-12.832l5.432,5.42c2.37-1.354,4.912-2.394,7.602-3.15v-7.672h18.157v7.672c2.689,0.745,5.237,1.797,7.619,3.15l5.427-5.42 l12.85,12.82l-5.432,5.433c1.354,2.382,2.405,4.93,3.15,7.619h7.678v18.157h-7.678V202.49z M173.806,193.412 c0-8.713-7.081-15.794-15.787-15.794c-8.707,0-15.776,7.081-15.776,15.794c0,8.7,7.081,15.77,15.776,15.77 C166.713,209.182,173.806,202.101,173.806,193.412z">
                                </path>
                            </g>
                        </g>
                    </svg>

                    <h1 class="text-xl text-center font-semibold mt-8">Diligence</h1>
                    <p class="text-center mt-4 text-sm">Careful and persistent work and effort</p>
                </div>


                <div
                    class="flex-1 bg-[#1d6b41] flex flex-col items-center text-white p-8  rounded-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition z-10">
                    <svg fill="white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" height="70" width="70"
                        viewBox="0 0 198.127 198.128" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                    d="M197.927,123.484c0.079-0.262,0.134-0.518,0.146-0.786c0.007-0.066,0.055-0.127,0.055-0.2c0-0.098-0.055-0.171-0.066-0.269 c-0.019-0.256-0.067-0.505-0.141-0.742c-0.048-0.171-0.121-0.335-0.183-0.487c-0.036-0.085-0.048-0.158-0.097-0.231l-38.697-63.933 c-0.072-0.113-0.194-0.149-0.268-0.25c-0.25-0.326-0.542-0.594-0.896-0.81c-0.042-0.024-0.079-0.064-0.128-0.088 c-0.493-0.274-1.028-0.475-1.638-0.475h-53.584v-8.802c6.966-1.546,12.196-7.751,12.196-15.177c0-8.58-6.984-15.563-15.561-15.563 c-8.58,0-15.564,6.984-15.564,15.563c0,7.42,5.23,13.631,12.197,15.177v8.802H42.099c-0.597,0-1.132,0.201-1.625,0.475 c-0.049,0.024-0.094,0.07-0.143,0.101c-0.338,0.216-0.624,0.472-0.868,0.792c-0.079,0.101-0.21,0.137-0.28,0.256L0.486,120.757 c-0.828,1.369-0.578,3.129,0.6,4.219c0.746,0.676,18.542,16.873,40.971,16.873c19.936,0,36.185-12.774,40.082-16.087 c1.602-0.262,2.844-1.583,2.844-3.258c0-1.431-0.911-2.649-2.183-3.13L48.03,61.941H95.7v86.861H84.34 c-1.86,0-3.367,1.498-3.367,3.361s1.501,3.374,3.367,3.374H95.7v6.716H73.407c-1.857,0-3.364,1.504-3.364,3.367 c0,1.876,1.501,3.367,3.364,3.367H95.7v6.735H61.63c-1.857,0-3.367,1.504-3.367,3.367s1.501,3.367,3.367,3.367h74.863 c1.857,0,3.367-1.504,3.367-3.367s-1.504-3.367-3.367-3.367h-34.062v-6.735h22.292c1.857,0,3.367-1.491,3.367-3.367 c0-1.863-1.504-3.367-3.367-3.367h-22.292v-6.716h9.675c1.87,0,3.368-1.511,3.368-3.374s-1.498-3.361-3.368-3.361h-9.675V61.941 h47.678l-35.604,58.827c-0.055,0.079-0.066,0.152-0.104,0.243c-0.073,0.146-0.128,0.305-0.183,0.476 c-0.085,0.256-0.134,0.493-0.146,0.748c-0.012,0.104-0.055,0.178-0.055,0.269c0,0.079,0.037,0.134,0.043,0.201 c0.019,0.273,0.073,0.529,0.152,0.785c0.049,0.14,0.079,0.286,0.128,0.42c0.109,0.231,0.273,0.451,0.45,0.658 c0.086,0.109,0.146,0.237,0.262,0.341c0.019,0.012,0.024,0.036,0.043,0.066c0.743,0.676,18.541,16.873,40.974,16.873 c22.427,0,40.219-16.197,40.962-16.873c0.013-0.018,0.024-0.042,0.049-0.066c0.109-0.104,0.164-0.231,0.262-0.341 c0.164-0.207,0.341-0.427,0.444-0.658C197.86,123.776,197.89,123.63,197.927,123.484z M99.073,22.398 c3.669,0,6.829,2.262,8.156,5.468H90.922C92.244,24.66,95.401,22.398,99.073,22.398z M90.916,34.595h16.307 c-1.328,3.203-4.488,5.462-8.156,5.462C95.395,40.057,92.244,37.798,90.916,34.595z M42.069,65.065l32.729,54.065H9.346 L42.069,65.065z M13.611,125.858H70.56c-6.704,4.251-17.004,9.256-28.491,9.256C30.633,135.114,20.333,130.109,13.611,125.858z M188.805,119.13h-65.452l32.729-54.065L188.805,119.13z M127.61,125.858h56.951c-6.691,4.251-17.001,9.256-28.479,9.256 C144.641,135.114,134.326,130.109,127.61,125.858z">
                                </path>
                            </g>
                        </g>
                    </svg>

                    <h1 class="text-xl text-center font-semibold mt-8">Integrity</h1>
                    <p class="text-center mt-4 text-sm">The quality of being honest; being morally upright</p>
                </div>

            </div>

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
            }, 15000); // 12 seconds
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
