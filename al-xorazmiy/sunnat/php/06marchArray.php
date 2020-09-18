<?php
$numbers = range(99,181);
$nineteen = [];
$nine = [];
foreach ($numbers as $number){
    if ($number%19==0 ||$number%4!==0){
        $nineteen[] = $number;
        $nine[] = $number;
    }
}
echo "<pre>";
print_r($nineteen);
echo "<hr>";
print_r($nine);
