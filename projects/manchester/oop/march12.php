<?php
namespace Vehicles;
class Car
{
    private $make;
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
    public function __clone()
    {
        exit("<br>I am sorry, you can not clone this object<br>");
    }
}

$obj = new Car();
$obj->make = 'Honda';
echo $obj->make;
echo "<hr>";
$obj2 = clone $obj;
echo "<hr>";
echo "You are comparing:<br>";






