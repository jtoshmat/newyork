<?php
   $names = [21=>'Jon',22=>'Umida',24=>'Parvina',32=>'Farkhod',35=>'Farkhod Jr'];



   foreach ($names as $age=>$name){

        echo "Hello, my name is <span class='myname'>$name</span> and I am <span class='myage'>$age</span> years old.";
        echo "<hr>";
   }

?>

<style>
        .myname{
           color: red;
            background-color: #00bf00;

        }
        .myage{
            color: #fa00fa;
            background-color: #00fafa;
        }

</style>
