<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to PHP</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../css/jon.css">
</head>
<body>

<?php
$parms = $_POST;
$num1 = $parms['num1']??null;
$num2 = $parms['num2']??null;
?>

<div class="container-fluid">
    <div class="mybox">
        <h4>Welcome to MY-IT-EDUCATION.US</h4>
        <form method="post">
       <div class="myform">
            <div>
                <label>Calculate: </label>
            </div>

           <div>
               <input value="<?=$num1?>" required="required" name="num1" type="number" min="5" max="35">
           </div>

           <div>
               <input value="<?=$num2?>" required="required" name="num2" type="number"  min="77" max="103">
           </div>

           <div>
               <button type="submit">Submit</button>
           </div>
       </div>
        </form>

        <div class="myresults">
            <?php

            if ($num1<5 || $num1>35){
                echo "<span class='error'>Your number 1 must be greater than 5 and less than 35</span>";
                exit;
            }

            if ($num2<77 || $num2>103){
                echo "<span class='error'>Your number 2 must be greater than 77 and less than 103</span>";
                exit;
            }


            for($i=$num1; $i<35; $i++){
                echo "<div class='num1 myrows'>$i</div>";

            }

            for($y=$num2; $y<103; $y++){
                echo "<div class='num2 myrows'>$y</div>";

            }

            ?>
        </div>
    </div>
</div>
</body>
</html>