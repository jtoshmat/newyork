<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript Practice</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    Hello World in HTML!
</div>
<button>CLICK ME</button>
<button>CLICK ME</button>
<button class="clickme meningbuttonim">OPEN FORM</button>
<button>CLICK ME</button>
<button>CLICK ME</button>
<button>CLICK ME</button>


<div class="registermodal">

    <form>
        <p>Name: <input class="input-group"></p>
        <p>Age: <input class="input-group"></p>
        <p>Location: <input class="input-group"></p>
        <p>Phone: <input class="input-group"></p>
        <p>
            <button class="cancel_btn">Cancel</button>
            <button>Start Over</button>
            <button>Submit</button>
        </p>
    </form>

</div>

<div class="hidebox">
    <button class="clickme meningbuttonim">OPEN FORM</button>
</div>

<script>

    $(function () {
        $(".clickme").click(function () {
            $(this).css({"background-color":"#000", "color":"#fff"});
            $(".registermodal").fadeIn('slow');
            $(".hidebox").fadeIn('fast');
        });
        $(".cancel_btn").click(function () {
           $(".registermodal").fadeOut('slow');
           $(".hidebox").fadeOut('slow');
           return false;
        });
    });











</script>


<style>
    .meningbuttonim{
        background-color: #ff0000;
    }

    .registermodal{
        width:400px;
        background-color: #d7d7d7;
        border: 1px solid #000;
        position: absolute;
        left:10%;
        top:20%;
        z-index: 1000;
        display: none;
    }

    .hidebox{
        background-color: rgba(0, 0, 0, 0.99);
        width:100%;
        height: 100%;
        position: absolute;
        left:0;
        top:0;
        z-index: 999;
        display: none;
        opacity: 0.5;
    }


</style>


</body>
</html>