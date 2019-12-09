$(function () {

    $(".flags").click(function () {
        var country = $(this).data('flag');
        var function_name = "pic_"+country;
        window[function_name]();
    })
});


function pic_usa(){
    alert("USA");
}

function pic_turkey(){
    alert("TURKEY");
}

function pic_uzb(){
    alert("UZB");
}

function pic_uae(){
    alert("UAE");
}