<?php 
			
	 require_once '../config.php';
	 session_start();

				$userId =$_SESSION['id'];

				$sql = "SELECT message,chatUsername FROM chats ORDER BY ChatId ASC";

					if($result = mysqli_query($link,$sql)){

						if(mysqli_num_rows($result) > 0){

							while($row = mysqli_fetch_array($result)){

								echo "<label>".$row['chatUsername']." : ". $row['message'] . "</label><br>";
						

							}
							mysqli_free_result($result);

						}


						else{

							echo "<p>Start Convo</p>";
						}
                             					
							 mysqli_close($link);
				}

?>