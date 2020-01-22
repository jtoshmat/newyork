<?php
    $names = ['Jon', 'Abdulbari', 'Rustam', 'Rustam', 'Dilafruz', 'Oybek', 'Asor', 'Umida'];
    $ages = [23,43,66,54,78,63,67,18];
    $location = ['New York', 'Chicago', 'London', 'Mexico City', 'Moscow', 'Kiev', 'Tokio', 'Tashkent'];
    foreach ($names as $i=>$name){
        echo "My name is<span> $name</span> and I am <span>$ages[$i]</span> years old and I live in <span>$location[$i]</span>";

        if ($ages[$i] > 65){
            echo "< -- AARP member";
        }

        echo "<hr>";
    }
?>
<style>

    span{
        background-color: #0f6674;
        padding: 5px;
        margin: 2px;
        border-radius: 10px;
    }

    body{
        background-color: #ec364f;
        color: #4c6d96;
        font-size: 30px;
    }

</style>
