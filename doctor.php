<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="design/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="design/vendor/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="design/vendor/slick-slider/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="design/vendor/slick-slider/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link type="text/css" href="css/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="css/_asideBar.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/doctor/doctor-page.css" rel="stylesheet">
    <link href="css/category/category.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/_footers.css" rel="stylesheet">
</head>
<body onload="displayCart()">

<!-- /.banner-->
<div class="wrapper" id="site-wrapper">


    <?php include('includes/_navigation.php'); ?>
    <!--    /.gloabl-nav -->
    <?php include('includes/_asideBar.php'); ?>
    <!--   /.main-sidebar -->

    <div class="content-wrapper">

        <?php include('includes/doctor/_doctor-page.php'); ?>
        <!--  /.product-display-section      -->


        <?php include('includes/_footers.php'); ?>


        <!-- ./footer -->
    </div>


</div>
<!--/.wrapper-->

<script src="design/vendor/jquery-3.2.1.min.js"></script>
<script src="design/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="design/vendor/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
<script src="design/vendor/slick-slider/slick/slick.js"></script>
<script src="design/assets/js/cart-counter.js"></script>
<script src="source/js/scripts.js"></script>
<script src="source/js/cart.js"></script>

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