<header
    class="fixed top-0 px-22 pb-4 pt-2 sm:pt-0 sm:pb-0 min-w-full max-w-full h-36 sm:h-24 bg-white flex flex-col sm:flex-row justify-between items-center shadow-lg shadow-gray-100">
    <menu class="max-h-full flex flex-row gap-15 justify-left items-center basis-2/3">
        <div>
            <a href="{{ route('home') }}">
                <div class="w-24">
                    <img src="https://pockeygadgets.co.uk/wp-content/uploads/2025/04/Pockey-logo3.png"
                        alt="PockeyGadgets Logo" />
                </div>
            </a>
        </div>
        <div>
            <ul class="list-none hidden xl:flex flex-row gap-6">
                @yield('nav-menu-items')
            </ul>
            @include('templates.sidebar')
        </div>
    </menu>
    <nav class="flex flex-wrap justify-around gap-6 sm:gap-4 max-w-56 pt-4 sm:pt-0">
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
