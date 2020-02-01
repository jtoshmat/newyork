<?php
include_once "class_car.php";
$bmw = new Car();
$audi = new Car();echo "<br>";
$bmw->moveWeels(); echo "<br>";

echo $bmw->doors; echo "<br>";
echo $audi->doors;