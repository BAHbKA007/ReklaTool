<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="de">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="/assets/scripts/main.js"></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

        	<!-- ****** faviconit.com Favicons ****** -->
        <link rel="shortcut icon" href="/assets/faviconit/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="/assets/faviconit/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="/assets/faviconit/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="/assets/faviconit/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/faviconit/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="/assets/faviconit/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/faviconit/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/faviconit/favicon-16.png">
        <link rel="apple-touch-icon" href="/assets/faviconit/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="//assets/faviconitfavicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/faviconit/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/faviconit/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/faviconit/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/faviconit/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/faviconit/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/faviconit/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/faviconit/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="/assets/faviconit/favicon-144.png">
        <meta name="msapplication-config" content="/assets/faviconit/browserconfig.xml">
        <!-- ****** faviconit.com Favicons ****** -->
    </head>

    @yield('content')

</html>
