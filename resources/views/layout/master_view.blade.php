<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../css.css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('directory')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{asset('directory')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('directory')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('directory')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/toastr.min.css">

    <link rel="stylesheet" href="{{asset('directory')}}/css/style.css">
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
      <div class="container-fluid">



      <div class="row align-items-center" style='background: antiquewhite;'>

          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="{{url('/')}}" class="text-black h2 mb-0">

            <img src="{{asset('view')}}/images/project/logo-1.png" style='width: 300px; height: 90px; padding: 15px;' alt='logo'>

            </a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{url('/')}}">Home</a></li>
                {{-- <li><a href="{{url('/blood')}}">Blood</a></li>
                <li><a href="{{url('/emergency')}}">Emergency Number</a></li>
                <li><a href="{{url('/library')}}">Library</a></li> --}}



              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>







        <!-- Authentication -->

        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- WEBSITE LOGO -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))

                            @endif

                            @if (Route::has('register'))

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            <div class=" d-flex justify-content-between align-items-center">
                              <h3 class="card-title"></h3>
                              <a href="{{url('adm_dashboard')}}" class="btn btn-primary">Go to Dashboard</a>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}



      </div>
    </header>


@yield('content')













  </div>

  <script src="{{asset('directory')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('directory')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('directory')}}/js/jquery-ui.js"></script>
  <script src="{{asset('directory')}}/js/bootstrap.min.js"></script>

  <script src="{{asset('directory')}}/js/aos.js"></script>
  <script src="{{asset('admin')}}/js/bs-custom-file-input.min.js"></script>

  <script src="{{asset('directory')}}/js/main.js"></script>
  <script src="{{asset('admin')}}/js/toastr.min.js"></script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');


</script>
<script>
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif

  $(document).ready(function () {
  bsCustomFileInput.init();
  });

</script>

  </body>
</html>
