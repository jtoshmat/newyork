<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="header">
        <h3>Welcome to My Youtube Channel</h3>
            <p>
                Search: <input id="inpkeyword" name="keyword" placeholder="Your keyword">
                <button id="btngo" type="button">Go</button>
            </p>
    </div>

    <div class="results">
        <table id="myresults" class="table table-bordered"></table>
    </div>

</div>
<style>
    .header{
        text-align: center;
    }
    body{
        background-color: darkgreen;
        color: white;
    }
</style>

<script>
    $(function () {
        $("#btngo").click(function () {
            let keyword = $("#inpkeyword").val();
            let data = {'keyword': keyword};
            $.post("backend.php", data, function (output) {
                let results = JSON.parse(output);
                let records = null;
                $.each( results, function( key, value ) {
                   records = value;
                });
                let tr = null;
                $.each( records, function( field, data ) {

                    tr+="<tr>" +
                        "<td><img class='thumbImg' src='"+data['thumbHigh']+"'</td>" +
                        "<td>" +
                        "<div class='myheader'>"+data['title']+"</div>" +
                        "<div class='mytitle'><strong>Channel Name: </strong>"+data['channelTitle']+"</div>" +
                        "<div class='mycount'><strong>Total Views:</strong> "+data['viewCount']+"</div>" +
                        "<div class='mypublished'><strong>Published:</strong> "+data['publishedAt']+"</div>" +
                        "</td>" +


                        "</tr>";

                });

                $("#myresults").html(tr);


            });

        });
    })
</script>
<style>
    .mytitle, .mycount, .mypublished{
        width: 33%;
        display: inline-block;
        font-size: 60%;
        color: #636363;
    }
    table{
        background-color: whitesmoke;
    }
    .thumbImg{
        width: 200px;
    }
</style>
</body>
</html>