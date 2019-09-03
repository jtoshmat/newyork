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


    <div class="myheader">Welcome to New York!</div>

    <nav class="mynav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="#3">Privacy</a></li>
            <li><a href="#4">About Us</a></li>
        </ul>
    </nav>




    <div class="mybox">

        <div class="form">

            <form>
                <p> First name <br><input required="required"</p>
                <p>Last name <br><input required="required"</p>
                <p>Email <br><input type="email" required="Only email required"</p>
                <p>Telephone <br><input required="required"</p>
                <p> Message <br><textarea> </textarea></p><br>
                <button class="Submit" type="submit">Submit</button>

            </form>

        </div>

    </div>


</div>

<style>

    .mynav{
        text-align: center;
        margin: auto;
        margin-left: 20px;
    }

    .mynav ul{
        list-style: none;
    }

    .mynav li{
        width:100px;
        margin:10px;
        padding:5px;
        background-color: #ffc7a1;
        color:#f00;
        float: left;
        border-radius: 5px;
        box-shadow: #3a90ea 10px 10px 20px;
    }

    .mynav a{
        text-decoration:none ;
    }

    .mynav li:hover{
        background-color: #2858cd;
        color: #fffdb2;
    }


    .myheader{
        margin: auto;
        font-size: 40px;
        text-align: center;
        color: #e2e23a;
        font-family: "American Typewriter";
        margin-top: 20px;
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
    }
    .mybox:hover{
        opacity: 1;
        cursor: move;
    }
    body {
        background-color: #254daa;
        background-image: url("img/city_bg.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .form {
        margin: auto;
        cursor: pointer;

    }
    textarea {
        width: 50%
    }


</style>

</body>
</html>