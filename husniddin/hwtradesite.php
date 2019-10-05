<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose your phones</title>
</head>
<body>

<?php
$Quantity = [1,2,3,4];
$Price_Iphone_MAX_X = [120099];
$Price_Samsung_Galaxy_S10_Plus = [99901];
$Price_Red_Mi_Note_4_X = [21089];
$Sum1 = [120099, 120099 + 120099, 120099 + 120099 + 120099, 120099 + 120099 + 120099 + 120099];

?>

<hr>

<button style="float: right" >My cart()</button>

<div class="top_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>Iphone Max X</p>
        <p><strong>Description:</strong>3600 mAh 256Gb</p>
        <p><strong>Price:</strong>$1200,99</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MTFH2?wid=1144&hei=1144&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1535399116400" alt="Iphone Max X">
</div>

<div class="middle_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>Samsung Galaxy S10 Plus</p>
        <p><strong>Desription:</strong>Android 9 128/512GB/1TB Memory, 4100 mAh</p>
        <p><strong>Price:</strong>$900,00</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_img" src="https://cdn.mos.cms.futurecdn.net/J36BmdXootbFfAHVKxpb2U-480-80.jpg" alt="Samsung Galaxy S10 Plus">
</div>

<div class="bottom_left_img">
    <div class="top_right_text">
        <p><strong>Title:</strong>Red MI Note 4x</p>
        <p><strong>Description:</strong>64 GB 4000mAh</p>
        <p><strong>Price:</strong>$165,25</p>
        <button>Buy it</button>
        <select>
            <option>Quantity</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <img class="left_HP_img" src="https://imgaz2.staticbg.com/thumb/large/oaupload/banggood/images/41/62/4585c12f-529d-4744-a5f0-100b2c5b73df.jpg" alt="HP Pavilion laptop">
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

