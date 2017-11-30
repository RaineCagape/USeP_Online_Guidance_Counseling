<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = $firstname  = $lastname = $address = $email= $role="";
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
        $sql = "SELECT username,firstname,lastname,address,email,role,password FROM users WHERE username = ?";

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
                    mysqli_stmt_bind_result($stmt, $username, $firstname,$lastname,$address,$email,$role,$hashed_password);
                   
				   if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
							session_start();

                            $_SESSION['username'] = $username;
                            $_SESSION['firstname'] = $firstname; 
                            $_SESSION['lastname'] = $lastname;
                            $_SESSION['address'] = $address;
                            $_SESSION['email'] = $email;
                            $_SESSION['role'] = $role;

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
	<title>Log in</title>
	<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

	  <script type="text/javascript">
        $(document).ready(function(){
   	   	$('[data-toggle="popover"]').popover('show');});
    </script>
    
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

			<div class="col-sm-7">
					<!--contenttssss-->
			</div>

			<div class="col-sm-3">

				<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post"> 

				<div class="form-group">

					<img src="images/usep.png" class="logo"><br><br>
					<!-- <a href="register.php" style="color: blue; float: right; margin-top: 5px; margin-right: 10px">Register</a> -->

					<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" style="height: 35px; width: 270px; background-color: #CCCCCC" data-toggle="popover" data-placement="left" data-content="<?php echo $username_err;?>" ><br><br>

					<input type="password"  name="password" value="<?php echo $password; ?>" placeholder="Password" style="height:35px;width: 270px; background-color: #CCCCCC" data-toggle="popover" data-placement="left" data-content="<?php echo $password_err;?>" ><br><br>

					<input type="submit" class="button" value="Log in" style="float: right">
				</div>	

				</form>

				<div class="chat">
					<button type="button" class="chatbutt" data-toggle="modal" data-target="#alertModal">Chat Now</button>
				</div>

			</div>
            
				 <div class="modal fade" id="alertModal" role="dialog">
    				<div class="modal-dialog">
    
      					<div class="modal-content">
        					<div class="modal-header">
        						<h1 class="modal-title">LOG-IN FIRST!</h1>
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
          					</div>
        
        					<div class="modal-body">
          						You need to log-in in your account, or sign-up if you don't have one.<br><br><br><br><br>
          						<button type="button" class="loginBtn" onclick="window.location.href='login.php'">Log-In</button><br><br>
          						<button type="button" class="registerBtn" onclick="window.location.href='register.php'" >Register</button>
          					</div>
    				</div>
  				</div>
	</div>
</div>
</div>
</body>
</html>