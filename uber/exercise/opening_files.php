<?php

$file = "example.txt";
if($handle = fopen($file,'w')){
    fwrite($handle, "I love PHP and it is a good Stuff");
    fclose($handle);
} else {echo "Failed";}
