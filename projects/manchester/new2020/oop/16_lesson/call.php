<?php

namespace Education;

class Education
{

    public function PHP()
    {
        return "I want to learn PHP";
    }

    private function python($programm)
    {
        return "I want to learn Python after PHP $programm[0]";
    }

    public function __call($name, $programm)
    {
        if ($name == 'mySQL') {
            return "I want to learn: MySQL";
        } elseif ($name == 'python') {
            return $this->python($programm);
        } elseif ($name == 'javaScript') {
            return "I want to learn: Java Script." . print_r($programm, true);
        } elseif ($name == 'laravel') {
            return "I want to learn: Laravel";
        } else {
            return "Sorry, you can not learn $name.";
        }
    }
}

$result = new Education();
echo $result->javaScript('jQuery');
echo "<hr>";
echo $result->PHP();
echo "<hr>";
echo $result->python('API');
echo "<hr>";
echo $result->java();