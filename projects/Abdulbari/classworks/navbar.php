<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello JQ</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <script src="../javascripts/jquery-3.4.1.js"></script>
</head>
<body>

<div class="emptybox" style="height: 100px"></div>
<div class="container-fluid">

    <div class="myboxes box1"> <img src="pics/blogmain1.jpg"> </div>
    <div class="myboxes box2"><p><h1>THIS IS SECOND BOX</h1></p></div>
    <div class="clearfix"></div>
    <div class="boxbttns">
          <button data-id="1" class="btn btn-dark bttns">BLACK</button>
          <button data-id="2" class="btn btn-success bttns">GREEN</button>
          <button data-id="3" class="btn btn-danger bttns">RED</button>
          <button data-id="4" class="btn btn-info bttns">BLUE</button>
    </div>
</div>

<style>
    .box1 img {
        width: 220px;
        height: 228px;
        margin: 10px;
    }
    body {
        background-color: rgba(70, 70, 70, 1);
    }
    .container-fluid {
        margin: auto;
        background-color: rgba(37, 97, 251, 0.42);
        width: 40%;
        height: 360px;
        border-radius: 5px;
    }
    .myboxes {
        width: 240px;
        height: 250px;
        float: left;
        background-color: red;
        margin: 30px 15px 10px 15px;
        border-radius: 10px;
        text-align: center;
    }
    .boxbttns {
        text-align: center;
    }
    .bttns {
        margin: 10px;
        padding: 10px;
        text-align: center;
        color: black;
    }
    .box2 {
        padding: 20px;
    }
</style>
<script>


    $(function () {
        $("button").click(function () {
            var id = $(this).data('id');
            replaceBoxText(id);

        });

    });


    function replaceBoxText(id){

        var img = 'https://article.images.consumerreports.org/f_auto/prod/content/dam/CRO%20Images%202019/Magazine/04April/CR-Cars-InlineHero-ComingSoon-Toyota-Supra-2-19';

        switch (id){
            case 1:
                 img = "http://cdn.dota2.com/apps/dota2/images/blogfiles/dotaplus_sets_blog.png";
                 $(".box1 img").attr('src', img);
                 $(".box2").html("First Button was clicked");
            break
            case 2:
                img = "https://cdn.vox-cdn.com/thumbor/h_9Yo5BgN6GmZa14s-LPpMoIJtE=/0x0:2040x1360/1200x800/filters:focal(796x188:1122x514)/cdn.vox-cdn.com/uploads/chorus_image/image/60737885/oai5.0.jpg";
                $(".box2").html("You just clicked 2nd bttn");
                $(".box1 img").attr('src', img);
                break
            case 3:
                img = "http://cdn.gamer-network.net/2019/metabomb/dotaunderlordsalliances.jpg";
                $(".box2").html("<h1>Third Button was clicked</h1>");
                $(".box1 img").attr('src',img);
                break
            case 4:
                img = "http://cdn.dota2.com/apps/dota2/images/blogfiles/dotaplus_sets_blog.png";
                $(".box2").html("<h2>4th button was clicked!!!</h2>");
                $(".box1 img").attr('src', img);
        }
    }
</script>
</body>
</html>