$(function () {
    $("#calculator td").click(function () {
        var input = $(this).data('num');
        //Step 1: We collect the data-num='2' value from clicked td cell.
        //Step 2: We call the function "dispatch" by passing the "input" which is the data-num='2' value
        dispatch(input);
    });
});
var number = '';
var operator = '';
var is_new = true;
function dispatch(input) {
    //Step 3: We concatenate numbers and signs with "number" variable which starts with number = ''
    number+=input;

    //Step 4: if "input" == plus or other signs then assign the signs to "operator" variable.
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
    //Step 5: If "input" == 'reset' then call the function "display" by passing the "input" variable and also reset parameter = true
    if (input == 'reset'){
        display(input, true);
        return false;
    }
    //Step 6: If "input" == '=' then call the function "execute" and return false immediately.
    if (input == '='){
        execute();
        return false;
    }
    //Step 7: Add the numbers 5 * 5 to $(".result")
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