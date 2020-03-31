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
<?php
$scannedFiles = scandir('imgs');
$files = [];

foreach ($scannedFiles as $file) {
    if (!in_array(trim($file), ['.', '..'])) {
        $files[] = $file;
    }
}
?>

<!-- Page Content -->
<div id="mycard">
    <div class="container">



        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">

            <?foreach ($files as $file):?>
                <div class="col-lg-3 col-md-4 col-6">
                    <img class="img-fluid img-thumbnail" src="imgs/<?=$file?>" alt="">
                </div>
            <?endforeach;?>

        </div>

        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">
            <img class="myheader_title" src="happy_bithday_mom.png">
        </h1>

    </div>

</div>


<!-- /.container -->


<style>
    .img-thumbnail{
        width: 250px;
        height: 250px;
        background-color: #cb6692;
    }
    .myheader_title{
        position: relative;
        left: 230px;
        width: 750px;

    }

    #mycard{
        background-image: url("https://i.ya-webdesign.com/images/birthday-background-png-4.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width: 1610px;
        margin:auto;
        background-color: #ec89b6;
        height: auto;
        border: 1px solid black;
        text-align: center;
        box-shadow: white 5px 5px 5px 5px;
    }
    body{
        background-color: #ec89b6;
    }
</style>

</body>
</html>
