<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/layout/vendor/modernizr-3.5.0.min.js'])
    @vite(['resources/js/layout/vendor/jquery-1.12.4.min.js'])

    @vite(['resources/js/layout/popper.min.js'])
    @vite(['resources/js/layout/vendor/bootstrap.min.js'])
    @vite(['resources/js/layout/jquery.slicknav.min.js'])
    @vite(['resources/js/layout/owl.carousel.min.js'])
    @vite(['resources/js/layout/slick.min.js'])
    @vite(['resources/js/layout/wow.min.js'])
    @vite(['resources/js/layout/animated.headline.js'])
    @vite(['resources/js/layout/jquery.magnific-popup.js'])
    @vite(['resources/js/layout/jquery.nice-select.min.js'])
    @vite(['resources/js/layout/jquery.sticky.js'])

    @vite(['resources/js/layout/plugin.js'])
    @vite(['resources/js/layout/main.js'])

    @vite(['resources/js/app.ts'])

    @vite(['resources/css/layout/bootstrap.min.css'])
    @vite(['resources/css/layout/owl.carousel.min.css'])
    @vite(['resources/css/layout/slicknav.css'])
    @vite(['resources/css/layout/flaticon.css'])
    @vite(['resources/css/layout/animate.min.css'])
    @vite(['resources/css/layout/magnific-popup.css'])
    @vite(['resources/css/layout/fontawesome-all.min.css'])
    @vite(['resources/css/layout/themify-icons.css'])
    @vite(['resources/css/layout/slick.css'])
    @vite(['resources/css/layout/nice-select.css'])
    @vite(['resources/css/layout/style.css'])
    @vite(['resources/css/app.css'])


    <title> @yield('title','Base')</title>
    @yield('header')



</head>

<body>
    @include('layouts.nav')

@yield('content')




</body>

</html>
