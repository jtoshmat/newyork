<?php
class Family{
    public $car;
    public function __construct()
    {
        //$this->car = "<br>Mercedes Benz Maybach S600<br>";
        //echo "<hr>This is a construct method</hr>";
    }

    public function throwWedding(){
        echo __LINE__;
        return "<br>Congratulations to both, groom and bride for creating for such a lovely and happy family. <hr>";
    }

    protected function noOldiBerdi(){
        return "<br>Ha hudoga shukur shu qushni kuchib ketyapdi iya <hr>";
    }

    public function getMeMethodName(){
        return __CLASS__;
    }

    public function __destruct()
    {
        //echo "<hr>This is a destruct method</hr>";
    }

    public function ozginaOldiBerdi(){
        $ozgina = $this->noOldiBerdi();
        return $ozgina;
    }
}


$family = new Family();

echo $family->ozginaOldiBerdi();



