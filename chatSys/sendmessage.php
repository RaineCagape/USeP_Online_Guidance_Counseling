<?php

	 require_once '../config.php';
    


	$userId= $message = $userName= $threadId="";

   
	

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            // $threadId = $_SESSION['id'];
        	$userId = $_SESSION['id'];
            $message = $_POST["message"];
        	$userName = $_SESSION['firstname'];
            // $flag = 'new'; 

            if($role=='Student'){

            $threadId =  $_SESSION['threadId'];

           }


        	if(!empty($message)){

        	       $sql = "INSERT INTO chats (threadId,userId,message,chatUsername) VALUES (?,?,?,?)";

        	   if ($stmt = mysqli_prepare($link,$sql)){

            		mysqli_stmt_bind_param($stmt,"iiss",$param_threadId,$param_userId,$param_message,$param_userName);

                    $param_threadId = $threadId;
            		$param_userId = $userId;
            		$param_message = $message;
            		$param_userName = $userName;
                    // $param_flag = $flag;


            		if(mysqli_stmt_execute($stmt)){
                    

                    
                     header("location: chat.php");

                       
                    } 

                    else{
                            echo "Sending went wrong. Please try again later.";
                    }


        	    }

                mysqli_stmt_close($stmt);

                 // mysqli_close($link);
              }
      
    }


 		
?>
