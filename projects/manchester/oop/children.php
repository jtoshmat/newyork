<?php
namespace Shadiyarovs;
require "parents.php";

class Children extends Parents {


    public function celebrateBirthday()
    {
        return parent::celebrateBirthday(); // TODO: Change the autogenerated stub
    }

}

$obj = new Children();

echo $obj->celebrateBirthday();