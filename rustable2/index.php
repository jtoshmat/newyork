<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cars Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>
<h3 class="mytitle">Welcome Rustam's Car Collections!</h3>
    <div class="container-fluid">
        <div class="mycars">
            <table class="table table-bordered">
                <tr>
                <td>ID</td>
                <td>Make</td>
                <td>Model</td>
                <td>Price</td>
                <td>Image</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Porsche</td>
                    <td>GTC</td>
                    <td>90,000$</td>
                    <td><img src="pics/porsche.jpg"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Audi</td>
                    <td>R8</td>
                    <td>120,000$</td>
                    <td><img src="pics/audi3.jpg"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mers</td>
                    <td>MayBach</td>
                    <td>250,000$</td>
                    <td><img src="pics/mers2.jpg"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lexus</td>
                    <td>LC 500</td>
                    <td>300,000$</td>
                    <td><img src="pics/lexus2.jpg"></td>
                </tr>
            </table>
        </div>
    </div>
<style>
    body{
        background-color: #fff3cd;
    }
    .mytitle{
        color: #ec364f;
        font-family: "American Typewriter";
        text-align: center;
        margin-top: 20px;
    }
    table td img:hover{
        width: 133px;
        box-shadow: #ffeb21 5px 5px 5px 5px;
    }
    tr:hover{
        color: red;
        cursor: pointer;
        background-color: #4c6d96 !important;
    }
    tr:nth-child(odd){
        background-color: #cecece;
    }
    tr:first-child td{
        background: #4f0000;
        color: yellow;
        font-family: "American Typewriter";
        font-size: 19px;
        font-weight: bolder;
    }

    td{
        text-align: center;
        font-family: "American Typewriter";
        font-size: 16px;
        border: 1px solid #3f3f3f !important;
    }



    table td img{
        width: 124px;
        border: 1px solid black;
        border-radius: 10px;
        box-shadow: black 5px 5px 5px 5px;
    }
    table{
        background-color: white;
    }
</style>
</body>
</html>