<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cannon Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="javascript" href="script/javascript.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="index.html" class="active">Home</a>
    <a href="about.html">About</a>
    <a href="accomplishments.html">Accomplishments</a>
    <a href="hobbies.html">Hobbies</a>
    <a href="contact.html">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
</div>

<div style="padding-left:16px">
    <h2>Welcome to my website</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<style>
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #8585e0;
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add an active class to highlight the current page */
    .active {
        background-color: #00e68a;
        color: white;
    }

    /* Hide the link that should open and close the topnav on small screens */
    .topnav .icon {
        display: none;
    }

     /*When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
    @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive a.icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }
</style>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</body>
</html>