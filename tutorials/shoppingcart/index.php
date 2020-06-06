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
<<<<<<< HEAD
<<<<<<< HEAD
<?php include_once 'backend/products.php'?>
=======
<? include 'includes/modal.php' ?>
<? include_once 'backend/products.php' ?>
>>>>>>> fc820f9ba1e0ea1203d6180dfb572b9b36cef404
=======
<? include 'includes/modal.php' ?>
<? include_once 'backend/products.php' ?>
=======
<?php include_once 'backend/products.php'?>
>>>>>>> 9ba2f27ee1d32d01d5266e9eae0e9c3f29838364
>>>>>>> fcd5e0a8a300292365df59d3ac759d1bc9397165
<div class="container-fluid">
    <div class="mynavbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php if (isset($_SESSION['user'])):?>
                <img class="user_avatar" src="../../img/default_photo_cirle_profile.png">
            <?php endif?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tutorials/shoppingcart/backend/logout.php">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>


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
<<<<<<< HEAD
<<<<<<< HEAD
            <table class="table table-bordered mytable">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Qty</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($products as $product):?>
                <tr>
                    <td><?php=$product['id']?></td>
                    <td><img src="<?php=$product['image']?>"> </td>
                    <td><?php=$product['product_name']?></td>
                    <td><?php=$product['price']?></td>
                    <td><?php=$product['quantity']?></td>
                    <td>
                        <select name="qty" id="qty<?php=$product['id']?>">
                            <?phpfor($i=1; $i<=$product['quantity']; $i++):?>
                            <option value="<?php=$i?>"><?php=$i?></option>
                            <?phpendfor?>
                        </select>
                        <button data-id="<?=$product['id']?>" class="myadd" id="add<?=$product['id']?> type="button">
=======
=======
>>>>>>> fcd5e0a8a300292365df59d3ac759d1bc9397165
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> fc820f9ba1e0ea1203d6180dfb572b9b36cef404
=======
=======
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Qty</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($products as $product):?>
                <tr>
                    <td><?php=$product['id']?></td>
                    <td><img src="<?php=$product['image']?>"> </td>
                    <td><?php=$product['product_name']?></td>
                    <td><?php=$product['price']?></td>
                    <td><?php=$product['quantity']?></td>
                    <td>
                        <select name="qty" id="qty<?php=$product['id']?>">
                            <?phpfor($i=1; $i<=$product['quantity']; $i++):?>
                            <option value="<?php=$i?>"><?php=$i?></option>
                            <?phpendfor?>
                        </select>
                        <button data-id="<?=$product['id']?>" class="myadd" id="add<?=$product['id']?> type="button">
>>>>>>> 9ba2f27ee1d32d01d5266e9eae0e9c3f29838364
>>>>>>> fcd5e0a8a300292365df59d3ac759d1bc9397165
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
    .user_avatar{
        width: 40px;
    }
    .container-fluid{
        margin:0px !important;
        padding: 0px !important;
    }

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
        right: 0%;
        top: 70px;
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