<?php
namespace Usa;

include_once "traits/MasterTrait.php";

class lola
{
    use \MasterTrait;

    public function testMyTrait(){
        return $this->checkWeather().'<hr> '. $this->validateUserInput();
    }

}

$mylola = new lola();
echo $mylola->testMyTrait();
