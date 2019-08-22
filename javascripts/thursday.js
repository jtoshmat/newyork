$(function () {

$("#florida").click(function () {

    var year = prompt("How long ago were you in Florida?");
    var diff = 2019 - year;

    if (diff>10){}
    alert("So, you were in Florida " + diff + " years ago, daaaaamn");

    $(".commercial").html("Welcome to Sunshine State!");
    $(".myimg").attr("src","https://media.timeout.com/images/105297815/630/472/image.jpg");
});

    $("#uzbekistan").click(function () {
        var ask = confirm("Have you ever been to Uzbekistan?");

        if (ask){
            alert("WOW, you must be a world traveler!");
        }else{
            alert("You should visit my country, especially, Samarkand!");
        }


        $(".commercial").html("Uzbekistan still has a chance to become a world champtions in 2300");
        $(".myimg").attr("src","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcThSE3SzNPZUnvurY7DxT7y1iyTYsvse4TX1YPpwR62lvBKoe");
    });


    $("#italy").click(function () {
        $(".commercial").html("Go Juventius!");
        $(".myimg").attr("src","https://clipart.info/images/ccovers/1532054371Cristiano-Ronaldo-Juventus-Png-2018.png");
    });

});