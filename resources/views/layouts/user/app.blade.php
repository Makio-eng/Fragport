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
          <div class="navbar row p-0">
            <!-- Right Side Of Navbar -->
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
                  <a class="dropdown-item" href="{{ action('User\ProfileController@mypage')}}">Mypage</a>
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
          <div class="navbar-menu row">
            <nav class="navbar navbar-expand-lg navbar-light w-100 px-4 py-0">
              <a class="navbar-brand ml-3" href="{{ url('/') }}">{{ config('app.name', 'Fragport') }}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex">
                  <li class="nav-item mx-1">
                    <a class="nav-link text-white" href="{{ url('/about') }}">About</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-white" href="{{ url('/information') }}">Information</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-white" href="{{ url('/brand') }}">Brand List</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{action('HomeController@search')}} ">
                  <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                  <select name="select" id="searchOption" class="mx-1 select">
                    <option value="brand">ブランド名</option>
                    <option value="perfume">香水名</option>
                  </select>
                  <button class="btn my-2 my-sm-0 ml-sm-2" type="submit">
                    <svg class="bi bi-search mb-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
                    </svg>
                  </button>
                  @csrf
                </form>
              </div>
            </nav>
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
@yield('js')