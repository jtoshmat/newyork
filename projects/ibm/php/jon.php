<?php
$texts = file_get_contents('../files/mytexts.txt');
$alltexts = explode(' ', $texts);

echo "<div class='mytext'>";

foreach ($alltexts as $num=>$word){


    if ($word=='Lorem'){
        echo "<span class='lorem'>Lorem</span>";
    }else if($word=='Ipsum'){
        echo "<span class='text'>Ipsum</span>";
    }
    else{
        echo " $word ";
    }
}

echo "</div>";
?>

<style>

    .mytext{
        width: 500px;
        height: auto;
        overflow: auto;
        border: 1px solid grey;
        margin: auto;
    }

    .lorem{
        background-color: yellow;
        color: darkred;
        border: 1px solid black;
        padding:4px;
        margin: 2px;
    }

    .text{
        background-color: #ff2a9e;
        color: #fff846;
        border: 1px solid black;
        padding:4px;
        margin: 2px;
    }
</style>


<?php
//Error Types
    // 1. Notice Error
    // 2. Warning Error
    // 3. Fatal Error   

