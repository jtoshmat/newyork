<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Package</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Travel Package!</h1>
    </div>
    <div class="myform">
        <p>
            <select class="custom-select">
                <option value="">Select Your Destination</option>
                <option value="london">London, England</option>
                <option value="miami">Miami, Florida</option>
                <option value="cairo">Cairo, Egypt</option>
                <option value="dubai">Dubai,UAE</option>
                <option value="samarkand">Samarkand, Uzbekistan</option>
            </select>
        </p>
    </div>
    <div class="description">
        <div class="leftcol">
            <img src="https://4brf13430svm3bnu053zbxvg-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/Ultimate-Travel-Guide-to-London.jpg">
            <img src="https://d3n8a8pro7vhmx.cloudfront.net/icf/pages/285/attachments/original/1461184721/London-England-great-britain.jpg?1461184721">
            <img src="http://www.aljanh.net/data/archive/img/483280179.jpeg">
        </div>
        <div class="rightcol">
            London is the capital of and largest city in England and the United Kingdom, with the largest municipal
            population in the European Union. Standing on the Rive
            <hr>
            London is the capital of and largest city in England and the United Kingdom, with the largest municipal
            population in the European Union. Standing on the Rive
            <hr>
            London is the capital of and largest city in England and the United Kingdom, with the largest municipal
            population in the European Union. Standing on the Rive
        </div>
    </div>
</div>
<style>
    .leftcol {
        width: 49%;
        float: left;
    }

    .leftcol img {
        width: 100%;
        height: 160px;
        margin-bottom: 5px;
        border: 3px double #0c5460;
    }

    .rightcol {
        width: 49%;
        float: left;
        color: #0c5460;
        font-family: "American Typewriter";
        font-size: 16px;
        padding: 5px;
    }

    .description {
        width: 100%;
        height: 500px;
        display: none;
    }
</style>

<script>
    $(function () {
        $(".custom-select").change(function () {
            var city = $(this).val();
            $(".description").delay(600).fadeIn('slow');
            if (city == 'london') {
                $(".leftcol img").eq(0).attr('src', 'https://4brf13430svm3bnu053zbxvg-wpengine.netdna-ssl.com/wp-content/uploads/2018/01/Ultimate-Travel-Guide-to-London.jpg');
                $(".leftcol img").eq(1).attr('src', 'https://d3n8a8pro7vhmx.cloudfront.net/icf/pages/285/attachments/original/1461184721/London-England-great-britain.jpg?1461184721');
                $(".leftcol img").eq(2).attr('src', 'http://www.aljanh.net/data/archive/img/483280179.jpeg');
            } else if (city == 'miami') {
                $(".leftcol img").eq(0).attr('src', 'https://i.ytimg.com/vi/9R1N_ww10wE/maxresdefault.jpg');
                $(".leftcol img").eq(1).attr('src', 'https://static2.mansionglobal.com/production/media/article-images/ba4b3d4ff7e0a92c8bb0c8bbf4de9259/large_GettyImages-764888519.jpg');
                $(".leftcol img").eq(2).attr('src', 'https://www.oyster.com/uploads/sites/35/2019/05/1735-2010-08-northern-beaches.jpg');
            } else if (city == 'cairo') {
                $(".leftcol img").eq(0).attr('src', 'https://www.timeoutabudhabi.com/sites/default/files/tod/images/2018/08/13/Cairo_1.jpg');
                $(".leftcol img").eq(1).attr('src', 'https://www.thoughtco.com/thmb/eKdf3mXTrID8DOhoQSz6XpUikkc=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-200535528-001-5b5ef79146e0fb00256bffbc.jpg');
                $(".leftcol img").eq(2).attr('src', 'https://cdn-img.instyle.com/sites/default/files/styles/1600xflex/public/images/2016/11/110416-egypt-travel-guide-lead.jpg?itok=XV3p9DV3');
            } else if (city == 'dubai') {
                $(".leftcol img").eq(0).attr('src', 'https://www.secretflying.com/wp-content/uploads/2015/06/dubai-1.jpg');
                $(".leftcol img").eq(1).attr('src', 'https://static.dezeen.com/uploads/2016/05/united-arab-emirates-dubai-mountain-dezeen-ban.jpg');
                $(".leftcol img").eq(2).attr('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaZF9zljebAszcUkVW7_ULTHO-S6hYarVS7vNUUkeEQoDlhtTKiQ');
                $(".rightcol").html("Welcome to Dubai!<hr>What is Lorem Ipsum?\n" +
                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..");
            } else if (city == 'samarkand') {
                $(".leftcol img").eq(0).attr('src', 'http://monsoondiaries.com/wp-content/uploads/2016/01/24042130711_4cd671ce94_b-731x457.jpg');
                $(".leftcol img").eq(1).attr('src', 'https://cdn.britannica.com/s:500x350/01/137501-004-3339A658.jpg');
                $(".leftcol img").eq(2).attr('src', 'https://www.advantour.com/img/uzbekistan/samarkand/guri-emir2.jpg');
                $(".rightcol").html("Welcome to Samarkand!<hr>Samarkand is a city in the East.");
            } else {
                alert("Please select your destination");
            }
        });
    });
</script>


</body>
</html>