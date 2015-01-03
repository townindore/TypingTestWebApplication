
<?php
include("session.php");

date_default_timezone_set('America/Toronto');

if(isset($_POST))
		{
			$participant = $_SESSION["participant"];
			
			if($participant!=""){
				
				$paragraph = $_POST["paragraph_id"];
				
				//check if paragraph id is correct
				if($paragraph > 0 && $paragraph < 13 && $participant!="T"){
						
						
						
						$date = date("m-d h:i ");
						$total_time = $_POST["total_time"];
						$wpm = $_POST["wpm"];
						$user_input = $_POST["user_input"];
						
						$myFile = "data/test_data.csv";
						$fh = fopen($myFile, 'a') or die("can't open file");
						$stringData = "\r\n".$date.",".$paragraph.",".$participant.",".$total_time.",".$wpm.",".$user_input;
						fwrite($fh, $stringData);
						fclose($fh);
				
				}else if($participant=="T"){
				
					echo("<script language='javascript'>alert(\"Test data NOT stored (Training Session.)\");window.location.href='index.php';</script>");	
				
				}
				
				else{
					
					echo("<script language='javascript'>alert(\"Invalid Paragraph ID, please check again.\");window.location.href='index.php';</script>");	
				
				}
				
			
			}else{
			
				echo("<script language='javascript'>alert(\"Participant Not Logged in. Please log in first.\");window.location.href='login.php';</script>");	
				
			}
}					
	
?>
	
	
