<?php
	$msg = "";
	$a = 1 ;
	if(isset($_REQUEST['dSubmit']))
	{	
		if(empty($_REQUEST['d']))
		{
			echo "Please submit your Degree";
		}
		else
		{
			echo "Previous Degree : ".($_REQUEST['d'.$a])	;		
		}
	}
?>
<html>
<head>
	<title>Degree</title>
</head>
<body>
	<fieldset>
		<legend>Degree</legend>
		<form method="POST" action="">
			<input type="checkbox" name="d" value="HSC">HSC 
			<input type="checkbox" name="d" value="SSC">SSC 
			<input type="checkbox" name="d" value="BSc">BSc
			<hr style="width:13%;text-align:left;margin-left:2"></hr>
			<input type="submit" name="dSubmit" value="Submit">
		</form>
	</form>
	</fieldset>
</body>
</html>