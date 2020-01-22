<?php
namespace School;
include_once 'traits/FizkulturaTrait.php';
include_once 'traits/MatemarikaTrait.php';

class Sinftwo{

    use \FizkulturaTrait;
    use \MatemarikaTrait;


}

$sinftwo = new Sinftwo();
echo $sinftwo->playVolleyball();
echo "<hr>";

echo $sinftwo->geometry();
