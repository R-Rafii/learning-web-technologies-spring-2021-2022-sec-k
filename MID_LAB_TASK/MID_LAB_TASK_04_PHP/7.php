<?php

    for($a=0;$a<3;$a++)
    {
        for($b=0;$b<=$a;$b++)
        {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    for($x=3;$x>=1;$x--)
    {
        for($y=1;$y<=$x;$y++)
        {
            echo $y;
        }
        echo "<br>";
    }
    echo "<br>";

    $alpha=["1st"=>"A","2nd"=>"B C","3rd"=>"D E F"];
    foreach ($alpha as $p=>$r)
    {
     echo $r."<br>";
    }

?>