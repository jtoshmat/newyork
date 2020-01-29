<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to IBM!</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="leftbox">
        <div class="mylogo">
            <img src="img/route66.png">
            <br>
            <span>ROUTE<br>66</span>
        </div>
        <div class="mytext">
            Take a nostalgic trip down America's Mother Road and see exciting historic sites and stops along the way.
        </div>
        <div style="height: 30px"></div>
        <div class="mytext2">
            Berwyn, Boolingbrook, Braidwood, Broadview, Burr Ridge, Channahon, Countryside, Crest Hill, Dwight, Elwood, Gradner, Hodgkins, Indian Head Park, Joilet, La Grange, Lemont, Lyons, Manhtattan, McCook, Plainfield, Pontiac, Romeoville, Shorewood, Willowbrook, Wilmington
        </div>
        <div style="height: 30px;"></div>
        <div class="mytext3">
            <h3>Description</h3>
            <p>
                The historic <strong>Route 66</strong> begins in Chicago and works it's way westward through the northeast corner of the I&M Canal Heritage Corridor. In this area of the Coriddor you will find unique Route 66 diners, museums, attractions and more that make Route 66 a truly American classic destination
            </p>
        </div>
    </div>
    <div class="rightbox">
        <table class="table">
            <tr>
                <td class="td1">
                    <h3>1926</h3>
                    <span>year that Route 66 was established</span>
                </td>
                <td class="td2">
                    <h3>12</h3>
                    <span>miles of Route 66 in Illinois</span>
                </td>

            </tr>

            <tr>
                <td class="td1">
                    <h3>2</h3>
                    <span>year that Route 66 was established</span>
                </td>
                <td class="td2">
                    <h3>300</h3>
                    <span>interprative kiosks</span>
                </td>
            </tr>

            <tr>
                <td class="td1">
                    <h3>30FT</h3>
                    <span>height of the Gemeni Giant in Wilmington, IL</span>
                </td>
                <td class="td2">
                    <h3>$20.3M</h3>
                    <span>1926's cost of building Rialto Square Theatre</span>
                    <span>(adjusted for inflation)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="last_td">
                    <img src="img/route66b.png">
                </td>
            </tr>

        </table>
    </div>
</div>
<style>
td span{
    color: black;
}
    tr:nth-child(1) td:nth-child(1){
        color:red;
    }
    tr:nth-child(2) td:nth-child(2){
        color:red;
    }
    tr:nth-child(3) td:nth-child(1){
        color:red;
    }

    tr:nth-child(even){
        background-color: #f0f0f0;
    }


    td{
        text-align: center;
    }
    .td2 h3{
        font-size: 40px;
        font-weight: bolder;
    }

    .td1 h3{
        font-size: 40px;
        font-weight: bolder;
    }

    .mytext3{
        font-style: italic;
        font-size: 20px;
        color:#f5d7c1;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .mytext2{
        font-style: italic;
        font-size: 15px;
        color:#f5d7c1;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .mytext{
        font-style: italic;
        font-size: 20px;
        color:#f5d7c1;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .mylogo span{
        font-size: 30px;
        color:white;
        font-family: "American Typewriter";
        font-weight: bolder;
    }
    .mylogo{
        text-align: center;
        margin-top: 20px;
    }
    .mylogo img{
        width: 100px;
    }
    .leftbox{
        background-color: red;
        width:40%;
        float: left;
        height: auto;
    }
    .rightbox{
        background-color: #ffffff;
        width: 60%;
        float: right;
        height: auto;
    }
</style>
</body>
</html>