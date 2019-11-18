<div class="card-holder">
    <div class="back"></div>
    <div class="card ace clubs"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card king clubs"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card queen clubs"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card jack clubs"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card ten clubs"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card ace hearts"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card king hearts"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card queen hearts"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card jack hearts"></div>
</div>
<div class="card-holder">
    <div class="back"></div>
    <div class="card ten hearts"></div>
</div>



<style>
    /*
Scalabe CSS cards with minimal markup. The goal was to try to do this using only one tag per card, and not relying on lots of HTML to do the job. Also no javascript.
Just changing the height and width of the card class will change everything else.
Cards designed to have a 1:1.4 width to height ratio.
SVG is taken from the SVG cards by Chris Aguilar here:
https://sourceforge.net/projects/vector-cards/
The cards are a little more optimized and layered so they can use fragment identifiers, and keep this at only one single file. This Mostly uses psuedo elements and multiple background positioning to keep the HTML short and sweet. Should work in the latest version of Safari iOS, but not earlier versions.
SVG file weighs in at 505KB and minified CSS is only 8KB. Cleaning up and optimizing the face cards could really get that lower, as they are the heaviest part.
Font for letters is Bree Serif (google fonts)
*/
    @keyframes fly-in {
        0% {
            transform: rotateY(540deg) rotateX(1080deg) translateZ(400px) translateX(80px) translateY(0);
        }
        40% {
            transform: rotateY(0deg) rotateX(0) translateZ(0) translateX(0) translateY(0);
        }
        60% {
            transform: rotateY(90deg) rotateX(0) translateZ(0) translateX(100px) translateY(1000px);
        }
        80% {
            transform: rotateY(180deg) rotateX(0) translateZ(0) translateX(0) translateY(0);
        }
        100% {
            transform: rotateY(0) rotateX(0) translateZ(0) translateX(0) translateY(0);
        }
    }
    .card-holder{
        animation-name:fly-in;
        animation-duration:7s;
        animation-direction:alternate;
        animation-iteration-count:infinite;
        animation-timing-function:ease-in-out;
    }
    .card-holder:nth-of-type(1){
        animation-delay:.5s;
    }
    .card-holder:nth-of-type(2){
        animation-delay:1s;
    }
    .card-holder:nth-of-type(3){
        animation-delay:1.5s;
    }
    .card-holder:nth-of-type(4){
        animation-delay:2s;
    }
    .card-holder:nth-of-type(5){
        animation-delay:2.5s;
    }
    .card-holder:nth-of-type(6){
        animation-delay:3s;
    }
    .card-holder:nth-of-type(7){
        animation-delay:3.5s;
    }
    .card-holder:nth-of-type(8){
        animation-delay:4s;
    }
    .card-holder:nth-of-type(9){
        animation-delay:4.5s;
    }
    .card-holder:nth-of-type(10){
        animation-delay:5s;
    }

    body {
        background:linear-gradient(135deg, #449144 33%,#008a00 95%);
        padding:4% 10%;
        perspective:400px
    }
    .card-holder{
        transform-style: preserve-3d;
        backface-visibility: hidden;
        position:relative;
        width:100px;
        height:140px;
        display:inline-block;
        box-shadow:1px 2px 2px rgba(0,0,0,.8);
        margin:2px;
    }
    .card-holder:hover {
        box-shadow:0px 3px 6px rgba(0,0,0,.7);
    }
    .card-holder:active{
        transform:scale(.9);
    }
    .back{
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        right:0;
        width:100%;
        height:100%;
        backface-visibility: hidden;
        transform: rotateY( 180deg );
        background: #36c;
        background:
                linear-gradient(135deg, #f26c32 0%,#c146a1 50%,#a80077 51%,#f9703e 100%);
        border-radius:2%;
        box-shadow: inset 3px 3px 0 #fff, inset -3px -3px 0 #fff;
        display:block;
        border:1px solid black;
    }
    .card {
        box-shadow: inset 2px 2px 0 #fff, inset -2px -2px 0 #fff;
        transform-style: preserve-3d;
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        right:0;
        backface-visibility: hidden;
        background-color:#fcfcfc;
        border-radius:2%;
        display:block;
        width:100%;
        height:100%;
        border:1px solid black;
    }
    .card:after {
        backface-visibility: hidden;
        position:absolute;
        dispay:block;
        content:'';
        background-repeat:no-repeat;
        background-position:
                bottom center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center;
        width:14%;
        height:27%;
        top:4%;
        left:4%;
    }
    .card:before {
        backface-visibility: hidden;
        position:absolute;
        dispay:block;
        content:'';
        background-repeat:no-repeat;
        background-position:
                bottom center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center,
                top center;
        width:14%;
        height:27%;
        bottom:4%;
        right:4%;
        transform:rotate(180deg);
    }

    .card.ace:after, .card.ace:before{
        background-size:
                90%,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.king:after, .card.king:before{
        background-size:
                90%,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.queen:after, .card.queen:before{
        background-size:
                90%,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.jack:after, .card.jack:before{
        background-size:
                90%,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.ten:after, .card.ten:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.nine:after, .card.nine:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.eight:after, .card.eight:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0,
                0;
    }
    .card.seven:after, .card.seven:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0,
                0;
    }
    .card.six:after, .card.six:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0,
                0;
    }
    .card.five:after, .card.five:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0,
                0;
    }
    .card.four:after, .card.four:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0,
                0;
    }
    .card.three:after, .card.three:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%,
                0;
    }
    .card.two:after, .card.two:before{
        background-size:
                90%,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                0,
                110%;
    }

    .card.hearts:after, .card.hearts:before {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ace'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ten'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#nine'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#eight'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#seven'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#six'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#five'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#four'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#three'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#two');
    }
    .card.clubs:after, .card.clubs:before {
        filter:brightness(0);
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ace'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ten'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#nine'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#eight'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#seven'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#six'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#five'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#four'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#three'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#two');
    }
    .card.diamonds:after, .card.diamonds:before {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ace'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ten'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#nine'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#eight'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#seven'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#six'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#five'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#four'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#three'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#two');
    }
    .card.spades:after, .card.spades:before  {
        filter:brightness(0);
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ace'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#ten'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#nine'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#eight'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#seven'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#six'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#five'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#four'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#three'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#two');
    }


    .hearts {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king-hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen-hearts'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack-hearts');
    }
    .clubs {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king-clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen-clubs'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack-clubs');
    }
    .spades {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king-spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen-spades'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack-spades');
    }
    .diamonds {
        background-image:
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds-flip'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#king-diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#queen-diamonds'),
                url('https://cdn.rawgit.com/jedgek/49eacfbeffbb1d69ffd1cbdbda75271f/raw/b79cc961ca287467bab1787fba54502aea02b605/deckofcards.svg#jack-diamonds');
    }
    .super {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                48% 48%,
                62% 72%,
                62% 72%,
                62% 72%;
    }
    .king {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,
                50% 50%,
                50% 50%,
                50% 50%;
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                62% 72%,
                0 0,
                0 0;
    }
    .queen {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,
                50% 50%,
                50% 50%,
                50% 50%;
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                62% 72%,
                0 0;
    }
    .jack {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,
                50% 50%,
                50% 50%,
                50% 50%;
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                62% 72%;
    }
    .ten {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .nine {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .eight {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .seven {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .six {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .five {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .four {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .three {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .two {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,/*center*/
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,/*ace*/
                50% 50%,/*king*/
                50% 50%,/*queen*/
                50% 50%;/*jack*/
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                18% 18%,
                18% 18%,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0;
    }
    .ace {
        background-repeat: no-repeat;
        background-position:
                28% 18%,
                72% 18%,
                28% 41%,
                72% 41%,
                28% 61%,
                72% 61%,
                28% 82%,
                72% 82%,
                50% 30%,
                50% 70%,
                50% 50%,
                50% 18%,
                50% 82%,
                28% 50%,
                72% 50%,
                50% 50%,
                50% 50%,
                50% 50%,
                50% 50%;
        background-size:
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                0 0,
                48% 48%,
                0 0,
                0 0,
                0 0;
    }
</style>