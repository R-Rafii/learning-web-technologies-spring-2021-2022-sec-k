<?php
  $n1 = (float)readline('Enter 1st Number : ');
  $n2 = (float)readline('Enter 2nd Number : ');
  $n3 = (float)readline('Enter 3rd Number : ');
  function large($x, $y, $z) 
  {
      $max = $x;

      if ($x >= $y && $x >= $z)
        $max = $x;
      elseif ($y >= $x && $y >= $z)
        $max = $y;
      else 
       $max = $z;
  
  echo "Largest number among $x, $y and $z is: $max\n";
  }

large($n1, $n2, $n3);
?>