<?php
	require_once('phpFiles/userSession.php');

	if(isset($_SESSION['reg_success'])){
		if(!$_SESSION['reg_success']){
			echo "<br><h3>Reg failed because of: </h3><br>";
			echo "<script type='text/javascript'>alert(Couldn't register)</script>";
			$_SESSION['reg_success'] = TRUE;
		}
	}
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">

  <title>Create User</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<?php
	include "navigationHeader.php";

?>

<section class="engine"><a href="https://mobirise.info/y">free html site templates</a></section><section class="mbr-section form1 cid-rpPbrbadSx mbr-parallax-background" id="form1-i">



    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(255, 127, 159);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Enter Your Information</h2>

            </div>
        </div>
    </div>
		<div class="container">
        <div class="row justify-content-center">

                <form action="phpFiles/sso_signup.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <div class="row row-sm-offset">

                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-4  form-group" data-for="userName">
                            <label for="userNameForm" class="form-control-label mbr-fonts-style display-7">User Name</label>
                            <input type="text" name="userName" data-form-field="UserName" required="required" class="form-control display-7" id="userNameForm">
                        </div>
						<div class="col-md-4  form-group" data-for="password">
                            <label for="passwordForm" class="form-control-label mbr-fonts-style display-7">Password</label>
                            <input type="password" name="password" data-form-field="Password" required="required" class="form-control display-7" id="passwordForm">
                        </div>
						<div class="col-md-4  form-group" data-for="email">
                            <label for="emailForm" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="emailForm">
                        </div>
                        <div class="col-md-4  form-group" data-for="firstName">
                            <label for="firstNameForm" class="form-control-label mbr-fonts-style display-7">First Name</label>
                            <input type="text" name="firstName" data-form-field="FirstName" required="required" class="form-control display-7" id="firstNameForm">
                        </div>
						<div class="col-md-4  form-group" data-for="lastName">
                            <label for="lastNameForm" class="form-control-label mbr-fonts-style display-7">Last Name</label>
                            <input type="text" name="lastName" data-form-field="LastName" required="required" class="form-control display-7" id="lastNameForm">
                        </div>

                        <br>
						<div data-for="phone" class="col-md-4  form-group">
                            <label for="phoneForm" class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="number" name="phone" data-form-field="Phone" required="required" class="form-control display-7" id="phoneForm">
                        </div>
						<div class="col-md-4  form-group" data-for="address">
                            <label for="addressForm" class="form-control-label mbr-fonts-style display-7">Address</label>
                            <input type="text" name="address" data-form-field="Address" required="required" class="form-control display-7" id="addressForm">
                        </div>

                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">CREATE USER</button></div>
                    </div>
                </form>

        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>
</html>
