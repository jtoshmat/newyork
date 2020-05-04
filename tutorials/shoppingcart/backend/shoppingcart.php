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
        $user_id = 2;
        $this->db->con->real_escape_string($user_id);
        $sql = "SELECT * FROM shopping_cart WHERE user_id = '$user_id';";
        return $this->db->sql($sql);
    }
}
$obj = new Shoppingcart();
$products = $obj->listProducts();
?>

