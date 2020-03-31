<<<<<<< HEAD
<<<<<<< HEAD
<?php
//date_default_timezone_set('Europe/Moscow');

<<<<<<< HEAD
class Manchester{
    public $number;
    public $position;
    public $nationality;
    public $fullname;
    public $url;
}
=======

$mybirthdayday = date('l',strtotime("1988-06-25"));
>>>>>>> 0a8cc95689d7fd14efde7764f58fa041a0f62260

echo $mybirthdayday;
=======
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
adasdasdasd
</body>
</html>
>>>>>>> f5e404d9490c6375d212b8f54288e95de4c72588
=======
<?php

require_once "inc/database.php";
$db = new \Database\database();

$records = $db->sql("SELECT * FROM airports");

echo "<pre>";
print_r($records);


>>>>>>> 81f8101471daebaf80f9b303db7d76dcaeb78c4c
