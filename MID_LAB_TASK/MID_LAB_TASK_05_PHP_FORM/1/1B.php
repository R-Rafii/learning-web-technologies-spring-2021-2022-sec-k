
<?php 
	$name = "";
	$msg = "";

	if(isset($_REQUEST['nameSubmit'])){
		
		if($_REQUEST['name'] == null){
			echo "Please enter Your name";
		}else{
			$name = $_REQUEST['name'];
			$msg = "Name : ".$_REQUEST['name'];
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
	
			
		<input type="name" name="name" value="<?=$name?>" /><br>
		<hr style="width:12%;text-align:left;margin-left:2"></hr>
		<input type="submit" name="nameSubmit" value="Submit">
	</form>
	</fieldset>
	<?=$msg?>
</body>
</html>