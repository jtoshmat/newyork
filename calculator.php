<?php


$result = null;


function findAverageNumber($a, $b, $c, $d){
global $result;
$result = 'result is blah blah';
}


findAverageNumber(1,2,3, 4);

echo $result;
