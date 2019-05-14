<?php
	/*$server = "caisy199437731.ipagemysql.com";
	$database = "cmpe272";
	$username = "project";
	$password = "123456abcd";
	*/
	echo "<h3>I m here</h3><br>";
	require_once('dbConnection.php');
	require_once('userSession.php');

	echo "<h3>I m in the sso_signup.php</h3><br>";
	if(userLoggedIn()){
		echo "<h3>You are already logged in as ".$_SESSION['username']."</h3> <br>";
		header("Location: ../index.html");
	}

	echo "<h3>User not logged in so, signup</h3><br>";

	extract($_POST);
	// $servername = "localhost";
	// $username = "user1";
	// $password_db = "password";
	// $database = "cmpe272";
	//
	// $conn = new mysqli($servername, $username, $password_db, $database);
	//$firstName, $lastName, $email, $phone, $address;

	$o_auth = 0;


	$sql = "INSERT INTO User (user_name, first_name, last_name, email, address, phone, passcode) VALUES ('$userName', '$firstName', '$lastName', '$email', '$address', '$phone', '$password')";

	echo "<br>".$sql."<br>";

	if($conn->query($sql) === TRUE){
		echo "<h3>Query was successfull.</h3><br>";
		echo "User successfully added.";
	}
	else {
		echo "Error: ".$sql ."<br>".$conn->error;
	}


	$conn->close();
