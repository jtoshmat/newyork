<?php

// thisisasingleline comment


/*
this is multipile line comment
*/


    $names = ['Jon', 'Asror', 'Oybek', 'Umida','Muhammadjon','Rustam','Abdulbari'];
    $ages = [66,77,66,64,25,99,98];
    $location = ['NY','NJ','NH','PHL','PNS','CHIC','OHI'];


    foreach ($names as $i=>$name){
        echo "My name is <span>$name</span> and I am <span>$ages[$i]</span> years old and I live in <span>$location[$i]</span>";

        if ($ages[$i] > 65){

            echo "<-- AARP amber";
        }
        echo "<hr>";
}
 ?>


<style>

    span {
        background-color: #00ac00;
        color: #0c1e3d;
        padding: 5px;
        margin: 5px;
        border-radius: 10px;
    }

    body {
        text-align: center;
        background-color: #0c1e3d;
        color: #ffffff;
        font-size: 30px;
    }

</style>
