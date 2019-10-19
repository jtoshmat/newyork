<?php
class Car{
    static $wheels = 4;
    function showWheels(){
        echo Car::$wheels = 10;
    }
}
echo Car::$wheels;
Car::showWheels();