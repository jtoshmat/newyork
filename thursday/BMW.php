<?php


namespace vehicle;
include_once 'car.php';

class BMW extends Car
{

}

$BMW = new BMW();
$BMW->make = "BMW M6";
print $BMW->displayNewReleases();