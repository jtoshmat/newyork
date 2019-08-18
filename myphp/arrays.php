<?php
/*
include_once '../inc/database.php';



$db = new \Database\database();


$airports = $db->sql("select * from airports where country='Uzbekistan'");



echo "<pre>";
var_dump($airports[0]);

*/


$cars = ['BMW',['Audi'=>['RS5','Q5','S8']],'Jeep','Honda','Volga'];
$cars2 = ['BMW','Audi','Buick','Honda','Toyota'];

sort($cars);

echo "<pre>";
print_r($cars);

/*
$diffs = array_merge($cars, $cars2);

echo "<pre>";

foreach ($diffs as $num => $diff){

    $num++;
    echo "<div>";
    echo $num.": " .$diff;
    echo "</div>";
    echo "<br>";

}



*/?>
<!--


<style>
    div{
        background-color: yellow;
        color:#f00;
        padding:10px;
        font-size: 20px;
    }
</style>

-->



