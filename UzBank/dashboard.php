<?php
namespace Uzbank;
session_start(['cookie_lifetime' => 300]);

if ($_SESSION['msg']['error_type']!=200){
    $_SESSION['msg'] =[
        'error_type' => 403,
        'message' => "Your session has expired",
    ];
    header("Location: index.php");
    exit;
}

use Database\database;

include_once '../inc/database.php';

class Dashboard
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST;
        if ($_SESSION['msg']['error_type']!=200){
            $_SESSION['msg'] =[
                'error_type' => 403,
                'message' => "Your session has expired",
            ];
            header("Location: index.php");
            exit;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <h2>Members Dashboard!</h2>
</div>

</body>
</html>
