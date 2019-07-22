<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<body>
    <title>login</title>
<link href="/css/bootstrap.css" rel="stylesheet">


<style>
    .mysignin{
        border-top: 1px solid #cfcfde;
        margin: 7px;
        padding: 20px;
        width: 98%;
        background-color: white;


    }
        .mytitle{
            text-align: center;
            font-family: "American Typewriter";
        }
    .input-group{

        border-bottom-width: inherit;
        
    }
        .signin{
            background-color: #0496ec;
            border-radius: 5px;
            font-family: "American Typewriter";
            color: white;
        }
    .mylogin{
        background-color: rgba(113, 139, 167, 0.85);
        height: 50%;

    }
    .mydiv{
        background-color: rgb(235, 238, 241);
        width: 98%;


    }
    .password{
        font-family: "American Typewriter";
    }
    .forgot{
        font-family: "American Typewriter";
    }
    .rememberme{
        font-family: "American Typewriter";
    }
</style>
    <div class="mylogin">
        <div class="mydiv">
        <div class="mysignin">


    <h2 class="mytitle">Sign in to my-it-education</h2>
    <h6 class="mytitle">my-it-education.slack.com</h6>
    <h4 class="mytitle">Enter your email address and password</h4>


    <form action="/action-page.php">
        <p><input class="input-group" type="text"placeholder></p>
        <p><input class="input-group" type="text"placeholder></p>
        <p><button class="input-group signin" type="sign in" value="Sign in">Sign in</button></p>
        <input class="rememberme" type="checkbox" name="Remember me" value="Remember me"> Remember me
        <br>
        <br>
        <a class="password" href="#"> Forgot password </a>   |   <a class="forgot" href="#">Forgot which email you used?</a>


    </form>
</div>
        </div>
    </div>

</body>