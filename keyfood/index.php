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
        return $this->db->sql("SELECT * FROM groceries");
    }

}

$obj = new Checkout();
$items = $obj->getItems();
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
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid">
    <div class="dashboard">
        <?php
        foreach ($items as $id => $item) {
            ?>
            <div class="items" data-id="<?= $id ?>">
                <img src="<?= $item['image'] ?>">
                <div class="description">
                    <?= $item['product_name'] ?><br>
                    $<?= $item['price'] ?>
                    <div data-did="<?= $id ?>" id="description<?= $id ?>" class="quantitybox quantitybox2">
                        <button data-bid1="<?= $id ?>" class="btn btn-primary mybtn">-</button>
                        <input disabled="disabled" class="items_input" value="0" id="myinput<?= $id ?>">
                        <input id="price<?=$id?>" class="price" type="hidden" value="<?=$item['price']?>">
                        <button data-bid2="<?= $id ?>" class="btn btn-primary mybtn">+</button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="rightpanel">
        <h4 style="text-align: center">Shopping Cart</h4>
        <p>csdcs</p>
        <div class="shopping_details">
            <table class="table table-bordered" id="displaytable">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Qnty</td>
                    <td>Total</td>
                </tr>

            </table>
        </div>
        <div class="shopping_totals">
            <p>Total: $<span id="checkout_total">0</span></p>
            <p>Tax: $<span id="checkout_tax">0</span></p>
            <p>Grand Total: $<span id="checkout_grand_total">0</span></p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</body>
</html>


