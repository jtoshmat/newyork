<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Practices</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<div class="container">


    <div class="myheader"><span>W</span><span>elcome to New York!</span></div>

    <nav class="mynav">
        <ul>
            <li><a href="/frontend">Home</a></li>
            <li><a href="/frontend/contactus.php">Contact Us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>

    <div class="mybox">
        <h3 style="text-align: center">CSS Positions</h3>





    </div>
</div>

<style>


    .myfav{
        box-shadow: #8e1031 5px 5px 5px 5px !important;
    }
    .myimages{
        background-color: white;
        margin: auto;
        text-align: center;
    }
    .myimages img:nth-child(3){
        border:5px dotted #8e1031;
    }

    .myimages img{
        width:100px;
        height:100px;
        border-radius: 10px;
        box-shadow: #d7a96c 5px 5px 5px 5px;
        border:1px solid #ab8656;
        margin: 10px;
    }

    .myimages img:hover{
        width:101px;
        height:101px;
        position: relative;
        box-shadow: #ff745f 5px 5px 5px 5px;
        cursor: pointer;
    }

    .mynav {
        text-align: center;
        margin: auto;
        margin-left: 20px;
    }

    .mynav ul {
        list-style: none;
    }

    .mynav li {
        width: 100px;
        margin: 10px;
        padding: 5px;
        background-color: #ffc7a1;
        color: #f00;
        float: left;
        border-radius: 5px;
        box-shadow: #3a90ea 10px 10px 20px;
    }

    .mynav a {
        text-decoration: none;
    }

    .mynav li:hover {
        background-color: #2858cd;
        color: #fffdb2;
    }


    .myheader {
        margin: auto;
        font-size: 40px;
        text-align: center;
        color: #e2e23a;
        font-family: "American Typewriter";
        margin-top: 20px;
        box-shadow: #3a90ea 10px 10px 20px;
        border: 1px solid #3888dd;
        position: sticky;
        left: 0;
        top: 0;
    }

    .myheader span {
        box-shadow: #3889df 10px 10px 20px;
    }

    .myheader span:first-child {
        box-shadow: #fffdb2 10px 10px 20px;
        border-radius: 30px;
        margin: 5px;
        padding: 5px;
        border: 2px dotted #3a90ea;
    }

    .mybox {
        width: 90%;
        height: 500px;
        background-color: #ffcd74;
        margin: auto;
        margin-top: 30px;
        border: 10px solid #533fff;
        padding-top: 20px;
        padding-left: 20px;
        border-radius: 30px;
        overflow: auto;
        text-transform: capitalize;
        font-style: italic;
        font-family: Arial, Helvetica, sans-serif;
    }

    .mybox:hover {
        opacity: 1;
        cursor: move;
    }

    /*
    This is main body style, I will change the bg later.

    @TODO: When I go home, I will spend more time to study the body and style
     */
    body {
        background-color: #254daa;
        background-image: url("http://i.stack.imgur.com/vhoa0.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>


<div>
    w3schools.com
    THE WORLD'S LARGEST WEB DEVELOPER SITE

    CSS Layout - The position Property
    The position property specifies the type of positioning method used for an element (static, relative, fixed, absolute or sticky).

    The position Property
    The position property specifies the type of positioning method used for an element.

    There are five different position values:

    static
    relative
    fixed
    absolute
    sticky
    Elements are then positioned using the top, bottom, left, and right properties. However, these properties will not work unless the position property is set first. They also work differently depending on the position value.

    position: static;
    HTML elements are positioned static by default.

    Static positioned elements are not affected by the top, bottom, left, and right properties.

    An element with position: static; is not positioned in any special way; it is always positioned according to the normal flow of the page:

    This <div> element has position: static;
        Here is the CSS that is used:

        Example
        div.static {
        position: static;
        border: 3px solid #73AD21;
        }
        position: relative;
        An element with position: relative; is positioned relative to its normal position.

        Setting the top, right, bottom, and left properties of a relatively-positioned element will cause it to be adjusted away from its normal position. Other content will not be adjusted to fit into any gap left by the element.

        This <div> element has position: relative;
            Here is the CSS that is used:

            Example
            div.relative {
            position: relative;
            left: 30px;
            border: 3px solid #73AD21;
            }

            position: fixed;
            An element with position: fixed; is positioned relative to the viewport, which means it always stays in the same place even if the page is scrolled. The top, right, bottom, and left properties are used to position the element.

            A fixed element does not leave a gap in the page where it would normally have been located.

            Notice the fixed element in the lower-right corner of the page. Here is the CSS that is used:

            Example
            div.fixed {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 300px;
            border: 3px solid #73AD21;
            }
            This <div> element has position: fixed;
                position: absolute;
                An element with position: absolute; is positioned relative to the nearest positioned ancestor (instead of positioned relative to the viewport, like fixed).

                However; if an absolute positioned element has no positioned ancestors, it uses the document body, and moves along with page scrolling.

                Note: A "positioned" element is one whose position is anything except static.

                Here is a simple example:

                This <div> element has position: relative; This <div> element has position: absolute;
                        Here is the CSS that is used:

                        Example
                        div.relative {
                        position: relative;
                        width: 400px;
                        height: 200px;
                        border: 3px solid #73AD21;
                        }

                        div.absolute {
                        position: absolute;
                        top: 80px;
                        right: 0;
                        width: 200px;
                        height: 100px;
                        border: 3px solid #73AD21;
                        }
                        position: sticky;
                        An element with position: sticky; is positioned based on the user's scroll position.

                        A sticky element toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed).


                        Note: Internet Explorer, Edge 15 and earlier versions do not support sticky positioning. Safari requires a -webkit- prefix (see example below). You must also specify at least one of top, right, bottom or left for sticky positioning to work.

                        In this example, the sticky element sticks to the top of the page (top: 0), when you reach its scroll position.

                        Example
                        div.sticky {
                        position: -webkit-sticky; /* Safari */
                        position: sticky;
                        top: 0;
                        background-color: green;
                        border: 2px solid #4CAF50;
                        }
                        Overlapping Elements
                        When elements are positioned, they can overlap other elements.

                        The z-index property specifies the stack order of an element (which element should be placed in front of, or behind, the others).

                        An element can have a positive or negative stack order:

                        This is a headingBecause the image has a z-index of -1, it will be placed behind the text.
                        Example
                        img {
                        position: absolute;
                        left: 0px;
                        top: 0px;
                        z-index: -1;
                        }
                        An element with greater stack order is always in front of an element with a lower stack order.

                        Note: If two positioned elements overlap without a z-index specified, the element positioned last in the HTML code will be shown on top.

                        Positioning Text In an Image
                        How to position text over an image:

                        Example
                        Cinque Terre Bottom LeftTop LeftTop RightBottom RightCentered
                        Try it Yourself:


                        More Examples
                        Set the shape of an element
                        This example demonstrates how to set the shape of an element. The element is clipped into this shape, and displayed.

                        Test Yourself with Exercises!
                        All CSS Positioning Properties
                        Property	Description
                        bottom	Sets the bottom margin edge for a positioned box
                        clip	Clips an absolutely positioned element
                        left	Sets the left margin edge for a positioned box
                        position	Specifies the type of positioning for an element
                        right	Sets the right margin edge for a positioned box
                        top	Sets the top margin edge for a positioned box
                        z-index	Sets the stack order of an element


                        COLOR PICKER
                        colorpicker
                        HOW TO
                        Tabs
                        Dropdowns
                        Accordions
                        Side Navigation
                        Top Navigation
                        Modal Boxes
                        Progress Bars
                        Parallax
                        Login Form
                        HTML Includes
                        Google Maps
                        Range Sliders
                        Tooltips
                        Slideshow
                        Filter List
                        Sort List
                        SHARE


                        CERTIFICATES
                        HTML
                        CSS
                        JavaScript
                        SQL
                        Python
                        PHP
                        jQuery
                        Bootstrap
                        XML


                        Top Tutorials
                        HTML Tutorial
                        CSS Tutorial
                        JavaScript Tutorial
                        How To Tutorial
                        SQL Tutorial
                        Python Tutorial
                        W3.CSS Tutorial
                        Bootstrap Tutorial
                        PHP Tutorial
                        jQuery Tutorial
                        Java Tutorial
                        Top References
                        HTML Reference
                        CSS Reference
                        JavaScript Reference
                        SQL Reference
                        Python Reference
                        W3.CSS Reference
                        Bootstrap Reference
                        PHP Reference
                        HTML Colors
                        jQuery Reference
                        Angular Reference
                        Java Reference
                        Top Examples
                        HTML Examples
                        CSS Examples
                        JavaScript Examples
                        How To Examples
                        SQL Examples
                        Python Examples
                        W3.CSS Examples
                        Bootstrap Examples
                        PHP Examples
                        jQuery Examples
                        Java Examples
                        XML Examples
                        Web Certificates
                        HTML Certificate
                        CSS Certificate
                        JavaScript Certificate
                        SQL Certificate
                        Python Certificate
                        jQuery Certificate
                        PHP Certificate
                        Bootstrap Certificate
                        XML Certificate
                        W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2019 by Refsnes Data. All Rights Reserved.
                        Powered by W3.CSS.

                        W3Schools.com


                    </div>

</body>
</html>