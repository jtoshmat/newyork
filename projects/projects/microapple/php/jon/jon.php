<?php
require "../../../../inc/database.php";
$db = new \Database\database();
$sql = "SELECT comment FROM comments order by id desc limit 1";
$result = $db->sql($sql);
echo "Your comment is: ";
echo "<pre>";
print_r($result[0]['comment']);


