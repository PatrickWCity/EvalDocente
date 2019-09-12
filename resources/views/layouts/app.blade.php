<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="EvalDocente">
    <meta name="application-name" content="EvalDocente">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EvalDocente') }}</title>

    <!-- Scripts -->
    <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.header')
    <div class="app-body">
        @include('layouts.sidebar')
        <main id="app" class="main">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script type="text/javascript" src="//www.termsfeed.com/cookie-consent/releases/3.0.0/cookie-consent.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @if (Lang::locale() === 'es')
                var lang = "es"
        @else
                var lang = "en"
        @endif
        cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"dark","change_preferences_selector":"#changePreferences","language":lang,"website_name":"EvalDocente","cookies_policy_url":"https://evaldocente.herokuapp.com/cookies-policy"});
    });
    </script>
</body>
    <script>
	    var botmanWidget = {
            title: "EvalDocente",
	        introMessage: '{{ __("✋ Hi! I'm from EvalDocente") }}',
            placeholderText: '{{ __('Send a message...') }}',
            bubbleAvatarUrl: "{{ url('/apple-touch-icon.png') }}",
            aboutText: null,
            bubbleBackground: "#f2cb7d",
            mainColor: "#262a2e"
	    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
