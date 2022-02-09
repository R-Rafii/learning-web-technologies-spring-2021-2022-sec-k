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

    $alpha=["1"=>"A","2"=>"B C","3"=>"D E F"];
    foreach ($alpha as $p=>$r)
    {
     echo $r."<br>";
    }

?>