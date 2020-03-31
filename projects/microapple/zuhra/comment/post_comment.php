<?php
$parms = $_POST;
$post_id = $parms['post_id']??null;
$post_id = (int) $post_id;
$your_comment = $parms['your_comment'];

require_once "../database.php";
$db = new \Database\database();
$create = $db->sql("INSERT INTO comments (post_id, comment) VALUES ($post_id,'$your_comment');");
header("Location: http://newyork.local/projects/microapple/zuhra/comment/comment.php?post_id=$post_id");
exit('Your comment has been successfully posted. Please wait while you are being redirected to your post. Thank you.');
