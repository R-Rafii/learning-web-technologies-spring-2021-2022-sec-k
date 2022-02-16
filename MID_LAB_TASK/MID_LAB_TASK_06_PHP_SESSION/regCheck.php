<?php 
	session_start();
	
	if(isset($_REQUEST['regSubmit'])){
		
		$username = $_REQUEST['userName'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null ){
			$user = ['userName'=> $username, 'password'=> $password ];
			$_SESSION['user'] = $user;
			header('location: login.php');
		}else{
			echo "null submission";
		}
	}
?>