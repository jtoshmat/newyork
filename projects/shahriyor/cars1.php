<?php
/*
 *
​
PHP Basics: Variables, strings, int, boolean, NULL
Functions
Arrays
Object-oriented Programming
Security
Databases & SQL
Data Format & Types
Arrays
Strings & Patterns
Web Features
I/O
Error Handling
 */
​
?>
​
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select your vehicle</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>
​
<div class="container">
    ​
    <h3>Select your vehicle from the menu</h3>
    ​
    <form method="post">
        <p>Select:</p>
        <p>
            Acura: <input name="car" value="Acura" type="radio"> <br>
            Alfa Romeo: <input name="car" value="Alfa" type="radio"> <br>
            Audi: <input name="car" value="Audi" type="radio"> <br>
            BMW: <input name="car" value="BMW" type="radio"> <br>
            Mercedes: <input name="car" value="Mercedes" type="radio"> <br>
        </p>
        <p><button>Submit</button></p>
    </form>
    ​
    ​
    ​
    <?php
    $parms = $_POST;
    $car_photo = "https://cdn.iconscout.com/icon/free/png-256/car-1093-459261.png";
    if ($parms) {
        $selected_car = $parms['car']??null;
        $cars_images = [
            'Acura' => 'https://www.cstatic-images.com/car-pictures/xl/usc60acc141a021001.png',
            'Alfa' => 'https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/b0ce81dacadbef5e01796894fdbe5394.png',
            'Audi' => 'https://st.motortrend.com/uploads/sites/10/2017/09/2018-audi-r8-coupe-angular-front.png',
            'BMW' => 'https://di-uploads-pod20.dealerinspire.com/vistabmwcoconutcreek/uploads/2019/08/BMW_0014_2020-7-series.png',
            'Mercedes' => 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBRSTZE.img?w=354&h=236&m=7',
        ];

        $car_prices = [
            'Acura' => '55,000',
            'Alfa' => '83,000',
            'Audi' => '75,000',
            'BMW' => '90,000',
            'Mercedes' => '125,000'
        ];

        if (isset($cars_images[$selected_car])){
            $car_photo = $cars_images[$selected_car];
        }
    }

    ?>
    ​
    <div class="results">
        <div class="result_text">
            <hr>
            <p><h2>Welcome to Jon's Car Collections!</h2></p>
            Your have great taste in picking cars. <br>
            <span class="car_name"><?=$selected_car?></span> costs $<?=$car_prices[$selected_car]?> USD <hr>
        </div>
        ​
    </div>
    ​
</div>
​
<style>
    .results{
        width:80%;
        height:250px;
        background-color: #efefef;
        border:1px solid black;
        border-radius: 15px;
        margin: auto;
        padding: 5px;
        text-align: center;
        background-image: url("<?=$car_photo?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    ​
    .car_name{
        background-color: #570009;
        color: #ffcd4d;
        font-size: 30px;
        border-radius: 5px;
        box-shadow: #202020 2px 2px 2px 2px;
    }
    ​
    .result_text{
        background-color: #411a58;
        color: #ffe484;
        opacity: 0;
        ​
    }
    ​
    .result_text:hover{
        opacity: 1;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: #202020 3px 3px 3px 3px;
    }
    ​
</style>
​
</body>
</html>
