<?php
namespace Oila;
include_once 'dailytrait.php';
//include_once "project.php";//2
/*include_once 'oilamajburiyatlari.php';
include_once 'onaBuyruqlari.php';
class Oila implements\OtaniBuyruqlari,\onaBuyruqlari {
    public function buildVeranda()
    {return "Hop buladi, quraman";
        // TODO: Implement buildVeranda() method.
    }
    public function moshinanisotish()
    {return "moshinani sotaman";
        // TODO: Implement moshinanisotish() method.
    }
    public function paintWall()
    {return "devorni bo'yayman";
        // TODO: Implement paintWall() method.
    }
    public function marryUzbekGirl()
    {return "hop";
        // TODO: Implement marryUzbekGirl() method.
    }

}
$oila = new Oila();
echo $oila->buildVeranda();*/
/*class Ugil extends Project {//2

}
$son = new Ugil();//2
echo $son->rentedStore();//2*/
class Ugil{
    use \dailyTrait;
}
$son = new Ugil();
echo $son->goToBanny();
