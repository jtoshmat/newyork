<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Basic Calculator</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container-fluid mybox">
   <form id="myform" method="post">
       <p>My Basic Currency Calculator to USD</p>
       <p>
           Currency: <input name="currency" placeholder="Enter your currency amount" type="text" id="currency_amount">
           <select name="currency_types" id="currency_types">
               <option value="rub">RUB</option>
               <option value="uzs">UZS</option>
               <option value="yen">YEN</option>
           </select>
           <button>Calculate</button>
       </p>
       <div id="myresults"></div>

   </form>
</div>

<script>
    $(function () {
       $("#myform").submit(function () {
           calculate();
          return false;
       });
    });

    function calculate() {
        var currency_amount = $("#currency_amount").val();
        var currency_types = $("#currency_types").val();
        var output = '';
        var money_type = '';
        switch (currency_types) {
            case 'rub':
                output = currency_amount * 64.30;
                money_type = 'Rossiskiy Ruble';
                break;

            case 'uzs':
                output = currency_amount * 9491.18;
                money_type = 'Uzbek SOM';
                break;

            case 'yen':
                output = currency_amount * 109.48;
                money_type = 'Japanese YEN';
                break;

            default:
                alert("Currency type must be selected or not found");
                break;
        }
        $("#myresults").html(output.toFixed(2)+" "+money_type).fadeIn('slow');

    }


</script>

<style>
    .mybox{
        background-color: #520006;
        color: #ffe14a;
        width: 500px;
        height: 200px;
        margin: auto;
    }
    #myresults{
        background-color: #f5cbcd;
        border: 1px solid black;
        color:black;
        padding:5px;
        display: none;
    }
</style>
</body>
</html>
