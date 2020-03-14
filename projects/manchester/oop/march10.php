<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrance</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

<form class="form-group" method="post" action="march9.php">
    <p>Select Guests<br>
        <select class="select_menu" multiple="multiple" name="guest_names[]">
            <optgroup label="Hokimyat">
                <option value="hokim">Hokim</option>
                <option value="zamhokim">Zam Hokim</option>
                <option value="kadrlar">Kadrlar Bolimi</option>
            </optgroup>

            <optgroup label="IIB">
                <option value="nachalnik">Nachalnik</option>
                <option value="tergovchi">Tergovchi</option>
                <option value="oper">Oper</option>
            </optgroup>


            <optgroup label="personal">
                <option value="sinfdosh">Sinfdosh</option>
                <option value="kursdosh">Kursdosh</option>
                <option value="tanishlar">Tanishlar</option>
            </optgroup>


        </select>
    <hr>
    Select Gifts:<br>
        <select name="gifts">
            <option value="">Select Gifts</option>
            <option value="money">Money</option>
            <option value="presents">Presents</option>
            <option value="tuguncha">Tuguncha</option>
        </select>
    <hr>

    Select Your Arrival Time:<br>
    10:00 AM: <input type="radio" name="arrival_time" value="10:00"><br>
    11:00 AM: <input type="radio" name="arrival_time" value="11:00"><br>
    12:00 PM: <input type="radio" name="arrival_time" value="12:00"><br>
    1:00 PM: <input type="radio" name="arrival_time" value="13:00"><br>
    2:00 PM: <input type="radio" name="arrival_time" value="14:00"><br>

    <hr>
    <hr>

    Your Guests List:<br>
    Parents: <input type="checkbox" name="guest_lists[]" value="parents"><br>
    Spouse: <input type="checkbox" name="guest_lists[]" value="spouse"><br>
    Kids:<input type="checkbox" name="guest_lists[]" value="kids"><br>
<hr>
        <button class="btn btn-success" type="submit">Enter</button>
    </p>
</form>

<style>
    .select_menu{
        height: 340px;
        width: 210px;
        background-color: #d3c7e6;
        color: #063e1f;
        font-family: fantasy;
        font-size: 97%;
    }
</style>
</div>
</body>
</html>