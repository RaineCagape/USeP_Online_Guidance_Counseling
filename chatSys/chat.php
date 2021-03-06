<?php

	// Initialize the session
	 require_once '../config.php';

	 session_start();

 	// If session variable is not set it will redirect to login page
  	 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  	 header("location: login.php");
  
   	exit;
	 }

	 $role = $_SESSION['role'];


	 if($role == "Counselor"){       

      $_SESSION['threadId'] = $_GET['thread']; 
	 $_SESSION['chatType'] = $_GET['type']; 

     }  


     $userId= $message = $userName= $threadId= $chatType="";
	

    if(isset($_POST['send'])){
            
        	$userId = $_SESSION['id'];
            $message = $_POST["message"];
        	$userName = $_SESSION['firstname'];
        	$threadId = $_SESSION['threadId'];
        	$chatType =  $_SESSION['chatType'];
        	$status = "new";


		    if(!empty($message)){

		        $sql = "INSERT INTO chats (threadId,userId,message,chatUsername,chatType,status) VALUES (?,?,?,?,?,?)";

		        if ($stmt = mysqli_prepare($link,$sql)){

		            mysqli_stmt_bind_param($stmt,"iissss",$param_threadId,$param_userId,$param_message,$param_userName,$param_chatType,$param_status);

		            $param_threadId = $threadId;
		            $param_userId = $userId;
		            $param_message = $message;
		            $param_userName = $userName;
		            $param_chatType = $chatType;
		            $param_status = $status;

		            if(mysqli_stmt_execute($stmt)){

		            	
		            	header("location: chat.php?thread=$threadId&type=$chatType");
		            	
		            }


		            else{
		                ?>
		                    <script type="text/javascript">
		                    	alert('Error in Sending message');
		                    </script>
		                <?php
		            }


		         }

		    }


    }
		 	
 		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat</title>
	<link rel="icon" href="../images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="../css/style.css">
 	<link rel="stylesheet" href="../css/chatStyle.css">
	<link rel="stylesheet" href="../css/inboxStyle.css">
	<link rel="stylesheet" href="../css/profileStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	
	</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	<script type="text/javascript">

		
	    function updateChatAJAx(){
        var ajaxRequest;  // The variable that makes Ajax possible!
        ajaxRequest = new XMLHttpRequest();
         var element = document.getElementById('messages');
        // Create a function that will receive data sent from the server
        ajaxRequest.onreadystatechange = function(){
                if(ajaxRequest.readyState == 4){
                        //The response
                    document.getElementById('messages').innerHTML = ajaxRequest.responseText;
                      element.scrollTop = element.scrollHeight - element.clientHeight;
                }

        }

        ajaxRequest.open("GET", "displayMessage.php", true);
        ajaxRequest.send(null);
        
}

	$(document).ready(function(){

		setInterval("updateChatAJAx()",1000);
		showModal();
		
	});

	</script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<img src="../images/header.png" width="1360px">
				</div>
			</div>

			<div class="col-sm-2">
					<hr>
					<hr>
					<a href="../index.php"> HOME </a> <br>
					<a href=""> Featured Articles </a><br>
					<a href=""> All Articles </a><br>	
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br>
					<a href="../help.php"> Help </a> <br>
					<a href="../aboutUs.php"> About Us </a> <br>
					<a href="../contactUs.php"> Contact Page </a> <br>					
			</div>

			<div class="col-sm-10">
				
				 
				<a href="../logout.php" style="float: right; margin-right: 10px">Log Out</a>
				<?php 
			// <label><php echo $_SESSION['threadId']; ></label> 

				if($_SESSION['role']=='Counselor'){
					?>
					<a href="Inbox.php" style="float: right; margin-right: 10px">Inbox</a>
					<?php
				}

	// action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?
				?>

				<!--Leave page modal-->
				<div class="messages" id="messages" style="padding: 20px;">
			
				</div>

	

				<form id="form" method="post" >

					<textarea class="form-control" rows="5" name="message" id="message" placeholder="Write something here..." style="width: 1000px; resize: none;"></textarea>

        			 <span class="glyphicon glyphicon-send" style="float: right; margin-right: 17px;margin-top: -50px;" ><input type="submit" class="btn btn-primary" name="send" value="Send"/></span>
				</form>


        		</div>

			</div>


	
</body>
</html>