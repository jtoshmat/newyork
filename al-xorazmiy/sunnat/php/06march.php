<?php
$numbers = range(1,100);
foreach ($numbers as $number){
    if($number%19!==0 and $number%9!==0){
        echo "<div class='nineteen'>$number</div>";
    }else{
        echo "<div class='nine'>$number</div>";
    }
}
echo "<pre>";
var_dump($number);
?>
<style>

    .nineteen{
        width: 70px;
        height: 70px;
        background-color: #0e6fbb;
        color: whitesmoke;
        border-radius: 50%;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin: 10px;
    }
    .nine{
        width: 70px;
        height: 70px;
        background-color: #2ebb37;
        color: whitesmoke;
        border-radius: 50%;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin: 10px;
    }
</style>
