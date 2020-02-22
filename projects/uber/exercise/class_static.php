<?php
/* $a = range(1,20);
unset($a[3]);
foreach($a as $d){
    echo $d."<br>";
} */


$i=1;
while($i<21){

    $b = array_rand($a);
    echo $b."<br>";
    unset($a[$b-1]);
    $a = range(1,20);

    $i++;

}
