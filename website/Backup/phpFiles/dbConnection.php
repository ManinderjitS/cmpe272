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
?>
