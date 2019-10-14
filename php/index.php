<?php
$numbers = range(1,100);

foreach ($numbers as $number){
    $odd = $number % 2;

    if (!$odd) {
        echo " * ";
        echo $number . " : " . $odd . "<hr>";
    }

}


//PHP Basics Variables: (Strings, int, NULL, Floats, Boolean, Arrays, Resources), Operations

