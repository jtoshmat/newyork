<?php
 $play = $_GET['play']??false;

if ($play){
    for($i=1; $i<7; $i++){
        $rand = rand(1, 99);
        echo "<div class=\"winning_numbers\">$rand</div>";
    }
}