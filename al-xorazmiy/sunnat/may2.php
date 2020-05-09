<?php
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
$result = str_replace('itvacha','it****cha', $text);
echo "<hr>";
var_dump($result);*/

/*<<<<-----1---->>>>*/
$text = "hey wasap how r u?";
echo "<hr>";
echo $result = str_pad($text,37,"..thank you im good");
echo "<hr>";
/*<<<<-----2---->>>>*/
$email = "sunnat@icloud.com";
echo $result = substr($email,7,10);
echo "<hr>";
$email = "sunnat@icloud.com";
echo $result = substr($email,0,6);
echo "<hr>";

/*<<<<-----3---->>>>*/
$text = "yo why u talking shit";
echo $result = str_replace("shit","****",$text);



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