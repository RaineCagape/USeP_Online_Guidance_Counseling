<?php

    // Initialize the session
     require_once '../config.php';
     session_start();

    // If session variable is not set it will redirect to login page
     if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
     header("location: login.php");
  
    exit;
     }

     $role = $_SESSION['role'];

     if($role == "Student"){
        header("location: chat.php");
     }



        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inbox</title>

    
    <link rel="icon" href="../images/usep.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inboxStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
              
                 <label style="font-size: 50px;">Inbox</label>
              
               <div class="container">

                    <div class="well well-lg" >
                     <b style="color:skyblue;">*New Message</b><br>
                         <span class="name">Cosette</span>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-trash"></span> Delete
                         </button>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-comment"></span> Read
                         </button>
                         </br>
                            Cosette: Okay maam thanks a lot!
                     </div>

                     <div class="well well-lg" style="background-color: gray;" >
                         <span class="name">Anonymous Student 1</span>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-trash"></span> Delete
                         </button>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-comment"></span> Read
                         </button>
                         </br>
                            Student 1: hsvchjasthqwvdqwhv jchdvchvdhcvdshcvmdshcvmhsdvhvsdchvsmcvhmsvhvhmsdjfj bvkjdfvkdscvsdkcvvcsdcvjdcvvvvvvvvvvdnnnn nnnnnncbhdvsvcjjbedcjvewkghcgcxhgschgxcsxhgcsghcxhg scvgxhvsxgvsxvg
                    
                     </div>

                     <div class="well well-lg" >
                         <span class="name">Enjolras</span>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-trash"></span> Delete
                         </button>
                         <button type="button" class="btn btn-default btn-sm" >
                         <span class="glyphicon glyphicon-comment"></span> Read
                         </button>
                         </br>
                            You: Revolution?
                    
                     </div>




                </div>     

             </div>




        </div>

    </div>
    
</body>
</html>