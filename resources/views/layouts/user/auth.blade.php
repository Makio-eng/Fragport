<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fragport') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header class="header">
        <div class="jumbotron-fluid">
            <div class="container">
                <div class="auth-menu row d-flex-inline justify-content-end">
                    <nav class="navbar">
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @unless (Auth::guard('user')->check())
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('user.login') }}">{{ __('messages.Login') }}</a>
                                </li>
                                @if (Route::has('user.register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('user.register') }}">{{ __('messages.Register') }}</a>
                                    </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endunless
                        </ul>
                    </nav>
                </div>
                    <div class="row app-logo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Fragport') }}
                        </a>
                </div>
            </div>
        </div>

    </header>

            <main class="py-4">
                @yield('content')
            </main>
    <footer class="footer">
        <div class="jumbotron-fluid">
            <div class="container">
                <div class="sns-link mb-3">
                    <a href="#" class="twitter-link"><i class="fab fa-fw fa-twitter"></i>Twitter</a><br>
                    <a href="#" class="insta-link"><i class="fab fa-fw  fa-instagram"></i>Instagram</a>
                </div>
                <small><a href="#" class="privacy">プライバシーポリシー</a>/<a href="#" class="disclimer">免責事項</a></small><br>
                <small>&copy;2020 Makio-eng</small>
            </div>
        </div>
    </footer>
</div>
</body>
</html>