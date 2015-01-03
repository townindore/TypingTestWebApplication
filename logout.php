<?php   
	session_start();

	unset($_SESSION['participant']);
	
	echo "<script language='javascript'>"; 
	echo " location='login.php';"; 
	echo "</script>"; 	
	exit();	

?>
