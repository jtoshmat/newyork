<?php
// This is task #1
/*
$var = range(0, 1100);

echo "Total sum is " . array_sum($var);
echo "<br>Maximum num is " . max($var);
echo "<br>Avarage num is " . array_sum($var) / count($var);;
echo "<br>Minimum num is " . min($var);
echo "<pre>";

print_r($var);*/

//This is task #2
/*
$groups = range(0, 1100);
echo "<pre>";
print_r(array_chunk($groups,275));*/


//This is task #3

$var = range(1,81);

 for ($i=0; $i<=count($var); $i++){

     if ($i){
         echo "<span class='all'>$i </span>";
     }
}
 ?>

<style>

    .all {
        height: 50px;
        background-color: yellow;
        margin: 25px;
    }
</style>
