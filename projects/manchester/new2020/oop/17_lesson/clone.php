<?php

namespace Club;

class Football
{
    public function play()
    {
        echo "<br>I am playing football<br>";
    }

    public function __clone()
    {
        echo "<br>I am sorry, you can not clone this object<br>";
    }

}

$result = new Football();
$result2 = clone $result;
echo "<hr>";
$result->play();
echo "<hr>";
$new = ($result2 instanceof $result);
var_dump($new);

