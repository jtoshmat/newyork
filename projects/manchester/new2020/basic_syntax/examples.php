<?php


$GLOBALS ['name'] = [
    'name' => 'Sukhrob Shadiyarov',
    'age' => 34,
    'location' => 'Brooklyn'
];


function myname(){
    return $GLOBALS['name']['age'];
}

echo "<pre>";
print_r(myname());