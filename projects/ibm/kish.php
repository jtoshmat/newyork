<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kishauwaus</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div style="height: 50px"></div>
    <div class="son1">

        <div class="son1_left">
            <div style="height: 20px"></div>
            <img src="img/cabin1.jpg">
            <img src="img/cabin2.jpg">
            <img src="img/cabin1.jpg">
            <img src="img/cabin1.jpg">
            <img src="img/cabin1.jpg">
        </div>

        <div class="son1_right"> Son 1 right</div>
        <div class="clearfix"></div>


    </div>
</div>


<style>

    .son1_left img:hover{
        opacity: 1;
        width: 89%;

    }

    .son1_left img{
        width: 85%;
        margin: auto;
        border-radius: 10px;
        border: 1px solid black;
        box-shadow: black 5px 5px 5px 5px;
        cursor: pointer;
        margin-bottom: 37px;
        opacity: 0.6;
    }

    .son1_left{
        width: 25%;
        background-color: green;
        height: 700px;
        float: left;
        text-align: center;
    }

    .son1_right{
        width: 75%;
        background-color: white;
        height: 700px;
        float: right;
    }


    body{
        background-color: grey;
    }
    .son1{
        width: 50%;
        margin: auto;
        height: 700px;
        background-color: white;
    }
</style>

</body>
</html>