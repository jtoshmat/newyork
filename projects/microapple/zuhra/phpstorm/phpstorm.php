<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhpStorm</title>
    <script src="../../../../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="../../../../fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid">
    <div class="top">
        <table class="menu">
            <tr>
                <td><i class="word fab fa-apple" style="color: black; font-size: larger"></i></td>
                <td class=" word php">PhpStorm</td>
                <td class="word">File</td>
                <td class="word">Edit</td>
                <td class="word">View</td>
                <td class="word">Navigate</td>
                <td class="word">Code</td>
                <td class="word">Refactor</td>
                <td class="word">Run</td>
                <td class="word">Tools</td>
            </tr>
        </table>
    </div>
    <div class="appledrop">
        <table class="menu2">
            <tr>
                <td class="apple2">About This Mac<hr id="one"></td>
            </tr>
            <tr>
                <td class="system">System Preferences...</td>
            </tr>
            <tr>
                <td class="apple2">App Store...<hr id="one"></td>
            </tr>
            <tr>
                <td class="apple2">Recent Items<hr id="one"></td>
            </tr>
            <tr>
                <td class="apple2">Force Quit<hr id="one"></td>
            </tr>
            <tr>
                <td class="apple2">Sleep</td>
            </tr>
            <tr>
                <td class="apple2">Restart...</td>
            </tr>
            <tr>
                <td class="apple2">Shut Down...<hr id="one"></td>
            </tr>
            <tr>
                <td class="apple2">Log Out</td>
            </tr>
        </table>
    </div>
    <div class=phpstormdrop>
        <table class="phpstorm">
            <tr>
                <td class="storm">About PhpStorm<hr id="two"></td>
            </tr>
            <tr>
                <td class="storm">Check for Updates..</td>
            </tr>
            <tr>
                <td class="storm">Preferences<hr id="two"></td>
            </tr>
            <tr>
                <td class="storm">Services<i class="fas fa-caret-right" style="font-size: larger"></i>
                    <hr id="two"></td>
            </tr>
            <tr>
                <td class="storm">Hide PhpStorm</td>
            </tr>
            <tr>
                <td class="storm">Hide Others</td>
            </tr>
            <tr>
                <td class="storm">Show All<hr id="two"></td>
            </tr>
            <tr>
                <td class="storm">Quit PhpStorm</td>
            </tr>

        </table>
    </div>
    <div class="servicesdrop">
        <table>
            <tr>
                <td class="noservices">No Services Apply</td>
            </tr>
            <tr>
                <td class="preferences"><img src="img/settings%20icon.webp" alt="icon">Services Preferences...</td>
            </tr>
        </table>
    </div>
</div>

<style>
    body, .container-fluid{
        padding: 0;
        margin: 0;
        width: 100%;
    }
    .top{
        background-color: #e5eaee;
        width: 100%;
        height: 25px;
        border-bottom: #a9b5b6 1px solid;
        margin: 0;
    }
    .menu{
        margin-left: 15px;
    }
    .word{
        padding-right: 7px;
        padding-left: 7px;
        padding-bottom: 5px;
        margin-top: -2px;
    }
    .php{
        font-weight: bolder;
    }
    .word:hover{
        cursor: pointer;
    }
    .appledrop {
        background-color: #e5eaee;
        width: 230px;
        height: 230px;
        position: relative;
        left: 20px;
        border: #a9b5b6 solid 1px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        display: none;

    }
    .apple2{
        padding-right: 0;
        padding-left: 14px;
    }
    .system{
        padding-left: 13px;

    }
    #one{
        width: 212px;
        margin: 4px 0 0 0;
    }
    .phpstormdrop{
        background-color: rgba(229,234,238,0.85);
        width: 190px;
        height: 190px;
        position: relative;
        left: 50px;
        border: #a9b5b6 solid 1px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        display: none;

    }
    .storm{
        padding-left: 15px;
    }
    #two{
        margin: 2px 0 0 0;
        width: 171px;
    }
    .fa-caret-right{
        float: right;
        margin-right: 10px;
    }
    .servicesdrop{
        background-color: rgba(229,234,238,0.85);
        height: 49px;
        width: 189px;
        position: relative;
        left: 242px;
        top: -120px;
        border: 1px #a9b5b6 solid;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        display: none;

    }
    .noservices{
        color: #898989;
        padding-left: 33px;
    }
    .preferences{
        padding-left: 17px;
    }
    img{
        width: 18px;
        margin-bottom: -3px;
    }
    .apple2:hover{
        cursor: pointer;
        background-color: blue;
        color: white;
    }
    .system:hover{
        background-color: blue;
        color: white;
        cursor: pointer;
    }
    .storm:hover{
        background-color: blue;
        color: white;
        cursor: pointer;
    }
    .preferences:hover{
        background-color: blue;
        color: white;
        cursor: pointer;
    }

</style>
<script>
    $(function () {
        $(".fa-apple").click(function () {
            $(this).css('background-color','blue');
            $(this).css('color','white');
            $(".appledrop").toggle();
        });
        $(".fa-apple").mouseout(function () {
            $(this).css('background','#e5eaee');
            $(this).css('color', 'black');
        });
        $(".php").click(function () {
            $(this).css('background-color', 'blue');
            $(this).css('color', 'white');
            $(".phpstormdrop").toggle();
        });
        $(".php").mouseout(function () {
            $(this).css('background', '#e5eaee');
            $(this).css('color', 'black');
        });
        $(".fa-caret-right").click(function () {
            $(".servicesdrop").toggle();
        });
    });
</script>
</body>
</html>

