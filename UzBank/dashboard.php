<?php
namespace Uzbank;
session_start(['cookie_lifetime' => 3600]);

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
    public $cardholder_name;

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
        $this->cardholder_name = $_SESSION['msg']['cardholder_name'];
    }
}

$obj = new Dashboard();
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
    <div class="dashboard">
        <div class="blankdiv"></div>
        <div class="myheader">
            <div class="userprofile">
                <img src="img/profile_icon.png">
                <?=$obj->cardholder_name?>
            </div>
            <p class="logo">
                <img src="img/chase-logo-white.png">
            </p>
            <p class="myheadertext">
             <div class="myheadertext2">
                <h1>Chase Credit Cards</h1>
                <span>From cash back to savings on interest, we have the right card to <br>
                fit your needs.
                </span>
            </div>
            </p>
        </div>
        <div class="mymenu">
            <img src="img/myicons.png">
        </div>
        <div class="mymenuborder">
            <img src="img/line.png">
        </div>
        <div class="mybody"></div>
    </div>
</div>
<style>

    .userprofile img{
        width:30px;
    }
    .userprofile{
        position: relative;
        left:86%;
        top:10px;
        color:white;
    }
    .myheadertext2{
        margin-left:142px;
    }

    .myheadertext, h1, span{
        color:#d6e0ea;
    }
    .logo img{
        margin-top:20px;
        width:200px;
    }
    .logo{
        text-align: center;
    }

    .mymenuborder img{
        width: 100%;
        height:40px;
    }

    .mymenu{
        width: 100%;
        height: 129px;
        background-color: #ffffff;
        text-align: center;
    }
    .mymenu img{
        width:100%;

    }
    .myheader{
        width: 100%;
        height: 263px;
        background-color: #136798;
    }
    .container-fluid {
        padding-right: 0px;
        padding-left: 0px;
    }
    .blankdiv{
        height:38px;
        background-color: black;
    }
</style>
</body>
</html>
