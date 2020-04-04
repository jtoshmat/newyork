<?php

require_once "inc/database.php";
$db = new \Database\database();

$records = $db->sql("SELECT * FROM airports");

echo "<pre>";
print_r($records);


