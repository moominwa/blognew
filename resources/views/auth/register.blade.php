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
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="asset/frontend/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="asset/frontend/plugins/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="asset/frontend/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="asset/frontend/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="asset/frontend/plugins/slick-carousel/slick-theme.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="asset/frontend/css/style.css">
</head>
<body>

<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="signup">

                    <h3 class="mt-4">Sign Up Here</h3>
                    <p class="mb-5">Join with us and feel better</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ui>
                    @foreach ($errors->all() as $error )
                        <li> {{$error}}</li>
                    @endforeach
                            </ui>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="signup-form row">
                        @csrf
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="l-name">คำนำหน้า</label>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>คำนำหน้า</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="f-name">First Name</label>
                                <input type="text" class="form-control" id="f-name" name="name" placeholder="First name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="l-name">Last Name</label>
                                <input type="text" id="l-name" name="lastname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phonee">Phonenumber</label>
                                <input type="text" id="phonee" name="phone" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="l-name">สาขา</label>
                                <select id="l-name" name="lastname" class="form-control">
                                    <option value="" disabled selected>สาขา</option>
                                    <option value="เด็กชาย">ประมง</option>
                                    <option value="เด็กหญิง">สัตว์ศาสตร์</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email-address">Email</label>
                                <input type="email" class="form-control" name="email" id="email-address" placeholder="Enter a valid mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password-s">Password</label>
                                <input type="password" class="form-control" id="password-s" name="password" placeholder="A strong password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password-s">comfirmpassword</label>
                                <input type="password" class="form-control" id="password-s" name="password_confirmation" placeholder="Confirmpassword">
                            </div>
                        </div>



                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                            <p class="mt-5 mb-0">Already a member? <a href="account.html">Log in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="asset/frontend/plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="asset/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="asset/frontend/plugins/slick-carousel/slick.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="asset/frontend/plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="asset/frontend/js/custom.js"></script>

</body>
</html>
