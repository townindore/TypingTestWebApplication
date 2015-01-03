<?php

if(isset($_POST))
		{
			$group_id = $_POST["group"];
			$participant_id = $_POST["participant"];
			
			// if its A,B,C group users or if it's training session
			if(($group_id!="--" && $participant_id!="--")||$group_id=="T"){
				
				session_start();
				if($group_id!="T")$_SESSION["participant"] = $group_id.$participant_id;
				else {$_SESSION["participant"] = $group_id;}
					
				echo "<script language='javascript'>"; 
                echo " location='index.php';"; 
                echo "</script>"; 	
				exit();	
				
			}else{
			
				echo("<script language='javascript'>alert(\"Invalid Participant ID. Please check again.\");window.location.href='login.php';</script>");	
				
			}
			
			
			
}					
	
?>
	
	
