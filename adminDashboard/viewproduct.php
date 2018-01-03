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
    <link type="text/css" href="../includes/dashboardComponent/displayItems/displayItems.css" rel="stylesheet">
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

        <!--view  product-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="cd-gallery">
                        <li>
                            <div class="cd-single-item">
                                <a href="" >
                                    <ul class="cd-slider-wrapper">
                                        <li class="selected">
                                            <img src="../img/shvet-mushli.jpg" alt="Preview image">
                                        </li>
                                        <!-- other product images here -->
                                    </ul>
                                </a>

                                <div class="cd-customization">
                                    <button class="add-to-cart" data-original-title="display this items" data-toggle="modal" data-target="#display-item">
                                        <em>Edit Item</em>
                                    </button>
                                    <button class="add-to-cart" data-original-title="Remove this items" data-toggle="modal" data-target="#delete-item">
                                        <em>Delete Item</em>
                                    </button>

                                                                    </div> <!-- .cd-customization -->
                            </div> <!-- .cd-single-item -->

                            <div class="cd-item-info">
                                <b><a href="#0" data-original-title="display this items" data-toggle="modal" data-target="#display-item">Aruyuvedic</a></b>
                                <em>Rs.900</em>
                            </div> <!-- cd-item-info -->
                        </li>

                        <!-- other list items here -->
                    </ul> <!-- cd-gallery -->
                </div>

            </div>
        </div>

        <!--/view product-->

        <!--delete modal starts here-->
        <div class="modal fade" id="delete-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

        <!--display items modal starts here-->
        <div class="modal fade" id="display-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product">
                            <div class="header">
                                <div class="back"></div>
                            </div>
                            <div class="main">
                                <div class="left">
                                    <h1>Auyvedic</h1>
                                    <h2>Medicine</h2>
                                    <h3>Rs 320.00</h3>
                                    <img src="../img/shvet-mushli.jpg" alt="" />
                                </div>
                                <div class="right">
                                    <p>Designer Karim Rashid continues to put his signature spin on all genres of design through various collaborations with top-notch companies. Another one to add to the win column is his work with Italian manufacturer Chateau d’Ax.</p>
                                    <p>In stock.</p>
                                    <p>
                                        <span class="fa fa-star yellow"></span>
                                        <span class="fa fa-star yellow"></span>
                                        <span class="fa fa-star yellow"></span>
                                        <span class="fa fa-star yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span>(4.67 - 172 reviews)</span>
                                    </p>
                                    <p class="quantity">QUANTITY <span class="fa fa-angle-left angle"></span><span id="qt">3</span><span class="fa fa-angle-right angle"></span></p>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="left">
                                    <p id="price">Rs 960.00</p>
                                </div>
                                <div class="right">
                                    <p>Added to Cart</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!--display items modal ends here-->

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

<!-- Initialize the editor. -->
<script> $(function() { $('textarea').froalaEditor() }); </script>
<!-- PAGE LEVEL SCRIPTS-->

<!--main script-->
<script src="../includes/dashboardComponent/displayItems/displayItems.js"></script>
<script src="../source/js/cart.js"></script>
<script src="../source/js/serviceProviderDashboard.js"></script>
<script src="../source/js/scripts.js"></script>

</body>
</html>