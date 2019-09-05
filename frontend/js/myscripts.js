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
    operator = $(this).text();
});

$(".execute").click(function () {
    var result = eval(number1 + operator + number2);
    $(".display").text(result);

});















});