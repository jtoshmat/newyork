/*
What is a programming language?
    it is a collection of instructions which may contain these compontents or features:
1) I/O Input and Output *
2) Basic or advanced mathemical operations: plus, minus, kupaytirish, bolish, qoldiq chiqarish......
3) If else conditions *
4) Work with collections for, while, do wile
5) Logs -> pattern for troubleshoot or history of commands
6) //Comments
7) Work with functions
8) Data types, objects - Variable
9) Make decisions  *
10) Declare, Assign, Compare
 */
//What is a variable?
//It is a temporariry allocated slot
//a variable has the following features: name, value and type.
//alert, prompt, confirm
//var input  = confirm("Do you like tea?");
//input = 'tilla pilla';
// Question of the hour:
// What is a variable
//var age = '1'; //A sinle equal sign means assignment age ga 1 ni belgilash
//var taqoslash = (age == 1); //two equal sign means compare two variables by value
//var taqoslash = (age === 1);//three equal sign means compare two variables by value and by type
// = vs == vs ===
// '1' == 1 -> true
// '1' === 1 -> false
//age = parseInt(age);
//var result = eval(age +'+'+5);
//console.log(age+1);
//STRING
//What is a string?
//String is all characters on keyboard
//Number yoki Int is only whole number -10000 to 1000000
//Number yoki double yoki float is not a whole numbers .. like price 2.56
//Boolean has value either true or false yoki 1 or 0
//arrays are series of collection data.
//objects are series of collection data by name in compact format.
//To get the type of variable use --> typeof variable_name;
//var cars = ['Audi','Alfa','BMW','Mercedes','Nexia','Malibu']; // array -- collections
//var num = 1;
/*
for(var i=0; i<cars.length; i++){

    if (cars[i] == 'Nexia'){
        cars[i] = 'Ferarri';
    }
        document.write(num+") Car: "+cars[i]+"<br>");


    num++;
}


var name = 'Jon Toshmatov';
var age = 99;
var x = 34;
var y = '98';
var result = eval(x+'+'+y);

document.write(name+" is "+age+" years old he can add "+x+' + '+y+" and result would be "+result);
*/
//Jon Toshmatov is 99 years old he can add 5 + '5' and result would be 10
//Print numbers from 1 to 100
//for every number that is dividable by 3, write the following next to it. ******
//You can for and if and %
/*
var max = 36*4;
var players_count = 0;
var card_num = 1;
for(var i=1; i<=max; i++){


    if (i%6==0){
        document.write('<div class="mydiv2">'+i+'</div>');
        players_count++;
        card_num=i;
    }else{
        document.write(card_num+": "+i);
    }

    if (players_count==4){
        break;
    }
    document.write('<br>');

}*/
/*
var i = 4;
while (i<3){
    document.write(i+'<br>');
    i++;
}

document.write("<hr>");

let y = 4;
do {
    document.write(y+'<br>');
    y++;
} while (y < 3);
*/

//If a client wants to purchase tobaco or alcohol at the store,a clerk must check the age of the customer.
//If a customer is not 21 or older than refuse the sale.

var age = prompt("How old are you?")??21;
age = parseInt(age);

/*if (age<21){
    alert("Bor toshing ter, hali yoshsan chakishga");
}else{
    alert("okam, qanaqasini chakas");
}*/

switch (age) {
    case 21:
        alert("Kak raz siz usha yoshda ekansiz");
        break;
    case 30:
        alert("You are good bro");
        break;
    default:
        alert("Whatever");
        break;
}

//Next class we will be covering: 2.15 to