<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Brooklyn</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container">

    <p>
        <input class="input-group-lg">
        <img src="https://www.freepngimg.com/thumb/search_button/25400-2-search-button-transparent-image-thumb.png">
    </p>

    <div class="photoalbum">

            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8712eda4-27c8-4e50-8b39-36d7224ba4ad/d9s2wkw-82a953df-c3c4-4c00-961f-8baa2309c88f.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg3MTJlZGE0LTI3YzgtNGU1MC04YjM5LTM2ZDcyMjRiYTRhZFwvZDlzMndrdy04MmE5NTNkZi1jM2M0LTRjMDAtOTYxZi04YmFhMjMwOWM4OGYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.RvFBYc415wsYOdaY9d7vGrx6tYwfqhwbIsnp0XBnA20">

            <img src="http://1st-dating-tips.com/wp-content/uploads/2018/06/my-Ukrainian-girl-.jpg">

            <img src="https://i.pinimg.com/originals/7f/0c/21/7f0c210245a5fc5f797bbf2951ed7de5.jpg">
            <img src="https://qph.fs.quoracdn.net/main-qimg-65f4e1cd204afc7608e819279fd984f8-c">
            <img src="https://qph.fs.quoracdn.net/main-qimg-5836ce277bf54c48d80d96b8cfbc2688.webp">
            <img src="https://qph.fs.quoracdn.net/main-qimg-5644ff300cfd6d3301f2c559cdaa2a81">
            <img src="https://s2.best-wallpaper.net/wallpaper/2880x1800/1902/Indian-girl-fashion-hairstyle-necklace-earring_2880x1800.jpg">
            <img src="https://frenchgirldaily.com/wp-content/uploads/2018/10/Louise-Follain-Polaroids-for-Ford-Models-French-Girl-Beauty-Guide.jpg">
<br>
     <div class="mybuttons">
        <button class="btn btn-primary mybtn">SWAP PICTURE</button>
     </div>

</div>

<style>

    .photoalbum img {
        width: 200px;
        height: 180px;
        float: left;
        margin: 5px;
        cursor: pointer;
    }
    .photoalbum img:first-child{
       border: 5px dotted #ff0000;
        border-radius: 90px;
    }
    .photoalbum img:nth-child(2){
        border: 5px dotted #e0a800;
        border-radius: 90px;
    }
    .photoalbum img:nth-child(3){
        border: 5px dotted #361b5e;
        border-radius: 90px;
    }
    .mybuttons{
        text-align: center;
    }



</style>


<script>
    var random_number = Math.round(Math.random()*10);
    var images = [
        "https://qph.fs.quoracdn.net/main-qimg-65f4e1cd204afc7608e819279fd984f8-c",
        "https://qph.fs.quoracdn.net/main-qimg-5836ce277bf54c48d80d96b8cfbc2688.webp",
       "https://qph.fs.quoracdn.net/main-qimg-5644ff300cfd6d3301f2c559cdaa2a81",
        "https://s2.best-wallpaper.net/wallpaper/2880x1800/1902/Indian-girl-fashion-hairstyle-necklace-earring_2880x1800.jpg",
        "https://frenchgirldaily.com/wp-content/uploads/2018/10/Louise-Follain-Polaroids-for-Ford-Models-French-Girl-Beauty-Guide.jpg"];


    $(function () {
        $(".mybtn").click(function () {
         var uzbek = $(".photoalbum img").eq(0).attr("src");
         var african = $(".photoalbum img").eq(2).attr("src");


         $(".photoalbum img").eq(0).attr("src", african);
         $(".photoalbum img").eq(1).attr("src", images[3]);
         $(".photoalbum img").eq(2).attr("src", uzbek);



        })

    })




</script>

</body>
</html>

