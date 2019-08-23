<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>My first php Calculator</title>
</head>
<h1 class="header">My first Calculator</h1>
<body>


<form class="container" action="myphp.php" method="post">
    <input type="number" name="num1">
    <input class="operator" type="text" name="operator">
    <input type="number" name="num2">
    <input type="submit"> <br>
    <p>result</p>


    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operator"];

    if ($op == "+"){
        echo $num1 + $num2;
    } elseif ($op == "-"){
        echo $num1 - $num2;
    } elseif ($op == "*"){
        echo $num1 * $num2;
    } elseif ($op == "/"){
        echo $num1 / $num2 ;
    } else {
        echo "invalid";
    }

    ?>

</form>
<style>
    body {
        background-image: url("https://image.shutterstock.com/image-photo/business-abstract-background-260nw-244721185.jpg");
 background-repeat: no-repeat;
        width: 100%;
        background-size: cover;
        height: 100%;
    }

 .header {
     text-align: center;
     font-family: Courier;
}
   .container {
       background-color: black;
       color: #f9f9f9;
       margin-top: 30px;
       padding-top: 20px;
       box-shadow: 5px 10px 5px #4c6d96;
       border-radius: 8px;
       font-size: 24px
   ;
    }
    .operator {
        width: 30px;
    }
</style>


</body>
</html>

