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
<<<<<<< HEAD
 <div class="container-fluid">
     <div style="height: 50px;"></div>
     <div id="mycalculator">
        <table class="table">
            <tr>
                <td class="display" colspan="4">0</td>
            </tr>
            <tr>
                <td class="AC">AC</td>
                <td class="operator">+/-</td>
                <td class="operator">%</td>
                <td class="operator">÷</td>
            </tr>
            <tr>
                <td class="numbers">7</td>
                <td class="numbers">8</td>
                <td class="numbers">9</td>
                <td class="operator">×</td>
            </tr>
            <tr>
                <td class="numbers">4</td>
                <td class="numbers">5</td>
                <td class="numbers">6</td>
                <td class="operator">-</td>
            </tr>
=======
<div class="container-fluid mybox">
   <form id="myform" method="post">
       <p>My Basic Currency Calculator to USD</p>
       <p>
           Currency: <input name="currency" placeholder="Enter your currency amount" type="text" id="currency_amount">$
           <select name="currency_types" id="currency_types">
               <option value="rub">RUB</option>
               <option value="uzs">UZS</option>
               <option value="yen">YEN</option>
           </select>
           <button>Calculate</button>
       </p>
       <div id="myresults"></div>
>>>>>>> bb8f7b8089bcffa1c64071e69ba824973b2d3282

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
        $(".mybox").removeClass("rus_box");
        $(".mybox").removeClass("uzb_box");
        $(".mybox").removeClass("jpn_box");

        switch (currency_types) {
            case 'rub':
                output = currency_amount * 64.30;
                money_type = 'Rossiskiy Ruble';
                $(".mybox").addClass("rus_box");
                break;

            case 'uzs':
                output = currency_amount * 9491.18;
                money_type = 'Uzbek SOM';
                $(".mybox").addClass("uzb_box");
                break;

            case 'yen':
                output = currency_amount * 109.48;
                money_type = 'Japanese YEN';
                $(".mybox").addClass("jpn_box");
                break;

            default:
                alert("Currency type must be selected or not found");
                break;
        }
        $("#myresults").html(output.toFixed(2)+" "+money_type).fadeIn('slow');

    }


</script>

<style>
    #currency_amount{
        width:70px;
    }
    .mybox{
        background-color: #520006;
        color: #ffe14a;
        width: 500px;
        height: 200px;
        margin: auto;
        border:1px solid black;
    }
<<<<<<< HEAD
    .display{
       font-size: 47px;
        text-align: right;
        background-color: #4c4c4c !important;
        color: white;
=======
    #myresults{
        background-color: #f5cbcd;
        border: 1px solid black;
        color:black;
        padding:5px;
        display: none;
>>>>>>> bb8f7b8089bcffa1c64071e69ba824973b2d3282
    }

    .uzb_box{
        background-image: url("img/uzb_bg.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        color:darkblue;
    }

    .rus_box{
        background-image: url("img/rus_bg.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        color:darkblue;
    }
    .jpn_box{
        background-image: url("img/jpn_bg.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        color:darkblue;
    }

</style>
</body>
</html>
