<?php include "connection.php";
$query = "SELECT * FROM Username";
$result=mysqli_query($connection,$query);
?>
    <div class="container">
        <form action="create.php" method="post">
            <label>Username</label>
            <input type="text" placeholder="Username" name="username"><br>
            <label>Password</label>
            <input type="password" placeholder="Password" name="password"><br>
            <select name="" id="" >
                <?php

                while ($row = mysqli_fetch_assoc($result)){
                    $id = $row['ID'];
                    echo "<option value='$id'>$id</option>";}

                ?>
            </select>
            <input type="submit" name="submit" >
        </form>
    </div>

