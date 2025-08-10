<footer
    class="mt-10 flex flex-col justify-between min-h-56  max-h-fit min-w-full max-w-full bg-neutral-900 text-white text-xs sm:text-sm md:text-base 2xl:text-xl">
    <div
        class="w-full max-h-1/2 grid grid-cols-[repeat(auto-fit,minmax(250px,auto))] gap-16 justify-center items-center py-18 px-24">

        <div class="flex flex-col gap-5 justify-around min-w-[250px] max-w-[250px] lg:min-w-fit lg:max-w-fit">
            <div class="w-24">
                <img src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/pockey-logo-dark-scaled.webp"
                    alt="PockeyGadgets Logo" />
            </div>
            <p class="text-xs sm:text-sm md:text-base 2xl:text-xl">Whether you're a trendsetter, a minimalist, or an
                adventurer at heart, Pockey
                Gadgets has something for
                everyone. Our diverse range of styles caters to various personas.</p>
            {{-- <div class="flex space-x-4">
                
                <div
                    class="bg-gray-300 rounded-full p-3 transition-transform duration-300 hover:scale-105 hover:filter hover:blur-sm cursor-pointer">
                    
                </div>
            </div> --}}
            <div class="flex flex-row space-x-4 justify-around text-2xl w-2/3">
                <span
                    class="rounded-full shadow-inner bg-gray-600 shadow-gray-800 text-white p-2 cursor-pointer hover:bg-amber-300 hover:shadow-yellow-100">
                    <span class="iconify" data-icon="mdi:facebook" data-inline="false"></span>
                </span>
                <span
                    class="rounded-full shadow-inner bg-gray-600 shadow-gray-800 text-white p-2 cursor-pointer hover:bg-amber-300 hover:shadow-yellow-100">
                    <span class="iconify" data-icon="mdi:twitter" data-inline="false"></span>
                </span>
                <span
                    class="rounded-full shadow-inner bg-gray-600 shadow-gray-800 text-white p-2 cursor-pointer hover:bg-amber-300 hover:shadow-yellow-100">
                    <span class="iconify" data-icon="mdi:instagram" data-inline="false"></span>
                </span>
                <span
                    class="rounded-full shadow-inner bg-gray-600 shadow-gray-800 text-white p-2 cursor-pointer hover:bg-amber-300 hover:shadow-yellow-100">
                    <span class="iconify" data-icon="mdi:linkedin" data-inline="false"></span>
                </span>
            </div>
        </div>
        <div class="flex flex-col gap-5 justify-around min-w-[250px] max-w-[250px] lg:min-w-fit lg:max-w-fit">
            <h1 class="text-xl lg:text-2xl 2xl:text-3xl font-semibold">Cutomer Support</h1>
            <div>
                <ul
                    class="list-none flex flex-col gap-1 lg:gap-2 2xl:gap-3 text-xs sm:text-sm md:text-base 2xl:text-xl">
                    @section('common-menu-items')
                        @parent
                    @show
                    <li class="hover:text-gray-500 cursor-pointer">Our Products</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col gap-5 justify-around min-w-[250px] max-w-[250px] lg:min-w-fit lg:max-w-fit">
            <h1 class="text-xl lg:text-2xl 2xl:text-3xl font-semibold">Accessibility</h1>
            <div>
                <ul
                    class="list-none flex flex-col gap-1 lg:gap-2 2xl:gap-3 text-xs sm:text-sm md:text-base 2xl:text-xl">
                    @yield('accessibility-options')
                </ul>
            </div>
        </div>
        <div class="flex flex-col gap-5 justify-around min-w-[250px] max-w-[250px] lg:min-w-fit lg:max-w-fit">
            <h1 class="text-xl lg:text-2xl 2xl:text-3xl font-semibold">Let's get in touch</h1>
            <label for="visitor-email">
                <span
                    class="list-none flex flex-col gap-1 lg:gap-2 2xl:gap-3 text-xs sm:text-sm md:text-base 2xl:text-xl">Sign
                    up to get first
                    dibs on new
                    arrivals, sales, exclusive content, events and
                    more! </span></label>
            <div
                class="w-full h-12 flex flex-row justify-between rounded px-3 text-black bg-zinc-300 focus-within:bg-white delay-100">
                <input type="email"
                    class="w-3/4 p-4 text-lg outline-1 outline-sky-100 h-1/2 m-auto hover:shadow-inner hover:shadow-sky-50 focus:outline-none focus:hover:shadow-none focus:h-full font-mono transition delay-100"
                    name="visitor-email">
                <div class="h-full flex items-center justify-center text-3xl">
                    <span class="iconify" data-icon="material-symbols:arrow-right-alt" data-inline="false"></span>
                </div>
            </div>
        </div>
    </div>
    <hr class="text-neutral-700 shadow-inner shadow-gray-800 opacity-70">
    <div class="py-6 px-24 flex flex-col md:flex-row justify-between gap-10 sm:gap-14 items-center realtive">
        <div>
            &copy; {{ date('Y') }} Pockey Gadgets All rights reserved. Designed by <a
                href="https://pockeygadgets.co.uk/" class="text-orange-500">Pockey Gadgets</a>
        </div>
        <div class="flex flex-col sm:flex-row gap-6 sm:gap-4 items-center pb-10 sm:pb-0">
            <span class="flex flex-col gap-0 rounded">
                <span class="bg-blue-950 basis-1/12 mx-0.5 6 rounded-t-lg shadow-sm shadow-blue-950 p-0.5">
                </span>
                <span class="bg-white basis-10/12 border-2 mx-0.5 border-white">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa"
                        class="w-8">
                </span>
                <span class="bg-yellow-300 basis-1/12 mx-0.5 6 rounded-b-lg shadow-sm shadow-yellow-300 p-0.5">
                </span>
            </span>
            <img src="https://download.logo.wine/logo/Mastercard/Mastercard-Logo.wine.png" alt="Mastercard"
                class="w-8">
            <span class="bg-white rounded p-1">
                <img src="https://imagazine.pl/wp-content/uploads/2018/01/Apple-Pay-logo.png" alt="Apple Pay"
                    class="w-8 scale-[4]">
            </span>
            <span class="bg-white rounded">
                <img src="https://download.logo.wine/logo/Google_Pay/Google_Pay-Logo.wine.png" alt="Google Pay"
                    class="w-8">
            </span>
        </div>
    </div>
    @yield('consent-box')
</footer>
