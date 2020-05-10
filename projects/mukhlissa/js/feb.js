//console.warn("Hello there, I am feb and displaying this message directoy to you and not showing it to the user");

//var a = 12;
//var b =5;
//var c = a % b;
//document.write(c);


$(function () {

    $("#btn-dog").click(function () {
        $("body").css("background-color","white");
        $("#animalphoto").removeClass("mykitten");
        $("#animalphoto").attr("src","https://parade.com/wp-content/uploads/2018/03/golden-puppy-life-national-geographic-ftr.jpg");
        $("#animalname").html("Barsuk");
        $("#animalname").css({
            'color': 'yellow',
            'background-color': 'darkblue'
        });
        $("#animatedkitten").fadeOut("slow");

        var answer = prompt("What image do you see on your screen?");

        if (answer == 'goat'){
            alert("Wow, good job, you know the difference between goat and cow LOL");
        }else if (answer == 'kitten'){
            alert("Nah, that is not an image of the cat. Here is the cat");
            $("#animalphoto").attr("src","https://delovaart.be/wp-content/uploads/2019/09/27304637272_76d8aa0572_o-1024x681.jpg");
        }else{
            alert("DA HILLA,,, are you blind? that is an image of a goat.");
        }

    });

    $("#btn-cat").click(function () {
        $("body").css("background-color","darkred");
        $("#animalphoto").attr("src","https://delovaart.be/wp-content/uploads/2019/09/27304637272_76d8aa0572_o-1024x681.jpg");
        $("#animalname").html("Tom");
        $("#animalname").css({
            'color': 'white',
            'background-color': 'green'
        });
        $("#animalphoto").addClass('mykitten');
        $("#animatedkitten").fadeIn("slow");

    });

    $("#btn-tiger").click(function () {
        var ask = confirm("Are you sure you want to display the tiger's image?");

        if (!ask){
            return false;
        }

        $("body").css("background-color","darkred");
        $("#animalphoto").attr("src","https://ihplb.b-cdn.net/wp-content/uploads/2018/06/tiger.jpg");
        $("#animalname").html("Bengal Tiger");



    });

});