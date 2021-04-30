<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta-title', 'NOMBRE EMPRESA')</title>
    <!-- TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">

    <!-- @@Stack representa todas las etiquetas que están sobre el -->
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar superior -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        USUARIO AUTH
                        <i class="fas fa-chevron-down"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user"></i> Mi perfil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-in-alt"></i> Cerrar sesión
                        </a>
                        <form id="logout-form" action="#" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar superior -->

        <!-- Menú y Nav de la izquierda -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Logo -->
            <a href="#" class="brand-link">
                <img src="/adminlte/img/AdminLTELogo.png" alt="LOGO" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">NOMBRE EMPRESA</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info white">
                        <h6 class="d-block" style="color: white;">
                        NOMBRE USUARIO
                        </h6>
                    </div>
                </div>

                <!-- Nav de la izquierda -->
                @include('admin.partials.nav')
                <!-- /.Nav de la izquierda -->

            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <!-- Header de ruta en la que se encuentra navegando el usuario -->
                        @yield('header')
                    </div>
                </div>
            </div>

            <!-- Contenido -->
            <div class="content">
                @yield('content')
            </div>
            <!-- /.Contenido -->

        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <!-- Footer derecha -->
            <div class="float-right d-none d-sm-inline">
                Footer derecha
            </div>
            <!-- Footer izquierda -->
            <strong>Footer izquierda</strong>
        </footer>
    </div>


    <!-- SCRIPTS -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/js/adminlte.min.js"></script>

    <!-- @@Stack representa todas las etiquetas scripts que están sobre el -->
    @stack('scripts')
</body>

</html>
