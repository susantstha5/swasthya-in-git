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
    <!-- Include datatable style -->
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--    main styles-->
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

        <!--        order status display-->
        <div class="container" style="background:#ffffff;margin-top:10px;margin-bottom:10px">
            <h2 style="margin: 10px 0;">Products status</h2>
            <hr>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#pendingProduct" aria-controls="pendingProduct" role="tab" data-toggle="tab">Pending Products</a></li>
                    <li role="presentation"><a href="#activeProduct" aria-controls="activeProduct" role="tab" data-toggle="tab">Active Products</a></li>
                    <li role="presentation"><a href="#suspendedProduct" aria-controls="suspendedProduct" role="tab" data-toggle="tab">Suspended Products</a></li>
                    <li role="presentation"><a href="#allProduct" aria-controls="allProduct" role="tab" data-toggle="tab">All Products</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="pendingProduct">
                        <!--                        table content-->
                        <div class="table-responsive" data-pattern="priority-columns" style="background:#ffffff;margin-top:10px;margin-bottom:10px">
                            <table class="productstatus table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th data-priority="1">Description</th>
                                    <th data-priority="2">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>zandu</td>
                                    <td>this is the description place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>shesh</td>
                                    <td>this is the description place dddd</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>mesh</td>
                                    <td>this is the  place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--end of .table-responsive-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="activeProduct">
                        <!--                        table content-->
                        <div class="table-responsive" data-pattern="priority-columns" style="background:#ffffff;margin-top:10px;margin-bottom:10px">
                            <table class="productstatus table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th data-priority="1">Description</th>
                                    <th data-priority="2">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>zandu</td>
                                    <td>this is the description place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>shesh</td>
                                    <td>this is the description place dddd</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>mesh</td>
                                    <td>this is the  place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--end of .table-responsive-->

                    </div>
                    <div role="tabpanel" class="tab-pane" id="suspendedProduct">
                        <!--                        table content-->
                        <div class="table-responsive" data-pattern="priority-columns" style="background:#ffffff;margin-top:10px;margin-bottom:10px">
                            <table class="productstatus table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th data-priority="1">Description</th>
                                    <th data-priority="2">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>zandu</td>
                                    <td>this is the description place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>shesh</td>
                                    <td>this is the description place dddd</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>mesh</td>
                                    <td>this is the  place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--end of .table-responsive-->

                    </div>
                    <div role="tabpanel" class="tab-pane" id="allProduct">
                        <!--                        table content-->
                        <div class="table-responsive" data-pattern="priority-columns" style="background:#ffffff;margin-top:10px;margin-bottom:10px">
                            <table class="productstatus table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th data-priority="1">Description</th>
                                    <th data-priority="2">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>zandu</td>
                                    <td>this is the description place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>shesh</td>
                                    <td>this is the description place dddd</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>mesh</td>
                                    <td>this is the  place</td>
                                    <td>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-sm btn-flat" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--end of .table-responsive-->

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

<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<!-- Include datatable -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/js/froala_editor.pkgd.min.js"></script>

<!--main script-->
<script src="source/js/cart.js"></script>
<script src="../source/js/serviceProviderDashboard.js"></script>
<script src="../source/js/scripts.js"></script>
<script>
    $(document).ready(function() {
        $('.productstatus').DataTable();
    } );
</script>

</body>
</html>