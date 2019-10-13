<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
<<<<<<< HEAD
    <title>Welcome to Brooklyn</title>
=======
    <title>Travel Package</title>
>>>>>>> b1ea42110097febf5599c8f4bfd5a0b7460532c2
=======
    <title>Welcome to Brooklyn</title>
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea

    <p>
        <input class="input-group-lg">
        <img src="https://www.freepngimg.com/thumb/search_button/25400-2-search-button-transparent-image-thumb.png">
    </p>
    <div class="photoalbum">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8712eda4-27c8-4e50-8b39-36d7224ba4ad/d9s2wkw-82a953df-c3c4-4c00-961f-8baa2309c88f.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg3MTJlZGE0LTI3YzgtNGU1MC04YjM5LTM2ZDcyMjRiYTRhZFwvZDlzMndrdy04MmE5NTNkZi1jM2M0LTRjMDAtOTYxZi04YmFhMjMwOWM4OGYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.RvFBYc415wsYOdaY9d7vGrx6tYwfqhwbIsnp0XBnA20">
        <img src="http://1st-dating-tips.com/wp-content/uploads/2018/06/my-Ukrainian-girl-.jpg">
        <img src="https://i.pinimg.com/originals/7f/0c/21/7f0c210245a5fc5f797bbf2951ed7de5.jpg">
    </div>

    <div class="mybuttons">
        <button class="btn btn-primary mybtn">SWAP IMAGE</button>
    </div>

</div>
<style>
    .mybuttons{
        text-align: center;
    }

    .photoalbum img {
        width: 150px;
        height: 120px;
        float: left;
        margin:5px;
        cursor: pointer;
    }
    .photoalbum img:first-child{
        border:5px dotted #f00;
    }
    .photoalbum img:nth-child(2) {
        border:5px dotted #11edff !important;
    }
    .photoalbum img:last-child{
        border:5px dotted #ffc059;
    }
</style>
<script>

    var random_number = Math.round(Math.random() * 10);

    var images = [
        "https://qph.fs.quoracdn.net/main-qimg-65f4e1cd204afc7608e819279fd984f8-c",
        "https://qph.fs.quoracdn.net/main-qimg-5836ce277bf54c48d80d96b8cfbc2688.webp",
        "https://qph.fs.quoracdn.net/main-qimg-5644ff300cfd6d3301f2c559cdaa2a81",
        "http://1st-dating-tips.com/wp-content/uploads/2018/06/my-Ukrainian-girl-.jpg",
        "https://frenchgirldaily.com/wp-content/uploads/2018/10/Louise-Follain-Polaroids-for-Ford-Models-French-Girl-Beauty-Guide.jpg"];

    $(function () {
        $(".mybtn").click(function () {
           var uzbek = $(".photoalbum img").eq(0).attr("src");
           var african = $(".photoalbum img").eq(2).attr("src");
            $(".photoalbum img").eq(0).attr("src", african);
            $(".photoalbum img").eq(1).attr("src", images[3]);
            $(".photoalbum img").eq(2).attr("src", uzbek);

            console.log(random_number);
        });
<<<<<<< HEAD
=======
    <div claas="header">
        <h1>Travel Package!</h1>
    </div>
    <div class="myform">
        <p>
            <select class="custom-select">
                <option value="">Select Your Destination</option>
                <option value="london">London</option>
                <option value="miami">Miami, Florida</option>
                <option value="cairo">Egypt, Cairo</option>
                <option value="dubai">Dubai, UAE</option>
                <option value="samarkand">Samarkand</option>
            </select>
        </p>
    </div>
    <div class="description">
        <div class="leftcol">
            <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/91E5/production/_107894373_25bcc744-ad7a-44c5-9c45-463114a6a2cd.jpg">
            <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlk3SDo4o9UGhmmEpN-OZEqNKvqdpWpqjUvSr4jTJc5ULYhl3y">
            <img src="https://static.amazon.jobs/locations/16/thumbnails/London_-_Thumbnail.jpg?1454177703">
        </div>
        <div class="rightcol">
            London is considered to be one of the world's most important global cities and has been termed
            the world's most powerful, most desirable.
            <hr>
            London is considered to be one of the world's most important global cities and has been termed
            the world's most powerful, most desirable.
            <hr>
            London is considered to be one of the world's most important global cities and has been termed
            the world's most powerful, most desirable.
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
        margin-bottom: 6px;
        border: 3px double #0b2e13;
        height: 100%;
    }

    .rightcol {

        width: 49%;
        float: left;
        color: #0b18ff;
        font-family: "American Typewriter";
        font-size: 16px;
        padding: 5px;

    }


    .description {

        width: 100%;
        height: 450px;
        display: none;

    }


</style>

<script>
    $(function(){

        $(".custom-select").change(function () {
            var city =$(this).val();
            $(".description").fadeIn('slow');

        if (city == 'miami'){

                    $(".leftcol img").eq(0).attr('src','https://www.visitflorida.com/content/dam/visitflorida/en-us/images/cities/miami/Matheson%20Hammock%20Park%20Inlet%2010-17-2018%20%28Trevor%20Green%29.jpg.1280.500.rendition');
                    $(".leftcol img").eq(1).attr('src',' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRss1vQ79kgsnpL2XUotZnRyrREJtyyVm98YmYp-oQGscxqlepOxQ');
                    $(".leftcol img").eq(2).attr('src','https://drivesaversdatarecovery.com/wp-content/uploads/2017/07/PR-DRIVESAVERS-ANNOUNCES-NEW-DROP-OFF-LOCATION-IN-MIAMI-FLORIDA.jpg');
        }
            else if (city == 'london') {

            $(".leftcol img").eq(0).attr('src','https://ichef.bbci.co.uk/news/660/cpsprodpb/91E5/production/_107894373_25bcc744-ad7a-44c5-9c45-463114a6a2cd.jpg');
            $(".leftcol img").eq(1).attr('src',' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlk3SDo4o9UGhmmEpN-OZEqNKvqdpWpqjUvSr4jTJc5ULYhl3y');
            $(".leftcol img").eq(2).attr('src','https://static.amazon.jobs/locations/16/thumbnails/London_-_Thumbnail.jpg?1454177703');

            }

            else if (city == 'cairo'){
            $(".leftcol img").eq(0).attr('src','https://www.timeoutabudhabi.com/sites/default/files/tod/images/2018/08/13/Cairo_1.jpg');
            $(".leftcol img").eq(1).attr('src','http://3tsll33cscvk11pae33oze51-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/cairo-first-time-visit-city-view.png');
            $(".leftcol img").eq(2).attr('src','https://i.pinimg.com/originals/57/df/bd/57dfbd298cc99138d99b95b0b45feea0.jpg');

        }
            else if (city == 'dubai'){
            $(".leftcol img").eq(0).attr('src','https://img.theweek.in/content/dam/week/webworld/youzone/Triptease/2018/February/dubai-skyline.jpg');
            $(".leftcol img").eq(1).attr('src','https://cdn.newsapi.com.au/image/v1/975be4700ff6494f2d2a6ca36b1c92dd');
            $(".leftcol img").eq(2).attr('src','https://ichef.bbci.co.uk/images/ic/720x405/p07jd444.jpg');
            $(".rightcol").html("Welcome to Dubai!<hr> Dubai is a beautiful city");


        }
            else if (city == 'samarkand'){
            $(".leftcol img").eq(0).attr('src','https://upload.wikimedia.org/wikipedia/commons/0/00/Registan_square_Samarkand.jpg');
            $(".leftcol img").eq(1).attr('src',' https://cdn.audleytravel.com/-/-/79/1331477-samarkanduzbekistan.jpg');
            $(".leftcol img").eq(2).attr('src','https://cdn.audleytravel.com/-/-/79/1323355-registan-square-samarkand.jpg');
            $(".rightcol").html("Welcome to Samarkand!<hr> Samarkand is a city in the East");

        }
            else {
                alert("Please select your destination");
        }




    });
>>>>>>> b1ea42110097febf5599c8f4bfd5a0b7460532c2
=======
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea
    });


</script>

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea
</body>
</html>


<<<<<<< HEAD
=======



</body>
</html>
>>>>>>> b1ea42110097febf5599c8f4bfd5a0b7460532c2
=======
>>>>>>> ae6fb802820e9e03f7637d05b89e0b9dd0d96cea
