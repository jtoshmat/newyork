<?php
$numbers = range(1, 100);

foreach ($numbers as $number){
    if ($number>21){
        echo "<hr>WOHOOHOOO<hr>";
    }elseif($number==5){
      echo " - HIGH FIVE - <br>";
    }else{
        echo $number."<br>";
    }

}
