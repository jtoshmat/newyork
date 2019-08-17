<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shohruh's Site</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <h4 style="text-align: center">Figure 20.</h4>

    <div class="mynav">

      <ul>
          <li title="Click here to go to Google"><a target="_blank" href="http://google.com">Google</a></li>
          <li title="Click here to go to Yahoo"><a target="_blank" href="http://yahoo.com">Yahoo</a></li>
          <li title="Click here to go to Facebook"><a target="_blank" href="http://facebook.com">Facebook</a></li>
          <li title="Click here to go to Amazon"><a target="_blank" href="http://amazon.com">Amazon</a></li>
      </ul>

    </div>

    <div class="clearfix"></div>

    <hr>

<div class="myform">
    <form>
        <br>
        <p>First Name: <br> <input required="required"></p>
        <p>Last Name: <br><input></p>
        <p>Email: <br><input type="email" required="required"></p>
        <p>
            <button class="btn btn-dark" type="reset">Reset</button>
            <button class="btn btn-primary" type="submit">Submit</button>
        </p>
        <br>
    </form>
</div>


<hr>
    <table>

        <tr>
            <td></td>
            <td >Across the enterprise</td>
            <td>Within <br> individual <br> business</td>
            <td>Work in progress</td>
            <td>No</td>
        </tr>

        <tr>
            <td>Less than $50m</td>
            <td>30%</td>
            <td>26%</td>
            <td>33%</td>
            <td>10%</td>
        </tr>

        <tr>
            <td>$50m - $2050</td>
            <td>30%</td>
            <td>32%</td>
            <td>32%</td>
            <td>6%</td>
        </tr>

        <tr>
            <td>More than $250</td>
            <td>46%</td>
            <td>27%</td>
            <td>21%</td>
            <td>6%</td>
        </tr>


        <tr>
            <td colspan="5" class="lasttd">Figure 20. Does your organization have a clear digitial business vision and strategry</td>
        </tr>

    </table>



    <hr>

    <img class="myimg" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/BRhEgWLDiqncsmrv/aerial-footage-of-beautiful-dolomites-landscape-golden-evening-light-mountain-scene-of-meadows-and-high-alps-and-mountain-road-with-many-curves_h7a8xuqa_thumbnail-full01.png">

    <hr>

    <br>
    <br>
    <br>
    <br>
</div>


<style>

    .mynav ul{
        list-style: none;
    }

    .mynav ul li{
        float: left;
        margin:10px;
        padding:5px;
        background-color: #008CBA;
        border:1px solid #000;
        text-decoration: none;
    }

    .mynav ul li:hover{
        background-color: #ba4da2;
        cursor: pointer;
        color:white !important;
    }


    a{
        color: white;
        text-decoration: none;
    }

    .myform{
        text-align: center;
        margin: auto;
        width:90%;
        background-color: #dbece5;
    }

    .myimg{
        width:100%;
        border-radius: 20px;
        border:5px dotted #d20000;
    }

    .myimg:hover{
        cursor: pointer;
        box-shadow: 10px 10px 10px 10px;
    }

    body{
        font-family: Verdana;
        font-size: 14px;
    }

    td:first-child{
        background-color: #d1d1d1;
    }

    td:nth-child(2){
        background-color: #8dd172;
    }
    td:nth-child(3){
        background-color: #99e97d;
    }
    td:nth-child(4){
        background-color: #eff1b5;
    }
    td:nth-child(5){
        background-color: #f1cccb;
    }

    table{
        width:100%;
    }

    td{
        margin:5px;
        padding: 5px;
        border: 1px solid #000;
        text-align: center;
    }

    .lasttd{
        text-align: left;
        border:none;
        font-size: 16px;
        color: #5c5c5c;
        font-family: "American Typewriter";
        background-color: #fff !important;
    }

</style>

</body>
</html>
