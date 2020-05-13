<?php
/*
if - Done
else - Done
elseif/else if - Done

//Foreachlar oila

while - WIP
do-while - WIP
for - WIP
foreach - Done

break
continue
switch
return
require
include
require_once
include_once
goto
 */

$state = 'New York';

echo "\n";

switch ($state){
    case 'Iowa':
        echo "The capital of Iowa is Des Moines";
        break;
    case 'Illinois':
        echo "The capital of Illinois is Springfield";
        break;
    case 'New York':
        echo "The capital of New York is Albany";
        break;
    default:
        echo "The capital of the United States of America is Washington.DC";
        break;
}

echo "\n";
