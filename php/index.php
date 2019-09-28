<?php

$numbers = range(32, 100);

foreach ($numbers as $number){
    echo "Faranheit: <span class='degree'> $number </span> is <span class='degree2'>".convertToCelcius($number)."</span> C";
    echo "<hr>";
    echo "Celcius:$number is ".convertToFaranheit($number)." F";
    echo "<br>";
}


function convertToCelcius($number){
   $result = ($number - 32) * 5/9;
   return round($result,2);
}

function convertToFaranheit($number){
    $result = ($number * 9/5) + 32;
    return round($result,2);

}

?>

<style>
    .degree{
        background-color:red;
        color:yellow;
        border:1px solid black;
        border-radius:10px;
        box-shadow: #000 5px 5px 5px 5px;
        padding:5px;
        margin:2px;
    }

    .degree2{
        background-color:blue;
        color:yellow;
        border:1px solid black;
        border-radius:10px;
        box-shadow: #000 5px 5px 5px 5px;
        padding:5px;
        margin:2px;
    }

</style>
