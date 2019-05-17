
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


</table>
   <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <br><br><br><br>
  
   <?php
   
	$account = $name;
	$servername = "caisy199437731.ipagemysql.com";
	$username = "project";
	$password = "123456abcd";
	$db = "cmpe272";
	
	if($_SESSION['login'] == 0){
		echo "<br><br><br><table width='100%' >  
				<tr><th width='15%'></th>
				<th width='50%' align= 'center'><h3>Please Login first.</h3></th>
				<th width='60%'></th>
				</table>";
		die();
	}
	 
	date_default_timezone_set('America/Los_Angeles'); 
	$mysqltime = date ("Y-m-d");
	$conn = new mysqli($servername, $username, $password,$db);
	if ($conn->connect_error) {
		die("Connect Failed: " . $conn->connect_error);
	}
	$query = "Select DISTINCT ImageAddr, Name, Weblink
			  From UserVisit, Product
			  Where user_name = '".$account."'and product_name = Name
			  and time = (select max(time) From UserVisit)
			  and time = '".$mysqltime."';";
			  
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) != 0){
		echo "  <table width='100%' >  
				<tr><th width='15%'></th>
				<th width='20%' align= 'center'><h1>Today</h1></th>
				<th width='60%'></th>
				</table>
				<HR align=center width='80%' color=#987cb9 SIZE=2>
				<table width='100%' height = '200'>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr>
					<td  width='20%'></td>
					<td width='20%'>".
					"<img src=".$row[ImageAddr]." alt=".$row[Name]."width='200' height='150'/>	
					</td>
					<td width='50%'><h3>".
						$row[Name].
					"</h3><br>
					<a href=http://shiyancai215.com/add_record.php?link=".$row[Weblink]." style='color:black'>Go to store</a>
					</td>
				</tr>";
			}
		echo "</table>";
	}

	mysqli_close($conn);
	echo "<br><br>";
	// Last one week
	$conn = new mysqli($servername, $username, $password,$db);
	if ($conn->connect_error) {
		die("Connect Failed: " . $conn->connect_error);
	}
	$sql = 'Select Distinct ImageAddr, Name, Weblink, time'
        . ' From UserVisit as V, Product as P'
        . ' Where V.user_name = \''.$account.'\'and V.product_name = P.Name'
        . ' and time = (select max(time) From UserVisit as U where U.user_name = V.user_name and '
        . ' U.product_name = V.product_name)'
        . ' and time between date_sub(now(),INTERVAL 8 DAY) and date_sub(now(),INTERVAL 2 DAY);';
	
	$result2 = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result2) != 0){
		echo "  <table width='100%' >  
				<tr><th width='15%'></th>
				<th width='20%' align= 'center'><h1>Last week</h1></th>
				<th width='60%'></th>
				</table>
				<HR align=center width='80%' color=#987cb9 SIZE=2>
				<table width='100%' >";
		while($row = mysqli_fetch_array($result2)){
			echo "<tr height = '200'>
					<td  width='20%'></td>
					<td width='20%'>".
					"<img src=".$row[ImageAddr]." alt=".$row[Name]."width='200' height='150'/>	
					</td>
					<td width='50%'><h3>".
						$row[Name].
					"</h3><br>
					<a href=http://shiyancai215.com/add_record.php?link=".$row[Weblink]." style='color:black'>Go to store</a>
					</td>
				</tr>";
			}
		echo "</table>";
	}
	mysqli_close($conn);
	
	echo "<br><br>";
	// Last one Month
	$conn = new mysqli($servername, $username, $password,$db);
	if ($conn->connect_error) {
		die("Connect Failed: " . $conn->connect_error);
	}
	$sql2 = 'Select Distinct ImageAddr, Name, Weblink, time'
        . ' From UserVisit as V, Product as P'
        . ' Where V.user_name = \''.$account.'\'and V.product_name = P.Name'
        . ' and time = (select max(time) From UserVisit as U where U.user_name = V.user_name and '
        . ' U.product_name = V.product_name)'
        . ' and time between date_sub(now(),INTERVAL 32 DAY) and date_sub(now(),INTERVAL 8 DAY);';
	
	$result3 = mysqli_query($conn, $sql2);
	if(mysqli_num_rows($result3) != 0){
		echo "  <table width='100%' >  
				<tr ><th width='15%'></th>
				<th width='20%' align= 'center'><h1>Last month</h1></th>
				<th width='60%'></th>
				</table>
				<HR align=center width='80%' color=#987cb9 SIZE=2>
				<table width='100%' >";
		while($row = mysqli_fetch_array($result3)){
			echo "<tr height = '200'>
					<td  width='20%'></td>
					<td width='20%'>".
					"<img src=".$row[ImageAddr]." alt=".$row[Name]."width='200' height='150'/>	
					</td>
					<td width='50%'><h3>".
						$row[Name].
					"</h3><br>
					<a href=http://shiyancai215.com/add_record.php?link=".$row[Weblink]."  style='color:black'>Go to store</a>
					</td>
				</tr>";
			}
		echo "</table>";
	}
	mysqli_close($conn);
	if(mysqli_num_rows($result3)== 0 and mysqli_num_rows($result2)== 0 and mysqli_num_rows($result)== 0) {
		echo "<table width='100%' >  
				<tr><th width='15%'></th>
				<th width='50%' align= 'center'><h3>You don't have any record.</h3></th>
				<th width='60%'></th>
				</table>";
	}		
	?>
	<br><br><br><br>
	<?php
		if(!isset($bs)){
	
			$conn = new mysqli($servername, $username, $password,$db);
		 
			if ($conn->connect_error) {
				die("Connect Failed: " . $conn->connect_error);
			}
				
			$sql = "SELECT Allow_Track FROM User WHERE user_name='".$account."';";
				
			$result = mysqli_query($conn, $sql);
				
			$row = mysqli_fetch_array($result);
				
			if($row[Allow_Track] == 1){
				$bs = "No tracking";
			}elseif($row[Allow_Track] == 0){
				$bs = "Record my steps";
			}
			mysqli_query($conn, $sql1);
			
			mysqli_close($conn);
		}
	?>
<section>
		<table width='100%' >  
			<tr><td width='15%'></td>
				<td width='50%' >
					<div class="mbr-section-btn text-center"><a href="http://shiyancai215.com/history_form.php?choice=change" class="btn btn-success display-4">Change Tracking State</a></div>
					<div class="mbr-section-btn text-center"><a href="http://shiyancai215.com/history_form.php?choice=delete" class="btn btn-secondary display-4">Clear History</a></div>
				</td>
				<td width='20%'></td>
			</tr>
		</table>		
</section>
	
	<br>
	
	<?php
	if (isset($_GET['alert'])) {
		alert($_GET['alert']);
	}
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	?>
	
	

</body>
</html>










