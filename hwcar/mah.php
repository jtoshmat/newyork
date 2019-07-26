<?php

namespace luxcars;
include "car.php";

    $object=new car();
    $object2=new car();
    $object3=new car();
    $paint=new car();
    $paint2=new car();
    $paint3=new car();

    $object->setNewCar("HONDA ");
    $paint->setNewBody("RED->");
    echo $paint->getBody() .$object->getCar() ."<hr>";

    $object2->setNewCar("AUDI ");
    $paint2->setNewBody("BLACK->");
    echo $paint2->getBody() . $object2->getCar() ."<hr>";

    $object3->setNewCar("MERCEDES-BENZ ");
    $paint3->setNewBody("WHITE->");
    echo $paint3->getBody() .$object3->getCar() ."<hr>";

    /*$days=["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    for ($i=0; $i<=6; $i++){
        echo $days[$i]."<br>";
    }
    */
    $days= "Tuesday";

    switch ($days) {
        case "Monday":
            echo "Drive your " .$paint->getBody() .$object->getCar(). "please.<hr>";
            break;
        case "Tuesday":
            echo "Drive your " .$paint->getBody() .$object->getCar() ."please.<hr>";
            break;
        case "Wednesday":
            echo "Drive your " .$paint->getBody() .$object->getCar() ."please.<hr>";
            break;
        case "Thursday":
            echo "Drive your " .$paint2->getBody() . $object2->getCar() ."please.<hr>";
            break;
        case "Friday":
            echo "Drive your " .$paint2->getBody() . $object2->getCar() ."please.<hr>";
            break;
        case "Saturday":
            echo "Drive your " .$paint3->getBody() .$object3->getCar() ."please.<hr>";
            break;
        case "Sunday":
            echo "Drive your " .$paint3->getBody() .$object3->getCar() ."please.<hr>";
            break;
    default:
        echo "!!!PLEASE DRIVE WHATEVER CAR YOU WANT!!! <hr>";
}
