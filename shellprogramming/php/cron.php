<?php
/*require_once 'database.php';
$db = new \Database\database();
$sql = "INSERT INTO cron (title, description, active) VALUES('title','description',1)";
$db->sql($sql);*/

require_once '../../inc/mymail.php';
$mail = new \Myitedu\MyiteduMail('jontoshmatov@yahoo.com','Testing','Hello there');
$sent = $mail->send();

echo "<pre>";
var_dump($sent['error']);

exit("cron job ended");