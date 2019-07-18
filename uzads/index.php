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
            <li data-row="0">ADMINISTRATION
                <ul class="child">
                    <li>Users</li>
                    <li>Channels</li>
                    <li>Knowledge</li>
                    <li>Data Categories</li>
                </ul>
            </li>
            <li data-row="1">PLATFORMS TOOLS
                <ul class="child">
                    <li>Custome Code</li>
                    <li>Environments</li>
                </ul>

            </li>
            <li data-row="2">AUTOMATION
                <ul class="child">
                    <li>Process Automation</li>
                </ul>
            </li>
            <li data-row="3">USER INTERFACE
                <ul class="child">
                    <li>Objects and fields</li>
                    <li>User Interface</li>
                    <li>Reports and Dashboards</li>
                </ul>
            </li>
            <li data-row="4">MOBILE
                <ul class="child">
                    <li>Mobile Apps</li>
                </ul>
            </li>
            <li data-row="5">SETTINGS
                <ul class="child">
                    <li>Entitlement Management</li>
                    <li>Field Service</li>
                    <li>Service Cloud Einstein</li>
                    <li>Data</li>
                    <li>Company Settings</li>
                </ul>
            </li>
        </ul>

    </div>
</div>
<!-- ############ End of Header ################### -->


<div id="rightpart">
    <p>Recommended Setup</p>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <p>Add Your Users</p>
                <p>Add Your team to your Service Cloud in this simple setup flow</p>
                <button type="button" name="Get Started">Get Started</button>
            </div>
            <div class="col-sm">
                <p>Customised Case Status</p>
                <p>Track and streamline your agent caseloads</p>
                <button type="button" name="Get Started">Get Started</button>
            </div>

            <div class="col-sm jontosh">
                <p><strong>Email Setup</strong><br>Turn your emails into your cases</p>
                <p><strong>Knowledge Setup</strong><br>Set up your Knowledge Base in Service Cloud</p>
                <p><strong>Lighting Communities Setup</strong><br>Build a community where customers help themselves</p>
            </div>

        </div>
    </div>
</div>


<!-- ############ End of Header ################### -->

<div id="footer">
    <div class="container2">
        <div class="row2">
            <div class="col-sm2">
                <img class="image" src="/img/mylogo.png">
                <p class="myp">No cases to show<br>Tackle some cases and watch your performance data grow into useful
                    insights for your team</p>
            </div>
        </div>
    </div>

    <div class="row3">
        <span class="row3_p"><strong>Current Usage</strong></span>
        <table class="row3_table">
            <tr>
                <td>Salesforce Licenses<br>1 / 1</td>
                <td>Service Licenses<br>1 / 1</td>
            </tr>
        </table>
        <ul class="row3_column">
            <li data-row="0">Service features</li>
            <li data-row="1">Storage</li>
            <li data-row="2">Other</li>
        </ul>
    </div>
</div>

</div>
</div>
</div>

</body>
</html>