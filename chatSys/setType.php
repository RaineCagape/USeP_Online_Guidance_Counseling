<?php
	
 session_start();

 $type = $_GET['type'];

 if($type == "anon"){

 	$_SESSION['chatType'] = "anon";

 }

 elseif($type == "reg"){

 	$_SESSION['chatType'] = "reg";

 }

 else{

 	?><script type="text/javascript">
 		alert('Something Wrong Oh my ghad!!');
 	</script>
 	<?php
 }

 header("location: chat.php");

?>