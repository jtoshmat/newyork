//display
//operators
//numbers

$(function () {

    var num1 = '';
    var num2 = '';
    var operator = '';
    var result = '';
    var numbers = '';


    $(".numbers").click(function () {


        var mynumber = '';

        if (num1.length >= 9) {
            return false; //exit
        }


        var num = $(this).text();

        if (!operator) {
            num1 += num;
            mynumber = num1;
        } else {
            num2 += num;
            mynumber = num2;
            $(".display").text('');
        }

        console.log("Number 1: " + num1);
        console.log("Operator: " + operator);
        console.log("Number 2: " + num2);

        $(".display").text(mynumber);

    });


    $(".operator").click(function () {
        var op = $(this).text();

        if (op == '×') {
            op = '*';
        }

        if (op == '÷') {
            op = "/";
        }
        operator += op;
    });

    $(".AC").click(function () {
        num1 = '';
        num2 = '';
        operator = '';
        $(".display").text (0);
    });


        $("#result").click(function () {
            console.log("Result=" + num1 + operator + num2);
            if (!num1 || !num2 || !operator) {
                return false;
            }
            var myoperator = operator;
            result = eval(" " + num1 + " " + myoperator + " " + num2 + " ");

            if (result % 1 !== 0) {
                result = result.toFixed(1);
            }

            $(".display").text(result);
            num1 = '';
            num2 = '';
            operator = '';
            operator = '';


        });
    });


    function add(num1, num2) {
        return eval(num1 + "+" + num2);
    }

    function subtract(num1, num2) {
        return eval(num1 + "-" + num2);
    }

    function multiply(num1, num2) {
        return eval(num1 + "*" + num2);
    }

    function divide(num1, num2) {
        return eval(num1 + "/" + num2)
    }
