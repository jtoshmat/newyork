<?php

$txt  = array("pizza"=>"17", "burrito"=>"6", "cheeseburger"=>"6");
$txt2 = array("pizza", "buritto", "cheeseburger", "ice cream");
$txt3 = array("one", "two", "cheeseburger", "ice cream");
$txt4 = array("pizza"=>"33", "burrito"=>"6", "ice cream"=>"2");
$txt5 = array("one", "two", "three", "four");
$txt6 = array("one", "two", "two", "three");
$txt7 = array("martin"=>"34", "luke"=>"22", "hanna"=>"34");
$keys = array("a", "b", "c", "d");
$num1 = array(10, 10);



print_r(array_change_key_case($txt, CASE_UPPER));
echo "<br>";

//splits an array into chunks of new arrays
print_r(array_chunk($txt2, 3));

print_r (array_combine($txt2, $txt3));
echo "<br>";

print_r(array_count_values($txt2));
echo "<br>";

print_r (array_diff($txt2, $txt3));
echo "<br>";

print_r(array_fill_keys($keys, "ice"));
echo "<br>";

print_r(array_flip($txt));
echo "<br>";

print_r(array_intersect($txt2, $txt3));
echo "<br>";

print_r(array_intersect_assoc($txt, $txt4));
echo "<br>";

print_r(array_intersect_key($txt, $txt4));
echo "<br>";

print_r(array_key_exists("17", $txt));
echo "<br";

print_r (array_keys($txt, "17", true));
echo "<br>";

print_r(array_merge($txt2, $txt3));
echo "<br>";

print_r(array_merge_recursive($txt2, $txt3));
echo "<br>";

print_r(array_multisort($txt2));
echo "<br>";

print_r(array_pad($txt2, 7, "bagel"));
echo "<br>";

print_r(array_pop($txt5));
echo "<br>";

print_r(array_product($num1));
echo "<br>";

print_r(array_push($txt5, "seven", "eight"));
echo "<br>";

print_r(array_reverse($txt));
echo "<br>";

print_r(array_search("pizza", $txt2));
echo "<br>";

print_r(array_shift($txt2));
echo "<br>";

print_r(array_slice($txt2, 2));
echo "<br>";

print_r(array_sum($num1));
echo "<br>";

print_r(array_unique($txt6 , SORT_STRING));
echo "<br>";

print_r(array_unshift($txt3, "blue"));
echo "<br>";

arsort($txt7); //???
echo "<br>";

echo asort($txt7);
echo "<br>";

echo count($txt2);
echo "<br>";

echo current($txt2);
echo "<br>";

echo end($txt2);
echo "<br>";

echo in_array("pizza", $txt2);
echo "<br>";

echo key($txt2);
echo "<br>";

echo ksort($txt, SORT_NUMERIC);
echo "<br>";

echo natcasesort($txt2);
echo "<br>";

echo next($txt2);
echo "<br>";

echo prev($txt2);
echo "<br>";

print_r (range(0, 5, 3));
echo "<br>";

echo reset($txt2);
echo "<br>";

echo sizeof($txt2);
echo "<br>";











