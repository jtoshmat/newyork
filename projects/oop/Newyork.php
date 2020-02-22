<?php


namespace world;
include_once 'Usa.php';

class Newyork extends Usa
{

}
$nyc = new Newyork();
echo $nyc->votingAge;