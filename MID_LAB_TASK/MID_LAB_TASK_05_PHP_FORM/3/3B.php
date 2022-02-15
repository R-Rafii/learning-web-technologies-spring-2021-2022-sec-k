<?php 
	$dob = "";
	$msg = "";

	if(isset($_REQUEST['dobSubmit'])){
		
		if($_REQUEST['dob'] == null){
			echo "Please enter Your Date of Birth";
		}else{
			$dob = $_REQUEST['dob'];
			$msg = "Date of Birth : ".$_REQUEST['dob'];
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
			<input type="date" name="dob" value="" /><br>
			<hr style="width:9%;text-align:left;margin-left:2"></hr>
			<input type="submit" name="dobSubmit" value="Submit">
		</form>
	</fieldset>
	<?=$msg?>
</body>
</html>