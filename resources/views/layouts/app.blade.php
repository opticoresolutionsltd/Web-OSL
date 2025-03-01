<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta-tags')
    <meta name="author" content="Opticore Solutions Ltd.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon/Opticore Solutions Ltd.ico') }}" type="image/x-icon"/>
    @include('includes.assets.styles')
</head>
        @yield('container')
        @include('includes.assets.scripts')
        @if(Route::currentRouteName() == 'home')
            <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new PureCounter();
                });
            </script>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>
