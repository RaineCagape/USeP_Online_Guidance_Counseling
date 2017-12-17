<?php 
			
	require_once '../config.php';
	session_start();

	$userId = $_SESSION['id'];
	$role = $_SESSION['role'];
	$threadId = $_SESSION['threadId'];
	// $chatType = $_SESSION['chatType'];
	

	

	$sql = "SELECT message,chatUsername,userId FROM chats WHERE threadId = ($threadId) ORDER BY messageId ASC";

		
		if($result = mysqli_query($link,$sql)){

			if(mysqli_num_rows($result) > 0){

				while($row = mysqli_fetch_array($result)){

					$idChat = $row['userId'];


					/////////////////////////////////			
							if($userId==$idChat){

								echo "<div class='sendText'>You:</br>".$row['message']."</div><br>";

							}

							else{

								echo "<div class='recieveText'>".$row['chatUsername'].":</br>".$row['message']."</div><br>";

							}

						
						

				}
							
							mysqli_free_result($result);

			}


		else{

				echo "<label>Start Convo</label>";
			}
                             					
					mysqli_close($link);
		}

?>