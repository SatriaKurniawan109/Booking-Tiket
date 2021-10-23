<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('#') }}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline" method="GET" action="/statistik">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" name="cari" type="search"
                                    placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
                {{-- <img src="/img/LogoSat.png"  class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            @guest
                @if (Route::has('login'))
                @endif
                @if (Route::has('register'))
                @endif
            @else
                <div class="ml-4 mt-3 text-primary">
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
            @endguest

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('/category') }}" class="nav-link">
                                <i class="fas fa-list" style="color: white"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/film') }}" class="nav-link">
                                <i class="fas fa-film" style="color: yellowgreen"></i>
                                <p>Films</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/order') }}" class="nav-link">
                                <i class="fas fa-shopping-cart" style="color: rgb(0, 119, 255)"></i>
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/transaction') }}" class="nav-link">
                                <i class="fas fa-receipt" style="color: rgb(255, 208, 0)"></i>
                                <p>Transactions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/transaction-detail') }}" class="nav-link">
                                <i class="fas fa-scroll" style="color: rgb(255, 136, 0)"></i>
                                <p>Transactions Detail</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                    </div>

                    @yield('content')

                </div><!-- /.container-fluid -->
            </section>

            {{-- <footer class="footer py-3 bg-dark fixed-bottom">
      <div class="container-fluid">
          <div class="row">
              <div class="sosial col-12 text-right">
                  <a href="https://www.instagram.com/saatryaaa__/"><i class="fab fa-instagram mr-3"></i></a>
                  <a href="https://www.facebook.com/satria.kurniawan.3726"><i class="fab fa-facebook mr-3"></i></a>
                  <a href="#"><i class="fab fa-twitter mr-3"></i></a>
              </div>
          </div>
      </div>
    </footer> --}}

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('AdminLTE-3.1.0/') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('AdminLTE-3.1.0/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('AdminLTE-3.1.0/') }}/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('AdminLTE-3.1.0/') }}/dist/js/demo.js"></script>
</body>

</html>
