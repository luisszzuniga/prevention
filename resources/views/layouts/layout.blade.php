    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/lery.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>

    @vite(['resources/js/layout/main.js'])
    @vite(['resources/js/app.ts'])

    @vite(['resources/css/style.css'])
    @vite(['resources/css/layout/slicknav.css'])
    @vite(['resources/css/app.css'])

    <title> @yield('title','Base')</title>
    @yield('header')
</head>

<body>
    @include('layouts.nav')

@yield('content')

    @include('layouts.back-top')
    @include('layouts.footer')

</body>

</html>
