<?php
namespace Shadiyarovs;
require 'parents.php';
class Children extends Parents {

public function playGame(){
    $num = parent::play();
    if ($num>100){
        return "good";
    }
    return "bad";
}

public function playSoccer(){
    return self::playGame();
}

}

$obj = new Children();

echo $obj->playSoccer();

