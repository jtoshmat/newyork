<?php
class Car{

    public $make;
    public $color;

    public function __construct()
    {
        return "Well, hello there, I am a constructor. It is nice to meet you!";
    }

    public function __destruct()
    {
        return "It was nice to meet you, I hope I will see you soon, Bye!";
    }


    public function drive(){
        print "The $this->make is driving <br>";
    }

    public function backup(){
        print "Watch out kids, the $this->make is backing up! <br>";
    }

}

$car = new Car();

$car->make = 'BMW';
$car->drive();

$car->make = 'Acura';
$car->drive();


$car->make = 'Alfa';
$car->drive();


$car->make = 'Toyota';
$car->drive();


$car->make = 'Nexia';
$car->drive();




