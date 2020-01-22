<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>


<?php

$a = 5;
$b = 5;



$numbers = range(900,10000);


foreach ($numbers as $number){
    echo  "$number * 10 = ". multiply($number, 10);
    echo "<br>";
}





function multiply($a, $b){
    return $a * $b;
}


?>

</body>
</html>