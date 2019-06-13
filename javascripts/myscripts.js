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


    $("#mybtn").click(function () {
        $("#mybox img").toggle();

    });


});



