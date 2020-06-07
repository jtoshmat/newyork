<?php
$keyword = $_POST['keyword']??null;
$ref = $_SERVER['HTTP_REFERER'];
echo "<hr>";
echo $ref;
echo "<hr>";


$whitelist = 'http://newyork.local';
if (strpos($ref, $whitelist) === false){
    exit("You are not authorized requester, please leave");
}

echo "<h1>Welcome to the Authorized Page!</h1>";