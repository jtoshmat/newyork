<?php
/*
 *

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

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select your vehicle</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<?php
$selected = $_GET['car'] ?? 'BMW';
$cars['Audi'] = [
    'make' => 'Audi',
    'model' => 'RS5',
    'year' => 2014,
    'price' => 80000,
    'color' => 'black',
    'img' => 'https://pictures.dealer.com/p/paulmilleraudiaoa/0790/2ef10a0833d2b2264d2f7f50f5988993x.jpg?impolicy=downsize&w=568'
];
$cars['BMW'] = [
    'make' => 'BMW',
    'model' => 'i8',
    'year' => 2019,
    'price' => 90000,
    'color' => 'black',
    'img' => 'https://cdn.motor1.com/images/mgl/vEJmQ/s1/bmw-i8-m-rendering.jpg'
];
$cars['Alfa'] = [
    'make' => 'Alfa',
    'model' => 'Romer Stelvio',
    'year' => 2018,
    'price' => 550000,
    'color' => 'blue',
    'img' => 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_low/v1/editorial/vhs/2018_Alfa_Romeo_Stelvio_24.png'
];
$cars['Mercedes'] = [
    'make' => 'Mercedes',
    'model' => 'S600 Maybach',
    'year' => 2016,
    'price' => 800000,
    'color' => 'black',
    'img' => 'https://www.cstatic-images.com/car-pictures/xl/usd00mbcar2a021001.png'
];
$cars['Tesla'] = [
    'make' => 'Tesla',
    'model' => 'Model 3',
    'year' => 2019,
    'price' => 1200000,
    'color' => 'grey',
    'img' => 'https://www.cstatic-images.com/car-pictures/xl/usc30tsc021b021001.png'
];
$make = $cars[$selected]['make'];
$model = $cars[$selected]['model'];
$year = $cars[$selected]['year'];
$price = $cars[$selected]['price'];
$color = $cars[$selected]['color'];
$img = $cars[$selected]['img'];
?>
<div class="container-fluid">
    <div style="height: 50px"></div>
    <div class="mycarcollections">
        <div class="topdiv">Jon's Car Collection</div>
        <div class="middlediv">
            <div class="mleftdiv">
                <img src="<?=$img?>">
            </div>
            <div class="mrighttdiv">
                <p><label>Make: </label><span><?= $make ?></span></p>
                <p><label>Model: </label><span><?= $model ?></span></p>
                <p><label>Year: </label><span><?= $year ?></span></p>
                <p><label>Price: </label><span>$<?= $price ?></span></p>
                <p><label>Color: </label><span><?= $color ?></span></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="bottomdiv">
            <div data-car="Audi" class="caricons">
                <div>Audi</div>
            </div>
            <div data-car="Alfa" class="caricons">
                <div>Alfa</div>
            </div>
            <div data-car="BMW" class="caricons">
                <div>BMW</div>
            </div>
            <div data-car="Mercedes" class="caricons">
                <div>Mercedes</div>
            </div>
            <div data-car="Tesla" class="caricons">
                <div>Tesla</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<style>

    body {
        color: #ffda55;
        background-color: #fffcec;
    }

    .mycarcollections {
        width: 95%;
        max-width: 610px;
        min-width: 610px;
        background-color: #6c0912;
        margin: auto;
    }

    .topdiv {
        border: 1px solid black;
        border-bottom: none;
        font-family: "American Typewriter";
        font-size: 30px;
        text-align: center;
    }

    .mleftdiv {
        width: 60%;
        float: left;
        border: 1px solid black;
        height: 250px;
        background-color: #910c15;
    }

    .mrighttdiv {
        width: 40%;
        float: right;
        border: 1px solid black;
        border-left: none;
        height: 250px;
        background-color: #910c15;
        padding: 10px;
    }

    .bottomdiv {
        border: 1px solid black;
        border-top: none;
    }

    .caricons {
        width: 100px;
        height: 100px;
        border: 1px solid black;
        margin: 10px;
        float: left;
        text-align: center;
        background-color: #fffcec;
        border-radius: 10px;
        box-shadow: #60204e 2px 2px 2px 2px;
        background-image: url("https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_low/v1/editorial/vhs/2018_Alfa_Romeo_Stelvio_24.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        opacity: 0.5;
    }

    .caricons:nth-child(1) {
        background-image: url("<?=$cars['Audi']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(2) {
        background-image: url("<?=$cars['Alfa']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(3) {
        background-image: url("<?=$cars['BMW']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(4) {
        background-image: url("<?=$cars['Mercedes']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(5) {
        background-image: url("<?=$cars['Tesla']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .caricons img {
        width: 100%;

    }

    .mleftdiv img {
        width: 90%;
    }

    .mrighttdiv label {
        font-weight: bolder;
        color: #fff;
        margin: 5px;
        margin-bottom: 0px;
    }

    .mrighttdiv span {
        font-weight: bolder;
        color: #bfbfbf;
    }

    .caricons div {
        position: relative;
        top: 90%;
        background-color: #aaaaff;
        border: 1px solid black;
        border-radius: 10px;
        box-shadow: #0c5460 2px 2px 2px 2px;
        padding: 5px;
        width: 100px;
        color: #f00;

    }

    .caricons:hover {
        opacity: 1;
        cursor: pointer;
    }

    .caricons:hover > div {
        color: #563fff;
        background-color: #7de472;
    }

    .mycarcollections {
        border-radius: 10px;
        box-shadow: #57080f 2px 2px 2px 2px;
    }
</style>
<script>
    $(function () {
        $(".caricons").click(function () {
            var car =  $(this).attr('data-car');
            document.location = "testing.php?car="+car;
        });
    })
</script>
</body>
</html>