<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cards Game</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<audio id="myAudio">
    <source src="sounds/card.mp3" type="audio/ogg">
    <source src="sounds/card.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<script>

    //Declaring all variables here
    var cards = [6,7,8,9,10,11,12,13,14];
    var players = [1,2,3,4];
    //var cardtypes = ['diamond','heart','spade','club'];
    var cardtypes = [1,2,3,4];

    $(function () {
        $('#btn_shuffle').click(function () {
            playAudio();
        });
    });


    var x = document.getElementById("myAudio");

    function playAudio() {
        x.play();
    }


    function shuffle(){
        shuffle(cards);
    }

    function distribute(){
        alert("Distributing");
    }

    function find_dominant_card(){
        alert("find_dominant_card");
    }

    function find_first_goer() {
        alert("I go first");
    }

    function beat_card() {
        alert("beating the oponnents card");
    }

    function calculate_total_cards(){
        alert("total 4 in hand and 23 in stack");
    }



</script>

<div class="container">

    <div class="emptybox"></div>

    <div id="players">
        <table class="table">
            <tr>
                <td><img src="img/player_1.jpg"></td>
                <td><img src="img/player_2.jpg"></td>
                <td><img src="img/player_3.jpg"></td>
                <td><img src="img/player_4.jpg"></td>
            </tr>
            <tr class="players_names">
                <td><div>Alex</div></td>
                <td><div>Max</div></td>
                <td><div>Jessica</div></td>
                <td><div>Sarah</div></td>
            </tr>
        </table>

    </div>

    <br/>

    <div id="labels">
        <table class="table">
            <tr>
                <td><img class="stackofcards" src="img/cards.png"></td>
            </tr>
            <tr>
                <td>12 cards left</td>
            </tr>
        </table>

    </div>

    <div id="myscreen">
        Everything will be displayed here.
    </div>
    <div class="mybuttons">
    <button id="btn_shuffle">Shuffle</button>
    <button id="btn_1">Shuffle</button>
    <button id="btn_2">Shuffle</button>
    <button id="btn_3">Shuffle</button>
    </div>
</div>

<style>

    .emptybox{
        height: 50px;
    }

    #players td{
        text-align: center;
        text-align: center;
    }
    .players_names div{
        background-color: yellow;
        margin:10px;
        border-radius: 10px;
        width:100px;
        margin: auto;
        box-shadow: 8px 6px 11px #d6d600;
    }

    body{
        background-color: rgba(11, 53, 117, 0.99);
        background-image: url("img/casino_background.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .stackofcards{
        width: 100px;
        left: 100px;
        top: 100px;
    }

    #players{
        border:1px solid #003f80;
        border-radius: 10px;
        padding:10px;
        text-align: center;

        background-color: rgba(11, 53, 117, 0.99);
        background-image: url("img/casino_background.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        box-shadow: 11px 21px 1px #0056a1;
    }

    #players img{
        width:100px;
        height: 100px;
    }

    #myscreen{
        width:100%;
        height:100px;
        border:1px solid #000;
    }
    .mybuttons{
        margin: auto;
        text-align: center;
    }

    .table th, .table td {
        border: none;
    }

</style>

</body>
</html>