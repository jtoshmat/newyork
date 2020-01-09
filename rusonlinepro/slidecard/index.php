<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="swiper.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="myteam">
    <h1>MY-IT-EDUCATION'S TEAM</h1>
</div>
<div class="swiper-container">

    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/jon1.jpg">
            </div>
            <div class="details">
                <h3>Jon Toshmatov<br><span>President</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/umi1.jpg">
            </div>
            <div class="details">
                <h3>Umishka<br><span>Vice President</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/juli1.jpg">
            </div>
            <div class="details">
                <h3>Julia Pulatov<br><span>Web Designer</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/dil1.jpg">
            </div>
            <div class="details">
                <h3>Dilfuza<br><span>Web Deweloper</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/parvina1.jpg">
            </div>
            <div class="details">
                <h3>Parvinochka<br><span>Vice President</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/rus1.png">
            </div>
            <div class="details">
                <h3>Rustam Mirakbarov<br><span>Project Manager</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/sher1.jpeg">
            </div>
            <div class="details">
                <h3>Sherzod<br><span>UI Desiner</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/hur1.png">
            </div>
            <div class="details">
                <h3>Hursand Halmanov<br><span>Web Designer</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/otabek2.jpg">
            </div>
            <div class="details">
                <h3>Otabek Mahkamov<br><span>Advertising Manager</span></h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="pic/asror.jpg">
            </div>
            <div class="details">
                <h3>Asror Umarov<br><span>Web Deweloper</span></h3>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
    <script type="text/javascript" src="swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
</body>
</html>