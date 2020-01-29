<?php
namespace School;
include_once 'traits/FizkulturaTrait.php';
include_once 'traits/MatemarikaTrait.php';
include_once 'interfaces/darslar.php';

class Sinfone implements \darslar {

    use \FizkulturaTrait;
    use \MatemarikaTrait;

    public function onatili()
    {
        return "Man uz Ona Tilimni sevaman va fahrlanaman!";
    }

    public function dindarsi()
    {
        return "Yaratgan Olohga beminat shukruonalar bulsin!";
    }

    public function jismoiytarbiya()
    {
        return "100 otjimanie qilamiz";
    }

    public function finishProject()
    {
        return "I have finished building that kitchen by the darvoza";
    }


}

$sinfone = new Sinfone();
echo $sinfone->playFootball();
echo "<hr>";

echo $sinfone->finishProject();
