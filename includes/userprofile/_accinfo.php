<!-- account system Modal -->
<div class="modal fade" id="accInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Account system</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="" id="form1">
                    <div id="acc_setup" class="popup">
                        <div id="divPeraccount" class="col-sm-12 mgn10">
                            <div class="row">
                                <div class="col-sm-6 " style="width:45%">
                                    <div class="form-group">
                                        <label for="user_name">Username</label>
                                        <input name="user_name" type="text" id="user_name" readonly="" class="form-control" size="33" value="susantshrestha68@gmail.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="new_password">Enter New Password *</label>
                                        <input name="new_password" type="password" id="new_password" maxlength="50" class="form-control" size="33">
                                    </div>
                                    <div class="clear1"></div>
                                    <div class="form-group">
                                        <label for="confirm_new_password">Confirm Your Password *</label>
                                        <input name="confirm_new_password" type="password" id="confirm_new_password" maxlength="50" class="form-control" size="33">
                                    </div>
                                    <div class="clear1"></div>
                                    <input type="submit" name="btnSaveuser" value="Save" id="btnSaveuser" class="ords_btns">
                                </div>
                                <div class="col-sm-6 top-h" style="font-family:'open_sansregular'"> <b>Important:</b> Make sure your password is a mix of numbers and letters of at least 6 characters long.</div>
                            </div>
                        </div>
                        <div class="clear_h"></div>
                    </div>

                </form>

            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- personal information modal-->
<div class="modal fade" id="personalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Personal Information</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="" id="form1">
                    <div id="personal_info" class="popup">
                        <div id="divPerinfo" class="col-sm-12 mgn10">
                            <div class="row">
                                <div class="col-sm-6 line-right2" style="width:50%">
                                    <div class="form-group">
                                        <label for="first_name1">First Name *</label>
                                        <input name="first_name" type="text" id="first_name" maxlength="25" size="40" class="form-control" value="Susant">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name1">Last Name *</label>
                                        <input name="last_name" type="text" id="last_name" maxlength="25" size="40" class="form-control" value="Shrestha">
                                    </div>
                                    <div class="form-group">
                                        <label style="height:18px;" for="phone_number1">Mobile Number *</label>
                                        <input name="phone_number" type="text" id="phone_number" maxlength="10" size="36" onkeypress="return onlyNumbers();" class="form-control number-bg">
                                    </div>
                                    <div class="wall-txt pull-left">
                                        <input name="chkSMS" type="checkbox" id="chkSMS">
                                        <label for="chkSMS"><span></span>I wish to be notified of my order by SMS.</label>
                                    </div>
                                </div>
                                <div class="col-sm-5 lft-marg" style="width:50%">
                                    <div class="form-group">
                                        <label for="gender">Gender *</label>
                                        <div class="list-select">
                                            <label>
                                                <select name="gender" id="gender" tooltiptext="Please select Gender!">
                                                    <option selected="selected" value="Select">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth (e.g. DD-MM-YYYY)*</label>
                                        <input name="date_of_birth" type="text" id="date_of_birth" class="form-control is-datepick" maxlength="10" size="40" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email ID*</label>
                                        <input name="email" type="text" id="email" readonly="" class="form-control" maxlength="50" size="40" value="susantshrestha68@gmail.com">
                                    </div>
                                    <input type="submit" name="btnSavepersonal" value="Save" id="btnSavepersonal" class="ords_btns">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- billing address modal-->
<div class="modal fade" id="billingInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Billing Information</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="" id="form1">
                    <div id="billing" class="popup">
                        <div class="col-sm-12 mgn10">
                            <div class="row">
                                <div class="col-sm-6 line-right2" style="width:45%">
                                    <div class="form-group">
                                        <label for="billing_username">Pincode *</label>
                                        <input name="zipcode" type="text" id="zipcode" class="form-control" size="40" maxlength="6" onkeypress="testing();">
                                    </div>
                                    <div class="form-group">
                                        <label for="billing_street_address">Address*</label>

                                        <textarea name="address_full" id="address_full" type="text" class="form-control field-required" maxlength="200" tooltiptext="Please enter Address!" style="height:117px;width:90%" placeholder="Please enter full address: Flat/Door No., Street/Road name &amp; Locality."></textarea>
                                    </div>
                                    <div class="form-group hidden">
                                        <label for="billing_suite_or_apt">Mobile Number*</label>
                                        <input name="billing_phoneno" type="text" id="billing_phoneno" class="form-control" size="12" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-sm-5 lft-marg" style="width:45%">
                                    <div class="form-group">
                                        <label for="billing_city">City *</label>
                                        <input name="inpBCity" type="text" id="inpBCity" class="form-control" size="40" maxlength="25">
                                    </div>
                                    <div class="form-group">
                                        <label for="ddlbill">State *</label>
                                        <div class="list-select ddState hidden">
                                            <label>
                                                <select name="ddlBillState" id="ddlBillState">
                                                    <option value="Select">Select</option>
                                                    <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chattisgarh">Chattisgarh</option>
                                                    <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                                    <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>

                                                </select>
                                            </label>
                                        </div>
                                        <input name="inpBillState" type="text" id="inpBillState" class="form-control field-required" maxlength="35" tooltiptext="Please enter Your State!">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country*</label>
                                        <div class="list-select ErrorField">
                                            <label>
                                                <select name="ddlBillCountry" id="ddlBillCountry" title="Please Select Country!" class="form-control field-required">
                                                    <option selected="selected" value="Select">Select</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>

                                                </select>
                                            </label>
                                        </div><span class="ValidationErrors">Please select your Country!</span>
                                    </div>
                                    <div class="form-group">
                                        <div class="clear1"></div>
                                    </div>
                                    <input type="submit" name="ImageButton3" value="Save" id="ImageButton3" class="ords_btns">
                                </div>
                            </div>
                        </div>
                        <div class="clear1"></div>
                    </div>
                </form>

            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- delivery address modal-->
<div class="modal fade" id="deliveryInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Deliveries Information</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="" id="form1">

                    <div id="shipping" class="popup">
                        <div class="col-sm-12 mgn10">
                            <div class="row">
                                <div class="col-sm-6 line-right2" style="width:45%">
                                    <div class="form-group">
                                        <label for="shipping_full_name">Full Name*</label>
                                        <input name="shipping_full_name" type="text" id="shipping_full_name" class="form-control" maxlength="30" tooltiptext="Please Enter Shipping First Name!">
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_zipcode">Pincode *</label>
                                        <input name="shipping_zipcode" type="tel" id="shipping_zipcode" class="form-control" size="40" maxlength="6">
                                        <span id="lblspinerr"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_street_address">Address*</label>
                                        <div href="#" data-placement="top" data-trigger="focus" tabindex="0" id="example" data-toggle="popover" class="new_wrapperprd bckgnone" rel="popover" data-popover="popover_content" data-content="" data-original-title="">?</div>
                                        <div id="popover_content" style="display: none">
                                            <div><span><div style="font-size: 13px; text-align: left;" class="fnt-smb">Address Entry Guidelines:</div>
				<div class="text-left">To prevent any delay in delivering your order, please provide the complete/correct address, along with a landmark near your location.</div></span></div>
                                        </div>

                                        <textarea name="txtShipAddress" id="txtShipAddress" type="text" class="form-control field-required" maxlength="200" tooltiptext="Please enter Address!" placeholder="Please enter full address: Flat/Door no., Street/Road name &amp; Locality." style="height:87px;"></textarea>
                                    </div>
                                    <div class="form-group"><label for="shipping_suite_or_apt">Landmark</label>
                                        <input name="shipping_suite_or_apt" type="text" id="shipping_suite_or_apt" class="form-control" size="40" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-sm-5 lft-marg" style="width:45%">


                                    <div class="form-group ">
                                        <label for="address_full">Mobile Number*</label>
                                        <input name="Shipping_mobno" type="text" id="Shipping_mobno" class="form-control number-bg" size="12" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_city">City *</label>
                                        <input name="shipping_city" type="text" id="shipping_city" class="form-control" size="40" maxlength="25">
                                    </div>
                                    <div class="form-group">
                                        <label for="ddlship">State *</label>
                                        <div class="list-select">
                                            <label>
                                                <select name="ddlShipState" id="ddlShipState" disabled="" class="aspNetDisabled form-control field-required">
                                                    <option selected="selected" value="Select">Select</option>
                                                    <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chattisgarh">Chattisgarh</option>
                                                    <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                                    <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <br>
                                        <div id="lblShipCountry"><b>Nepal</b> (Delivery within Nepal ONLY)</div>
                                    </div>

                                    <div class="clear1"></div>

                                    <input type="submit" name="ImageButton4" value="Save" id="ImageButton4" class="ords_btns">
                                </div>
                            </div>
                        </div>
                        <div class="clear_h"></div>
                        <div class="clear1 "></div>
                    </div>

                </form>

            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>



<!--        account information-->
<div id="accinfo_tab " class="myc_cont container-fluid" style="display:block">
    <div id="accview " style="display:block;">
        <div class="row pull-left ">
            <div class="col-md-6 ords_cinfo pull-left lga_height">
                <div class="ords_cinfo_h1">Login Information</div>
                <div class="ords_cinfo_inner">
                    <div class="pull-left ords_cinfo_gry myc_height">
                        <div class="form-group">
                            <div class="pull-left">Username:</div>
                            <div class="pull-left txt_blue">
                                &nbsp;
                                <span id="lblusername" style="font-weight: normal">susant@gmail.com</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pull-left">Password:</div>
                            <div class="pull-left txt_blue">
                                &nbsp;
                                <span id="lblpassword" style="font-weight: normal">*******</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pull-right" data-target="#accInfo"><a class="ords_btns mdyt" href="#" data-toggle="modal" data-target="#accInfo">Modify</a> </div>

                </div>
            </div>
            <div class="col-md-6 ords_cinfo pull-left mrg-rt lga_height">
                <div class="ords_cinfo_h1">Personal Information</div>
                <div class="ords_cinfo_inner">
                    <div class="pull-left p100 myc_height">
                        <div>
                            <span id="lblFirstName" style="font-weight: normal">Susant</span>
                            <span id="lblLastName" style="font-weight: normal">Shrestha</span>
                        </div>
                        <div>
                            <span id="lblphone_number" style="font-weight: normal"></span>
                        </div>
                        <div>
                            <span id="lblGender" style="font-weight: normal">male</span>
                        </div>
                        <div>
                            <span id="lbldateofbirth" style="font-weight: normal"></span>
                        </div>
                        <div>
                            <span id="lblEmail" style="font-weight: normal">susantshrestha68@gmail.com</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="pull-right"  ><a class="ords_btns mdyt" href="#" data-target="#personalInfo" data-toggle="modal">Modify</a> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div id="divBilladd" class="col-md-6 col-xs-12 ords_cinfo_mid1 myc1_height pull-left">
                <div class="ords_cinfo_h1">Billing Address</div>
                <div class="ords_cinfo_inner">
                    <div id="divBillRH" class="myc1_height">
                        <div class="clear"></div>
                        <div class="lh20">
                            <span id="lblStreetAddress" style="font-weight: normal"></span>
                        </div>
                        <div>
                            <span id="lblstreet_address2" style="font-weight: normal"></span>
                        </div>
                        <div>
                            <span id="lblCity" style="font-weight: normal"></span>
                            <span id="lblzipcode" style="font-weight: normal"></span>
                        </div>
                        <div>
                            <span id="lblState" style="font-weight: normal"></span>
                            <span id="lblcountry" style="font-weight: normal"></span>
                        </div>
                    </div>
                    <div style="height: 7px" class="clearfix"></div>
                    <div id="divModAddbtn" class="pull-right">
                        <a class="ords_btns mdyt" href="#" data-toggle="modal" data-target="#billingInfo" >ADD
                        </a>
                    </div>

                </div>
            </div>
            <div id="divShipadd" class="col-md-6 ords_cinfo_mid1 pull-left mrg-rt" style="margin-right: 0px;">
                <div class="ords_cinfo_h1">Delivery Address(es)</div>


                <div id="divHeight" class="myc1_height">

                    <div class="carosel mycr" id="carosel1 ">
                        <a id="divHidden1" class="hidden"></a>
                        <div class="carosel-inner">
                            <ul id="SlideItMoo_items_1"></ul>

                        </div>
                        <!--/carosel-inner-->

                        <a id="divHidden2" class="hidden"></a>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="clear1"></div>
                <div id="divAddmore" class="hidden" style="border-top: #afe6e9 solid 1px; padding-top: 10px"><a class="add-more mdyt" href="" >+ ADD ANOTHER ADDRESS</a> </div>
                <div id="divShipAddbtn" class="pull-right" style="margin-right:10px"><a class="ords_btns mdyt" href="#" data-toggle="modal" data-target="#deliveryInfo" >ADD</a></div>

                <div class="clear1"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>