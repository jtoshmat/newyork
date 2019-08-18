$(function () {
            $("#florida").click(function () {

                var year = prompt("How long ago were you in Florida?");
                var diff = 2019 - year;
                alert("So, you were in Florida" + diff +"years ago, daaaaaaaaaamn giiiiiirl")
                if (diff)
                var ask = confirm ("Have you ever been to Florida?")

                if (ask){
                    alert("Wow, you must be a traveler!...");
                }else{
                    alert("You should visit Florida!")
                }
            $(".commercial").html("Welcome to Sunshine State!")
            $(".myimg").attr("src", "https://media.timeout.com/images/105297815/630/472/image.jpg");
    });
    $("#uzbekistan").click(function () {
        var ask = confirm ("Have you ever been to Uzbekistan?")

        if (ask){
            alert("Wow, you must be a traveler!...");
        }else{
            alert("You should visit my country, especially, Samarkand!")
        }
        $(".commercial").html("Welcome to Uzbekistan!");
        $(".myimg").attr("src", "https://halaltravelguide.net/wp-content/uploads/2018/12/Feature-Uzbekistan.jpg");
    });
    $("#italy").click(function () {
        var ask = confirm ("Have you ever been to Italy?")

        if (ask){
            alert("Wow, you must be a traveler!...");
        }else{
            alert("You should visit Italy!")
        }
        $(".commercial").html("Welcome to Italy!")
        $(".myimg").attr("src", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG0k2k6TI3fFziamlPQCqh-OccqGMgqRPTYna_uhJFOOvCmv6oFw");
    });
});




