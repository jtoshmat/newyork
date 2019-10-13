<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>My store</title>
</head>
<body>
<div class="myheader">
    <h2>Adidas</h2>
    <select class="mymenu">
        <option>Menu</option>
        <option>Men</option>
        <option>Women</option>
        <option>Kids</option>
        <option>Sports</option>
        <option>Brands</option>
        <option>My account</option>
        <option>Feedback</option>
    </select>
    <input class="search" type="search" q="googlesearch" placeholder="search">
</div>
<br>
<br>
<div class="cont1">
    <h4>Sign Up form</h4>

    <form class="container">
        <table>
           <tr>
               <td class="leftcol">First & Last Name: *</td>
               <td class="rightcol"><input class="fname" type="text" required="required" placeholder="First name"></td>
               <td class="rightcol"><input class="lname" type="text" required="required" placeholder="Last name"></td>

           </tr>
            <tr>
                <td class="leftcol">Organization:</td>
                <td class="rightcol"><input class type="text" placeholder="name of company"></td>
            </tr>
            <tr>
                <td class="leftcol">Email address: *</td>
                <td class="rightcol"><input type="email" required="required" placeholder="your email"></td>
            </tr>
            <tr>
                <td class="leftcol">Work Phone:</td>
                <td class="rightcol"><input type="tel" placeholder="your work phone num"></td>
            </tr>
            <tr>
                <td class="leftcol">Home phone:</td>
                <td class="rightcol"><input type="tel" placeholder="you home phone num"></td>
            </tr>
            <tr>
                <td class="leftcol">Cell phone:</td>
                <td class="rightcol"><input type="tel" placeholder="your cell phone num"></td>
            </tr>
            <tr>
                <td class="leftcol">Fax:</td>
                <td class="rightcol"><input type="tel" placeholder="your fax num"></td>
            </tr>
            <tr>
                <td class="leftcol">Address *:</td>
                <td class="rightcol"><input required="required" type="text" placeholder="Address"></td>
            </tr>
            <tr>
                <td class="leftcol">City:</td>
                <td class="rightcol"><input type="text" placeholder="City"></td>
            </tr>
            <tr>
                <td class="leftcol">State:</td>
                <td class="rightcol"><input type="text" placeholder="State"></td>
            </tr>
            <tr>
                <td class="leftcol">Zip Code:</td>
                <td class="rightcol"><input type="number" placeholder="zip code"></td>
            </tr>
            <tr>
                <td class="leftcol">Country:</td>
                <td class="rightcol"><input type="text" placeholder="Country"></td>
            </tr>
            <tr>
                <td class="leftcol">* -required fields</td>
                <td class="rightcol"><button class="submit">Submit</button></td>
            </tr>
        </table>
        <div>


        </div>

    </form>
</div>



<style>
    .rightcol {
        padding: 2px;
        padding-left: 10px;
    }
    .fname {
        width: 120px;
    }
    .lname {
        width: 160px;
        margin-left: -50px;
    }
    .myheader{
        width: 100%;
        height: 100px;
        background-color: black;
        color: #fefefe;
        float: left;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    .myheader h2{
        text-align: center;

    }
    .mymenu{
        height: 20px;
        width: 100px;
        position: absolute;
        margin-top: -30px;
    }
    .search {
        height: 20px;
        width: 150px;
        position: absolute;
        margin-top: -30px;
        text-align: right;
        margin-left: 75%;
    }
    .container {
        color: black;
        width: 530px;
        height: 500px;
        background-color: white;
    }
    .leftcol {
        font-family: "American Typewriter";
        font-size: 15px;
        font-weight: bold;

    }
    .cont1 {
        margin-top: 100px;
        margin-left: 20px;
        padding-top: 10px;
        width: 550px;
        height: 600px;
        background-color: #caeaf4;
        border: 2px solid #77a5ce;
        border-radius: 10px 10px;
        text-align: center;
        display: none;

    }






</style>


</body>
</html>

