<?php


namespace Vehicle;


class Car
{
    public $model;
    public $make;
    public $color;
    public $year;

    public function drive() {
        return "The car is in a driving mode";
    }
    public function backup() {
        return "Please becareful, car is backing up";
    }

    public function park() {
        return "The car is parking up";
    }

    public function break() {
        return "The car is in full stop mode";
    }
    protected function fly(){
        return "The $this->make will be flying soon";


    }
    public function displayNewReleases(){
        return $this->fly();
}


}

