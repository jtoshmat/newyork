<?php

function uberOrder($order, $adress, $rating, $star, $thanks){
    if ($order=='order'){
        echo "<hr>";
        echo "<br>1-step: Hi there! Where are you going?<br>";
    }else{
        echo "Are you want go somewhere with uber?";
    }
    if ($adress=='adress'){
        echo "<br>2-step: Are you going from 8800 20th avenue to 1868 Burnett street?<br>";
    }else{
        echo "Please, enter correctle " .$adress ;
    }
    if ($rating=='rating'){
        echo "<br>3-step: Please put star for rating<br>";
    }else{
        echo "You missing put star.";
    }

    switch ($star){
        case 1:
            echo "<br>4-step: 1 star<br>";
            break;
        case 2:
            echo "<br>4-step: 2 star<br>";
            break;
        case 3:
            echo "<br>4-step: 3 star<br>";
            break;
        case 4:
            echo "<br>4-step: 4 star<br>";
            break;
        case 5:
            echo "<br>4-step: 5 star<br>";
            break;
        default;
        echo "<br>why?<br>";
    }
    if ($thanks=='thankyou'){
        echo "<br>5-step: Thank you for use Uber App.<br>";
    }else{
        return "Do you have question about Uber APP";
    }
}

uberOrder('order', 'adress','rating',1,'thankyou');
uberOrder('order', 'adress','rating',2,'thankyou');
uberOrder('order', 'adress','rating',3,'thankyou');
uberOrder('order', 'adress','rating',4,'thankyou');
uberOrder('order', 'adress','rating',5,'thankyou');
