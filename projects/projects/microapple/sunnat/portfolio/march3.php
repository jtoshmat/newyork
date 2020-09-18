<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap-grid.css">
    <script src="../../../../js/jquery-3.4.1.min.js"></script>
    <title>Document</title>
</head>
<body>


<button class="butn">click me</button>
<div class="text">ugruergouerwhckewecjew</div>
<div class="box">box</div>

<script>
    $(function () {
        $(".butn").click(function () {
            $(this).css('background-color', 'green');
        });
        $(".text").dblclick(function () {
            $(this).css('font-size', 'large');
        });
        $(".box").click(function () {
            $(this).css('background-color', 'blue');
        });
        $(".box").dblclick(function () {
            $(this).fadeOut('fast');
        });

    });
</script>

<style>

    .butn {
        background-color: blue;
    }

    .text {
        font-size: x-small;
        cursor: pointer;
    }

    .box {
        width: 200px;
        height: 200px;
        background-color: green;
    }

</style>
</body>
</html>
