<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Table design</title>
</head>
<body>

<h1>My Table</h1>
<div id="mytablediv">


    <table>
        <tr>
            <td>Investment</td>
            <td>Cloud</td>
            <td>Mobile</td>
            <td>Artifical Intelligence</td>
            <td>On Demand</td>
            <td>Internet of Things</td>
            <td>Robotics</td>
            <td>Virtual Reality</td>
            <td>Blockchain</td>
        </tr>

        <tr class="secondtr">
            <td>Significan</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
        </tr>

        <tr class="thirdtr">
            <td>Moderate</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
        </tr>

        <tr class="fourthtr">
            <td>Minimal</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
        </tr>

        <tr class="fifthtr">
            <td>Planning</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
        </tr>

        <tr class="sixthtr">
            <td>No Plans</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
            <td><?=rand(1,100)?>%</td>
        </tr>

    </table>



</div>


<style>

    html, body {
        height: 100%;
    }

    #mytablediv{
        width: 100%;
        margin: auto;
    }

    table{
        width: 70%;
        border:1px solid #000;
        background-color: #919da9;
        margin: auto;
    }


    tr{
        background-color: #cecece;
        font-family: Verdana;
        font-size: 18px;
    }

    td{
        text-align: center;
    }



    .secondtr{
        background-color: green;
    }

    .thirdtr{
        background-color: #00e200;
    }

    .fourthtr{
        background-color: #fbf2ac;
    }

    .fifthtr{
        background-color: #fbcab6;
    }
    .sixthtr{
        background-color: #e0ada2;
    }

</style>


</body>
</html>