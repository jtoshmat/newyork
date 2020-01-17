<?php

$a = 0;
$b = 0;

for($i=1; $i<=30; $i++){
    if ($i%3==0){
        $a +=$i;
        //echo $i ."<br>";
    }


    if ($i%2==0){
        $b +=$i;
        //echo "<hr>".$i ."<br>";
    }
}

echo  $a."|".$b;
