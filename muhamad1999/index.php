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
</style>
</body>
</html>