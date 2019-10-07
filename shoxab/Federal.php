<?php


class Federal
{
    public $year;
    public $name;

    public function speedlimit(){
        return " Speed limit in $this->name is 70 miles per hour. ";
    }
    public function votingage(){
        return " Voting age in $this->name is $this->year years old.";
    }

    public function  tobaccorestriction() {
        return "Tobacco smoking age in $this->name is $this->year years old";

    }

}

$federal = new Federal();
$federal->name="Federal";
echo $federal->votingage();

$federal = new Federal();
$federal->name="Federal";
echo $federal->speedlimit();

$federal = new Federal();
$federal->year="25";
$federal->name="US";
echo $federal-> tobaccorestriction();







