<html>

<head>

  <meta charset="UTF-8">
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	
  <title>Login - CSC428 Typing Test for Various Input Methods</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<script LANGUAGE="JavaScript">
	
	function check_participant(){
		
		if(document.getElementById("group").value == "T"){
		
			document.getElementById("participant").disabled = true;
			document.getElementById("participant").value = "--"
			
		}else{
		
			document.getElementById("participant").disabled = false;
		
		
		}
		
		
	}
	
</script>	
	
</head>

<body>

  <span class="button" id="toggle-login">CSC428 Typing Test</span>

<div id="login">
  <h1>Participant Login</h1>
  
  <form action="login_authenticate.php" method="post">
	
	<table><tr>
	<text style="font-size:25px">Test Group &nbsp;&nbsp;&nbsp;&nbsp;</text>
	<select id="group" name="group" onchange="check_participant()">
		<option selected="selected" value="--" >--</option>
		<option value="A" >A</option>
		<option value="B" >B</option>
		<option value="C" >C</option>
		<option value="T" >Training</option>
	</select>
	</tr><tr><br>
	<text style="font-size:25px">Participant # &nbsp;</text>
    <select id="participant" name="participant">
		<option selected="selected" value="--" >--</option>
		<?php												
		//print all the group ids
		for ($x=1; $x<=8; $x++) 
			{
				echo "<option value=\"".$x."\" id=\"".$x."\">".$x."</option>";
			}
	?>
	</select>
	</tr></table>
    <input type="submit" value="Confirm" />
  </form>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</body>

</html>