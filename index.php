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
	<title>Index</title>
	<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
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
					<a href=""> Help </a> <br>
					<a href="aboutUs.php"> About Us </a> <br>
					<a href="contactPage.php"> Contact Page </a> <br>				
			</div>

			<div class="col-sm-7">
					<!--contenttssss-->
			</div>

			<div class="col-sm-3">
				


			<div class="form-group">
			
			<label style="font-size: 22px">Welcome back, <b> <?php echo $firstname; ?></b> !</label>

			<div class="list">
				<br>
 			<span class="glyphicon glyphicon-user" style="font-size: 22px"></span><a href="Profile.php" style="font-size: 21px">  My Profile</a><br>

 			<span class="glyphicon glyphicon-envelope" style="font-size: 22px"></span> <a href="Inbox.php" style="font-size: 21px"> Inbox</a>
  			</div>
  			
			<button type="button" style="width: 270px; height: 40px; background-color: #36bfe9; color: white; margin-top: 96px; border-radius: 10%" onclick="window.location.href='logout.php'">Log Out</button>
			</div>

			<div class="chat">
					<button type="button" class="chatbutt" data-toggle="modal" data-target="#alertModal">Chat Now</button>
			</div>	

			</div>
			</div>
	
			
		</div>
	</div>
</body>
</html>