//Pure Javascripts
//document.getElementById("mybox").innerHTML = "Hello JavaScript";
//document.getElementsByClassName("myp")[0].innerHTML = "HOWDY YO ALL!";

//#######################################################################################//

//JQuery Libraries

$( document ).ready(function() {
   //alert("HOWDY, I AM A JQUERY!");
    //console.log("HOWDY, LOOK ME UP/DOWN in the console");
    //document.writeln("I AM A JS and I LOVE ACTIONS! <hr>");
    //document.writeln("<br> SOMETIMES I AM FULL OF BLAH BLAH");
    $("#mybtnon").click(function () {
        $('#mybox img').attr('src', 'pic_bulbon.gif');
    });

    $("#mybtnoff").click(function () {
        $('#mybox img').attr('src', 'pic_bulboff.gif');
    });


    //var conf = confirm("Are you sure you want to turn on the light?");
    //if (conf){
        //$('#mybox img').attr('src', 'pic_bulbon.gif');
    //}


/*
    var age = prompt("How old are you?");


    if (age>=21){
        alert("Wel, hello there, you are old enough to drink");
    }

    if (age<21){
        alert("Arent you supposed to focus on school?");
    }


    if (age<10){
        alert("Go to your bed");
    }


    if (age<5){
        alert("Where is you milk bottle?");
    }
*/



});



