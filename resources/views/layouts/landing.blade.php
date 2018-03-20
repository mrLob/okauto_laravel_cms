<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta name="Keywords" content="Гродно, Hrodno"/> 
    <meta name="description" content="Специализируемся на химчистке, полировке, шиномонтаже и СТО. Номер для связи +375 33 311-14-14">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Laravel') }}  - автосервис Гродно</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="landing-page">
    <div class="floating-action-button">
        <a href="tel:+375333111414" class="btn btn-round" style="background-color: #ffcd56;font-size: 1.5rem;"><i class="fa fa-phone" aria-hidden="true"></i>
        </a>
    </div>
<!-- Navbar -->
<nav id="bar" class="navbar navbar-expand-lg bg-alter navbar-absolute ">
    <div class="container">
        <div class="dropdown button-dropdown">
           <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
            <span class="button-bar"></span>
            <span class="button-bar"></span>
            <span class="button-bar"></span>
           </a>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="#" rel="tooltip" data-placement="bottom" target="_blank">
                <div class="logo-container">
                    {{--<img src="/assets/img/logo.png">--}}
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" data-nav-image="/assets/img/blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#map" target="_blank">
                        <i class="now-ui-icons design_app"></i>
                        <p>Как найти?</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#serv" class="nav-link">
                        <i class="now-ui-icons files_paper" aria-hidden="true"></i>
                        <p>Услуги</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#posts" class="nav-link" >
                        <i class="now-ui-icons design_image" aria-hidden="true"></i>
                        <p>Новости</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Подписывайтесь на нас в Instagram" data-placement="bottom" href="#feed" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="hidden-lg-up">О наших работах</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="#messg" target="_blank">
                        <p>Связаться с нами</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header page-header-full" filter-color="black">
        <div class="page-header-image" data-parallax="true" style="background-image: url('/assets/img/photo/IMG_3383.jpg');">
        </div>
        <div class="content-center">
            <h1 class="title"><img src="/assets/img/OK.png" width="120">auto</h1>
            <h3 class="description"><b>Автосервис</b><p><a class="btn btn-simple" href="tel:+375333111414"  style="font-size: 1rem;border-width:0;color: rgba(255, 255, 255, 0.8);"><i class="fa fa-phone" aria-hidden="true"></i>+375 33 311-14-14</a></p></h3>
            <div class="separator separator-primary"></div>
            <div id="menu" class="button-container" style="margin-top: 190px">
                <a class="btn btn-primary btn-lg btn-icon btn-simple btn-round" href="#map"><i class=" now-ui-icons arrows-1_minimal-down"></i></a>
            </div>
        </div>
    </div>
    <div id="map" class="section section-story-overview">
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto text-center">
                    <div class="card-container">
                        <div class="card card-fashion">
                            <div class="card-title">
                            <div class="title" style="font-size: 1.5rem;">Как нас найти?</div>
                                <br>
                                <div class="description" style="font-size: 1rem;">Наш автосервис находится на улице Гаспадарчая напротив молочного мира,на территории завода и заехать к нам очень легко</div>
                                <br>
                                <a  href="https://maps.google.com/?q=@53.704249,23.830040" class="btn btn-primary">Найти</a>
                            </div>
                        </div>
                        <div class="card card-fashion card-background" style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=53.704249,23.830040&zoom=15&size=600x600&scale=2&markers=color:red%7C53.704249,23.830040&&style=element:labels|visibility:on&style=element:geometry.stroke|visibility:on&maptype=hybrid&key=AIzaSyAbANEitW1SSsTld8h3fNtBgATdiRBt_Rw');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-primary"></div>
        </div>
    </div>
    <div id="serv" class="features-8 section-image" style="background-image: url('/assets/img/photo/IMG_3389.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <h2 class="title">Наши услуги</h2>
                    <h4 class="description text-white"></h4>
                </div>
            </div>
            <div class="row">
                @yield('services')
            </div>
        </div>
    </div>
    <div id="posts" class="testimonials-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <h2 class="title">Новости</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('posts')
                </div>
            </div>
        </div>
    </div>
    <div id="feed" class="section-story-overview" data-background-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <h2 class="title">О нашей работе</h2>
                    <h3 class="description"> Отчеты о выполненой работе ,акции и новости можно получить через Instagram!</h3>
                    <a href="https://www.instagram.com/ok__auto/" class="btn btn-primary btn-simple btn-round btn-lg">Подписаться!</a>
                </div>
            </div>
                <br>
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto text-center">
                    <div class="gallery-feed">
                        @for($i = 0;$i < 8; $i++ )
                            <div class="gallery-item">
                                    <img src="{{ $instagrams[$i]->images->standard_resolution->url }}"  class="img img-raised rounded" />
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="messg" class="section section-contact-us text-center">
        <div class="container">
            <h2 class="title">Хотите связаться с нами?</h2>
            <p class="description">Вы можете сделать через эту форму!</p>
            <div class="row">

                <div class="col-lg-6 text-center ml-auto mr-auto col-md-8">
                    <form method="POST" action="{{ route('messages.store') }} " enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-group input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input id="title" type="text" name="title" class="form-control" placeholder="Ваше имя / Тема обращения...">
                        </div>
                        <div class="input-group input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            <input id="email" type="text" name="email" class="form-control" placeholder="Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea id="body" class="form-control" name="body" rows="4" cols="80" placeholder="Введите сообщение..."></textarea>
                        </div>
                        <div class="send-button">
                            <button type="submit" class="btn btn-primary btn-round btn-block btn-lg">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-default ">
        <div class="container">
            <nav>
                <ul>

                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="" target="_blank"></a>. Coded by
                <a href="" target="_blank"></a>.
            </div>
        </div>
    </footer>
</body>
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#menu").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#bar").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
<script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
</html>