<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to MyPress!</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div id="mycontent">
    <?php
    $page = 1;
    include_once 'header.php';
    ?>
    <div class="mycontainer">
        <div class="myquote">
            <span>"There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed."</span>
            <span> -- Ray Goforth </span>
        </div>
    </div>
    <?php include_once 'footer.php';?>
</div>
</body>
</html>