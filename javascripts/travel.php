<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <title>Travel</title>
</head>
<body>

<div class="container">
    <form>
        <h3>TRAVEL PACKAGE</h3>
        <p>Select Destination:
            <select class="custom-select" id="myselect">
                <option value="">Select your Destination</option>
                <option value="samarkand">Samarkand, Uzbekistan</option>
                <option value="cancun">Cancun, Mexico</option>
                <option value="miami">Miami, Florida</option>
                <option value="maldives">Maldives</option>
                <option value="tashkent">Tashkent, Uzbekistan</option>
            </select>
        </p>
        <br>
        <div id="mybox">
            <div id="photos">
                <img src="https://www.advantour.com/img/uzbekistan/samarkand/samarkand.jpg">
                <img src="https://img.veenaworld.com/group-tours/world/europe/euta/euta-bnn-1.jpg">
            </div>


            <div id="description">
                Samarkand is situated in the valley of the river Zerafshan. It is the second largest city of Uzbekistan
                and is of the same age as the city of Babylon or Rome.
                The history of Samarkand is about 2,750 years old and has witnessed many upheavals during the times of
                Alexander the Great, the Arabic Conquest, Genghis-Khan Conquest and lastly Tamerlane's. Hence, the
                culture of Samarkand was developed and mixed together with the Iranian, Indian, Mongolian and a bit of
                the Western and Eastern cultures.
                Today Samarkand is the treasure of unique antiquity spirit. It is included in the UNESCO World Heritage
                List due to the abundance of material and spiritual values. Unique monuments of ancient architecture,
                heritage of scientific and arts schools, artisans workshops are well-known around the world.
            </div>

        </div>
    </form>

    <div class="mylink" id="mymessage"></div>


</div>



<style>
    #mymessage {
        background-color: #e6ca12;
        padding: 5px;
        border-top: 3px solid black;
        text-align: center;
        display: none;
        cursor: pointer;
    }
    #mybox{
        background-color: #4e98f1;
        width: 100%;
        height: 500px;
        display: none;
    }
    .container {
        background-color: #4e98f1;
        opacity: 0.8;
    }
    #photos{
        width: 49%;
        float: left;
        margin-right: 5px;
    }

    #photos img {
        width: 100%;
        height: 200px;
        border: 1px solid black;
        margin-bottom: 25px;
    }

    #description {
        width: 49%;
        float: left;
        color: #fff;
        font-size: 20px;

    }
    body {
        background-image: url("/img/travelbackground.jpg");
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-size: 100% 100vh;

    }


</style>

<script>
    $(function () {
        $(".custom-select").change(function () {
            var city = $(this).val();

            $("#description").delay(600).fadeIn("slow");


            if (city == 'samarkand') {
                $("#photos img").eq(0).attr('src', 'https://www.wildfrontierstravel.com/media/cache/responsive/hero-1920/upload/d9/f4/d9f4e0615452288bc04f782f3415d35054aa4a54.jpeg?54f755e5');
                $("#photos img").eq(1).attr('src', 'https://img.veenaworld.com/group-tours/world/europe/euta/euta-bnn-1.jpg');
                $("#description").html("<h2>Welcome to Samarkand!</h2><hr>Samarkand is situated in the valley of the river Zerafshan. It is the second largest city of Uzbekistan\n" +
                    "                and is of the same age as the city of Babylon or Rome.\n" +
                    "                The history of Samarkand is about 2,750 years old and has witnessed many upheavals during the times of\n" +
                    "                Alexander the Great, the Arabic Conquest, Genghis-Khan Conquest and lastly Tamerlane's. Hence, the\n" +
                    "                culture of Samarkand was developed and mixed together with the Iranian, Indian, Mongolian and a bit of\n" +
                    "                the Western and Eastern cultures.\n" +
                    "                Today Samarkand is the treasure of unique antiquity spirit. It is included in the UNESCO World Heritage\n" +
                    "                List due to the abundance of material and spiritual values. Unique monuments of ancient architecture,\n" +
                    "                heritage of scientific and arts schools, artisans workshops are well-known around the world.");
                $("#mymessage").delay(800).fadeIn(400).html("Please click here to learn more about Samarkand!").attr('data-url','https://en.wikipedia.org/wiki/Samarkand');


            } else if (city == 'cancun') {
                $("#photos img").eq(0).attr('src', 'https://s-ec.bstatic.com/images/hotel/max1024x768/173/173333316.jpg');
                $("#photos img").eq(1).attr('src', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Cancun001.JPG/2560px-Cancun001.JPG');
                $("#description").html("<h2>Welcome to Cancun!</h2><hr>Mayan-inspired megaresort on Cancún’s widest beach, with all-inclusive dining, four pools and a nine-hole golf course\n" +
                    "\n" +
                    "In the middle of Cancún’s widest beach, a row of modern pyramids look out over the Caribbean and the Nichupte Lagoon. Although it’s massive and cast in " +
                    "concrete, the resort’s Mayan inspiration makes it a striking element of the Hotel Zone beachfront. Inside, an $8 million renovation completed in 2012 has " +
                    "refreshed the restaurants and bars with bold, contemporary looks. By day the setting is tropical: Huge skylights brighten the foyer in each pyramid, and vines" +
                    " cascade over nine stories of balconies. By night, red and purple lights transform the common areas into a club-worthy scene.");
                $("#mymessage").delay(800).fadeIn(400).html("Please click here to learn more about Cancun!").attr('data-url','https://en.wikipedia.org/wiki/Cancun');
            } else if (city == 'miami') {
                $("#photos img").eq(0).attr('src', 'https://cdn.thecrazytourist.com/wp-content/uploads/2016/05/Miami-Beach-1024x655.jpg');
                $("#photos img").eq(1).attr('src', 'http://biginexcursions.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/i/miami_beach_airplane.jpg');
                $("#description").html("<h2>Welcome to Miami!</h2><hr>Miami does not really need an introduction. It is well known across the globe for its " +
                    "glitz and glamor and its beaches and sunny weather. Miami is a city that will capture you with its dazzling glamor and hold you in its spell. The beauty of " +
                    "the city’s nature will also steal your heart from Biscayne Bay and the clear blue South Florida skies.\n" +
                    "\n" +
                    "Miami is glamor first and foremost but spend a little time here and dig a little deeper to see what is under the surface. " +
                    "Or simply go with the flow and indulge in the glamor in true Miami style.");
                $("#mymessage").delay(800).fadeIn(400).html("Please click here to learn more about Miami!").attr('data-url','https://en.wikipedia.org/wiki/Miami');
            } else if (city == 'maldives') {
                $("#photos img").eq(0).attr('src', 'https://pbs.twimg.com/media/DMQN0SXUMAEWPYB.jpg');
                $("#photos img").eq(1).attr('src', 'https://www.arenatours.com/wp-content/uploads/2016/11/meeru-island-resort-and-spa-maldives-8.jpg');
                $("#description").html("<h2>Welcome to Maldives!</h2><hr>Settle in this unparalleled beauty in Maldives as these gorgeous sunset water suites offers " +
                    "you tranquillity in the heart of the Indian Ocean. Spend the holidays in complete serenity making unforgettable memories with your " +
                    "loved ones beside you. The Sunset Water Suites at Lily Beach Resort and Spa offers luxury and five star experience and is a heaven on" +
                    " earth for both ocean and sunset lovers. Let your eyes enjoy what they see in and around these Sunset Water Suites and get the pleasurable " +
                    "experience of waking up in this heavenly paradise.");
                $("#mymessage").delay(800).fadeIn(400).html("Please click here to learn more about Maldives Island!").attr('data-url','https://en.wikipedia.org/wiki/Maldives');

            } else if (city == 'tashkent') {
                $("#photos img").eq(0).attr('src', 'https://dolorestravel.com/wp-content/uploads/2016/12/mytashkent.jpg');
                $("#photos img").eq(1).attr('src', 'http://hilaltravel.uz/images/sampledata/17-02-2018-09.jpg');
                $("#description").html("<h2>Welcome to Tashkent!</h2><hr>Tashkent, the capital of Uzbekistan, is the largest city in Central Asia with regard to area and population. Its history stretches back more than 2200 years.\n" +
                    "\n" +
                    "The city was called as Chach, Shash, Shashkent, and Binkat. After the conquest of the Arab Muslims in the 7th century, the city was renamed Madinat ash-Shash.\n" +
                    "\n" +
                    "A large number of mosques, madrasahs and historical shrines survive to this day and still serve as places of worship and religious education.\n" +
                    "\n" +
                    "A wide range of great scholars lived here, including Khoja Akhrar Vali, Sheikh Umar Baghistani, Abu Bakr Qaffal Shashi, Abu Sulaiman Banakati, and Hafiz Kuhaki.\n" +
                    "\n" +
                    "The Islamic Educational, Scientific and Cultural Organization (ISESCO), one of the OIC specialized institutions, announced Tashkent a capital of the Islamic culture in 2007.");
                $("#mymessage").delay(800).fadeIn(400).html("Please click here to learn more about Tashkent!").attr('data-url','https://en.wikipedia.org/wiki/Tashkent');
            } else {
                alert("Please select your destination!")
            }


                // var mymessage, mymessage1; .....

            $("#mybox").fadeIn("slow");


            $("#mymessage").click(function () {
                //get the data-url from the #message first
                var url = $(this).attr('data-url');
                if (takeof url == 'undifined' || url == '') {
                    return false;
                }
                document.location = url;

            });


        });
    });

</script>

</body>
</html>
