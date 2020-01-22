<?php


namespace myiteducation;

class monday{

    public $name = 'Jon';

    public function getAge(){
       return 80;
    }

    public function getName(){
        return static::getAge();
    }


}


class tuesday extends monday {

    public function getMyParentAge(){
        return static::getAge();
    }

}


$tuesday = new monday();

$jon = serialize($tuesday);

$umida = unserialize($jon);

var_dump($jon);
echo "<hr>";
var_dump($umida);
