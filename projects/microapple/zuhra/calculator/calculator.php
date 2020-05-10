<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div>
    <h1 style="text-align: center">Calculator</h1>
    <hr>
    <div>
        <input required="required" name="num1" type="number" placeholder="Enter an integer">
        <select name="operation" id="operation">
            <option value="+">add</option>
            <option value="-">subtract</option>
            <option value="*">multiply</option>
            <option value="/">divide</option>
        </select>
        <input required="required" name="num2"  type="number" placeholder="Enter an integer">
        <button>GO</button>
    </div>
    <div class="result">Result:</div>
</div>

<style>
    .result{
        width: 300px;
        height: 300px;
        border: 1px black solid;
        margin-top: 30px;
    }
    input{
        padding: 5px;
    }
</style>
<script>
    $function()
</script>
</body>
</html>
