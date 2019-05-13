<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Generator Description">
  
  <title>Recent Visit</title>
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
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-k">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://shiyancai215.com">
                         <img src="assets/images/logo2.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="http://shiyancai215.com">6969</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown open">
                    <a class="nav-link link dropdown-toggle text-white display-4" href="index.html" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-globe mbr-iconfont mbr-iconfont-btn"></span>Navigate</a><div class="dropdown-menu"><a class="dropdown-item text-white display-4" href="index.html"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a><a class="dropdown-item text-white display-4" href="CreateUser.html" aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Create User</a><a class="dropdown-item text-white display-4" href="Recent.html" aria-expanded="false"><span class="mbri-clock mbr-iconfont mbr-iconfont-btn"></span>History</a><a class="text-white dropdown-item display-4" href="products.html" aria-expanded="false" target="_blank"><span class="mbri-rocket mbr-iconfont mbr-iconfont-btn"></span>Products</a><a class="text-white dropdown-item display-4" href="TopRated.html" aria-expanded="false"><span class="mbri-star mbr-iconfont mbr-iconfont-btn"></span>Top Rated</a></div>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="page3.html"><span class="mbri-hearth mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Log In</a></div>
        </div>
    </nav>
</section>


</table>
   <section class="engine"><a href="https://mobirise.info/s">bootstrap theme</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script> 
  
  <br><br><br><br>
  
   <?php
	$account = "admin";
	$servername = "caisy199437731.ipagemysql.com";
	$username = "project";
	$password = "123456abcd";
	$db = "cmpe272";
	
	 
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
					<a href=".$row[Weblink]." style='color:black'>Go to store</a>
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
					<a href=".$row[Weblink]." style='color:black'>Go to store</a>
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
					<a href=".$row[Weblink]."  style='color:black'>Go to store</a>
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
	<section>
		<table width='100%' >  
			<tr><td width='15%'></td>
				<td width='50%' >
					<form method = "post" action = "history.php">	
					<input type = "submit" value = "Change Tracking State" name = "change"/> 
					<span style="display:inline-block; width: 50;"></span>
					<input type = "submit" value = "Delete All History" name = "delete"/> 
					</form>	
				</td>
				<td width='20%'></td>
			</tr>
		</table>		
	</section>
	
	<?php
	extract($_POST);
	if(isset($delete)){
		$conn = new mysqli($servername, $username, $password,$db);
	 
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		
		$sql = "DELETE FROM UserVisit Where user_name='".$account."';";
		
		mysqli_query($conn, $sql);
		
		mysqli_close($conn);
	} 
	elseif(isset($change)){
		$conn = new mysqli($servername, $username, $password,$db);
	 
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT Allow_Track FROM User WHERE user_name='".$account."';";
		
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_array($result);
		
		if($row[Allow_Track] == 1){
			$sql1 = "UPDATE User SET Allow_Track = 0 Where user_name='".$account."';";
		}elseif($row[Allow_Track] == 0){
			$sql1 = "UPDATE User SET Allow_Track = 1 Where user_name='".$account."';";
		}
		mysqli_query($conn, $sql1);
		
		mysqli_close($conn);
	}
	?>
	
	<br>
</body>
</html>










