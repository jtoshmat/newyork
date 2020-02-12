<?php include "connection.php";
function showAllData(){
    global $connection;
$query = "SELECT * FROM Username";
$result=mysqli_query($connection,$query);


        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['ID'];
            echo "<option value ='$id' name='$id'>$id</option>";}

}   ?>
