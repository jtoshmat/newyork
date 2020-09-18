<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
$animal = $_GET['animal']??'lion';

    $animals = [
        'lion' => [
            'name' => 'King Lion',
            'age' => 6,
            'img' =>'https://resize.hswstatic.com/w_907/gif/lion.jpg',
            'food' => 'meat',
            'bgimg' => 'https://cff2.earth.com/uploads/2017/11/09170741/Africa-used-to-be-wet-and-humid-until-the-Arctic-changed-everything.jpg'

        ],
        'tiger' => [
            'name' => 'Bengal Tiger King',
            'age' => 8,
            'img' =>'https://www.tigers-world.com/wp-content/uploads/Bengal.jpg',
            'food' => 'meat and grass',
            'bgimg' => 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F1004885760%2F960x0.jpg%3Ffit%3Dscale'
        ],
        'elephant' => [
            'name' => 'King of the Sahara',
            'age' => 2,
            'img' =>'https://anthropocenemagazine.org/wp-content/uploads/2020/02/elephant.jpg',
            'food' => 'grass and tree leaves',
            'bgimg' => 'https://cff2.earth.com/uploads/2017/11/09170741/Africa-used-to-be-wet-and-humid-until-the-Arctic-changed-everything.jpg'
        ],
        'crocodile' => [
            'name' => 'King of the Mud',
            'age' => 67,
            'img' =>'https://www.floridamuseum.ufl.edu/wp-content/uploads/sites/23/2017/08/sc-aquarium-nile-crocodile-edit1.jpg',
            'food' => 'meat and some fish',

        ],

        'zebra' => [
            'name' => 'Tallest in the jungle',
            'age' => 34,
            'img' =>'https://s3.amazonaws.com/hudsonalpha/wp-content/uploads/2020/03/31082714/Common_zebra_1.jpg',
            'food' => 'tall trees leaves and some fruites',
            'bgimg' => 'https://cff2.earth.com/uploads/2017/11/09170741/Africa-used-to-be-wet-and-humid-until-the-Arctic-changed-everything.jpg'
        ],
    ];


    $bgimg = $animals[$animal]['bgimg']??"https://www.nationalgeographic.com/content/dam/news/photos/000/117/11752.ngsversion.1463720446664.adapt.1900.1.jpg";

?>
<div class="container-fluid">

    <div class="leftbox boxes">
        <h4><?=$animals[$animal]['name']?></h4>
        <hr>
        <img src="<?=$animals[$animal]['img']?>"><br>
        <label>Age: </label> <?=$animals[$animal]['age']?><br>
        <label>Food: </label> <?=$animals[$animal]['food']?><br>
    </div>

    <div class="rightbox boxes">
        <h4>Animals</h4>
       <ul>
           <li><a href="may22.php?animal=lion">Lion</a></li>
           <li><a href="may22.php?animal=tiger">Tiger</a></li>
           <li><a href="may22.php?animal=elephant">Elephant</a></li>
           <li><a href="may22.php?animal=crocodile">Crocodile</a></li>
           <li><a href="may22.php?animal=zebra">Zebra</a></li>
       </ul>
    </div>

</div>

<style>

    .rightbox a{
        color: yellow;
    }

    .rightbox li{
        list-style: none;
    }

    .leftbox img{
        width: 50%;
        border: 1px solid black;
    }

    .container-fluid{
        text-align: center;
    }

    .leftbox{
        background-color: #00a900;
        float: left;
        background-image: url("<?=$bgimg?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .rightbox{
        background-color: #872315;
        float: right;
    }

    .boxes{
        width: 40%;
        height: 300px;
        display: inline-block;
        border: 1px solid black;
        margin: auto;
    }


    body{
        background-color: #142842;
        color: whitesmoke;
    }
</style>


</body>
</html>