<?php
	/*$server = "caisy199437731.ipagemysql.com";
	$database = "cmpe272";
	$username = "project";
	$password = "123456abcd";
*/
	require_once('dbConnection.php');
	echo "<h1>I m here</h1><br>";
	extract($_POST);
	// $servername = "localhost";
	// $username = "user1";
	// $password = "password";
	// $database = "cmpe272";
	//
	$query = "SELECT * from User WHERE username=".$name." passcode=".$password;

	if($result = $conn->query($query)){
		if($row = $result->fetch_assoc()){
			echo "<h3>Logged in as".$row['first_name']." ".$row['last_name']."</h1><br>";
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['username'] = $row['username'];
			header("Location: ../index.php?login=success");
		}
	}else{
		echo "<h3>Couldn't find a user with the $name </h3><br>";
		header("Location: ../index.html?login=failed");
	}
	// $conn = new mysqli($servername, $username, $password, $database);
	//$firstName, $lastName, $email, $phone, $address;
	$conn->close();
?>
