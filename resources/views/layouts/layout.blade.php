<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/layout/vendor/modernizr-3.5.0.min.js'])
    @vite(['resources/js/layout/vendor/jquery-1.12.4.min.js'])

    @vite(['resources/js/layout/jquery.slicknav.min.js'])
    @vite(['resources/js/layout/slick.min.js'])
    @vite(['resources/js/layout/animated.headline.js'])
    @vite(['resources/js/layout/jquery.sticky.js'])

    @vite(['resources/js/layout/main.js'])
    @vite(['resources/js/app.ts'])

    @vite(['resources/css/layout/bootstrap.min.css'])
    @vite(['resources/css/layout/slicknav.css'])
    @vite(['resources/css/layout/animate.min.css'])
    @vite(['resources/css/layout/slick.css'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/app.css'])

    <title> @yield('title','Base')</title>
    @yield('header')



</head>

<body>
    @include('layouts.nav')

@yield('content')




</body>

</html>
