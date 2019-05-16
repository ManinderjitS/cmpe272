<?php
  session_start();

  //prevent user from accessing resources (e.g, add card) if not logged in
  function userLoggedIn() {
	$result = true;  	
	if(!isset($_SESSION['loggedin']))
		$result = false;		
    return $result;
  }
?>
