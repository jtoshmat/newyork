<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div id="myform">
    <form class="form" method="post" action="backend.php">
        <div class="form-group">
            <label class="label" for="formGroupExampleInput">Full Name*</label>
            <input type="text" name="full_name" class="form-control"  id="formGroupExampleInput"
                   placeholder="Full Name">
        </div>
        <div class="form-group">
            <label class="label" for="exampleFormControlTextarea1">Your Comment*</label>
            <textarea class="form-control" placeholder="Your Comment" name="message"
                      id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="bottom">
            <div class="stars bottomleft">
                <label class="label">How would you rate your experience*</label>

                <p class="radios">
                    <label>
                        <input type="radio" name="rating" value="1" checked>
                        <img class="star" data-rating="1"
                             src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
                    </label>
                    <label>
                        <input type="radio" name="rating" value="2" checked>
                        <img class="star" data-rating="2"
                             src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
                    </label>
                    <label>
                        <input type="radio" name="rating" value="3" checked>
                        <img class="star" data-rating="3"
                             src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
                    </label>
                    <label>
                        <input type="radio" name="rating" value="4" checked>
                        <img class="star" data-rating="4"
                             src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
                    </label>
                    <label>
                        <input type="radio" name="rating" value="5" checked>
                        <img class="star" data-rating="5"
                             src="https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png">
                    </label>
                </p>
            </div>
            <div class="ranges bottomright">
                <label class="label rangemargin" for="formControlRange">How Nice Was The Room? - <span
                            id="range1">5</span></label><span class="range_start_number"> 1 </span>
                <input data-id="1" type="range" min="1" name="room_rating" max="5" value="3" class="range"><span
                        class="rangevalue"></span><span class="range_end_number"> 5 </span>
                <label class="label rangemargin" for="formControlRange">How Great Was The Food? - <span
                            id="range2">5</span></label><span class="range_start_number"> 1 </span>
                <input data-id="2" type="range" min="1" name="food_rating" max="5" value="3" class="range"><span
                        class="rangevalue"></span><span class="range_end_number"> 5 </span>
            </div>
        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-primary">Leave Feedback</button>
        <script>
            $(function () {
                $(".star").mouseover(function () {
                    var rating = $(this).data('rating');
                    $(".star").attr("src", 'https://cdn4.iconfinder.com/data/icons/line-icons-2/256/star-512.png');

                    for (var i = 0; i < rating; i++) {
                        $(".star").eq(i).attr("src", 'https://iconsplace.com/wp-content/uploads/_icons/ffa500/256/png/rating-star-icon-11-256.png');
                    }
                });

                $(".range").click(function () {
                    var range = $(this).val();
                    var id = $(this).data('id');
                    $("#range" + id).html(range);
                });
            })
        </script>

    </form>
</div>
</body>
</html>