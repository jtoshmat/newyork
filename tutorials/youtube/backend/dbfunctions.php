<?php
$keyword = $_GET['keyword']??null;
$keyword = strip_tags($keyword);
$keyword = substr($keyword, 0, 25);
if (!empty($keyword)) {
//Step 1:
//Establish connection with DB - MySQL
    $mysql = new mysqli('localhost', 'root', '', 'dbq');
    if(mysqli_connect_errno()){
        echo "Error: Sorry, we are having a connection issue with DB";
        exit;
    }

    $sql = "SELECT * FROM world_news WHERE title like '%$keyword%' limit 100";
    $result = $mysql->query($sql);
}