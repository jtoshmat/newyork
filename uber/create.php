<?php
include "connection.php";

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "INSERT INTO Username(Name,Password) Values('$username','$password')";
    mysqli_query($connection,$query);}
?>
<div class="container">
    <h1>Create</h1>
    <form action="create.php" method="post">
        <label>Username</label>
        <input type="text" placeholder="Username" name="username"><br>
        <label>Password</label>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" name="submit" value="Create">
    </form>
</div>
