<?php
    include_once 'inc/header.php';
?>
<?php
    $states = $_GET['state']??'Iowa';
    $states2 = $_GET['state2']??'Texas';



    echo "<hr>";
    echo "<h3>Switch Case <br>";

    switch ($states){
        case 'Iowa':
            echo "Hello Iowa!";
            break;

        case 'California':
            echo "Welcome to Golden State!";
            break;

        default:
            echo "Welcome to whatever state!";
            break;
    }


    echo "<hr>";
    echo "<h3>If Statement";
    echo "<br>";

    if ($states=='Iowa'){
        echo "Hello Iowa! <br>";
    }
    if ($states=='California'){
        echo "Welcome to Golden State! <br> ";
    }

    if ($states=='Florida' or $states2=='Texas'){
        echo "Welcome to Sunshine State!<br>";
    }