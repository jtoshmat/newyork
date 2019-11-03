<?php


namespace Vehicle;


class Car
{
    public $model;
    public $make;
    public $color;
    public $year;

<<<<<<< HEAD
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

=======
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
>>>>>>> d029929777a56a8edb05e324fb17b214ec0c4e1d
