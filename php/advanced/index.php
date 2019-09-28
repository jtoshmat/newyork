<?php


// objet oriented; class

class Car{

    public $make;
    public function drive(){
        return "The $this->make  is driving";
    }

    public function backup(){
        return "The $this->make  is now backing up";

    }
    public function turning(){
        return "The $this->make  is turning.";
    }

}

$car = new Car();
$car->make = 'Honda';
echo $car->drive();
echo "<pre>";

$cars = ['Audi','Acura', 'BMW', 'Mercedes', 'Honda'];

var_dump($cars);

echo "<hr>";

var_dump(array_key_exists(10, $cars));
echo "<hr>";




