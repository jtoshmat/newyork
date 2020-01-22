<?php


namespace luxcars;


class car
{
    public $car;
    public function setNewCar($car){
        $this->car=$car;
    }
    public function getCar(){
        return $this->car;
    }

    public $body;
    public function setNewBody($body){
        $this->body=$body;
    }
    public function getBody(){
       return  $this->body;
    }


}