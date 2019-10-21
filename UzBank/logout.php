<?php
session_start(['cookie_lifetime' => 60]);
session_destroy();
header("Location:index.php");
exit;