<?php include "connection.php"; include "function.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    $hash = "$2y$10$";     //Password encryption
    $salt = "khursandkhalmanov22048";//Password encryption
    $hash_salt = $hash.$salt;   //Password encryption
    $password = crypt($password,$hash_salt);   //Password encryption

    $query = "UPDATE Username SET Name = '$username', Password = '$password' WHERE ID = $id ";
    mysqli_query($connection,$query);
}
?>
<div class="container">
    <h1>Update</h1>
    <form action="update.php" method="post">
        <label>Username</label>
        <input type="text" placeholder="Username" name="username"><br>
        <label>Password</label>
        <input type="password" placeholder="Password" name="password"><br>
        <select name="id" id=""><?php showAllData();?></select>
        <input type="submit" name="submit" >
    </form>
</div>

