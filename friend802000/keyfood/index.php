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

}

$obj = new Checkout();
$items = $obj->getItems();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
            </div>
            <?php
        }
        ?>
    </div>
    <div class="rightpanel">
        <h4 style="text-align: center">Shopping Cart</h4>
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
        <div>
                <button class="b01" id="btnstartover">Start Over</button>
                <button class="b02 btncheckout" id="btnCheckout">Checkout</button>

        </div>
    </div>
    <div class="fade" id="fade">Please Slide your card for the Payment</div>
    <div class="clearfix"></div>
</div>
</body>
</html>