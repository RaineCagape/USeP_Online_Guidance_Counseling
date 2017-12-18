<?php

	// Initialize the session
	 require_once 'config.php';
	 session_start();
 		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Featured Articles</title>
	<link rel="icon" href="images/usep.png">
	<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pagesStyle.css">
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
				
				<div class="col-sm-10" style="overflow-y: scroll;">
					<h1 style="text-align: center; font-family: Century Gothic">FEATURED ARTICLES</h1>
					<?php
					include 'article/displayFeatured.php'
					?>
				</div>
			
		</div>
	</div>

</body>
</html>