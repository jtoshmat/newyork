<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid mycontainer">
    <div class="shimdiv"></div>
    <div class="usericon">
        <img src="img/user_profile_icon.png">
    </div>
    <div class="mylogin">
        <div class="shimdiv2"></div>

        <div class="myform">
            <div class="shimdiv3"></div>
            <p class="logintitle">Member Login</p>
            <form>
                <p class="forminputs"><input placeholder="Username"></p>
                <p class="forminputs"><input placeholder="Password"></p>
                <p class="forminputs"><button class="btn btn-primary mybtn">SIGN IN</button></p>
            </form>

        </div>
    </div>
</div>
<style>
.forminputs{
    text-align: center;
}

.mybtn{
    width: 71%;
    height:50px;
    background-color: #0f2e41;
}

.mybtn:hover{
    background-color: #ff4ec2;
}

.forminputs input{
    width: 71%;
    height:50px;
    border-radius: 5px;
    border: 1px solid #d2d2d2;
    padding-left: 20px;
    font-size: 20px;
}
    .logintitle{
        text-align: center;
        font-size: 40px;
        color: grey;
        font-family: "American Typewriter";
    }

    .mycontainer{
        width:800px;
    }

    .usericon{
        position: relative;
        width: 120px;
        top: 150px;
        left: 327px;
    }

    .usericon img{
        width: 100%;
    }
    .myform{
        width:86%;
        height: 400px;
        background-color: white;
        margin: auto;
        border-radius: 10px;
        border:1px solid #351d05;
    }

    .shimdiv{
        height: 65px;
    }
    .shimdiv2{
        height: 97px;
    }
    .shimdiv3{
        height: 67px;
    }
    .mylogin{
        width:550px;
        height:605px;
        background-color: #808080;
        margin: auto;
    }

    body{
        background-color: black;
    }
</style>

</body>
</html>