<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <h4>My Calculator</h4>
    <form method="post" action="calculator.php">
        <p>Number 1: <input type="number" name="number1" placeholder="Number 1"></p>
        <p>Operator:
        <select name="operator">
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </p>
        <p>Number 2: <input type="number" name="number2" placeholder="Number 2"></p>
        <p>
            <button type="submit">Calculate</button>
        </p>
    </form>
</div>
</body>
</html>