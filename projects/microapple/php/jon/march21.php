<?php

$numbers = range(1,100);
foreach ($numbers as $number){
    if ($number%5==0){
        echo "<div class='fifth'>$number</div>";
    }elseif($number%3==0){
        echo "<div class='third'>uch</div>";
    }elseif($number%4==0){
        echo "<div class='third'>uch</div>";
    }else{
        echo "<div>$number</div>";
    }

}
?>


<style>
    div{
        width: 100px;
        height: 100px;
        border: 1px solid black;
        background-color: #840000;
        display: inline-block;
        float: left;
        text-align: center;
        font-size: 250%;
        color: #ffdc6a;
        line-height: 100px;
    }

    .fifth{
        background-color: #006400;
        color: white;
    }
    .fourth{
        background-color: #000000;
        color: #c0d0da;
    }
    .third{
        background-color: #e609b0;
        color: #b6ff4e;
    }
</style>
