<?php

	// Initialize the session
	 require_once '../config.php';
	 session_start();

 	// If session variable is not set it will redirect to login page
  	 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  	 header("location: ../login.php");
  
   	exit;
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script type="text/javascript">

	    function updateChatAJAx(){
        var ajaxRequest;  // The variable that makes Ajax possible!
        ajaxRequest = new XMLHttpRequest();
        // Create a function that will receive data sent from the server
        ajaxRequest.onreadystatechange = function(){
                if(ajaxRequest.readyState == 4){
                        //The response
                        document.getElementById('messages').innerHTML = ajaxRequest.responseText;
                }
        }

        ajaxRequest.open("GET", "displayMessage.php", true);
        ajaxRequest.send(null);
      
}

	$(document).ready(function(){

		setTimeout("updateChatAJAx()",1000);
		
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
				<b>Counselor</b>
				<a href="../logout.php" style="float: right; margin-right: 5px">Log Out</a><!--Leave page modal style="padding:20px;" -->

				<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); include'sendmessage.php'; ?>" id="form" method="post" >

				<div class="messages" id="messages">
				
				</div>

					<textarea class="form-control" rows="5" name="message" id="message" placeholder="Write something here..." style="width: 1000px; resize: none;"></textarea>

        			 <span class="glyphicon glyphicon-send" style="float: right; margin-right: 17px;margin-top: -50px;" ><input type="submit" class="btn btn-primary" name="send" value="Send"/></span>
				</form>


        		</div>

			</div>
		
	</div>
	
</body>
</html>