<?php
function validatePIN($pin) {
    return preg_match('#(^[0-9]{4}$)|(^[0-9]{6}$)#',$pin);
}

$jon = validatePIN("12345s");
var_dump($jon);
