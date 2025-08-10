@section('nav-menu-items')
    @php
        $currentRouteName = Route::currentRouteName();
        $routesToImplement = [
            [
                'routeName' => 'home',
                'routeLabel' => 'Home',
            ],
            [
                'routeName' => 'about_us',
                'routeLabel' => 'About Us',
            ],
            [
                'routeName' => 'contact_us',
                'routeLabel' => 'Contact Us',
            ],
            [
                'routeName' => 'shop',
                'routeLabel' => 'Shop',
            ],
            [
                'routeName' => 'blog',
                'routeLabel' => 'Blog',
            ],
            [
                'routeName' => 'faqs',
                'routeLabel' => 'Faqs',
            ],
        ];
    @endphp
    @foreach ($routesToImplement as $routeAssoc)
        <li class="hover:text-gray-500">
            <label class="text-center content-center" for="smallscreen-menu-toggle">
                @php
                    $routeNames = [$routeAssoc['routeName'] ?? null, $routeAssoc['routeUrl'] ?? null];
                    $isActive = in_array($currentRouteName, $routeNames);
                @endphp

                @php
                    $linkClass = $isActive
                        ? 'text-neutral-600 drop-shadow-md drop-shadow-amber-300 cursor-default'
                        : '';
                @endphp

                @php
                    $href = '';
                    if ($routeAssoc['routeName']) {
                        $href = $currentRouteName === $routeAssoc['routeName'] ? '#' : route($routeAssoc['routeName']);
                    } elseif ($routeAssoc['routeUrl']) {
                        $href = $currentRouteName === $routeAssoc['routeUrl'] ? '#' : $routeAssoc['routeUrl'];
                    }
                @endphp

                <a class="{{ $linkClass }}" href="{{ $href }}"
                    @if ($isActive) onclick="event.preventDefault();" @endif>
                    {{ $routeAssoc['routeLabel'] }}
                </a>
            </label>
        </li>
    @endforeach
@endsection

@section('common-menu-items')
    <li class="hover:text-gray-500 cursor-pointer">Home</li>
    <li class="hover:text-gray-500 cursor-pointer">About Us</li>
    <li class="hover:text-gray-500 cursor-pointer">Contact Us</li>
@endsection

@section('accessibility-options')
    <li class="hover:text-gray-500 cursor-pointer">Privacy Policy</li>
    <li class="hover:text-gray-500 cursor-pointer">Terms of Service</li>
    <li class="hover:text-gray-500 cursor-pointer">Shipping Policy</li>
    <li class="hover:text-gray-500 cursor-pointer">Return Policy</li>
@endsection

@section('consent-box')
    <div>
        <input type="checkbox" id="consent-box-toggle" class="peer cursor-pointer hidden" />
        <label for="consent-box-toggle"
            class="p-4 pb-6 bg-white font-sans text-gray-900 rounded-md fixed right-1/3 -bottom-2 sm:right-12 sm:-bottom-12 outline-1 outline-gray-400 rounded-t-lg peer-checked:translate-y-full peer-checked:transition-normal peer-checked:text-transparent peer-checked:hover:translate-y-full hover:-translate-y-2 sm:hover:-translate-y-8 transition-transform delay-200 cursor-pointer z-40 peer-disabled:hidden">
            Manage Consent
        </label>

        <div
            class="hidden p-10 bg-white text-gray-800 rounded-xl fixed right-0 -bottom-full transition delay-200 z-50 shadow-md
            sm:peer-checked:bottom-4 peer-checked:bottom-0 peer-checked:flex flex-col gap-2 w-full md:w-[500px] md:right-12 peer-disabled:hidden">
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
                <button class="btn btn-md bg-orange-600 font-thin text-white md:w-1/3 text-sm md:text-base">
                    <label class="w-full h-full text-center content-center cursor-pointer"
                        for="consent-box-toggle">Accept</label>
                </button>
                <button class="btn btn-md font-thin md:w-1/3 text-sm md:text-base">
                    <label class="w-full h-full text-center content-center cursor-pointer"
                        for="consent-box-toggle">Deny</label>
                </button>
                <button class="btn btn-md font-thin md:w-1/3 text-sm md:text-base">
                    <label class="w-full h-full text-center content-center cursor-pointer" for="consent-box-toggle">View
                        Preferences</label>
                </button>
            </div>
            <div class="mt-1 m-auto flex flex-row justify-center gap-4 text-xs text-blue-500 underline"><a
                    class="hover:shadow-inner hover:shadow-sky-200" href="">Cookie
                    Policy</a> <a class="hover:shadow hover:shadow-sky-200" href="">Privacy
                    Statement</a> <a class="hover:shadow hover:shadow-sky-200" href="">Important</a></div>
        </div>
    </div>
@endsection
