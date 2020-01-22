<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunday Class</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid jon">
<div class="myform">
    <form method="post">
        <h2>Sign Up Form</h2>
        <p>Email: <input class="myinput" required="required" type="email" name="email" value="" placeholder="Your Email Address">
            <img class="error_icon" src="img/error_icon.png">
        </p>
        <p>Phone: <input class="myinput" required="required" type="tel" name="phone" value="" placeholder="Your Phone Number"></p>
        <p><button>Sign Up</button></p>
    </form>


    <p>
        <button data-id="3232323" class="jonclass" id="dubuque">Dubuque - USA</button>
    </p>
</div>
    <style>

        .error_icon{
            width: 30px;
            display: none;
        }
        .error{
            color: #102a54;
            display: block;
        }
        .myerror{
            color: red;
        }
        .mysuccess{
            color: #69c73c;
        }

        .myinput{
            width:360px;
        }
    </style>
    <script>


        //document.getElementById("dubuque").innerHTML = "<img src='img/boa_icon.png'>";
        var myclass = document.getElementById("dubuque").getAttribute('class');

        document.write(myclass);



        $(function () {

            var jon = $("#dubuque").text();
            document.write(jon);

           $(".myinput").change(function () {
               var email = $(this).val();
               if (email.length>5) {
                   callHttp(email);
               }
           });
        });

        function callHttp(email) {
            var mydata = { email: email};
            $.post( "api/validateemail.php", mydata, function( response ) {
                $(".error_icon").fadeIn('slow');
                if (response){
                    $(".error_icon").attr("src","img/error_icon.png");
                }else{
                    $(".error_icon").attr("src","img/check_icon.png");
                }

            });
        }
    </script>




</body>
</html>