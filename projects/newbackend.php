<?php
$states = ['New York','Iowa','California','Florida'];
echo "<h3>While</h3>";
$i = 0;
while ($i<4){
    echo $i.": ".$states[$i]."<br>";
    $i++;
}
echo "<hr>";
echo "<h3>Do While</h3>";
/*
 * The difference between Do While and While
 */
$y = 0;
do {
    echo $y.": ".$states[$y]."<br>";
    $y++;
}
while ($y<4);
echo "<hr>";
echo "<h3>For</h3>";
for($x=0; $x<4; $x++){
    echo $x.": ".$states[$x]."<br>";
}
echo "<hr>";
echo "<h3>Foreach</h3>";
foreach($states as $z=>$state){
    if ($z>1){
        break;
    }
    echo $z.": ".$state."<br>";
}

