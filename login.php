<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                   
				   if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
							session_start();

                            $_SESSION['username'] = $username;
                            header("location: index.php");
                        } 	else{
                            // Display an error message if password is not valid
						$password_err = 'Invalid Password.';
                        }
                    }
                } 	else{
                    // Display an error message if username doesn't exist
					$username_err = 'Username not Found.';
					}
            }		 else{
				echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="icon" href="images/usep.png">
	
	<!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link rel="stylesheet" href="css/header.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
        $(document).ready(function(){
   	   	$('[data-toggle="popover"]').popover();});
    </script>

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

		<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post">

			<div class="form-group">
			<img src="images/usep.png" class="logo"><br>
			<a href="register.html" style="color: blue; float: right; margin-top: 75px; margin-bottom: 5px;">Register</a>

			<input type="text" name="username" placeholder="Username" style="width: 205px" data-toggle="popover" data-placement="left" data-content="<?php echo $username_err;?>" ><br><br>

			<input type="password"  name="password" placeholder="Password" style="width: 205px" data-toggle="popover" data-placement="left" data-content="<?php echo $password_err;?>" ><br> <br>
		
			<input type="submit" class="button" value="Log in">
			
		</form>

		

		<div class="container1">
			<button type="button" class="chatbutt" >Chat Now</button>
		</div>

	

	</div>
	</div>

</body>
</html>