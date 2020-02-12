<?php
global $connection;
$connection = mysqli_connect('localhost','root','','Username');
if(!$connection){echo "Not connected";}