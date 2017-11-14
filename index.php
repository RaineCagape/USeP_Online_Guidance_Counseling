<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="icon" href="images/usep.png">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/home.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container-fluid">
	
		<div class="page-header"> 
		<img src="images/header.png">
		</div>

		<div class="col-xs-2">
		<hr class="line">
		<hr class="line">
		<p class="upper">
			<a href=""> HOME </a> <br>
			<a href=""> Featured Articles </a> <br>
			<a href=""> All Articles </a> <br>
		</p>
		<p class="lower">
			<a href=""> Help </a> <br>
			<a href=""> About Us </a> <br>
			<a href=""> Contact Page </a> <br>
		</p>
		</div>

		<div class="col-md-7">
	
			
		</div>

		
		<div class="col-md-2">


			<div class="panel-body">
			
			<label>Welcome back, <b> reyna<!--<?php echo $_SESSION['username']; ?>--></b> !</label>

			<div class="list">
 			<span class="glyphicon glyphicon-user"></span><a href="#" >  My Profile</a><br>
 			<span class="glyphicon glyphicon-envelope"></span> <a href="#" >  Inbox</a>
  			</div>
  			
			<button type="button" class="btn <?php $_SESSION = array();  session_destroy();?>" onclick="window.location.href='login.php'">Log Out</button>
			</div>

			<div class="container1">
			<button type="button" class="chatbutt" >Chat Now</button>
			</div>

		</div>

		</div>



</body>
</html>