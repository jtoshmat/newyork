<?php
namespace Oila;

include_once 'oilamajburiyatlari.php';
include_once 'ona.php';
class Oila implements \Otanibuyruqlari, \ona {

    public function bulidVeranda()
    {
        return 'Ok daddy, i will build Veranda for you';
    }
    public function paintWall()
    {
        return 'I will paint the wall';
    }
    public function sellTheCar()
    {
        return 'I will, one day!';
    }
    public function marryUzbekGirl()
    {
        return 'Mommy, I definitely will marry uzbek girl';
    }

}

$oila = new Oila();

echo $oila->marryUzbekGirl();