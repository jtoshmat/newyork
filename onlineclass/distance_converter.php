<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distance Converter</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/myscripts.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    <div class="myheader">Distance Converter</div>
    <div class="myformbox">
        <form id="myconverter_form">
            <p>
                <input min="0" max="100000000" required="required" type="number" class="mygroup_inputs">
                <select class="myown_select">
                    <option value="mile">Mile</option>
                    <option value="km">Km</option>
                </select>
                <button class="btn btn-primary">Convert</button>
                <img id="help_icon" src="img/icon.png">
            </p>
        </form>

        <div class="instruction">
            Please read the instruction below for how to use the converter<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
            Please read the instruction below for how to use the converter<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
            Please read the instruction below for how to use the converter<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
            Please read the instruction below for how to use the converter<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
        </div>
    </div>

    <div class="myemptybox"></div>

    <div class="myresultbox"></div>

</div>
<style>

    #help_icon{
        cursor: pointer;
    }
    body{
        background-color: #6698e4;
    }

    .myemptybox{
        height: 10px;
    }

    .myheader{
        font-size: 40px;
        color: #f8f3f3;
        font-family: "American Typewriter";
        text-align: center;
    }

    .instruction{
        width: 100%;
        border: 1px solid #0c5460;
        margin: auto;
        background-color: #fff;
        color: black;
        font-size: 11px;
        height: 100px;
        overflow-y: auto;
        display: none;
    }

    .container {
    }

    .myformbox {
        background-color: #ffe49b;
        width: 100%;
        height: auto;
        margin: auto;
        text-align: center;
        border: 2px double #cab75b;
    }

    .myresultbox {
        background-color: #ffffff;
        height: 100px;
        border: 2px solid #5173aa;
        padding:5px;
        font-size: 35px;
        text-align: center;
        display: none;
    }

    .myown_select {
        display: inline-block;
        width: 22%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url(data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 4 5' %3e%3cpath fill= '%23343a40' d= 'M2 0L0 2h4zm0 5L0 3h4z' /%3e%3c/svg%3e) no-repeat right 0.75 rem center / 8 px 10 px;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
    }

    .mygroup_inputs {
        position: relative;
        display: -ms-flexbox;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 40%;
        height: 38px;
        margin: 10px;
        border-radius: 7px;
        text-align: right;
        color: #0b18ff;
    }

    select{
        color: #0b18ff;
    }

</style>
</body>
</html>