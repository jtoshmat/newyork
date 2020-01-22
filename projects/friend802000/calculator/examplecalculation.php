<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>


<script>

    $(document).ready(function() {
        $(".DropChange").change(function(){
            var ValOne = $('#ValOne').val();
            var ValTwo = $('#ValTwo').val();
            var totalTotal = ((ValOne * 1) * (ValTwo * 1));
            $('#Total').text(totalTotal);
        });
    });
</script>
<select name="ValOne" id="ValOne" class="DropChange">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>

<select name="ValTwo" id="ValTwo" class="DropChange">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>
<span id="Total">$</span>

</body>
</html>
