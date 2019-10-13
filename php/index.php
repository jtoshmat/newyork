<<<<<<< HEAD
=======
<?php
namespace Family;

class Father{

    public $parms;

    public function __construct()
    {
        $this->parms = $_GET;
    }


    public function getAirports(){
        $this->parms['name'] = $this->parms['name']??null;
        switch($this->parms['name']){
            case 'Jon':
                echo "Howdy Jon, How are things?";
                break;

            case 'Sukhrob':
                echo "Salom Sukhrobjon, hammasi yaxshimi?";
                break;

            default:
                echo "No name was passed";
                break;
        }



    }


}

$father = new Father();
?>
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<<<<<<< HEAD
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="mybody">
<h1>PHP Questions</h1>
<?php

$cars = ["<span class='text'>What is OOP?</span>","<span class='text'>What is a String?</span>",
        "<span class='text'>What is a Boolean?</span>","<span class='text'>What is an Array?</span>",
        "<span class='text'>What is Float?</span>", "<span class='text'>What is Integer?</span>",
        "<span class='text'>What is Object</span>", "<span class='text'>What is Resource?</span>"];

$randomnumber =array_rand($cars, 1);
echo $cars[$randomnumber];
?>

<form>
        <input type="text" placeholder="">
        <input type="submit">
</form>

<style>
    .text{
        background-color: #f5c6cb;
        border-radius: 30px;
        border: 1px solid #0b2e13;
        padding: 2px;

    }
    .mybody{
        background-color: #7abaff;
        width: 230px;
        height: 340%;
        margin: 2px;
    }
</style>
</div>
</body>
</html>
=======
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <div class="cols">
        <a href="index.php?name=Jon">Jon Toshmatov</a>
    </div>
    <div class="cols">
        <a href="index.php?name=Sukhrob">Sukhrob Shadiyarov</a>
    </div>

    <div class="clearfix"></div>

    <p>
        <hr>
        <?=$father->getAirports()?>
    <hr>
    </p>

</div>


<style>
    .cols{
        width:300px;
        border:1px solid black;
        background-color: #46060c;
        margin:auto;
        float: left;
        text-align: center;
    }

    a{
        color: #ffcf81;
    }
</style>

</body>
</html>
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea
