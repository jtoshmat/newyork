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
    <title>Customers login page</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<? include 'includes/modal.php' ?>
<div class="container-fluid">
    <div id="checkout_display">
        <a id="total_items_btn" href="checkout.php"><i class="fas fa-shopping-cart"></i> <span
                    id="total_items"><?= $shopping_cart_qty ?></span></a>
    </div>
    <div class="mytitle">Welcome to my online shop!</div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Members Login</h1>
            <?if(isset($_GET['msg'])):?>
            <div class="alert alert-danger">Error: <?=$_GET['msg']?></div>
            <?endif;?>


            <p class="lead">


            <form method="post" action="backend/loginprocess.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="reset" class="btn btn-dark">Reset</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>


            </p>
        </div>
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
    });
</script>
<style>

    #total_items:before{
        content: '(';
    }
    #total_items:after{
        content: ')';
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