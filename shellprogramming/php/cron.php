<?php
require_once 'database.php';
$db = new \Database\database();
$sql = "INSERT INTO cron (title, description, active) VALUES('title','description',1)";
$db->sql($sql);
exit("cron job ended");