<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="left">
        <div class="top">
            <i class="fas fa-bars" style="color: white; font-size: larger"></i>
            <span id="telegram">Telegram</span>
        </div>
        <div class="middle">
            <input class="input" placeholder="Search" type="text">
            <i class="fas fa-search" style="color: grey"></i>
            <div class="users">
                <table class="one">
                    <tr>
                        <td class="image">
                            <img src="img/1.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Shuhrat</span>
                                <br>
                                <span class="hello">Hello</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">11:28PM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="two">
                    <tr>
                        <td class="image">
                            <img src="img/2.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Sunnat</span>
                                <br>
                                <span class="hello">How r u?</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">10:00AM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="three">
                    <tr>
                        <td class="image">
                            <img src="img/three.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Shakhnoza</span>
                                <br>
                                <span class="hello">I'm good</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">6:00AM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="four">
                    <tr>
                        <td class="image">
                            <img src="img/1.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Bobur</span>
                                <br>
                                <span class="hello">Hbu?</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">11:56AM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="five">
                    <tr>
                        <td class="image">
                            <img src="img/four.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Fatima</span>
                                <br>
                                <span class="hello">Great</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">07:00AM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="six">
                    <tr>
                        <td class="image">
                            <img src="img/three.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Zuhra</span>
                                <br>
                                <span class="hello">Bye</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">03:00AM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="seven">
                    <tr>
                        <td class="image">
                            <img src="img/1.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Asror</span>
                                <br>
                                <span class="hello">See you later</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">05:00PM</span></td>
                    </tr>
                </table>
            </div>
            <div class="users">
                <table class="eight">
                    <tr>
                        <td class="image">
                            <img src="img/1.png" alt="profile">
                        </td>
                        <td class="name">
                            <div class="flnm">
                                <span class="fullname">Jon</span>
                                <br>
                                <span class="hello">Guys!</span>
                            </div>
                        </td>
                        <td class="time"><span id="time">09:00PM</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="top">
        </div>
    </div>
</div>
</div>
<style>
    body {
        padding: 0;
        margin: 0;
    }

    .container-fluid {
        width: 100%;
        height: 800px;
    }

    .left {
        background-color: rgba(139, 248, 255, 0.85);
        width: 33%;
        height: 100%;
        border-right: 1px grey solid;
        display: inline-block;
        float: left;
    }

    .top {
        background-color: rgba(86, 130, 163, 0.85);
        width: 100%;
        height: 48px;
        margin: 0;
    }

    .fa-bars {
        margin: 13px 39px 0 23px;
    }

    #telegram {
        color: white;
    }

    .middle {
        background-color: rgba(255, 255, 255, 0.85);
        width: 100%;
        height: 1000px;
        margin-top: 0
    }

    .input {
        background-color: rgba(242, 242, 242, 0.85);
        padding-left: 11px;
        margin: 14px 17px 10px;
        height: 27px;
        width: 184px;
        border: none;

    }

    .fa-search {
        position: relative;
        left: 192px;
        top: -33px;
    }

    img {
        height: 52px;
    }

    table {
        width: 100%;
        height: auto;
    }

    td.image {
        width: 25%;
        padding-left: 6px;
    }

    td.name {
        width: 37%;
        padding-left: 8px;
    }

    td.time {
        width: 15%;
    }

    .flnm {
        width: 87%;
        height: auto;
    }

    .fullname {
        font-weight: bolder;
        font-size: 106%;
    }

    .hello {
        color: grey;
        font-size: 90%;
        margin-top: 5px;
    }

    .time {
        color: grey;
        font-size: 75%;
    }

    #time {
        position: relative;
        top: -9px;
    }

    table:hover {
        background-color: rgba(206, 209, 211, 0.85);
        cursor: pointer;
    }

    .right {
        background-color: #f0feff;
        width: 66%;
        height: 100%;
        display: inline-block;
    }

    #fullname {
        font-weight: bolder;
        font-size: 106%;
        color: white;
    }

    .online {
        width: 83%;
        display: inline-block;
        float: left;
    }

    .icon {
        width: 10%;
        display: inline-block;
        float: right;
    }

    .threedot {
        width: 10%;
        display: inline-block;
        float: right;
    }


</style>
<script>
    $(function () {
        $('.one').click(function () {
            $(this).css('background', 'rgba(86,130,163,0.85)');
            $(".fullname").css('color', 'white');
            $(".hello").css('color', 'white');
            $(".time").css('color', 'white');
        });
        $('table').click(function () {
            $(this).css('background', 'rgba(86,130,163,0.85)');
            $(".fullname").css('color', 'white');
            $(".hello").css('color', 'white');
            $(".time").css('color', 'white');
        });
        $('table').dblclick(function () {
            $(this).css('background', 'rgba(255,255,255,0.85)');
            $(".fullname").css('color', 'black');
            $(".hello").css('color', 'grey');
            $(".time").css('color', 'grey');
        });


    });
</script>
</body>
</html>
