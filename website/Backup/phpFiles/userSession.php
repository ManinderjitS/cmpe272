<?php
  session_start();

  //prevent user from accessing resources (e.g, add card) if not logged in
  function userNotLoggedIn() {
  	if(!isset($_SESSION['loggedin']))
      return true;
    return false;
  }

  //prevent user from registering while logged in
  function userAlreadyRegistered() {
  	if(isset($_SESSION['loggedin']))
      return true;//header("Location: addCard.php");
    return false;
  }
?>
