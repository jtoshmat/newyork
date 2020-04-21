<?php
session_start();
$shopping_cart_qty = 0;
if (isset($_SESSION['shopping_cart_qty'])) {
    $shopping_cart_qty = $_SESSION['shopping_cart_qty'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Shopping cart</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<? include 'includes/modal.php' ?>
<? include_once 'backend/products.php' ?>
<div class="container-fluid">
    <div id="checkout_display">
        <a id="total_items_btn" href="checkout.php"><i class="fas fa-shopping-cart"></i> <span
                    id="total_items"><?= $shopping_cart_qty ?></span></a>
    </div>
    <div class="mytitle">Welcome to my online shop!</div>
    <div id="product_search_form">
        <form method="get">
            <p><label>Search: </label><input value="<?=$obj->keyword?>" name="keyword" type="text" placeholder="Your keyword"><button class="btn btn-success" type="submit">Search</button></p>
        </form>
    </div>
    <div id="shoppingcart">
        <table class="table table-bordered mytable">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>
                    Product Price
                    <? if ($obj->sort == 'asc'):?>
                    <a href="index.php?keyword=<?=$obj->keyword?>&orderby=<?=$obj->orderby?>&sort=desc"><i class="fas fa-arrow-down"></i></a>
                    <?else:?>
                        <a href="index.php?keyword=<?=$obj->keyword?>&orderby=<?=$obj->orderby?>&sort=asc"><i class="fas fa-arrow-up"></i></a>
                    <?endif?>
                </th>
                <th>Product Qty</th>
                <th>Action</th>
            </tr>
            <? foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><img src="<?= $product['image'] ?>"></td>
                    <td><?= $product['product_name'] ?></td>
                    <td>$<?= $product['price'] ?>
                        <?php if ($product['price_drop'] > 0): ?>
                            <div class="price_drop">
                                <?= $product['price_drop'] ?>%
                            </div>
                        <?php endif; ?>
                    </td>
                    <td><?= $product['quantity'] ?></td>
                    <td>
                        <?php if ($product['quantity'] > 0): ?>
                            <select name="qty" id="qty<?= $product['id'] ?>">
                                <? for ($i = 1; $i <= $product['quantity']; $i++): ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <? endfor ?>
                            </select>
                            <button data-id="<?= $product['id'] ?>" class="myadd" id="add<?= $product['id'] ?> type="
                                    button">
                            <i class="fas fa-plus myplus"></i>
                            </button>

                        <?php else:?>
                        <img class="sold_out_label" src="https://www.onlygfx.com/wp-content/uploads/2017/12/sold-out-stamp-3-1024x795.png">
                        <?php endif; ?>


                    </td>

                </tr>
            <? endforeach; ?>
        </table>
    </div>
</div>
<script>
    $(function () {
        $("#total_items_btn").click(function () {
            let total_items = $("#total_items_btn").text();
            if (total_items==0){
                $("#myiteduModal").modal('show');
                $(".modal-body").html('Your shopping cart is empty, please add products first.');
                return false;
            }
        });
        $('.myadd').click(function () {
            let product_id = $(this).data('id');
            let qty = $("#qty" + product_id).val();
            let mydata = {
                'product_id': product_id,
                'qty': qty
            };
            $.post("backend/backend.php", mydata, function (output) {
                let total = output;
                $("#total_items").text(total);
                return false;
                //document.location = "http://newyork.local/tutorials/shoppingcart/index.php";
            });
        });
    });
</script>
<style>

    #total_items:before{
        content: '(';
    }
    #total_items:after{
        content: ')';
    }

    #product_search_form label{
        font-size: 1.5em;
    }

    #product_search_form input {
        margin-left: 10px;
        margin-right: 10px;
        width: 440px;
        height: 46px;
        padding: 10px;
        border: 1px solid burlywood;
        border-radius: 10px;
    }

    #product_search_form{
        width: 100%;
        text-align: center;
        color: white;
        padding:5px;
    }
    .sold_out_label{
        width: 100px !important;
        text-align: center;
    }

    .price_drop {
        display: inline-block;
        width: 110px;
        height: 85px;
        background-image: url("https://cdn0.iconfinder.com/data/icons/universal-web-mobile-5-3/65/457-512.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        position: relative;
        left: 25px;
        top: -10px;
        text-align: center;
        line-height: 80px;
    }

    .myplus {
        font-size: 130%;
    }

    #checkout_display a {
        text-decoration: none;
        color: wheat;
    }

    #checkout_display {
        position: absolute;
        right: 1%;
        top: 20px;
        width: 200px;
        text-align: center;
        padding: 10px;
        color: wheat;
        font-size: 150%;
    }

    tr:hover {
        background-color: #dfe0df;
        cursor: pointer;
    }

    tr:nth-child(even) {
        background-color: #eeeeee;
    }

    .mytitle {
        width: 80%;
        color: wheat;
        font-size: 250%;
        font-family: "American Typewriter";
        text-align: center;
        background-color: #1a2f69;
        margin: 50px auto;
    }

    .mytable img {
        width: 150px;
    }

    * {
        margin: 0px;
        padding: 0px
    }

    html, body {
        width: 100%;
        height: 100%;
    }

    body {
        background-color: #113068;
    }

    #shoppingcart {
        width: 80%;
        height: auto;
        background-color: whitesmoke;
        margin: 1px auto;
    }

</style>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>