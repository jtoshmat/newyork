<!doctype html>
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
        <img id="logo" src="/uzddeveloper/png/logoheader.png" alt="logo">
        <input id="search" type="text" placeholder="Search..">
        <h1>U Z &nbsp; &nbsp; D E V E L O P E R</h1>
    </div>
    <!-- Button to open the modal login form -->
    <a class="btn-primary" onclick="document.getElementById('id01').style.display='block'">Sign in</a>
    <!-- The Modal -->
    <?php include_once 'modals.php'; ?>
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