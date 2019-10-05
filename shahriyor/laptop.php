<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose your laptop</title>
</head>
<body>

<?php
$Quantity = [1,2,3,4];
$Price_Macbook_Pro = [150045];
$Price_Macbook_Air = [113025];
$Price_HP_Pavilion = [33025];
$Sum1 = [150045, 150045 + 150045, 150045 + 150045 + 150045, 150045 + 150045 + 150045 + 150045];


?>

<hr>

<button style="float: right" >My cart()</button>

<div class="top_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>Macbook Pro</p>
        <p><strong>Description:</strong>i7 core 16Gb</p>
        <p><strong>Price:</strong>$1500,45</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_img" src="https://cdn.shopify.com/s/files/1/2415/3555/products/13-MBPR-2.png?v=1534260064" alt="macbook Pro laptop">
</div>

<div class="middle_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>Macbook Air</p>
        <p><strong>Desription:</strong>i5 core 8Gb</p>
        <p><strong>Price:</strong>$1130,25</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_img" src="https://switch.com.my/wp-content/uploads/2018/04/Macbook-Air-17.gif" alt="macbook Air laptop">
</div>

<div class="bottom_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>HP Pavilion</p>
        <p><strong>Description:</strong>i5 core 4Gb</p>
        <p><strong>Price:</strong>$330,25</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_HP_img" src="https://in-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/7/E/7EW28PA-1_T1560155401.png" alt="HP Pavilion laptop">
</div>

<hr>

<style>
    .left_img {
        width: 200px;
        height: 200px;
    }
    .left_HP_img {
        width: 180px;
        height: 150px;
        margin-top: 20px;
        margin-left: 8px
    }
    .top_left_img {
        width: 380px;
        height: 200px;
        margin-top: 40px
    }
    .middle_left_img {
        width: 380px;
        height: 200px;
        margin-top: 40px
    }
    .bottom_left_img {
        width: 380px;
        height: 200px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .top_right_text {
        float: right;
        padding: 5px;
        margin-top: 30px
    }
    button {
        background-color: lightblue;
        border-radius: 5px;
    }





</style>

</body>
</html>
