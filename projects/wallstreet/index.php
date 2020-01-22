<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="container-fluid">

    <div class="mytext mytext_left">
        <img src="https://s.marketwatch.com/public/resources/images/MW-GY386_manhat_ZH_20181112131533.jpg">
    </div>
    <div class="mytext mytext_right">
        <img src="https://image.businessinsider.com/5d7a99cd2e22af1fc853eca8?width=1100&format=jpeg&auto=webp">
    </div>
    <div class="clearfix"></div>

    <div class="bottomdiv">
        <button class="btn btn-success copy_to_right"> >>> </button>
        <button class="btn btn-info copy_to_left"> <<< </button>
        <div class="mydesc"></div>
    </div>
</div>


<style>

    .mydesc{
        background-color: lightblue;
        color: darkred;
        width: 200px;
        height: 100px;
        border: 1px solid black;
        position: relative;
        left: 143px;
        top: -52px;
        display: none;
    }

    .mytext{
        background-color: #cbe7ac;
        height: auto;
        width:200px;
        border: 1px inset black;
        float: left;
        min-height: 150px;
        margin: 20px;

    }

    .mytext img{
        width: 100%;
        height: 150px;
    }

    .mytext:first-child{
        background-color: #ffb8be;
    }
</style>

<script>
    $(function () {

    })
</script>
</body>
</html>