<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Backend{
    protected $db;
    public $parms;
    public $product;
    public function __construct()
    {
        session_start();
        $this->db = new database('MY-IT-EDUCATION.US');
        $this->parms = $_POST;
        if (isset($_SESSION['shopping_cart_qty'])) {
            $_SESSION['shopping_cart_qty'] += $this->parms['qty'] ?? 0;
        }else{
            $_SESSION['shopping_cart_qty'] = 0;
        }
        $this->getProductDetails();
        $this->addToCart();
    }

    protected function getProductDetails(){
        $product_id = $this->parms['product_id'];
        $sql = "SELECT * FROM products WHERE id = $product_id;";
        $output = $this->db->sql($sql);
        $this->product = $output[0];
    }

    protected function checkProductInShoppingCart(){
        $product_id = $this->parms['product_id'];
        $sql = "SELECT id, product_id FROM shopping_cart WHERE product_id = $product_id limit 1;";
        $results = $this->db->sql($sql);
        $found = (count($results)>0)?true:false;
        return $found;
    }

    public function addToCart(){
        $found = $this->checkProductInShoppingCart();
        $product_id = $this->parms['product_id'];
        $qty = $this->parms['qty'];
        $price = $this->product['price'];
        $image = $this->product['image'];
        $product_name = $this->product['product_name'];
        if ($found){
            $sql = "UPDATE shopping_cart SET qty = $qty WHERE product_id = $product_id";
        }else {
            $sql = "INSERT INTO shopping_cart (product_id, price, qty, user_id, product_name, image) VALUES ($product_id,$price,$qty,2, '$product_name','$image');";
        }
        $this->db->sql($sql);
        return true;
    }


}
$obj = new Backend();
echo $_SESSION['shopping_cart_qty'];