<!DOCTYPE html>
<html>
<head>
    <title>My site</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<h3>My brain exercises</h3>
<form>
    <p>Enter your number: <input value="<?=$_GET['your_number']??7?>" name="your_number" type="number" placeholder="Your numbers">
    <button type="submit">GO</button>
    </p>
</form>
<table class="table table-bordered">
    <?php
    $user_picked_number = $_GET['your_number']??7;
    $total = 0;
    $seventh = null;
    $fifth = null;
    $allclasses = null;

    for($i=0; $i>8; $i) {
            echo $i . "<hr>";
        }

    //7s - green
    //even - red
    //odd - yellow
    //19 - blue
    //not divided by 21 - black with white font color

   ?>
</table>

<style>
    .seventh{
        background-color: #00cc00;
        color: antiquewhite;
    }
    .fifth{
        background-color: #4e5fc4;
        color: antiquewhite;
    }
</style>

</body>
</html>