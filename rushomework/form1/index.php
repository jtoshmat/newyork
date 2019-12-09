<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <div class="register">
        <h2>Register Here</h2>
        <form method="post" id="register" action="">
            <label> First Name :</label><br>
            <input type="text" name="Fname" id="name" placeholder="Enter Your First Name"><br><br>

            <label> Last Name :</label><br>
            <input type="text" name="Fname" id="name" placeholder="Enter Your Last Name"><br><br>
            <label> Mobile Number :</label><br>
            <select id="ph">
                <option>+91</option>
                <option>+92</option>
                <option>+93</option>
                <option>+94</option>
                <option>+95</option>
            </select>
            <input type="number" name="Mnum" id="num" placeholder="Enter Your Mobile Number"><br><br>
            <label> Email :</label><br>
            <input type="email" name="email" id="name" placeholder="Enter Your Email"><br><br>
            <label> Password:</label><br>
            <input type="password" name="pass" id="name" placeholder="Enter Your Password"><br><br>
            <label> Re Enter Password:</label><br>
            <input type="password" name="pass" id="name" placeholder="Enter Your Password"><br><br>
            <input type="radio" name="male" id="male"><span id="mail">&nbsp; Male</span>&nbsp;&nbsp;
            <input type="radio" name="male" id="male"><span id="mail">&nbsp;&nbsp; Fe Male</span>&nbsp;&nbsp;<br><br>&nbsp;&nbsp;
            <input type="radio" name="male" id="male"><span id="mail">&nbsp; Other</span>&nbsp;&nbsp;<br><br>
            <input type="submit" value="Submit" id="sub">



        </form>
    </div>
<style>
    *
    {
        margin: 0;
        padding: 0;
    }
    h1
    {
        text-align: center;
        padding: 20px;
    }
    h2
    {
        text-align: center;
        padding: 20px;
    }
    .register
    {
        margin: auto;
        background: #2d85b0;
        width: 500px;
        color: white;
        font-size: 18px;
        padding: 20px;
        border-radius: 10px;
    }
    #register
    {
        position: center;
        margin-left: 50px;
    }
    label
    {
        color: white;
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
    }
    #name
    {
        width: 300px;
        border: none;
        border-radius: 3px;
        outline: 0;
        padding: 7px;
    }
    #ph
    {
        width: 65px;
        padding: 7px;
        border: none;
        border-radius: 3px;
        outline: 0;
    }
    #num
    {
        width: 230px;
        padding: 7px;
        border: none;
        border-radius: 3px;
        outline: 0;
    }
    #sub
    {
        width: 200px;
        padding: 7px;
        font-size: 16px;
        font-family: sans-serif;
        font-style: italic;
        font-weight: 600;
        border: none;
        border-radius: 3px;
        outline: 0;
    }
</style>

</body>
</html>


































