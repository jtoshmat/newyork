$(function () {
    $(".btn").eq(0).click(function () {
        $("body").css("background-color","#ff730e");
    })
    $(".btn").eq(1).click(function () {
        $(".photos").fadeOut('slow');
    })
    $(".btn").eq(2).click(function () {
        $(".photos").fadeIn('slow');
    })
    $(".btn").eq(3).click(function () {

        var ask = prompt("What do you want to do?");
        if (ask=='change'){
            var id = prompt("Sure, which photo do you want to delete");
            var url = prompt("What is the url of the image?");
            var src = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRW9EiKZkIc6HF997SFUOTLM-cXelhz5y_n7OxVSixCydANpl4E";
            if (url){
                src= url;
            }

            if (id>=0 && id<=5) {
                $(".photos img").eq(id).attr('src',src);
            }else{
                alert("This photo # "+ id + " does not exist \n Please pick the valid photo to delete")
            }
        }

        if (ask=='write'){
            var id = prompt("Sure, on which photo do you want to write");
            alert("Please wait...");
        }


    })
    $(".btn").eq(4).click(function () {
        alert("You clicked on a button #5");
    })
})