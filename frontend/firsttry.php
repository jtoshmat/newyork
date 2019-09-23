<!doctype html>
<html lang=en>
<head>
    <meta charset=“utf-8”>
    <meta name=“viewport”
          content=“width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0”>
    <meta http-equiv=“X-UA-Compatible” content=“ie=edge”>
    <title> CSS Practices</title>
    <script src=“/js/jquery-3.4.1.min.js” type=“text/javascript”>
    </script>
</head>
<body>
<img src="/img/jon.jpeg" class=“btw” alt="mypicture">

<style>
    .bmw {
        width: 200px;
        height: 200px;
        border: 5px solid black;
        position: relative;
    }
</style>

<script>
    $(function () {
        $("#mymove").click(function () {
            $(".bmw").css({"left”: "150px”, "top”: “150px”});
            $("#myreset").click(function () {
                $(".bmw").css({"left”: "0px”, "top”: “0px”});
            })
        })
    })
</script>
<br>
<button id=“mymove”>Move</button>
<button id=“mereset”>Reset</button>
</body>
</html>
