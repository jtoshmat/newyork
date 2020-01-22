<?php
    namespace luxcars;
    include "car.php";

    $object=new car();
    $pain=new car();

    $object->setNewCar("Toyota");
    $pain->setNewBody("->red");
    echo $object->getCar() .$pain->getBody() ."<br>";

    $object->setNewCar("Mercedes") ."<br>";
    $pain->setNewBody("->blue");
    echo $object->getCar() .$pain->getBody() ."<br>";

    $object->setNewCar("Chrysler") ."<br>";
    $pain->setNewBody("->white");
    echo $object->getCar() .$pain->getBody();
