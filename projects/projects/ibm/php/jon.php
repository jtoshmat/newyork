<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FORM</title>
</head>
<body>

<div class="container-fluid">
    <form method="post" action="backend.php">
       <p>
        <label>Username:<input value="jon@jon.com" type="text"  name="username" placeholder="username" ></label><br>
        <label>Password:<input value="1223435f" type="password" name="password" placeholder="password"></label><br>
       <input type="hidden" value="<?=$_SERVER['REMOTE_ADDR']??false?>" name="ip">
           <button name="submit" class="btn btn-success">Submit</button>
       <button name="reset" class="btnremove">Reset</button>
       </p>
    </form>
</div>

</body>
</html>