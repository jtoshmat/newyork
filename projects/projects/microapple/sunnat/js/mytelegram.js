$(function () {
    $("#chat_input").keydown(function (e) {
        var msg = $(this).val();
        var allmsg = $(".left_bubble").html();
        if (e.which == 13){
            var newmsg =  allmsg + "<br>" + $(this).val()
            $(".left_bubble").html(newmsg);
            $(this).val('');
            e.preventDefault();
        };
    });
});

$(function () {
    //User input activities
    $("#chat_input").keydown(function (e) {
        var msg = $(this).val();
        var allmsg = $(".left_bubble").html();
        if (e.which == 13) {
            allmsg += "<div title='Feb 25, 2020 4:53 PM' class='chat_texts'>" + msg + "</div>";

            $(".left_bubble").html(allmsg);
            $(this).val('');
            e.preventDefault();
        }



    });


    $(".chat_users").click(function () {
        $('.middlediv').scrollTop($('.middlediv')[0].scrollHeight);
        var userid = $(this).data('userid');
        var fullname = null;
        $.post( "backend/uzchat.php", {userid:userid}, function( data ) {
            $(".left_bubble").html(data);
        });

    })
});