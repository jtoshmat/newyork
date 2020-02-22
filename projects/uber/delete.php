<?php include "connection.php"; include "function.php";
if(isset($_POST['submit'])){
    $id = $_POST['id'];


    $query = "DELETE FROM Username WHERE ID = $id ";
    mysqli_query($connection,$query);
}
?>
<div class="container">
    <h1>Delete</h1>
    <form action="delete.php" method="post">
        <label>Username</label>
        <input type="text" placeholder="Username" name="username"><br>
        <label>Password</label>
        <input type="password" placeholder="Password" name="password"><br>
        <select name="id" id=""><?php showAllData();?></select>
        <input type="submit" name="submit" >
    </form>
</div>


