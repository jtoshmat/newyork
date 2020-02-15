$(function () {


$(".highlight_cell").click(function () {
    $(".cells").toggleClass("highlight_cell");
})

    $(".cells").eq(1).mouseover(function () {
        alert("yay! you did it!");
    })

});