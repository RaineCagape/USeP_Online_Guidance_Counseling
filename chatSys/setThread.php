<?php

   // start_session();

   $role = $_SESSION['role'];

   $cookie_name="threadId";
   $cookie_value =""; 

  if($role == "Counselor"){
  
 	$cookie_value=$_GET["thread"];
 	setcookie($cookie_name,$cookie_value);
 	header("location: chat.php");

 	}

 	elseif ($role == "Student") {

    $cookie_value=$_SESSION['id'];
    setcookie($cookie_name,$cookie_value);
    header("location: chat.php");

 	}
        
     


?>