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
//str_replace('itvacha', 'it****cha', $text);-- stringdagi so'zni almashtiradi
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
/*
//ASS#1
echo "<pre>";
$text = "Hello, How are you? Thanks for asking, I am good.";
$text1 = "Kazakhstan";
$text2 = "jontoshmatov@yahoo.com";

echo "<pre>";
$result = strpos($text,'?');
var_dump($result);

echo "<pre>";
$result = substr($text, 0,19);
var_dump($result);
echo "<pre>";
$result = substr($text, 19) ;
var_dump($result);

//ASS#2
echo "<pre>";
$r = strlen($text1);

echo "<pre>";
$result = substr($text1,0,1);
chrome://history/

echo "<pre>";
$length = strlen($text1);
$result = substr($text1,$length-1);
var_dump($result);

//ASS#3
echo "<pre>";
$result = str_replace('toshmatov', '*******', $text2);
var_dump($result); */

$text1 = "Assalomu alaykum! Yaxshimisiz? Vaalaykum assalom! Rahmat yaxshi.";
$text2 = "India";
$text3 = "shburkutboyev@gmail.com";

echo 'Ass#1';
echo '<br>';
$qmp = strpos($text1,'?');
echo 'Savol:  substr($text1,0,$qmp+1)';

echo "<br>";
echo "Javob:  ".substr($text1,$qmp+1);
//echo $ans;
echo "<hr>";


echo 'Ass#2';
echo '<br>';
$l = strlen($text2);
echo "Birinchi harfi: ".substr($text2,0,1);
echo '<br>';
echo "Oxirgi harfi: ".substr($text2,$l-1,$l);
echo '<hr>';

echo 'Ass#3';
echo '<br>';
echo str_replace('shburkutboyev','*******',$text3);
echo '<hr>';




