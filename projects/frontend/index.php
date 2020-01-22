<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Practices</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">


    <div class="myheader"><span>W</span><span>elcome to New York!</span></div>

    <nav class="mynav">
        <ul>
            <li><a href="/frontend">Home</a></li>
            <li><a href="/frontend/contactus.php">Contact Us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>

    <div class="mybox">

        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.

        Why do we use it?
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
        packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
        will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
        accident, sometimes on purpose (injected humour and the like).


        Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
        going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum
        comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
        Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
        1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original
        form, accompanied by English versions from the 1914 translation by H. Rackham.

    </div>


</div>

<style>

    .mynav{
        text-align: center;
        margin: auto;
        margin-left: 20px;
    }

    .mynav ul{
        list-style: none;
    }

    .mynav li{
        width:100px;
        margin:10px;
        padding:5px;
        background-color: #ffc7a1;
        color:#f00;
        float: left;
        border-radius: 5px;
        box-shadow: #3a90ea 10px 10px 20px;
    }

    .mynav a{
        text-decoration:none ;
    }

    .mynav li:hover{
        background-color: #2858cd;
        color: #fffdb2;
    }


    .myheader{
        margin: auto;
        font-size: 40px;
        text-align: center;
        color: #e2e23a;
        font-family: "American Typewriter";
        margin-top: 20px;
        box-shadow: #3a90ea 10px 10px 20px;
        border: 1px solid #3888dd;
    }

    .myheader span{
        box-shadow: #3889df 10px 10px 20px;
    }

    .myheader span:first-child{
        box-shadow: #fffdb2 10px 10px 20px;
        border-radius: 30px;
        margin:5px;
        padding:5px;
        border: 2px dotted #3a90ea;
    }

    .mybox {
        width: 90%;
        height: 500px;
        background-color: #ffcd74;
        margin: auto;
        margin-top: 30px;
        border: 10px solid #533fff;
        padding-top: 20px;
        padding-left: 20px;
        border-radius: 30px;
        overflow: auto;
        text-transform: capitalize;
        font-style: italic;
        font-family: Arial, Helvetica, sans-serif;
    }
    .mybox:hover{
        opacity: 1;
        cursor: move;
    }

    /*
    This is main body style, I will change the bg later.

    @TODO: When I go home, I will spend more time to study the body and style
     */
    body {
        background-color: #254daa;
        background-image: url("http://i.stack.imgur.com/vhoa0.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>

</body>
</html>