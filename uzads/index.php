<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UzAds Project</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/uzads/css/style.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/myscripts.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
    <div id="leftcol">
        <img title="Welcome to UzAds" alt="My Logo" src="/uzads/img/uztel.png">
    </div>
    <div id="middlecol">
        <form action="results.php" method="get">
            <input class="form-control" name="keyword" type="text" placeholder="Enter your keyword">
        </form>
    </div>
    <div id="rightcol">
        <img title="Click for Settings" alt="Gear" src="/uzads/img/gear_icon.png">
        <img title="Click for Help" alt="Gear" src="/uzads/img/help_icon.png">
        <img title="Click for Alerts" alt="Gear" src="/uzads/img/pc_icon.png">
        <img title="Click for Alerts" alt="Gear" src="/uzads/img/pc_icon.png">
        <img title="Click for Alerts" alt="Gear" src="/uzads/img/pc_icon.png">
    </div>
    <div class="myclear"></div>
    <div id="bottomcol">
        <?php include_once 'navbar.php'; ?>
    </div>
</div>
<!-- ############ End of Header ################### -->



<div id="leftpart">

<div class="quickfind">
    <fom>
        <input class="input-group" name="keyw" type="text">
    </fom>
</div>

<div class="leftmenu">

    <span>Service Setup Home</span>

    <ul class="father">
        <li data-row="0">Administration
            <ul class="child">
                <li>Users</li>
                <li>Channels</li>
                <li>Knowledge</li>
                <li>Data Categories</li>
            </ul>
        </li>
        <li data-row="1">Platform Tools
            <ul class="child">
                <li>Custome Code</li>
                <li>Environments</li>
            </ul>

        </li>
        <li data-row="2">Automation</li>
        <li data-row="3">User Interface</li>
    </ul>

</div>



</div>





<div id="rightpart">Right Part</div>
<div id="footer">Footer</div>
</body>
</html>