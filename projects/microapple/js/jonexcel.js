$(function () {


    $(".highlight_cell").click(function () {
        $(".cells").toggleClass("highlight_cell");
    })


    $(".cells").eq(1).click(function () {
        alert("YAY!, I DID IT!");
    });




});