<?php

$nums = range(    1, 1000);


for ($i=1; $i<count($nums); $i++){

    if($i%2 === 0){
        echo "<span class='even'> Even</span>";
    } else if($i%9 === 0){
        echo "<span class='nine'>This is 9 devided nums</span>";

    } if($i === 24) {
         echo "<span class='age'>THis is 25</span>";
    }else{
        echo $i;
    }
    echo "<hr>";

}

?>
<style>

    .age {
        color:lightblue;
        background-color: #0b2e13;

    }
    .nine {
        background-color: blue;
        color: yellow;
        font-size: 30px;

    }
    .even {
        background-color: black;
        color: white;
    }
</style>