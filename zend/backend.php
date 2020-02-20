<?php
/*$parms = $_POST;
echo "<pre>";
var_dump($parms);*/

namespace Form;
use Database\database;


include_once "../inc/database.php";
class Contactform{
    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST;
    }

    public function myContactForm(){
        return $this->parms;
    }
}

$form = new Contactform();
echo "<pre>";
 print_r($form->myContactForm());