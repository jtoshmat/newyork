<?php
namespace usa;
include_once 'usa.php';

class iowa implements usa
{

    public function joinArmy($age = 17)
    {
        // TODO: Implement joinArmy() method.
    }

    public function learnHippa($mustPass = true)
    {
        // TODO: Implement learnHippa() method.
    }

    public function votingAge($age=21)
    {
        return $age;
    }

}

$jon = new iowa();
echo $jon->votingAge(32);

