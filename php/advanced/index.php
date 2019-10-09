<?php
echo "Hello World";

/*
PHP Basics:
What is a Variable and types of variables
 *String.
 * Integer.
 * Float(floating point numbers - also called
 * Boolean.
 * Array.
 * Object.
 * Null.
 * Resource.
*/
/*String and Variables*/
$names = ['Umida','Jeff','Jessica'];
foreach ($names as $name) {
    $text = "$name is simply dummy text of the
 printing and typesetting industry. $name has
 been the industry's standard dummy text ever since 
 the 1500s, when an unknown printer took a galley of 
 type and scrambled it to make a type specimen book. 
 $name has survived not only five centuries, but $name also 
 the leap into electronic typesetting, remaining
 essentially unchanged. $name was popularised in the 
 1960s with the release of Letraset sheets containing 
 $name passages, and more recently with desktop
 publishing software like Aldus PageMaker including 
 versions of $name.";
    echo "<hr>";
    echo "$text";
};
echo "<hr>";
/*Arrays*/
$person = ['name' => 'Umida', 'age' => '25', 'location' => 'Brooklyn', 'degree' => 'Bachelors'];
echo "Hello everyone! My name is {$person["name"]} years old. I am {$person["age"]}. I live in {$person["location"]} and my degree is {$person["degree"]}.";
echo "<hr>";
echo $person['location'];
echo '<hr>';

$countries = ['Uzbekistan','United States of America','Korea','Saudi Arabia','Japan','Malasia','Switzerland'];
foreach ($countries as $position => $country){
    echo $position.":". $country;
    echo '<hr>';
}
$countries = ['Uzbekistan','United States of America','Korea','Saudi Arabia','Japan','Malasia','Switzerland'];
echo count($countries);
echo '<pre>';
echo sizeof($countries);
echo "<hr>";

$Umida = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($Umida, CASE_UPPER));
echo "<hr>";
$Umida = ['BMW', 'Toyota', 'Camry', 'Jip', 'Lexus', 'Bike'];
print_r(array_chunk($Umida, 2));
echo "<pre>";
print_r(array_chunk($Umida, 2, true));
echo '<hr>';
$cars = ['BMW','HONDA'];
$found = (isset($cars[1]));
var_dump($found);
echo "<hr>";

Class Car{
    public $make;

    public function drive(){
        return "The $this->make is driving";
    }
    public function backup(){
        return "The $this->make is backing up, please be careful";
    }
    public function turning(){
        return "The $this->make is turning";
    }
}

$car = new Car();
$car->make = 'Honda';
echo $car->drive();
echo '<hr>';
$car->make = "Mercedes S600 Maybach";
echo $car->backup();
echo '<hr>';
echo '***************************************************************************************';
echo '<hr>';
$car = new Car();


$car->make = "Honda";
echo $car->turning();
echo "<hr>";

$car->make = "Volga GAS 31";
echo $car->backup();
echo "<hr>";

$car->make = "Audi";
echo $car->backup();
echo '<hr>';


$ages = ["samarkand" => 1,2,73,56,4,5,6,7,3.9];
echo "<hr>";
var_dump($ages);
foreach ($ages as $age){
    echo "<pre>";
    echo $age;
}
echo '<hr>';
$a = 9;
$b = 7;
$c = $a / $b;
var_dump($c);
echo "<hr>";

function calculate($num1, $num2, operator){
    return eval("return $num1 $operator $num2;");
}

$numbers = range(1, 10);
$operators = ['/','+','-','*','%'];

//We will need two number and operator
//Then we will call the functions based on operator
​
​
​
/*echo calculate(10,5,'/') ."<hr>";
echo calculate(10,5,'*') ."<hr>";
echo calculate(10,5,'+') ."<hr>";
echo calculate(10,5,'-') ."<hr>";
echo calculate(10,5,'%')."<hr>";*/
​
​
function calculate($num1, $num2, $operator){
    return eval("return $num1 $operator $num2;");
}
$numbers = range(1, 100);
$operators = ['/','+','-','*','%'];
​
$row = 0;
foreach ($numbers as $num1=>$num2){
    $row++;
    $onum = array_rand($operators);
    $operator = $operators[$onum];
    $output = round(calculate($num1,$num2, $operator),2);
    $result = "<span class='nums'>$row)</span> $num1 $operator $num2 = ".$output."<hr>";
    echo $result;
}
​


/*
If we use "" double quote PHP checks every single sentence to execute.
If you use '' single quote it works fast but does not execute
the variable when you select it in your text.
So , let's say you used only single quotes while you writing your variable
to execute the var$ you need to use .'$var_name'. like this. */

//comment styles in PHP
//This is a single line comment
/*
   * These are multi-line comments
   * Blah blah blah
 *  */
#This is a C-style comment

//@TODO Umida Gee:Umida you need to learn PHP faster. You have your exam soon...



