<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Swasthya Nepal|signup</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="../design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../design/vendor/font-awesome/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="../css/login/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr2AWaP9uwJ6g-iFUQZJHXrYzZDCCynvc&libraries=places"[ type="text/javascript"></script>
</head>
<body>

<!--main container-->
<div class="main-container">

    <!--    logo-->
    <div class="container-fluid ">
        <div class="text-center">
            <a href="" >
                <img src="../design/assets/images/logos.png" alt="" class="logo" >
            </a>
        </div>
    </div>
    <!--    login section-->
    <div class="container-fluid">
        <div class="content-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <h4>Dear service user, your request has been on pending. We will inform you in a short moment call.
                            Thankyou!
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Client Basic Info</div>
                <hr>
                <div class="card-content">

                    <form>

                        <table class="autocompleteForm table">

                            <tr class="susant">
                                <td>
                                    <label for="Name">Name</label>
                                    <input type="text" name="Name" class="" maxlength="500" /><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="dropdown-box">
                                        <select name="pagination">
                                            <option value="10" disabled="disabled" selected="selected">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="PhoneNumber">Mobile no</label>
                                    <input type="number" name="Name" class="" maxlength="500" /><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="Name">Date of Birth</label>
                                    <input type="date" name="Name" class="" maxlength="500" required /><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="ItemAddress">Address</label>
                                    <input type="text" name="ItemAddress" id="autocomplete" class="cat_textbox" maxlength="500" onFocus="geolocate()" /><br></td>
                            </tr>
                            <tr>
                                <td><label for="ItemAddress2">Address2(optional)</label>
                                    <input type="text" name="ItemAddress2" id="route" class="cat_textbox" maxlength="500" /><br></td>
                            </tr>
                            <tr>
                                <td><label for="ItemCity">City</label>
                                    <input type="text" name="ItemCity" id="locality" class="cat_textbox" maxlength="255" /><br></td>
                            </tr>
                            <tr>
                                <td><label for="ItemState">State</label>
                                    <input type="text" name="ItemState" id="administrative_area_level_1" class="cat_textbox" maxlength="255" /><br></td>
                            </tr>
                            <tr>
                                <td><label for="ItemZip">Zipcode/Postcode</label>
                                    <input type="text" name="ItemZip" id="postal_code" class="cat_textbox" maxlength="255" /></td>
                            </tr>

                                <tr>
                                    <td>
                                        <h3 class="text-center">Family history</h3>
                                        <hr>
                                    </td>

                                </tr>
                            <tbody class="family-history" style="border:1px solid lightgray">
                                <tr>
                                    <td>
                                        <label for="chronicDisease">Chronic Disease</label>
                                        <input type="text" name="chronicDisease" id="chronic_disease" maxlength="255" required />
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <label for="reportupload">Report Upload</label>
                                        <input name="reportupload" id="report_upload" type="file" required>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <label for="drName">Reference doctor name</label>
                                        <input type="text" name="drName" id="dr_name" maxlength="255" required />
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <label for="sympton">Any symptom (regarding disease)</label>
                                        <input type="text" name="symptom" id="sympton" maxlength="255"  required/>
                                    </td>

                                </tr>
                                <tr>
                                <td class="text-center">
                                    <button class="lnr lnr-plus-circle" style="font-size: 30px;background:transparent;border:none" title="add"></button>
                                </td>
                                </tr>
                            </tbody>

                            <tr>
                                <td><input type="submit" class="btn btn-primary" name="submit" value="submit"></td>
                            </tr>
                        </table>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</div>

<!--footer-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="footer-text">2017 Swasthya. All rights reserved.</div>
        </div>
    </div>
</div>

<script src="../design/assets/js/jquery-3.1.1.slim.min.js"></script>
<script src="../design/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../source/js/scripts.js"></script>
<script src="../source/js/autocomplete.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.navbar-toggle', function (event) {
            event.preventDefault();
            $('body').toggleClass('open');
        });
    });
</script>
</body>
</html>