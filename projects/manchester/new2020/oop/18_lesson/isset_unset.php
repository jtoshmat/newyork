<?php
namespace control;
class issetgaMisol{
    public $country;
    private $capital;
    private $president;

    public function __construct($country, $capital, $president)
    {
        $this->country = $country;
        $this->capital = $capital;
        $this->president = $president;
    }

    public function __isset($name)
    {
        echo "<hr>Sorry, you have requested the private attribute: $name <hr>";
    }

    public function __unset($name)
    {
        echo "<hr>Sorry, your attribute unsetting: $name <hr>";
    }
}

$result = new issetgaMisol('Uzbekistan','Tashkent','Sh.Miromonovich');
echo $result->country;
echo "<pre>";
var_dump(isset($result->country));
echo "<hr>";
unset($result->country);
var_dump(isset($result->country));
