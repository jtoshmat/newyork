<?php


namespace Usa;
include_once 'lola.php';

class soliha extends lola
{


}


$soliha = new soliha();
$soliha->name = "Soliha";
$lola = new lola();


$test = $lola instanceof $soliha;

var_dump($test);





