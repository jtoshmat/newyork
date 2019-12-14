<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countdown 2020</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2><span>Countdown to New Year</span>2020</h2>
        <div class="countdown">
            <div id="day">NA</div>
            <div id="hour">NA</div>
            <div id="minut">NA</div>
            <div id="second">NA</div>
        </div>
    </div>
    <script type="text/javascript">
        var countDate = new Date('Jan 1, 2020 00:00:00').getTime();

        function newYear() {
            var now = new Date().getTime();
            gap = countDate - now;

            var second = 1000;
            var minut = second * 60;
            var hour = minut * 60;
            var day = hour * 24;

            var d = Math.floor(gap / (day));
            var h = Math.floor((gap % (day)) / (hour));
            var m = Math.floor((gap % (hour)) / (minut));
            var s = Math.floor((gap % (minut)) / second);

            document.getElementById('day').innerText = d;
            document.getElementById('hour').innerText = h;
            document.getElementById('minut').innerText = m;
            document.getElementById('second').innerText = s;
        }

        setInterval(function () {
            newYear();
        },1000)
    </script>
</body>
</html>