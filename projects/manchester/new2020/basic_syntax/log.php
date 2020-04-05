<?php
//gotowww
//cd ../logs/
//tail -f php_error_log
define('COMMAND', 'Manchester United');
define('ERROR',__FILE__. ':');

$clubs = ['Manchester United','Real Madrid','Barcelona','Arsenal','Inter','Juventus','Liverpool'];

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        error_log('This is an error log:' .ERROR.__LINE__);
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}

foreach ($clubs as $club){

    if ($club == COMMAND){
        echo COMMAND. " - is my favorite club.";
        echo "<hr>";
    }else{
        echo "$club - is very good team";
        echo "<br>";
        echo "<hr>";
    }
}