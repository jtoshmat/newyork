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
<<<<<<< HEAD
=======


    //User profiles activities on the left panel.
    $(".chat_users").click(function () {
        var userid = $(this).data('userid');
        var fullname = null;
        /*
        switch (userid) {
            case 1:
                fullname = 'Shukhrat';
                break;
            case 2:
                fullname = 'Sunnat';
                break;
            case 3:
                fullname = 'Shakhnoza';
                break;
            case 4:
                fullname = 'Bobur';
                break;
            case 5:
                fullname = 'Fotima';
                break;
            case 6:
                fullname = 'Zuhra';
                break;
            case 7:
                fullname = 'Asror';
                break;
            case 8:
                fullname = 'Jon';
                break;
            default:
                fullname = 'Somebody';
                break;

        }
         */
        /*
        if (userid==1){
            fullname = 'Shukhrat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else if(userid == 2){
            fullname = 'Sunnat';
        }else{
            fullname = 'Somebody';
        }
        */

        $.post( "backend/uzchat.php", {userid:userid}, function( data ) {
            $(".left_bubble").html( data );
        });

    })
>>>>>>> 48d3367635a74d1e3f986791df4b952ff6a0a58a
});
