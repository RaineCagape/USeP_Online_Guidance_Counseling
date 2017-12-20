<?php
	require_once '../config.php';
	session_start();

	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  	 header("location: ../login.php");
  
   	exit;
	 }

	$Title= $blog_content= $firstname= $lastname= $author= $featured= "";
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){

			$Title = $_POST["Title"];
			$blog_content = $_POST["blog_content"];
			$firstname = $_SESSION["firstname"];
			$lastname = $_SESSION["lastname"];
			$author = $firstname." ".$lastname;
			

			if(empty($_POST["featured"])){
				$featured = 0;
			}
			else{
				$featured = $_POST["featured"];
			}

			$sql= "INSERT INTO blog (Title, blog_content, author, featured) VALUES (?,?,?,?)";


			if($stmt= mysqli_prepare($link, $sql)){

				mysqli_stmt_bind_param($stmt, "ssss", $param_Title, $param_blog_content,$param_author, $param_featured);

				$param_Title = $Title;
				$param_blog_content = $blog_content;
				$param_author= $author;
				$param_featured= $featured;

		if(mysqli_stmt_execute($stmt)){

			header("location: ../index.php");
			echo "YEEy" ;

		}

		 else{
			echo "Ayy na wrong, sorrs" ;
		}	
	}

	mysqli_stmt_close($stmt);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Write article</title>
	<link rel="icon" href="../images/usep.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/articleStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
					<a href="../featuredArticles.php"> Featured Articles </a><br>
					<a href="../allArticles.php"> All Articles </a><br>	
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

			<div class="col-sm-9">
				<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return alertFunction()">

				<h1>Title: <input type="text" id="Title" name="Title" class="article_title" value="<?php echo $Title; ?>" required/></h1><br>
				
				<div class="write_text" >
					<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
					<script type="text/javascript">
						//<![CDATA[
       					 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  						//]]>
  					</script>
					 <textarea name="blog_content" id="blog_content" class="postStyle" value="<?php echo $blog_content; ?>" >
       					
					</textarea>
				</div>
				<input type="radio" id="featured" name="featured" value="1" />Add to Featured
				<input type="submit" value="submit" name="submit" class="button" style="margin-left: 700px" /> 
				

				</form>

			</div>

			<div class="col-sm-1">
				
				<input type="button" value="Inbox" class="button" onclick="window.location.href='../Inbox.php'"\>
				<input type="button" value="Logout" class="button" onclick="window.location.href='../logout.php'"\>
			</div>
			
		</div>
	</div>
	
</body>
</html>