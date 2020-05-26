<?php
session_start();
$_SESSION['country'] = 'USA';

echo $_SESSION['country'];
//Session