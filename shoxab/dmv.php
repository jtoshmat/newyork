<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New York State DMV</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="js/distance.js" type="text/javascript"></script>
</head>
<body>
<?php
include_once 'dmvclass.php';
?>

<div class="container">
    <h1 class="header">Welcome to New York State Department Of Motor Vehicles!!!</h1>
    <p> If you would like to get information about how to obtain New York State driver license pleasetype  a keyword in search box</p>
    <p> <input value="<?=$_GET['keyword']??NULL?>" name="keyword" placeholder="keyword"><button>search</button></p>

    <form method="post">
        <table class="table">
            <tr>
                <td>Services</td>
                <td>Information</td>


            </tr>


        </table>
    </form>

















</div>

<style>
    .header{

    }
    tr:first-child td{
        background-color: #dadbd1;
        color: #0f0f0f;
        font-size: 14px;
    }

    td{
        border:1px solid black;
    }

    td:first-child{
        font-size: 30px;
        color: #184cd8;
        font-family: "American Typewriter";
    }



</style>

















</body>
</html>



















