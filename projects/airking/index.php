<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NYC Air King</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<header>
    <div class="container">
        <h5>
            <a class="nav-brand" id="my-nav">
                <img src="airkinglogo.png" width="40%" title="NYC AirKing Search your flight in best fare!"
                     alt="NYC AirKing Search your flight in best fare!">
            </a>
        </h5>
        <nav class="nav-bar">
            <ul class="nav-list">
                <li class="flights ic-arrow"><a class="n1">Flights</a></li>
                <li class="hotel"><a class="n2">Hotel</a></li>
                <li class="cars"><a class="n3">Cars</a></li>
                <li class="travel-deal"><a class="n4">Best Travel Deals</a></li>
                <li>
                    <span class="booking-num">Book Online or call us 24/7 1888-1FLIGHT</span>
                </li>
            </ul>
            <ul>
                <li class="login">
                    <a class="login-icon"><img src="login-icon.png" width="5%"></a>
                    <a class="log-in n5">Log In</a>
                </li>
            </ul>
            <ul class="my-book-row">
                <li>
                    <a class="my-booking n6">My Booking</a>
                </li>
                <li>
                    <a class="cus-sup n7">Customer Support</a>
                </li>

            </ul>
        </nav>

    </div>
</header>
<body>
<div class="search-container">
    <div class="mr-sm-1">
        <h1>Cheap International Flights</h1>
        <p class="p1">Get up to <span class="d1">$20 ◊ off</span> our fees Today !!! </p>
    </div>
    <div class="d11"></div>
    <div class="b1"></div>
    <div class="search-box">
        <form action="search.php">
            <div class="search-box1">
                <div class="mar areabox">
                    <span class="glyphicon glyphicon-map-marker icon"></span>
                    <input class="areabox" name="from_city" type="text" placeholder="Departure">
                </div>
                <div class="mar areabox">
                    <span class="glyphicon glyphicon-map-marker icon"></span>
                    <input class="areabox" name="to_city" type="text" placeholder="Return">
                </div>
                <div class="search-box2  mar">
                    <input class="date-picker-start search-box2" data-provide="datepicker" placeholder="From Date">
                </div>
                <div class="search-box2 mar">
            <input class=" date-picker-start search-box2" data-provide="datepicker" placeholder="To Date">
            </div>
            <div class="search-box8 sel mar">
                <select name="" id="select_adult" class="sel1">
                    <option value="Adult">Adult</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="search-box3 sel mar">
                <select name="" id="" class="sel1">
                    <option value="children">Children</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
                <div class="search-box5232323 sel mar">
                    <select name="" id="" class="sel1">
                        <option value="children">Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="search-box3434342 sel mar">
                    <select name="" id="" class="sel1">
                        <option value="children">Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="search-box23 sel mar">
                    <select name="" id="" class="sel1">
                        <option value="children">Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <button class="submit1" type="submit">Search now</button>
    </div>

    </form>

</div>
</div>

<style>

    .submit1{
        margin: 10px;

        padding-left: 5px;
        height: 40px;
        float: left;
        width: 160px;
        background-color: #ff6a31!important;
        font-size: 20px;
        border: #ff6a31;
        color: #fefefe;

    }
    .submit1:hover{
        transform: scale(1.1, 1.1);
        box-shadow: 0px 0px 100px 0px rgb(247, 202, 18);
        transition: .8s ease;
        color: #0b18ff;
    }
    .areabox{
        height: 40px;
        width: auto;
        font-size: 15px!important;
        text-transform: uppercase;
    }
    .areabox,.icon{
        background-color: #fefefe;
        float:left;
    }
    .icon{
        color:#dddddd;
        font-size:20px;
        padding:5px;
    }
    .areabox input{
        border:0;
        padding:5px;
        font-size:12px;
    }
    .mar{
        margin: 10px;
    }
    .sel1{
        color: #717171;
        border: #fefefe;
        margin-top: 10px;
    }
    .sel {

        background-color: #fefefe;
        border: #fefefe;
    }


    .search-box2 {
        padding-left: 5px;
        height: 40px;
        font-size: 15px;
        float: left;
        width: 120px !important;
        border: #fefefe;
    }

    .search-box1 {
        margin-left: 20px;
    }

    .b1 {
        z-index: -1;
        opacity: 0.3;
        width: 100%;
        margin-top: 30px;
        height: 60px;
        background-color: #4761a9;
    }

    .search-box {

        padding-top: 50px;
        text-align: center;
        width 100%;
        background-color: #673636cf;
        height: 145px;
    }

    .p1 {
        color: #f9f9f9;
        font-weight: bold;
        padding-top: 20px;
        font-size: 20px;
        text-align: center;
    }

    h1 {
        color: #f9f9f9;
        font-weight: bold;
        padding-top: 40px;
        text-align: center;
    }

    .d1 {
        color: #f1a844;
    }

    .n1, .n2, .n3, .n4, .n5, .n6, .n7:hover {
        color: white;
    }

    .ic-arrow::before {
        position: relative;
        top: 32px;
        left: 25px;
        content: "";
        border: 10px solid;
        border-top-color: transparent;
        border-left-color: transparent;
        border-right-color: transparent;
        color: #f87f41;

    }

    .search-container {
        width: 80%;
        margin-left: 10%;
        height: 440px;
    }

    .booking-num {
        color: #ff9a0b;
    }

    body {
        background-image: url("../img/background-plane.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .flights, .hotel, .cars, .travel-deal, .login, .my-booking {
        cursor: pointer;
         color: #8a949a;

    }
    .login{
        top: -28px;
        position: relative;
        left: 632px;
    }
    .my-book-row{
        position: relative;
        left: 408px;
        top: -18px;

    }
    .cus-sup, .my-booking{
        float: right;
        color: #8a949a!important;
    }

    .booking-num{
        position: relative;
        left: 264px;
        bottom: 25px;
        font-size: 20px;
    }
    .nav-brand{
        position: relative;
        left: -250px;
        cursor: pointer;

    }
    .nav-list{
        margin-top: -38px;
    }
    li:first-child{
        margin-left: 20px;
    }
    li{
        position: relative;
        color: #fff;
        top: -10px;
    }
    .nav-bar, .nav-brand, li {
        float: left;
        padding-left: 36px;
        display: block;
    }
    header{
        background-color: #080024;
        width 1200px;
        height: 100px;
    }
    .container{
        margin-right: auto;
        margin-left: auto;
        padding-left: 15px;
        padding-right: 15px;
    }

</style>

<script>
    $('.date-picker-start').datepicker({
        format: 'dd.mm.yyyy',
        numberOfMonths: 2,
        autoclose: true
    }).on('changeDate', function (e) {
        //on change of date on start datepicker, set end datepicker's date
        $('.date-picker-end').datepicker('setStartDate', e.date)
    });

</script>

</body>
</html>