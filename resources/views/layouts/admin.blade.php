<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>I.E Maltería</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7bf68be0cb.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>


<body>
    <div class="app">


        <div class="container">
            <div class="sidebar-mini layout-fixed" style="height: auto;">
                <div class="wrapper">
                    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>

                    </nav>

                    @include('partials.menu')
                    <div class="content-wrapper container" style="min-height: 917px;">
                        <!-- Main content -->
                        <section class="content" style="padding-top: 20px">
                            @if (session('message'))
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                                    </div>
                                </div>
                            @endif
                            @if ($errors->count() > 0)
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @yield('content')
                        </section>
                        <!-- /.content -->
                    </div>

                    <footer class="main-footer">

                        <strong> &copy; IE Maltería</strong>, todos los derechos reservados, 2023
                    </footer>
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
