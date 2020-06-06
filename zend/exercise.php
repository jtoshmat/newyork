<?php
/* echo 'Number 1: ';
include 'exercise1.php';
echo "<hr>";
echo 'Number 2: ';
include 'exercise1.php';
echo "<hr>";
echo 'Number 3: ';
include 'exercise1.php';
exit();
*/
echo "<hr>";
session_start();
$_SESSION ['country'] = "Uzbekistan";
echo $_SESSION ['country'];
exit();


