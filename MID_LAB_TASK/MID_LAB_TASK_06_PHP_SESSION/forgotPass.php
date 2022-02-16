<?php 
	
	session_start();
	$msg = "";
	if(isset($_REQUEST['forgotSubmit']))
	if($_REQUEST['email'] == null){
			$msg = "Please enter Your email";
		}else{
			
			$msg = "Code sent to email";
		}


?>


<html>
<head>
	<title>Forgot Password</title>
</head>
<style>
	h1,h4 
	{
		display: inline-block;
	}
	p.ex1 
	{
		padding-left: 380%;
	}
</style>
<body>
	<form method="POST" action="">
		<table>
		<table border="1" width="100%">
		<tr>
			<td>
				 <pre><h1 style=font-size:25px> X Company</h1><h4><p class="ex1"><a href="publicHome.php">Public Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></pre></p></h4>
			</td>
		</tr>
		<tr height="310px">
			<td>
				<fieldset>
					<legend>FORGOT PASSWORD</legend>
					<table>
						<tr>
							<td>Enter Email : </td>
							<td><input type="email" name="email" value="" /></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="width:100%;text-align:left;margin-left:2"></hr></td>
						</tr>
						<tr>
							<td><input type="submit" name="forgotSubmit" value="Submit"></td>
						</tr>
					</table>
				</fieldset>
				<?=$msg?>
			</td>
		</tr>
		
		<tr>
			<td>
				<h3><center>Copyright &copy; 2017</center></h3>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
