<?php
namespace Myitedu;
require_once 'rules.php';
class Accounting implements Rules
{
public function setDressCode()
{
    return "Dress like you are applying for your boss's position";
}
public function respectColleagues()
{
    // TODO: Implement respectColleagues() method.
}
public function stayHome()
{
    // TODO: Implement stayHome() method.
}
}

$obj = new Accounting();
echo $obj->setDressCode();