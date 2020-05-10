<?php
namespace Nasa;
include_once 'traits/jontrait.php';
class Shuttle{
    use \JonTrait;

    public function testMe()
    {
        return "I am overwiting the trait testMe method in the class";
    }
}

$spacecraft = new Shuttle();

echo $spacecraft->testMe();