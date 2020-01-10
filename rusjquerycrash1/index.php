<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <style>
        body{
            font-size: 17px;
            font-family: Arial;
            background: #f4f4f4;
            line-height: 1.5em;
        }
        header{
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 4px #000 solid;
            border-bottom: 10px;
        }
        #container{
            width: 90%;
            margin: auto;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>jQuery Crash Course</h1>
    </header>
    <div id="container">
        <h1 id="heading1">Heading One</h1>
        <p id="para1">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. <span>Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s,</span> when an unknown
            printer took a galley of type and scrambled it to
            make a type specimen book.</p>

        <h1 class="heading2">Heading Two</h1>
        <p class="para2">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. <span>Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s,</span> when an unknown
            printer took a galley of type and scrambled it to
            make a type specimen book.</p>

        <ul id="list">
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
        </ul>
        <input type="button" value="Button 1">
        <input type="submit" value="Submit">
        <input type="text">

        <a href="http://google.com">Google</a>
        <a href="http://yahoo.com">Yahoo</a>
    </div>

    <script>
        //$('h1').hide();
        //$('h1#heading1').hide();
        //$('.heading2').hide();

       // $('p span').css('color', 'red');

        $('ul#list li:first').css('color', 'red');
        $('ul#list li:last').css('color', 'green');
        $('ul#list li:even').css('background-color', 'yellow');
        $('ul#list li:odd').css('background-color', '#cccccc');
        $('ul#list li:nth-child(3n)').css('list-style', 'none');
        $(':text').hide();
        $('[href]').css('color', 'red');
        $('a[href="http://yahoo.com"]').css('color', 'green');
        //$('*').hide();




    </script>
</body>
</html>



































