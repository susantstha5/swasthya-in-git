<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal|login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="../css/login/style.css" rel="stylesheet">
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
    <!--    sign up with google or gmail-->
    <div class="container-fluid">
        <div class="content-container socialMediaContainer">
            <div class="row">
                <div class="col-md-6">
                    <button class="socialMedia facebook btn">
                        <i class="fa fa-facebook" aria-hidden="true"></i>Connect with Facebook
                    </button>
                </div>
                <div class="col-md-6">
                    <button class="socialMedia google btn">
                        <i class="fa fa-google" aria-hidden="true"></i>Connect with Google
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h5>Or sign up with</h5>
    </div>
<!--    login section-->
    <div class="container-fluid">
        <div class="content-container">
            <div class="card">
                <div class="card-header">Swagatam</div>
                <div class="card-content">
                    <form action="" class="text-center">
                        <input type="text" class="input-box text-medium" placeholder="Email or Phone" required="required">
                        <input type="password" class="input-box text-medium" placeholder="Password" required="required">
                        <div class="row">
                            <div class="col-xs-6 text-left sub-actions"></div>
                            <div class="col-xs-6 text-left sub-actions">
                                <a class="text-blue text-right" href="" data-toggle="modal" data-target="#myModal">forgot password?</a>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="login">
                        <div class="sub-container">
                            "Don't have an account?&nbsp;"
                            <a class="text-blue" href="signup.php">Signup</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content forget-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot password</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="text" placeholder="Enter Your Email id to get Password">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" ><a href="#">Send Password</a></button>
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