$(function () {


    $(".box").click(function () {
        $(this).css("background-color","#fcfcfc");
    });



    $("#btnreset").click(function () {
       $(".box").eq(0).css("background-color","#d6ba12");
       $(".box").eq(1).css("background-color","#d72899");
       $(".box").eq(2).css("background-color","#38935d");
    });

});