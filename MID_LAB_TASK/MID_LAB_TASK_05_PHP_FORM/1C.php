<?php
	$msg = "";
	$a = 1 ;
	$a ++ ;
	if(isset($_REQUEST['nameSubmit']))
	{	
		if($_REQUEST['name'.$a] == null)
		{
			echo "Please enter Your name";
		}
		else
		{
			echo "Previous Name : ".($_REQUEST['name'.$a])	;		
		}
	}
?>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<fieldset>
		<legend>Name</legend>
	<form method="POST" action="">
		<input type="name" name="name<?=$a?>" value="" /><br>
		<hr style="width:12%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="nameSubmit" value="Submit">
	</form>
	</fieldset>
</body>
</html>