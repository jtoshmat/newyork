<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telegram</title>
    <script src="../../../../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="../../../../fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid">
    <div class="leftWindow">
        <div class="partOne">
            <i class="fas fa-bars" style="color: white; font-size: larger"></i>
            <span id="telegram">Telegram</span>
        </div>
        <div class="partTwo">
            <i class="fas fa-search" style="color: #86898b; font-size: smaller"></i>
            <input class="search" type="text" placeholder="Search">
            <div class="users">
                <table>
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
    <div class="rightWindow"></div>
</div>
<style>
    body, html {
        margin: 0;
        height: 100%;
        padding: 0;

    }
    .container-fluid {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }
    .leftWindow {
        background-color: #ffffff;
        width: 33%;
        height: 100%;
        float: left;
    }
    .rightWindow {
        background-color: black;
        width: 67%;
        height: 100%;
        float: right;
    }
    .partOne {
        background-color: rgba(86, 130, 163, 0.85);
        width: 100%;
        height: 12%;
    }
    .fa-bars {
        margin: 15px 0 0 25px;
    }
    #telegram {
        color: #f4f7f9;
        margin-left: 31px;
        font-size: 17px;
    }
    .partTwo {
        width: 100%;
        height: 87%;
    }
    .search {
        background-color: rgba(242, 242, 242, 0.85);
        padding-left: 31px;
        margin: 14px 17px 10px;
        height: 29px;
        width: 199px;
        border: none;
    }
    .fa-search{
        position: absolute;
        padding: 23px;
        min-width: 40px;
    }
    img{
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
</style>
</body>
</html>