<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight search</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <form method="get" action="search.php">

    <div>
        <p>
            <input class="from-to" name="from_city" placeholder="From: City or Airport">
        <input class="from-to" name="to_city" placeholder="To: City or Airport">
        </p>
        <p>
            <select name="company" class="from-to">
                <option value="Any">Any</option>
                <option value="uzbek">Uzbekistan Airways</option>
                <option value="turk">Turkish Airlines</option>
                <option value="british">British Airlines</option>
                <option value="aeroflot">Aeroflot</option>
            </select>
            <select class="from-to">
                <option value="business">Business class</option>
                <option value="first">First class</option>
                <option value="economy">Economy class</option>
            </select>

        </p>
        <a>Departure <a>Return </a><a>Adult </a><a>Child</a></a>
        <p>
             <input class="dep-ar" type="date" name="departure_date">
          <input class="dep-ar" type="date" name="arrival_date">
             <select class="dep-ar" name="adult">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
             <select class="dep-ar" name="child">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

        </p>

        <button class="button" type="submit">Search</button>

        <div class="plane">
            <img src="../img/plane-512.png" style="width: 52%">
            Flight only
        </div>
        <div class="round">
            Roundtrip
        </div>


    </div>
    </form>
</div>
<style>
    body{
        background-image: url("../img/plane-over-water2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .container{
        background-color: #05122a;
        height: 500px;
        margin-top: 100px;
        padding-top: 250px;
        border-radius: 5px 5px;
        color: white;
        opacity: 0.8;
    }
    .plane{
         background-color: #004a97;
         width: 80px;
         height: 70px;
         text-align: center;
         border-radius: 5px;
         position: relative;
         font-family: "Arial Narrow";
         font-weight: bold;
         color: white;
         left: 3px;
         bottom: 400px;
     }
    .round{
        background-color: #004a97;
        width: 80px;
        height: 35px;
        padding-top: 3px;
        text-align: center;
        border-radius: 2px;
        position: relative;
        font-family: "Arial Narrow";
        font-weight: bold;
        color: white;
        left: 3px;
        bottom: 370px;
    }
    .from-to{
        width: 40%;
        border-radius: 3px 3px;
    }
    .dep-ar{
        border-radius: 3px 3px;
        width: 19%;
        margin-right: 12px;

    }
    .button{
        width: 20%;
        text-align: center;
        border-radius: 3px 3px;
        background-color: #c8e4ce;

    }
    a{
        padding-right: 16%;
        position: relative;

    }

</style>

</body>
</html>