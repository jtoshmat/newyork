<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clock UI Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="clock">
        <h2>The Time is Now</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
        </div>
    </div>
<script type="text/javascript">
    function clock() {

        var hours = document.getElementById('hour');
        var minutes = document.getElementById('minutes');
        var seconds = document.getElementById('seconds');

        var h = new Date().getHours();
        var m = new Date().getMinutes();
        var s = new Date().getSeconds();

        hours.innerHTML = h;
        minutes.innerHTML = m;
        seconds.innerHTML = s;
    }

    var interval = setInterval(clock, 1000);
</script>
</body>
</html>