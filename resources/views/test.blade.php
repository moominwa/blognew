<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="newsbit" />

    <!--Favicon-->
    <link rel="shortcut icon" href="asset/frontend/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

    <!-- THEME CSS
 ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="" class="color.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/slick-carousel/slick-theme.css') }}">
    <!-- manin stylesheet -->
    {{-- <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}"> --}}

</head>
</script>
<header class="header-navigation d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-3 col-md-3">

                <b <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('asset/frontend/images/logos/R.png') }}">
                            <!-- Replace Logo Here -->
                        </a>
                    </div>
                    <!-- End Logo -->
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                {{-- <div class="top-ad-banner float-right">
                        <a href="#">
                            <img src="asset/frontend/images/news/ad-pro.png" class="img-fluid" alt="banner-ads">
                        </a>
                    </div> --}}
            </div>
        </div>
    </div>
</header>

<div class="main-navbar clearfix bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                    <a class="navbar-brand d-lg-none" href="index.html">
                        <img src="images/logos/footer-logo.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    หน้าแรก
                                </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('login') }}">Log In</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('registermenu') }}">สมัคร</a>
                            </li>



                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    สมัคร
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('tarang') }}">ตารางแข่งขัน</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">ผลการแข่งขัน</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">ตารางคะแนน</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">ตรวจสอบรายชื่อ</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container py-2">
    @yield('contentt')
</div>
<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('plugins/slick-carousel/slick.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
<!-- main js -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
