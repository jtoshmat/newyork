<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holiday Inn Vacation Brochure</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="myemptydiv"></div>
<div id="mycard">
    <div class="firstdiv">
        <div class="firstleftchild">
            <img src="img/holidayinn.png">
        </div>
        <div class="firstrightchild">
            <img src="img/vacation.png">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="myemptydiv2"></div>
    <div class="seconddiv">

        Call (855) 420-4006<br>
        VIP Reservation Code IHG DM ORL 011<br>
        Early Booking Bonus expires: 1/1/20


    </div>
    <div class="myemptydiv3"></div>
    <div class="thirddiv">
        <div class="myaddress">
        <img class="barcode" src="img/barcode.png"><br>
            Jon Toshmatov<br>
            1846 Burnett Street Apt 28B <br>
            Brooklyn, NY 11229 <br>
        </div>

    </div>
    <div class="myemptydiv4"></div>
    <div class="fourthdiv">
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into
    </div>

</div>
</div>
<style>
    .fourthdiv{
        margin-left: 30px;
        font-size: 11px;
        font-family: "American Typewriter";
        color:grey;
    }
    .myemptydiv4{
        height:20px;
    }
    .myaddress{
        position: relative;
        left: 40px;
    }

    .barcode{
        width:250px;
        height: 30px;
    }
    .myemptydiv3{
        height: 40px;
    }
    .myemptydiv2{
        height: 10px;
    }
    .seconddiv{
        padding-left: 30px;
    }
    .firstleftchild img{
        width: 150px;
        margin-top: 30px;
        margin-left: 40px;
    }
    .firstleftchild{
        width: 50%;
        float: left;
    }
    .firstrightchild{
        width: 50%;
        float: right;
        height: 150px;

    }

    .firstrightchild img{
        position: relative;
        z-index: 1000;
        width:200px;
        right: -100px;
        top: -15px;
    }
    .myemptydiv{
        height: 40px;
    }
    body{
        background-color: black;
    }

    #mycard{
        width: 600px;
        height:auto;
        background-color: white;
        border: 1px solid grey;
        border-radius: 2px;
        box-shadow: #54565b 3px 3px 3px 3px;
        margin: auto;
    }

</style>
</body>
</html>