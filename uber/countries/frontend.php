<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>countries</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
<div class="box">
    <div class="logo"><img id="logo" src="img/logo.png"></div>
    <form>
        <p class="ph">
            <span class="span"><img id="icon" src="img/uzb.png"</span>
            <input id="input" type="text" placeholder="Enter Country Name">

        </p><br>
        <p>
            <select id="select">
                <option>Population</option>
                <option>Geography</option>
                <option>Politics</option>
            </select>
        </p><br>
        <p><input id="submit" type="submit" value="Search"></p>
    </form>

</div>
</div>
<style>
    .ph{
        margin-top: 20px;
    }
    #submit{
        font-size: 20px;
        margin-left: 105px;
        width: 200px;
        height: 30px;
        background: #00e200;
        border-radius: 5px 5px 5px 5px;
        box-shadow: darkblue 3px 3px 3px 3px;
    }
    .span{
        margin-left: 30px;
        padding-top: 5px;
    }
    #select{
        font-size: 20px;
        margin-left: 105px;
        width: 200px;
        height: 30px;
        box-shadow: darkblue 3px 3px 3px 3px;
    }
    #icon{
        margin-left:20px;
        width: 35px;
        height: 20px;
    }
    #input{
        font-size: 20px;
        width: 56%;
        height: 28px;
        border-radius: 5px 5px 5px 5px;
        box-shadow: darkblue 3px 3px 3px 3px;

    }
    .container{
        width: 100%;
    }
    .box{
        background: rgba(0, 0, 157, 0.67);
        width: 400px;
        height: 400px;
        margin: auto;
        margin-top: 100px;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 5px 5px 5px 5px;
        border: 2px solid black;
    ;
    }
    .logo{
        text-align: center;
    }
    #logo{
        margin-top: 30px;
        width: 180px;
        height: 100px;
    }
    body{
        background: gray;
    }
</style>
<script>
    $(function(){
        $("#input").keyup(function () {
            var name = $(this).val();
           switch (name) {
               case "Uzbekistan":
                   changeFlag("img/uzb.png");
                   break;
               case "uzbekistan":
                   changeFlag("img/uzb.png");
                   break;
               case "United States":
                   changeFlag("img/usa.png");
                   break;
               case "united states":
                   changeFlag("img/usa.png");
                   break;
               default:
                   changeFlag("img/flag.png");
                   break;

           }

        })
        function changeFlag(img="img/uzb.png") {
           $("#icon").attr("src",img);
        }
    });
</script>

</body>
</html>