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
    <h1>This is Rustam's Comp</h1>
</head>
<body>

=======
<!DOCTYPE html>
<html>
=======
<!doctype html>
<html lang="en">
>>>>>>> dfb3c852630bde04016632dfc9eccd0b8b900834
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

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

>>>>>>> 701e20e0f1fb5e88737f4805b0d0277beda4dab7
</body>
</html>