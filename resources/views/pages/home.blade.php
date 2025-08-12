@extends('layouts.mainlayout')

@section('main-content-template')
    @parent
    <div class="w-11/12 h-full m-auto flex flex-col justify-between items-center">
        <div class="relative w-full max-w-11/12 mx-auto" id="hero-section">
            <div class="overflow-hidden relative">
                <div class="flex flex-row transition-transform duration-500 ease-in-out rounded-[8%]" id="carouselSlides">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="w-full flex-shrink-0 rounded-[5%]">
                            <a href="#">
                                <img src="https://cdn.mos.cms.futurecdn.net/jjGaQHKdA3PVh7nhdmQ8jF.jpg"
                                    alt="Headphone Demo Image" class="w-full h-[550px] rounded-[6%] shadow-lg bg-cover">
                            </a>
                        </div>
                    @endfor
                </div>

                <button
                    class="absolute -left-2 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-2xl"
                    id="prevBtn">
                    <span class="iconify hover:text-gray-500 cursor-pointer scale-[2] md:scale-[3] font-extralight"
                        data-icon="mdi-light:chevron-left" data-width="24" data-height="24"></span>
                </button>
                <button
                    class="absolute -right-2 top-1/2 -translate-y-1/2 px-3 py-6 sm:px-5 md:py-8 bg-white rounded-lg md:rounded-2xl"
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
                <ul class="grid grid-cols-2 gap-x-4 gap-y-10 md:gap-x-7 md:gap-y-18 text-wrap text-center text-base [&>*]:w-28">
                    <li>
                        <div>
                            <span class="iconify" data-icon="mdi-light:chevron-left" data-width="50"
                                data-height="50"></span>
                            <p>Powerful, Room‑Filling Sound</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify" data-icon="mdi-light:chevron-left" data-width="50"
                                data-height="50"></span>
                            <p>10000 mAh Capacity</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify" data-icon="mdi-light:chevron-left" data-width="50"
                                data-height="50"></span>
                            <p>Aluminum alloy+PC.</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <span class="iconify" data-icon="mdi-light:chevron-left" data-width="50"
                                data-height="50"></span>
                            <p>Smart Phones + Watches</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
