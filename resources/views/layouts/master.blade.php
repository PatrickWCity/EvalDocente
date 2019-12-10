<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="img/touch-icon-iphone.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset(mix('js/manifest.js')) }}"></script>
    <script src="{{ asset(mix('js/vendor.js')) }}"></script>
    <script src="{{ asset(mix('js/app.js')) }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>

<body class="app header-fixed">
        <header class="app-header navbar">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="navbar-brand-full" src="{{ url('/img/brand/logo.svg') }}" width="137" height="30"
                    alt="CoreUI Logo">
                <img class="navbar-brand-minimized" src="{{ url('/img/brand/sygnet.svg') }}" width="30" height="30"
                    alt="CoreUI Logo">
            </a>
            <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                </li>
                @auth
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ url('/home') }}">{{ __('Dashboard') }}</a>
                    </li>
                @can('user-list')
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ url('/users') }}">{{ __('User') }}s</a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ url('/roles') }}">{{ __('Role') }}s</a>
                </li>
                @endcan
                @endauth
            </ul>
            @guest
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item px-3 d-md-down-none">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item px-3 d-md-down-none">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                <li class="nav-item px-3">
                    <a class="nav-link d-md-down-none" href="{{ route('CheckLang', ['lang' => 'es']) }}">ES</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link d-md-down-none" href="{{ route('CheckLang', ['lang' => 'en']) }}">EN</a>
                </li>
            </ul>
            @else
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item d-md-down-none">
                    <a class="nav-link">
                        <strong>{{ Auth::user()->name }}</strong>
                    </a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-avatar" src="{{ url('/img/users/default.jpg') }}"
                            alt="{{ Auth::user()->name }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item">
                            {{ Auth::user()->name }}<br>
                            <small class="text-muted">{{ Auth::user()->email }}</small>
                        </a>
                        <div class="dropdown-header text-center">
                            <strong>{{ __('Account') }}</strong>
                        </div>
                        <a class="dropdown-item" href="{{ url('home') }}">
                            <i class="icon-speedometer"></i> {{ __('Dashboard') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('profile') }}">
                            <i class="fas fa-user"></i> {{ __('Profile') }}
                        </a>
                        <a class="dropdown-item" href="{{ url('profile/settings') }}">
                            <i class="fa fa-wrench"></i> {{ __('Settings') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endguest
        </header>
        <div class="app-body">
        <main id="app" class="main">
            @include('cookieConsent::index')
            @yield('content')
        </main>
        </div>
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
        @include('layouts.footer')
</body>

</html>