<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="mainbody">
    <div class="navbar">
            <form>
                <div class="img"> <div class="smlbox"></div>
                    <img src="pics/fc.png" </div>
                <table class="table-active">
                    <tr>
                        <td><label> Email or Phone</label></td>
                        <td><label> Password</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="inp"></td>
                        <td><input type="text" class="inp"> <button class="bttn">Log in</button></td>
                    <tr>
                        <td><a class="forgotlink" href="https://www.facebook.com/login/identify/?ctx=recover&ars=royal_blue_bar">Forgot account?</a> </td>
                    </tr colspan="2">
                </table>
            </form>
    </div>
</div>
    <div class="clearfix"></div>
    <div class="bottom">
        <div class="leftbottom">
            <div class="emp" style="height: 40px"></div>
            <p class="par">
                Connect with friends and the</br>
                 world around you on Facebook.
            </p>
            <form>
                <table>
                    <tr>
                        <td class="lefttext"><img class="pics" src="pics/pic1.png"> </td>
                        <td><b>See photos and updates</b> from friends in News Feed.</td>
                    </tr>
                    <tr>
                        <td class="lefttext"><img class="pics" src="pics/pic2.png"> </td>
                        <td><b>Share what's new</b> in your life on your Timeline.</td>
                    </tr>
                    <tr>
                        <td class="lefttext"><img class="pics" src="pics/pic3.png"> </td>
                        <td><b>Find more </b>of what you're looking for with Facebook Search.</td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="rightbottom">
            <div class="rtext">
                <h1><b>Sign Up</b></h1>
                <h3>It's quick and easy.</h3>
                <div class="clearfix"></div>
            </div>
            <div class="rightform">
                <form>
                    <table>
                        <tr>
                            <td><input class="inp1" type="text" placeholder="First name"></td>
                            <td><input class="inp1cl" type="text" placeholder="Last name"> </td>
                        </tr>
                        <tr>
                            <td><input class="inp2" type="text" placeholder="Mobile number or email"> </td>
                        </tr>
                        <tr>
                            <td><input class="inp2" type="text" placeholder="New password"> </td>
                        </tr>
                    </table>
                </form>
                            <div class="brth"> Birthday</div>
                            <div class="dob">
                                <select aria-label="month" nam="birthday_month">
                                    <option value="0">Month</option>
                                    <option value="1">Jan</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Apr</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Aug</option>
                                    <option value="9">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12" selected="1">Dec</option>
                                </select>
                            </div>
            </div>
        </div>
    </div>
<style>
    .inp1 {
        width: 150px;
        height: 30px;
        margin: 5px;
        float: left;
    }
    .inp2 {
        width: 300px;
        height: 25px;
        margin: 5px;
    }

    .rightbottom {
        width: 44%;
        height: 600px;
        float: right;
    }
     .table-active {
         margin: auto
     }
      .lefttext {
         padding: 10px;
     }
    .par {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
    }
    .leftbottom {
        width: 800px;
        height: 600px;
        float: left;
    }
    form {
        text-align: right;
    }
    body {
        margin: 0px;
        background-color: rgba(19, 33, 255, 0.06);
    }
    .smlbox {
        height: 20px;
    }
    .img img {
        width: 170px;
    }
    .mainbody {
        height: 95px;
        width: 100%;
        background-color: #385898;
        margin: 0px;
    }
    .navbar {
        width: 70%;
        margin: auto;
    }
    td label {
        color: white;
        font-size: 15px;
    }
    .table-active {
        float: right;
    }
    .bttn {
        background-color:#4267B2;
        color: white;
        border: 0px  !important;
    }
    .bttn:hover {
        cursor: pointer;
    }
    .forgotlink {
        font-size: 15px;
        color: rgba(225, 225, 225, 0.44) !important;
        text-decoration: none;
    }
    .forgotlink:hover {
        text-decoration: underline;
    }
</style>
</body>
</html>