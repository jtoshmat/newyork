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
/*echo "<pre>";
$text = "San manga qara, kimsan ozing...  itvacha, ozinga qarab";
$result = str_replace('itvacha', 'it****cha', $text);
echo "<hr>";
var_dump($result);*/

/*$students = file_get_contents('files/students.txt');
$students = str_replace(';','<hr>', $students);
echo $students;*/


//$oylar = array('yanvar','fevral','mart','aprel', 'may', 'iyun', 'iyul', 'avgust'); //depreciated
//         0        1      2         3
/*$oshxona = ['qoshiq','qozon','sanchqi','kabgir']; //recommended

$yashash_xonasi = ['tv','divan','stol','stul','lampa','soat'];

$jajjilar_xonasi = ['beshik','butylka',159,'uynchoqlar',null,'toshak',true,'adyol'];*/
//$numbers = range(1, 31);
//And bolsa && ---> AND
//Or bolsa || --> OR

/*
foreach ($numbers as $number) {
    if ($number % 3 == 0 OR $number % 7 == 0) {
        echo "<div class='even'>$number</div>";
    } else {
        echo "<div class='odd'>$number</div>";
    }

}


?>

<style>
    .even {
        width: 70px;
        height: 70px;
        background-color: darkgreen;
        color: whitesmoke;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin: 10px;
        border-radius: 50%;
    }

    .odd {
        width: 70px;
        height: 70px;
        background-color: #e7e7e7;
        color: whitesmoke;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin: 10px;
        border-radius: 50%;
    }
</style>*/

//first file

/*
$distance_between_Pittsburgh_and_New_York = 516;
//$distance_between_earth_and_moon = 238900;
$speed = 55/60;
//$moondistance = $distance_between_earth_and_moon / $speed_of_light;
//$venusdistance = $distance_between_earth_and_venus / $speed_of_light/60;
echo "The travels between Pittsburgh and New York $distance <hr>";
//echo "The light travels between earth and Venus is $venusdistance <hr>";
*/



