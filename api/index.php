<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>API Practice</title>
</head>
<body>

<?php
    header("Access-Control-Allow-Origin: *");
?>

<script>
    $(function () {
        $("#mybtn").click(function () {
            callHttp();
        });


        $("#myinput").keyup(function () {
            var myvalue = $(this).val();
            if (myvalue.length<4){
                return false;
            }
           //console.log(myvalue);


            if (myvalue.length<=5){
                $("#results").html('');
            }

            callHttp(myvalue);
        });



    });

    function callHttp(myvalue) {
        $.ajax({
            method: "GET",
            url: "http://lared.uz/api/list",
            data: {keyword: myvalue}
        })
            .done(function (jon) {



                $("#results").html(jon.country + '<br>').show();


            /*    $.each( jon, function( key, value ) {
                    $("#results").append(value.city + '<br>').show();
                });*/


            });
    }

</script>



<h1>My API Results</h1>

<input type="text" id="myinput" placeholder="Your keyword">


<div id="results"></div>
<button class="btn btn-primary" id="mybtn" type="button">GET MY USERS</button>


<style>
    #results{
        width:100%;
        height: 500px;
        background-color: #f1b0b7;
        display: none;
    }
</style>

</body>
</html>