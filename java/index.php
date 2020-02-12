<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>login form</title>
</head>
<body>
<div class="container">
    <h1>Java's Login Form</h1>
    <form action="" method="post">
      <p>  username :<input type="email" name="username" placeholder="your email."></p>
        <p>gender</p>
        <p> male :   <input type="radio" name="male" ></p>
        <p> female : <input type="radio" name="female"></p>
        <p> password :<input type="password" name="psw" placeholder="type your password"></p>
        <p> <button type="submit" class="btn btn-primary">submit</button></p>




    </form>
</div>


<style>
    form{
        width: 600px;
        height 300px;
        border: 1px solid black;
        background-color: #d6d8db;
        margin-top: 100px;
        border-radius: 10px;

    }
    h1 {
        color: red;
    }
    p{

        padding: 10px;
    }
    .container{
        margin: 100px;
        width: 600px;
        height: 100px;
        border: 5px solid darkblue;
        border-radius: 10px;
        box-shadow: 10px 10px 10px #4e98f1;
        text-align: center;
        background-color: #d6d8db;
        padding-top: 20px;


    }
</style>
</body>
</html>
