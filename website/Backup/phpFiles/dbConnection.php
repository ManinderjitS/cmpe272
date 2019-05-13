<?php
		$servername = "caisy199437731.ipagemysql.com";
    $username = "project";
    $password = "123456abcd.";
    $database = "cmpe272";
    //print("Here i m ");
    //Create connection
    $conn = new mysqli($servername, $username, $password, $database);

	echo "----------->".$firstName."<br>";

    //Check connection
    if ($conn->connect_error){
        die("Connection failed. " . $conn->connect_error);
    }
