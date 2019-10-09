<?php


namespace Cuisine;
include_once "restaurant.php";

class Masal extends Restaurant
{

}
$meal = new Masal();
echo $meal ->prepare();