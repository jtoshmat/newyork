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


<<<<<<< HEAD
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
=======
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
        <h3 style="text-align: center">Contact Us</h3>
        <div class="myform">
            <form method="post">
                <table class="table">
                    <tr>
                        <td><label>First Name: </label></td>
                        <td><input required="required" name="firstname" type="text" placeholder="First Name"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name: </label></td>
                        <td><input required="required" name="last" type="text" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <td><label>Email Address: </label></td>
                        <td><input required="required" name="email" type="email" placeholder="Your Email Address"></td>
                    </tr>

                    <tr>
                        <td><label>Your Message: </label></td>
                        <td>
                            <textarea class="text-lg-center" name="message"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="reset">RESET</button>
                            <button type="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<style>

    td:first-child {
        text-align: right;
        padding-right: 5px;
    }

    td:last-child {
        text-align: center;
    }

    td {
        border-top: none !important;
    }


    td:nth-child(2) {
        text-align: left;
        padding-left: 5px;
    }

    table {
        margin: auto;
        width: 80%;
    }

    .myform {
        margin: auto;
        text-align: center;
    }

    .mynav {
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
        text-align: center;
        margin: auto;
        margin-left: 20px;
    }

<<<<<<< HEAD
    .mynav ul{
        list-style: none;
    }

    .mynav li{
        width:100px;
        margin:10px;
        padding:5px;
        background-color: #ffc7a1;
        color:#f00;
=======
    .mynav ul {
        list-style: none;
    }

    .mynav li {
        width: 100px;
        margin: 10px;
        padding: 5px;
        background-color: #ffc7a1;
        color: #f00;
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
        float: left;
        border-radius: 5px;
        box-shadow: #3a90ea 10px 10px 20px;
    }

<<<<<<< HEAD
    .mynav a{
        text-decoration:none ;
    }

    .mynav li:hover{
=======
    .mynav a {
        text-decoration: none;
    }

    .mynav li:hover {
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
        background-color: #2858cd;
        color: #fffdb2;
    }


<<<<<<< HEAD
    .myheader{
=======
    .myheader {
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
        margin: auto;
        font-size: 40px;
        text-align: center;
        color: #e2e23a;
        font-family: "American Typewriter";
        margin-top: 20px;
<<<<<<< HEAD
=======
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
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
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
<<<<<<< HEAD
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


=======
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
>>>>>>> f8fdc27b58afa63660ed6d8867669748052880f5
</style>

</body>
</html>