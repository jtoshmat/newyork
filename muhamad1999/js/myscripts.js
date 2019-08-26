//https://www.w3schools.com/js/default.asp
//https://www.w3schools.com/jquery/default.asp

//alert("sdcsd");

// var askme = confirm("Are you gonna be ok?");
//
// if (askme){
//     alert("Good to hear it");
// }else{
//     alert("oh no, what happened?");
// }


/*
var askme = prompt("How old are you?");

var myyear = 2019 - askme;

alert("So, you were born in " + myyear);*/

/*var x, y, z;    // Statement 1
x = 5;          // Statement 2
y = 6;          // Statement 3
z = x * y;      // Statement 4

document.write(z);*/

/*
document.getElementById('jon').innerHTML = "I am replaced by javascript";*/

$(function () {
   $("a").click(function () {
       var txt = $(this).text();
        $(this).css({"color":"#f00","background-color":"yellow"});
      return false;
   });
});