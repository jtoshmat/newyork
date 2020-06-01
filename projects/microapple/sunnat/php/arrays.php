<?php
//$regions = ['BUKHARA','SAMARQAND','FERGANA','ANDIJON','NAMANGAN','TASHKENT','NAVOIY'];
//echo $regions[0];
/*************************************/
/*$regions = ['BUKHARA','SAMARQAND','FERGANA','ANDIJON','NAMANGAN','TASHKENT','NAVOIY'];
$regions2 = ['ITALY','USA','UK','CANADA','AUSTRALIA','FINLAND','MECCA'];
$allregions = array_merge($regions,$regions2);
echo "<pre>";
print_r($allregions);*/
/*************************************/
/*$cars = ['audi','bmw','mercedes','alfa romeo'];
$find = in_array('bmw',$cars);
echo "<pre>";
var_dump($find);*/
/******************************************/
/*$numbers=[1,2,3,4,5,6,7,8,9,10];
$sum =array_sum($numbers);
echo "<pre>";
print_r($sum);*/
/****************************************/
/*$numbers = range(1,20);
echo "<pre>";
print_r($numbers);*/
/*************************************/
/*$numbers = range(1,10);
$sum = array_sum($numbers);
echo "<pre>";
print_r($sum);*/
/***********************************/
/*$arr = array("FirSt" => 1, "Yog" => "Oil", "Shakar" => "sugar");
print_r(array_change_key_case($arr, CASE_UPPER));*/
/****************************************/
/*$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo "<pre>";
print_r($stack);*/
/****************************************/
/*$stack = array("orange", "banana");
array_pop($stack);
echo "<pre>";
print_r($stack);*/
/****************************************/
/*function cube($n)
{
    return ($n * $n * $n);
}
$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
echo "<pre>";
print_r($b);*/
/************************/
/*$input_array = array('a', 'b', 'c', 'd', 'e');
echo "<pre>";
print_r(array_chunk($input_array, 3));
print_r(array_chunk($input_array, 2, true));
/****************************************/
/*$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'last_name');
echo "<pre>";
print_r($first_names);
/******************************************/
/*$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
echo "<pre>";
print_r($c);
/*******************************************/
/*$array = array(1, "hello", 1, "world", "hi");
echo "<pre>";
print_r(array_count_values($array));
/************************************************/
/*$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);
/************************************/
/*$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);
/********************************/
/*$array = array("size" => "XL", "color" => "gold");
echo "<pre>";
print_r(array_values($array));
/*******************************/
/*$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');
/**********************************************/






