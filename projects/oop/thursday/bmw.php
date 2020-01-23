<?php
namespace Vehicle;
include_once 'car.php';

class Bmw extends Car
{

}

$bmw = new Bmw();
$bmw->make = "BMW M6";
print $bmw->displayNewReleases();