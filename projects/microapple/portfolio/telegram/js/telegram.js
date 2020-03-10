$(function () {
    //User input activities
    $("#chat_input").keydown(function (e) {
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



    });


    $(".chat_users").click(function () {
        $('.middlediv').scrollTop($('.middlediv')[0].scrollHeight);
        var userid = $(this).data('userid');
        var fullname = null;
        getChatMessages(userid);

    })
});


function getChatMessages(userid){
    $.post( "backend/uzchat.php", {userid:userid}, function( data ) {
        $(".left_bubble").html(data);
    });
}