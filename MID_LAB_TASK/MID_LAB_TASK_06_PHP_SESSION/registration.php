<html>
<head>
	<title>Public Home</title>
</head>
<style>
	h1,h3 
	{
		display: inline-block;
	}
	p.ex1 
	{
		padding-left: 310%;
	}
</style>
<body>
	<form method="POST" action="regCheck.php">
		<table>
		<table border="1" width="100%">
		<tr>
			<td>
				 <pre><h1 style=font-size:25px> X Company</h1><h3><p class="ex1"><a href="publicHome.php">Public Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a></pre></p></h3>
			</td>
		</tr>
		<tr height="500px">
			<td>
				<fieldset>
					<legend>Registration</legend>
					<table>
						<tr>
							<td>
								Name 
							</td>
							<td>
								 <input type="text" name="name" value="" />
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td>
								Email 
							</td>
							<td>
								 <input type="email" name="email" value="" />
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td>
								User Name 
							</td>
							<td>
								 <input type="text" name="userName" value="" />
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td>
								Password 
							</td>
							<td>
								 <input type="password" name="password" value="" />
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td>
								Confirm Password 
							</td>
							<td>
								 <input type="password" name="confirmPassword" value="" />
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td colspan="2">
								 <fieldset>
								<legend>Gender</legend>
									<input type="radio" name="gender" value="Male"> Male 
									<input type="radio" name="gender" value="Female"> Female 
									<input type="radio" name="gender" value="Other"> Other 
								</fieldset>
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
						<tr>
							<td colspan="2">
								 <fieldset>
								<legend>Date of Birth</legend>
									<input type="date" name="dob" value="" /><br>
								</fieldset>
							</td>
							
						</tr>
						<td colspan="2">
							<hr style="width:100%;text-align:left;margin-left:2"></hr>
						</td>
					</table>
					
					<input type="submit" name="regSubmit" value="Submit">
					<input type="reset" name="reset" value="Reset">

				</fieldset>
		</td>
		</tr>
		<tr>
			<td>
				<h4><center>Copyright &copy; 2017</center></h4>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>