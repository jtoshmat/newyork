<?php
namespace Myitedu;
require_once 'rules.php';
class Sales implements Rules
{
    public function respectColleagues()
    {
        // TODO: Implement respectColleagues() method.
    }

    public function setDressCode()
    {
        return "Now, you can dress however you want";
    }

}

$obj = new Sales();
echo $obj->setDressCode();