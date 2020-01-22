<?php
/*echo "Hello World!";*/
//print("hello there");
//echo "Hello <strong> WORLD </strong>";
//$name ='Asror Umarov';
//$age = 24;
//$location = 'Brooklyn, NY';
//echo "My name is $name  and Im $age years old, I live in $location";

$names = ['Jon,','Abdulbari','Rustam','Dilafruz','Oybek','Asror','Umida'];
$ages =  [23,34,54,65,76,23, 81];
$location = ['New York','Chicago','London','Mexico City','Moscow','Kiev','Tokio', 'Tashkent'];
foreach ($names as $i=>$name){
    echo "My name is <span> $name </span> and I am <span>$ages[$i]</span> years old and I live <span>$location[$i]</span> <hr>";

    if($ages[$i] > 65){
        echo "< - - AARP member";
    }

    echo "<hr>";
}
?>

<style>

    span{
        background-color: rgba(47, 108, 40, 0.8);
        padding: 5px;
        margin: 2px;
        border-radius: 10px;
    }
    body{
        background-color: #85040a;
        color:#ffce5c;
        font-size: 30px
    }
</style>
