<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



       <link rel=icon href=/img/favicon.ico sizes="20x20" type="image/png">

    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- magnific popup -->

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="/css/responsive.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')

    <!-- main js -->
    <script src="/js/script.js"></script>
    <script src="/js/main.js"></script>
    </div>
</body>
</html>
