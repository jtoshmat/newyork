<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jon Toshmatov">
    <meta name="keywords" content="HTML, CSS, Javascript tutorials">
    <meta name="description" content="This site is about online tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is HTML tutorial by Jon Toshmatov</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="topdiv">
        <div class="logo_left">
            <img src="../img/logo.png">
        </div>
        <div class="logo_middle">
            <p class="title"><span>WELCOME</span><span> TO </span><span>MY-IT-EDUCATION.US</span></p>
        </div>
        <div class="logo_right">
            <nav>
                <a href="index.php">Home</a>
                <a href="index.php">About Us</a>
                <a href="index.php">Videos</a>
            </nav>
            <br>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your keyword" aria-label="Your keyword" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
            </div>

        </div>
    </div>
    <div class="middlediv">
        <div class="carousel_left carousel">
            <?php include_once "carousel.php"?>
        </div>
        <div class="carousel_right carousel">
          <div class="cr_content">
              The outermost <div>:

                  Carousels require the use of an id (in this case id="myCarousel") for carousel controls to function properly.


                      The .slide class adds a CSS transition and animation effect, which makes the items slide when showing a new item. Omit this class if you do not want this effect.
          </div>
        </div>
    </div>
    <div class="bottomdiv">Bottom</div>
</div>
<style>

    .title span:first-child{
        color: darkred;
    }
    .title span:nth-child(2){
        color: #78c47a;
    }
    .title span:last-child{
        color: #005395;
    }
    .title{
        font-size: 20px;
        font-family: "American Typewriter";
        font-weight: bolder;
    }

    .logo_right nav a{
        padding:5px;
    }

    .logo_middle{
        display: inline-block;
        text-align: center;
        width: 50%;
        margin: auto;
        height: 60px;
    }

    .logo_right nav{
        position: relative;
        top: 10px;
    }

    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
        height: 264px;
        width: 100%;
        border-radius: 10px;
    }

    .carousel{
        display: inline-block;
    }
    .carousel_right{
        float: right;
    }
    .cr_content{
        height: auto;
        width: 200px;
        position: relative;
        top: 10px;
        right: 12px;
        font-size: 15px;
        color: white;
    }

    *{
        box-sizing: border-box;
    }

    .container-fluid{
        padding:0;
        margin: 0;
        padding-right: 1px;
    }
    .middlediv{
        height: 300px;
        background-color:  #052035;
    }

    .topdiv{
       height: auto;
    }
    .topdiv img {
        width: 220px;
    }

    .logo_left{
        display: inline-block;
    }
    .logo_right{
        display: inline-block;
        float: right;
    }


    @media (min-width: 350px) {
        .cr_content{
            background-color: #003969;
            width: 90%;
            margin: auto;
            position: relative;
            top: 83px;
        }

        .topdiv img {
            width: 289px;
        }

        .topdiv {
            text-align: center;
        }

        .logo_middle {
            display: none;
        }

        .middlediv {
            height: 353px;
        }

        .logo_right {
            float: none;
            display: contents;
        }

    }

    @media (min-width: 576px) {
        .cr_content{
            background-color: darkgrey;
        }
    }

    @media (min-width: 768px) {
        .cr_content{
            background-color: #ffde67;
        }
    }

    @media (min-width: 992px) {
        .cr_content{
            background-color: #ff413a;
        }
    }

    @media (min-width: 1200px) {
        .cr_content{
            background-color: #3e332e;
            width: 98%;
            margin: auto;
            position: relative;
            top: 88px;
        }
    }
</style>
</body>
</html>