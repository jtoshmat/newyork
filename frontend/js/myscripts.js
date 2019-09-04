$(function () {
//#############################################


var is_operator_clicked = false;
var number1 ='';
var number2;
var operator;

$("table td").click(function () {
    var txt = $(this).text();
    number1+=txt;

    if (number1.length==1 && number1==0){
        $(".display").text(0);
        return false;
    }

    if (number1.length<=3) {
        $(".display").text(number1);
    }

    //calculate(number1,5, 'x');
});



function calculate(number1, number2, operator){
    number1 = parseInt(number1);
    number2 = parseInt(number2);
    var result = number1 * number2;
    $(".display").text(result);
    return false;
}


//#############################################
});