<?php
session_start();
$shopping_cart_qty = 0;
if (isset($_SESSION['shopping_cart_qty'])){
    $shopping_cart_qty = $_SESSION['shopping_cart_qty'];
}
if (!isset($_SESSION['user'])){
    $url = "http://newyork.local/tutorials/shoppingcart/login.php";
    $msg = "You must be logged on to see your checkout page";
    header("Location:".$url.'?msg='.$msg);
    exit;
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
<?include_once 'backend/shoppingcart.php'?>
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
                        <a class="nav-link" href="/tutorials/shoppingcart/index.php">Home <span class="sr-only">(current)</span></a>
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
    <div class="mytitle">Checkout Page</div>
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
                <?foreach ($products as $product):?>
                <tr>
                    <td><?=$product['id']?></td>
                    <td><img src="<?=$product['image']?>"> </td>
                    <td><?=$product['product_name']?></td>
                    <td><?=$product['price']?></td>
                    <td><?=$product['qty']?></td>
                    <td>
                        <select name="qty" id="qty<?=$product['id']?>">
                            <?
                            for($i=1; $i<=$product['qty']; $i++){
                                if ($product['qty'] == $i){
                                    echo "<option selected value='$i'>$i</option>";
                                }else{
                                    echo "<option value='$i'>$i</option>";
                                }
                            }
                            ?>
                        </select>
                        <button data-id="<?=$product['id']?>" class="myadd" id="add<?=$product['id']?> type="button">
                            <i class="fas fa-plus myplus"></i>
                        </button>
                    </td>

                </tr>
                <?endforeach;?>
            </table>
    </div>
    <div id="shoppingcart_buttons">
        <button class="btn btn-dark" id="reset_my_shoppingcart_button">Reset</button>
        <button class="btn btn-success" id="checkout_my_shoppingcart_button">Checkout</button>
    </div>
</div>
<script>
    $(function () {
        $("#reset_my_shoppingcart_button").click(function () {
            let ask = confirm("Are you sure you want to empty your basket?");
            if (ask){
                $.post( "backend/emptyshoppingcart.php", function( output ) {
                    alert("Your basket is empty and you are now being redirected to shopping page");
                    document.location = "http://newyork.local/tutorials/shoppingcart/index.php";
                    return false;
                });
            }
        });

        $("#checkout_my_shoppingcart_button").click(function () {
            let ask = confirm("Are you sure you want to check out?");
            if (ask){
                $.post( "backend/mail.php", function( output ) {
                    console.log(output);
                    alert("the user has been updated in the email");
                    //document.location = "http://newyork.local/tutorials/shoppingcart/checkout.php";
                    return false;
                });
            }
        });

    });


    //$('#msgModal').modal('show')
</script>
<style>

    .user_avatar{
        width: 40px;
    }

    .container-fluid{
        margin:0px !important;
        padding: 0px !important;
    }

    #shoppingcart_buttons{
        width: 80%;
        height:  auto;
        margin: 1px auto;
        text-align: right;
    }

    .myplus{
        font-size: 130%;
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
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>