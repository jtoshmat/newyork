<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<h4>Leave Your Comments</h4>
<div id="myform">

    <form action="march28.php" method="post">
        <p>Your Comment:</p>
        <p>
            <textarea name="your_comment" placeholder="Your comment goes here"></textarea>
        </p>

        <p>
            <button type="submit">Post</button>
        </p>
    </form>

    <hr>
    <?php
    include_once "jon.php";
    ?>

</div>


<style>
    *{
        margin: 10px;
        padding:5px;
    }
    textarea{
        width: 400px;
        height: 300px;
    }
</style>

</body>
</html>