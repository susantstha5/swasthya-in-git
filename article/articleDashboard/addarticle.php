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
    <link type="text/css" href="../../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../design/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!--    tags-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">


    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!--    <link href="source/js/main.css" rel="stylesheet"/>-->

    <link type="text/css" href="../../css/serviceProviderDashboard/navigation/navigation.css" rel="stylesheet">
    <link type="text/css" href="../../css/serviceProviderDashboard/asideBar.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../css/serviceProviderDashboard/product/products.css">

    <link type="text/css" href="../../css/style.css" rel="stylesheet">
    <link type="text/css" href="../../css/_footers.css" rel="stylesheet">

</head>
<body  style="background: #f1f1f1;overflow-x: hidden">

<!-- /.banner-->
<div class="wrapper" id="site-wrapper">

    <?php include('../../includes/dashboardComponent/navigation.php'); ?>
    <!--    /.gloabl-nav -->

    <?php include('asideBar.php'); ?>
    <!--   /.main-sidebar -->

    <div class="content-wrapper">

        <!--add  product-->
        <div class="container-fluid ">

            <div class="row add-product-container">
                <div class="col-sm-10">
                    <h3 style="background: #024b68;color:#ffffff;padding:10px 20px;text-align:center">Add Articles</h3>
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div class="col-sm-12 form-group margin50">
                                <label class="col-lg-3"  for="ProductName">Article Title</label>
                                <div class="col-sm-4">
                                    <input type="text" id="title" name="ProductName" placeholder="" class="form-control name">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group margin50">
                                <label class="col-lg-3"  for="ProductName">Slug</label>
                                <div class="col-sm-4">
                                    <input type="text" id="slug" name="ProductName" placeholder="" class="form-control name">
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="ProductType">Category Type</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="ProductType" class="form-control product-type">
                                        <option value="0">-Select-</option>
                                    </select>
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
                                <label class="col-sm-3"  for="published">Published</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="published" class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="published" checked class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Manufacturer">Tags</label>
                                <div class="col-sm-4">
                                    <input type="text" value="" data-role="tagsinput" class="form-control" />
                                    <h6 style="color:#999;font-size:13px;padding:5px 0 0 0;margin:0;">write tags and press ',' to add it</h6>
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="ProductType">Author</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="ProductType" class="form-control product-type">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="ProductType">Access Level</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="ProductType" class="form-control product-type">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Price">Image upload</label>
                                <div class="col-sm-9">
                                      <input name="file" type="file" multiple="multiple">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Price">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
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
        <!--/add product-->


        <!--footer-->
        <?php include('../../includes/_footers.php'); ?>
        <!-- ./footer -->
    </div>
</div>
<!--/.wrapper-->

<!--template script-->
<script src="../../design/vendor/jquery-3.2.1.min.js"></script>
<script src="../../design/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.2/js/froala_editor.pkgd.min.js"></script>
<!-- PAGE LEVEL PLUGINS-->
<script  type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<!-- Initialize the editor. -->
<script> $(function() { $('textarea').froalaEditor() }); </script>
<!-- PAGE LEVEL SCRIPTS-->

<!--main script-->
<script src="../../source/js/cart.js"></script>
<script src="../../source/js/serviceProviderDashboard.js"></script>
<script src="../../source/js/scripts.js"></script>
<!--slug section-->
<script>
    $(document).ready(function(){
       $("#title").keyup(function () {
           var Text=$(this).val();
           Text=Text.toLowerCase();
           Text=Text.replace(/[^a-zA-Z0-9]+/g,'-');
           $("#slug").val(Text);
       })
    });
</script>
</body>
</html>