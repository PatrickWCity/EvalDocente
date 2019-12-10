<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'EvalDocente') }}</title>

        <!-- Scripts -->
        <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
        <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
        <script src="{{ asset(mix('js/app.js')) }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @include('cookieConsent::index')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        <a href="{{ route('CheckLang', ['lang' => 'es']) }}">ES</a>
                        <a href="{{ route('CheckLang', ['lang' => 'en']) }}">EN</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'EvalDocente') }}
                </div>

                <div class="links">
                    <a href="{{ url('privacy') }}">{{ __('Privacy Policy') }}</a>
                    <a href="{{ url('terms') }}">{{ __('Terms of Service') }}</a>
                    <a href="{{ url('cookies-policy') }}">{{ __('Cookies Policy') }}</a>
                    <a href="{{ url('about') }}">{{ __('About Our Team') }}</a>
                    <a href="{{ url('contact') }}">{{ __('Contact Us') }}</a>
                </div>
            </div>
        </div>
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
