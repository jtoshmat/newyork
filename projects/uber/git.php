<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
   $connection = mysqli_connect('localhost','root','','Username');
if($connection){echo "Yes";}else{echo "Sorry";}}

$query = "INSERT INTO Username(Name,Password) VALUES('$username','$password')";


$result=mysqli_query($connection,$query);
/*

$connection = mysqli_connect('localhost','root','','Username');
$query = "SELECT * FROM Username";
$result=mysqli_query($connection,$query);
while($row = mysqli_fetch_row($result)){
?>
<pre>
    <?php
    print_r($row);}*/
?>

<div class="container">
<form action="git.php" method="post">
    <label>Username</label>
    <input type="text" placeholder="Username" name="username"><br>
    <label>Password</label>
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" name="submit" >
</form>
</div>
</body>
</html>