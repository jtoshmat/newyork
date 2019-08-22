<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Practices</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">


    <div class="myheader"><span>W</span><span>elcome to New York!</span></div>

    <nav class="mynav">
        <ul>
            <li><a href="/frontend">Home</a></li>
            <li><a href="/frontend/contactus.php">Contact Us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>

    <div class="mybox">

        <h3>Contact Us</h3>


    </div>


</div>

<style>

    .mynav {
        text-align: center;
        margin: auto;
        margin-left: 20px;
    }

    .mynav ul {
        list-style: none;
    }

    .mynav li {
        width: 100px;
        margin: 10px;
        padding: 5px;
        background-color: #ffc7a1;
        color: #f00;
        float: left;
        border-radius: 5px;
        box-shadow: #3a90ea 10px 10px 20px;
    }

    .mynav a {
        text-decoration: none;
    }

    .mynav li:hover {
        background-color: #2858cd;
        color: #fffdb2;
    }


    .myheader {
        margin: auto;
        font-size: 40px;
        text-align: center;
        color: #e2e23a;
        font-family: "American Typewriter";
        margin-top: 20px;
        box-shadow: #3a90ea 10px 10px 20px;
        border: 1px solid #3888dd;
    }

    .myheader span {
        box-shadow: #3889df 10px 10px 20px;
    }

    .myheader span:first-child {
        box-shadow: #fffdb2 10px 10px 20px;
        border-radius: 30px;
        margin: 5px;
        padding: 5px;
        border: 2px dotted #3a90ea;
    }

    .mybox {
        width: 90%;
        height: 500px;
        background-color: #ffcd74;
        margin: auto;
        margin-top: 30px;
        border: 10px solid #533fff;
        padding-top: 20px;
        padding-left: 20px;
        border-radius: 30px;
        overflow: auto;
        text-transform: capitalize;
        font-style: italic;
        font-family: Arial, Helvetica, sans-serif;
    }

    .mybox:hover {
        opacity: 1;
        cursor: move;
    }

    /*
    This is main body style, I will change the bg later.

    @TODO: When I go home, I will spend more time to study the body and style
     */
    body {
        background-color: #254daa;
        background-image: url("http://i.stack.imgur.com/vhoa0.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>

</body>
</html>