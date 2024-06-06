<!DOCTYPE html>
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

    <!-- THEME CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('asset/frontend/plugins/slick-carousel/slick-theme.css') }}">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}">

    <!-- Custom CSS for spacing and hover effect -->

    <style>
        .navbar-nav .nav-link:hover {
    color: #28BEE3 !important;
}
    </style>
</head>

<body>

<div class="main-navbar clearfix bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/" role="button" aria-haspopup="true" aria-expanded="false">
                                    หน้าหลัก
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#account" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    สมัคร
                                </a>
                                <div class="dropdown-menu text-dark" id="account">
                                    <a class="dropdown-item" href="{{ route('register') }}">สมาชิก</a>
                                    <a class="dropdown-item" href="">เข้าร่วมแข่งขัน</a>
<<<<<<< HEAD
                                    <a class="dropdown-item" href="">ชำระเงิน</a>
=======
                                    <a class="dropdown-item" href="/paymentsure">ชำระเงิน</a>
>>>>>>> 4b4965db8fc94377ec42f3d69b2be7ce8f34f424
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#account" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ตาราง
                                </a>
                                <div class="dropdown-menu text-dark" id="account">
                                    <a class="dropdown-item" href="">ตารางแข่งขัน</a>
                                    <a class="dropdown-item" href="">ผลการแข่งขัน</a>
                                    <a class="dropdown-item" href="">คะแนน</a>
                                    <a class="dropdown-item" href="">ดาวซัลโว</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#account" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ข่าว
                                </a>
                                <div class="dropdown-menu text-dark" id="account">
                                    <a class="dropdown-item" href="">ข่าวประชาสัมพันธ์</a>
                                    <a class="dropdown-item" href="">ข่าวการแข่งขัน</a>
                                    <a class="dropdown-item" href="">ข่าวทั่วไป</a>
                                    <a class="dropdown-item" href="">ข่าวการรับสมัคร</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#account" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ตรวจสอบ
                                </a>
                                <div class="dropdown-menu text-dark" id="account">
                                    <a class="dropdown-item" href="">รายชื่อทีมที่สมัคร</a>
                                    <a class="dropdown-item" href="">รายชื่อทีมที่ได้รับการอนุมัติ</a>
                                    <a class="dropdown-item" href="">รายชื่อทีมที่ชำระเงินแล้ว</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login') }}">ล็อกอิน</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container py-2">
    @yield('content')
</div>

<!-- THEME JAVASCRIPT FILES -->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick-carousel/slick.min.js') }}"></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
