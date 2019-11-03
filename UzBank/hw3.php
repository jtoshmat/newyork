<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Q&A</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="emptydiv"></div>
<div class="container-fluid">

    <img id="chase_logo" src="/uzbank/img/chase-logo.png">
    <hr>
    <p id="myp1"><b>Money Transfer</b></p>
    <div class="mydiv">
        <form>
            <span>
                <p id="myp2"><b>From:</b></p>
                <select id="select1">
                <option>Bank of America</option>
                <option>Chase Bank</option>
                <option>Wells Fargo</option>
                <option>CapitalOne</option>
                </select>
            </span>

        <div class="clearfix"></div>

            <span>
                <p id="myp2"><b>To:</b></p>
                <select id="select2">
                <option>Chase Bank</option>
                <option>CBank of America</option>
                <option>Wells Fargo</option>
                <option>CapitalOne</option>
                </select>
            </span><br>

        <div class="clearfix"></div>

            <p id="myp2"><b>Amount:</b></p>
            <input id="input" type="number" ></input><br>
            <div class="clearfix"></div>
            <button id="btn" type="submit" >Transfer</button>
        </form>
    </div>



</div>
<style>
    #btn{
        margin-left: 105px;
        width: 400px;
        background-color: #1770c4;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 3px 3px #9a9a9a;
    }
    #input{
        margin-left: 17px;
        width: 400px;
        background-color: #f8f8f8;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 3px 3px #9a9a9a;
    }

    #select2{
        width: 400px;
        margin-left: 65px;
        height: 30px;
        box-shadow: 3px 3px #9a9a9a;
    }

    #myp2{
        font-family: "Times New Roman";
        font-size: 20px;
        margin-left: 10px;
        float:left;
    }
    #select1{
        width: 400px;
        margin-left: 40px;
        height: 30px;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 3px 3px #9a9a9a;
    }
    #myp1{
        font-family: "Times New Roman";
        font-size: 20px;
        margin-left: 10px;
    }
    #chase_logo{
        width: 30%;
        margin-top: 20px;
    }
    .emptydiv{
        height: 100px;
    }
    .container-fluid{
        width: 100%;
        height: 500px;
        background-color: white;
    }
    body{
        background-color: #1a6896;
    }


</style>
</body>
</html>