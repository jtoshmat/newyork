<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Living Room</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="css/iframe.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div style="height: 121px"></div>
<div id="living_room"><iframe id="mytv" src="https://www.youtube.com/embed/NoZwGfUsxX4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div id="remote_control">
    <img src="../../img/tv_remote_control.png">
</div>

<script>

    $(function () {
        $("#remote_control img").click(function () {
            var videoId = 'cM0L1EpOyP8';
            var videoUrl = 'https://www.youtube.com/embed/'+videoId;
            jQuery('#living_room').attr('src',videoUrl);
        });
    })

</script>


</body>
</html>