<?php
session_start();

echo $_SESSION['name']??null;
?>


<a href="index.php">Home Page</a>
