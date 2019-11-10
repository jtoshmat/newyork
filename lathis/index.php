<?php
namespace Keyfood;

use Database\database;

include_once '../inc/database.php';

class Checkout
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getItems()
    {
        return $this->db->sql("SELECT * FROM groceries where quantity >= 1");
    }

    public function downloadImages(){
        $items = $this->db->sql("SELECT id, image  FROM groceries;");

        foreach ($items as $item){
            echo $item['image'] . "<hr>";
            $url = $item['image'];
            system("cd img; wget $url");
        }

    }

}

$obj = new Checkout();
$items = $obj->getItems();


$obj->downloadImages();

exit;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyFood Checkout Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid mycontainer">
    <div class="dashboard">
        <?php
        foreach ($items as $id => $item) {
            ?>
            <div class="items" id="item<?= $id ?>" data-id="<?= $id ?>">
                <img src="<?= $item['image'] ?>">
                <div class="description">
                    <?= $item['product_name'] ?><br>
                    $<?= $item['price'] ?>
                </div>
                <input type="hidden" id="product_name<?= $id ?>" value="<?= $item['product_name'] ?>">
                <input type="hidden" id="price<?= $id ?>" value="<?= $item['price'] ?>">
                <input type="hidden" id="quantity<?= $id ?>" value="<?= $item['quantity'] ?>">
                <input type="hidden" id="id<?= $id ?>" value="<?= $item['id'] ?>">
            </div>
            <?php
        }
        ?>
    </div>
    <div class="rightpanel">
        <h4 style="text-align: center">Shopping Cart</h4>
        <p>
            <button id="btnstartover">Start Over</button>
        </p>
        <div class="shopping_details">
            <table class="table" id="displaytable">
                <tr>
                    <td>Name</td>
                    <td>Qnty</td>
                    <td>Total</td>
                    <td>Delete</td>
                </tr>
            </table>
        </div>
        <div class="shopping_totals">
            <p>Total: $<span id="checkout_total">0</span></p>
            <p>Tax: $<span id="checkout_tax">0</span></p>
            <p>Grand Total: $<span id="checkout_grand_total">0</span></p>
        </div>
        <div class="shopping_checkout">
            <input name="realids" id="api_realids" value="1111">
            <input name="total" id="api_total" value="111">
            <input name="tax" id="api_tax" value="222">
            <input name="grandtotal" id="api_grandtotal" value="333">
            <button id="mycheckout_button" class="btn btn-light">CHECKOUT</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</body>
</html>