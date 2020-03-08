$(function () {
    //User input activities
    $("#chat_input").keydown(function (e) {
<<<<<<< HEAD
        var msg = $(this).val();
        var allmsg = $(".left_bubble").html();
        if (e.which == 13) {
            allmsg += "<div title='Feb 25, 2020 4:53 PM' class='chat_texts'>" + msg + "</div>";

            $(".left_bubble").html(allmsg);
            $(this).val('');
            e.preventDefault();
        }
=======
    var msg = $(this).val();
    var allmsg = $(".left_bubble").html();
    if (e.which == 13) {
        allmsg += "<div title='Feb 25, 2020 4:53 PM' class='chat_texts'>" + msg + "</div>";

        var userid = 2;

        $(".left_bubble").html(allmsg);
        var msg = $(this).val();
        $(this).val('');

        $.post( "backend/uzchatsave.php", {from_userid:2, to_userid:3, msg:msg}, function( data ) {
            getChatMessages(userid);
        });
        e.preventDefault();
    }
>>>>>>> 4693ad4f7210306e5b5fcfb5968b62e9daa7d429



    });


    $(".chat_users").click(function () {
        $('.middlediv').scrollTop($('.middlediv')[0].scrollHeight);
        var userid = $(this).data('userid');
        var fullname = null;
<<<<<<< HEAD
        $.post( "backend/uzchat.php", {userid:userid}, function( data ) {
            $(".left_bubble").html(data);
        });

    })
});
=======
        getChatMessages(userid);

    })
});


function getChatMessages(userid){
    $.post( "backend/uzchat.php", {userid:userid}, function( data ) {
        $(".left_bubble").html(data);
    });
}
>>>>>>> 4693ad4f7210306e5b5fcfb5968b62e9daa7d429
