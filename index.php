<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal</title>
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link type="text/css" href="design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="design/vendor/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link type="text/css" href="css/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="css/_asideBar.css" rel="stylesheet">
    <link type="text/css" href="css/_slider.css" rel="stylesheet">
    <link type="text/css" href="css/_offers.css" rel="stylesheet">
    <link type="text/css" href="css/modal.css" rel="stylesheet">
    <link type="text/css" href="css/_testimonials.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/_appDisplay.css" >
    <link type="text/css" href="css/_footers.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</head>
<body onload="displayCart()" style="background: #f1f1f1;overflow-x: hidden">

    <!-- /.banner-->
    <div class="wrapper" id="site-wrapper">

        <?php include('includes/_navigation.php'); ?>
        <!--    /.gloabl-nav -->

        <?php include('includes/_asideBar.php'); ?>
        <!--   /.main-sidebar -->

        <div class="content-wrapper">

            <?php include('includes/_slider.php'); ?>
            <!-- ./main-slider-wrapper -->

            <?php include('includes/_featuredMedicine.php'); ?>
            <!-- ./featured-medicine-wrapper -->

            <?php include('includes/_featuredHospital.php'); ?>
            <!-- ./featured-hospital-wrapper -->

            <?php include('includes/_offers.php'); ?>
            <!-- ./featured-offers-wrapper -->


            <?php include('includes/_testimonials.php'); ?>
            <!-- ./Testimonials-wrapper -->

            <?php include('includes/_healthPatner.php'); ?>
            <!-- ./Health Patner-wrapper -->


<!--ios and android display banner-->
            <?php include('includes/_footer-text-container.php');?>
            <?php include('includes/_app-display.php');?>
<!--footer text container-->

<!--            <footer class="footer">-->

            <?php include('includes/_footers.php'); ?>


            <!-- ./footer -->
        </div>
    </div>
    <!--/.wrapper-->

<script src="design/vendor/jquery-3.2.1.min.js"></script>
<script src="source/js/cart.js"></script>
<script src="design/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="design/vendor/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
<script src="design/vendor/slick-slider/slick/slick.js"></script>

<script src="source/js/scripts.js"></script>
<script src="source/js/maincartsystem.js"></script>
<script src="source/js/testimonials.js"></script>
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