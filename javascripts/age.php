<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find fun activities for all ages</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="/javascripts/myjavascripts.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <h1>FUN FUN FUN</h1>


    <div>
        <img class="myimg" src="https://www.insidehighered.com/sites/default/server_files/media/iStock-520374378.jpg">
    </div>
    <div class="result"></div>
    <form class="form-control">
        <p><input class="age" name="age" type="number" placeholder="Age">
            <button type="submit">Calculate</button></p>
    </form>


</div>

<style>
    .result{
        background-color: #e3d8dd;
        height: 50px;
        border: 1px solid #1b1e21;
        padding:5px;
        font-size: 14px;
        color:#ff0000;
    }

    .myimg{
        width:200px;
        border: 1px solid #000;
        margin:5px;
        display: none;
    }

</style>

</body>
</html>