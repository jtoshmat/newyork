<?php
$numbers = range(1, 200);
/*$nine=[];
$nineteen=[];
foreach ($numbers as $number){
    if ($number%9 == 0){
        $nine[] = $number;
    }
    if ($number%19 == 0){
        $nineteen[] = $number;
    }
}
echo "<pre>";
print_r($nine);
echo "<hr>";

echo "<pre>";
print_r($nineteen);
echo "<hr>";*/
/*$num9or19=[];
foreach ($numbers as $number){
    if ($number%9 == 0 OR $number%19 ==0){
        $num9or19[] = $number;
    }
}
echo "<pre>";
print_r($num9or19);
echo "<hr>";*/
/*$no_9_19=[];
foreach ($numbers as $number){
if ($number%9 !== 0 AND $number !== 19){
    $no_9_19[] = $number;
}
}
echo "<pre>";
print_r($no_9_19);
echo "<hr>";*/
$ok=[];
$no=[];
foreach ($numbers as $number) {
    if ($number%9 == 0) {
        $nine[] = $number;
}   elseif ($number%19 == 0){
        $nineteen[]= $number;
}   else{
        $no[]= $number;
    }
}
echo "<pre>";
print_r($no);
echo '<hr>';
print_r($nine);
echo '<hr>';
print_r($nineteen);



