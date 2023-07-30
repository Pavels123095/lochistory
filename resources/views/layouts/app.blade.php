<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('browser-title',config('app.name', 'Laravel'))</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div id="page" class="container-fluid">
            @include('include.header')
            <main class="content-innertube container-fluid mt-2">
                @yield('content')
            </main>
            <div class="clear"></div>
            @include('include.footer')
        </div>
    </body>
</html>
