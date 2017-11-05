<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>

                <div class="navbar-burger burger" data-target="navMenuDocumentation">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenuDocumentation" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item is-hidden-mobile" href="#">
                        Learn
                    </a>
                    <a class="navbar-item is-hidden-mobile" href="#">
                        Discuss
                    </a>
                    <a class="navbar-item is-hidden-mobile" href="#">
                        Share
                    </a>
                </div>

                <div class="navbar-end">
                    @guest
                    <a class="navbar-item" href="{{ route('login') }}">
                        Login
                    </a>
                    <a class="navbar-item" href="{{ route('register') }}">
                        Join the Community
                    </a>
                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            Thoeng
                        </a>
                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="#">
                                Profile
                            </a>
                            <a class="navbar-item" href="#">
                                Notifications
                            </a>
                            <a class="navbar-item" href="#">
                                Settings
                            </a>
                        
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="#">
                                Logout
                            </a>
                        </div>
                    </div>
                    @endguest
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="navbar-dropdown is-right">
                            @foreach (config('translatable.locales') as $lang => $language)
                            @if ($lang != app()->getLocale())
                            <a class="navbar-item" href="{{ route('lang.switch', $lang) }}">
                                {{ $language }}
                            </a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
