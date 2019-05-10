<?php 
	/*$server = "caisy199437731.ipagemysql.com";
	$database = "cmpe272";
	$username = "project";
	$password = "123456abcd";
	*/
	extract($_POST);
	$servername = "localhost";
	$username = "user1";
	$password_db = "password";
	$database = "cmpe272";

	$conn = new mysqli($servername, $username, $password_db, $database);
	//$firstName, $lastName, $email, $phone, $address;
	
	$o_auth = 0;

	$sql = "INSERT INTO users (first_name, last_name, email, address, home_phone, password, o_auth) VALUES ('$firstName', '$lastName', '$email', '$address', '$phone', '$password', '$o_auth')";

	echo "<br>".$sql."<br>";

	if($conn->query($sql) === TRUE){
		echo "User successfully added.";
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	$conn->close();
	
