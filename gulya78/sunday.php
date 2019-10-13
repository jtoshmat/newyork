<?php


    $num = 0;
    $n1 = 0;
    $n2 = 1;

    echo "<h5>Fibonacci series for first 25 numbers: </h5>";

    echo "<br>";

    while ($num <25)
    {
        $n3 =$n2 + $n1;
        echo $n3.', ';
        $n1 = $n2;
        $n2 =$n3;
        $num++;


    }



?>