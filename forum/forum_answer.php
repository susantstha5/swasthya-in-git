<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal forum</title>
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link type="text/css" href="../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../design/vendor/font-awesome/css/font-awesome.min.css">
    <link type="text/css" href="navigation/forum_navigation.css" rel="stylesheet">
    <link type="text/css" href="forum-style/forum_style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</head>
<body >

<!-- /.banner-->
<div class="container wrapper" id="site-wrapper">

    <?php include('navigation/forum_navigation.php'); ?>
    <!--    /.gloabl-nav -->
    <!--    breadcrumb section-->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Answer</a></li>
    </ul>
    <div class="container content-wrapper">

        <div class="row">
            <!--            main forum page left side-->
            <?php include('includes/forum-main_leftside.php') ?>
            <!--            main forum page middle-->
            <?php include('includes/forum-answer_middle.php') ?>
        </div>

    </div>
    <footer>
        <h5>© 2017 Swasthya Nepal. All rights reserved</h5>
    </footer>
</div>
<!--/.wrapper-->

<script src="../design/vendor/jquery-3.2.1.min.js"></script>
<script src="../design/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>