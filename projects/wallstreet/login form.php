<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div class="myform">
        <div class="title">
            <h1 style="color: blue"><b><i>Form</i></b></h1>
        </div>
        <form method="post">
            <div class="myin">
                <input type="text" placeholder="Isim" required>
            </div>
            <div class="myin">
                <input type="text" placeholder="Familiya">
            </div>
            <div class="myin">
                <input class="form-control-file border" type="file">
            </div>
            <div class="myin">
                <textarea class="mytext" placeholder="Matini kiriting"></textarea>
            </div>
            <div class="myin">
                Yashash joyingiz ?
                <select class="myselect">
                    <option>Uzbek</option>
                    <option>Ruskiy</option>
                    <option>Tajik</option>
                </select>
            </div>
            <div class="myin">
                <input class="mybuttons" type="button" value="Yuborish"> | <input class="mybuttons" type="reset"
                                                                                  value="Tozalash">
            </div>
        </form>
    </div>

</div>


<style>
    .myfile {
        width: 200px;
        height: 25px;
    }

    .mybuttons {
        background-color: darkgrey;
        color: yellow;
        font-size: medium;
        width: 120px;
        height: 30px;
        border-radius: 5px;
    }

    .myselect {
        width: 100px;
        height: 25px;
    }

    .mytext {
        width: 250px;
        height: 50px;
        border-radius: 5px;
        font-style: italic;
    }

    .title {
        text-align: center;
        padding: 10px;
    }

    .myin {
        text-align: center;
        padding: 5px;
    }

    .myin input[type=text] {
        width: 250px;
        height: 25px;
        border-radius: 5px;
        color: green;
    }

    .myform {

        width: 800px;
        height: 600px;
        margin: auto;
        margin-top: 44px;
        background-color: white;
        border: 1px solid black;
        box-shadow: #0c1e3d;
        5px 5px 5px 5px;
        border-radius: 15px;
        color: black;
    }

    body {
        background-color: #112e65;
        color: #ffcf57;
    }
</style>

</body>
</html>
