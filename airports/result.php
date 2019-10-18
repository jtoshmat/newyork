<?php

$parms = $_POST;
foreach ($parms as $field=>$value){
    echo $field." = ".$value;
    echo "<hr>";
}
