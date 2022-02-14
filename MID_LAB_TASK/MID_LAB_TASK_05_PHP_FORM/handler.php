<?php
	if(isset($_REQUEST['nameSubmit'])){

		
		
		if($_REQUEST['name'] == null){
			echo "name is empty....";
		}
		else{
			echo "Name : ".$_REQUEST['name'];
		}
	}
	
?>