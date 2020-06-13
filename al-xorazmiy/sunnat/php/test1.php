<?php
           /* 1 */
$result = null;
function getSmall($a, $b, $c){
    global $result;
    if ($a<$b and $a<$c) {
        $result = $a;
    }
    if ($b<$a and $b<$c) {
        $result = $b;
    }
    if ($c<$a and $c<$b) {
        $result = $c;
    }
}
getSmall(10,277,390);
echo $result;
echo "<hr>";
           /* 2 */
$result = null;
function getMed($a, $b, $c){
    global $result;
    if ($a>$b and $a<$c) {
        $result = $a;
    }
    if ($b>$a and $b<$c) {
        $result = $b;
    }
    if ($c>$a and $c<$b) {
        $result = $c;
    }
}
getMed(678,543,697);
echo $result;
echo "<hr>";
          /* 3 */
$result = null;
function getMax($a, $b, $c){
    global $result;
    if ($a>$b and $a>$c) {
        $result = $a;
    }
    if ($b>$a and $b>$c) {
        $result = $b;
    }
    if ($c>$a and $c>$b) {
        $result = $c;
    }
}
getMax(765,452,1111);
echo $result;
echo "<hr>";


