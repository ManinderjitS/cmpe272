<?php
	$account = "admin";
	$servername = "caisy199437731.ipagemysql.com";
	$usernameDB = "project";
	$passwordDB = "123456abcd";
	$db = "cmpe272";

	date_default_timezone_set('America/Los_Angeles');
	$mysqltime = date ("Y-m-d");
	$conn = new mysqli($servername, $usernameDB, $passwordDB,$db);
	if ($conn->connect_error) {
		die("Connect Failed: " . $conn->connect_error);
	}
?>
