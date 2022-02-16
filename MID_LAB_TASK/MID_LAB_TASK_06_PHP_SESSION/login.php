<html>
<head>
	<title>Login</title>
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
	<form method="POST" action="loginCheck.php">
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
					<legend>LOGIN</legend>
					<table>
						<tr>
							<td>User Name : </td>
							<td><input type="text" name="name" value="" /></td>
						</tr>
						<tr>
							<td>Password : </td>
							<td><input type="password" name="password" value="" /></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="width:100%;text-align:left;margin-left:2"></hr></td>
						</tr>
						<tr>
							<td colspan="2"><input type="checkbox" name="rememberMe" value="remember"> Remember Me </td>
						</tr>
						<tr>
							<td><input type="submit" name="loginSubmit" value="Submit"></td>
							<td><a href="forgotPass.php">Forgot Password?</a></td>
						</tr>
					</table>
				</fieldset>
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