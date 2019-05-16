<?php
	require_once('dbConnection.php');
	require_once('userSession.php');

	//All of these paths are relative to sso_signup.php
	$indexFilePath = "../index.php";
	$createUserPath = "../CreateUser.php";
	$loginPath = "../Login.php";

	if(userLoggedIn()){
		header("Location: ".$indexFilePath);
	}

	extract($_POST);

	$checkUserNameInDB = "SELECT * from User WHERE user_name=\"".$userName."\"";
	$checkEmailInDB = "SELECT * from User WHERE email=\"".$email."\"";

	if($result = $conn->query($checkUserNameInDB)){
		if($result->num_rows > 0){
			$_SESSION['reg_success'] = FALSE;
			$_SESSION['reg_reason'] = "Username '$userName' is already taken.";
			echo "User taken";
			header("Location: ".$createUserPath);
			die();
		}
	}

	if($result = $conn->query($checkEmailInDB)){
		if($result->num_rows > 0){
			$_SESSION['reg_success'] = FALSE;
			$_SESSION['reg_reason'] = "Email '$email' is already being used.";
			header("Location: ".$createUserPath);
			die();
		}
	}

	$sql = "INSERT INTO User (user_name, first_name, last_name, email, address, phone, passcode) VALUES ('$userName', '$firstName', '$lastName', '$email', '$address', '$phone', '$password')";

	if($conn->query($sql) === TRUE){
		$_SESSION['reg_success'] = TRUE;
		header("Location: ".$loginPath);
	}
	else {
		$_SESSION['reg_success'] = FALSE;
		$_SESSION['reg_reason'] = "Couldn't insert into table because: ".$conn->connect_error;
		header("Location: ".$createUserPath);
	}


	$conn->close();
?>
