<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Products{
    protected $db;
    public $parms;
    public $keyword;
    public $orderby, $sort;
    public function __construct()
    {
        $this->db = new database('MY-IT-EDUCATION.US');
        $this->parms = $_GET;
        $keyword = $this->parms['keyword']??null;
        $this->keyword = strip_tags($keyword);
        if (!isset($this->parms['orderby'])){
            $this->parms['orderby'] = 'price';
        }
        $this->orderby = $this->parms['orderby']??'price';

        if (!isset($this->parms['sort'])){
            $this->parms['sort'] = 'asc';
        }
        $this->sort = $this->parms['sort']??'asc';
    }
    public function listProducts(){
        $sql = "SELECT *,((price * price_drop)/100) as discount, price - ((price * price_drop)/100) as final_price 
                FROM products 
                WHERE product_name like '%$this->keyword%' or keywords like '%$this->keyword%'
                order by $this->orderby $this->sort;";
        return $this->db->sql($sql);
    }
}
$obj = new Products();
$products = $obj->listProducts();
?>

