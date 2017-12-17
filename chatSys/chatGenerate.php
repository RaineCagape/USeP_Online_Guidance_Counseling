
<?php 
            
     require_once '../config.php';
     session_start();



     $studentName = $message = $threadId= "";

    
     $sql = "SELECT firstname, id FROM users WHERE role = 'Student' ";
    

     if($result = mysqli_query($link,$sql)){


            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result)){

                    $studentName = $row['firstname'];
                    $id = $row['id'];  


                            $sql1 = "SELECT message, threadId, chatUsername FROM chats WHERE threadId = ($id) ORDER BY messageId DESC LIMIT 1";

                                if($result1 = mysqli_query($link,$sql1)){

                                    if(mysqli_num_rows($result1) > 0){

                                        while($row1 = mysqli_fetch_array($result1)){

                                          $message = $row1['message'];
                                          $threadId = $row1['threadId'];
                                          $name=$row1['chatUsername'];
                                          $ifCounselor = $_SESSION['firstname'];

                                          if($ifCounselor == $name){
                                            $chatName = "You";
                                          }
                                          
                                          else{
                                            $chatName = $name;
                                          }

                                              if(!empty($message)){

                                              ?>
                                             
                                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >

                                                      <div class='well well-lg'  >

                                                        <span class='name'><?php echo $studentName ;?></span>                        
                                                        <button type='button' name="read" class='btn btn-default btn-sm' onclick="window.location.href='chat.php?thread=<?php echo $threadId; ?>' " >
                                                        <span class='glyphicon glyphicon-comment'></span> Read
                                                        </button>
                                    <!--  -->           
                                                        </br>
                                                        <?php echo $chatName ?>: <?php echo $message ?>  
                                                            
                                                        <?php

                                            }/////////// empty message
                                                

                                        }///// 2nd while 
                                        mysqli_free_result($result1);

                                  }//// mysqli num rows 
                            }//////////////////// mysqli query

                        ?>
                
                 </div>
                 </form>

                <?php

                } ///while

                mysqli_free_result($result);

            }//// num rows 

            else{

                echo "<p style='text-align: center; font-weight:bold;'>No Messages Yet</p>";
            }

                mysqli_close($link);
        }////query
    





?>