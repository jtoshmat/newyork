<?php
$numbers = range(1,5);
$randomoperator = ['/','*','+','-','%'];
foreach ($numbers as $row=>$number){
    $row++;
    echo "$row): ".calculate($number,rand(5,10), $randomoperator[0]) ."<hr>";
}
function calculate($a, $b, $operator){
    return "$a $operator $b  =".eval("return $a  $operator  $b;");
}

/*echo "$a * $b = ". multiply($a,$b);
echo "<hr>";
echo "$a + $b = ".  addition($a,$b);
echo "<hr>";
echo "$a / $b = ".  divide($a,$b);
echo "<hr>";
echo "$a - $b = ".  subtraction($a,$b);
echo "<hr>";

function multiply($a, $b){
    return $a * $b;
}

function subtraction($a, $b){
    return $a - $b;
}

function divide($a, $b){
    return $a / $b;
}

function addition($a, $b){
    return $a + $b;
}*/
