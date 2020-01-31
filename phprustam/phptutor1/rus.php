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


    <?php
        $isMale = true;
        $isTall = false;
        if ($isMale && $isTall){
            echo "You are a tall male";
        }
        elseif ($isMale && !$isTall){
            echo "You are a short male";
        }
        elseif (!$isMale && $isTall){
            echo "You are not male but are tall";
        }
        else{
            echo "You are not male and not tall";
        }
    ?>
</body>
</html>