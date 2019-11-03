<?php
<<<<<<< HEAD


namespace Vehicle;
include_once "car.php";

=======
namespace Vehicle;
include_once 'car.php';
>>>>>>> d029929777a56a8edb05e324fb17b214ec0c4e1d

class Bmw extends Car
{

}

$bmw = new Bmw();
$bmw->make = "BMW M6";
print $bmw->displayNewReleases();