<!doctype html>
<html>

<head>
    <title>Slidebars Animation Styles</title>
    <meta name = "viewport" content = "width = device-width,
         initial-scale = 1.0, minimum-scale = 1.0,
         maximum-scale = 1.0, user-scalable = no">
    <link rel = "stylesheet" href = "slidebars.css">
    <link rel = "stylesheet" href = "example-styles.css">
</head>

<body>
<div id = "sb-site">
    <h1>Tutorilaspoint</h1>

    <p>Slidebars is a jQuery plugin for quickly and easily
        implementing app style off-canvas menus and sidebars into your website.</p>

    <ul>
        <li class = "sb-toggle-left">Click here for slider</li>
    </ul>
</div>

<div class = "sb-slidebar sb-left sb-style-push">
    <p>Android</p>
    <hr/>
    <p>Java</p>
    <hr/>
    <p>CSS</p>
    <hr/>
    <p>PHP</p>
    <hr/>
</div>

<script
    src = "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script src = "slidebars.js">
</script>

<script>
    (function($) {
        $(document).ready(function() {
            $.slidebars();
        });
    }) (jQuery);
</script>
</body>
</html>