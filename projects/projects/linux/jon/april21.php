<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="mycontainer">
    <div class="mybox">

            <div class="myloginform">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="div_left">
                <div class="div_left_text">
                    <h4>Welcome to our page!</h4>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s</h6>
                </div>
            </div>
            <div class="div_right"></div>
    </div>
</div>

<style>
    body{
        background-color: #1f2851;
    }
    .div_left_text{
        width: 450px;
        position: relative;
        left: 0px;
        top: 100px;
    }
    .mycontainer{
        width: 1400px;
        margin: auto;
    }
    .myloginform{
        width: 390px;
        height: 430px;
        position: absolute;
        left: 520px;
        top: 110px;
        z-index: 100;
        text-align: center;
        background-color: rgba(0, 123, 255, 0.25);
        color: #202f35;
    }
    .div_left{
        width: 50%;
        height: 100%;
        display: inline-block;
        background-color: #d1d7d9;
        float: left;
    }
    .div_right{
        width: 50%;
        display: inline-block;
        background-color: darkgreen;
        float: right;
        height: 100%;
        background-image: url("https://i.insider.com/5e5feaa0fee23d451b3cd259?width=1100&format=jpeg&auto=webp");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .mybox{
        width: 100%;
        height: 450px;
        border-top: 10px solid #345ba1;
        border-bottom: 10px solid #345ba1;
        margin: 100px auto;
        text-align: center;
    }
</style>

</body>
</html>