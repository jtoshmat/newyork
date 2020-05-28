<?php
include "../../../../../inc/database.php";
$db = new \Database\database("library");
$library = $db->sql("SELECT * FROM digitlibrary");

echo "<pre>";
print_r($library);
