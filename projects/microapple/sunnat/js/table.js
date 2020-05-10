$(function () {
    $("#go").click(function () {
        var num = $("#num").val();
        var operator = $("#operator").val();

        if (operator == '+') {
            add(num, operator);
        } else if (operator == '-') {
            minus(num, operator);
        } else if (operator == '*') {
            multiply(num, operator);
        } else if (operator == '/') {
            divide(num, operator);
        }
        return false
    });
});
function add(num, operator, num) {
    var c = eval(num+ ' + ' + num);
    var resultText =  num + ' + ' + num + ' = ' + c;
    displayResults(resultText);
}

function minus(num, operator, num) {
    var c = eval(num+ ' - ' + num);
    var resultText =  num + ' - ' + num + ' = ' + c;
    displayResults(resultText);
}

function multiply(num, operator, num){
    var c = eval(num+ ' * ' + num);
    var resultText =  num + ' * ' + num + ' = ' + c;
    displayResults(resultText);
}

function divide(num, operator, num){
    var c = eval(num+ ' / ' + num);
    var resultText =  num + ' / ' + num + ' = ' + c;
    displayResults(resultText);
}

function displayResults(result) {
    $("#results").html(result);
}