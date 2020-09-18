<?php
include "../../inc/database.php";
$db = new \Database\database();
$airports = $db->sql("SELECT * FROM airports WHERE country='Uzbekistan'");

echo "<pre>";
print_r($airports);
