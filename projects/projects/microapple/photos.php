<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Photo Album</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div id="photos">
    <div class="box one">
        <div class="photolabel">
            <p>Spring</p>
            <p>65&#176;</p>
        </div>
    </div>
    <div class="box two">
        <div class="photolabel">
            <p>Summer</p>
            <p>83&#176;</p>
        </div>
    </div>
    <div class="box three">
        <div class="photolabel">
            <p>Fall</p>
            <p>60&#176;</p>
        </div>
    </div>
    <div class="box four">
        <div class="photolabel">
            <p>Winter</p>
            <p>30&#176;</p>
        </div>
    </div>
</div>


<style>

    .one{
        background-image: url("https://springlakephotographer.com/wp-content/uploads/2017/11/Family-Portrait-Photographer-Spring-Lake-1024x732.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .one:hover{
        background-image: url("https://cdn.cdnparenting.com/articles/2019/01/01192852/1038143503-H.jpg") !important;
    }

    .two{
        background-image: url("https://www.danielledefiore.com/wp-content/uploads/2017/01/vail-summer-family-portraits-1024x769.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .three{
        background-image: url("https://www.blog.motifphotos.com/wp-content/uploads/2019/08/fall-family-photos-1200x801.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .four{
        background-image: url("https://www.taradraper.com/wp-content/uploads/photos/2013/12/21/large_25483d76437eaf6c4c01.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .photolabel{
        width: 120px;
        height: auto;
        background-color: #708b80;
        border-bottom-right-radius: 11px;
        border-top-left-radius: 11px;
        opacity: 0.8;
    }

    .photolabel p:first-child{
        font-size: 30px;
        margin: 0px;
        padding: 0px;
    }

    .photolabel p:last-child{
        font-size: 40px;
        font-weight: bolder;
        margin: 0px;
        padding: 0px;
    }


    .box{
        width: 45%;
        height: 300px;
        border: 5px solid darkred;
        display: inline-block;
        margin: 10px;
        border-radius: 15px;
    }

    .box:hover > .photolabel{
        background-color: red;
        cursor: pointer;
    }

    .box:hover{
        background-image: url("https://www.motherbabychild.com/wp-content/uploads/2016/04/happy-family.jpg");
    }

    body{
        background-color: black;
    }

    #photos{
        width: 1000px;
        height: auto;
        background-color: whitesmoke;
        margin: auto;
        margin-top: 50px;
        text-align: center;
    }
</style>

</body>
</html>