<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Service Provider</title>
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link type="text/css" href="../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../design/vendor/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link type="text/css" rel="stylesheet" href="../design/vendor/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
    <!--    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick.css">-->
    <!--    <link type="text/css" rel="stylesheet" href="design/vendor/slick-slider/slick/slick-theme.css">-->

    <link type="text/css" href="../css/serviceProviderDashboard/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="../css/serviceProviderDashboard/asideBar.css" rel="stylesheet">
<!--    <link type="text/css" rel="stylesheet" href="../css/myProfile/myProfile.css">-->
    <link type="text/css" href="../css/style.css" rel="stylesheet">
    <link type="text/css" href="../css/_footers.css" rel="stylesheet">
</head>
<body  style="background: #f1f1f1;overflow-x: hidden">

<!-- /.banner-->
<div class="wrapper" id="site-wrapper">

    <?php include('../includes/dashboardComponent/navigation.php'); ?>
    <!--    /.gloabl-nav -->

    <?php include('asideBar.php'); ?>
    <!--   /.main-sidebar -->

    <div class="content-wrapper">



        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Susant Shrestha</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4" align="center">
                                    <a href="#" class="">
                                        <img class="profile-pic img-responsive" alt="User Pic" style="width:120px;height: 120px" src="data:image/png;base64,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" >
                                            <span class="glyphicon glyphicon-camera"></span>
                                            <span onclick="document.getElementById('profile_image').click();">Change Image</span>

                                        <input type="file" id="profile_image" style="display: none">
                                    </a>
                                </div>
                                <div class=" col-md-8 col-lg-8 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td class="editme">Susant Shrestha</td>
                                            <td id="edit" ><a href="" data-toggle="modal" data-target="#nameModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>
                                            <!-- Modal -->
                                            <div id="nameModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Name</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="">
                                                                <div class="form-group">
                                                                    <label for="first">first</label>
                                                                    <input type="text" class="form-control" id="first">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="last">last</label>
                                                                    <input type="text" class="form-control" id="last">
                                                                </div>
                                                        </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success" data-dismiss="modal">Save</button>
                                                                </div>
                                                            </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- end Modal -->
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>********</td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                            <!-- Modal -->
                                            <div id="passwordModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Name</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/action_page.php">
                                                                <div class="form-group">
                                                                    <label for="oldPassword">old password</label>
                                                                    <input type="password" class="form-control" id="oldPassword">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="newPassword">new password</label>
                                                                    <input type="password" class="form-control" id="newPassword">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="confirmPassword">confirm password</label>
                                                                    <input type="password" class="form-control" id="confirmPassword">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" data-dismiss="modal">Save</button>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- end Modal -->
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>01/24/1988</td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>

                                        <tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>Male</td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>Kathmandu,Nepal</td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>Naxal</td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>
<!--                                        <tr>-->
<!--                                            <td>Address</td>-->
<!--                                            <td>Kathmandu,Nepal</td>-->
<!--                                        </tr>-->
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="#">info@support.com</a></td>
                                            <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>
                                        <tr>
                                        <td>Phone Number</td>
                                        <td>9808883403</td>
                                        <td id="edit"><a href="" data-toggle="modal" data-target="#passwordModal"><i class="glyphicon glyphicon-edit"></i>edit</a></td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </a>
                            <span class="pull-right">
                                <a href="#" data-original-title="Edit this user" type="button" class="btn btn-sm btn-warning">
                                    <i class="glyphicon glyphicon-ok"></i>&nbspSave profile
                                    </a>
                                <a data-original-title="Remove this user" data-toggle="modal" data-target="#confirm-delete" type="button" class="btn btn-sm btn-danger">
                                    <i class="glyphicon glyphicon-remove"></i>&nbspRemove profile
                                </a>

                                        <!--delete modal starts here-->
                                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"></div>
                                            <div class="modal-body">
                                                Are you sure you want to delete?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-danger btn-ok">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!--delete modal ends here-->
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- <footer class="footer">-->

        <?php include('../includes/_footers.php'); ?>


        <!-- ./footer -->
    </div>
</div>
<!--/.wrapper-->

<!--template script-->
<script src="../design/vendor/jquery-3.2.1.min.js"></script>
<script src="../design/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--main script-->
<script src="source/js/cart.js"></script>
<script src="../source/js/serviceProviderDashboard.js"></script>
<script src="../source/js/scripts.js"></script>

</body>
</html>