<?php
session_start();
$msg = null;

if(!empty($_POST)) {
    if (!empty($_POST['password'])){
        $_SESSION['newyork']['errortype'] = "success";
        $msg =  "Good job, your login  is successful";
    }else{
        $_SESSION['newyork']['errortype'] = "danger";
        $msg = "Sorry, your login was not successful";
    }
}

if ($msg){
    $_SESSION['newyork']['error'] = $msg;
}
header('Location: homeworks.php');
exit;
?>