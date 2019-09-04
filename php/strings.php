<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Strings Advanced Functions</title>
</head>
<body>
<?php
$binary = "111";
$hex = dechex(bindec($binary));
echo $hex;
?>

<style>
    .loremspan{
        background-color: #0f6674;
        border:1px solid #000;
        box-shadow: #0f6674 5px 5px 5px 5px;
        margin:5px;
        padding:5px;
        color:greenyellow;
        border-radius: 10px;
    }


    .thespan{
        background-color: #ab8656;
        border:1px solid #000;
        box-shadow: #915221 5px 5px 5px 5px;
        margin:5px;
        padding:5px;
        color: #fffdb2;
        border-radius: 10px;
    }

</style>

</body>
</html>