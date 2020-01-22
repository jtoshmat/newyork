<?php
namespace Abzalovs;

include_once "FathersAdvice.php";


class Son extends FathersAdvice {

    public $lastName;

    public function __construct()
    {
        $this->lastName = 'Abzalov';
    }


}

$son = new Son();

$son->lastName = 'Karimov';
echo $son->lastName;


