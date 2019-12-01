$(function () {

    $("#button1").click(function () {
      var a = 2331;
      var b = 234234234324234;
      var c = a * b;
        $("#display").html("a * b = " + c);
    });

    $("#button2").click(function () {
        alert("You clicked the button 2");
    });

});