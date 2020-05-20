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
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- slick -->
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/slick.css')}}" type="text/css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="{{ asset('js/slick.min.js')}}" type="text/javascript"></script>

</head>

<body>
  <div id="app">
    <header class="header">
      <div class="jumbotron-fluid">
        <div class="container-fluid">
          <div class="navbar-menu row py-o">
            <nav class="navbar navbar-expand navbar-light w-100 py-0 px-4">
              <a class="navbar-brand ml-3" href="{{ url('/') }}">{{ config('app.name', 'Fragport') }}</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar ml-auto my-0 py-0">
                  <!-- Authentication Links -->
                  @unless (Auth::guard('user')->check())
                  <div class="nav-item">
                    <a class="nav-link text-white" href="{{ route('user.login') }}">{{ __('messages.Login') }}</a>
                  </div>
                  @if (Route::has('user.register'))
                  <div class="nav-item">
                    <a class="nav-link text-white" href="{{ route('user.register') }}">{{ __('messages.Register') }}</a>
                  </div>
                  @endif
                  @else
                  <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white pb-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Mypage</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('messages.Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </div>
                  @endunless
                </ul>
              </div>
          </div>
          </nav>
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
            <a href="#" class="twitter-link text-white"><i class="fab fa-fw fa-twitter"></i>Twitter</a><br>
            <a href="#" class="insta-link text-white"><i class="fab fa-fw  fa-instagram"></i>Instagram</a>
          </div>
          <small><a href="{{url('/privacy')}}" class="privacy text-white">プライバシーポリシー</a>/<a href="{{url('/disclimer')}}" class="disclimer text-white">免責事項</a></small><br>
          <small>&copy;2020 Makio-eng</small>
        </div>
      </div>
    </footer>
  </div>

</body>

</html>
@yield('js')