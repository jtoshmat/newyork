<?php
namespace Supply;
require_once "database.php";
use Database\database;


class Products{
    protected $db;

    public function __construct()
    {
        $this->db = new database();
    }
    public function listProducts(){
        $sql = "SELECT * FROM product WHERE quantity > 0;";
        return $this->db->sql($sql);
    }
}
$obj = new Products();
$products = $obj->listProducts();
?>