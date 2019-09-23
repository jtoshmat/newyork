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


var number1 ='';
var number2 = '';
var operator = '';
var is_result_ready = false;
$(".reset").click(function () {
    number1 = '';
    number2 = '';
    operator = '';
    $()

})
$("table td").click(function () {
    var txt = $(this).text();
    //Set AC to reset the calculator
    if (txt == 'AC'){
        resetCalculator();
        return false;
    }

    //Display the result
    if (txt == '='){
       //console.log('Number 1: ' + number1);
       //console.log('operator: ' + operator);
       //console.log('Number 2: ' + number2);
       return false;
    }

    number1 = setNumber1(txt);


    if (number1) {
        operator = setOperator(txt);
    }

    console.log(txt);



    return false;




    //$(".display").text(finalnumbers);

    return false;

   // $(".display").text(number1);

/*    if (number1.length==1 && number1==0){
        $(".display").text(0);
        return false;
    }

    if (number1.length<=3) {
        $(".display").text(number1);
    }*/

    //calculate(number1,5, 'x');
});

function setOperator(txt) {
    if (txt == '-'){
        operator = '-';
        return false;
    }
    if (txt == '+'){
        operator = '+';
        return false;
    }
    if (txt == 'x'){
        operator = '*';
        return false;
    }
    if (txt == '÷'){
        operator = '/';
        return false;
    }
    return false;
}

function resetCalculator() {
    is_operator_clicked = false;
    finalnumbers = '';
    number1 ='';
    number2 ='';
    operator ='';
    $(".display").text(0);
    return false;
}

function displayResult() {
    alert("display result");
    return false;
}

function setNumber1(txt) {
    if (!isNaN(txt)){
        if (txt==0 && finalnumbers.length<1){
            return false;
        }
        finalnumbers+=txt;
    }else{
        //Sign key is pressed
        number1 = finalnumbers;
        finalnumbers = '';
        //$(".display").text(number1);
        //setNumber2(txt);
        return false;
    }

    //Set the max length of both numbers
    if (finalnumbers.length>5){
        return false;
    }
   // $(".display").text(finalnumbers);

    return finalnumbers;
}

function setNumber2(txt) {
    if (!isNaN(txt)){
        if (txt==0 && finalnumbers.length<1){
            return false;
        }
        finalnumbers+=txt;
        number2 = finalnumbers
    }else{

        //Sign key is pressed
        number2 = finalnumbers;
        //$(".display").text(number2);
        return false;
    }

    //Set the max length of both numbers
    if (finalnumbers.length>5){
        return false;
    }
    //$(".display").text(finalnumbers);

    return finalnumbers;
}

function calculate(number1, number2, operator){
    number1 = parseInt(number1);
    number2 = parseInt(number2);
    var result = number1 * number2;
    //$(".display").text(result);
    return false;
}

document.addEventListener("keydown", function (event) {
    var num = event.key;
    if (!isNaN(num) && number1.length<5){
        number1 += num;
        $(.display).text(number1);
    }

}
    "")
function displayResult() {
    alert("Displaying the result");
    return false;
}


//#############################################
});