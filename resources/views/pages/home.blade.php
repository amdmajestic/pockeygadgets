@extends('layouts.mainlayout')

@section('main-content-template')
    @parent

    <div class="w-full h-full m-auto flex flex-col justify-between items-center">


        <div class="relative w-full max-w-11/12 mx-auto" id="hero-section">
            <div class="overflow-hidden relative">
                <div class="flex flex-row transition-transform duration-500 ease-in-out rounded-[8%]" id="carouselSlides">
                    @php
                        $slideshowContentTypes = [
                            'tgl' => 'tagline',
                            'hdg' => 'heading',
                            'desc' => 'description',
                            'ul' => 'unordered-list',
                            'ol' => 'ordered-list',
                            'btn' => 'button',
                        ];
                        $slideshowContentSizes = [
                            'xs' => 'xs',
                            'sm' => 'sm',
                            'md' => 'base',
                            'lg' => 'lg',
                        ];
                        $slideshowTextAlignment = [
                            'l' => 'left',
                            'c' => 'center',
                            'r' => 'right',
                            'j' => 'justify',
                        ];
                        $slideshowTextColor = [
                            'w' => 'white',
                            'b' => 'black',
                        ];
                        $slideshowContentDirection = [
                            'g-h' => 'col',
                            'g-v' => 'row',
                            'f-h' => 'row',
                            'f-v' => 'col',
                        ];

                        $homeImageSlideshow = [
                            [
                                'image' =>
                                    'https://pockeygadgets.co.uk/wp-content/uploads/2025/07/Android-G2000-Pro-Bluetooth-Head.webp',
                                'url' =>
                                    'https://pockeygadgets.co.uk/product/android-g2000-pro-bluetooth-head-mounted-gaming-wired-wireless-headset/',
                                'data' => [
                                    [
                                        'type' => $slideshowContentTypes['hdg'],
                                        'color' => 'b',
                                        'content' => 'Android G2000 Pro Bluetooth Headset',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['desc'],
                                        'size' => 'sm',
                                        'color' => 'b',
                                        'content' =>
                                            'Suitable for desktop, Laptop/Mobile/Tablet and other devices. Switching to wired mode with adapter cable can connect desktop computer and laptops for voice calls.',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['ul'],
                                        'color' => 'b',
                                        'direction' => 'g-h',
                                        'content' => [
                                            '5.3 Bluetooth version',
                                            'Esports 7.1 Sound Effects',
                                            'Wired / wireless switching',
                                        ],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['btn'],
                                        'text-alignment' => 'l',
                                        'color' => 'w',
                                        'content' => 'Buy Headset',
                                    ],
                                ],
                            ],
                            [
                                'image' =>
                                    'https://pockeygadgets.co.uk/wp-content/uploads/2025/07/RemaxTWS-10Plus-1.webp',
                                'url' => 'https://pockeygadgets.co.uk/product/remaxtws-10plus/',
                                'data' => [
                                    [
                                        'type' => $slideshowContentTypes['tgl'],
                                        'content' => 'True Wireless Music Earbuds with Digital Display. White Colour',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['hdg'],
                                        'content' => 'Remax(TWS-10Plus)',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['desc'],
                                        'size' => 'md',
                                        'content' =>
                                            '(1.5h charging time, 200mAh Battery capacity, 4h Play Time, 50h Standby Time)',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['ul'],
                                        'direction' => 'g-v',
                                        'size' => 'xs',
                                        'content' => [
                                            'Wireless 5.1,fast connection, low latency.',
                                            '13mm powerful moving-coil speaker, a surging sound.',
                                            'Open the charging case and auto pair, easier access.',
                                            'Compact and portable, more convenient.',
                                            'Brand new LED, high-definition digital display.',
                                        ],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['btn'],
                                        'text-alignment' => 'l',
                                        'content' => 'Buy Remax Ear Buds',
                                    ],
                                ],
                            ],
                            [
                                'image' =>
                                    'https://pockeygadgets.co.uk/wp-content/uploads/2025/07/Android-G2000-Pro-Bluetooth-Head-1.webp',
                                'url' => 'https://pockeygadgets.co.uk/product/power-bank-15w-magnetic-10000-mah/',
                                'data' => [
                                    [
                                        'type' => $slideshowContentTypes['hdg'],
                                        'color' => 'b',
                                        'content' => '15W Magnetic Power Bank 10000mAh',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['desc'],
                                        'color' => 'b',
                                        'size' => 'md',
                                        'content' => 'No need to worry about choosing what you need.',
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['ul'],
                                        'color' => 'b',
                                        'bullet-hide' => true,
                                        'direction' => 'g-v',
                                        'size' => 'xs',
                                        'content' => [
                                            'Capacity:  10000mAh',
                                            'Size: 103*65*18.5.',
                                            'Material: Aluminum alloy+PC.',
                                            'Output Power: 15W wireless.',
                                            'Input Power: 22.5W wired.',
                                            'Input port: 1',
                                            'Colors: Black, Blue.',
                                            'Self-Charging time (4A Charger.): About 3 hours',
                                        ],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['btn'],
                                        'text-alignment' => 'l',
                                        'content' => 'Buy Power Bank',
                                    ],
                                ],
                            ],
                        ];
                    @endphp
                    @for ($i = 0; $i < count($homeImageSlideshow); $i++)
                        <div class="w-full flex-shrink-0 rounded-[5%]">
                            <a href={{ $homeImageSlideshow[$i]['url'] ?? '#' }} class="relative">
                                <div
                                    class="absolute flex flex-col pl-32 justify-center items-left font-[Montserrat] gap-6 w-4/6 h-full rounded-[5%]">
                                    @foreach ($homeImageSlideshow[$i]['data'] ?? [] as $dataElement)
                                        @switch($dataElement['type'])
                                            @case($slideshowContentTypes['tgl'])
                                                <span class="text-orange-500 text-base flex-wrap">
                                                    {{ $dataElement['content'] }}
                                                </span>
                                            @break

                                            @case($slideshowContentTypes['hdg'])
                                                <h1
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} text-4xl flex-wrap font-semibold">
                                                    {{ $dataElement['content'] }}
                                                </h1>
                                            @break

                                            @case($slideshowContentTypes['desc'])
                                                <p
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} text-lg flex-wrap {{ 'text-' . (isset($dataElement['size']) && isset($slideshowContentSizes[$dataElement['size']]) ? $slideshowContentSizes[$dataElement['size']] : 'sm') }}">
                                                    {{ $dataElement['content'] }}
                                                </p>
                                            @break

                                            @case($slideshowContentTypes['ul'])
                                                <ul
                                                    class="grid gap-x-0 gap-y-3 {{ 'grid-flow-' . (isset($dataElement['direction']) && isset($slideshowContentDirection[$dataElement['direction']]) ? $slideshowContentDirection[$dataElement['direction']] : 'row') }}-dense {{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} flex-wrap list-inside {{ isset($dataElement['bullet-hide']) && $dataElement['bullet-hide'] ? 'list-none' : 'list-disc' }}">
                                                    @foreach ($dataElement['content'] as $listItemContent)
                                                        <li
                                                            class="list-item {{ 'text-' . (isset($dataElement['size']) && isset($slideshowContentSizes[$dataElement['size']]) ? $slideshowContentSizes[$dataElement['size']] : 'sm') }}">
                                                            {{ $listItemContent }}</li>
                                                    @endforeach
                                                </ul>
                                            @break

                                            @case($slideshowContentTypes['ol'])
                                                <ol
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} flex-wrap list-inside {{ $dataElement['bullet-hide'] && isset($dataElement['bullet-hide']) ? 'list-none' : 'list-decimal' }}">
                                                    @foreach ($dataElement['content'] as $listItemContent)
                                                        <li
                                                            class="list-item {{ 'text-' . (isset($dataElement['size']) && isset($slideshowContentSizes[$dataElement['size']]) ? $slideshowContentSizes[$dataElement['size']] : 'sm') }}">
                                                            {{ $listItemContent }}</li>
                                                    @endforeach
                                                </ol>
                                            @break

                                            @case($slideshowContentTypes['btn'])
                                                <div
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} w-full h-max {{ 'text-' . (isset($dataElement['text-alignment']) ? $slideshowTextAlignment[$dataElement['text-alignment']] : 'center') }}">
                                                    <button type="button"
                                                        class="bg-orange-500 text-white text-center content-center text-lg flex-wrap px-6 py-4 m-4 rounded-[30px] select-none hover:bg-black transition-colors delay-200 ease-out peer">
                                                        {{ $dataElement['content'] }}
                                                    </button>
                                                </div>
                                            @break

                                            {{-- @default --}}
                                        @endswitch
                                    @endforeach
                                </div>
                                <img loading="lazy"
                                    src={{ $homeImageSlideshow[$i]['image'] ?? $homeImageSlideshow[0]['image'] }}
                                    alt="Headphone Demo Image" class="w-full h-[550px] rounded-[6%] shadow-lg bg-cover">
                            </a>
                        </div>
                    @endfor
                </div>

                <div id="top-frame"
                    class="absolute -top-0 -left-1.5 bg-transparent w-[calc(100%+15px)] h-[240px] rounded-[20px] border-l-15 border-r-20 border-white">
                </div>
                <button
                    class="{{ 'absolute -left-3 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-r-2xl md:rounded-br-2xl' .
                        " before:content-[''] before:bg-transparent before:absolute before:-top-[5.5.px] before:-left-[6px] md:before:-top-[1.75px] md:before:-left-[9.75px] before:rounded-[50%] before:border-t-[10px] before:border-t-white before:px-9 before:py-1" .
                        " after:content-[''] after:bg-transparent after:absolute after:-bottom-[5.5px] after:-left-[6px] after:rounded-[50%] md:after:-bottom-[1.75px] md:after:-left-[9.75px] after:border-b-[10px] after:border-b-white after:px-9 after:py-1" }}"
                    id="prevBtn">
                    <span class="iconify hover:text-gray-500 cursor-pointer scale-[2] md:scale-[3] font-extralight"
                        data-icon="mdi-light:chevron-left" data-width="24" data-height="24"></span>
                </button>
                <button
                    class="{{ 'absolute -right-3 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-l-2xl md:rounded-bl-2xl' .
                        " before:content-[''] before:bg-transparent before:absolute before:-top-[5.5px] before:-right-[9px] md:before:-top-[1.5px] md:before:-right-[9.75px] before:rounded-[50%] before:border-t-[10px] before:border-t-white before:px-9 before:py-1" .
                        " after:content-[''] after:bg-transparent after:absolute after:-bottom-[5.5px] md:after:-bottom-[1.75px] md:after:-right-[9.75px] after:-right-[9px] after:rounded-[50%] after:border-b-[10px] after:border-b-white after:px-9 after:py-1" }}"
                    id="nextBtn">
                    <span class="iconify hover:text-gray-500 cursor-pointer scale-[2] md:scale-[3] font-extralight"
                        data-icon="mdi-light:chevron-right" data-width="24" data-height="24"></span>
                </button>
                <div id="top-frame"
                    class="absolute -bottom-0 -left-1.5 bg-transparent w-[calc(100%+15px)] h-[240px] rounded-[20px] border-l-15 border-r-20 border-white">
                </div>
            </div>
        </div>



        {{-- <div class="grid grid-cols-[repeat(auto-fit,minmax(325px,auto))] gap-6 mt-12 overflow-x-scroll w-full max-h-[350px] scrollbar-none"> --}}
        <div data-aos="zoom-in" data-aos-delay="750" data-aos-easing="ease-in" data-aos-mirror="false"
            data-aos-anchor-placement="center-center"
            class="flex flex-col md:flex-row justify-center md:justify-evenly gap-6 mt-14 overflow-x-scroll w-full md:w-11/12 h-auto scrollbar-none">
            {{-- @for ($i = 0; $i < 3; $i++) --}}
            <div
                class="min-w-fit max-w-full min-h-[550px] max-h-[550px] w-full lg:min-w-[275px] lg:max-w-[275px] lg:min-h-[250px] lg:max-h-[250px] 2xl:min-w-[375px] 2xl:max-w-[375px] 2xl:min-h-[350px] 2xl:max-h-[350px] relative overflow-hidden rounded-3xl shadow shadow-gray-100">
                <a href="#"
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 inline-flex text-center py-2.5 px-5 rounded-lg bg-orange-500 select-none hover:bg-black text-white transition-colors delay-200 ease-out peer">
                    <span>Shop</span><span class="iconify font-extralight" data-icon="mdi-light:chevron-right"
                        data-width="24" data-height="24"></span></a>
                <img loading="lazy"
                    class="absolute top-0 left-0 w-full h-full md:w-[650px] md:h-[275px] lg:w-[750px] 2xl:h-[375px] aspect-[4/3] bg-contain rounded-3xl peer-hover:scale-110 transition-transform delay-300 ease-in-out -z-10 object-contain object-center"
                    src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/Android-G2000-Pro-Bluetooth-Head-category.webp"
                    alt="Headphone Demo Image">
            </div>
            <div
                class="min-w-fit max-w-full min-h-[550px] max-h-[550px] w-full lg:min-w-[275px] lg:max-w-[275px] lg:min-h-[250px] lg:max-h-[250px] 2xl:min-w-[375px] 2xl:max-w-[375px] 2xl:min-h-[350px] 2xl:max-h-[350px] relative overflow-hidden rounded-3xl shadow shadow-gray-100">
                <a href="#"
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 inline-flex text-center py-2.5 px-5 rounded-lg bg-orange-500 select-none hover:bg-black text-white transition-colors delay-200 ease-out peer">
                    <span>Shop</span><span class="iconify font-extralight" data-icon="mdi-light:chevron-right"
                        data-width="24" data-height="24"></span></a>
                <img loading="lazy"
                    class="absolute top-0 left-0 w-full h-full md:w-[650px] md:h-[275px] lg:w-[750px] 2xl:h-[375px] aspect-[4/3] bg-contain rounded-3xl peer-hover:scale-110 transition-transform delay-300 ease-in-out -z-10 object-contain object-center"
                    src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/RemaxTWS-10Plus-6.webp"
                    alt="Headphone Demo Image">
            </div>
            <div
                class="min-w-fit max-w-full min-h-[550px] max-h-[550px] w-full lg:min-w-[275px] lg:max-w-[275px] lg:min-h-[250px] lg:max-h-[250px] 2xl:min-w-[375px] 2xl:max-w-[375px] 2xl:min-h-[350px] 2xl:max-h-[350px] relative overflow-hidden rounded-3xl shadow shadow-gray-100">
                <a href="#"
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 inline-flex text-center py-2.5 px-5 rounded-lg bg-orange-500 select-none hover:bg-black text-white transition-colors delay-200 ease-out peer">
                    <span>Shop</span><span class="iconify font-extralight" data-icon="mdi-light:chevron-right"
                        data-width="24" data-height="24"></span></a>
                <img loading="lazy"
                    class="absolute top-0 left-0 w-full h-full md:w-[650px] md:h-[275px] lg:w-[750px] 2xl:h-[375px] aspect-[4/3] bg-contain rounded-3xl peer-hover:scale-110 transition-transform delay-300 ease-in-out -z-10 object-contain object-center"
                    src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/Power-Bank.webp" alt="Headphone Demo Image">
            </div>
            {{-- @endfor --}}
        </div>
        {{-- </div> --}}


        <div data-aos="fade-up" data-aos-easing="linear" data-aos-anchor-placement="center-bottom"
            class="relative flex flex-row rounded-[20px] w-full h-[600px] mt-14 bg-[url('https://pockeygadgets.co.uk/wp-content/uploads/2025/07/Headphones-banner.webp')] bg-[length:100%_135%] bg-no-repeat bg-center">
            {{-- <span
                class="w-full h-full "> --}}
            {{-- <img loading="lazy" src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/RemaxTWS-10Plus-6.webp"
                    alt="Headphone Demo Image" class="w-full h-[550px] rounded-[20px] shadow-lg bg-cover"> --}}
            {{-- </span> --}}
            <div class="absolute top-0 left-0 w-full h-full flex flex-col gap-6 justify-center items-center">
                <h2 class="text-8xl text-white w-2/5 text-center">Bassline Essentials</h2>
                <button type="button"
                    class="bg-orange-500 text-white text-center content-center text-lg flex-wrap px-6 py-4 m-4 rounded-[30px] select-none hover:bg-black transition-colors delay-200 ease-out peer">
                    Available now for $39.99
                </button>
            </div>
            <div class="absolute bottom-0 right-0 w-max h-max bg-white rounded-tl-[20px]">
                <button type="button"
                    class="bg-inherit flex flex-row gap-3 justify-center items-center text-white text-center content-center text-xl flex-wrap px-6 py-4 m-4 rounded-[30px] select-none cursor-pointer">
                    <span
                        class="iconify rounded-full font-extralight bg-orange-500 hover:bg-black transition-colors delay-200 ease-out peer h-[48px] w-[48px] p-1 text-center content-center"
                        data-icon="mdi:play-outline" data-width="28" data-height="28"></span>
                    <span class="text-black">Watch Video</span>
                </button>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            class="w-full h-max md:h-[750px] flex flex-col md:flex-row gap-6 items-start justify-between rounded-[20px] mb-12">
            {{-- <a href="#"> --}}
            <div class="basis-2/6 h-full grow content-center">
                <img loading="lazy" src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/power-bank-683x1024.jpeg"
                    alt="Headphone Demo Image"
                    class="w-full h-[150%] aspect-[4/3] rounded-[20px] shadow-sm object-contain">
            </div>
            {{-- </a> --}}
            <div class="flex flex-col gap-6 basis-1/3 h-min justify-end items-center mt-auto mb-0 mx-15">
                <div class="text-center">
                    <h1 class="text-4xl">15W Magnetic Power Bank 10000mAh </h1>
                </div>
                <p class="text-gray-400 font-sans text-center">
                    No need to worry about choosing what you need.
                </p>
                <ul
                    class="m-auto w-5/6 grid grid-cols-2 gap-x-2 gap-y-7 md:gap-x-8 md:gap-y-8 text-wrap text-base [&>*]:w-30 [&>*]:text-center">
                    <li>
                        <div>
                            <span class="iconify m-auto" data-icon="mdi:waveform" data-width="50"
                                data-height="50"></span>
                            <p>Powerful, Room‑Filling Sound</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify m-auto" data-icon="material-symbols:battery-android-frame-1"
                                data-width="50" data-height="50"></span>
                            <p>10000 mAh Capacity</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify m-auto" data-icon="material-symbols:water-drop-outline-rounded"
                                data-width="50" data-height="50"></span>
                            <p>Aluminum alloy+PC.</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify m-auto" data-icon="tabler:device-mobile-plus" data-width="50"
                                data-height="50"></span>
                            <p>Smart Phones + Watches</p>
                        </div>
                    </li>
                </ul>
                <div class="text-center content-center w-3/3">
                    <button type="button"
                        class="bg-orange-500 text-black text-sm font-light flex-wrap px-5 py-3 m-4 my-6 rounded-[30px] select-none hover:bg-white transition-colors delay-200 ease-out peer">
                        Shop Now
                    </button>
                </div>
            </div>
        </div>


        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            class="flex flex-col gap-0 justify-between w-full h-[950px] mt-96">
            <div class="basis-1/4 font-semibold text-center">
                <h2 class="text-5xl w-2/4 font-[Montserrat] m-auto">Bring Quality Gadgets into Your Home</h2>
            </div>

            <div class="basis-3/4 h-max">
                <img loading="lazy" src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/RemaxTWS-10Plus-2-1.webp"
                    class="h-full w-full object-center object-fixed aspect-video rounded-[20px]">
            </div>
        </div>


        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="mt-12">
            <h2 class="text-3xl w-full text-center font-semibold font-[Montserrat]">Accessories</h2>
            <div class="w-full">

            </div>
        </div>

        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            class="relative w-full mx-auto p-6 select-none h-auto">
            <div
                class="carousel-wrapper m-auto scrollbar-none overflow-hidden [&>*]:h-[350px] sm:[&>*]:h-[550px] md:[&>*]:h-[550px] lg:[&>*]:h-[550px] xl:[&>*]:h-[450px]">

                <div
                    class="carousel-container w-full h-max m-auto flex will-change-transform transition-transform duration-500 ease-in-out items-center justify-start gap-x-7 md:gap-x-4 lg:gap-x-2 [&>*]:h-full [&>*]:mx-1.5 [&>*]:w-[calc(100%-20px)] md:[&>*]:mx-0.5 md:[&>*]:w-[48%] lg:[&>*]:mx-0 lg:[&>*]:w-[32.6%] xl:[&>*]:w-[24.35%] 2xl:[&>*]:w-[24.25%]">


                    <div
                        class="relative shrink-0 pt-2 rounded-xl shadow-md flex flex-col gap-2 justify-between bg-neutral-100">

                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="flex flex-col gap-2 my-4 mx-2">
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:heart-outline" data-width="32" data-height="32"></span>
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:eye-outline" data-width="32" data-height="32"></span>
                            </div>
                        </div>
                        <a href="https://pockeygadgets.co.uk/product/magnetic-power-bank-uk-15w-10000mah/"
                            class="absolute inset-2 z-10 image-toggle-trigger" aria-label="View Power Bank Product"></a>

                        <img loading="lazy"
                            src="https://pockeygadgets.co.uk/wp-content/uploads/2020/05/power-bank-product.webp"
                            data-hover-image="https://pockeygadgets.co.uk/wp-content/uploads/2020/05/powerbank-product-imag3-3.webp"
                            alt="Power Bank 15W magnetic 10000mAh"
                            class="w-full basis-3/4 px-1 object-cover aspect-[4/3] transition-all duration-300 hover:scale-110" />

                        <div class="flex flex-col gap-3">
                            <div class="px-1">
                                <span class="font-mono text-sm text-gray-600">POWER BANKS</span>
                                <h3 class="font-[Montserrat] font-semibold text-base lg:text-lg leading-tight">
                                    Power Bank 15W magnetic 10000mAh
                                </h3>
                            </div>

                            <div class="flex flex-row justify-between items-center text-xs md:text-sm 3xl:text-base gap-2">
                                <span class="font-mono text-gray-800 pl-3">£24.99</span>
                                <a href="/?add-to-cart=2382"
                                    class="font-mono flex gap-3 items-center pl-4 py-3 pr-6 rounded-lg bg-white text-gray-800 z-20">
                                    Add To Basket
                                    <span class="iconify text-md" data-icon="mdi:shopping-outline"></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div
                        class="relative shrink-0 pt-2 rounded-xl shadow-md flex flex-col gap-2 justify-between bg-neutral-100">

                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="flex flex-col gap-2 my-4 mx-2">
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:heart-outline" data-width="32" data-height="32"></span>
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:eye-outline" data-width="32" data-height="32"></span>
                            </div>
                        </div>
                        <a href="https://pockeygadgets.co.uk/product/magnetic-power-bank-uk-15w-10000mah/"
                            class="absolute inset-2 z-10 image-toggle-trigger" aria-label="View Power Bank Product"></a>

                        <img loading="lazy"
                            src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/airpods-product-700x798.webp"
                            data-hover-image="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/ChatGPT-Image-Jul-17-2025-04_40_27-PM-700x798.png"
                            alt="Power Bank 15W magnetic 10000mAh"
                            class="w-full basis-3/4 px-1 object-cover aspect-[4/3] transition-all duration-300 hover:scale-110" />

                        <div class="flex flex-col gap-3">
                            <div class="px-1">
                                <span class="font-mono text-sm text-gray-600">EAR BUDS</span>
                                <h3 class="font-[Montserrat] font-semibold text-base lg:text-lg leading-tight">
                                    Remax(TWS-10Plus)
                                </h3>
                            </div>

                            <div class="flex flex-row justify-between items-center text-xs md:text-sm 3xl:text-base gap-2">
                                <span class="font-mono text-gray-800 pl-3">£24.99</span>
                                <a href="/?add-to-cart=2382"
                                    class="font-mono flex gap-3 items-center pl-4 py-3 pr-6 rounded-lg bg-white text-gray-800 z-20">
                                    Add To Basket
                                    <span class="iconify text-md" data-icon="mdi:shopping-outline"></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div
                        class="relative shrink-0 pt-2 rounded-xl shadow-md flex flex-col gap-2 justify-between bg-neutral-100">

                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="flex flex-col gap-2 my-4 mx-2">
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:heart-outline" data-width="32" data-height="32"></span>
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:eye-outline" data-width="32" data-height="32"></span>
                            </div>
                        </div>
                        <a href="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/headphones-700x798-1.webp"
                            class="absolute inset-2 z-10 image-toggle-trigger" aria-label="View Power Bank Product"></a>

                        <img loading="lazy"
                            src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/headphones-700x798-1.webp"
                            data-hover-image="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/headphones-700x798-1.webp"
                            alt="Power Bank 15W magnetic 10000mAh"
                            class="w-full basis-3/4 px-1 object-cover aspect-[4/3] transition-all duration-300 hover:scale-110" />

                        <div class="flex flex-col gap-3">
                            <div class="w-full flex justify-start items-center gap-2 mx-1">
                                <span class="iconify text-yellow-400" data-icon="mdi:star" data-width="24"
                                    data-height="24"></span>
                                <b>5.00</b>
                                <small class="text-gray-400">(1 reviews)</small>
                            </div>
                            <div class="px-1">
                                <span class="font-mono text-sm text-gray-600">
                                    HEADPHONES
                                </span>
                                <h3 class="font-[Montserrat] font-semibold text-base lg:text-lg leading-tight">
                                    Gaming G2000 Pro Bluetooth Head mounted Gaming Wired Wireless Headset
                                </h3>
                            </div>

                            <div class="flex flex-row justify-between items-center text-xs md:text-sm 3xl:text-base gap-2">
                                <span class="font-mono text-gray-800 pl-3">£39.99</span>
                                <a href="/?add-to-cart=2382"
                                    class="font-mono flex gap-3 items-center pl-4 py-3 pr-6 rounded-lg bg-white text-gray-800 z-20">
                                    Add To Basket
                                    <span class="iconify text-md" data-icon="mdi:shopping-outline"></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div
                        class="relative shrink-0 pt-2 rounded-xl shadow-md flex flex-col gap-2 justify-between bg-neutral-100">

                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="flex flex-col gap-2 my-4 mx-2">
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:heart-outline" data-width="32" data-height="32"></span>
                                <span
                                    class="iconify z-20 text-black bg-orange-500 rounded-full p-2 hover:text-white hover:bg-black ml-auto mr-2"
                                    data-icon="mdi:eye-outline" data-width="32" data-height="32"></span>
                            </div>
                        </div>
                        <a href="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/headphones-700x798-1.webp"
                            class="absolute inset-2 z-10 image-toggle-trigger" aria-label="View Power Bank Product"></a>

                        <img loading="lazy"
                            src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/power-bank-product-2-700x798.webp"
                            data-hover-image="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/porer-bank-product-1-700x798.webp"
                            alt="Power Bank 15W magnetic 10000mAh"
                            class="w-full basis-3/4 px-1 object-cover aspect-[4/3] transition-all duration-300 hover:scale-110" />

                        <div class="flex flex-col gap-3">
                            <div class="w-full flex justify-start items-center gap-2 mx-1">
                                <span class="iconify text-yellow-400" data-icon="mdi:star" data-width="24"
                                    data-height="24"></span>
                                <b>5.00</b>
                                <small class="text-gray-400">(1 reviews)</small>
                            </div>
                            <div class="px-1">
                                <span class="font-mono text-sm text-gray-600">
                                    POWER BANKS
                                </span>
                                <h3 class="font-[Montserrat] font-semibold text-base lg:text-lg leading-tight">
                                    Power Bank watch magnetic wireless charging comes with Double wire brackets and
                                    stand.
                                </h3>
                            </div>

                            <div class="flex flex-row justify-between items-center text-xs md:text-sm 3xl:text-base gap-2">
                                <span class="font-mono text-gray-800 pl-3">£39.99</span>
                                <a href="/?add-to-cart=2382"
                                    class="font-mono flex gap-3 items-center pl-4 py-3 pr-6 rounded-lg bg-white text-gray-800 z-20">
                                    Add To Basket
                                    <span class="iconify text-md" data-icon="mdi:shopping-outline"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button"
                class="prevBtn absolute -left-1 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full w-10 h-10 md:items-center md:justify-center z-10 md:flex cursor-pointer overflow-hidden">
                <span class="iconify text-xl aspect-square w-full h-full md:w-auto md:h-auto"
                    data-icon="mdi:arrow-left-thin" data-width="24" data-height="24"></span>
            </button>

            <button type="button"
                class="nextBtn absolute -right-1 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full w-10 h-10 md:items-center md:justify-center z-10 md:flex cursor-pointer overflow-hidden">
                <span class="iconify text-xl aspect-square w-full h-full md:w-auto md:h-auto"
                    data-icon="mdi:arrow-right-thin" data-width="24" data-height="24"></span>
            </button>
        </div>

        <div data-aos="fade-down" data-aos-anchor-placement="top-bottom"
            class="mt-14 flex justify-between items-center space-x-4 py-4 bg-zinc-50 w-full">
            <div class="flex items-center space-x-2 p-4 rounded-lg">
                <span class="bg-yellow-400 p-4 rounded-full text-black font-extralight">
                    <span class="iconify" data-icon="mdi:cash-multiple" data-width="24" data-height="24"></span>
                </span>
                <div>
                    <h4 class="font-semibold">Money Guarantee</h4>
                    <p class="text-sm">Within 30 days for an exchange.</p>
                </div>
            </div>

            <div class="flex items-center space-x-2 p-4 rounded-lg">
                <span class="bg-yellow-400 p-4 rounded-full text-black font-extralight">
                    <span class="iconify" data-icon="mdi:credit-card-multiple" data-width="24" data-height="24"></span>
                </span>
                <div>
                    <h4 class="font-semibold">Flexible Payment</h4>
                    <p class="text-sm">Pay with Multiple Credit Cards</p>
                </div>
            </div>

            <div class="flex items-center space-x-2 p-4 rounded-lg">
                <span class="bg-yellow-400 p-4 rounded-full text-black font-extralight">
                    <span class="iconify" data-icon="mdi:clock-check" data-width="24" data-height="24"></span>
                </span>
                <div>
                    <h4 class="font-semibold">Online Support</h4>
                    <p class="text-sm">24 hours a day, 7 days a week</p>
                </div>
            </div>
        </div>

    </div>


@endsection
