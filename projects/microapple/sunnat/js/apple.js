$(function () {
    $(".phpstorm").click(function () {
        $(".phpbox").slideToggle();
        $(".file").mouseover(function () {
            $(".phpbox").hide();
        });
    });
});
$(function () {
    $(".file").mouseover(function () {
        $(".filebox").slideToggle("fast");
        $(".phpstorm").mouseover(function () {
            $(".filebox").hide("fast");
            $(".edit").mouseover(function () {
                $(".filebox").hide();
            });
        });
    });
});
$(function () {
    $(".services").mouseover(function () {
        $(".services_box").slideToggle();
    });
});
$(function () {
    $(".services").mousedown(function () {
        $(".services_box").hide();
    });
});
$(function () {
    $(".fa-apple").click(function () {
        $(".apple_icon").slideToggle();
    });
});
$(function () {
    $(".fa-apple").dblclick(function () {
        $(".apple_icon").hide()
    })
});

$(function () {
    $(".shutdown").click(function () {
        alert('ARE YOU SURE ?');
    });
});
$(function () {
    $(".restart").click(function () {
        alert('DO YOU WANT TO RESTART ?');
    });
});
