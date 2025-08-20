@include('components.sections')
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('main-title', 'Affordable Gadgets UK | Wireless Chargers, Headphones & More – Pockey Gadgets')</title>
    @vite('resources/css/app.css')
    @vite('resources/css/fonts.css')
    @vite('resources/css/extra-classes.css')
    @vite('resources/js/app.js')
    @vite('resources/js/generic-jquery-scripts.js')
    @vite('resources/js/global-functions.js')
</head>

<body class="w-full h-screen">
    @include('templates.header')
    @include('templates.main-content')
    @include('templates.footer')
</body>

</html>
