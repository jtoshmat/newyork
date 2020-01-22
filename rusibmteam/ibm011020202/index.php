<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
​
<div>
    <h4>My Contact Form</h4>
    <form id="myform">
        <p>First Name:   <input type="text" name="first_name" placeholder="First Name"></p>
        <p>Last Name:   <input type="text" name="last_name" placeholder="Last Name"></p>
        <p>Email Address:   <input type="email" name="email" placeholder="Email Address"></p>
        <p>Phone Number:   <input type="tel" name="phone" placeholder="Phone Number"></p>
        <p>Your Message</p>
        <p>
            <textarea name="message"></textarea>
        </p>
        <p>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </p>
    </form>
    ​
    <hr>
    <div id="result">
        ​
    </div>
    ​
    ​
    ​
</div>
​
<script>
    ​
    $(function () {
        $("#myform").submit(function () {
            var data = $(this).serialize();
            validateFormInputs();
            return false;
        });
​
        $("input[type=text]").keydown(function () {
            validateFormInputs();
        });
​
        $("input[type=email]").keydown(function () {
            validateFormInputs();
        });
​
        $("input[type=tel]").keydown(function () {
            validateFormInputs();
        });
​
        $("textarea[name=message]").keydown(function () {
            validateFormInputs();
        });
​
    ​
    });
​
    ​
    function validateFormInputs(){
        var first_name = $("input[name=first_name]").val();
        var last_name = $("input[name=last_name]").val();
        var email = $("input[name=email]").val();
        var phone = $("input[name=phone]").val();
        var message = $("textarea[name=message]").val();
        var myhtml = "First Name: " + first_name +" <br>";
        myhtml += "Last Name: " + last_name +" <br>";
        myhtml += "Email Address: " + email +" <br>";
        myhtml += "Phone Number: " + phone +" <br>";
        myhtml += "Message: " + message +" <br>";
​
        $("#result").html(myhtml);
​
    }
​
    ​
</script>
​
</body>
</html>