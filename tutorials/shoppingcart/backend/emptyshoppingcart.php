<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Emptyshoppingcart{
    protected $db;

    public function __construct()
    {
        session_start();
        $this->db = new database('MY-IT-EDUCATION.US');
        $sql = "DELETE FROM shopping_cart WHERE user_id = 2;";
        $output = $this->db->sql($sql);
        session_destroy();
        return true;
    }
}
$obj = new Emptyshoppingcart();
echo 1;
?>

