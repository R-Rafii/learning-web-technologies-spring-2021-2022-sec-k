<?php
	$msg = "";
	$a = 1 ;
	if(isset($_REQUEST['dobSubmit']))
	{	
		if($_REQUEST['dob'.$a] == null)
		{
			echo "Please enter Your Date of Birth";
		}
		else
		{
			echo "Previous Date of Birth : ".($_REQUEST['dob'.$a])	;		
		}
	}
?>
<html>
<head>
	<title>Date of Birth</title>
</head>
<body>
	<fieldset>
		<legend>Date of Birth</legend>
	<form method="POST" action="">
		<input type="date" name="dob<?=$a?>" value="" /><br>
		<hr style="width:10%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="dobSubmit" value="Submit">
	</form>
	</fieldset>
</body>
</html>