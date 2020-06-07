<?php

$txt = "Hello World!";

//returns a string with backslashes in front of specified characters
echo addcslashes($txt, "Wl") . "<br>";

//adds backslashes in front of predefined characters like single, double quote, backslash or NULL
// makes it legal for database and database quiries storage
echo addslashes('Hello World "!"') . "<br>";

//converts a string into hexadecimal values
echo bin2hex($txt) . "<br>";

//removes characters from the right end.
//if not specified ("\0", "\t", "\n", "\xOB", "\r", " ".
echo chop($txt, "World!") . "<br>";
echo chop($txt . " ") . "<br>";

//returns ascii characters from different values
//decimal (numbers), octal (characters), hexadecimals(letters)
echo chr(0x52) . "<br>";

//splits a string into a series of smaller parts
//default length is 76, default end is \r\n
echo chunk_split($txt, 5, ".") . "<br>";

//first function decodes
//second function encodes
echo convert_uudecode("hjewbfwlekghj") . "<br>";
echo convert_uuencode($txt) . "<br>";

// 4 = unused characters
// 3 = rumbles and non-repetitive
// 2 = equal to zero
// 1 = greater than zero
// 0 = default mode
echo count_chars($txt, 4) . "<br>";
echo count_chars($txt, 3) . "<br>";
 # print_r(count_chars($txt, 2));
 # print_r(count_chars($txt, 1));
 # print_r(count_chars($txt, 0));

//calculates a 32-bit crc for a string
printf(crc32("Hello World!"). "<br>");

//crypt ???

//converts a string into an array
//$str = 'two, three, one, four';
//print_r(explode('.', $str, 0));

//print_r(get_html_translation_table() );

//print_r(get_html_translation_table(HTML_ENTITIES));

//opposite of bin2hex
echo hex2bin("347029047203") . "<br>";

//opposite of explode, turns an array into a string with dividers.
//similar to join()
$trt = array('hello', 'world', '!');
echo implode('/', $trt) . "<br>";

echo lcfirst("Hello World!") . "<br>"; //makes first letter of a string into lowercase

//ucwords () = first character of each work to uppercase
//strtoupper () = full string to uppercase
//strtolower () = full string to lowecase

echo levenshtein("ice cream", "maerc eci", 10, 20, 30);
echo "<br>";

//removes a characters from left side of a string
echo ltrim("ice cream", "i") . "<br>";
//rtrim() = removes from right side
//trim() = removes whitespace, single quote, double quote amd backslashes

echo md5("burrito") . "<br>";

//calculates how a string sound in english
echo metaphone ("water") . "<br>";

echo nl2br("hello. \nNeighbor") . "<br>";

echo number_format("1234142415", 2 ) . "<br>";

//returns value of first character
echo ord("buritto");

print "Hello World";
echo "<br>";
//outputs one or more strings

//printf() = outputs formatted string

echo similar_text("ice cream", "ice ice") . "<br>";

//calculates the sound of a string
echo soundex("pizza") . "<br>";

//sprintf() = writes a formatted string to a variable

echo str_replace("ice", "hot", "ice water"). "<br>";

echo str_repeat("bravo ", 9) . "<br>";

echo str_shuffle("psychology");

echo stripcslashes("i/ce crea/m") . "<br>";

echo stripos("blue sky ice cold water" , "ice");

//makes uppercase to lowercase
echo strtolower("cheese BuRger") . "<br>";

//vfprintf(); converts a formatted list into specified output stream

echo wordwrap("fagfofgafgoaf oaefogd foads gvoads svfgaogv", 6, "<br>\n");


?>

















