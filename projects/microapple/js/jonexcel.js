$(function () {

    //Highlights when we click on that empty cell.
    $(".highlight_cell").click(function () {
        $(".cells").toggleClass("highlight_cell");
    });

    //Remove when mouse leaves the header letters
    $(".header_cell").mouseleave(function () {
        $(".cells").removeClass('mytd');
    });
    for(var i=0; i<7; i++){
        $(".header_cell").click(function () {
            var id = $(this).data('id');
            highlightcells(id);
            console.log(id);
        });
    }
    function highlightcells(col_num) {
        col_num++;
        $(".cells").removeClass('mytd');
        $(".mytd"+col_num).toggleClass("mytd");
    }
});