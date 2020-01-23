<?php
namespace Abzalovs;
include_once 'FatherOrdersInterface.php';
include_once 'MotherOrdersInterface.php';
class Son implements \FatherOrdersInterface, \MotherOrdersInterface {

    public function buildRoomByGate()
    {
        // TODO: Implement buildRoomByGate() method.
        return "Yes Father, I will build it for you!";
    }
    public function sellBull()
    {
        // TODO: Implement sellBull() method.
        return "Yes, Father, I will go ahead and sell the bull in bazar";
    }

    public function marryUzbekGirl()
    {
        return "I am in love with a beautiful and smart Uzbek girl by name: Malika";
    }
}

$son = new Son();
echo $son->buildRoomByGate();
echo "<hr>";
echo $son->sellBull();
echo "<hr>";

echo $son->marryUzbekGirl();