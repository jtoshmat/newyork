<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="keyword" content="php, html,css,js, so on">
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>





<iframe width="700px" height="600px" src="https://s.marketwatch.com/public/resources/images/MW-HE975_hawaii_ZH_20190304120303.jpg"></iframe>



<p>
    Hello, this is Jon and I love programming in <sub>PHP</sub>
</p>














<p>
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php">Contact Us</a>
        <a href="index.php">Services</a>
        <a href="index.php">About Us</a>
    </nav>
</p>

<style>
    nav a{
        background-color: darkblue;
        color: white;
        width: 120px;
        text-align: center;
        border: 1px solid red;
        margin: 10px;

    }
</style>

<progress value="10" max="100"></progress>
<hr>
<meter value="20" max="100"></meter>

<form method="post">

    <fieldset>
    <legend>My Contact Form</legend>

    <p>
        <label>First Name: </label>
        <input required="required" name="first_name" type="text" placeholder="Your First Name">
    </p>
    <p>
        <label>Email: </label>
        <input required="required" name="email" type="email" placeholder="Your Email Address">
    </p>

    <p>
        <label>Age: </label>
        <input value="21" disabled min="21" max="115" required="required" name="age" type="number" placeholder="Age">
    </p>

    <p>
        <label>Phone: </label>
        <input required="required" name="phone" type="tel" placeholder="(123) 342-1221">
    </p>

    <p>
        <label>Custom: </label>
        <input title="SSN example: 123-45-6789" pattern="[a-zA-Z].bye$" required="required" name="custom" type="text" placeholder="Custom input">
    </p>

    <p>
        <label>Your Message</label><br>
        <textarea name="message"></textarea>
    </p>

    <p>
        <lable>Grocery Products: </lable>
        <br>
        <select name="products">
         <optgroup label="Fruites">
             <option value="apple">Apple</option>
             <option value="orange">Orange</option>
             <option value="strawberry">Strawberry</option>
             <option value="pineapple">Pineapple</option>
         </optgroup>

            <optgroup label="Vegetables">
                <option value="potato">Potato</option>
                <option value="tomato">Tomato</option>
                <option value="onion">Onion</option>
                <option value="greenpepper">Green Pepper</option>
            </optgroup>

        </select>
    </p>

    <p>
        <input name="id" type="hidden" value="9999999">
    </p>


    <p>
        <label>Password: </label>
        <input required="required" name="password" type="password">
    </p>


    <p>
        <button type="reset">Start Over</button>
        <button type="submit">Submit</button>
    </p>

    </fieldset>
</form>

</body>
</html>