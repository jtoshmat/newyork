<?php
/*$students = file_get_contents('files/students.txt');
$students = str_replace(';','<hr>', $students);
echo $students;*/
//$oshxona = array('qoshiq','qozon','sanchqi','kabgir'); //depreciated
//         0        1      2         3
/*$oshxona = ['qoshiq','qozon','sanchqi','kabgir']; //recommended

$yashash_xonasi = ['tv','divan','stol','stul','lampa','soat'];

$jajjilar_xonasi = ['beshik','butylka',159,'uynchoqlar',null,'toshak',true,'adyol'];*/
/*$mevalar = ['olma','behi','anor','olma','anor','gulos','banana','hurmo','shaftoli','apelsin','lemon','mandarin','gulos','tut'];

foreach($mevalar as $meva){

    if ($meva == 'anor'){
        echo "<img class='mevalar' src='https://www.pomwonderful.com/content/dam/pom/images/products/fresh-fruit/fruit.png'> <hr>";
    }elseif($meva == 'banana'){
        echo "<img class='mevalar' src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Bananas.svg/1024px-Bananas.svg.png'> <hr>";
    }
    else{
        echo "This is $meva <hr>";
    }



}

?>

<style>
    .mevalar{
        width: 50px;
    }
</style>
*/
/*$students = file_get_contents('files/students.txt');
$students = str_replace(';','<hr>', $students);
echo $students;*/
//$oshxona = array('qoshiq','qozon','sanchqi','kabgir'); //depreciated
//         0        1      2         3
/*$oshxona = ['qoshiq','qozon','sanchqi','kabgir']; //recommended

$yashash_xonasi = ['tv','divan','stol','stul','lampa','soat'];

$jajjilar_xonasi = ['beshik','butylka',159,'uynchoqlar',null,'toshak',true,'adyol'];*/
$numbers = range(1, 100);
//And bolsa && ---> AND
//Or bolsa || --> OR
/*$students = file_get_contents('files/students.txt');
$students = str_replace(';','<hr>', $students);
echo $students;*/
//$oshxona = array('qoshiq','qozon','sanchqi','kabgir'); //depreciated
    //         0        1      2         3
/*$oshxona = ['qoshiq','qozon','sanchqi','kabgir']; //recommended

$yashash_xonasi = ['tv','divan','stol','stul','lampa','soat'];

$jajjilar_xonasi = ['beshik','butylka',159,'uynchoqlar',null,'toshak',true,'adyol'];*/
//$numbers = range(1, 100);
//And bolsa && ---> AND
//Or bolsa || --> OR
/*foreach ($numbers as $number){
    if ($number%9==0 || $number%19==0){
        echo "<div class='yes'>$number</div>";
    }else{
        echo "<div class='no'>$number</div>";
    }
}*/
$nine=[];
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
echo "<hr>";

/*$numbers = range(1, 100);
$ok=[];
$no=[];
foreach ($numbers as $number) {
    if ($number%9 == 0) {
        $ok[] = "9 ga bo'linmaydi";


} else {
        $ok[] = $number;
    }
}
echo "<pre>";
print_r($ok);
echo "<hr>";*/
?>

<!--
<style>
    .yes{
        width: 70px;
        height: 70px;
        background-color: darkgreen;
        color: whitesmoke;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin:10px;
        border-radius: 50%;
    }
    .no{
        width: 70px;
        height: 70px;
        background-color: #e7e7e7;
        color: whitesmoke;
        text-align: center;
        display: inline-block;
        line-height: 50px;
        font-size: 150%;
        margin:10px;
        border-radius: 50%;
    }
</style>
-->