<?php
class car{
    public $wheels = 4; //can be used everywhere
    protected $engine = 1; //can be used in this and extended classes
    private $doors = 4;//can be used only in this class
    function showProperty(){
        echo $this->doors;

    }

}
$bmw = new Car();
echo $bmw->wheels; echo "<br>";
$bmw->showProperty();
class Plane extends Car{
    function showData(){
        echo $this->engine;
    }
}
$audi = new Plane();
echo $audi->showData();


