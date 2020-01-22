
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mondayproject</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="topheader">
            <a class="mynav"    "active" href="#home">Home</a>
            <a class="mynav1"    href="#Contact">Contact</a>
            <a class="mynav1"    href="#About">Julia</a>
        </div>

    </div>
    <div class="mycarousel">
        Div Image
    </div>
    <div class="mycols">
        <div class="col1">
            <table>
                <tr>
                    <td> Host 1</td>
                    </tr>
                    <tr> <td> Free</td> </tr>
                <tr> <td> Sem Cracios</td> </tr>
                    <tr><td> Sem Dominio</td> </tr>
                <tr><td><button class="btn btn-primary"> Buy Now</button></td>  </tr>
                </tr>
            </table>
        </div>
        <div class="col2">
            <table>
                <tr>
                    <td> Host 2</td>
                </tr>
                <tr> <td> Free</td> </tr>
                <tr> <td> Sem Cracios</td> </tr>

                <tr><td> Sem Dominio</td> </tr>
                <tr><td><button class="btn btn-primary"> Buy Now</button></td>  </tr>
                </tr>
            </table>
        </div>
        <div class="col3">
            <table>
                <tr>
                    <td> Host 3</td>
                </tr>
                <tr> <td> Free</td> </tr>
                <tr> <td> Sem Cracios</td> </tr>

                <tr><td> Sem Dominio</td> </tr>
                <tr><td><button class="btn btn-primary"> Buy Now</button></td>  </tr>
                </tr>
            </table>
        </div>
    </div>

    <div class="footer">
        <table>
            <tr>Conditions of Use</tr><br>
            <tr>Privacy Notice</tr><br>
            <tr>Interest Based Ads</tr>
        </table>
    </div>

</div>
<style>


    html,
    body {
        margin: 0px;
        padding: 0px;
        width: 100%;

        font-family: "American Typewriter";
        font-size: 14px ;
    }


    .topheader {
        width: 100%;
        height: 50px;
        background-color: #5a616a;
        padding: 13px;
        font-size: 18px;
        text-align: center;





    }

    body {
        background-color: #000;
        color: white;
    }

    .mycarousel {
        width: 100%;
        height: 300px;
        background-color: #005cbf;
        background-image: url("monday.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        /*background-attachment: fixed;*/

    }

    .mycols {
        width: 100%;
        height: 200px;
        background-color: #ffffff;
        color: black;
    }

    .footer {
        width: 100%;
        height: 60px;
        background-color: #4CAF50;
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
    table tr:nth-child(2) {
        background-color: #d8d8d8;
    }
    table tr:nth-child(5) {
        background-color: #d8d8d8;
        text-align: center;
    }
    .footer{

        left: 0%;
        bottom: 0;
        width: 100%;
        color: blue;
        text-align: center;

    }
    .mynav{
        float: left;
        color: red;
    }
    .mynav1{
        float: right;
        color: red;
        padding-right: 5px;
    }

</style>
</body>
</html>