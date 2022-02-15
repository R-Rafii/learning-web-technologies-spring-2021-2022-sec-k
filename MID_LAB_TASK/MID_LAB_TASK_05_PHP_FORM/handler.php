<?php
	if(isset($_REQUEST['nameSubmit']))
	{
		if($_REQUEST['name'] == null){
			echo "name is empty....";
		}
		else{
			echo "Name : ".$_REQUEST['name'];
		}
	}
	if(isset($_REQUEST['emailSubmit']))
	{
		if($_REQUEST['email'] == null){
			echo "Email is empty....";
		}
		else{
			echo "Eamil : ".$_REQUEST['email'];
		}
	}
	if(isset($_REQUEST['dobSubmit']))
	{
		if($_REQUEST['dob'] == null){
			echo "Date of birth is empty....";
		}
		else{
			echo "Date of birth : ".$_REQUEST['dob'];
		}
	}
	if(isset($_REQUEST['genderSubmit']))
	{
		if(empty($_REQUEST['gender']))
		{
			echo "Gender is empty....";
		}
		else{
			echo "Gender : ".$_REQUEST['gender'];
		}
	}
	
?>