<?php
function Uzbekistan($iterable) {
    if (!is_array($iterable)){
        echo "Sorry, we only accept countable variables";
        return false;
    }
    foreach ($iterable as $value) {
        echo $value."<hr>";
    }
}


//$cars = ['Audi','Alfa Rome','BMW'];
$cars = 'Alfa';
Uzbekistan($cars);

