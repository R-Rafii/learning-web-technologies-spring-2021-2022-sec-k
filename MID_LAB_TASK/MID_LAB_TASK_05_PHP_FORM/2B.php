
<?php 
	$email = "";
	$msg = "";

	if(isset($_REQUEST['emailSubmit'])){
		
		if($_REQUEST['email'] == null){
			echo "Please enter Your email";
		}else{
			$email = $_REQUEST['email'];
			$msg = "Email : ".$_REQUEST['email'];
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
	
			
		<input type="name" name="email" value="<?=$email?>" /><br>
		<hr style="width:12%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="emailSubmit" value="Submit">
	</form>
	</fieldset>
	<?=$msg?>
</body>
</html>