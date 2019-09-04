<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>


    <form action="/action_page.php">

        <h2>Login Form</h2>


        <div class="input">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" required>
        </div>

        <div class="input">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw" required>
        </div>



        <button onclick="document.getElementById('id01').style.display='block'"style="width:20;">Login</button <br>

        <div id="loginform">

            <span class="psw">Forgot <a href="#">Username/</a> <a href="#">Password?<br>

            <span class="act"><a href="#">Create new account</a></span>

        </div>
    </form>


    /*<p><textarea></textarea> name="biography"</textarea></p>*/
    /*<p><input name="reset" value="Start over" type="reset"></p>*/
    /*<form method="post" action="italianchef.php"> shunda qaysi betda ochilish kk bosa oshatda oschiladi*/




        <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
        "max-width:500px; margin: auto">
        }

        * {
            box-sizing: border-box;
        }

        .input {
            display: flex;
            width: 20%;
            margin-bottom: 25px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;


        .act {
            padding: 14px 20px;
            margin: 8px 0;
        }

        }
    </style>



</body>
</html>

