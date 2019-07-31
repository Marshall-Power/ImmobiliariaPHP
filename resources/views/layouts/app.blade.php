<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ImmoPro')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/1ce251ed92.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    @section('header')
    @include('includes.header')
    @include('cookieConsent::index')
    @show
    <div id="app" class="my-4">
        <main>
            @yield('content')
        </main>
    </div>
    @section('footer')
    @include('includes.footer')
    @show
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_usw0PXe09QidUHvTnTYhQJWCIaj64CU&callback=initMap">
    </script>
    @yield('js')
</body>

</html>
