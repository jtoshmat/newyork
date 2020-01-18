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
                <p>Convert <input required="required" type="number" name="number" value="<?=$parms['number']??null?>">
                To Mile:  <input type="radio" name="option" value="1">
                    &nbsp
                To Km:  <input checked="checked" type="radio" name="option" value="2">
                    &nbsp
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