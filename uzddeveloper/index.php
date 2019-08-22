<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Uz Developer's Site</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/myscripts.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid">
    <div class="header">
        <img id="logo" src="https://www.podigee.com/images/podigee-logo-text-horizontal.png" alt="logo">
        <input id="search" type="text" placeholder="Search..">
        <img id="uzdeveloper_img" src="img/uzdeveloper.png">

        <div class="topbuttons">
            <a data-link="signin" class="btn-primary mybtn">Sign in</a>
            <a data-link="signout" class="btn-primary mybtn">Sign out</a>
            <a data-link="contactme" class="btn-primary mybtn">Contact Me</a>
        </div>

        <img data-link="facebook" class="mybtn" src="https://cdn1.iconfinder.com/data/icons/iconza-circle-social/64/697057-facebook-512.png">
    </div>

    <div class="middle">
        <div class="leftcol">Left</div>
        <div class="rightcol">
            <div class="topcol">Top</div>
            <div class="bottomcol">Bottom</div>
        </div>
    </div>
    <div class="footer">
        <?php include_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>