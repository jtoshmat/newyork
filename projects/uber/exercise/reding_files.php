<?php

function increment (&$val){
    $val = $val + 1;}
$val = 1;
increment ($val);
echo $val;