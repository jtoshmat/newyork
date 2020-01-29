console.log('Hello!');
//alert('yoooo');
var b = 'smoothie';
console.log(b);

    var someNumber = 45;
    //console.log(someNumber);



    //var age = prompt('What is your age?');

    //document.getElementById('someText').innerHTML = age;

    // Numbers in Javascript
    var num1 = 10;

    // Increment num1 by 1
    num1++;

    // Decrement num1 + by 1
    num1--;
    console.log(num1);

    // Divide, multiple *, remainder %
    console.log(num1 % 6);

    // Increment/decrement by any number you want

    num1 += 10;
    console.log(num1);

    /* Functions
    1. Create a function
    2. Call the function
     */
    // Create
   function fun() {
        alert('this is a function');
    }
    // Call
    fun();
    /* Let's create a function that take in a name and says
     hello followed by your name

     For example

     Name: "Rustam"
     Return: "Hello Rustam"
     */

    function greeting() {
        var name = prompt('What is your name?');
        var result = 'Hello' + ' ' + name; // String Concatenation
        console.log(result);
    }

   // greeting();

    // How do arguments work in functions?
    // How do we add 2 numbers

   function sumNumbers(num1, num2) {
        var result = num1 + num2;
        console.log(num1 + num2);
    }

   // sumNumbers('Hello ', 'Rustam');

    /* While Loops

    var num = 0;

    while (num < 100){
        num += 1;
        console.log(num);
    }

     */

    // For loop
    for (let num = 0; num <= 100; num++){
        console.log(num);
    }












































    