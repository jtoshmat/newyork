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
// Array_reverse :
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, false);

print_r($input);
print_r($reversed);
print_r($preserved);

echo "<hr>";
// Count : Counts
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

echo "<hr>";
// Count : counts how many strings or integers are inside of the array.
$input = ['apple', 'banana', 'pineapple','orange'];
print_r(count($input));

echo "<hr>";
// Current : shows whaever is standing first.
$input = ['apple', 'banana', 'pineapple','orange'];
print_r(current($input));

echo "<hr>";
// End : shows whatever is standing last.
$input = ['apple', 'banana', 'pineapple','orange'];
print_r(end($input));

echo "<hr>";
//Extract
$input = ['a'=> 'Umida', 'b'=> 'Gaibullaeva', 'c'=>'Brooklyn'];
extract($input);
print_r("Name is Umida\nLastName is Gaibullaeva\nLocation is Brooklyn");

echo "<hr>";
// In_array : There is a case sensative example.
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
echo "<pre>";
if (in_array("mac", $os)) {
    echo "Got mac";
}

echo "<hr>";
// Array_key_exists : Searches for mentioned string wheather it is inside of an array.
$input = ['Umida', 'Jon', 'Maftuna', 'Saodat', 'Nazira', 'Dilorom'];
array_key_exists('Maftuna', $input);
print_r($input);

echo "<hr>";
// Krsort : Sorts an array by key in reverse order.
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<hr>";


$info = array('coffee', 'brown', 'caffeine', 'cacao');

list($a[0], $a[1], $a[2], $a[3]) = $info;

var_dump($a);

echo "<hr>";

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);

echo "<hr>";
$a = 50;
$b = 10;
if ($a > $b) {
  echo "Hello World";
}
echo "<hr>";
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=20;
}
echo "<hr>";

$x = 5;
while($x <= 10) {
    echo "$x <hr>";
    $x++;
}
echo "<hr>";


$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "<hr>";
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "<hr>";

for ($x = 22; $x <= 30; $x++) {
    echo "The number is: $x <br>";
}

echo "############################################################################################################";
// Strings
print_r (addcslashes("zoo['.']", 'z..A'));

echo "<hr>";

$str = "O'Reilly?";
eval("echo '" . addslashes($str) . "';");

echo "<hr>";

$str = "Is your name O'Reilly?";
echo addslashes($str);
echo "<hr>";
echo "################################################################################################################";
echo "<pre>";
$a = [1 =>'Apple', 3 =>'Cactus', 5=>'Elderflower'] + ['Banana', 'DragonFruit', 'Fig'];
var_dump(count($a));



