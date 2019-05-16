<?php

	require_once('dbConnection.php');
	require_once('userSession.php');
	extract($_POST);

	$query = 'SELECT * from User WHERE user_name=\""$name"\" and passcode=\""$password"\"';

	if($result = $conn->query($query)){
		if($row = $result->fetch_assoc()){
			//echo "<h3>Logged in as".$row['first_name']." ".$row['last_name']."</h1><br>";
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['username'] = $row['user_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['picture'] = "default email";
			header("Location: ../index.php?login=success");
		}
	}else{
		echo "<h3>Couldn't find a user with the '$name' username. </h3><br>";
		header("Location: ../index.html?login=failed");
	}



	$conn->close();
?>
