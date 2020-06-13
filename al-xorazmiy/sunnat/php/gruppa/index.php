<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group homework</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../fontawesome/css/all.css">
</head>
<body>
<?php
include "backend13.php";

?>


<div class="container-fluid">
    <form method="get" class="myform">
    <div class="input-group mb-3">
        <input name="city" value="<?=$city?>"  type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-info" type="submit" id="button-addon2">Submit</button>
        </div>
    </div>
    </form>
    <div class="myimage">

    </div>
</div>
<table class="table table-bordered">
    <tr class="fajr"><td>Fajr: </td><td><?=$City->data->timings->Fajr?></td></tr>
    <tr><td>Sunrise: </td><td><?=$City->data->timings->Sunrise?></td></tr>
    <tr class="duhr"><td>Dhuhr: </td><td><?=$City->data->timings->Dhuhr?></td></tr>
    <tr class="asr"><td>Asr: </td><td><?=$City->data->timings->Asr?></td></tr>
    <tr class="sunset"><td>Sunset: </td><td><?=$City->data->timings->Sunset?></td></tr>
    <tr class="maghrib"><td>Maghrib: </td><td><?=$City->data->timings->Maghrib?></td></tr>
    <tr class="isha"><td>Isha: </td><td><?=$City->data->timings->Isha?></td></tr>
    <tr class="imsak"><td>Imsak: </td><td><?=$City->data->timings->Imsak?></td></tr>
    <tr class="midnight"><td>Midnight: </td><td><?=$City->data->timings->Midnight?></td></tr>
</table>



<div id="cards">
    <div class="card" style="width: 18rem;">
        <img src="https://i.pinimg.com/originals/3e/3c/77/3e3c77fa2fd3775557012084c6873cf8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=$City->data->timings->Fajr?></h5>
            <p class="card-text">One who reads the morning prayer under the protection of Allah</p>
            <a href="https://muslimgirl.com/series-15-how-to-pray-fajr-subuh/" target="_blank" class="btn btn-primary">Learn Fajr namaz</a>
        </div>
    </div>
    <div>
        <div class="card" style="width: 18rem;">
            <img src="https://pbs.twimg.com/media/C1fJ1WeXgAAkIpR.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$City->data->timings->Dhuhr?></h5>
                <p class="card-text">Make sure after your lunch<br><br> time pray Dhuhr namaz.....</p>
                <a href="https://www.youtube.com/watch?v=Nq3Fa-mwNeE" target="_blank" class="btn btn-primary">Learn Dhuhr namaz</a>
            </div>
        </div>
    </div>
    <div>
        <div class="card" style="width: 18rem;">
            <img src="https://www.sisters-magazine.com/wp-content/uploads/2016/06/shutterstock_251535157web.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$City->data->timings->Maghrib?></h5>
                <p class="card-text">The namaz<br><br> read in exact time....</p>
                <a href="https://www.youtube.com/watch?v=xaZr_0FOcfU" target="_blank" class="btn btn-primary">Learn Asr namaz</a>
            </div>
        </div>
    </div>
    <div>
        <div class="card" style="width: 18rem;">
            <img src="https://seekersguidance.org/wp-content/uploads/2016/02/sunset-997497_960_720.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$City->data->timings->Asr?></h5>
                <p class="card-text">When you will be at home<br><br> start pray asr namaz</p>
                <a href="https://www.youtube.com/watch?v=xaZr_0FOcfU" target="_blank" class="btn btn-primary">Learn Maghrib namaz</a>
            </div>
        </div>
    </div>
    <div>
        <div class="card" style="width: 18rem;">
            <img src="https://i.ytimg.com/vi/6eNQsT3Znag/hqdefault.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$City->data->timings->Isha?></h5>
                <p class="card-text">When your heart becomes<br>heavy.Let it pull you down into Sujud</p>
                <a href="https://www.youtube.com/watch?v=xaZr_0FOcfU" target="_blank" class="btn btn-primary">Learn Isha namaz</a>
            </div>
        </div>
    </div>
</div>


<style>
    *{
        padding: 0;
        margin: 0;
    }
    html,body{
        width: 100%;
        height: 100%;
    }
    .myimage{
        background-image: url("https://i.sozcu.com.tr/wp-content/uploads/2019/05/07/iecrop/namaz-shutterstock_16_9_1557244165-880x495.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .card-img-top{
        width: 100%;
        height: 300px;
    }
    #cards{
        width: 100%;
        height: 500px;
        display: inline-flex;
        background-color: red;
    }

    .myform{
        margin-top: 10px;
    }
    .fajr{
        background-color: gainsboro;
    }
    .duhr{
        background-color: gainsboro;
    }
    .sunset{
        background-color: gainsboro;
    }
    .isha{
        background-color: gainsboro;
    }
    .midnight{
        background-color: gainsboro;
    }





</style>

</body>
</html>
