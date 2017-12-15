
<?php 
            
     require_once '../config.php';

     $studentName = $message = $threadId= "";


     $sql="SELECT chats.message, users.firstname, chats.userId, chats.threadId, users.id, users.role ";
     $sql .= "FROM chats  ";
     $sql .= "JOIN users ON chats.userId = users.id ";
     $sql .= "WHERE users.role = 'Student'";
     $sql .= "ORDER BY chats.messageId DESC ";
  

     if($result = mysqli_query($link,$sql)){


            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result)){

                    $studentName = $row['firstname'];
                    $message = $row['message'];
                    $id = $row['id'];  
                    $threadId = $row['threadId'];

                
                ?>
               
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >

                  <div class='well well-lg'  >
                        <span class='name'><?php echo $studentName ;?></span> 

                        
                         <button type='button' name="read" class='btn btn-default btn-sm' onclick="window.location.href='chat.php?thread=<?php echo $threadId; ?>' " >
                         <span class='glyphicon glyphicon-comment'></span> Read
                         </button>

<!--  -->
                        
                        </br>
                            <?php echo $message ?>  
                    
                     </div>
                 </form>

                <?php

                }

                mysqli_free_result($result);

            }

            else{

                echo "<p style='text-align: center; font-weight:bold;'>No Messages Yet</p>";
            }

                mysqli_close($link);
        }
    





?>