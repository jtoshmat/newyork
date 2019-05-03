<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>

<?php
    include_once 'inc/header.php';
?>

<h1>HTML TABLE</h1>

<!--
ID    Name      Country
1     Jon       USA
2     Jessica   USA
3     Parvina   USA
4     Umida     AUS

-->
<table id="NY">
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Country</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Jon</td>
        <td>USA</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jessica</td>
        <td>USA</td>
    </tr>
    <tr>
        <td>3</td>
        <td id="pari">Parvina</td>
        <td>USA</td>
    </tr>
    <tr>
        <td id="red">4</td>
        <td>Umida</td>
        <td>AUS</td>
    </tr>
</table>
    <style>
        #NY
        {
            background-color: #934a29;
            border: 4px solid #934a29;
        }
        td{
            background-color: aqua;
        }

        #pari{
            font-size: 30px;
            background-color: red;
        }
        #red{
            color:yellow;
            border:1px solid #000000;
        }
    </style>






</body>
</html>