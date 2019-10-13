$(function () {



    $(".mybtn").click(function () {
        var page = $(this).attr('data-link');

        if (page == 'signin') {
            $("#id01").show();
        }
        if (page == 'contactme') {
            alert("Hey siz contactme ni bosdizmi?");
        }
        if (page == 'facebook') {
            alert("Hello Facebook!");
        }

    });




});