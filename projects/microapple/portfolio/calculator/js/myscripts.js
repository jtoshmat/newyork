$(function () {
    $("#calculator td").click(function () {
        var input = $(this).data('num');
        dispatch(input);
    });
});

function dispatch(input) {


    if (input == 'reset'){
        display(input, true);
        return false;
    }
    display(input);
}



function add(input) {
}

function minus(input) {
}

function multiply(input) {
}

function divide(input) {
}

function display(input, reset=false) {
    if (reset){
        $(".result").html('0');
        return false;
    }
    $(".result").html(input);
}