<?php

$manchester = $_POST['manchester']??null;
echo $manchester;
echo "<pre>";
echo "sukhrobshadiyarov@outlook.com";
echo "<hr>";

$result = (strpos($manchester,'@outlook.com')===false);


var_dump($result);