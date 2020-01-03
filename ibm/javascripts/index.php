<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <h1>Welcome to My Javascript Class!</h1>

</div>

<script>

    var cars = ['Audi','Alfa','BMW','Mercedes','Acura','Honda','Audi','Toyota','Fiat','Alfa'];

    for(var i=0; i<cars.length; i++){

        document.write("The hourse power is " + getCarsHoursePowers(cars[i]));
        document.write(" --- ");


        if (cars[i] == 'Alfa'){
            document.write("<span class='myalfa'>" + cars[i] + "</span>");
        }else if (cars[i] == 'Audi'){
            document.write("<span class='myaudi'>" + cars[i] + "</span>");
        }
        else{
            document.write(cars[i]);
        }

        document.write("<br> The price is " + getCarsPrices(cars[i]));
        document.write(" --- ");


        document.write("<hr>");
    }



    function getCarsPrices(car) {
        if (car == 'Alfa'){
            return 50000;
        }else if (car == 'Audi'){
            return 450000;
        }else{
            return 35000;
        }
    }


    function getCarsHoursePowers(car) {
        if (car == 'Alfa'){
            return 505;
        }else if (car == 'Audi'){
            return 350;
        }else{
            return 250;
        }
    }

</script>

<style>
    .myalfa{
        background-color: darkblue;
        color: #ffde3e;
        border:1px solid black;
        padding:3px;
        margin:2px;
    }

    .myaudi{
        background-color: #ff2450;
        color: #ffdb49;
        border:1px solid black;
        padding:3px;
        margin:2px;
    }
</style>

</body>
</html>