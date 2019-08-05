<?php


namespace Usa;


class jon
{

    public $name;

    public function __construct()
    {
       // echo "<hr> Hey there, I am  ".$this->name."</hr>";
    }

    public function feedme(){
        echo "<hr>Jon, do not forget to feed the ". $this->name."</hr>";
    }

    public function playwithme(){
        echo "<hr>Jon, do not forget to feed the ". $this->name."</hr>";
    }

    public function __destruct()
    {
        //echo "<hr>Thank you Jon, for the wonderful OOP crash course, see you in the next class: ".$this->name."</hr>";
    }

    public static function jump(){
        echo "I feel like I want to jump";
    }

}