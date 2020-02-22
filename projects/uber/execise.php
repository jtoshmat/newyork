<?php
/*
$friends =array("Ansor => 5","Rustam","Farhod","Julya",3,true,null,);

unset($friends[7]);
echo "<pre>";
foreach ($friends as $friend){
    echo $friend."<br>";
}*//*
$f1=0;
$f2=2;
$coun=0;

echo $f1."<hr>";
echo $f2."<hr>";

While($coun<=100){
    $f3=$f1+$f2;
    echo $f3."<hr>";
    $f1=$f2;
    $f2=$f3;
    $coun=$coun+1;

}*//*
$f1=0;
$f2=1;
for($count=0;$count<=12;$count++){
    $f3=$f1+$f2;
    $f1=$f2;
    $f2=$f3;
    echo $f3."<hr>";
    }*/
/*
$n=1;
for($a=1;$a<=10;$a++){

    echo $n++."):$a*$a+2*$a+3=".($a*$a+2*$a+3)."<hr>";

}*/
/* Interface - shartnome,meros;
abstract class is a templete - only one abstract can be used;
trait collection of all usefull methods, and tools;
*/

$password = "text";
$hash = "$2y$10$";
$salt = "khursandkhalmanov22048";
$hash_salt = $hash.$salt;
$password = crypt($password,$hash_salt);

echo $password;
