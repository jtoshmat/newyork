<?php
    session_start();
    unset($_SESSION['is_authorized']);
    unset($_SESSION['user']);
    header('Location: http://newyork.local/chase/login.php');
    exit;

