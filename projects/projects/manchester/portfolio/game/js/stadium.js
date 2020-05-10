$(function () {

    $("#left_entrance").click(function () {
        callBackend('left');
    });

    $("#right_entrance").click(function () {
        callBackend('right');
    });


    function callBackend(side) {
        $.post("../backend.php",{side:side},function (result) {
            alert(result);
        });
    }





});