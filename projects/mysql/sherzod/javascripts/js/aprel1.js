/* let employee = {
    'fullname': 'Jack Nicolson',
    'level': 'senior',
    'company': 'XYZ,LLC',
    'calculate_salary': function (salary) {
        return salary / 52;
    },
    'punch_in': function (timein, timeout) {
        let total_hours = timeout - timein;
        if (total_hours < 8) {
            return "less than 8 hours";
        }
        return total_hours + " hours ";
    }
};
let bio = employee.fullname +
    " is working at " + employee.company +
    " in " + employee.level +
    " position and earning " + employee.calculate_salary(120000).toFixed(0) +
    " weekly salary. He worked for " + employee.punch_in(5, 17) +
    " today";
document.write(typeof employee);*/


/*function drive(car) {
    document.write(car + " is in a driving mode <br>");
}
function park(car) {
    if (car=='Honda'){
        document.write(" - Please be sure to enable the manual park for Honda. ")
    }
    document.write(car + " is in a park mode <br>");
}
function backup(car) {
    document.write(car + " is in a backup mode <br>");
}
drive('Honda');
park('Honda');
backup('Mercedes');
park('Toyota');*/

/*function calculate(num1=2, operator='+', num2=2) {
    return num1+" "+operator+" "+num2;
}
document.write(calculate());
    let calculate_taxes = function (price, qty) {
    let tax = (price * 10/100) + (price * qty);
    return 'tax';
};*/


/*function study(){ //callee
    for(let i=0; i<10; i++){
        if (i==6){
            return 6;
        }
        return 100;
    }
    return 10;
}
if (study()<5){
    document.write("You may want to study a little harder")
}else{
    document.write("You are doing a good job!");
}*/

/*"use strict";
let num1 = 88;
function changeValue() {
    num1 = 99;
    num2 = 100;
}
changeValue();
document.write(num1);*/


/*function changeValue(a) {
 if (a>10 && (a%2==0)){
     return "This number can be divided by 2";
 }
 return 'DING DING WRONG';
}
document.write(changeValue(21));*/


/*Ternary Operator: A ternary operator returns
the first value if the expression is truthy, or
else returns the second value.*/
/*let a = 1;
let b = a?'correct':'wrong';
let b;
if (a){
    b = 'correct';
}else{
    b = 'wrong';
}
*/

/*let age = prompt("How old are you?");
age = (age>21)?'good':'not good';
if (age>21){
    age = 'good';
}else{
    age = 'not good';
}
document.write(age);
//0, null, false =====> wrong*/

/*
let a = 4;
switch (a) {
    case 1:
        document.write('1000$ prize');
        break;
    case 2:
        document.write('500 prize');
        break;
    case 3:
        document.write('250$ prize');
        break;
    default:
        document.write('chappaklar busin');
        break;
}
*/
/*
let cars = ['Alfa','Audi','BMW','Honda','Nexia'];
for(let i = 0; i<cars.length; i++){
        if (i==4) {
            document.write('MY NEXIA<br>');
        }else{
            document.write(cars[i]+"<br>");
        }
}
*/

const dob = '01/01/1990';
dob = '01/02/2000';
document.write(dob);

document.getElementById("mydiv").innerHTML="Hello There id and you are the only id in the entire document.";
document.getElementsByClassName("mydivclass")[0].innerHTML="0) Hello There Class and there can be more like you in the same document";
document.getElementsByClassName("mydivclass")[1].innerHTML="1) Hello There Class and there can be more like you in the same document";
document.getElementsByClassName("mydivclass")[2].innerHTML="2) Hello There Class and there can be more like you in the same document";

document.getElementById("mydiv").addEventListener("dblclick", function(){
    alert("You clicked");
});
document.getElementById('mydiv').oncontextmenu = function() {
    return false;
}