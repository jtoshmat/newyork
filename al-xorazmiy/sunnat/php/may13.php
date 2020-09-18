<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planets</title>
    <link rel="stylesheet" href="../../../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/planets.css">
    <link rel="stylesheet" href="../../../fontawesome/css/all.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div id="planets">
    <div class="left">
        <div class="circles" id="sun"></div>
        <div class="circles" id="mercury"></div>
        <div class="circles" id="venus"></div>
        <div class="circles" id="earth"></div>
        <div class="circles" id="mars"></div>
        <div class="circles" id="jupiter"></div>
        <div class="circles" id="saturn"></div>
        <div class="circles" id="uranus"></div>
        <div class="circles" id="neptune"></div>
        <div class="comment1">
            <p><hd>Name</hd>:Sun<br>
                <hd>Mean distance:</hd>from Earth	1 au ≈ 1.496×108 km[4]
                8 min 19 s at light speed<br>
                <hd>Visual brightness:</hd>(V)−26.74[5]<br>
                <hd>Absolute magnitude:</hd>	4.83[5]<br>
                <hd>Spectral classification:</hd>	G2V[6]<br>
                <hd>Metallicity:</hd>	Z = 0.0122[7]
                <hd>Angular size:</hd>	31.6–32.7</p>
        </div>
        <div class="comment2">
            <p><hd>Name:</hd>Mercury<br>
                <hd>Aphelion:</hd>
                0.466697 AU
                69,816,900 km<br>
                <hd>Perihelion:</hd>
                0.307499 AU
                46,001,200 km<br>
                <hd>Semi-major axis:</hd>
                0.387098 AU
                57,909,050 km<br>
                <hd>Eccentricity:</hd>	0.205630[3]</p>
        </div>
        <div class="comment3">
            <p><hd>Name:</hd>Venus<br>
                <hd>Aphelion:</hd>
                0.466697 AU
                69,816,900 km<br>
                <hd>Perihelion:</hd>
                0.307499 AU
                46,001,200 km<br>
                <hd>Semi-major axis:</hd>
                0.387098 AU
                57,909,050 km<br>
                <hd>Eccentricity:</hd>	0.205630[3]</p>
        </div>
        <div class="comment4">
            <p><hd>Name:</hd>Earth<br>
                <hd>Aphelion:</hd>
                0.466697 AU
                69,816,900 km<br>
                <hd>Perihelion:</hd>
                0.307499 AU
                46,001,200 km<br>
                <hd>Semi-major axis:</hd>
                0.387098 AU
                57,909,050 km<br>
                <hd>Eccentricity:</hd>	0.205630[3]</p>
        </div>
        <div class="comment5">
            <p><hd>Name:</hd>Mars<br>
                <hd>Aphelion:</hd>
                0.466697 AU
                69,816,900 km<br>
                <hd>Perihelion:</hd>
                0.307499 AU
                46,001,200 km<br>
                <hd>Semi-major axis:</hd>
                0.387098 AU
                57,909,050 km<br>
                <hd>Eccentricity:</hd>	0.205630[3]</p>
        </div>
    </div>
    <div class="right">
        <form action="may13.php" method="post">
            <label for="fname" class="labels">Name of Planet:</label><br>
            <input type="text" type="text" name="text"><br>
            <label for="lname" class="labels">Distance:</label><br>
            <input type="number" type="number" step="0.0000000001" name="num1"><br>
            <label for="lname" class="labels">Calculate</label><br>
            <input type="text"  name="op" class="op"><br><br>
            <label for="lname" class="labels">Miles:</label><br>
            <input type="number"type="number" step="0.0000000001" name="num2"><br>
            <button class="btn btn-danger">Submit</button>
        </form>
        <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "%"){
            echo $num1 % $num2;
        }

        ?>

    </div>
</div>
<script src="../JS/planets.js"></script>
</body>
</html>
