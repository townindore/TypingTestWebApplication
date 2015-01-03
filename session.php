<?php

session_start();
if($_SESSION["participant"]=="") 
	{
		echo "<script language='javascript'>"; 
		echo " location='login.php';"; 
		echo "</script>"; 	
		exit();		
	}

?>