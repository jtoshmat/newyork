<?php
session_start(['cookie_lifetime' => 3600]);
session_destroy();
header("Location:index.php");
exit;