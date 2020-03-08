<?php

find_average_number(5,7,10);



function find_average_number($a, $b, $c){
    $output = null;

    if ($a>$b && $a<$c){
        $output = $a;
    }else if ($b>$a && $b<$c){
        $output = $a;
    }else if ($c>$a && $c<$b){
        $output = $c;
    }

    echo $output;


}


