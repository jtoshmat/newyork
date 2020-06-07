<!DOCTYPE HTML>
<html>

<head>

    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>

    <title>MY-IT-EDUCATION.US Dependent Layout</title>

    <link rel='stylesheet' type='text/css' href='css/style.css'/>


    <link rel='stylesheet' media='screen and (max-width: 700px)' href='css/narrow.css'/>
    <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/medium.css'/>
    <link rel='stylesheet' media='screen and (min-width: 901px)' href='css/wide.css'/>

</head>

<body>

<div id="page-wrap">

    <div id="header">
        <form>
            <p>
                <label>Search</label><input name="keyboard" type="text" placeholder="Your keyboard">
                By:
                <select name="searchby">
                    <option value="TV">TV SHOW</option>
                    <option value="MOVIES">MOVIES</option>
                    <option value="CARTOON">CARTOON</option>
                    <option value="MORE">MORE</option>
                </select>
                <button type="button">Search</button>
            </p>
        </form>
    </div>

    <div id="main-content">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NoZwGfUsxX4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id="secondary-one">
        <form>
            <p class="createaccount">Creat an Account</p>
            <p class="myinputs"><input name="username" type="username" placeholder="Username"></p>
            <p class="myinputs"><input name="username" type="password" placeholder="Password"></p>
            <p class="myinputs"><input name="username" type="email" placeholder="Email"></p>
            <p class="dropdownmenu">
                <label class="birthday">Birthday(?)</label>
                <select name="month">
                    <option selected value="">Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select>
                    <option selected value="">Day</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                </select>
                <select>
                    <option selected value="">Year</option>
                    <option value="12">12</option>
                    <option value="12">12</option>
                    <option value="12">12</option>
                    <option value="12">12</option>
                </select>
            </p>
            <p class="terms">By clicking "Get Started"
            <p class="getstarted">
                <button class="btn">SIGN IN</button>
            </p>
        </form>
    </div>

    <div id="secondary-two">
        <video width="153px" height="300px" controls>
            <source src="https://www.youtube.com/embed/rF8ieTby4VI" type="video/mp4">
        </video>
       <!-- <img width="153px" height="320px" src="https://media.giphy.com/media/zUdHjU6kTgpUs/giphy.gif">-->
</div>
</body>

</html>