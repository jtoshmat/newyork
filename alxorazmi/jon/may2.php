<?php
//Data types
//String
//integer = -10000000 to 100000000 yani toliq sonlar
//boolean
//float
//array
//constant
/*
$shu_yil = 2020;
$yoshim = 40;
$tugilgan_yilim = $shu_yil - $yoshim;


echo $tugilgan_yilim;*/
//Boolean = true yoki false  yoki 0 = false 1 = true
//float - 2.34 6.453  pI = 3.1433333
//constant
//NULL
/*
define('COUNTRY','Uzbekistan');



echo "Uzbekiston vatanim: ". COUNTRY;

 echo "<br>";

define('COUNTRY','USA');

echo "Uzbekiston vatanim: ". COUNTRY;*/
//NULL is not empty either, zero emas
//$cars = ['Audi','Alfa Romeo','BMW','Jiguli','Nexia'];


//String:
//strlen($comment) -- bu stringnig nechta character sonni aniqladyi
//str_word_count($text); bu stringnig nechta sozlar sonni aniqladyi
//Facebookka biz commentariiya tashimiz
//str_pad($text,12, 'TOSHMATOV') bu stringni uzonligini kattalashitadi padlar toldirgan holda.
//str_pad($text,2, 'DGEFG') - ulchamdan tashqari bugan boshliqni toldirish
//strpos($text, 'computer'); //Finding the needle in the haystack
// substr($text, 0, $sobachka); stringdan belgi yoki soz kesib tashash
//strcmp($text, $text2) - compare two string: if they are equal = 0; -1 usha song 2nchi kamrok, 1 bu koprok
//str_split($text, 20); -  stringni bolish
//str_shuffle('UZBEKISTAN') - stringni aralashtirish
//str_repeat($text, 2) bu stringing shuncha martda takrorlaydi

$text = "Hello, How are you? Thanks for asking, I am good.";


//Assignment #1
$suroqni_joilashgan_orni = strpos($text, '?'); //18
$question = substr($text, 0, $suroqni_joilashgan_orni+1);
$answer = substr($text, $suroqni_joilashgan_orni+1);

echo "<hr>";

//Assignment #3
$email = 'jontoshmatov@yahoo.com';
$newemail = str_replace('toshmatov','****', $email);
echo $newemail;







/*
 * 1) $text = "Hello, How are you? Thanks for asking, I am good.";
 * 2) $email = 'jontoshmatov@yahoo.com';
 * 3) $country = 'Uzbekistan';
 *
 * Assignment #1
 *  1) Write the question
 *  2) Write the answer
 *
 * Assignment #2
 *  1) write the 1st charachter of $country
 *  2) write the last character of $country
 *
 * Assignment #3
 *  1) write in this format --> jon********@yahoo.com
 *
 *
 */





