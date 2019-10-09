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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
