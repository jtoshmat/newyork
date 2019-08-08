<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    <div class="mybox myboxtop">
        This is a <strong>text</strong> in the top Box
    </div>

    <div class="mybox myboxbottom">
        This is a text in the bottom Box
    </div>

    <div id="buttons">
        <button id="reset" class="btn btn-danger" id="btnleft">Reset</button>
        <button id="copy" class="btn btn-primary" id="btnleft">Copy</button>
    </div>
</div>

<style>

    #buttons{
        position: relative;
        bottom: -200px;
    }

    .container{
        text-align: center;
    }

    .mybox{
        width:150px;
        height:150px;
        background-color: #ffe671;
        margin: auto;
        position: relative;
    }

    .mybox:first-child{
        width:150px;
        height:150px;
        background-color: #e23f82;
        margin: auto;
        position: relative;
    }

</style>

<script>

    $(function () {
        $("#copy").click(function(){
            //get
            var topboxtext = $(".myboxtop").html();
            var bottomboxtext = $(".myboxbottom").html();

            //set
            $(".myboxbottom").html(bottomboxtext + topboxtext);

        });

        $("#reset").click(function(){
            $(".myboxbottom").html('This is a text in the bottom Box');
        });

    });


</script>

</body>
</html>