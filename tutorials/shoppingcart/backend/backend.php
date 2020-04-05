<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Backend{
    protected $db;
    public $parms;
    public function __construct()
    {
        session_start();
        $this->db = new database('MY-IT-EDUCATION.US');
        $this->parms = $_POST;
    }

}

$obj = new Backend();
print_r($obj->parms);
$_SESSION['shopping_cart_qty']++;

?>

