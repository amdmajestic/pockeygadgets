@extends('layouts.mainlayout')

@section('main-content-template')
    @parent
    <div class="w-11/12 h-full m-auto flex flex-col justify-between items-center">
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

                        $homeImageSlideshow = [
                            [
                                'image' => 'https://cdn.mos.cms.futurecdn.net/jjGaQHKdA3PVh7nhdmQ8jF.jpg',
                                'url' => '#',
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
                                        'content' => [
                                            '5.3 Bluetooth version · Esports 7.1 Sound Effects · Wired / wireless switching',
                                        ],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['btn'],
                                        'text-alignment' => 'l',
                                        'color' => 'b',
                                        'content' => 'Buy Headset',
                                    ],
                                ],
                            ],
                            [
                                'image' =>
                                    'https://pockeygadgets.co.uk/wp-content/uploads/2025/07/RemaxTWS-10Plus-1.webp',
                                'url' => '#',
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
                                        'size' => 'sm',
                                        'content' => [
                                            'Wireless 5.1,fast connection, low latency.',
                                            '13mm powerful moving-coil speaker, a surging sound.',
                                            'Open the charging case and auto pair, easier access.',
                                            'Compact and portable, more convenient.',
                                            'Brand new LED, high-definition digital display.',
                                        ],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['ol'],
                                        'content' => ['mno'],
                                    ],
                                    [
                                        'type' => $slideshowContentTypes['btn'],
                                        'text-alignment' => 'l',
                                        'content' => 'Buy Remax Ear Buds',
                                    ],
                                ],
                            ],
                        ];
                    @endphp
                    @for ($i = 0; $i < 5; $i++)
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
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} text-lg flex-wrap list-disc list-inside {{ 'text-' . (isset($dataElement['size']) && isset($slideshowContentSizes[$dataElement['size']]) ? $slideshowContentSizes[$dataElement['size']] : 'sm') }}">
                                                    @foreach ($dataElement['content'] as $listItemContent)
                                                        <li class="list-item">{{ $listItemContent }}</li>
                                                    @endforeach
                                                </ul>
                                            @break

                                            @case($slideshowContentTypes['ol'])
                                                <ol
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} text-lg flex-wrap list-decimal list-inside {{ 'text-' . (isset($dataElement['size']) && isset($slideshowContentSizes[$dataElement['size']]) ? $slideshowContentSizes[$dataElement['size']] : 'sm') }}">
                                                    @foreach ($dataElement['content'] as $listItemContent)
                                                        <li class="list-item">{{ $listItemContent }}</li>
                                                    @endforeach
                                                </ol>
                                            @break

                                            @case($slideshowContentTypes['btn'])
                                                <div
                                                    class="{{ 'text-' . (isset($dataElement['color']) && isset($slideshowTextColor[$dataElement['color']]) ? $slideshowTextColor[$dataElement['color']] : 'white') }} w-full h-max {{ 'text-' . (isset($dataElement['text-alignment']) ? $slideshowTextAlignment[$dataElement['text-alignment']] : 'center') }}">
                                                    <button type="button"
                                                        class="bg-orange-500 tex-white text-center content-center text-lg flex-wrap px-6 py-4 m-4 rounded-[30px]">
                                                        {{ $dataElement['content'] }}
                                                    </button>
                                                </div>
                                            @break

                                            {{-- @default --}}
                                        @endswitch
                                    @endforeach
                                </div>
                                <img src={{ $homeImageSlideshow[$i]['image'] ?? $homeImageSlideshow[0]['image'] }}
                                    alt="Headphone Demo Image" class="w-full h-[550px] rounded-[6%] shadow-lg bg-cover">
                            </a>
                        </div>
                    @endfor
                </div>

                <button
                    class="absolute -left-3 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-r-2xl md:rounded-br-2xl"
                    id="prevBtn">
                    <span class="iconify hover:text-gray-500 cursor-pointer scale-[2] md:scale-[3] font-extralight"
                        data-icon="mdi-light:chevron-left" data-width="24" data-height="24"></span>
                </button>
                <button
                    class="absolute -right-3 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-l-2xl md:rounded-bl-2xl"
                    id="nextBtn">
                    <span class="iconify hover:text-gray-500 cursor-pointer scale-[2] md:scale-[3] font-extralight"
                        data-icon="mdi-light:chevron-right" data-width="24" data-height="24"></span>
                </button>
            </div>
        </div>

        {{-- <div class="grid grid-cols-[repeat(auto-fit,minmax(325px,auto))] gap-6 mt-12 overflow-x-scroll w-full max-h-[350px] scrollbar-none"> --}}
        <div class="flex flex-row justify-around gap-8 mt-12 overflow-x-scroll w-11/12 h-auto scrollbar-none">
            @for ($i = 0; $i < 3; $i++)
                <div class="h-max">
                    <img class="w-[550px] h-[175px] md:w-[650px] md:h-[275px] xl:w-[750px] xl:h-[375px] aspect-[4/3] bg-contain rounded-3xl"
                        src="https://cdn.mos.cms.futurecdn.net/jjGaQHKdA3PVh7nhdmQ8jF.jpg" alt="Headphone Demo Image">
                </div>
            @endfor
        </div>

        <div class="flex flex-row rounded-[20px] mt-12">
            <div class="w-full rounded-[20px]">
                <a href="#">
                    <img src="https://cdn.mos.cms.futurecdn.net/jjGaQHKdA3PVh7nhdmQ8jF.jpg" alt="Headphone Demo Image"
                        class="w-full h-[550px] rounded-[20px] shadow-lg bg-cover">
                </a>
            </div>
        </div>

        <div
            class="w-[550px] md:w-[950px] h-full flex flex-col md:flex-row gap-6 justify-evenly md:justify-around rounded-[20px] pt-12">
            {{-- <a href="#"> --}}
            <div class="basis-2/3 min-h-full content-center">
                <img src="https://cdn.mos.cms.futurecdn.net/jjGaQHKdA3PVh7nhdmQ8jF.jpg" alt="Headphone Demo Image"
                    class="w-5/6 h-[550px] aspect-[4/3] rounded-[20px] shadow-lg bg-cover m-auto">
            </div>
            {{-- </a> --}}
            <div class="m-10 md:m-0 flex flex-col gap-6 basis-1/3 text-center">
                <h1 class="text-bold text-5xl">15W Magnetic Power Bank 10000mAh </h1>
                <p class="text-gray-400 font-sans text-lg">
                    No need to worry about choosing what you need.
                </p>
                <ul
                    class="grid grid-cols-2 gap-x-4 gap-y-10 md:gap-x-7 md:gap-y-18 text-wrap text-center text-base [&>*]:w-28">
                    <li>
                        <div>
                            <span class="iconify m-auto" data-icon="mdi:waveform" data-width="50" data-height="50"></span>
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
            </div>
        </div>
    </div>
@endsection
