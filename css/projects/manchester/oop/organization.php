<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
/*
$status = [
    'error' =>  'yes',
    'code' => 500,
    'msg' => 'Success'
    //'msg' => 'Your message was not sent successfully because your email address is wrong'
];


if ($status['error'] == true){
    echo "Yaxshi: ".$status['msg'];
}else{
    echo "Yomon: ".$status['msg'];
}




exit;*/
//Accounting Department needs to use mail service which means they will send a lots of invoices and W2 forms to their employees.
include_once "maildepartment.php";
$mail_department = new \Marvel\MailDepartment();
$status = $mail_department->acceptMails();
if ($status['are_there_are_any_errors'] == true){
    echo "<div class='alert alert-danger'>".$status['msg']."</div>";
}else{
    echo "<div class='alert alert-success'>".$status['msg']."</div>";
}


?>
</body>
</html>
