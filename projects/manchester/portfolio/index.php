<?php
namespace Manchester;
use Database\database;

include_once "../../../inc/database.php";

class MyComments{
    protected  $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST;
        $is_inserting = $this->parms['is_inserting']??false;
        if ($is_inserting){
            return $this->addNewComment();
        }
    }

    public function fetchAllComments(){
        return $this->db->sql("SELECT * FROM comments order by id desc limit 10");
    }

    public function addNewComment(){
        $message = $this->parms['yourmessage']??null;
        $like_option = $this->parms['like_option']??1;
        $sql = "INSERT INTO comments (comment, likes) VALUES ('".$message."', $like_option);";
        $output = $this->db->sql($sql);
    }

}

$obj = new MyComments();
$comments = $obj->fetchAllComments();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Comment</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container-fluid">
    <div class="mycomments">
        <h3 style="text-align: center">My Facebook Comments</h3>
        <hr>
        <ul class="commentslist">

            <?php
            foreach ($comments as $comment) {
                ?>
                <li>
                    <div><img class="profile_photo" src="../../../img/default_photo_cirle_profile.png"></div>
                    <div><?=$comment['comment']?></div>
                    <div class="comment_links">
                        <nav>
                            <a class="like_icon" href="#">Like (<?=$comment['likes']?>) </a> |
                            <a class="dislike_icon" href="#">Dislike (1)</a> |
                            <a href="#">Report (3)</a>
                        </nav>
                    </div>
                </li>
                <?php
            }
            ?>

        </ul>

        <div class="myform">
            <form method="post">
                <p>
                    Your Comments <br>
                    <textarea class="mytextarea" name="yourmessage"></textarea>
                </p>
                <p>
                    <label>Like: </label>
                    <input type="radio" name="like_option" value="1">

                    <label>Dislike: </label>
                    <input type="radio" name="like_option" value="-1">
                </p>
                <p>
                    <input type="hidden" name="is_inserting" value="1">
                    <button type="reset">Reset</button>
                    <button type="submit">Post</button>
                </p>
            </form>
        </div>
    </div>


</div>
</body>
</html>