//document.write("<strong>Hello</strong> World!");
//alert("Hello World from the external file");
/*
var jon = confirm("Are you sure you want to go home?");
if (jon){
    alert("Well, You can go home then to Google");
    document.location = 'http://google.com';
}else{
    alert("I am so glad you decided to stay here with us");
}

var ask = prompt("How old are you?");

if (ask){
    alert("Thank you for you answer and now we will be calculating the year you were born in");
    var dob = 2019 - ask;
    alert("You were born in " + dob);
}else{
    alert("I am sorry we need to know your age");
}
*/

//What is variable?
/*
var name = 'Alisher';
var age = 32;
var city = 'Bukhara';
var gender = 'he';


name = 'Jessica Smith';
gender = 'she';
city = 'Philladelphia';
age = 23;

document.write(""+name+" was born in "+city+" and "+gender+" is "+age+" years old");
*/

//document.getElementById("sandikcha").innerText = "Sandikcha ichida <span class='posudalar'>posudalar</span>, service";
//var sandikcha_value = document.getElementById("sandikcha").innerText;

//alert(sandikcha_value);

//document.getElementsByClassName("boxcha")[2].innerHTML = "BLAH BLAH something like that";

//maxsulot nomlari, price, quantity, tax
/*
var product_name1 = 'kartoshka';
var product_name2 = 'piyoz';
var price1 = 2.55;
var price2 = 1.43;
var qty1 = 5;
var qty2 = 2;
var tax = 0.8;

var prod1_total = (price1 * qty1 * tax)+(price1 * qty1);
document.write(prod1_total);
*/
/*
var cars = ['Audi','Alfa Romeo','BMW','Mercedes','Porche','Volvo','Honda','Toyota','Nissan'];


var build = '';
var engine = '';
var tires = '';

for (var i=0; i<cars.length; i++){
    build = buildBody(cars[i]);
    engine = buildEngine(cars[i]);
    tires = putTires(cars[i]);
    document.write(build + ' <br> '+ engine +' <br> ' + tires);
    document.write("<hr>");

}



function buildBody(make) {
    return "Building the body for " + make;
}

function buildEngine(make) {
    return "Building Engine for " + make;
}

function putTires(make) {
    return "puting the tires for " + make;
}


*/



