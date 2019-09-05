<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <title>Rock Paper Scissors Game.</title>
</head>
<body>
<header>
    <h1>Rock Paper Scissors</h1>
</header>

<div class="score">
    <div id="user-id" class="badge">User</div>
    <div id="computer-id" class="badge">Comp</div>
    <span id="user-score">0</span>:<span id="computer-score">0</span>
</div>


<div class="result">
    <p>Paper covers rock. You win!</p>
</div>
<div class="choices">
<div class="choice" id="r">
    <img src="rock.png">
</div>
    <div class="choice" id="p">
        <img src="paper.png">
    </div>
    <div class="choice" id="s">
        <img src="scissor.png">
    </div>
</div>
<p id="action-message">Make your move</p>
<script src="app.js" charset="utf-8" type="text/javascript"></script>
</body>
</html>