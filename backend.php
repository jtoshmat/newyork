<?php

if (count($_POST)) {
    $parms = $_POST;

    $number = $parms ["number"];
    $whatever = $parms["whatever"];

    if ($whatever==1){
        $result = $number * 1.609 . " km";
    }

    else{
        $result = $number/1.6. " mls";
    }

    echo $result;



}


?>