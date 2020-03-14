$(function () {
    $("#calculator td").click(function () {
        var input = $(this).data('num');
        dispatch(input);
    });
});
var number = '';
var operator = '';
var is_new = true;
function dispatch(input) {
    number+=input;
    if (input=='+'){
        operator = '+';
    }else if (input == '-'){
        operator = '-';
    }
    else if (input == '*'){
        operator = '*';
    }else if (input == '/'){
        operator = '/';
    }
    if (input == 'reset'){
        display(input, true);
        return false;
    }
    if (input == '='){
        execute();
        return false;
    }
    if (input == '+'){
        return false;
    }
    if (input == '-'){
        return false;
    }
    if (input == '/'){
        return false;
    }
    if (input == '*'){
        return false;
    }
    display(number);
}
function execute() {
    var numbers = $(".result").text();
    var result = eval(numbers);
    display(result);
    operator = '';
    number = '';
    is_new = true;
    return false;
}
function display(input, reset=false) {
    if (reset){
        $(".result").html('0');
        number = '';
        return false;
    }

    if (number.length==0 || input==0){
        number='';
        is_new = false;
        return false;
    }
    if (number.length>10){
        return false;
    }
    $(".result").html(input);
}