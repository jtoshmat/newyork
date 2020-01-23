<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Form</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="mycontactform">
        <h4 style="text-align: center">Contact Us</h4>
        <form >
            <p><input required="required" type="text" name="yourname" class="input-group" placeholder="Your Full Name"></p>
            <p><input required="required" type="email" name="email" class="input-group" placeholder="Your Email"></p>
            <p><input required="required" type="tel" name="phone" class="input-group" placeholder="Your Phone"></p>
            <p><textarea class="form-control" rows="5"></textarea></p>
            <p><input required="required" type="tel" name="answer" class="input-group" placeholder="Your Answer for the security question"></p>
            <p style="text-align: right">
                <button type="reset" class="btn btn-light">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </p>

        </form>
    </div>
</div>


<style>


    .mybutton{
        width:90%;
        background-color: #d7d7d7;
        border-radius: 5px;
        border:1px solid #1b1e21;
        margin:5px;
        padding:5px;
        font-size: 14px;
    }

    .mytext{
        font-size: 15px;
        color:#1b1e21;
    }

    .mybox{
        width:23%;
        height:400px;
        float: left;
        margin:5px;
        background-color: #9fcdff;
        border: px solid #9fcdff;

    }

    form input, textarea{
        border:1px double #858585 !important;
    }

    .mycontactform form{
        width:80%;
        margin: auto;
    }
    .mycontactform{
        background-color: white;
        width: 100%;
        height: 425px;
    }

    body{
        background-color: #625da4;
    }

    ul a {
        display: block;
        height: 26px;
        line-height: 26px;
        text-decoration: none;
        font-weight: bold;
        text-transform: uppercase;
        padding: 0px 4px;
        background-color: #ffffff;
    }
    p {
        margin: 0;
    }



    .myheader{
        text-align: center;
    }
</style>
</body>
</html>