<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="apple-touch-icon" sizes="76x76" href="/assets_admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets_admin/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="/assets_admin/css/now-ui-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/assets_admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets_admin/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="/assets_admin/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="/assets_admin/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            @auth
            <ul class="nav">
                    @if(isset($pmsg))
                        <li class="nav-item active">
                            <a class="nav-link" href="/dash/home">
                                <p><i class="nc-icon nc-app"></i> Панель управления </p>
                            </a>

                        </li>
                    @else
                        <li>
                            <a class="nav-link" href="/dash/home">
                                <p><i class="nc-icon nc-app"></i> Панель управления </p>
                            </a>

                        </li>
                    @endif
                    @if(isset($msg))
                        <li class="nav-item active">
                            <a class="nav-link" href="/dash/messages">
                                <p><i class="nc-icon nc-email-85"></i> Сообщения </p>
                            </a>

                        </li>
                    @else
                        <li>
                            <a class="nav-link" href="/dash/messages">
                                <p><i class="nc-icon nc-email-85"></i> Сообщения </p>
                            </a>

                        </li>
                    @endif
                    @if(isset($mposts))
                        <li class="nav-item active">
                            <a class="nav-link" href="/dash/posts">
                                <p><i class="nc-icon nc-bell-55"></i> Микропосты</p>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="nav-link" href="/dash/posts">
                                <p><i class="nc-icon nc-bell-55"></i> Микропосты</p>
                            </a>
                        </li>
                    @endif
                    @if(isset($servs))
                        <li class="nav-item active">
                            <a class="nav-link" href="/dash/services">
                                <p><i class="nc-icon nc-umbrella-13"></i> Услуги</p>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="nav-link" href="/dash/services">
                                <p><i class="nc-icon nc-umbrella-13"></i> Услуги</p>
                            </a>
                        </li>
                    @endif
            </ul>
            @endauth
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg"  color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="/"> {{ config('app.name', 'Laravel') }} </a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item dropdown">
                            @auth
                                <a class="nav-link dropdown-toggle" href="/login/home" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                                </a>
                            @endauth
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/logout">Выйти</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/dash/home') }}">Home</a>
                                        <a href="{{ route('register') }}">Register</a>
                                    @else

                                        <a href="{{ route('login') }}">Login</a>
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="section">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">

                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="/assets_admin/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets_admin/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets_admin/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets_admin/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="/assets_admin/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets_admin/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="/assets_admin/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<!-- Bootstrap-Iconpicker Iconset -->
<script type="text/javascript" src="dist/js/bootstrap-iconpicker-iconset-all.min.js"></script>
<!-- Bootstrap-Iconpicker -->
<script type="text/javascript" src="dist/js/bootstrap-iconpicker.min.js"></script>
</html>