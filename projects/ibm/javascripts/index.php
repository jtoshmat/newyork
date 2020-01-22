<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <h1>Welcome to My Javascript Class!</h1>

    <div id="jon">
        <div class="myboxes box1">

            1

        </div>

        <div class="myboxes box2">

            <img src="../../img/jontosh.png">

        </div>

        <div class="clearfix"></div>


        <button data-id="1" class="btn btn-success">Button 1</button>
        <button data-id="2" class="btn btn-info">Button 2</button>
        <button data-id="3" class="btn btn-dark">Button 3</button>
        <button data-id="4" class="btn btn-danger">Button 4</button>
        <button data-id="5" class="btn btn-primary">Button 5</button>
        <button data-id="10" class="btn btn-danger">Button 10</button>





    </div>



</div>

<style>
.box2 img{
    width: 100%;
    height: 180px;
    display: none;
}

    button{
        margin-left: 7px;
        margin-bottom: 20px;
    }
    #jon{
        width: 65%;
        margin: auto;
        text-align: center;
        border: 1px solid grey;
        box-shadow: black 5px 5px 5px 5px;
        border-radius: 10px;
    }

    .myboxes:first-child{
        background-color: #005685;
    }


    .myboxes{
        background-color: #a93462;
        width:250px;
        height: 200px;
        float: left;
        margin: 10px;
        border:1px solid black;
        color: white;
        padding:10px;
        font-size: 20px;
        font-family: "American Typewriter";
        text-align: center;

    }

    .myboxes:nth-child(2){
        float: right !important;
    }

    .mycustombox{
        background-color: darkblue !important;
        border:2px solid red !important;
    }
.mycustombox2{
    background-color: #ffb8be !important;
    border:2px solid red !important;
}

.mycustombox3{
    background-color: #7ee737 !important;
    border:2px solid red !important;
}

</style>



<script>
    $(function () {
        $("button").click(function () {
           var id = $(this).data('id');
           replaceBoxText(id);
        });
    });

    function replaceBoxText(id) {
        var img = 'https://article.images.consumerreports.org/f_auto/prod/content/dam/CRO%20Images%202019/Magazine/04April/CR-Cars-InlineHero-ComingSoon-Toyota-Supra-2-19';

        $(".box2").removeClass('mycustombox1');
        $(".box2").removeClass('mycustombox2');
        $(".box2").removeClass('mycustombox3');

        switch (id){
            case 1:
                img = "https://cdn.atwilltech.com/flowerdatabase/f/flowerama-red-rose-stunner-100-red-rose-arrangemen-5d66e5318b54a.300.jpg";
                $(".box1").html("You just <strong>clicked</strong> on the box number #1");
                $(".box2 img").attr('src', img).fadeOut("slow");
                $(".box2 img").attr('src', img).fadeIn("slow");
                $(".box2").addClass('mycustombox');
                break;
            case 2:
                img = "https://www.holland.com/upload_mm/6/2/2/68946_fullimage_kasteel-de-haar-1360.jpg";
                $(".box1").html("You just clicked on the box number #2");
                $(".box2 img").attr('src', img).fadeOut("slow");
                $(".box2 img").attr('src', img).fadeIn("slow");
                $(".box2").addClass('mycustombox2');
                break;
            case 3:
                img =  "https://boygeniusreport.files.wordpress.com/2020/01/capture-1.jpg?quality=98&strip=all";
                $(".box1").html("You just clicked on the box number #3");
                $(".box2 img").attr('src', img).fadeOut("slow");
                $(".box2 img").attr('src', img).fadeIn("slow");
                $(".box2").addClass('mycustombox3');
                break;
            case 4:
                img = "https://yt3.ggpht.com/a/AGF-l7-wxI7DLGTXjXY0-SYuB7Os-aFHwgmtf4jPUQ=s900-c-k-c0xffffffff-no-rj-mo";
                $(".box1").html("You just clicked on the box number #4");
                $(".box2 img").attr('src', img).fadeOut("slow");
                $(".box2 img").attr('src', img).fadeIn("slow");
                break;
            default:
                //img = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/1280px-Flag_of_Uzbekistan.svg.png";
                $(".box1").html("You just clicked on the box number Others");
                $(".box2 img").attr('src', img).fadeOut("slow");
                $(".box2 img").attr('src', img).fadeIn("slow");
                break;
        }
    }




</script>


</body>
</html>