<header
    class="fixed top-0 px-22 w-[100vw] h-28 sm:h-24 bg-white flex flex-col sm:flex-row justify-between items-center shadow-lg shadow-gray-100">
    <menu class="max-h-full flex flex-row gap-15 justify-left items-center basis-2/3">
        <div>
            <div class="w-24">
                <img src="https://pockeygadgets.co.uk/wp-content/uploads/2025/04/Pockey-logo3.png"
                    alt="PockeyGadgets Logo" />
            </div>
        </div>
        <div>
            <ul class="list-none hidden xl:flex flex-row gap-6">
                @yield('main-menu-items')
            </ul>
            @include('templates.sidebar')
        </div>
    </menu>
    <nav class="flex flex-wrap justify-around gap-4 max-w-56">
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
