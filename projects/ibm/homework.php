<?php
//echo "Hello everyone!!!";

//print ("Hello my friend");
//$name = 'Nigora';
//$age = 8;
//$location = 'Brooklyn';
//echo "My name is $name and I am $age years old and I live in $location";

$citiesname = ['Tashkent', 'Ashxabad', 'Washington DC', 'Moscow'];
$population = [3000000,1000000,8000000,12000000];
$language = ['uzbek', 'turkman', 'english', 'russia'];

foreach ($citiesname as $i=>$name) {
    echo "City name is <span>$name</span> and population is <span>$population[$i]</span> and language is <span>$language[$i]<br></span> ";
    if ($population[$i] > 12000000) {
        echo "< -- AARP member";
    }
    echo "<hr>";
}
?>

<style>


    span{
        background-color: #fffa5f;
        padding:5px;
        margin: 2px;
        border-radius: 10px;
    }

    body{
        background-color: #28f75f;
        color: #060506;
        font-size: 30px;
    }

</style>
