<?php
namespace Oila;
include_once 'dailytrait.php';

class Ugil{
    use \DailyTrait;

    public function goToBanyaNewYearsYeve()
    {
        return "No I dont want to go";
    }

}
$son = new Ugil();

echo $son->goToBanyaNewYearsYeve();