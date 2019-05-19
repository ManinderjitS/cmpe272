<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="All Products go here
">
  
  <title>Our Products</title>
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

<section class="engine"><a href="https://mobirise.info/f">easy site builder</a></section><section class="features18 popup-btn-cards cid-rqGEo3BzZn" id="features18-12">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">All of The Products are Here</h2>
 <?php
	$account = $name;
	$servername = "caisy199437731.ipagemysql.com";
	$username = "project";
	$password = "123456abcd";
	$db = "cmpe272";
	
	function showProduct($webname){	
		$account = $name;
		$servername = "caisy199437731.ipagemysql.com";
		$username = "project";
		$password = "123456abcd";
		$db = "cmpe272";
		$count = 0;
		$conn = new mysqli($servername, $username, $password,$db);
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		$query = "Select ImageAddr, Name, Weblink
				  From  Product
				  Where WebSite = '".$webname."';";
				  
		$result = mysqli_query($conn, $query);
		echo "  <table width='100%' >  
				<tr><th width='15%'></th>
				<th width='40%' align= 'center'><h1>".$webname."</h1></th>
				<th width='40%'></th>
				</table>
				<HR align=center width='80%' color=#987cb9 SIZE=2>
				<table width='100%' height = '200'>";
		while($row = mysqli_fetch_array($result)){
			if($count%3 ==0){
				echo '<div class="media-container-row pt-5 ">
				';
			}
			echo '<div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                            <a href="add_record.php?link='.$row['Weblink'].'" class="btn btn-primary display-4">Learn More</a>
                        </div>
                        <img src="'.$row['ImageAddr'].'" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            '.$row['Name'].'
                        </h4>                       
                    </div>
                </div>
            </div>
			';
			if($count%3 ==2 and $count != 0){
				echo '</div>
				';
			}
			$count+=1;
		}
		if($count%3 !=0) echo '</div>';
	}
	showProduct('Animatory');
	showProduct('Brewgy');
	showProduct('CloudBook');
	showProduct('Leap');
	showProduct('pokerfazebook');
	showProduct('Stepic');
 ?>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
