<?php
include_once "class_car.php";
class Plane extends Car{

}
$jet = new Plane();
echo $jet->wheels;