<?php
if (!isset($_SESSION['is_authorized'])){
    header('Location: http://newyork.local/chase/login.php');
}