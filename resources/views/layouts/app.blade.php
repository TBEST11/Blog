<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     <!-- bootstrap css --> --}}
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- style css -->
     <link rel="stylesheet" href="css/style.css">
     <!-- Responsive-->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- fevicon -->
     <link rel="icon" href="images/fevicon.png" type="image/gif" />
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/custom.js"></script>
</head>
<body>
    <div id="app">
         <!-- end loader -->
      <!-- header -->
      <header>
        <!-- header inner -->
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-3 logo_section">
                 <div class="full">
                    <div class="center-desk">
                       <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-9">
                 <div class="menu-area">
                    <div class="limit-box">
                       <nav class="main-menu">
                          <ul class="menu-area-main">
                             <li class="active">
                                <a href="/home">Home</a>
                             </li>
                             <li>
                                <a href="#">About</a>
                             </li>
                             <li>
                                <a href="{{ route('category.index')}}">Marketing</a>
                             </li>
                             <li>
                                <a href="{{ route('blog.index')}}">Blog</a>
                             </li>
                             <li>
                                <a href="contact.html">Contact us</a>
                             </li>
                             <li>
                                <a href="{{ route('login') }}">Login</a>
                             </li>
                             <li>
                                <a href="{{ route('register') }}">Register</a>
                             </li>
                             <li>
                                <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                             </li>
                          </ul>
                       </nav>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- end header inner -->
     </header>
     <!-- end header -->
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main> --}}
        @include('layouts.sidebar')
        @include('layouts.footer')
    </div>
   
     <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/ascustom.js"></script>
  
</body>
</html>
