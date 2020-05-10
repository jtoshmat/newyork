<?php
    include_once 'inc/header.php';
?>
<?php

$states = ["New York", "California", "Alabama", "Connecticut", "Pennsylvania"];

echo "<h4> This is While Code </h4>";

$i=0;
while ($i<=5){
    echo $i;
    $i++;
}

echo "<hr>";
    echo "<h4> This is While Do Code </h4>";

    $y = 0;

    do{
        $y++;

        echo $y;

    }

    while ($y<=4);


echo "<h4> This is For Code </h4>";

    for ($x=0; $x<=4; $x++){

        echo $x;
}

echo "<h4> This is Foreach Code </h4>";

    foreach ($states as $state){

        if ($state>2){

        }

        echo $state;
    }