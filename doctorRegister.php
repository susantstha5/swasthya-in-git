<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal</title>
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link type="text/css" href="design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="design/vendor/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick.css">
    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick-theme.css">
    <link type="text/css" href="css/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="css/modal.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <!--    doctorProfile section-->
    <link type="text/css" href="css/doctorProfile/style.css" rel="stylesheet">

    <link type="text/css" href="css/_footers.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body onload="displayCart()" style="background: #f1f1f1;">

<!-- /.banner-->
<div class="wrapper" id="site-wrapper">

        <?php include('includes/_navigation.php'); ?>
    <!--    /.gloabl-nav -->

    <div class="content-wrapper">

        <?php include('includes/doctorProfile/_doctorRegister.php');?>
                <?php include('includes/_footers.php'); ?>
        <!-- ./footer -->
    </div>
</div>
<!--/.wrapper-->

<script src="design/vendor/jquery-3.2.1.min.js"></script>
<script src="source/js/cart.js"></script>
<script src="design/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="source/js/scripts.js"></script>
<script src="source/js/maincartsystem.js"></script>
</body>
</html>