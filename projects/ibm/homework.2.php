<?php

//$name = "Dilafruz Dadaboeva - Abdullaevna";

//echo str_world_count($name);


function dilya_repeat($text, $howmanytimes){
    for($i=0; $i<=$howmanytimes; $i++){
        echo $text;
    }
}

dilya_repeat('<strong><span>Dilafruz</span></strong> <strong><section><span>Dadaboeva</span></section></strong><hr>', 10);

?>

<style>
    span{
        background-color: #00a2f9;
        color: #ed2f57;
        border-radius: 3px;
        padding: 3px;
        margin-bottom: 3px;

    }
</style>


