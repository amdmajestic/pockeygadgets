<header
    class="fixed top-0 px-14 sm:px-20 md:px-24 pb-4 pt-2 sm:pt-0 sm:pb-0 min-w-full max-w-full h-max sm:h-24 bg-white flex flex-col sm:flex-row justify-between items-center shadow-sm shadow-gray-200 z-50">
    <menu
        class="max-h-full flex flex-col sm:flex-row gap-6 sm:gap-16 justify-center sm:justify-start items-center basis-2/3">
        <div>
            <a href="{{ Route::authRoute('home') }}">
                <div class="w-24">
                    <img src="https://pockeygadgets.co.uk/wp-content/uploads/2025/04/Pockey-logo3.png"
                        alt="PockeyGadgets Logo" />
                </div>
            </a>
        </div>
        <div>
            <ul class="list-none hidden xl:flex flex-row gap-8 md:gap-10">
                @yield('nav-menu-items')
            </ul>
            @include('templates.sidebar')
        </div>
    </menu>
    <nav class="flex flex-wrap justify-around gap-6 sm:gap-4 max-w-56 pt-6 sm:pt-0">
        <span class="iconify hover:text-gray-500 cursor-pointer" data-icon="oui-search" data-width="24"
            data-height="24"></span>
        <span class="iconify hover:text-gray-500 cursor-pointer" data-icon="mdi-account" data-width="24"
            data-height="24"></span>
        <span class="iconify hover:text-gray-500 cursor-pointer" data-icon="mdi:heart-multiple-outline" data-width="24"
            data-height="24"></span>
        <div class="relative inline-block">
            <span class="iconify hover:text-gray-500 cursor-pointer" data-icon="mdi:shopping-search-outline"
                data-width="24" data-height="24"></span>
            <div
                class="absolute -top-1 left-4 w-5 h-5 text-center text-white font-semibold bg-orange-500 rounded-full border-2 border-white text-[10px]">
                0</div>
        </div>
    </nav>
</header>
