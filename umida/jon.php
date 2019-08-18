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



if  (count($_POST))  {
    $parms = $_POST;

    $number = $parms ["number"];
    $whatype = $parms ["whatype"];

    if ($whatype==1) {
        $result = $number * 1.609 . " km";
    }
    else{
       $result = $number/1.6. " mls";
    }





    echo $result;

}


?>

<h3>Calculate mile/km</h3>
<form method="post">
    <p><input name="number"></p>
    <p>
        Select Type:
        <select name="whatype">
            <option value="1">Mile</option>
            <option value="2">Km</option>
        </select>
    </p>
    <p><button>Calculate</button></p>
</form>

</body>
</html>