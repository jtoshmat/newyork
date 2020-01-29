<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>You are on Umida's IP Address</h1>
</body>
</html>
=======
<?php
=======
<!DOCTYPE html>
<html>
=======
<!doctype html>
<html lang="en">
>>>>>>> 72723e6057248b97137d7f876a1a0e1e641a464a
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
>>>>>>> 1120df451df8619eda471cc2b05de8f707a807af

<form class="myform">
    <p>
            <label>Search: </label>
        <input name="keyword" type="text" placeholder="Your keyword">

    </p>
</form>

<div class="bottomdiv">

    <img id="myimage" src="img/aeroflot%20plane.jpg">

</div>


<script>

    $(function () {
        $("#myimage").click(function () {
            $(".myform").submit();
        });
    })


    var x = 0;
    $(window).resize(function(){
        x++;
        $(".myform input").val('x: ' + x);
    });

</script>

<style>

    .bottomdiv{
        position: absolute;
        bottom: 0px;
        left: 0px;
        background-color: #feffac;
        overflow: auto;
    }

    img{
        width: 200px;
    }
</style>

<<<<<<< HEAD
>>>>>>> 7397dd0d917dd9396ddc0416dcc0c1e39c114154
=======
</body>
</html>
>>>>>>> 1120df451df8619eda471cc2b05de8f707a807af
