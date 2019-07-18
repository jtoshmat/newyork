<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and CSS</title>
</head>
<body>

<div id="main">

<div class="img1 myimg">
    <span class="myspan">HELLO WORLD</span>
    <img class="myimage" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Port_of_Dubuque.jpg"></div>
<div class="img2 myimg">
    <span class="myspan">HELLO WORLD 2222</span>
    <img class="myimage" src="http://downtowndubuque.org/wp-content/uploads/2015/04/Dubuque-Farmers-Market1-Dubuque-IA.jpg"></div>
<div class="img3 myimg">
    <span class="myspan">HELLO WORLD 33333</span>
    <img class="myimage" src="https://upload.wikimedia.org/wikipedia/commons/8/84/Dubuque_IA_-_overview.jpg"></div>
<div class="img4 myimg">
    <span class="myspan">HELLO WORLD  4444</span>
    <img class="myimage" src="http://thebigphotos.com/wp-content/uploads/2018/07/dubuque-iowa.jpg"></div>
</div>


<style>
.myspan{
    position: relative;
    left: 20%;
    top:10%;
    background-color: #d7d7d7;
    padding:5px;
    margin: 5px;
    z-index: 100;
}

.myimage:hover > .myspan{
    display: none;
    z-index: 10000;
}



    #main{
        background-color: #005cbf;
        width: 80%;
        margin: auto;
    }
    .myimage{
        width: 30%;
        height: 100%;
        border: 3px dotted #f52a3a;
        padding: 20px;
        background-color: #ffa791;
        margin: 3px;
        z-index: 99;
    }


    body{
        background-color: #abdde5;
    }
</style>






</body>
</html>