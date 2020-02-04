<?php

class ManchesterUnited {
    public function club (){
        return "England club";
    }
}

$test = new ManchesterUnited();
echo $test ->club();



/*
$car = 'Honda';


switch ($car){

    case 'Alfa Romeo':
        echo "I love Italian Cars";
        break;

    case 'Honda':
        echo 'This is a very economical and reliable car in the market';
        break;

    case 'Toyota':
        echo 'This is another great car Japanese made';
        break;

    default:
        echo 'I have never heard of this car in my life.';
        break;
}
*/

