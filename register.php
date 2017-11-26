<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username= $password= $fname= $lname= $address= $email="";
$username_err = $password_err = $fname_err= $lname_err= $address_err= $email_err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";  

    }

    else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }


    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    //other data inputs to store in the database
    if(empty(trim($_POST["fname"]))){
        $fname_err ='Please enter your firstname.'; 
    } else{
    	$fname= trim($_POST["fname"]);
    }

    if(empty(trim($_POST["lname"]))){
        $lname_err ='Please enter your lastname.'; 
    } else{
    	$lname= trim($_POST["lname"]);
    }

    if(empty(trim($_POST["address"]))){
        $address_err ='Please enter your address.';
    } else{
    	$address= trim($_POST["address"]);
    }

    if(empty(trim($_POST["email"]))){
        $email_err ='Please enter your email.'; 
    }else{
    	$email= trim($_POST["email"]);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($fname_err) && empty($lname_err) && empty($address_err) && empty($email_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, firstname, lastname, address, email) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'ssssss', $param_username, $param_password, $param_fname, $param_lname, $param_address, $param_email);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $fname;
            $param_lname = $lname;
            $param_address = $address;
            $param_email = $email;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                session_start();

                $_SESSION['username'] = $username;
                $_SESSION['firstname'] = $fname; 
                $_SESSION['lastname'] = $lname;
              	$_SESSION['address'] = $address;
                $_SESSION['email'] = $email;
                
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
	<title>Register</title>
	<link rel="icon" href="images/usep.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/regStyle.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

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

			<div class="col-sm-12">
					<div class="registergreet">
						Welcome to UGTO E-Counseling
					</div>
					<div class="greetsub">
						We would like to be there for you. Register now.
					</div>

					<div class="regForm">
						 <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post" >

							<div class="fname"><input type="text" name="fname" style="width: 350px; background-color: #CCCCCC" value="<?php echo $fname; ?>" placeholder="First Name" data-toggle="popover" data-placement="left" data-content="<?php echo $fname_err;?>"> </div>

							<div class="lname"><input type="text" name="lname" style="width: 350px; background-color: #CCCCCC" value="<?php echo $lname; ?>" placeholder="Last Name" data-toggle="popover" data-placement="left" data-content="<?php echo $lname_err;?>"  ></div>

							<div class="add"><input type="text" name="address" style="width: 350px; background-color: #CCCCCC" value="<?php echo $address; ?>" placeholder="Address" data-toggle="popover" data-placement="left" data-content="<?php echo $address_err;?>"  ></div>

							<div class="username"><input type="text" name="username" style="width: 350px; background-color: #CCCCCC" value="<?php echo $username; ?>" placeholder="Username" data-toggle="popover" data-placement="left" data-content="<?php echo $username_err;?>"  ></div>

							<div class="password"><input type="text" name="password" style="width: 350px; background-color: #CCCCCC" value="<?php echo $password; ?>" placeholder="Password" data-toggle="popover" data-placement="left" data-content="<?php echo $password_err;?>"  ></div>

							<div class="email"><input type="text" name="email" style="width: 350px; background-color: #CCCCCC" value="<?php echo $email; ?>" placeholder="E-mail"
							data-toggle="popover" data-placement="left" data-content="<?php echo $email_err;?>"  ></div>

							<br><br>
							<input type="button" class="cancelbutt" value="Cancel" onclick="window.location.href='index.php'"/>
							<input type="submit" class="regbutt" value="Sign up"/>

							</form>
					</div>				
			</div>
		</div>
	</div>

</body>
</html>