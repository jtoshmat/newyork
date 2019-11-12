<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="mycon">
        <div calss="logo">
            LOGIN Form

        </div>
        <form method="post">
        <div class="from">
            <div class="myin">
                <input type="email" placeholder="Email" name="user_email" required>
            </div>
            <div class="myin">
                <input type="password" placeholder="Password" name="user_pass" required>
            </div>
            <div class="myin">
                <input type="file" name="user_img">
            </div>
            <div>
                <input name="login_btn_" type="submit" value="Kirish">
            </div>
        </div>
        </form>
    </div>

    <style>
        body{
            background-color: teal;
        }
        .mycon{
            width: 350px;
            height: auto;
            background-color: #55df4e;
            padding: 5px;
            text-align: center;
        }
    </style>

</div>
</body>
</html>
