//Informational
//document.write("Hello World! and Welcome to Javascript Class!");
//alert("Dear Lissa, just you know, we have a policy of surfing the web in business hours.");

//Interaction: confirm
//confirm("Are you sure you want to leave the form?");
//prompt("Please type Yes if you agree with our terms and agreement");
//What is a variable?
/*
Mathematics a quantity which during a calculation is assumed to vary or be capable of varying in value.
Computing a data item that may take on more than one value during the runtime of a program.
English: able to be changed or adapted:
 */

//persons: name, age, location, hobbies

//Strings
//Computing a linear sequence of characters, words, or other data also anything you see on your keyboard can be string
var name = 'Lissa';
var hobbies = 'Play tennis, walk in the park, watch tv';

//Integer numbers
//a whole number; a number that is not a fraction.
//Integers do not require using quote of any type.
var age = 21;

//Boolean
//TRUE or FALSE
// 1   or 0


//float, double
var price = 2.25;
var discount = 8.50;
var tax = 1.25;

//object

var first_name = 'Jon';
var last_name = 'Toshmatov';

var full_name = first_name +" "+ last_name;

//alert("Good morning everyone, My name is " + full_name);


//any or combination of texts, any characters, symbols, numbers) must be wrapped with quotes (sing or double)



//var citizenship = confirm("Are you a US citizen?");
//The output of confirm is BOOLEAN data type (TRUE OR FALSE)

//prompt
var agreement = prompt("Please type Yes if you agree with our terms and agreement");

if (agreement == 'Yes'){
    alert("Excellent, thank you so much for accepting our policy!");
}else if(agreement == 'Maybe'){
    alert("Dear user, our acceptable answer is Yes or NO and not Maybe. Please decide which one you are.");
}else if(agreement == 'Hop'){
    alert("Ie yashang, zur buldida, sitimizga hush kelibsiz!");
}else if(agreement == 'Da'){
    alert("Molodets, spasibo chto vy prinyali nashe uslovie.");
}else if(agreement == 'Net'){
    alert("Izvinite, vy mozhete pokinut nash site nemedlenno!");
}else if(agreement == 'Whatever'){
    alert("wow wow.. young lady, take your attitude elsewhere");
}
else{
    alert("I am so sorry for not agreeing with our policy, feel free to leave our site anytime.");
}
