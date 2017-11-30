<?php

	// Initialize the session
	 require_once 'config.php';
	 session_start();

 	// If session variable is not set it will redirect to login page
  	 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  	 header("location: login.php");
  
   	exit;
	 }

	 $firstname = $_SESSION['firstname'];

 		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat</title>
		<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/inboxStyle.css">
	<link rel="stylesheet" href="css/profileStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<img src="images/header.png" width="1360px">
				</div>
			</div>

			<div class="col-sm-2">
					<hr>
					<hr>
					<a href="index.php"> HOME </a> <br>
					<a href=""> Featured Articles </a><br>
					<a href=""> All Articles </a><br>	
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br>
					<a href="help.php"> Help </a> <br>
					<a href="aboutUs.php"> About Us </a> <br>
					<a href="contactUs.php"> Contact Page </a> <br>					
			</div>

			<div class="col-sm-10">
				<a href="#" style="float: right; margin-right: 5px">Log Out</a><!--Leave page modal-->
				<div class="messages">
				<!--messages goes here-->				
				</div>
				<div>
					<textarea class="form-control" rows="5" id="comment" placeholder="Write something here..." style="width: 1000px; resize: none;"></textarea>
					<button type="button" class="btn btn-default btn-lg" style="float: right; margin-top: -50px; background-color: #36bfe9">
         	 		<span class="glyphicon glyphicon-send"></span> Send 
        			</button>
        		</div>
			</div>
		
	</div>
	
</body>
</html>