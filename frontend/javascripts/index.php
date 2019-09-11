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


    <?php
            $cars = ['Honda','Toyota','BMW','Mercedes','Audi','Acura','Nexia'];
            $images = [
                    'https://mpop-prod-primary.s3.amazonaws.com/bmw-central-region/img/bmw-central-region_20190612114811.png',
                'https://di-uploads-pod18.dealerinspire.com/normreeveshondacerritos/uploads/2018/11/2019civiclx_1-19.png',
                'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBT7Gb5.img?h=373&w=624&m=6&q=60&o=f&l=f',
                'https://3dautokeys.co.uk/images/quotation-backgrounds/_leftAlignQuotation/Daewoo.png',
                'https://library.kissclipart.com/20190626/tjw/kissclipart-nissan-skyline-gt-r-sports-car-2017-nissan-gt-r-4cbc990dd537a5be.png',
                'https://build.ford.com/dig/Lincoln/Navigator/2019/HD-TILE/Image%5B%7CLincoln%7CNavigator%7C2019%7C1%7C1.%7C200A.J2H..FT...21C.64Q.PRL.NAL.89H.%5D/EXT/4/vehicle.png',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGMONtkWKd35nKVsooILNmKC7zQ3qF2fpqBpUvGLBVP0VT1ciM',
                'https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/stock-images/1e4ec37817e1fc62d89267ad322207b0.png'

            ];
    ?>
    <div class="cars">

        <?php
            $num = 0;
            for ($i=0; $i<100; $i++){
                $num++;
                $rnd = rand(0,7);
        ?>
        <img data-num="<?=$num?>" class="car" src="<?=$images[$rnd]?>">

        <?php
            }
        ?>
    </div>


    <style>
        .cars img{
            width: 160px;
            height: 120px;
        }



        .car{
            border:1px solid black;
            box-shadow: #1b1e21 5px 5px 5px 5px;
            border-radius: 10px;
            margin:20px;
        }

        .car:hover{
            box-shadow: #ff99ca 5px 5px 5px 5px;
            cursor: pointer;
        }

    </style>


    <script>
        $(function () {


            $(".car").click(function () {
                $("div").hide("slow", function(){
                    alert("The paragraph is now hidden");
                });
            });
        })
    </script>




</div>
</body>
</html>