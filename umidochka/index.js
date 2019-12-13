let hour = 10;

if (hour >= 6 && hour <12)
    console.log("Good Morning");

else if (hour >= 12 && hour <18)
    console.log("Good Afternoon!");
else
    console.log("Good Evening!");

//Switch Case

let role = 'guest';

switch (role) {
    console.log('Guest User'):
    break;

    case 'moderator':
        console.log('Moderator User');
        break;

    default:
        console.log('Unknown User');

}

if (role === 'guest') console.log('Guest');
else if (role === 'moderator') console.log('Moderator');
else console.log('Unknown User');

//For Loops

for (let i = 0; i < 6; i++) {
    console.log('Hello World', i);
}
for (let i = 1; i <= 10; i++) {
    if (i % 2 !==0) console.log(i);
}
for (let i = 5; i >=1; i--) {
    if (i % 2 !==0) console.log(i);
}

//While Loop

let i = 0;
while (i <= 5) {
    if (i % 2 !== 0) console.log(i);
    i++;
}

//Do..While Loop

let i = 9;
do {
    if (i % 2 !== 0) console.log(i);
    i++;
}while (i <+ 5);

//Infinite Loop

let i = 0;
while (i < 5){
    console.log(i);
    i++;
}

while (true) {
}

let x = 0;
do {
    //x++;
}while (x < 5);

for (let i = 0; i < 10; );

//For in

const person = {
    name: 'Umida',
    age: 25
};

for (let key in person)
    console.log(key, person[key]);

const colors = ['red', 'green', 'blue', 'yellow'];

for (let index in colors)
    console.log(index, colors[index]);

//For of
const colors = ['red','green',]