<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Monday Project</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="topheader">
        Top header
    </div>
    <div class="mycaurosel">
        Div Image
    </div>
    <div class="mycols">

        <div class="col1">
            <table>
                <tr>
                    <td>Host 1</td>
                </tr>
                <tr>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Sem craicos</td>
                </tr>
                <tr>
                    <td>Sem Domino</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Buy Now</button></td>
                </tr>
            </table>
        </div>

        <div class="col2">
            <table>
                <tr>
                    <td>Host 2</td>
                </tr>
                <tr>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Sem craicos</td>
                </tr>
                <tr>
                    <td>Sem Domino</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Buy Now</button></td>
                </tr>
            </table>
        </div>

        <div class="col3">
            <table>
                <tr>
                    <td>Host 3</td>
                </tr>
                <tr>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Sem craicos</td>
                </tr>
                <tr>
                    <td>Sem Domino</td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Buy Now</button></td>
                </tr>
            </table>
        </div>

    </div>
    <div class="footer">
        Footer
    </div>
</div>
<style>

    html,
    body {
        margin:0;
        padding:0
        width: 100%;
        font-family: "American Typewriter";
        font-size: 14px;
    }
    .topheader{
        width:100%;
        height: 50px;
        background-color: #5a616a;

    }
    body {
        background-color: #000;
        color: white;
    }

    .mycaurosel{
        width:100%;
        height:300px;
        background-color: #005cbf;
        background-image: url("monday.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .mycols{
        width:100%;
        height:200px;
        background-color: #fff;
        color: #000;
    }

    .footer{
        width:100%;
        height:60px;
        background-color: #1e7e34;
    }

    .col1{
        width: 33%;
        float: left;
    }
    .col2{
        width: 34%;
        float: left;
    }

    .col3{
        width: 33%;
        float: left;
    }

    table{
        width: 100%;
    }


    table tr:nth-child(1){
        background-color: #0b2e13;
        color: #fff3cd;
        text-align: center;
    }

    table tr:nth-child(2){
        background-color: #d8d8d8;
    }

    table tr:nth-child(5){
        background-color: #d8d8d8;
        text-align: center;
    }

</style>
</body>
</html>