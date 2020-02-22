<?php

$connection = mysqli_connect('localhost','root','','login');
if (!$connection){echo "Not connected";}

$query = "SELECT * FROM Users";
$result = mysqli_query($connection,$query);

?>
<div class="container">
    <form action="ceate_db.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit">
        <select name="" id="">
            <?php while($row = mysqli_fetch_assoc($result)){
            $id = $row['ID'];
            echo "<option value='$id'>$id</option>";
            }?>
        </select>
    </form>
</div>
