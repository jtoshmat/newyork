<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.js"></script>
</head>
<body>

<?php
    include_once '../inc/header.php';
    include_once 'auth.php';

    $user = $_SESSION['user']??null;
?>

<hr>
<?php

    if (isset($user)){
        echo "Welcome ".$user['name']."!";
    }

?>




</body>
</html>