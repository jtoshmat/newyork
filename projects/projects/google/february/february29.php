<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="browser">
            <div class="topdiv">
                <i class="fas fa-circle mycircle"></i>
                <i class="fas fa-circle mycircle"></i>
                <i class="fas fa-circle mycircle"></i>
            </div>
            <div class="topdiv2">
                <div class="mytab">Document</div>
                <i class="fas fa-plus myplus"></i>
                <div class="topdivletters">
                    <div class="topdiva">
                        <i class="fas fa-arrow-left mybuttons"></i>
                        <i class="fas fa-arrow-right mybuttons"></i>
                        <i class="fas fa-window-close mybuttons"></i>
                        <i data-url="http://newyork.local" class="fas fa-home mybuttons"></i>
                        <input placeholder="http://newyork.local/projects" class="myinput" name="keyword" type="text">
                    </div>
                    <div class="topdivb">
                        <i class="fas fa-folder mybuttons"></i><span class="mybutton_texts">MY-IT-EDUCATIO..</span>
                        <i class="fas fa-folder mybuttons"></i><span class="mybutton_texts">Jon Toshmatov</span>
                        <i class="fas fa-folder mybuttons"></i><span class="mybutton_texts">How To Create</span>
                        <i class="fas fa-folder mybuttons"></i><span class="mybutton_texts">Referrer-Policy</span>
                    </div>
                </div>
            </div>
            <div class="contentdiv">
                <iframe id="content_window" src="https://www.maxxor.com/blog/wp-content/uploads/2013/01/CNN-website-1024x589.jpg"></iframe>
            </div>
    </div>
<style>
    html, body{
        width: 100%;
        height: 100%;
    }
    #content_window{
        width: 100%;
        height: 700px;
        overflow: auto;
    }
    .contentdiv img{
        width: 100%;
    }
    .mybutton_texts{
        color: whitesmoke;
        font-size: 80%;
        padding-left: 10px;
        padding-right: 2px;
    }
    .myinput{
        width: 60%;
        border-radius: 19px;
        margin-left: 20px;
        margin-top: 7px;
        height: 40px;
        border: none;
        padding:5px;
        padding-left: 10px;
    }
    .mybuttons{
        color: #e4e4e4;
        margin-left: 15px;
        margin-top: 10px;
        cursor: pointer;
    }
    .topdivletters{
        position: relative;
        top: -80px;
        left: 0;
    }
    .topdiva{
        height: 40px;
    }
    .topdivb{
        height: 40px;
    }
    .mycircle:first-child{
       color: #ff3e1b;
    }
    .mycircle:nth-child(2){
        color: #ffcd76;
    }
    .mycircle:last-child{
        color: #54db3d;
    }
    .mycircle{
        color: #f3f3f3;
        padding-top: 25px;
        padding-left: 7px;
        font-size: 80%;
    }
    .myplus{
        position: relative;
        left: 414px;
        top: -90px;
        color: white;
        font-size: 101%;
    }
    .mytab{
        width: 310px;
        height: 50px;
        background-color: #1f4c20;
        position: relative;
        left: 90px;
        top: -50px;
        border-top-left-radius: 11px;
        border-top-right-radius: 11px;
        color: white;
        padding: 10px;
        font-size: 90%;
    }
    .topdiv2{
        width: 100%;
        height: 80px;
        background-color: #1f4c20;
    }
    .topdiv{
            width: 100%;
            height: 60px;
            background-color: #1b331b;
        }
    #browser{
        width: 100%;
        height: auto;
        background-color: #f3f3f3;
    }
</style>
<script>
    $(function(){
        $(".myinput").keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                var url = $(this).val();
                $("#content_window").attr("src", url);
                return false;
            }
        });
        $(".mybuttons").click(function () {
            var url = $(this).data('url');
            if (url){
                $("#content_window").attr("src", url);
            }
        });
    });
</script>
</body>
</html>