<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css">
    <title>Checkout Form</title>
</head>
<body>
    <h2>Responsive Checkout Form</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-58">
                        <h3>Billing Adress</h3>
                        <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Done">

                        <label for="email"><i class="fa fa-envelope"></i>Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">

                        <label for="abr"><i class="fa fa-address-card-o"></i>Address</label>
                        <input type="text" id="abr" name="address" placeholder="452 W. 15th Street">

                        <label for="city"><i class="fa fa-institution"></i> </label>
                        <input type="text" id="city" name="city" placeholder="Phone Penh">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" placeholder="PP">
                            </div>
                            <div class="col-50">
                                <label for="state">Zip</label>
                                <input type="text" id="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Card</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color: navy;"></i>
                            <i class="fa fa-cc-amex" style="color: blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color: red;"></i>
                            <i class="fa fa-cc-discover" style="color: orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardnumber" placeholder="John More Done">

                        <label for="cname">Credit Card</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                        <label for="cname">Exp Month</label>
                        <input type="text" id="expmonth" name="cardnumber" placeholder="September">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="expyear">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="532">
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing</label>
                <input type="submit" value="Continue to checkbox" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Card<span class="price" style="color: black"><i class="fa fa-shopping-cart"></i><b>4</b></span> </h4>
            <p><a href="#">IPHONE</a><span class="price">$1500</span></p>
            <p><a href="#">SAMSUNG</a><span class="price">$1000</span></p>
            <p><a href="#">OPPO</a><span class="price">$500</span></p>
            <p><a href="#">HUAWEI</a><span class="price">$500</span></p>
            <hr>
            <p>Total <span class="price" style="color: black"><b>$3500</b></span> </p>
        </div>
    </div>
</div>
</body>
</html>



















