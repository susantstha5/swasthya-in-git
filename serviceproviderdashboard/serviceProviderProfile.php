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
    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!--    <link href="source/js/main.css" rel="stylesheet"/>-->

    <link type="text/css" href="../css/serviceProviderDashboard/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="../css/serviceProviderDashboard/asideBar.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/serviceProviderDashboard/product/products.css">

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

        <div class="container-fluid ">

            <div class="row add-product-container">
                <div class="col-sm-10">
                    <h3 style="background: #024b68;color:#ffffff;padding:10px 20px;text-align:center">Registration</h3>
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div class="col-sm-12 form-group margin50">
                                <label class="col-lg-3"  for="registerName">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="name" name="registerName" placeholder="" class="form-control name">
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="businessCategory">Business category</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="businessCategory" class="form-control product-type">
                                        <option value="0" disabled="disabled">-Select-</option>
                                        <option value="1">medical</option>
                                        <option value="2">Pharmacy</option>
                                        <option value="3">clinic</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessTime">Hours</label>
                                <div class="col-sm-4">
                                    <input id="businessTime" type="time" name="businessTime" value="13:30">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessServices">Services</label>
                                <div class="col-sm-9">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="businessPaymentMethod">Payment method</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="businessPaymentMethod" class="form-control product-type">
                                        <option value="0" disabled="disabled">-Select-</option>
                                        <option value="1">cash</option>
                                        <option value="2">credit card</option>
                                        <option value="3">all above</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessLocation">Location</label>
                                <div class="col-sm-4">
                                    <input type="text" id="businessLocation" name="businessLocation" placeholder="" class="form-control price">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessWebsite">website link</label>
                                <div class="col-sm-4">
                                    <input type="text" id="businessWebsite" name="businessWebsite" placeholder="" class="form-control price">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessCategory">Categories</label>
                                <div class="col-sm-9">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="businessInformation">other Information</label>
                                <div class="col-sm-9">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="Published">Published</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="Published" class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="Published" checked class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="Featured">Featured</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="Featured" class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="Featured" checked class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="profileUpload">profile image upload</label>
                                <div class="col-sm-9">
                                    <input name="bannerUpload" type="file" multiple="multiple">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="bannerUpload">Banner image upload</label>
                                <div class="col-sm-9">
                                    <input name="bannerUpload" type="file" multiple="multiple">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="bannerThumbnailUpload">Banner Thumbnail image upload</label>
                                <div class="col-sm-9">
                                    <div class="page-content fade-in-up">
                                        <div class="ibox">
                                            <div class="ibox-body">
                                                <!--                                        <form class="dropzone" id="mydropzone" action="http://admincast.com/adminca/preview/admin_1/assets/plugins/dropzone/demo-upload.php">-->
                                                <!--                                            <div class="fallback">-->
                                                <input name="bannerThumbnailUpload" type="file" multiple="multiple">
                                                <!--                                            </div>-->
                                                <!--                                        </form><br>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group" style="display: flex;justify-content:center">
                                <div class="col-lg-6">
                                    <input type="submit" id="submitForm" name="submit" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>

        </div>



        <!--footer-->
        <?php include('../includes/_footers.php'); ?>
        <!-- ./footer -->
    </div>
</div>
<!--/.wrapper-->

<!--template script-->
<script src="../design/vendor/jquery-3.2.1.min.js"></script>
<script src="../design/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/js/froala_editor.pkgd.min.js"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="../source/js/dropzone/min/dropzone.min.js" type="text/javascript"></script>
<!--<script src="source/js/dropzone/min/dropzone-amd-module.min.js" type="text/javascript"></script>-->
<!-- Initialize the editor. -->
<script> $(function() { $('textarea').froalaEditor() }); </script>
<!-- PAGE LEVEL SCRIPTS-->

<!--main script-->
<script src="source/js/cart.js"></script>
<script src="../source/js/serviceProviderDashboard.js"></script>
<script src="../source/js/scripts.js"></script>

</body>
</html>