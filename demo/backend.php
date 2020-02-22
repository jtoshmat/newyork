<?php
//Do not forget to start the session in the beginning of the code if you intend to use session functions.
session_start();

//Accept the user form input data from the form or url.
$username = $_POST['username']??null;
$password = $_POST['password']??null;
$rememberme = $_POST['remember_me']??false;

//if either is empty then redirect the user to login page with the message
if (!$username || !$password ){
    header("Location: login.php?msg=Username or password is missing");
    exit;
}

//if either is not matched then redirect the user back to login with the message
if ($username!='jontoshmatov@yahoo.com' || $password != 'abc123'){
    header("Location: login.php?msg=Username or password did not match with our database");
    exit;
}

//If remember me checkbox is selected then save the username and password in the cookie.

if ($rememberme) {
    setcookie("username", $username, time() + 3600);
}else{
    setcookie("username", '', time()-3600);
}

//If all of the above criteria or conditions are true or met then redirect the user to dashboard.php
$_SESSION['user_logged_in'] = true;
$_SESSION['user_full_name'] = 'Sukhrob Shadiyarov';
header("Location: dashboard.php");
exit;
?>


