<?php 
			
	require_once '../config.php';
	session_start();

	$userId = $_SESSION['id'];
	$role = $_SESSION['role'];
	$threadId = $_SESSION['threadId'];
	// $chatType = $_SESSION['chatType'];
	

	

	$sql = "SELECT message,chatUsername,userId,chatType FROM chats WHERE threadId = ($threadId) ORDER BY messageId ASC";

		
		if($result = mysqli_query($link,$sql)){

			if(mysqli_num_rows($result) > 0){

				while($row = mysqli_fetch_array($result)){


					$chatType = $row['chatType'];
					$idChat = $row['userId'];
					// $messageStat = $row['status'];

						if($chatType=="reg"){

					/////////////////////////////////			
							if($userId==$idChat){

								echo "<div class='sendText'>You:</br>".$row['message']."</div><br>";

							}

							else{

								echo "<div class='recieveText'>".$row['chatUsername'].":</br>".$row['message']."</div><br>";

							}

						
						} ////////////////	

						elseif ($chatType=="anon") {

							if($userId==$idChat){

								echo "<div class='sendTextAnon'>".$row['message']."</div><br>";

							}

							else{

								echo "<div class='recieveTextAnon'>".$row['message']."</div><br>";

							}
							
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