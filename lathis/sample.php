<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Practices</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<h1>Vehicle Registration Form</h1>

<form method="POST">
    <label for="firstname">First Name:</label>
        <input id="firstname" type="text" required>
    <label for="lastname">Last Name:</label>
        <input id="lastname" type="text" required><br>
    <label for="male">Male</label>
        <input id="male" name="gender" type="radio">
    <label for="female">Female</label>
        <input id="female" name="gender" type="radio">
    <label for="other">Other</label>
        <input id="other" name="gender" type="radio"><br>
    <label for="plateno">Plate №:</label>
        <input id="plateno" name="text" type="text" required>
    <label for="tel">Phone №:</label>
        <input id="tel" type="number" required><br>
    <label for="birthday">Birthday:</label>
        <select name="month">
            <option>Jan</option>
            <option>Feb</option>
            <option>March</option>
        </select>
        <select name="day">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <select name="year">
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
        </select><br>
    <input type="submit">
</form>









</body>
</html>


