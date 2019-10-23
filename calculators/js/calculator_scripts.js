$(function () {

    //1) get all numbers when they are pressed

    var num1 = '';
    var num2 = '';
    var operator = '';
    var result = '';

    //Get Number 1
    $(".numbers").click(function () {

        var mynumber = '';

       if (num1.length>8){
           return false; //exit
       }

       var num = $(this).val();

       if (!operator) {
           num1 += num;
           mynumber = num1;
       }else{
           num2 += num;
           mynumber = num2;
           $(".textview").val('');
       }

       console.log("Number 1: " + num1);
       console.log("Operator: " + operator);
       console.log("Number 2: " + num2);

        $(".textview").val(mynumber);

    });

    //Get operator
    $(".operator").click(function () {
       var op = $(this).val();

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
       $(".textview").val(0);
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

        $(".textview").val(result);
       num1 = '';
       num2 = '';
       operator = '';
       operator = '';
    });



})