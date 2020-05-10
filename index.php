<?php
$numbers = range(1,100);

foreach ($numbers as $number){
    if ($number%13!=0 && $number%14!=0){
        echo $number."<hr>";
    }else{

    }
}