<?php 
	$gender = "";
	$msg = "";

	if(isset($_REQUEST['genderSubmit'])){
		
		if(empty($_REQUEST['gender'])){
			echo "Please select your gender";
		}else{
			$gender = $_REQUEST['gender'];
			$msg = "Email : ".$_REQUEST['gender'];
		}
	}
?>
<html>
<head>
	<title>Gender</title>
</head>
<body>
	<fieldset>
		<legend>Gender</legend>
		<form method="POST" action="">
		<input type="radio" name="gender" value="Male"> Male 
		<input type="radio" name="gender" value="Female"> Female 
		<input type="radio" name="gender" value="Other"> Other 
		<hr style="width:15%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="genderSubmit" value="Submit">
	</form>
	</fieldset>
	<?=$msg?>
</body>
</html>