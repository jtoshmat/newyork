<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distance Calculator</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="js/distance.js" type="text/javascript"></script>
</head>
<body>

<?php
include_once 'postdistance.php';
?>
<div class="container">

    <div id="mycalc">

        <div class="form">
            <h3 style="text-align: center">Basic Distance Calculator</h3>
            <form method="post">
<<<<<<< HEAD
<<<<<<< HEAD
                <p>Convert <input required="required" type="number" name="number" value="<?=$parms['number']??null?>">
                <select name="Choose">
                    <option>Choose</option>
                    <option value="1">To KM</option>
                    <option value="2">To Mile</option>
                </select>
=======
                <p>Conver <input required="required" type="number" name="number" value="<?=$parms['number']??null?>">
                To Mile:  <input type="radio" name="option" value="1">
                    &nbsp
                To Km:  <input checked="checked" type="radio" name="option" value="2">
>>>>>>> 2cee4dbbf1ef9c1b4a16e0383effecf12d3ee283
                    &nbsp
=======
                <p>Convert <input required="required" type="number" name="number" value="<?=$parms['number']??null?>">
                    <select name="option">
                        <option disabled selected value="select"> select measurement</option>
                        <option value="1">Kilometer</option>
                        <option value="2">Mile</option>
                    </select>
>>>>>>> e919dc5d533259c9d9b5dc2c760a815035f1142b
                    <button>Convert</button>
                </p>

            </form>

            <div class="result">

                <?php
                    if ($parms){
                        if ($option == 1){
                            echo "$number km is $result miles";
                        }
                        if ($option == 2){
                            echo "$number miles is $result km";
                        }
                    }

                ?>
            </div>
        </div>
    </div>

</div>


<style>

    .result{
        width:100%;
        margin: auto;
        text-align: center;
    }

    form{
        width:100%;
        margin: auto;
        text-align: center;
    }

    #mycalc{
        width: 100%;
        background-color: #f0f0f1;
        margin:auto;
    }


    .result{
        width: 100%;
    }

    .form{
        width: 100%;
    }

    .form{
        width: 100%;
    }
</style>

</body>
</html>