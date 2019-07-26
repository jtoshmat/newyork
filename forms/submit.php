<?php
    $parms = $_POST;
    //$parms = $_GET;
    ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="mydiv">
    <?php
        echo "Welcome ". $parms['first_name'];
    ?>
</div>


<style>
    #mydiv{
        background-color: #f1b0b7;
        width: 300px;

        height:200px;
    }
</style>


</body>
</html>
