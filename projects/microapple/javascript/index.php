<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Javascript World!</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div id="mybox">
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>
    <div class="photos"><img src="https://api.time.com/wp-content/uploads/2019/08/better-smartphone-photos.jpg?w=600&quality=85"></div>



    <div class="mybuttons">
        <nav>
            <a class="btn btn-success" href="#">Change Background</a>
            <a class="btn btn-light" href="#">Hide image</a>
            <a class="btn btn-danger" href="#">Show the images</a>
            <a class="btn btn-dark" href="#">Ask Something</a>
            <a class="btn btn-info" href="#">Something</a>
        </nav>
    </div>
</div>

<script src="../js/scripts.js"></script>


<style>

    .mybuttons{
        height: 100px;
         border-top: 5px solid #e47398;
         border-bottom: 5px solid #e47398;
    }

    .photos img{
        width: 100%;
        margin: 10px;
    }

    .photos{
        width: 190px;
        height: auto;
        display: inline-block;
    }

    body{
        background-color: #1e4266;
    }
    #mybox{
        width: 600px;
        height: 500px;
        background-color: whitesmoke;
        margin: auto;
        text-align: center;
        margin-top: 100px;
    }
</style>

</body>
</html>