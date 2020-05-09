<?php
$numbers = range(1,50);
foreach ($numbers as $number){
    if($number%19==0 or $number%9==0){
        echo "<div class='nineteen'>$number</div>";
        echo "<br>";
    }else{
        echo "<div class='nine'>$number</div>";

    }
}
echo "<pre>";
var_dump($number);




?>
<style>

    .nineteen{
        width: 50px;
        height: 50px;
        background-color: #0e6fbb;
        border-radius: 50%;
        text-align: center;
        display: inline-block;
    }
    .nine{
        width: 50px;
        height: 50px;
        background-color: #d9460e;
        border-radius: 50%;
        text-align: center;
        display: inline-block;
    }
</style>
