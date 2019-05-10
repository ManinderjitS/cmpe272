<?php 
	/*$server = "caisy199437731.ipagemysql.com";
	$database = "cmpe272";
	$username = "project";
	$password = "123456abcd";
*/
	extract($_POST);
	$servername = "localhost";
	$username = "user1";
	$password = "password";
	$database = "cmpe272";

	$conn = new mysqli($servername, $username, $password, $database);
	//$firstName, $lastName, $email, $phone, $address;
