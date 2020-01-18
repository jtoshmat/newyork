<?php
namespace Family;
include_once 'father.php';
class Son extends Father{



}

$max = new Son();


echo "Dada, how much money you make?  ". $max->displaySalary();
