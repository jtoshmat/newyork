$
document.ready(function () {

    $(".form-control").submit(function () {
        var firstname
        (".firstname").val();
        var play = '';

       if(firstname == "Umida"){
           showup(play:"Umida is a nice girl", img:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDRV4FyOGGl1sncCbIQacI6UNNdsRpW176I3Ukx2Wh9tHRxSHf", true);
       }

    });

    function showeup(play, img) {
        $(".myphoto").attr('src', img);
        $(".myphoto").show();
        $(".result").html(play);
        $("body").css("background-color", "#" + color);
    }


});



































