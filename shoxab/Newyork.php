<?php
include_once '../shoxab/Federal.php';

class Newyork extends Federal

{


}

$newyork = new Newyork();

$newyork->name = "New York";
echo $newyork->speedlimit();