<?php
namespace Apple;
include_once "traits/AppleTrait.php";

class Buyer{
    use \AppleTrait;
}

$newBuyer = new Buyer();
echo $newBuyer->iMac();