@section('common-menu-items')
    <li class="hover:text-gray-500 cursor-pointer">Home</li>
    <li class="hover:text-gray-500 cursor-pointer">About Us</li>
    <li class="hover:text-gray-500 cursor-pointer">Contact Us</li>
@endsection

@section('main-menu-items')
    @yield('common-menu-items')
    <li class="hover:text-gray-500 cursor-pointer">Shop</li>
    <li class="hover:text-gray-500 cursor-pointer">Blog</li>
    <li class="hover:text-gray-500 cursor-pointer">FAQs</li>
@endsection

@section('accessibility-options')
    <li class="hover:text-gray-500 cursor-pointer">Privacy Policy</li>
    <li class="hover:text-gray-500 cursor-pointer">Terms of Service</li>
    <li class="hover:text-gray-500 cursor-pointer">Shipping Policy</li>
    <li class="hover:text-gray-500 cursor-pointer">Return Policy</li>
@endsection

@section('consent-box')
    {{-- <div class="relative p-10"> --}}
    <div>
        <input type="checkbox" id="consent-box-toggle" class="peer cursor-pointer hidden" />
        {{-- <label for="toggle" class="cursor-pointer peer-checked:hidden"> --}}
        <label for="consent-box-toggle"
            class="p-4 pb-6 bg-white font-sans text-gray-900 rounded-md fixed right-12 -bottom-12 outline-1 outline-gray-400 rounded-t-lg peer-checked:translate-y-full peer-checked:transition-normal peer-checked:text-transparent peer-checked:hover:translate-y-full hover:-translate-y-8 transition-transform delay-200 cursor-pointer">
            Manage Consent
        </label>

        <div
            class="hidden p-10 bg-white text-gray-800 rounded-xl absolute right-0 -bottom-full transition delay-200 z-10 shadow-md
            peer-checked:bottom-4 peer-checked:flex flex-col gap-2 w-full md:w-[500px] md:right-12">
            <div class="flex flex-row justify-between">
                <img class="w-1/6"
                    src="https://pockeygadgets.co.uk/wp-content/uploads/2025/07/pockey-logo-light-scaled.webp"
                    alt="PockeyGadgets Logo" />
                <h1 class="font-sans text-gray-900">Manage Consent</h1>
                <label for="consent-box-toggle" class="cursor-pointer"><span
                        class="iconify hover:text-gray-500 cursor-pointer" data-icon="subway:crpss"
                        data-inline="false"></span></label>
            </div>
            <p>
                <small>To provide the best experiences, we use technologies like cookies to store and/or access device
                    information.
                    Consenting to these technologies will allow us to process data such as browsing behaviour or unique IDs
                    on
                    this site. Not consenting or withdrawing consent, may adversely affect certain features and functions.
                </small>
            </p>
            <div class="flex flex-col md:flex-row  justify-around gap-2">
                <button class="btn btn-md bg-orange-600 font-thin text-white md:w-1/3">Accept</button>
                <button class="btn btn-md font-thin md:w-1/3">Deny</button>
                <button class="btn btn-md font-thin md:w-1/3">View Preferences</button>
            </div>
            <div class="mt-1 m-auto flex flex-row justify-center gap-4 text-xs text-blue underline"><a href="">Cookie
                    Policy</a> <a href="">Privacy
                    Statement</a> <a href="">Important</a></div>
        </div>
    </div>
@endsection
