<?php
    include_once 'inc/header.php';
?>
<?php

$kids = ["ahmet","mehmet","salih","otkir","shoxruh","azamat","lochin"];

    $i=0;

    do{
        $i++;
         echo $i.": " .$kids[$i]. "<br>";
    }
    while ($i<=5);

        echo "<h4>This is Foreach </h4>";
    foreach ($kids as $kid ){

        if ($kid < 5){
        }
        echo $kid[$kids];
    }