$(function () {


$(".highlight_cell").click(function () {
    $(".cells").toggleClass("highlight_cell");
})
    $(".cells").eq(3).click(function () {
        alert("yay u did it");
    })
});