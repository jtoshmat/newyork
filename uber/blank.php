
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

$connection = mysqli_connect('localhost','root','','Username');
$query = "SELECT * FROM Username";
$result=mysqli_query($connection,$query);



?>

<div class="container">
<form action="blank.php" method="post">
    <label>Username</label>
    <input type="text" placeholder="Username" name="username"><br>
    <label>Password</label>
    <input type="password" placeholder="Password" name="password"><br>
    <div>
    <select name="" id="" >
        <?php
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['ID'];
        echo "<option value='$id'>$id</option>";}

        ?>
    </select>
    </div>
    <input type="submit" name="submit" value="Update" >
</form>
</div>
</body>
</html>