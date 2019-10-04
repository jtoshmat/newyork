<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight Search</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <div class="mysearch">
        <form style="text-align: center" method="get" action="search.php">
            <p>
                From: <input name="from">
                To: <input name="to">
                <br>
                Departure: <input style="width:20%" name="departure_date" type="date">
                Return: <input  style="width:20%" name="arriving_date" type="date">
                <br>
                <select name="company">
                    <option value="any">Any</option>
                    <option value="uzbek">Uzbekiston Havo Yollar</option>
                    <option value="aeroflot">Aeroflot</option>
                    <option value="british">British Airways</option>
                    <option value="turkish">Turkish Airlines</option>
                </select>
                <button>Search</button>
            </p>
        </form>
    </div>

</div>

</body>
</html>