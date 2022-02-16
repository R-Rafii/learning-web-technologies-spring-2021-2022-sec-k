<?php 
	session_start();

	if(isset($_REQUEST['loginSubmit'])){
		
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			$user = $_SESSION['user'];
			if($user['userName'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+43600, '/');

				header('location: logged_user.php');
			}else{
				echo "invalid user..";
			}

		}else{
			echo "null submission";
		}
	}
?>