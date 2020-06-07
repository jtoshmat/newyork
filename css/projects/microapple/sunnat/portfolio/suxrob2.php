<?php

namespace control;
class issetgaMisol
{
    public $country;
    private $capital;
    private $president;

    public function __construct($country, $capital, $president)
    {
        $this->country = $country;
        $this->capital = $capital;
        $this->president = $president;
    }

    public function __isset($capital)
    {
        echo "<hr>Sorry, you have requested the private attribute: $capital <hr>";
    }
}

$result = new issetgaMisol('Uzbekistan', 'Tashkent', 'Sh.Miromonovich');
echo $result->country;
echo "<pre>";
var_dump(isset($result->Suxrob));