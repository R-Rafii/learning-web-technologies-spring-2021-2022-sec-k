
<?php 
	$email = "";

	if(isset($_REQUEST['emailSubmit'])){
		
		if($_REQUEST['email'] == null){
			echo "Please enter Your email";
		}else{
			$email = $_REQUEST['email'];
			
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
	
			
		<td><input type="name" name="email" value="<?=$email?>" /><br></td>
		<hr style="width:12%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="emailSubmit" value="Submit">
	</form>
	</fieldset>
</body>
</html>