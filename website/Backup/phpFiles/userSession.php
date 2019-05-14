<?php
  session_start();

  //prevent user from accessing resources (e.g, add card) if not logged in
  function userLoggedIn() {
	//echo "<h3>User not logged in function.</h3><br>";
	$result = true;  	
	if(!isset($_SESSION['loggedin']))
		$result = false;		
    return $result;
  }


  //prevent user from registering while logged in
  /*function userAlreadyRegistered() {
  	if(isset($_SESSION['loggedin']))
      return true;//header("Location: addCard.php");
    return false;
  }*/
?>
