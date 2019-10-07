<?php
$parms = $_POST??null;
$result = null;

if ($parms){
    $number = (int) $parms['number'];
    // 1 = kg and 2 = pound
     $option = (int) $parms['option'];

    if ($option ==1){
        $result = ($number * 2.20462);
    } else{
        $result = ($number / 2.20462);
    }

    $result = round($result,2)??null;

}

