<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"><script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>NYC Air King</title>
</head>

<header>
    <div class="container">
        <h5>
            <a class="nav-brand" id="my-nav">
                <img src="airkinglogo.png" width="40%" title="NYC AirKing Search your flight in best fare!" alt="NYC AirKing Search your flight in best fare!">
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
                    <a class="login-icon" ><img src="login-icon.png" width="5%"></a>
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
    <div class
<form action="search.php">
    <p>From <input name="from_city" type="text"></p>
    <input class="date-picker-start" data-provide="datepicker">
    <p>To <input name="to_city" type="text"></p>
        <button>Search</button>

</form>
</div>

<style>
    .n1, .n2, .n3, .n4, .n5, .n6, .n7:hover{
        color: white;
    }
    .ic-arrow::before{
        position: relative;
        top: 49px;
        left: 25px;
        content: "";
        border: 10px solid;
        border-top-color: transparent;
        border-left-color: transparent;
        border-right-color: transparent;

    }
    .search-container{
        width: 70%;
        background-color: #d6d8db;
        margin-left: 13%;
        height: 440px;
    }
    .booking-num{
        color: #ff9a0b;
    }
    body{
        background-image: url("../img/background-plane.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
     .flights, .hotel, .cars, .travel-deal, .login, .my-booking{
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
        autoclose : true
    }).on('changeDate',function(e){
        //on change of date on start datepicker, set end datepicker's date
        $('.date-picker-end').datepicker('setStartDate',e.date)
    });

</script>

</body>
</html>