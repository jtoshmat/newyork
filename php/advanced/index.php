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
echo '<hr>';
echo sizeof($countries);
