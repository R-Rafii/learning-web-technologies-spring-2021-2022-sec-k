<?php 

	session_start();
	unset($_SESSION['status']);
	setcookie('rem', 'true', time()-10, '/');
	header('location: publicHome.php');

?>