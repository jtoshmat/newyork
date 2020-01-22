<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div style="height: 70px;"></div>
    <div class="mytable">
        <table class="table table-bordered">
            <tr>
                <th>&nbsp;</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
        </table>
    </div>



</div>

<style>



    tr:first-child th:first-child{
        background-color: white;
    }
    tr:first-child th:nth-child(2),
    tr:nth-child(2) td:nth-child(1),
    tr:nth-child(3) td:nth-child(2),
    tr:nth-child(4) td:nth-child(3),
    tr:nth-child(5) td:nth-child(4)
    {
        background-color: pink;
    }

    tr:first-child th{
        background-color: red;
    }

    .mytable{
        background-color: #d4d4d4;
        width:80%;
        margin: auto;
    }
</style>

</body>
</html>