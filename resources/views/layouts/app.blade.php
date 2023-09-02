<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--
    ---
    --- Site options
    ---
    ---->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!--Site Icon-->
    <link rel="icon" type="image/x-icon" href="{{ url('images/gawazyLogos/gawazy-logo-light.svg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--styles-->
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/toggleLang.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/search.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/services-offers.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/service-offer-pages.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/starRate.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/auth.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer.css')}}">
    <!--online styles-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Scripts -->
    <script src="{{ url('assets/js/toggleOverlay.js') }}"></script>
    <script src="{{ url('assets/js/showDescription.js') }}"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

    @yield('body')

</html>
