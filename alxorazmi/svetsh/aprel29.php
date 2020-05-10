<?php

$city = "Taskkent";
$republic = "Uzbekistan";

echo "$city (Russian: Ташкент, tr. Tashkent), or Toshkent (Uzbek: Toshkent, Тошкент), is the capital and largest city of $republic, 
as well as the most populated city in ex-Soviet Central Asia with a population in 2018 of 2,485,900. It is located 
in the north-east of the country close to the border with Kazakhstan.
Before Islam influence started in the 8th century AD, $city was influenced by the Sogdian and Turkic cultures 
in its early history. After its destruction by Genghis Khan in 1219, the city was rebuilt and profited from the Silk Road. 
From 18th to 19th century, the city became an independent city-state, before being re-conquered by the Khanate of Kokand. In 1865, 
it fell to the Russian Empire, and became the capital of Russian Turkestan. In Soviet times, 
$city witnessed major growth and demographic changes due to
 forced deportations from throughout the Soviet Union.";


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
strpos($text, 'computer'); //Finding the needle in the haystack
// substr($text, 0, $sobachka); stringdan belgi yoki soz kesib tashash
//strcmp($text, $text2) - compare two string: if they are equal = 0; -1 usha song 2nchi kamrok, 1 bu koprok
//str_split($text, 20); -  stringni bolish
//str_shuffle('UZBEKISTAN') - stringni aralashtirish
//str_repeat($text, 2) bu stringing shuncha martda takrorlaydi
echo "<pre>";
$text = "San manga qara, kimsan ozing...  itvacha, ozinga qarab";
$result = str_replace('itvacha', 'it****cha', $text);
echo "<hr>";
var_dump($result);

