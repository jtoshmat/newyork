<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cars</title>
</head>
<body>


<form method="post" action="session_submission.php">
    <div class="first">
        <h1>Choose your favorite car</h1>

            <input type="radio" name="car"><span class="cars" value="Ferrari">Ferrari</span> <br>
            <input type="radio" name="car"><span class="cars" value="McLaren">McLaren</span> <br>
            <input type="radio" name="car"><span class="cars" value="Pagani">Pagani</span> <br>
            <input type="radio" name="car"><span class="cars" value="Koenigsegg">Koenigsegg</span> <br>
            <input type="radio" name="car"><span class="cars" value="Bugatti">Bugatti</span>

        <br>
        <br>

        <button type="reset" class="restart">restart</button>
        <button type="submit" class="submit">submit</button>
    </div>
</form>



<style>

    .first {
        text-align: center;
        width: 100%;
        box-shadow: #ff9a5a 8px 8px 8px 8px;
        border-radius: 13px;
        background-color: #b690fe;

    }

    .cars {
        font-size: 40px;
        color: navy;
    }

    .submit {
        background-color: #2176c9;
    }



</style>


</body>
</html>
