<!DOCTYPE Html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converter</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>

</head>
<body>

<div class="container">

    <div class="mycalc">

        <form action="workphp.php" method="post" id="myform">
            <h3 style="text-align: center"> Weight Converter</h3>
            <br><br><br>
            <p><input type="number" name="number" required="required" placeholder="1,2,3...">
                <input type="no text" class="result">
                <br>
                <div margin-top="20 px">
                <select name="Choose" id="Choose">
                    <option>choose</option>
                    <option>to kg</option>
                    <option>to lbs</option>
                </select>
                <select name="Choose" id="Choose">
                    <option>to kg</option>
                    <option>to lbs</option>
                </select>

                <br><br>

                <button id="button" border-radius="5px">convert</button>
                 </div>



            </p>


        </form>


    </div>

</div>



<style>
    .container {
        background-color: #e1e4e5;
        margin-top: 30px;
        border: 5px solid black;
        height: 600px;
        border;
    }
    .mycalc{
        border: 10px;
    }
    #myform{
        text-align: center;
        margin-top: 50px;

    }
    #Choose {
        width: 175px;
    }
    #button {
        width: 170px;
        border: 2px #d7d8ce solid;
        border-radius: 10px;
        cursor: pointer;
    }
     #button:hover {
         background-color: #a8a99f;

     }




</style>

</body>