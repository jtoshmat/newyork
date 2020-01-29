<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="mycars">

        <h3 class="mytitle">Welcome to Jon's Car Collections!</h3>

        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Make</td>
                <td>Model</td>
                <td>Price</td>
                <td>Image</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Alfa</td>
                <td>Romeo</td>
                <td>55,000$</td>
                <td><img src="https://pictures.dealer.com/h/herbchambersofwaylandalfaromeofcaar/1044/7dc0c5cc5d3a8d740168180c16adf19ax.jpg"> </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Audi</td>
                <td>RS5</td>
                <td>65,000$</td>
                <td><img src="https://gearpatrol.com/wp-content/uploads/2019/01/Complete-Audi-Buying-Guide-gear-patrol-lead-full.jpg"> </td>
            </tr>
            <tr>
                <td>3</td>
                <td>BMW</td>
                <td>M6</td>
                <td>85,000$</td>
                <td><img src="https://i.ytimg.com/vi/pauid0hCUYc/maxresdefault.jpg"> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Mercedes-Benz</td>
                <td>S600</td>
                <td>125,000$</td>
                <td><img src="https://blogmedia.dealerfire.com/wp-content/uploads/sites/701/2018/03/2019-Mercedes-Benz-S-Class-Exclusive-Edition-red-side_o.jpg"> </td>
            </tr>

        </table>

    </div>
</div>
<style>
    body{
        background-color: #baae96;
    }
    .mytitle{
        color: #5f1323;
        font-family: "American Typewriter";
        text-align: center;
        margin-top: 20px;
    }

    table td img:hover{
        width: 130px;
        box-shadow: #98851c 5px 5px 5px 5px;
    }

    tr:hover{
        color: #ff2450;
        cursor: pointer;
        background-color: #005685 !important;
    }

    tr:nth-child(odd){
        background-color: #d4d4d4;
    }

    tr:first-child td{
        background-color: #5f1323;
        color: #ffdb49;
        font-family: "American Typewriter";
        font-size: 19px;
        font-weight: bolder;
    }

    td{
        text-align: center;
        font-family: "American Typewriter";
        font-size: 16px;
        border: 1px solid #5f5f5f !important;
    }
    table td img{
        width:125px;
        border: 1px solid black;
        border-radius: 10px;
        box-shadow: black 5px 5px 5px 5px;
    }

    table{
        background-color: white;
    }
</style>
</body>
</html>