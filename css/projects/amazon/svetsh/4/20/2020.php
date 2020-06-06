<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bootstrap</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/2020.css">
    <script src="/js/jquery.js"></script>
</head>
<body>

<div class="container">
    <div id="calculator">
        <h3> My calculator </h3>
    <table class="table table-bordered">
        <tr>
            <th class="display_area" colspan="4">
                0
            </th>
        </tr>
        <tr>
            <td class="resetbtn">AC</tdresetbtn>
            <td>&plus;&minus;</td>
            <td class="operator">&percnt;</td>
            <td class="operator">/</td>
        </tr>
        <tr>
            <td class="number">7</td>
            <td class="number">8</td>
            <td class="number">9</td>
            <td class="operator">*</td>
        </tr>
        <tr>
            <td class="number">4</td>
            <td class="number">5</td>
            <td class="number">6</td>
            <td class="operator">-</td>
        </tr>
        <tr>
            <td class="number">1</td>
            <td class="number">2</td>
            <td class="number">3</td>
            <td class="operator">+</td>
        </tr>
        <tr>
            <td class="number" colspan="2">0</td>
            <td>&dot;</td>
            <td class="executebtn">=</td>
        </tr>
    </table>
    </div>
</div>
<script>

    $(function () {

        //1) get all numbers when they are pressed

        var num1 = '';
        var num2 = '';
        var operator = '';
        var result = '';

        //Get Number 1
        $(".number").click(function () {

            var mynumber = '';

            if (num1.length>8){
                return false; //exit
            }

            var num = $(this).text();

            if (!operator) {
                num1 += num;
                mynumber = num1;
            }else{
                num2 += num;
                mynumber = num2;
                $(".display_area").text('');
            }


            $(".display_area").text(mynumber);

            console.log(mynumber);

        });

        //Get operator
        $(".operator").click(function () {
            var op = $(this).text();

            if(op=='×'){
                op = '*';
            }

            if (op=='÷'){
                op = "/";
            }
            operator += op;
        });

        //Reset button
        $(".resetbtn").click(function () {
            num1 = '';
            num2 = '';
            operator = '';
            $(".display_area").text(0);
        });

        //Execute button
        $(".executebtn").click(function () {
            if (!num1 || !num2 || !operator){
                return false;
            }
            var myoperator = operator;
            result = eval(" "+num1+" "+myoperator+" "+num2+" ");

            if (result % 1 !== 0){
                result = result.toFixed(1);
            }

            $(".display_area").text(result);
            num1 = '';
            num2 = '';
            operator = '';
            operator = '';
        });



    })
</script>
</body>
</html>