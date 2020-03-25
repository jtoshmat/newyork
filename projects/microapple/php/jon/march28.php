<?php
echo "<h2>The backend is being processed</h2>";
echo "<hr>";
$parms = $_POST;
$comment = strip_tags($parms['your_comment']);
require "../../../../inc/database.php";
$db = new \Database\database();
$sql = "INSERT INTO comments (comment) VALUES ('$comment');";
$db->sql($sql);
echo "You are being redirected to march 24.php";
header('Location: http://newyork.local/projects/microapple/php/jon/march24.php');
exit;




