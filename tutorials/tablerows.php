<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$count = 0;
for($i=0; $i<=8; $i++) {
    for($y=0; $y<9; $y++){
        $count++;
        if ($count%7==0){
            echo "<div class='divs special'>$count</div>";
        }else if ($count%10==0){
            echo "<div class='divs ten'>$count</div>";
        }else{
            echo "<div class='divs'>$count</div>";
        }

    }
}
?>
<style>

    .divs{
        background-color: #c10f0f;
        display: inline-block;
        margin: 20px;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        text-align: center;
        line-height: 100px;
        font-size: 30px;
        font-weight: bold;
        color: aliceblue;
        border: 1px solid #1d0207;
    }

    .special{
        background-color: #1d4a5e;
    }

    .ten{
        background-color: #5e7d1c;
    }







</style>
</body>
</html>