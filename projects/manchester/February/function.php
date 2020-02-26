<?php



function Stadium($players, $numbers){
    echo "<hr>$numbers<hr>";
    if ($players == 'manchester'){
       echo "<br>Please go to right side<br>";
    }else{
        echo "<br>Please go to left side<br>";
    }

    switch ($numbers){
        case 1:
            echo "<br>You are goalkeeper<br>";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
            echo "<br>You are zashitnik<br>";
            break;
        case 6:
        case 7:
        case 8:
        case 9:
        echo "<br>You are midfielder<br>";
        break;
        case 10:
        case 11:
        echo "<br>You are forward<br>";
        break;
        default;
            echo "<br>You go to bench<br>";
            break;
    }


}

Stadium("manchester", 1);
Stadium("manchester", 2);
Stadium("manchester", 3);
Stadium("manchester", 4);
Stadium("manchester", 5);
Stadium("manchester", 6);
Stadium("manchester", 7);
Stadium("manchester", 8);
Stadium("manchester", 9);
Stadium("manchester", 10);
Stadium("manchester", 11);
