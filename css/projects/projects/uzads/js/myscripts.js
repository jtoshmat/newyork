$(function () {

/*    $(".father li").click(function () {
        var row = $(this).attr('data-row');
        var elem = $(".child:eq("+row+")").css('display');
        if (elem == 'none'){
            $(".child:eq("+row+")").show();
        }else{
            $(".child:eq("+row+")").hide();
        }
    });*/


    $(".father li").click(function () {
        var row = $(this).attr('data-row');
        $(".child").hide();
        $(".child:eq("+row+")").toggle();
    });

