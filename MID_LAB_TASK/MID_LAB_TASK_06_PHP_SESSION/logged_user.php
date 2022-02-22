<?php
	session_start();
	if(isset($_SESSION['status']))
	{
		if(isset($_COOKIE['rem']))
		{
		?>
			<html>
<head>
	<title>Logged In Dashbord</title>
</head>
<style>
	h1,h4 
	{
		display: inline-block;
	}
	p.ex1 
	{
		padding-left: 500%;
	}
</style>
<body>
	<form method="POST" action="">
		<table>
		<table border="1" width="100%">
		<tr>
			<td colspan="5">
				 <pre><h1 style=font-size:25px> X Company</h1><h4><p class="ex1">Logged in as <a href="profile.php">bob</a> | <a href="logout.php">Logout</a></pre></p></h4>
			</td>
		</tr>
		<tr height="310px">
			<td colspan="3">Account<br>
				<hr style="width:13%;text-align:left;margin-left:1"></hr>
			<a href="Dashbord.php">Dashbord</a><br>
			<a href="profile.php">Veiw Profile</a><br>
			<a href="editProfile.php">Edit Profile</a><br>
			<a href="picChange.php">Change Profile Picture</a><br>
			<a href="passChange.php">Change Password</a><br>
			<a href="logout.php">Logout</a><br>
			
			</td>
			<td colspan="3">Welcome  <a href="profile.php">bob</a></td>
		</tr>
		
		<tr>
			<td colspan="5">
				<h3><center>Copyright &copy; 2017</center></h3>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
		}
		else
		{
		?>
			<html>
<head>
	<title>Logged In Dashbord</title>
</head>
<style>
	h1,h4 
	{
		display: inline-block;
	}
	p.ex1 
	{
		padding-left: 500%;
	}
</style>
<body>
	<form method="POST" action="">
		<table>
		<table border="1" width="100%">
		<tr>
			<td colspan="5">
				 <pre><h1 style=font-size:25px> X Company</h1><h4><p class="ex1">Logged in as <a href="profile.php">bob</a> | <a href="logout.php">Logout</a></pre></p></h4>
			</td>
		</tr>
		<tr height="310px">
			<td colspan="3">Account<br>
				<hr style="width:13%;text-align:left;margin-left:1"></hr>
			<a href="Dashbord.php">Dashbord</a><br>
			<a href="profile.php">Veiw Profile</a><br>
			<a href="editProfile.php">Edit Profile</a><br>
			<a href="picChange.php">Change Profile Picture</a><br>
			<a href="passChange.php">Change Password</a><br>
			<a href="logout.php">Logout</a><br>
			
			</td>
			<td colspan="3">Welcome  <a href="profile.php">bob</a></td>
		</tr>
		
		<tr>
			<td colspan="5">
				<h3><center>Copyright &copy; 2017</center></h3>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
		}
		
	}
	else
	{
		echo "Invalid Request...";
	}
?>
