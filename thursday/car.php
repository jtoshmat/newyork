<?php


namespace vehicle;


class Car
{
    #1 We will list the all car methods
    #2 We will list all the car properties
    #3 Instantiate the car


    public $model;
    public $make;
    public $color;
    public $year;

    Public function drive(){
        return "The $this->make is in driving mode";
    }

    Public function backup(){
        return "Please be careful, the $this->make is in backing up";
    }
    Public function park(){
        return "Please be careful, the $this->make is in backing up mode";
    }
    Public function break(){
        return "The $this->make is in full stop mode";
    }

    protected function fly(){
        return "The $this->make will be flying soon";
    }
    public function displayNewReleases(){
        return $this->fly();
    }
}


