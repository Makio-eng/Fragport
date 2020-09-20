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
    <header class="admin-header bg-success">
      <div class="jumbotron-fluid">
        <div class="container-fluid">
          <div class="navbar row p-0">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">
              <!-- Authentication Links -->
              @unless (Auth::guard('admin')->check())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('admin.register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endunless
            </ul>
          </div>
          <div class="navbar-menu row">
            <nav class="navbar navbar-expand-lg navbar-light w-100 px-4 py-0">
              <a class="navbar-brand ml-3" href="{{ url('/admin/home') }}">{{ config('app.name', 'Fragport') }}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex">
                  <li class="nav-item mx-1">
                    <a class="nav-link text-dark" href="{{ url('/about') }}">About</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-dark" href="{{action ('Admin\InformationController@index')}}">Information</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-dark" href="{{ url('admin/brand/index') }}">Brand List</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-dark" href="{{ url('admin/contact/index') }}">Contact</a>
                  </li>
                  <li class="nav-item mx-1">
                    <a class="nav-link text-dark" href="{{ url('/') }}">User FP</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn my-2 my-sm-0" type="submit">
                    <svg class="bi bi-search mb-1" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
                    </svg></button>
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
    <footer class="admin-footer bg-success">
      <div class="jumbotron-fluid">
        <div class="container py-3">
          <div class="row">
            <div class="sns-link mb-3 mx-auto">
              <a href="#" class="twitter-link text-dark"><i class="fab fa-fw fa-twitter"></i>Twitter</a><br>
              <a href="#" class="insta-link text-dark"><i class="fab fa-fw  fa-instagram"></i>Instagram</a>
            </div>
          </div>
          <div class="row">
            <small class="mx-auto"><a href="{{url('/privacy')}}" class="privacy text-dark">プライバシーポリシー</a>/<a href="{{url('/disclimer')}}" class="disclimer text-dark">免責事項</a></small>
          </div>
          <div class="row">
            <small class="mx-auto text-dark">&copy;2020 Makio-eng</small>
          </div>
        </div>
      </div>
    </footer>
  </div>

</body>

</html>
@yield('js')