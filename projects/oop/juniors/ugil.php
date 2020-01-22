<?php
namespace Oila;
include_once 'dailytraits.php';

class Ugil{

    use \DailyTrait;


    public function goToBanyaNewYearsEve()
    {
        return "Da hilla, I aint going to Banya, that is an old school, I am going to Sauna!";
    }

}

$son = new Ugil();
echo $son->goToBanyaNewYearsEve();

