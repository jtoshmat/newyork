<?php
const BR ='<br/>';
/*$cars = array('Toyota'=>'Camry', 'Chevrolet'=>'Suburban','Ravon'=>'Cobalt');
$numbers = range(1,5);
foreach ($cars as $company => $mark){

    echo $numbers[0]++.'): '.$company.' '.$mark.'<br/>';
}
echo '<br/>';
print_r($cars);
echo BR;
function multiply($a,$b,$c){return ($a * $b)/($a-$c);}
$numbers = range(10,1000);
$num = [1,2];
foreach ($numbers as $number){

echo $num[0]++.'):'.'('.$number.'*2)/('.$number.'-3)='.multiply($number,2,3).BR;}
*/
 $cars =['Audi','BMW','Mercedes','Alfa'];
 $numbers =[1,2];
 foreach($cars as $car){
     echo $numbers[0]++."):";
     drive($car);
     echo $numbers[0]++."):";
     stop($car);
     echo $numbers[0]++."):";
     backup($car);
     echo $numbers[0]++."):";
     park($car);
 }
 function drive($cars){
     echo $cars." drive <hr>";
};
 function stop($cars){
     echo $cars." stop <hr>";
 };
 function backup($cars){
     echo $cars." backup<hr>";
 };
 function park($cars){
     echo $cars." park<hr>";
 };

