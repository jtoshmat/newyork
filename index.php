<?php

$distance_between_earth_moon = 230000;
$speed_of_spaceship = 19000;
$distance_between_earth_mars = 10700000;
$how_long_it_take = $distance_between_earth_moon / $speed_of_spaceship;

echo $how_long_it_take;



function plus($miles, $driven_mile){
    return $miles - $driven_mile;
}


exit;



// Create a 100*30 image
$im = imagecreate(400, 300);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Write the string at the top left

imagestring($im, 5, 0, 0, 'JHVDEJDHEVJEHVD', $textcolor);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>