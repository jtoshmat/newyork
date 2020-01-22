<?php
$names = ['Jon,', 'Abdulbari', 'Rustam', 'Muhamadjon', 'Dilafruz', 'Oybek', 'Asror', 'Umida'];
$ages =  [23,34,54,65,76,23,53, 81];
$location  = ['New York','Chicago','London','Mexico City','Moscow','Kiev','Tokio', 'Tashkent'];
foreach ($names as $i=>$name){
    echo "My name is <span>$name</span> and I am <span>$ages[$i]</span> years old and I live in <span>$location[$i]</span>";

    if ($ages[$i] > 65){
        echo "< -- AARP member";
    }

    echo "<hr>";

}
?>

<style>

    span{
        background-color: #008500;
        padding:5px;
        margin: 2px;
        border-radius: 10px;
    }

    body{
        background-color: #490000;
        color: #ffce5c;
        font-size:30px;
    }
</style>
