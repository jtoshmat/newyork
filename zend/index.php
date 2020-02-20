<?php
error_reporting(E_ALL);
echo "This square is {$square->width}00 centimeters broad.";
echo "<hr>";
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";
echo "<hr>";
$str = 'This is a test.';
$first = $str[8];
echo $first;
echo "<hr>";
$str = 'This is still a test.';
$last = $str[strlen($str)-9];
echo $last;
echo "<hr>";
$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

echo "<hr>";
$str = 'abc';
var_dump($str['1.1']);
var_dump(isset($str['1.1']));
echo "<hr>";
echo addcslashes("zoo['-']", 'z..A');
echo "<hr>";
$str = "O'Reilly?";
eval("echo '" . addslashes($str) . "';");
echo "<hr>";
echo addcslashes('w3resource.com', '3');
echo "<hr>";
echo addslashes('"Thank Y"ou');
echo "<hr>";
$string_name='umida';
echo bin2hex($string_name);
echo "<hr>";
$string_name='jon';
echo print_r(count_chars($string_name,0));

