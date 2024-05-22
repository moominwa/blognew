<<<<<<< HEAD
@extends('test')
@section('content')
@livewire('index')
@endsection
=======
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
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
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}">

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
                                    หน้าหลัก
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

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('registermenu') }}" role="button" data-toggle="dropdown"
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

                        {{-- <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div> --}}
                    </div>
                </nav>

            </div>
        </div>
    </div>


    -- <form class="site-search" method="get"> //
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..."
            autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>
-- <section class="featured-posts">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-md-3 mr-lg-3">
                    <div class="item" style="background-image:url(asset/frontend/images/news/ag.jpg)">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-primary">พิธีเปิด</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">✨ พิธีเปิด AGRI-TIC ปีการศึกษา 2590
                                    ธ.ค. 90 – 29 ก.พ. 90✨</a>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url(asset/frontend/images/news/ag2.jpg)">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-danger">การแข่งขันรอบรอง</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">✨🔸 การแข่งขันรอบรอง AGRI-TIC
                                    ปีการศึกษา 2590🔸✨</a>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url(asset/frontend/images/news/ag3.jpg)">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-danger">การแข่งขันรอบชิง</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">✨🔸การแข่งขันรอบชิง AGRI-TIC
                                    ปีการศึกษา 2590🔸✨</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section> --}}

<section class="news-style-four bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>Team1</span>
                    </h3>
                    <div class="post-overlay-wrapper clearfix">
                        <div class="post-thumbnail">
                            <img class="img-fluid" src="asset/frontend/images/news/Sentinels.png"
                                alt="post-thumbnail" />
                        </div>

                        <div class="post-content">
                            <h2 class="post-title ">
                                <a href="single-post.html">Sentinels</a>
                            </h2>
                            <div class="post-meta white">
                                <span class="posted-time">ผลการแข่งขัน 2 - 1</span>

                                <span class="pull-right">
                                    <i class="fa fa-comments"></i>
                                    <a href="single-post.html#comments">05</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="post-list-block">
                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/nrg.png"
                                    alt="post-thumbnail" />
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html"> NRG</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 1 - 2</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/Team NKT.png"
                                    alt="post-thumbnail" />
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">NKT</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 2-0</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/XERXIA Esports.png"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">XERXIA Esports</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 2-0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>Team2</span>
                    </h3>
                    <div class="post-overlay-wrapper clearfix">
                        <div class="post-thumbnail">
                            <img class="img-fluid" src="asset/frontend/images/news/adr.png" alt="post-thumbnail" />
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="single-post.html">ADR</a>
                            </h2>
                            <div class="post-meta white">
                                <span class="posted-time">ผลการแข่งขัน 1-2</span>
                                <span class="pull-right">
                                    <i class="fa fa-comments"></i>
                                    <a href="single-post.html#comments">10</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="post-list-block">
                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/va.png"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">VA</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 4-1</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/g2.jpg"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">G2 </a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 1-2</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/liquid.png"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">Liquid</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 2-0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block">
                    <h3 class="news-title">
                        <span>Team3</span>
                    </h3>
                    <div class="post-overlay-wrapper clearfix">
                        <div class="post-thumbnail">
                            <img class="img-fluid" src="asset/frontend/images/news/Paper Rex.png"
                                alt="post-thumbnail" />
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="single-post.html">Paper Rex</a>
                            </h2>
                            <div class="post-meta white">
                                <span class="posted-time">ผลการแข่งขัน 3-0</span>

                                <span class="pull-right">
                                    <i class="fa fa-comments"></i>
                                    <a href="single-post.html#comments">30</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="post-list-block">
                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/MiTHeSports.jpg"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">MiTHeSports</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 2-0</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/FULL SENSE.jpg"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">FULL SENSE</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่งขัน 1-2</span>
                                </div>
                            </div>
                        </div>

                        <div class="post-block-wrapper post-float clearfix">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="asset/frontend/images/news/Team Envy.png"
                                    alt="post-thumbnail" />
                            </div>

                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">Team Envy</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">ผลการแข่ง</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

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
>>>>>>> 36b72b22a502b6ee8b95b96aa4fb9a6767f4fc93
