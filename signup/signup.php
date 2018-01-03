<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal|signup</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../css/login/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<!--main container-->
<div class="main-container">

    <!--    logo-->
    <div class="container-fluid ">
        <div class="text-center">
            <a href="" >
                <img src="../design/assets/images/logos.png" alt="" class="logo" >
            </a>
        </div>
    </div>

    <!--    login section-->
    <div class="container-fluid">
        <div class="content-container">
            <div class="card">
                <div class="card-header">Create your Swasthya account.</div>
                <div class="card-content">
                    <form action="" class="text-center">
                        <input type="text" class="input-box text-medium" placeholder="Name" required="required">
                       <div>
                           <div class="country-code-element">+977</div>
                           <input class="input-box text-medium" type="number" name="primaryContactNumber" placeholder="Enter Phone" style="padding-left: 90px;" required="required">                       </div>
                        <input class="input-box text-medium" type="text" name="email" placeholder="Email" required="required">
                        <input type="password" class="input-box text-medium" placeholder="Password" required="required">
                        <input type="password" class="input-box text-medium" placeholder="Confirm Password" required="required">

                        <div class="g-recaptcha" data-sitekey="6LfmFDoUAAAAAJX6c_lNRiAxgQWalpHHRC7NDExL"></div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Sign up" >
                        <p class="terms">By signing up, you agree to our&nbsp;
                            <a href="#">Terms and Conditions</a>
                        </p>
                        <div class="sub-container">Already have an account?&nbsp;
                            <a class="font-blue" href="login.php">Login</a>
                        </div>
                    </form>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="footer-text">2017 Swasthya. All rights reserved.</div>
        </div>
    </div>
</div>

<script src="../design/assets/js/jquery-3.1.1.slim.min.js"></script>
<script src="../design/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../design/vendor/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
<script src="../design/vendor/slick-slider/slick/slick.js"></script>

<script src="../source/js/scripts.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.navbar-toggle', function (event) {
            event.preventDefault();
            $('body').toggleClass('open');
        });
    });
</script>
</body>
</html>