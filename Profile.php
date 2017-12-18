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
	 $lastname =$_SESSION['lastname'];
	 $address =$_SESSION['address'];
	 $email=$_SESSION['email'];
	 $role=$_SESSION['role'];
 		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
		<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
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
					<a href="featuredArticles.php"> Featured Articles </a><br>
					<a href="allArticles.php"> All Articles </a><br>	
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
				<a href="logout.php" style="color: black; float: right; margin-right: 10px;">Logout</a><br>
				
				<?php
					if($role == 'Counselor'){
						echo "<a href = 'chatSys/Inbox.php'><input type='button' value='Go to Inbox' style='float: right; margin-top: 5px; height: 50px; border-radius: 10%'></a>";
					}
					if($role == 'Student'){
						echo "<a href = 'chatSys/Inbox.php'><input type='button' value='Go to Chatbox' style='float: right; margin-top: 5px; height: 50px; border-radius: 10%'></a>";
					}
				?>


				<div class="info">
					<span class="glyphicon glyphicon-user" style="font-size: 200px"></span><br>
					<label style="font-size: 30px"><!--ngalan--><?php echo $firstname;?> <?php echo $lastname; ?></label><br><br>
					<!-- <label>Country:</label><br> -->
					<label >Address: </label> <?php echo $address; ?><br>
					<label>Role: </label> <?php echo $role; ?><br>
					<label>E-mail: </label> <?php echo $email; ?>

				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>