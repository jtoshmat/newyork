<?php
$question = "Hello, how are you?";
echo "$question Thanks for asking. I am good.";




$text = "jontoshmatov@yahoo.com";
echo "<pre>";
$result = str_replace('toshmatov',"*********", $text);
var_dump($result);




$text = "Uzbekistan";
echo "<pre>";
$result = strpos ($text, "U");
var_dump($result);




$text = "Italy";
echo "<pre>";
$result = substr($text, 0,1);
var_dump($result);


$text = "Italy";
echo "<pre>";
$length = strlen($text);
$result = substr($text, $length-1, $length);
var_dump($result);





$answer = "Thanks for asking. I am good";
echo "Hello, how are you? $answer.";