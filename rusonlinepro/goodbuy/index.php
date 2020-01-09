<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="face">
    <div class="eyes">
        <div class="eye"></div>
        <div class="eye"></div>
    </div>
</div>
<script>
    document.querySelector('body')
        .addEventListener('mousemove', eyeball);
    function eyeball() {
        var eye = document.querySelectorAll
        ('.eye');
        eye.forEach(function (eye){
            let x = (eye.getBoundingClientRect()
                .left) + (eye.clientWidth / 2);
            let y = (eye.getBoundingClientRect()
                .top) + (eye.clientHeight / 2);
            let radian = Math.atan2(event.pageX -
                x, event.pageY - y);
            let rot = (radian * (180 / Math.PI) *
                -1) + 270;
            eye.style.transform = "rotate("+ rot
                +"deg)"
        })
    }
</script>
</body>
</html>