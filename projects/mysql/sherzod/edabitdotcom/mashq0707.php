<!DOCTYPE html>
<html>
<body>

<p>Click the button to display a time-based greeting:</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
    function myFunction() {
        var hour = new Date().getHours();
        var greeting;
        if (hour < 0.1) {
            greeting = "Good day";
        } else {
            greeting = "Good evening";
        }
        document.getElementById("demo").innerHTML = greeting;
    }
    document.write(hour);
</script>

</body>
</html>
