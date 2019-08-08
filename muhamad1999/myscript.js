$(function () {

    $(".btn-jessica").click(function () {
        $(".rightmenu").html(" 12 dbcjshkc sjkdhbcscsjdchbsk ksjhdbckshjdc");
        $(".rightmenu").fadeIn('slow').delay(6000);
        $(".container").css("background-color","#e4ffbc");
        $(".names").html('Jessica Smith');
        $(".myimg").css("border","1px solid #000");
       $(".myimg").attr('src','https://image.freepik.com/free-photo/caucasian-woman-portrait-shoot-studio_53876-33128.jpg');
    });

    $(".btn-alex").click(function () {
        $(".rightmenu").html(" 333 dbcjshkc sjkdhbcscsjdchbsk ksjhdbckshjdc");
        $(".container").css("background-color","#ffc059");
        $(".names").html('Alex Johnson');
        $(".myimg").css("border","1px solid #000");
        $(".myimg").attr('src','https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?size=626&ext=jpg');

        var ask = prompt("Hey Alex, what year were you born in?");
        if (ask){
            var age = 2019 - ask;
            alert("Alex, you are "+ age+ " years of old");
        }

        var ask2 = confirm("Have you heard about Uzbekistan?");

        if (ask2){
            alert("Wow, you must be a world traveler");
        }else{
            alert("Uzbekistan is a great travel destination, you should travel there");
        }

    });

    $(".btn-sarah").click(function () {
        $(".rightmenu").html("1111 dbcjshkc sjkdhbcscsjdchbsk ksjhdbckshjdc");
        $(".container").css("background-color","#11edff");
        $(".names").html('Sarah Anderson');
        $(".myimg").attr('src','http://www.katherinemariephoto.com/wp-content/uploads/2015/11/25-3009-pp_gallery/Colorado-Springs-Senior-Girl-Photographer_314(pp_w524_h366).jpg');
        $(".myimg").css("border","5px solid #f00");
    });


    $(".btn-jon").click(function () {
        $(".rightmenu").html(" 222 dbcjshkc sjkdhbcscsjdchbsk ksjhdbckshjdc");
        $(".container").css("background-color","#f7d6ff");
        $(".names").html('Jon Toshmatov');
        $(".myimg").css("border","1px solid #000");
        $(".myimg").attr('src','/img/jontosh.png');
    });


});