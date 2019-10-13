<?php
namespace Shadiyarovs;
include_once 'Traits/mytoolstrait.php';

class Daily{
    use \MyToolsTrait;

}

$mytools = new Daily();

echo $mytools->useMyDebCard();

