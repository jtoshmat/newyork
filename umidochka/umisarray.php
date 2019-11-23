<?php
// Array_keys : if specified, returns only specified values.
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

echo "<hr>";

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

echo "<hr>";

$array = array("color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large"));
print_r(array_keys($array));

echo "<hr>";
// Array_map : multiplies 3 times.
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
echo "<pre>";
print_r($b);

echo "<hr>";
// Did not understand.
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
echo "<pre>";
$result = array_merge_recursive($ar1, $ar2);
print_r($result);

echo "<hr>";
// Array_merge : Merges the two arrays.
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);

echo "<hr>";
// Array_multisort : Puts the numbers in order.
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4, 5, 6);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);

echo "<hr>";

$input = array(1,2,3,4,5,6,7,8,9);
array_pad($input, 1, 0);
print_r($input);

echo "<hr>";
// Array_pop : Returns the value of the last element and shortens by one last element
$stack = array("orange", "banana", "apple", "raspberry", "pineapple");
$fruit = array_pop($stack);
print_r($stack);

echo "<hr>";
// Array_push : Pushes one or more elements onto the end of array.
$stack = array("orange", "banana");
array_push($stack, 13, "apple", "raspberry");
print_r($stack);

echo "<hr>";
// Array_rand : Strings will appear randomly.
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

echo "<hr>";
// Array_replace_recursive : Replaces the first position.
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple', 'apple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);

echo "<hr>";
// Array_replace : Replaces the strings by position.
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "Umidochka");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);

echo "<hr>";

