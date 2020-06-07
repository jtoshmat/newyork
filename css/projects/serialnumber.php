<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Serial Number</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="emptydiv"></div>
    <div class="serialnumber">
        <div class="emptydiv3"></div>
        <div class="myheader">
            <img src="img/key.png">
            Enter Your Product Key
        </div>
        <div class="mycontent">
            <div class="verbage">
                <h5>Need to find your Product Key?</h5>
                Your Product key is 25 characters and is typically found in <br>
                your product packaging. If you cannnot find your Product Key, click  <br>
                the "Learn more about product Keys and see examples" link <br>
            </div>
            <div>
                <div class="emptydiv2"></div>
                <?php
                    $error = 'Please enter your serial number';
                    $color = "#555";
                    $serialnumber = null;
                    if (isset($_POST['serialnumber'])){
                        $serialnumber = strtoupper($_POST['serialnumber']);
                    }
                    //12FDS-F5DFS-23FDA-666AD-99GDS
                    $pattern = "[0-9]{2}[A-Z]{3}-[A-Z]{1}[0-9]{1}[A-Z]{3}-[0-9]{2}[A-Z]{3}-[0-9]{3}[A-Z]{2}-[0-9]{2}[A-Z]{3}$";
                    $found = preg_match("#$pattern#", $serialnumber, $match);
                    if (!$found){
                        $error = "Your Serial Number is invalid";
                        $color = "#f00";
                    }else{
                        $error = "Your Serial Number has been validated successfully";
                        $color = "green";
                    }
                ?>
                <form method="post">
                    <p><input placeholder="12FDS-F5DFS-23FDA-666AD-99GDS" value="<?=$serialnumber?>" name="serialnumber" class="myinput"><button>Continue</button></p>
                </form>
                <span style="color:<?=$color?>"><?=$error?></span>
            </div>

        </div>
    </div>
</div>
<style>
    .emptydiv3{
        height: 50px;
    }
    .myinput{
        width:84%;
        height:30px;
        border-radius: 3px;
        border:1px solid #a9a9a9;
    }
    .verbage{
        width: 100%;
        border:1px solid #a9a9a9;
        padding:8px;
        color: #54565b;
    }
    .mycontent{
        width:80%;
        height:300px;
        margin: auto;
    }
    .myheader{
        font-size: 30px;
        font-family: "American Typewriter";
        font-weight: bolder;
        color: #102a54;
    }
    .myheader img{
        width:80px;
    }
    .emptydiv2{
        height: 20px;
    }
    .emptydiv{
        height: 60px;
    }
    body{
        background-color: #113068;
    }
    .serialnumber{
        width: 650px;
        height:500px;
        background-color: #ffffff;
        margin: auto;
        border:1px solid black;
        background-image: url("img/bgbottom.png");
        border-radius: 15px;
    }
</style>
</body>
</html>