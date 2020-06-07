<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="jon">
    <form>
        <p>First Name: <input name="first_name" type="text"></p>
        <p>Last Name: <input name="last_name" type="text"></p>
        <p>Email Address: <input name="last_name" type="email"></p>
        <p>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </p>
    </form>
</div>

<div class="results">
    Result:
</div>

<style>

    input[type=text], input[type=password], input[type=tel] {
        background-color: #fffdf4;
    }

</style>
<script>
    $(function () {
        $("input[type=text]").change(function () {
            var value = $(this).val();

            if (value == 'stupid') {
                alert("Sorry, I do not appreciate your tone or language!!!!");
                return false;
            }
            $(".results").html("Value: " + value);
        });
    });
</script>

</body>
</html>