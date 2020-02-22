<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sukhrob's PowerBall</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="css/lottery.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
    <script src="js/lottery.js"></script>
</head>
<body>
<?php
$today = date('m-d-Y');
?>
<div class="container-fluid">
    <div style="height: 100px"></div>
    <div id="lottery">
        <div class="header">
            <img class="logo" src="img/lottery_logo.png">
        </div>
        <div style="height: 50px"></div>
        <div class="winning_numbers_section">
            This week's (<span class="today"><?=$today?></span>) winning numbers are:
        </div>
        <div style="height: 30px"></div>
        <div class="winning_numbers_section">

            <?php
                include_once "lottery_generate_numbers.php";
            ?>

        </div>
        <div style="height: 20px"></div>
        <div class="winning_numbers_section">
            <form method="get">
                <input type="hidden" name="play" value="1">
                <button class="push_button">PLAY</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>