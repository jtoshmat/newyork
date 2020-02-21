<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<div class="background">
    <div class="h1"><h1>Cars for sale</h1></div>
<div class="container-fluid">
    <table>
        <tr>
            <th>No</th>
            <th>Model</th>
            <th>Price</th>
            <th>Picture</th>
            <th>Year</th>
        </tr>
        <tr>
            <td>1</td>
            <td>BMW</td>
            <td>75K$</td>
            <td class="cars"><img src="cars/bmw.png"></td>
            <td>2020</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Audi</td>
            <td>65k$</td>
            <td class="cars"><img src="cars/audi.jpg"> </td>
            <td>2018</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Nissan</td>
            <td>45k$</td>
            <td class="cars"><img src="cars/nissan.jpg"> </td>
            <td>2016</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Toyota</td>
            <td>50k$</td>
            <td class="cars"><img src="cars/toyota.jpg"> </td>
            <td>2019</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Honda</td>
            <td>20k$</td>
            <td class="cars"><img src="cars/honda.jpeg"> </td>
            <td>2000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Lexus</td>
            <td>22K$</td>
            <td class="cars"><img src="cars/lexus.jpg"></td>
            <td>2010</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Alfa Romeo</td>
            <td>88k$</td>
            <td class="cars"><img src="cars/alfa.jpg"> </td>
            <td>2015</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Cadilac</td>
            <td>93k$</td>
            <td class="cars"><img src="cars/cadilac.jpg"> </td>
            <td>2019</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Lincoln</td>
            <td>110k$</td>
            <td class="cars"><img src="cars/lincoln.png"> </td>
            <td>2020</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Chevy</td>
            <td>30k$</td>
            <td class="cars"><img src="cars/chevy.png"> </td>
            <td>2011</td>
        </tr>
    </table>
</div>
</div>
    <style>
        body {
            background-image: url("cars/body.jpg");
        }
        .background {
            margin: auto;
            width: 45%;
            height: 840px;
            background-color: #162e16;
            opacity: 0.85;
        }
        table tr td {
            background-color: white;
            border: 2px solid #18a0e6;
            font-family: Chalkboard;
            font-size: 45px;
        }
        table th {
            background-color: #11b848;
            color:white;
            border: 2px solid #18a0e6;
        }
        table {
            margin: auto;
        }
        .h1 {
            color: #18a0e6;
            font-family: Chalkboard;
            text-align: center;
        }
        .cars img {
            width: 35px;
            text-align: center;
        }
    </style>
</body>
</html>