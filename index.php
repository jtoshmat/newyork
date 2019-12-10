<?php

function findMedianNumber($a, $b, $c)
{
    /*
     * a,b,c
     */

    //a
    if ($a>=$b && $a<=$c){
        return $a;
    }
    if ($a<=$b && $a>=$c){
        return $a;
    }
     if ($b>=$a && $b<=$c){
        return $b;
    }
    if ($b<=$a && $b>=$c){
        return $b;
    }
 if ($c>=$a && $c<=$b){
        return $c;
    }
    if ($c<=$a && $c>=$b){
        return $c;
    }





}

echo "1: ";
var_dump(1 === findMedianNumber(0, 3, 1));
echo "<hr>";
echo "2: ";
var_dump(9 === findMedianNumber(10, 9, 8));
echo "<hr>";
echo "3: ";
var_dump(8 === findMedianNumber(8, 8, 8));
echo "<hr>";
echo "4: ";
var_dump(20 === findMedianNumber(20, 10, 30));
echo "<hr>";
echo "5: ";
var_dump(99 === findMedianNumber(76, 160, 99));
echo "<hr>";
echo "6: ";
var_dump(21 === findMedianNumber(21, 12, 45));



