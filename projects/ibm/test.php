<?php

$numbers = range(1, 1000);


for ($i=0; $i<count($numbers); $i++){

    if ($i%2){
        echo "<span class='odd'>$i</span>";
    }else{
        echo $i;
    }
    echo "<hr>";

    if ($i>1 && $i<10){
        echo "#############################################";
    }
    if ($i>20 && $i<30){
        echo "###################";
    }
    if ($i>40 && $i<50) {
        echo "#############################################";
    }
    if ($i>55 && $i<65){
        echo "########";
    }
    if ($i>70 && $i<100){
        echo "###################################";
    }
}

?>

<style>
    .odd{
        background-color: darkred;
        color: #ffea6d;
        padding: 10px;
        border-radius: 50px;
    }
</style>
