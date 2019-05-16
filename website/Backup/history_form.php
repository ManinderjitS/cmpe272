<?php
  if (isset($_GET['choice'])) {
	  
	  header('Location: http://shiyancai215.com/history.php?alert='.runMyFunction());
	  exit();
  }
 ?>

<html>
<body>
<?php
function runMyFunction():string {
	$account = "admin";
	$servername = "caisy199437731.ipagemysql.com";
	$username = "project";
	$password = "123456abcd";
	$db = "cmpe272";
	
	if($_GET['choice'] == "delete"){
		$conn = new mysqli($servername, $username, $password,$db);
	 
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		
		$sql = "DELETE FROM UserVisit Where user_name='".$account."';";
		
		mysqli_query($conn, $sql);
		
		mysqli_close($conn);
		$message = "All record clear.";
	} 
	elseif($_GET['choice'] == "change"){
		$conn = new mysqli($servername, $username, $password,$db);
	 
		if ($conn->connect_error) {
			die("Connect Failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT Allow_Track FROM User WHERE user_name='".$account."';";
		
		$result = mysqli_query($conn, $sql);
		
		$row = mysqli_fetch_array($result);
		
		if($row[Allow_Track] == 1){
			$sql1 = "UPDATE User SET Allow_Track = 0 Where user_name='".$account."';";
			$bs = "Record my steps";
			$message = "No tracking any more.";
			// alert("No tracking any more");
		}elseif($row[Allow_Track] == 0){
			$sql1 = "UPDATE User SET Allow_Track = 1 Where user_name='".$account."';";
			$bs = "No tracking";
			$message = "your visit will be recorded.";
			// alert("your visit will be recorded.");
		}
		mysqli_query($conn, $sql1);
		
		mysqli_close($conn);
	}
	return $message;
}
	?>
</body></html>