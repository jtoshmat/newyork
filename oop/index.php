<?php
namespace Newyork;
include_once "traits/UtilitiesTrait.php";
include_once "traits/AdminTrait.php";
class Brooklyn{
    use \UtilitiesTrait;
    use \AdminTrait;
}

$kingscounty = new Brooklyn();


echo $kingscounty->isUserAdmin();