<?php 
	session_start();

	if(isset($_REQUEST['loginSubmit']))
	{
		
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			//$user = $_SESSION['user'];
			if(/*$user['userName'] == $username && $user['password'] == $password ||*/ $username == $password){
				$_SESSION['status'] = true;
				header('location: logged_user.php');
			}else{
				echo "Invalid user..";
			}

		}else{
			echo "Null submission";
		}
	}
	if (isset($_REQUEST['rememberMe']))
	{
		if(empty($_REQUEST['rememberMe']))
		{
			
			setcookie('rem', 'true', time()+50000, '/');
		}
		
	}
?>