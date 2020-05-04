<?php
session_start();
$shopping_cart_qty = 0;
if (isset($_SESSION['shopping_cart_qty'])){
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
<?php include_once 'backend/products.php'?>
<div class="container-fluid">
    <div id="checkout_display">
        <a href="checkout.php"><i class="fas fa-shopping-cart"></i> (<span id="total_items"><?=$shopping_cart_qty?></span>)</a>
    </div>
    <div class="mytitle">Welcome to my online shop!</div>
    <div id="shoppingcart">
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
                            <i class="fas fa-plus myplus"></i>
                        </button>
                    </td>

                </tr>
                <?endforeach;?>
            </table>
    </div>
</div>
<script>
    $(function () {
        $('.myadd').click(function () {
            let product_id = $(this).data('id');
            let qty = $("#qty"+product_id).val();
            let mydata = {
                'product_id': product_id,
                'qty':qty
            };
            $.post( "backend/backend.php",mydata, function( output ) {
                let total = output;
                $("#total_items").text(total);
                return false;
                //document.location = "http://newyork.local/tutorials/shoppingcart/index.php";
            });
        });
    });
</script>
<style>

    .myplus{
        font-size: 130%;
    }

    #checkout_display a{
        text-decoration: none;
        color: wheat;
    }

    #checkout_display{
        position: absolute;
        right: 1%;
        top: 20px;
        width: 200px;
        text-align: center;
        padding:10px;
        color: wheat;
        font-size: 150%;
    }

    tr:hover{
        background-color: #dfe0df;
        cursor: pointer;
    }

    tr:nth-child(even){
        background-color: #eeeeee;
    }

    .mytitle{
        width: 80%;
        color: wheat;
        font-size: 250%;
        font-family: "American Typewriter";
        text-align: center;
        background-color: #1a2f69;
        margin: 50px auto;
    }

    .mytable img{
        width: 150px;
    }

    *{
        margin: 0px;
        padding:0px
    }
    html, body{
        width: 100%;
        height: 100%;
    }
    body{
        background-color: #113068;
    }

    #shoppingcart{
        width: 80%;
        height:  auto;
        background-color: whitesmoke;
        margin: 1px auto;
    }

</style>
</body>
</html>