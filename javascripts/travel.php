<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <form>
        <h3>Travel Package</h3>
        <p>Select Destination:
            <select class="custom-select" id="myselect">
                <option value="">Select Your Destination</option>
                <option value="samarkand">Samarkand, Uzbekistan</option>
                <option value="cancun">Cancun, Mexico</option>
                <option value="miami">Maiami, Florida</option>
                <option value="maldives">Maldives</option>
                <option value="tashkent">Tashkent, Uzbekistan</option>
            </select>
        </p>
        <br>
        <div id="mybox">
            <div id="photos">
                <img src="https://www.advantour.com/img/uzbekistan/samarkand/samarkand.jpg">
                <img src="https://www.advantour.com/img/uzbekistan/samarkand/guri-emir2.jpg">
            </div>
            <div id="description">
                What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </form>
</div>
<style>
    #mybox {
        background-color: #7abaff;
        width: 100%;
        height: 420px;
        position: relative;
    }

    #photos {
        width: 49%;
        float: left;
        margin-right: 5px;
    }

    #description {
        width: 49%;
        float: left;
        color: #fff;
        overflow: scroll;
    }

    #photos img {
        width: 100%;
        height: 200px;
        border: 1px solid #1c426e;
        margin-bottom: 5px;
    }

    .container {
        background-color: #7abaff;
    }


</style>
<script>

    $(function () {
        $("#myselect").change(function () {
            var destination = $(this).val();
            change_content(destination);
        });
    });

    function change_content(dest) {
        var welcome_message = "<h1>Welcome to "+dest +"! </h1><br>";

        switch (dest) {
            case 'cancun':
                $("#photos img").eq(0).attr('src','https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg');
                $("#photos img").eq(1).attr('src','http://www.smartmapcancun.com/blog/wp-content/uploads/2013/12/3711301099_655b61a9c1_z.jpg');
                $("#description").html(welcome_message + "Sunshine paradize!<br> ksdjskjdksjd ksdjfs skdjfbsdskdjfs sdkfjsd");
                break;
            case 'samarkand':
                $("#photos img").eq(0).attr('src','https://www.advantour.com/img/uzbekistan/samarkand/samarkand.jpg');
                $("#photos img").eq(1).attr('src','https://www.advantour.com/img/uzbekistan/samarkand/guri-emir2.jpg');
                $("#description").html(welcome_message + "Samarkand!<br>Where the East meets the West!");
                break;
            case 'maldives':
                $("#photos img").eq(0).attr('src','https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg');
                $("#photos img").eq(1).attr('src','http://www.smartmapcancun.com/blog/wp-content/uploads/2013/12/3711301099_655b61a9c1_z.jpg');
                break;
            case 'miami':
                $("#photos img").eq(0).attr('src','https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg');
                $("#photos img").eq(1).attr('src','http://www.smartmapcancun.com/blog/wp-content/uploads/2013/12/3711301099_655b61a9c1_z.jpg');
                break;
            case 'tashkent':
                $("#photos img").eq(0).attr('src','https://www.advantour.com/img/uzbekistan/tashkent/tashkent-photo-gallery/amir-temur-museum.jpg');
                $("#photos img").eq(1).attr('src','https://i2.wp.com/roadsandkingdoms.com/uploads/2019/02/Tashkent-Spread.jpg?w=2400&quality=95&strip=color&ssl=1');
                $("#description").html(welcome_message + "" +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed." +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed." +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed." +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed." +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed." +
                    "This is how it works:\n" +
                    "\n" +
                    "The switch expression is evaluated once.\n" +
                    "The value of the expression is compared with the values of each case.\n" +
                    "If there is a match, the associated block of code is executed."

                );
                break;
            default:
                $("#photos img").eq(0).attr('src','https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg');
                $("#photos img").eq(1).attr('src','http://www.smartmapcancun.com/blog/wp-content/uploads/2013/12/3711301099_655b61a9c1_z.jpg');
                break;
        }
        $("#mybox").fadeIn('slow');
    }


    //cancun 1: https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg
    //cancun 2: http://www.smartmapcancun.com/blog/wp-content/uploads/2013/12/3711301099_655b61a9c1_z.jpg
</script>
</body>
</html>