$(function () {

    //Highlights when we click on that empty cell.
    $(".highlight_cell").click(function () {
        $(".cells").toggleClass("highlight_cell");
    })


    $(".header_cell").eq(0).click(function () {
            $(".cells").removeClass('mytd');
            $(".mytd1").html(1);
            $(".mytd1").toggleClass("mytd");
    });

    $(".header_cell").eq(1).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd2").html(2);
        $(".mytd2").toggleClass("mytd");
    });

    $(".header_cell").eq(2).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd3").html(3);
        $(".mytd3").toggleClass("mytd");
    });

    $(".header_cell").eq(3).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd4").html(4);
        $(".mytd4").toggleClass("mytd");
    });

    $(".header_cell").eq(4).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd5").html(5);
        $(".mytd5").toggleClass("mytd");
    });

    $(".header_cell").eq(5).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd6").html(6);
        $(".mytd6").toggleClass("mytd");
    });

    $(".header_cell").eq(6).click(function () {
        $(".cells").removeClass('mytd');
        $(".mytd7").html(7);
        $(".mytd7").toggleClass("mytd");
    });



});