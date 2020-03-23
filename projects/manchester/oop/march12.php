<?php
<<<<<<< HEAD
namespace Vehicles;
class Car
{
    private $make;
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
=======
class march12
{
    public $model;

    public function __construct()
>>>>>>> 58545d17237b271ef6a66087a9657a7b94a29f31
    {
        $this->model = 'Stelvio';
    }
<<<<<<< HEAD
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
=======
}

>>>>>>> 58545d17237b271ef6a66087a9657a7b94a29f31






