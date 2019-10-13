<?php
namespace Oila;

include_once 'oilaMajburiatlari.php';
include_once 'onahohishi.php';

class Oila implements \OtaniBuyruqlari, \Onabuyruqlari {
    public function buildVeranda()
    {
        return "Hop buladi, ota. Man osha verandani quraman";
    }
    public function paintWall()
    {
        return "Devorni oqqa boyiman";

    }
    public function SelltheCar()
    {

        return "Hop boladi";
    }
    public function Ozbekqizgauylanasan()
    {
        return "Chiroyli ozbek qizi";
    }
    public function Uygarozgorqil()
    {
        // TODO: Implement Uygarozgorqil() method.
    }

}

$oila = new Oila();


echo $oila->Ozbekqizgauylanasan();