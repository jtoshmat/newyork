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
$selected = $_GET['car'] ?? 'Tracker';
$cars['Malibu'] = [
    'make' => ' Malibu',
    'model' => ' Turbo 1.5',
    'year' =>  2019,
    'price' =>  38000,
    'color' => ' white',
    'img' => 'https://cars.usnews.com/static/images/Auto/izmo/i158791983/2020_chevrolet_malibu_angularfront.jpg'
];
$cars['Tracker'] = [
    'make' => 'Tracker',
    'model' => 'Onix',
    'year' => 2019,
    'price' => 27000,
    'color' => 'white',
    'img' => 'https://www.azernews.az/media/2019/04/03/chevrolet-tracker-narxi-gm-uzbekistan-nachal-prodavat-trekker-v-avtosalonah-v-tashkente-i-v-uzbekistane.jpg'
];
$cars['Captiva'] = [
    'make' => 'Captiva',
    'model' => 'Turbo',
    'year' => 2019,
    'price' => 41000,
    'color' => 'black',
    'img' => 'https://images.summitmedia-digital.com/topgear/images/2019/03/29/chevrolet-captiva-bims-3-1553834227.jpg'
];
$cars['Gentra'] = [
    'make' => 'Gentra',
    'model' => 'Ravon',
    'year' => 2019,
    'price' => 13000,
    'color' => 'black',
    'img' => 'http://www.ravon.az/uploads/img/icons/car-models/59494529a0c96.png'
];
$cars['Nexia'] = [
    'make' => 'Nexia',
    'model' => 'Model 4',
    'year' => 2019,
    'price' => 9000,
    'color' => 'white',
    'img' => 'https://wroom.ru/i/cars2/ravon_nexia_1_2.jpg'
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
        <div class="topdiv">Husnidin's Car Collection</div>
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
            <div data-car="Malibu" class="caricons">
                <div>Malibu</div>
            </div>
            <div data-car="Captiva" class="caricons">
                <div>Captiva</div>
            </div>
            <div data-car="Tracker" class="caricons">
                <div>Tracker</div>
            </div>
            <div data-car="Gentra" class="caricons">
                <div>Gentra</div>
            </div>
            <div data-car="Nexia" class="caricons">
                <div>Nexia</div>
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
        background-image: url("<?=$cars['Malibu']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(2) {
        background-image: url("<?=$cars['Captiva']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(3) {
        background-image: url("<?=$cars['Tracker']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(4) {
        background-image: url("<?=$cars['Gentra']['img']?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .caricons:nth-child(5) {
        background-image: url("<?=$cars['Nexia']['img']?>");
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
            document.location = "hwuzcars.php?car="+car;
        });
    })
</script>
</body>
</html>

