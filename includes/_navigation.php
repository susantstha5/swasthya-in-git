<header>
<!--    <input type="hidden" id="sessionCurrentCity" value="HYDERABAD">-->

    <div class="webNav hidden-xs hidden-sm">
        <div class="navMini">
            <div class="container-fluid padding-none">
                <div class="row margin-none">
                    <div class="col-xs-6 col-sm-6 col-md-4 text-left">
                        <div class="toll-free"> Call 1660-01-22-4444 for help</div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-8 text-right">
                        <!-- Admin link start -->

                        <!-- Admin link over -->
                        <span class="padding-l-r-5">Download App</span>
                        <a class="margin-none" href="#" title="Download Android App"><i class="fa fa-android size-15 margin-r-5"></i></a>
                        <a class="margin-none" href="#" title="Download iOS App"><i class="fa fa fa-apple size-15 margin-r-5"></i></a>|
                        <!-- Login info start -->



                        <a href="signup/optionpage.php" title="Sign In/Register" style="text-decoration: none">
                            <i class="fa fa-user-plus size-15" aria-hidden="true"></i>
                            <span class="visLg">Sign In/Register</span>
                        </a>

                        <!-- Login info over -->
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar mart-nav margin-none header-bar affix-top" role="navigation" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="design/assets/images/logos.png" alt="" style="height:100%">Swasthya </a>
<!--                <a class="nav-catalog shopByCategory" href="javascript:void()" title="Shop by Category"><i class="fa fa-bars padding-r"></i>Shop by Category</a>-->
            </div>

            <!-- search start-->

            <ul class="nav navbar-nav nav-search">
                <form name="productSearchFrm" id="productSearchFrm" >
                    <input type="hidden" value="A" id="productType" name="searchCategory">
                    <input type="hidden" name="quantity" class="qty" value="" ondrop="return false" id="quantity">
                    <input type="hidden" name="productId" value="" id="searchProductId">
                    <input type="hidden" value="" id="searchType">
                    <div class="form-group margin-none">
                        <div class="input-group productsearch">
								<span class="input-group-btn">
								<button class="btn btnMenu" type="button" id="MartSearchCategories" data-toggle="dropdown">All Product<span class="caret"></span></button>
									<ul class="dropdown-menu categories-drpdwn" aria-labelledby="MartSearchCategories">
										<li><a href="#" id="general" onclick="selectSearchType(this,'G');" class=""><i class="fa fa-check-circle"></i> General Store</a></li>
										<li><a href="#" id="pharmacy" onclick="selectSearchType(this,'P');"><i class="fa fa-check-circle"></i> Pharmacy</a></li>
										<li><a href="#" id="allProducts" onclick="selectSearchType(this,'A');" class="active"><i class="fa fa-check-circle"></i> All Products</a></li>
									</ul>
								</span>
                            <span class="twitter-typeahead srchdropdwn container-fluid padding-none">
                                <input class="tt-hint hide" type="text" autocomplete="off" spellcheck="off" disabled="" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);">
                                <input id="enterval" name="enterval" data-provide="typeahead" type="text"
                                       class="form-control navtxtSearch typeahead tw-typeahead tt-query"
                                       placeholder="Search for... general or pharma products"
                                       onfocus="$('.alert-error,.alert-info').not('#noItemsInCartMsg').parent().fadeOut();"
                                       autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: rgb(255, 255, 255); width: 100%;"
                                       data-placeholder="Search for... general or pharma products">
                                <span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap;
                                 font-family: open_sansregular, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px;
                                 font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
                                 font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px;
                                 text-rendering: auto; text-transform: none;">
                                </span>
                                <span class="tt-dropdown-menu dropdown-menu"
                                      style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; width: 100%;">
                                </span>
                            </span>
                            <i class="fa fa-refresh fa-spin fa-fw loadproducts hide"></i>
                            <span class="input-group-btn">
									<button class="btn btnDark" type="button" style="background-color: #000000;color:#ffffff">SEARCH</button>
                            </span>
                        </div>

                    </div>
                </form>
            </ul>

            <!-- search over -->
            <div class="nav navbar-nav upload-presc" style="border-radius: 5px;background: #F16C20;padding: 6px 10px;margin-left: 20px;margin-top: 8px;">
                <a href="#" title="Upload Prescription" class="action uppres" style="color:#ffffff">
                    <span>Upload Prescription</span>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">

                <!-- Cart info start -->

                <li id="miniCartDiv" class="dropdown hidden-xs">

                    <a href="javascript:;" class="smallnav dropdown-toggle" data-toggle="dropdown">
                        <span class="badge count-cart">0</span>
                        <i class="fa fa-cart-plus fa-2x padding-r-5" aria-hidden="true"></i>
<!--                       <span class="margin-l-5 hidden-xs visLg">Cart</span>-->
<!--                        <span class="cartCount animated delay02s bounceInDown" id="microCartQty">-->
<!--				                1-->
<!--	                    </span>-->
                    </a>
                    <div class="dropdown-menu minicart minicartbg none-borderradius padding-none">


                        <h4 class="padding-l-r-10 margin-b-none">Current Order
                            <small class="pull-right">
                                <a class="margin-none" style="color:black" id="clear-cart" href="#" >Clear</a>
                            </small>
                        </h4>
                        <form class="margin-none">
                            <div class="padding-all">
                                <div id="miniCartTable">
                                    <table class="table margin-none table-condensed small-text">
                                        <thead>
                                        <tr id="miniCart">
                                            <th class="col-sm-10 col-md-10">Product Name</th>
                                            <th></th>
                                            <th></th>
                                            <th class="padding-l">Qty</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div style="max-height:259px;">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; max-height: 201px;"><div class="cartscrolldiv" style="overflow: hidden; width: auto; max-height: 201px;">
                                                <table class="table table-hover table-bordered margin-b table-condensed small-text" style="position:relative;top:-3px;">
                                                    <tbody id="cartTableBody">
<!--                                                        <tr class="prdRow borderradius-top-none">-->
<!--                                                            <td class="col-sm-6 col-md-6">AVELIA NEEM FACEWASH 70GM</td>-->
<!--                                                            <td class="col-sm-1 col-md-1 text-right" style="padding-right:15px;">1</td>-->
<!--                                                        </tr>-->
<!--                                                            no item to display-->
                                                        <input type="hidden" id="checkoutUrl" value="/shoppingCart">
                                                    </tbody>
                                                </table>
                                            </div>
<!--                                            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.6; border-radius: 7px; z-index: 99; right: 1px; display: block;">-->
<!---->
<!--                                            </div>-->
<!--                                            <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">-->
<!---->
<!--                                            </div>-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid padding-none">
                                <button class="btn btnLightblue btn-block" type="button" id="pharmaCheckOutBtn" style="z-index:999;">
                                    <a href="carts.php">View Shopping Cart</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </li>


            </ul>
        </nav>

        <!-- Top navigation start -->
        <nav class="menubar">
            <ul class="nav navbar-nav custom-nav">
                <li class="margin-r-20" data-toggle="modal" data-target="#myModal" >
                    <a class="btn btn-md location" href="#" role="button" title="Locality"  style="padding-top:8px">
                        <i class="fa fa-map-marker fa-2x" style="color:red" aria-hidden="true"></i>
                        KATHMANDU
                    </a>
                </li>
<!--                modal section -->
                <div class="modal fade " id="myModal" role="dialog" >
                    <div class="modal-dialog model-sm city-list" >

                        <!-- Modal content-->
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Lists of Cities</h4>
                            </div>
                            <div class="modal-body">

                                <div class="city-input">
                                    <input type="text" name="city" placeholder="enter your city" class="search-city">
                                    <input type="hidden" name="cityName" value="Kathmandu" class="city-name">

                                </div>
                                <ul class="top-city-list">
                                    <div class="city-label">Top Cities</div>
                                    <li class="city-name"><a data-value="kathmandu" class="link-city button-text">Kathmandu</a></li>
                                    <li class="city-name"><a data-value="Gurgaon" class="link-city button-text">Bhaktapur</a></li>
                                    <li class="city-name"><a data-value="Pune" class="link-city button-text">Latitpur</a></li>
                                    <li class="city-name"><a data-value="Mumbai" class="link-city button-text">Gulmi</a></li>
                                    <li class="city-name"><a data-value="Bengaluru" class="link-city button-text">Patan</a></li>
                                    <li class="city-name"><a data-value="Kolkata" class="link-city button-text">Naxal</a></li>
                                    <li class="city-name"><a data-value="Hyderabad" class="link-city button-text">Jhapa</a></li>
                                    <li class="city-name"><a data-value="Ahmedabad" class="link-city button-text">Hetauda</a></li>
                                    <li class="city-name"><a data-value="Chennai" class="link-city button-text">Birgunj</a></li>
                                    <li class="city-name"><a data-value="Indore" class="link-city button-text">Sanepa</a></li>
                                    <li class="city-name"><a data-value="Lucknow" class="link-city button-text">Dharan</a></li>
                                    <li class="city-name"><a data-value="Jaipur" class="link-city button-text">Malekhu</a></li>
                                    <li class="city-name"><a data-value="Chandigarh" class="link-city button-text">Chitwan</a></li>
                                    <li class="city-name"><a data-value="Bhopal" class="link-city button-text">Janakpur</a></li>
                                    <li class="city-name"><a data-value="Noida" class="link-city button-text">Karnali</a></li>
                                    <li class="city-name"><a data-value="Navi Mumbai" class="link-city button-text">Narayani</a></li>
                                    <li class="city-name"><a data-value="Surat" class="link-city button-text">Surkhet</a></li>
                                    <li class="city-name"><a data-value="Patna" class="link-city button-text">Lumbini</a></li>
                                    <li class="city-name"><a data-value="Ludhiana" class="link-city button-text">Kaski</a></li>
                                    <li class="city-name"><a data-value="Bhubaneshwar" class="link-city button-text">Baneshwor</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
                <li class="general common mega-menu">
                    <a class="blue active" href="#" title="General Store">Personal Care</a>
                    <ul class="block">
                        <div class="menu-sub">
                            <div class="menu-col-1">
                                <h3 class="menu-category">Baby Care</h3>
                                <ul>
                                    <li><a href="">Diapers & Wipes</a></li>
                                    <li><a href="">Baby Creams & Lotions</a></li>
                                    <li><a href="">Baby Oils</a></li>
                                    <li><a href="">Baby Powders</a></li>
                                    <li><a href="">Baby Soap & Shampoo</a></li>
                                    <li><a href="">Baby Care Accessories</a></li>
                                    <li><a href="">Feeding & Nursing</a></li>
                                </ul>

                                <h3 class="menu-category">Skin Care</h3>
                                <ul>
                                    <li><a href="">Body Cream & Lotion</a></li>
                                    <li><a href="">Face Cream & Lotion</a></li>
                                    <li><a href="">Face Wash & Cleansers</a></li>
                                    <li><a href="">Scrubs & Face Packs</a></li>
                                    <li><a href="">Body Oils</a></li>
                                    <li><a href="">Powders</a></li>
                                    <li><a href="">Sun Care</a></li>
                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category">Sanitary & Hygiene</h3>
                                <ul>
                                    <li><a href="">Sanitary Napkins</a></li>
                                    <li><a href="">Hand Wash & Sterilizers</a></li>
                                    <li><a href="">Other Feminine Aids</a></li>
                                    <li><a href="">Adult Diapers</a></li>
                                    <li><a href="">Oral Care</a></li>
                                    <li><a href="">Tooth Paste & Powder</a></li>
                                </ul>

                                <h3 class="menu-category">Hair Care</h3>
                                <ul>
                                    <li><a href="">Shampoos</a></li>
                                    <li><a href="">Conditioners</a></li>
                                    <li><a href="">Hair Colours</a></li>
                                    <li><a href="">Oils & Treatment</a></li>
                                    <li><a href="">Hair Styling Products</a></li>
                                    <li><a href="">Hair Herbal/Ayurvedic</a></li>

                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category">Bath & Body Products</h3>
                                <ul>
                                    <li><a href="">Soaps</a></li>
                                    <li><a href="">Body Wash</a></li>
                                    <li><a href="">Shower Gel</a></li>
                                    <li><a href="">Face Wash</a></li>
                                    <li><a href="">Other Bath Accessories</a></li>
                                </ul>

                                <h3 class="menu-category">Sexual Wellness</h3>
                                <ul>
                                    <li><a href="">Contraceptives & Sexual Aids</a></li>
                                    <li><a href="">Pregnancy & Fertility Kits</a></li>
                                    <li><a href="">Premium Pleasure</a></li>

                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category"> Deodorants & Perfumes</h3>
                                <ul>
                                    <li><a href="">Men's Deo</a></li>
                                    <li><a href="">Women's Deo</a></li>
                                    <li><a href="">Perfumes</a></li>
                                    <li><a href="">Talcum Powders</a></li>
                                </ul>

                                <h3 class="menu-category">Eyes, Ears & Lips</h3>
                                <ul>
                                    <li><a href="">Eye Liner & Kajals</a></li>
                                    <li><a href="">Other Eye Care Products</a></li>
                                    <li><a href="">Ear Care</a></li>
                                    <li><a href="">Lip Care</a></li>
                                </ul>
                            </div>
                            <div class="menu-col-1">
                                <h3 class="menu-category">Shaving & Hair Removal</h3>
                                <ul>
                                    <li><a href="">Razors & Blades</a></li>
                                    <li><a href="">Shaving Creams & Foams</a></li>
                                    <li><a href="">After Shave Products</a></li>
                                    <li><a href="">Hair Removal Products</a></li>
                                </ul>

                                <h3 class="menu-category">Hand, Foot & Nails</h3>
                                <ul>
                                    <li><a href="">Hand Creams & Lotions</a></li>
                                    <li><a href="">Hand Wash</a></li>
                                    <li><a href="">Foot Care</a></li>
                                    <li><a href="">Nail Paint & Remover</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="common mega-menu">
                    <a class="blue" href="#"  title="Pharmacy">Exclusive</a>
                    <ul class="block">
                        <div class="menu-sub">
                            <div class="menu-col-2">
                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">alex</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>

                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>

                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>

                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>
                            </div>

                            <div class="menu-col-1">
                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>

                                <h3 class="menu-category">Category</h3>
                                <ul>
                                    <li><a href="">Link 01</a></li>
                                    <li><a href="">Link 02</a></li>
                                    <li><a href="">Link 03</a></li>
                                    <li><a href="">Link 04</a></li>
                                    <li><a href="">Link 05</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a class="" href="#"  title="FlexiRewards">Supersale</a></li>
                <li><a class="" href="#"  title="Promotions">Diabetes</a></li>
                <li><a class="" href="#"  title="Healthy Life">Fitness & Suppliments</a></li>
                <li><a class="" href="#"  title="Healthy Life">Ayurveda</a></li>
                <li><a class="" href="#"  title="Healthy Life">Personal Care</a></li>
                <li><a class="" href="#"  title="Healthy Life">Baby & Mother</a></li>
                <li><a class="" href="#"  title="Healthy Life">Beauty</a></li>
            </ul>
        </nav>
        <!-- Top navigation over -->

        <!--WebNav start -->

        <!-- webNav ends -->

    </div>

    <!--mobile navigation start -->
    <nav class="navbar mart-nav navbar-fixed-top margin-none visible-xs visible-sm" role="navigation">
        <div class="">
            <a class="navbar-brand" href="index.php">
<!--                <img src="design/assets/images/logos.png" alt="">-->
                <img title="swasthyaNepal" alt="swasthyaNepal" src="" >
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right mobile-nav margin-r">

            <li>
                <div id="wrap">
                    <form action="" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="Search for pharma products">
                        <i class="fa fa-search size-26 search-icon"><input id="search_submit" value="search" type="submit"></i>
                    </form>
                </div>
            </li>
            <li ><a data-toggle="modal" data-target="#myModal1" href="" role="button" title="Locality/Pincode"><i class="fa fa-map-marker size-26"></i></a></li>
            <div class="modal fade " id="myModal1" role="dialog" >
                <div class="modal-dialog model-sm city-list" >

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Lists of Cities</h4>
                        </div>
                        <div class="modal-body">

                            <div class="city-input">
                                <input type="text" name="city" placeholder="enter your city" class="search-city">
                                <input type="hidden" name="cityName" value="Kathmandu" class="city-name">

                            </div>
                            <ul class="top-city-list">
                                <div class="city-label">Top Cities</div>
                                <li class="city-name"><a data-value="kathmandu" class="link-city button-text">Kathmandu</a></li>
                                <li class="city-name"><a data-value="Gurgaon" class="link-city button-text">Bhaktapur</a></li>
                                <li class="city-name"><a data-value="Pune" class="link-city button-text">Latitpur</a></li>
                                <li class="city-name"><a data-value="Mumbai" class="link-city button-text">Gulmi</a></li>
                                <li class="city-name"><a data-value="Bengaluru" class="link-city button-text">Patan</a></li>
                                <li class="city-name"><a data-value="Kolkata" class="link-city button-text">Naxal</a></li>
                                <li class="city-name"><a data-value="Hyderabad" class="link-city button-text">Jhapa</a></li>
                                <li class="city-name"><a data-value="Ahmedabad" class="link-city button-text">Hetauda</a></li>
                                <li class="city-name"><a data-value="Chennai" class="link-city button-text">Birgunj</a></li>
                                <li class="city-name"><a data-value="Indore" class="link-city button-text">Sanepa</a></li>
                                <li class="city-name"><a data-value="Lucknow" class="link-city button-text">Dharan</a></li>
                                <li class="city-name"><a data-value="Jaipur" class="link-city button-text">Malekhu</a></li>
                                <li class="city-name"><a data-value="Chandigarh" class="link-city button-text">Chitwan</a></li>
                                <li class="city-name"><a data-value="Bhopal" class="link-city button-text">Janakpur</a></li>
                                <li class="city-name"><a data-value="Noida" class="link-city button-text">Karnali</a></li>
                                <li class="city-name"><a data-value="Navi Mumbai" class="link-city button-text">Narayani</a></li>
                                <li class="city-name"><a data-value="Surat" class="link-city button-text">Surkhet</a></li>
                                <li class="city-name"><a data-value="Patna" class="link-city button-text">Lumbini</a></li>
                                <li class="city-name"><a data-value="Ludhiana" class="link-city button-text">Kaski</a></li>
                                <li class="city-name"><a data-value="Bhubaneshwar" class="link-city button-text">Baneshwor</a></li>
                            </ul>

                        </div>

                    </div>

                </div>
            </div>
            <li id="shopping-cart-btn">
<!--					<span class="cartCount animated delay02s bounceInDown" id="miniMicroCart">1</span>-->
                <a href="carts.php" title="cart"><span class="badge count-cart">0</span><i class="fa fa-cart-plus size-15 padding-r-5 size-26" aria-hidden="true"></i></a>
            </li>
<!--            <li><a href="#" title="Sign In/Register"><i class="fa fa-user-plus size-15 size-26" aria-hidden="true"></i></li>-->
        </ul>
    </nav>
    <!--mobile navigation over-->

    <!--locality info mobile view  -->
    <!-- <div class="visible-xs visible-sm hide">
        <div class="row margin-none mview-loclaity">
            <div class="arrowup"></div>
            <div class="col-xs-12 padding-none">
                <span class="w100 ellips left">kathmandu - <span class="size-10">Home Delivery Available</span></span>
            </div>
        </div>
    </div> -->

    <!-- server side messages displayed over -->
    <div class="visible-xs">
        <div class="svrmsg alert alert-success none-borderradius" style="display:none">
            <div class="container-fluid padding-none">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
                    <button type="button" class="close" onclick="$('.svrmsg').hide();">
                        ×
                    </button>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <!-- GeneralStore mobile main navigation start-->

    <div class="modal modalbottom fade mvSelectVariant" id="mobilenav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="height: 100%;">
            <div class="modal-content">
                <div class="modal-header padding-all navhdr">
                    <h4 class="modal-title" id="myModalLabel">
                        <img class="padding-r" height="22" data-dismiss="modal" alt="back" title="back" src="design/assets/images/logos.png" >
                        Shop by Categories
                    </h4>
                </div>

            </div>
        </div>
    </div>
    <!-- GeneralStore mobile main navigation End-->
    <!-- Modal -->

</header>

