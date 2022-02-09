<?php
$a = (float)readline('Enter an ammount : ');
	function check($a)
	{
		if($a % 2 == 0)
		{
			echo "Even";
		}
		else{
			echo "Odd";
		}
	}
check($a)
?>
