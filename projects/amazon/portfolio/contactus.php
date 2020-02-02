<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../css/portfolio.css">
</head>
<body>
<div class="container-fluid">
    <div style="height: 50px"></div>
    <div id="mycontainer">
        <div class="myheader">
            <img id="mylogo" src="../img/healthshare.png">
            <div class="mysearchform">
                <input name="keyword" type="text">
            </div>
        </div>
        <div class="mybuttons">
            <nav>
                <a href="index.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="#">Our Services</a>
                <a href="#">Contact Us</a>
            </nav>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
<br>
        <div id="my_contactus_form">
            <h3>Contact Us</h3>
            <form method="post" autocomplete="off">
                <table>
                    <tr>
                        <td><label>First Name:</label></td>
                        <td><input autocomplete="disable" required="required" name="first_name" type="text" placeholder="Your First Name"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name:</label></td>
                        <td><input autocomplete="disable" name="last_name" type="text" placeholder="Your Last Name"></td>
                    </tr>
                    <tr>
                        <td><label>Email Address:</label></td>
                        <td><input autocomplete="disable" required="required"  name="email" type="email" placeholder="Your Email Address"></td>
                    </tr>
                    <tr>
                        <td><label>Phone Number:</label></td>
                        <td><input autocomplete="disable" required="required"  name="phone" type="tel" placeholder="Your Phone Number"></td>
                    </tr>
                    <tr>
                        <td><label>Your Message:</label></td>
                        <td>
                            <textarea required="required"  name="message" placeholder="Your Message Goes Here"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Upload Your File:</label></td>
                        <td><input class="inputfile" name="yourfile" type="file" placeholder="Your File"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button class="btn btn-dark" type="reset">Start Over</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>


        <div class="myfooter">
            <hr>
            <div class="followus">Follow Us in Social Media</div>
            <img src="../img/social_media_icons.png">
        </div>
    </div>
</div>
</body>
</html>