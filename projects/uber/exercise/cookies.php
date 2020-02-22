<?php
$name = "SomeName";
$value = 100;
$expiration = time()+(60*60*24*7);
setcookie($name,$value,$expiration);
if(isset($_COOKIE["SomeName"])){
    $someOne = $_COOKIE["SomeName"];
    echo $someOne;
}else{ $someOne = "";}
