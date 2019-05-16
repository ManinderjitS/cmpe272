<?php
  if (isset($_GET['link'])) {
	  runMyFunction();
	  header('Location:marketproduct.php?link='.$_GET['link']);
	  exit();
  }
 ?>

<html>
<body>
<?php
	
	function runMyFunction() {
		$account = "admin";
		$servername = "caisy199437731.ipagemysql.com";
		$username = "project";
		$password = "123456abcd";
		$db = "cmpe272";
	 
		date_default_timezone_set('America/Los_Angeles'); 
		
		$conn = new mysqli($servername, $username, $password,$db);
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		$sql = "SELECT Allow_Track FROM User Where user_name = '".$account."';";
		$result = mysqli_query($conn, $sql);
		$flag = mysqli_fetch_array($result);		
		
		$sql = "SELECT Name FROM Product Where Weblink = '".$_GET['link']."';";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_array($result);
		
		if($flag['Allow_Track']){
			$mysqltime = date ("Y-m-d");
			$sql = 'INSERT INTO `UserVisit` (`index`, `user_name`, `product_name`, `time`)
			VALUES (NULL, \''.$account.'\', \''.$name['Name'].'\', \''.$mysqltime.'\');';
			// $sql = "INSERT INTO UserVisit (index, user_name, product_name, time)
			// VALUES (NULL, '".$account."', '".$name['Name']."', '".$mysqltime."');";
			mysqli_query($conn, $sql);
		}	
  }

?>


</body></html>