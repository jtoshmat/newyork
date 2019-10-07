<?php
namespace California;
use FederalLaws\Federal;

include_once '../lathis/Federal.php';

class State extends Federal
{
    public function citizenship()
    {
        return "Hello";
    }
}

$california = new State();
echo $california ->citizenship();