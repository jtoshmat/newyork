<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Upload Form</title>
</head>
<body>
<h1>My Upload Form</h1>

<div class="container">
    <div class="upload_form_div">

    <div class="upload_form_nav">
        Upload Form
    </div>
    <form class="upload_form">


        <div class="row">
            <div class="col firstcol">
                <p>Upload Document</p>
                <p>Browse to the document you intended to upload</p>
            </div>
            <div class="col secondcol">
                <input type="file">
            </div>
        </div>

        <div class="row">
            <div class="col firstcol">
                <p>Destination Folder</p>
                <p>Specify the folder in this document library where the document should be saved</p>
            </div>
            <div class="col secondcol">
                <input type="file">
            </div>
        </div>


    </form>

    </div>
</div>

<style>
    .upload_form_div{
        margin: auto;
        background-color: #0b2e13;
    }

    .upload_form_nav{
        background-color: #d7d7d7;
    }

    .upload_form{
        background-color: #d7d7d7;
        margin:5px;
    }

    .firstcol{
        background-color: #fff3cd;
    }
    .secondcol{
        margin-top:5px;
        background-color: #cecece;
    }
</style>

</body>
</html>

<?php

$a = 10;
$b = "10";

if ($a == $b){
    echo "true";
}