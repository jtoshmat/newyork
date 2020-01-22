<?php
namespace Html;
use Database\database;

include_once "../../inc/database.php";
class ValidateEmail{
    private $db;
    public $parms;

    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();
    }


    public function validateEmail(){
        return $this->db->sql("SELECT id, email FROM users WHERE email = '{$this->parms['email']}' LIMIT 1");
    }
}

$obj = new ValidateEmail();
$exists = (count($obj->validateEmail()))?TRUE:FALSE;
echo $exists;