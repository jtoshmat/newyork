<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
<h3>Welcome to Bensonhurst Digital Library</h3>
    <hr>
    <?if($status):?>
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required="required" name="e_mail" type="email" class="form-control" id="shburkutboyev@gmail.com" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required="required" type="password" class="form-control" id="Diyor1105">
        </div>
        <input name="form_submitted" type="hidden" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?else:?>
    <div class="result">
    <ul>
        <?foreach ($books as $book):?>
        <li><?=$book['']?></li>
        <?endforeach;?>
    </ul>
    </div>
    <?endif;?>
</div>

<style>
    .result{
        width: 90%;
        margin: 10px auto;
        background-color: whitesmoke;
    }
    h4{
        text-align: center;
    }
    form{
        background-color: rgba(150, 216, 222, 0.32);
        opacity: 0.8;
        text-align: center;
    }
    html, body{
        width: 100%;
        height: 100%;

    }
    body{
        background-color: black;
        background-image: url("https://cdlib.org/wp-content/uploads/2020/04/pad_hathi_041620.jpg");
        background-size: 100% 100%;
        background-right: no-repeat;

    }
</style>

</body>
</html>


