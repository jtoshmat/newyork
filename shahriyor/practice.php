<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript">

    </script>
</head>
<body>
<button>click here</button>
<div id="c1">
    Hello
</div>
<script>
    $(document).ready(function() {
        $("button").click(function () {
            $("#c1").fadeToggle("slow");

        });
    });

</script>
<style>
    #c1 {
        background-color: blue;
        margin: 8px;
        color: white;

    }
</style>



</body>
</html>