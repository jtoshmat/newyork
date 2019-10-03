<?php

// here I've learned functions and NULL below

function returnNull(){
    echo __LINE__ .' : '. "Sher is The PHP Hero!";
}

$null = returnNull();
echo __LINE__ .' : '. "<pre>";
echo __LINE__ .' : '. $null;

// Another try below aboput NULL

function returningNull(){

}

echo __LINE__ .' : '. returningNull() * 10;

//now I'm trying Parameters below


function calculateArea($rec_height, $rec_width)
{
    return $rec_height * $rec_width;
}

;

echo __LINE__ .' : '. calculateArea(25, 20);

// try another parameters

function calculateVolume($num1, $num2, $num3)
{
    return $num1 * $num2 * $num3;
}

;

echo __LINE__ .' : '. calculateVolume(25, 20, 10);

// now bu strings va build in functions

$first = "Welcome to the magical world of built-in functions.";

$second = 82137012983;

//Write your code below:

echo __LINE__ .' : '. gettype($first);
echo __LINE__ .' : '. gettype($second);

var_dump($first);
var_dump($second);

// string repeat qiladi
echo __LINE__ .' : '. str_repeat("Sherzod.\n", 3);

// string teskari print qiladi

echo __LINE__ .' : '. strrev(".dozrehS\n");

// string ichidan aniq suz qancha borligini bilvolasiz

$words1 = "Lorem Ipsum is simply dummy text of the printing and
 typesetting industry. Lorem Ipsum has been the industry's standard 
 dummy text ever since the 1500s, when an unknown printer took a 
 galley of type and scrambled it to make a type specimen book.
  It has survived not only five centuries, but also the leap into
   electronic typesetting, remaining essentially unchanged. 
   It was popularised in the 1960s with the release of Letraset 
   sheets containing Lorem Ipsum passages, and more recently with
    desktop publishing software like Aldus PageMaker including 
    versions of Lorem Ipsum.";
echo __LINE__ .' : '. substr_count($words1, "Ipsum");

//todays my goal

$string_var = "Check it out";
echo __LINE__ .' : '. strtoupper($string_var) . "!\n";

echo __LINE__ .' : '. ceil(8.873);
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. pi();
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. getrandmax();
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. rand();
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. rand(1, 52);
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. abs(-1287);
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. round(8723.999);
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. substr_count($string_var, " ");
echo __LINE__ .' : '. "\n";

echo __LINE__ .' : '. strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo __LINE__ .' : '. strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo __LINE__ .' : '. str_repeat("There's no place like home.\n", 3);

echo __LINE__ .' : '. gettype($string_var);
echo __LINE__ .' : '. "\n";
echo __LINE__ .' : '. var_dump($string_var);
//----------------------------------------------------


$first_array = array("sher", 10, "Jon", 35, "Faruh");

echo __LINE__ .' : '. count($first_array);

//arrays

$with_function = array("PHP", "popcorn", 555.55);

$with_short = ["PHP", "popcorn", 555.55];

////////
///
///
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
$glue = "!";
echo __LINE__ .' : '. implode($glue, $message);
$favorite_nums = [7, 201, 33, 88, 91];
print_r($favorite_nums);

//data type CLASS AND OBJECT

class Car {
    public $make;
    public $model;
    public $year;
    public $mileage;
}

$car1 = new Car();
$car1->make = "Acura";
$car1->model = "MDX";
$car1->year = "2019";
$car1->mileage = "20";

$car2 = new Car();
$car2->make = "Alfa Romeo";
$car2->model = "Stelvio";
$car2->year = "2018";
$car2->mileage = "15000";

echo __LINE__ .' : '. $car1;
echo __LINE__ .' : '. "\n";
echo __LINE__ .' : '. $car2;
// yana bir yuli hammasini ichiga oladigan construct masalan


$car1 = new Car("Acura", "MDX", 2019, 20);

echo __LINE__ .' : '. $car1;
echo __LINE__ .' : '. "\n";

// array changing and removing practice
$my_car = [
    "oil" => "black looks bad",
    "brakes" => "new",
    "tires" => "old",
    "filth" => "chumchuq parod qivorgan",
    "wiper fluid" => "full",
    "headlights" => "bright"
];
print_r($my_car);



$my_car["oil"] = "new";
$my_car["tires"] = "new and deep treads";

unset($my_car["filth"]);

print_r($my_car);

/*
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/











