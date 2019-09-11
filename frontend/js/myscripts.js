$(function () {
//#############################################
    /*
        Pseudocode
        1) Get the first number from the user - Done
           a) Disable the 0 for the first number - Done
           b) Set the max length to 5 - Done

        2) Keep concatinating the 1st number until the user presses the nonnumeric key - Done

        3) Get the sign key - WIP

        4) Get the second number from the user
           a) Disable the 0 for the first number
           b) Set the max length to 5

        5) Keep concatinating the 2nd number until the user presses the = sign key
        6) Do the calculation
        7) Display the result
        8) Set AC to reset the calculator - Done



     */
var number1 = '';
var number2 = '';
var operator = '';

$(".reset").click(function () {
    number1 = '';
    number2 = '';
    operator = '';
    $(".display").text(0);
});

$(".num").click(function () {
    if (!operator){
        number1 += $(this).text();
        $(".display").text(number1);
    }else{
        number2 += $(this).text();
        $(".display").text(number2);
    }
});

$(".sign").click(function () {
    txt = $(this).text();
    switch (txt){
        case 'x':
            operator = '*';
            break;
        case '÷':
            operator = '/';
            break;

        case '-':
            operator = '-';
            break;
        case '+':
            operator = '+';
            break;
        default:
            return false;
            break;
    }
});

$(".execute").click(function () {
    if (!number1 || !number2){
        return false;
    }
    var result = eval(number1 + operator + number2);
    $(".display").text(result);

});





    document.addEventListener("keydown", function(event) {
        var num = event.key;
        if (!isNaN(num) && number1.length<5){
            number1 += num;
            $(".display").text(number1);
        }
    })














});