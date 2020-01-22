<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery Crash Course2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




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
        <h1>jQuery Crash Course2</h1>
    </header>
    <div id="container">
        <h3>Mouse Effects</h3>
        <button id="btn1" class="btnClass">Button 1</button>
        <button id="btn2">Button 2</button>
        <p class="para1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

        <hr>
        <form id="form">
            <label>Name</label><br>
            <input type="text" id="name" name="name">
            <br>
            <labe>Email</labe><br>
            <input type="email" id="email" name="email">
            <br>
            <label>Gender</label><br>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="male">Female</option>
            </select>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

     <script>
    $(document).ready(function(){
    /*  $('#btn1').click(function(){
        alert('Button Clicked!');
      });
      $('#btn1').on('click', function(){
      //  $('.para1').hide();
      $('.para1').toggle();
      });
        $('#btn2').on('click', function(){
          $('.para1').show();
      });

      $('#btn1').dblclick(function(){
        $('.para1').toggle();
      });
      $('#btn1').on('mouseenter',function(){
        $('.para1').toggle();
      });
      $('#btn1').on('mouseleave',function(){
        $('.para1').toggle();
      });
      $('#btn1').on('mousemove',function(){
        $('.para1').toggle();
      });
      $('#btn1').on('mousedown',function(){
        $('.para1').toggle();
      });
      $('#btn1').on('mouseup',function(){
        $('.para1').toggle();
      });
      $('#btn1').click(function(){
          alert('Button Clicked!');
          $('#btn1').click(function(e){
              //alert(e.currentTarget.id);
              //alert(e.currentTarget.innerHTML);
              //alert(e.currentTarget.outerHTML);
              alert(e.currentTarget.className);
            });
        $(document).on('mousemove',function(e){
            $('#coords').html('Coords: Y: '+e.clientY+" X: "+e.clientX);
        });
        $('input').focus(function () {
           // alert('Focus');
            $(this).css('background', 'pink');
        });

        $('input').blur(function () {
            // alert('Focus');
            $(this).css('background', 'white');
        });

        $('input').keyup(function (e) {
            console.log(e.target.value);
        });
        */

        $('select#gender').submit(function () {
           alert(e.target.value);
        });
        $('#form').submit(function (e) {
            e.preventDefault();
            var name = $('input#name').val();
            console.log(name);
        });

    });
     </script>
















































</body>
</html>
