<?php
class car{
    var $wheels = 4;
    var $engine = 1;
    var $doors = 4;
    function moveWeels(){echo "Weels move";}
}
if(class_exists('Car')){}else{echo "No";}
if(method_exists('Car','moveWeels')){}else{echo "No";}
