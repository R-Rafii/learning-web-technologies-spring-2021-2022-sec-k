<?php
	$msg = "";
	$a = 1 ;
	if(isset($_REQUEST['emailSubmit']))
	{	
		if($_REQUEST['email'.$a] == null)
		{
			echo "Please enter Your email";
		}
		else
		{
			echo "Previous Email : ".($_REQUEST['email'.$a])	;		
		}
	}
?>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<fieldset>
		<legend>Email</legend>
	<form method="POST" action="">
		<input type="name" name="email<?=$a?>" value="" /><br>
		<hr style="width:12%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="emailSubmit" value="Submit">
	</form>
	</fieldset>
</body>
</html>