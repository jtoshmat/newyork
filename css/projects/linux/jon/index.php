<!DOCTYPE html>
<html>
<head>
    <title>Mening sahifamga xush kelibsiz!</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>


<div id="mysite">
    <div id="myheader">
        <img class="logo" src="https://i.pinimg.com/originals/3f/62/ce/3f62cecbe97525c85ee057bddcef8716.png">

        <div class="mytitle">
            <span>Welcome</span>
            <span>To</span>
            <span>My Site</span>
        </div>

    </div>
    <div id="mymenu">
        <nav class="mynav">
            <a title="Go home" href="#"> Home </a>
            <a title="Go About Us Page"  href="#"> About Us </a>
            <a title="Go Our Services page"  href="#"> Our Services </a>
            <a title="Click to Contact us"  href="#"> Contact Us </a>
        </nav>
    </div>
    <div id="mycontent">
        <div class="left_div">

            <ul class="left_menu_nav">
                <li><a href="#">Shohruhxon - Yoningdaman</a></li>
                <li><a href="#">Shohruhxon - Yurak</a></li>
                <li><a href="#">Shohruhxon - Malikam</a></li>
                <li><a href="#">Shohruhxon - Komila</a></li>
                <li><a href="#">Shohruhxon - Zo'rsan</a></li>
            </ul>

        </div>
        <div class="right_div">
            <iframe class="myyoutube_video" src="https://www.youtube.com/embed/9RzK6V-A_E0"></iframe>
        </div>
    </div>
</div>



<style>


    .left_menu_nav li:hover > a{
        color: yellow;

    }
    .left_menu_nav li:hover{
        background-color: darkred;
        cursor: pointer;
    }

    .left_menu_nav a{
        color:whitesmoke;
        text-decoration: none;

    }

    .left_menu_nav{
        margin-top: 100px;
    }

    .left_menu_nav li{
        text-align: center;
        list-style: none;
        background-color: #886f56;
        width: 294px;
        height: 42px;
        border-radius: 9px;
        border: 1px solid #104561;
        margin-bottom: 20px;
        padding: 4px;
        color: white;
        box-shadow: black 5px 5px 5px 5px;
    }

    .myyoutube_video{
        width: 60%;
        height: 551px;
        margin: auto;
        border: none;
        border: 1px solid black;
    }

    .left_div{
        width: 22%;
        float: left;
        background-color: #1d5877;
        height: 558px;
    }
    .right_div{
        width: 78%;
        float: right;
        background-color: black;
        height: auto;
        text-align: left;
    }


body{
    background-color: black;
}

    #mysite{
        width: 1700px;
        height: 700px;
        background-color: whitesmoke;
        margin: auto;
        border: 1px solid black;
    }

    #myheader{
        width: 100%;
        height: 100px;
        background-color: #f5f5f5;
    }
#mymenu{
    width: 100%;
    height: 40px;
    background-color: #630000;
    box-shadow: #98836d 5px 5px 85px 0px;
}
    #mycontent{
        width: 100%;
        height: 600px;
        background-color: #f5f5f5;
    }
    .logo{
        width: 250px;
    }

    .mynav{
        margin-left: 250px;
    }

    .mynav a{
        margin: 15px 15px;
        font-size: 115%;
        color: #cbaf8e;
        text-decoration: none;
    }

.mynav a:hover{
    color: #e6d856;
    border-bottom: 1px dotted greenyellow;
}

    .mytitle{
        float: right;
        width: 85%;
        position: relative;
        top: 14px;
        font-size: 290%;
        font-weight: bold;
        font-family: "Adobe Handwriting";
        text-shadow: #231c15 3px 3px;
    }

.mytitle span:first-child{
    color: #4f0001;
}
.mytitle span:nth-child(2){
    color: #807750;
}
.mytitle span:last-child{
    color: #cbaf8e;
}

</style>

</body>
</html>
