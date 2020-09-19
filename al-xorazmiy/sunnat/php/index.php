<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
$parms = null;
if (isset($_POST['is_form_submitted']) &&  $_POST['is_form_submitted']==1){
    $parms = $_POST;
    $email = $parms['email']??null;
    $password = $parms['password']??null;



    if($email=='jon@jon.com' && $password=='password123'){
        header('Location: http://newyork.local/al-xorazmiy/sunnat/php/backend.php');
        exit;
    }else{
        header('Location: http://newyork.local/al-xorazmiy/sunnat/php/index.php');
        exit;
    }
}

?>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Capital Bank</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form method="post">
        <div class="form-group" >
            <label for="exampleInputEmail1">Email address</label>
            <input required="required" name="email" placeholder="YOUR EMAIL" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required="required" name="password" type="password" placeholder="YOUR PASSWORD" class="form-control" id="exampleInputPassword1">
        </div>
        <input name="is_form_submitted" value="1" type="hidden">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<style>
    .form-control {
        width: 300px;
        height: 40px;
    }
    .form-group{
        position: relative;
        left: 530px;
    }
    .btn{
        position: relative;
        left: 637px;
    }


</style>

</body>
</html>
