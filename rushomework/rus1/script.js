var pics = [
    "mycars/pic1.jpeg",
    "mycars/pic2.jpeg",
    "mycars/pic3.jpg",
    "mycars/pic4.jpeg",
    "mycars/pic5.jpeg"
];

var btn = document.querySelector("button");
var img = document.querySelector("img");
var counter = 1;

btn.addEventListener("click", function(){
    if (counter === 5){
        counter = 0;
    }
    img.src = pics[counter]
    counter = counter + 1;

});