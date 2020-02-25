$(function () {

    $("#chat_input").keydown(function (e) {
        var msg = $(this).val();
        var allmsg = $(".left_bubble").html();
        if (e.which == 13) {
            allmsg += "<p>" + msg + "</p>";
            $(".left_bubble").html(allmsg);
            $(this).val('');
            e.preventDefault();
        }

    });
});