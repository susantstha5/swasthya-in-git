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

        <!--add  product-->
        <div class="container-fluid ">

            <div class="row add-product-container">
                <div class="col-sm-8">
                    <h3 style="background: #024b68;color:#ffffff;padding:10px 20px;text-align:center">Add product</h3>
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div class="col-sm-12 form-group margin50">
                                <label class="col-lg-3"  for="ProductName">Product Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="name" name="ProductName" placeholder="" class="form-control name">
                                </div>
                            </div>

                            <div class=" col-sm-12 form-group">
                                <label class="col-sm-3" for="ProductType">Product Type</label>
                                <div class="col-sm-4">
                                    <select id="productType" name="ProductType" class="form-control product-type">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Manufacturer">Manufacturer</label>
                                <div class="col-sm-4">
                                    <select id="manufacturer" name="Manufacturer" class="form-control manufacturer">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Distributor">Distributor</label>
                                <div class="col-sm-4">
                                    <select id="distributor" name="Distributor" class="form-control distributor">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="SKU">SKU</label>
                                <div class="col-sm-4">
                                    <input type="text" id="sku" name="SKU" placeholder="" class="form-control sku">
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="ManufacturerPart">Manufacturer Part</label>
                                <div class="col-sm-4">
                                    <input type="text" id="manufacturerPart" name="ManufacturerPart" placeholder="" class="form-control manufacturer-part">
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
                                <label class="col-sm-3" for="PageDisplay">Page Display</label>
                                <div class="col-sm-4">
                                    <select id="pageDisplay" name="PageDisplay" class="form-control page-display">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-lg-3" for="TaxClass">Tax Class</label>
                                <div class="col-lg-4">
                                    <select id="taxClass" name="TaxClass" class="form-control tax-class">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="QuantityDiscountTable">Quantity Discount Table</label>
                                <div class="col-sm-4">
                                    <select id="quantityDiscount" name="QuantityDiscountTable" class="form-control quantity-discount">
                                        <option value="0">-Select-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="ShowBuyButton">Show Buy Button</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="ShowBuyButton" class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="ShowBuyButton" checked class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="RequiresRegistrationToView">Requires Registration To View</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="RequiresRegistrationToView" checked class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="RequiresRegistrationToView"  class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>
                            <!--                    <div class="col-sm-12 form-group">-->
                            <!--                        <label class="col-sm-3"  for="CallToOrder">Is Call To Order</label>-->
                            <!--                        <div class="col-sm-4">-->
                            <!--                            <input type="radio"  name="CallToOrder" checked class="input-xlarge"><span>No</span>-->
                            <!--                            <input type="radio"  name="CallToOrder"  class="input-xlarge"><span>Yes</span>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="HidePriceUntilCart">Hide Price Until Cart</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="HidePriceUntilCart" checked class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="HidePriceUntilCart"  class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>
                            <!--                    <div class="col-sm-12 form-group">-->
                            <!--                        <label class="col-sm-3"  for="ProductFeeds">Exclude From Product Feeds</label>-->
                            <!--                        <div class="col-sm-4">-->
                            <!--                            <input type="radio"  name="ProductFeeds" checked class="input-xlarge"><span>No</span>-->
                            <!--                            <input type="radio"  name="ProductFeeds"  class="input-xlarge"><span>Yes</span>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="col-sm-12 form-group">-->
                            <!--                        <label class="col-sm-3"  for="Kit">Is a Kit</label>-->
                            <!--                        <div class="col-sm-3">-->
                            <!--                            <input type="radio"  name="Kit" checked class="input-xlarge"><span>No</span>-->
                            <!--                            <input type="radio"  name="Kit"  class="input-xlarge"><span>Yes</span>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3"  for="Inventory">Track Inventory By Size and Color</label>
                                <div class="col-sm-4">
                                    <input type="radio"  name="Inventory" checked class="input-xlarge"><span>No</span>
                                    <input type="radio"  name="Inventory"  class="input-xlarge"><span>Yes</span>
                                </div>
                            </div>
                            <!--                    <div class="col-sm-12 form-group">-->
                            <!--                        <label class="col-sm-3" for="ColorOptionPrompt">Color Option Prompt</label>-->
                            <!--                        <div class="col-sm-4">-->
                            <!--                            <input type="text" id="colorOptionPrompt" name="ColorOptionPrompt" placeholder="" class="form-control color-option-prompt">-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="SizeOptionPrompt">Size Option Prompt</label>
                                <div class="col-sm-4">
                                    <input type="text" id="sizeOptionPrompt" name="SizeOptionPrompt" placeholder="" class="form-control size-option-prompt">
                                </div>
                            </div>
                            <!--                    <div class="col-sm-12 form-group">-->
                            <!--                        <label class="col-sm-3"  for="RequiresTextField">Requires Text Field</label>-->
                            <!--                        <div class="col-sm-4">-->
                            <!--                            <input type="radio"  name="RequiresTextField" checked class="input-xlarge"><span>No</span>-->
                            <!--                            <input type="radio"  name="RequiresTextField"  class="input-xlarge"><span>Yes</span>-->
                            <!--                            <p class="help-block">-->
                            <!--                                <span>Field Prompt </span><input type="text" id="fieldPrompt" name="FieldPrompt" placeholder="" class="form-control field-prompt">-->
                            <!--                            </p>-->
                            <!--                            <p class="help-block">-->
                            <!--                                <span>Max Length </span><input type="text" id="maxLength" name="MaxLength" placeholder="" class="form-control max-length">-->
                            <!--                            </p>-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <h3 style="padding:10px 20px;text-align:center;text-decoration: underline">Default Variant Information</h3>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Price">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Price">Image upload</label>
                                <div class="col-sm-9">
                                    <div class="page-content fade-in-up">
                                        <div class="ibox">
                                            <div class="ibox-body">
                                                <!--                                        <form class="dropzone" id="mydropzone" action="http://admincast.com/adminca/preview/admin_1/assets/plugins/dropzone/demo-upload.php">-->
                                                <!--                                            <div class="fallback">-->
                                                <input name="file" type="file" multiple="multiple">
                                                <!--                                            </div>-->
                                                <!--                                        </form><br>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Price">Price</label>
                                <div class="col-sm-4">
                                    <input type="text" id="price" name="Price" placeholder="" class="form-control price">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="SalePrice">Sale Price</label>
                                <div class="col-sm-4">
                                    <input type="text" id="saleprice" name="SalePrice" placeholder="" class="form-control sale-price">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Weight">Weight</label>
                                <div class="col-sm-4">
                                    <input type="text" id="weight" name="Weight" placeholder="" class="form-control weight">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Dimentions">Dimentions(Width x Height X Depth)</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-3"><input type="text" id="dimentionsWidth" name="DimentionsWidth" placeholder="" class="form-control dimentions-width">  X</div>
                                    <div class="col-lg-3"><input type="text" id="dimentionsHeight" name="DimentionsHeight" placeholder="" class="form-control dimentions-height">  X</div>
                                    <div class="col-lg-3"><input type="text" id="dimentionsDepth" name="DimentionsDepth" placeholder="" class="form-control dimentions-depth"></div>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="CurrentInventory">Current Inventory</label>
                                <div class="col-sm-4">
                                    <input type="text" id="currentInventory" name="CurrentInventory" placeholder="" class="form-control current-inventory">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Colors">Colors</label>
                                <div class="col-sm-4">
                                    <input type="text" id="colors" name="Colors" placeholder="" class="form-control colors">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="ColorSKUModifier">Color SKU Modifiers</label>
                                <div class="col-sm-4">
                                    <input type="text" id="colorModifier" name="ColorSKUModifier" placeholder="" class="form-control color-modifier">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="Sizes">Sizes</label>
                                <div class="col-sm-4">
                                    <input type="text" id="sizes" name="Sizes" placeholder="" class="form-control sizes">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="col-sm-3" for="SizeSKUModifier">Size SKU Modifiers</label>
                                <div class="col-sm-4">
                                    <input type="text" id="sizeModifier" name="SizeSKUModifier" placeholder="" class="form-control size-modifier">
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
            <!--    <form class="dropzone" id="mydropzone" action="">-->
            <!--        <div class="fallback">-->
            <!--            <input name="file" type="file" multiple="multiple">-->
            <!--        </div>-->
            <!--    </form>-->
        </div>
        <!--/add product-->


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