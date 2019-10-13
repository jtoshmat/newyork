<?php


namespace Vehicle;


class Car
{
    public $model;
    public $make;
    public $color;
    public $year;

    public function drive(){
        return "Parent: The $this->make is in a driving mode";
    }

    public function backup(){
        return "Please be careful, the $this->make is backing up";
    }

    public function park(){
        return "The $this->make is in a parking mode";
    }

    public function break(){
        return "The $this->make is in a full stop mode";
    }

    protected function fly(){
        return "The $this->make will be flying soon";
    }

    public function displayNewReleases(){
        return $this->fly();
    }

    public function displaySalaryToPublic(){
        return $this->displaySalaryToPublic();
    }

    private function displaySalary(){
        return "The annual revenue is 250000$";
    }
}
