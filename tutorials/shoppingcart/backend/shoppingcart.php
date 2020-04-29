<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Shoppingcart{
    protected $db;

    public function __construct()
    {
        $this->db = new database('MY-IT-EDUCATION.US');
    }
    public function listProducts(){
        $sql = "SELECT * FROM shopping_cart WHERE user_id = 2;";
        return $this->db->sql($sql);
    }
}
$obj = new Shoppingcart();
$products = $obj->listProducts();
?>

