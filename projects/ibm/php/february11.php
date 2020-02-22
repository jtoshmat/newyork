<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div id="myform">
<form class="form" method="post" action="february11_backend.php">
    <p><label>Full Name: </label></p>
    <p><input required="required" name="full_name" type="text" placeholder="Full Name"></p>

    <p><label>Your Comment:</label><br>
        <textarea name="message" placeholder="Your comment" required="required"></textarea>
    </p>

    <p class="radios">

        <label>
            <input type="radio" name="rating" value="1" checked>
            <img class="star" data-rating="1" src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
        </label>
        <label>
            <input type="radio" name="rating" value="2" checked>
            <img class="star" data-rating="2" src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
        </label>
        <label>
            <input type="radio" name="rating" value="3" checked>
            <img class="star" data-rating="3" src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
        </label>
        <label>
            <input type="radio" name="rating" value="4" checked>
            <img class="star" data-rating="4" src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
        </label>
        <label>
            <input type="radio" name="rating" value="5" checked>
            <img class="star" data-rating="5" src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
        </label>

    </p>

    <p>
        <button>Submit</button>
    </p>


    <script>
        $(function () {
        $(".star").mouseover(function () {
            var rating = $(this).data('rating');
            $(".star").attr("src", 'https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png');

            for(var i=0; i<rating; i++) {
                $(".star").eq(i).attr("src", 'https://iconsplace.com/wp-content/uploads/_icons/ffa500/256/png/rating-star-icon-11-256.png');
            }
        });
        })
    </script>

</form>
</div>
</body>
</html>