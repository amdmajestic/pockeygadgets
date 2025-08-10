<div>
    <input type="checkbox" id="smallscreen-menu-toggle" class="peer cursor-pointer hidden" />
    <label for="smallscreen-menu-toggle" class="peer-checked:hidden cursor-pointer">
        <span class="iconify xl:hidden hover:text-gray-500 cursor-pointer" data-icon="clarity:menu-line"
            data-inline="false" data-width="24"></span>
    </label>

    <aside
        class="absolute top-0 left-0 w-full h-[100vh] z-50 hidden xl:peer-checked:hidden peer-checked:flex felx-row justify-between">
        <div class="min-w-[345px] max-w-[345px] bg-white overflow-x-scroll flex flex-col gap-16 justify-start p-6">
            <label for="smallscreen-menu-toggle"
                class="flex flex-row justify-start sm:justify-end text-3xl cursor-pointer">
                <span class="iconify hover:text-gray-500 cursor-pointer" data-icon="clarity:window-close-line"
                    data-inline="false"></span>
            </label>

            <ul
                class="[&>*]:py-2 [&>*]:uppercase [&>*]:font-thin [&>*]:font-sans [&>*]:border-t [&>*]:border-gray-300 w-5/6 ml-4 list-none xl:hidden flex flex-col gap-1">
                @yield('nav-menu-items')
            </ul>

        </div>
        <div class="basis-full bg-black opacity-45"></div>
    </aside>
</div>
