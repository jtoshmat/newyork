<?php
namespace Travelling;
include_once "traits/TravelFormTrait.php";
include_once "traits/AdminTravelTrait.php";

class MonteCarlo{
    use \TravelFormTrait;
    use \AdminTravelTrait;
}

$monaco = new MonteCarlo();

echo $monaco->firstName();