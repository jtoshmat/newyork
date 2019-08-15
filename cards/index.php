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

<script>

    //Declaring all variables here
    var cards = [6,7,8,9,10,11,12,13,14];
    var players = [1,2,3,4];
    //var cardtypes = ['diamond','heart','spade','club'];
    var cardtypes = [1,2,3,4];


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

    <div id="players">
        <img src="img/player_1.jpg">
        <img src="img/player_2.jpg">
        <img src="img/player_3.jpg">
        <img src="img/player_4.jpg">

    </div>

    <div id="myscreen">
        Everything will be displayed here.
    </div>
    <hr>
    <div class="mybuttons">
    <button id="btn_shuffle">Shuffle</button>
    <button id="btn_shuffle">Shuffle</button>
    <button id="btn_shuffle">Shuffle</button>
    <button id="btn_shuffle">Shuffle</button>
    </div>
</div>

<style>
    #myscreen{
        width:90%;
        height:100px;
        background-color: #f5c6cb;
        border:1px solid #000;
    }
    .mybuttons{
        margin: auto;
        text-align: center;
    }
</style>

</body>
</html>