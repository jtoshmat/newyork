<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>December 1, 2019</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="container-fluid mybox">
<form id="myform">
    <p>
        Basic Distance Calculator
    </p>
    <p>
        <input name="mynumber" placeholder="Enter your number" type="number" id="mynumber">
        <select name="types" id="types">
            <option value="mile">Mile</option>
            <option value="km">KM</option>
        </select>
        <button>Calculate</button>
    </p>
    <div id="myresult">
        dcscsdc
    </div>
</form>
</div>

<script>
    $(function () {
       $("#myform").submit(function () {
           calculcator();
          return false;
       }) ;
    });

    function calculcator() {
        var mynumber = $("#mynumber").val();
        var types =  $("#types").val();
        var output = '';
        var types2 = '';

        if (types == 'mile'){
            output = mynumber * 1.6;
            types2 = 'Km';
        }else{
            output = mynumber * 0.62;
            types2 = 'Mile';
        }
        $("#myresult").html(output+" "+ types2);

    }

</script>

</body>
</html>
