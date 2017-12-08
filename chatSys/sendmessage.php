<?php

	// Initialize the session
	 require_once '../config.php';

	 $userId= $message = $userName= "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

        	$userId = $_SESSION['id'];
        	$userName = $_SESSION['firstname'];
        	$message = $_POST["message"];


        	if(!empty($message)){

        	$sql = "INSERT INTO chats(userId,message,chatUsername) VALUES (?,?,?)";

        	if ($stmt = mysqli_prepare($link,$sql)){

        		mysqli_stmt_bind_param($stmt,"iss",$param_userId,$param_message,$param_userName);

        		$param_userId = $userId;
        		$param_message = $message;
        		$param_userName = $userName;	

        		if(mysqli_stmt_execute($stmt)){
                        // session_start();

                     header("location: chat.php");
                       
                    } 

        	}

          mysqli_stmt_close($stmt);
          // mysqli_close($link);
      }
      
    }


 		
?>
